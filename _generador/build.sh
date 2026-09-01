#!/usr/bin/env bash
# =============================================================================
#  Generador del tema Caissa 2026
#
#  Convierte las paginas HTML autonomas del repo Caissa-Nueva-Web-2026 en el tema
#  de WordPress. Es una reimplementacion del generador original (que NO viajaba
#  con el ZIP del tema): se dedujo del tema 1.08 y se valido reproduciendo sus 18
#  plantillas BYTE A BYTE -- CSS, JS, <main> y JSON-LD, las cuatro cosas.
#
#  Uso:  ./build.sh <dir-repo> <dir-tema-anterior> <dir-salida> <version>
#
#  Requisitos: bash, gawk, sed, sha1sum. NO necesita python, node ni php.
#
#  QUE SE GENERA Y QUE NO
#    Generado:  assets/css/*, assets/js/tpl-*.js, page-templates/*,
#               inc/variantes.php, inc/fuentes.php, inc/bloques.php
#    Del tema:  header/footer/functions, inc/{setup,enqueue,limpieza,nav,parts,blog}.php,
#               el blog entero, assets/fonts, assets/img, base.js, blog.css/js
# =============================================================================
set -euo pipefail

REPO="${1:?falta el directorio del repo}"
SKEL="${2:?falta el tema anterior}"
OUT="${3:?falta el directorio de salida}"
VER="${4:?falta la version}"
HERE="$(cd "$(dirname "$0")" && pwd)"
W="$(mktemp -d)"; trap 'rm -rf "$W"' EXIT
msg(){ printf '  %s\n' "$*"; }
die(){ printf 'ERROR: %s\n' "$*" >&2; exit 1; }
TSV="$HERE/paginas.tsv"

# --- 1. Esqueleto ------------------------------------------------------------
msg "1/9  esqueleto (lo que no se genera sale del tema $(grep -m1 'Version:' "$SKEL/style.css" | tr -d ' ' | cut -d: -f2))"
rm -rf "$OUT"; mkdir -p "$OUT"/{inc,page-templates,template-parts,assets/css,assets/js,assets/fonts,assets/img}
for f in 404.php archive.php home.php index.php page.php search.php single.php \
         functions.php header.php footer.php style.css screenshot.png; do cp "$SKEL/$f" "$OUT/$f"; done
for f in setup.php enqueue.php limpieza.php nav.php parts.php blog.php; do cp "$SKEL/inc/$f" "$OUT/inc/$f"; done
cp "$SKEL"/template-parts/*.php "$OUT/template-parts/"
cp "$SKEL"/assets/fonts/* "$OUT/assets/fonts/"
cp -r "$SKEL"/assets/img/. "$OUT/assets/img/"
cp "$SKEL/assets/css/blog.css" "$OUT/assets/css/"
cp "$SKEL/assets/js/base.js" "$SKEL/assets/js/blog.js" "$OUT/assets/js/"
# LEEME.md y CHANGELOG.md son documentacion escrita a mano, no generada: viven en
# _generador/docs/ y se copian aca. Antes vivian solo dentro del tema y el rm -rf
# del paso 1 se las llevaba en cada regeneracion.
cp "$HERE/docs/LEEME.md" "$HERE/docs/CHANGELOG.md" "$OUT/"

# --- 2. Extraer bloques ------------------------------------------------------
msg "2/9  extraer bloques <style> y <script>"
mkdir -p "$W/sty" "$W/js"
while IFS=$'\t' read -r rel slug nombre lang pre; do
  [ -z "${rel:-}" ] && continue
  [ -f "$REPO/$rel" ] || die "no existe $REPO/$rel"
  mkdir -p "$W/sty/$slug" "$W/js/$slug"
  gawk -v RS='\x01' -v OUTDIR="$W/sty/$slug" -f "$HERE/styles.awk"  "$REPO/$rel"
  gawk -v RS='\x01' -v OUTDIR="$W/js/$slug"  -f "$HERE/scripts.awk" "$REPO/$rel"
done < "$TSV"

# --- 3. Clasificar el CSS ----------------------------------------------------
#  fuentes  -> inc/fuentes.php (inline en el <head>, pesa 1,3 KB)
#  chasis   -> assets/css/<nombre>.css, compartido, encolado ANTES del tpl
#  el resto -> assets/css/tpl-<slug>.css, EN EL ORDEN ORIGINAL DEL DOCUMENTO.
#
#  Un bloque compartido solo se extrae a archivo si en TODAS sus paginas aparece
#  antes del primer bloque propio de esa pagina. La pasada de densidad mobile no
#  cumple eso (va despues), asi que se DUPLICA dentro de cada tpl-*.css: tiene que
#  ganar la cascada, porque cada landing redefine sus tarjetas despues del design
#  system y con la misma especificidad.
msg "3/9  clasificar CSS"
: > "$W/blocks.txt"
while IFS=$'\t' read -r rel slug nombre lang pre; do
  [ -z "${slug:-}" ] && continue
  n=$(cat "$W/sty/$slug/COUNT")
  for i in $(seq 1 "$n"); do
    printf '%s\t%02d\t%s\n' "$(sha1sum "$W/sty/$slug/$(printf '%02d' "$i").css" | cut -c1-12)" "$i" "$slug" >> "$W/blocks.txt"
  done
done < "$TSV"
cut -f1 "$W/blocks.txt" | sort | uniq -c | awk '{print $2"\t"$1}' > "$W/counts.txt"

nombre_chasis(){
  local f="$1"
  # OJO con el orden: el bloque de /carreras/ y el de los perfiles TAMBIEN
  # dicen "HERO INSTITUCIONAL" (reusan el hero .inst de /equipo/), asi que
  # sus firmas van ANTES que la del chasis institucional o se los come.
  grep -q 'CSS PROPIO DE /carreras/'          "$f" && { echo vacantes;      return; }
  grep -q 'CSS propio de /equipo/<persona>/'  "$f" && { echo perfiles;      return; }
  grep -q 'Cada landing tiene su temperatura' "$f" && { echo industrias;    return; }
  grep -q 'HERO propio: H1 chico como kicker' "$f" && { echo landing;       return; }
  grep -q -- '--ink:#10143A'                  "$f" && { echo base;          return; }
  grep -q 'HERO INSTITUCIONAL'                "$f" && { echo institucional; return; }
  echo ""
}

FONTS_HASH=""
while IFS=$'\t' read -r rel slug nombre lang pre; do
  [ -z "${slug:-}" ] && continue
  f="$W/sty/$slug/01.css"
  grep -q '@font-face' "$f" || die "$slug: el bloque 01 no es el de @font-face"
  h=$(sha1sum "$f" | cut -c1-12)
  [ -z "$FONTS_HASH" ] && FONTS_HASH="$h"
  [ "$h" = "$FONTS_HASH" ] || die "$slug: el bloque @font-face difiere del de las otras paginas"
done < "$TSV"

: > "$W/chasis.txt"
for h in $(cut -f1 "$W/blocks.txt" | sort -u); do
  [ "$h" = "$FONTS_HASH" ] && continue
  c=$(awk -F'\t' -v H="$h" '$1==H{print $2}' "$W/counts.txt")
  [ "${c:-1}" -lt 2 ] && continue
  ok=1
  while IFS=$'\t' read -r hh idx sl; do
    [ "$hh" = "$h" ] || continue
    primero=$(awk -F'\t' -v S="$sl" 'NR==FNR{cnt[$1]=$2;next} $3==S && cnt[$1]==1 {print $2; exit}' "$W/counts.txt" "$W/blocks.txt")
    if [ -n "$primero" ] && [ "$((10#$idx))" -gt "$((10#$primero))" ]; then ok=0; fi
  done < "$W/blocks.txt"
  if [ "$ok" = "1" ]; then
    f=$(awk -F'\t' -v H="$h" '$1==H{print $3"/"$2".css"; exit}' "$W/blocks.txt")
    nm=$(nombre_chasis "$W/sty/$f")
    [ -z "$nm" ] && die "chasis sin firma conocida ($h, $(wc -c <"$W/sty/$f") B, x$c). Agregale una firma a nombre_chasis()."
    printf '%s\t%s\n' "$h" "$nm" >> "$W/chasis.txt"
  fi
done
dups=$(cut -f2 "$W/chasis.txt" | sort | uniq -d)
[ -n "$dups" ] && die "dos bloques de chasis distintos recibieron el mismo nombre ($dups). Revisa el orden de las firmas en nombre_chasis()."
msg "     chasis compartido:$(awk -F'\t' '{printf " %s", $2}' "$W/chasis.txt")"

# --- 4. Escribir el CSS ------------------------------------------------------
msg "4/9  CSS"
while IFS=$'\t' read -r h nm; do
  f=$(awk -F'\t' -v H="$h" '$1==H{print $3"/"$2".css"; exit}' "$W/blocks.txt")
  cp "$W/sty/$f" "$OUT/assets/css/$nm.css"
done < "$W/chasis.txt"

: > "$W/cssdeps.tsv"
while IFS=$'\t' read -r rel slug nombre lang pre; do
  [ -z "${slug:-}" ] && continue
  n=$(cat "$W/sty/$slug/COUNT"); cadena=""; : > "$W/lista"
  for i in $(seq 1 "$n"); do
    f="$W/sty/$slug/$(printf '%02d' "$i").css"
    h=$(sha1sum "$f" | cut -c1-12)
    [ "$h" = "$FONTS_HASH" ] && continue
    nm=$(awk -F'\t' -v H="$h" '$1==H{print $2; exit}' "$W/chasis.txt")
    if [ -n "$nm" ]; then cadena="$cadena $nm"; else echo "$f" >> "$W/lista"; fi
  done
  # Regla de espaciado del generador original, reproducida: los bloques van unidos
  # por un salto de linea, y si la plantilla aporta uno solo el archivo arranca con
  # un salto suelto. Verificado byte a byte contra las 18 plantillas del tema 1.08.
  cnt=$(wc -l < "$W/lista"); : > "$W/tpl.css"
  [ "$cnt" -eq 1 ] && printf '\n' >> "$W/tpl.css"
  k=0
  while read -r f; do k=$((k+1)); [ "$k" -gt 1 ] && printf '\n' >> "$W/tpl.css"; cat "$f" >> "$W/tpl.css"; done < "$W/lista"
  cat "$HERE/blindaje.css" >> "$W/tpl.css"
  cp "$W/tpl.css" "$OUT/assets/css/tpl-$slug.css"
  printf '%s\t%s\n' "$slug" "$(echo $cadena)" >> "$W/cssdeps.tsv"
done < "$TSV"

# --- 5. JS -------------------------------------------------------------------
#  Cada pagina trae 1 o 2 bloques JSON-LD, despues el JS principal, y algunas un
#  script extra (la conversion de Google Ads, el inyector de Typeform).
#  El JS principal arranca con el IIFE del menu del HTML original (1.498 bytes,
#  identico en todas). Ese prefijo NO se copia: lo reemplaza assets/js/base.js,
#  que es la version reescrita para WordPress (querySelectorAll en vez de
#  querySelector, porque el menu del cliente puede tener varios desplegables).
msg "5/9  JS"
PREFIJO=1498
: > "$W/extras.tsv"
while IFS=$'\t' read -r rel slug nombre lang pre; do
  [ -z "${slug:-}" ] && continue
  d="$W/js/$slug"
  # indices de los bloques JSON-LD y de los inline
  gawk -F'\t' '$2 ~ /ld\+json/{print $1}'  "$d/ATTRS" > "$W/ld.idx"
  gawk -F'\t' '$2 !~ /ld\+json/{print $1}' "$d/ATTRS" > "$W/in.idx"
  [ -s "$W/in.idx" ] || die "$slug: no encontre el bloque de JS principal"
  main=$(head -1 "$W/in.idx")
  f="$d/$(printf '%02d' "$main").js"
  [ "$(head -c $PREFIJO "$f" | sha1sum | cut -c1-10)" = "76e6dda544" ] \
    || die "$slug: el prefijo del menu no coincide. Si el HTML cambio el IIFE del menu, hay que rehacer base.js a mano."
  tail -c +$((PREFIJO+1)) "$f" > "$OUT/assets/js/tpl-$slug.js"
  # scripts extra (los que no son el principal): se conservan INLINE en la plantilla
  tail -n +2 "$W/in.idx" | while read -r i; do echo "$slug	$i" >> "$W/extras.tsv"; done
done < "$TSV"

# --- 6. Plantillas de pagina -------------------------------------------------
#  El contenido es el que va entre </header> y <footer>, verbatim, con las rutas
#  de assets reescritas a <?php echo CAISSA_IMG; ?>/... Las 18 paginas que ya
#  traian <main> lo conservan; las tres nuevas no lo tenian y se les agrega, para
#  que las 21 tengan el landmark (ninguna regla CSS depende de la jerarquia).
msg "6/9  plantillas"
while IFS=$'\t' read -r rel slug nombre lang pre; do
  [ -z "${slug:-}" ] && continue
  dir="$(dirname "$rel")"; [ "$dir" = "." ] && dir=""
  T="$OUT/page-templates/tpl-$slug.php"
  {
    printf '<?php\n/**\n * Template Name: %s\n *\n' "$nombre"
    printf ' * Migrada desde %s del repo Caissa-Nueva-Web-2026.\n' "$rel"
    printf ' * El head, el nav y el footer los pone el tema (header.php / footer.php).\n'
    printf ' * El CSS y el JS de esta plantilla se encolan desde inc/enqueue.php.\n *\n'
    printf ' * @package Caissa\n */\n\nget_header();\n?>\n'
  } > "$T"
  # JSON-LD (uno o varios), todos bajo la misma guarda
  if [ -s "$W/js/$slug/ATTRS" ] && gawk -F'\t' '$2 ~ /ld\+json/' "$W/js/$slug/ATTRS" | grep -q .; then
    echo '<?php if ( CAISSA_SCHEMA_PROPIO ) : ?>' >> "$T"
    gawk -F'\t' '$2 ~ /ld\+json/{print $1}' "$W/js/$slug/ATTRS" | while read -r i; do
      printf '<script type="application/ld+json">' >> "$T"
      cat "$W/js/$slug/$(printf '%02d' "$i").js" >> "$T"
      printf '</script>\n' >> "$T"
    done
    echo '<?php endif; ?>' >> "$T"
  fi
  # contenido. Las 18 paginas que ya traian <main> se copian con ese elemento tal
  # cual esta en el HTML; las tres nuevas no lo tenian y se les agrega, para que las
  # 21 tengan el landmark (se verifico que ninguna regla CSS depende de la jerarquia).
  # notas.awk saca los <p class="legal-nota">, que son notas internas del equipo.
  if grep -q '<main>' "$REPO/$rel"; then
    gawk -v RS='\x01' -v A='<main>' -v B='</main>' -f "$HERE/between.awk" "$REPO/$rel" \
      | gawk -v RS='\x01' -v DIR="$dir" -f "$HERE/imgpaths.awk" \
      | gawk -f "$HERE/notas.awk" >> "$T"
  else
    printf '<main>\n\n' >> "$T"
    gawk -v RS='\x01' -v A='</header>' -v B='<footer>' -f "$HERE/inner.awk" "$REPO/$rel" \
      | gawk -v RS='\x01' -v DIR="$dir" -f "$HERE/imgpaths.awk" \
      | gawk -f "$HERE/notas.awk" \
      | gawk -v RS='\x01' '{gsub(/^[ \n\t]+|[ \n\t]+$/,""); printf "%s", $0}' >> "$T"
    printf '\n\n</main>' >> "$T"
  fi
  # scripts extra, inline, justo despues del contenido
  if grep -q "^$slug	" "$W/extras.tsv" 2>/dev/null; then
    awk -F'\t' -v S="$slug" '$1==S{print $2}' "$W/extras.tsv" | while read -r i; do
      printf '\n<script>' >> "$T"
      cat "$W/js/$slug/$(printf '%02d' "$i").js" >> "$T"
      printf '</script>\n' >> "$T"
    done
  fi
  printf "\n\n<?php\nget_footer();" >> "$T"
done < "$TSV"

# --- 7. inc/fuentes.php y inc/bloques.php ------------------------------------
msg "7/9  inc/fuentes.php + inc/bloques.php"
# fuentes: se toma el bloque @font-face del HTML y solo se le reescriben las URLs
#          (/fonts/ en el repo -> assets/fonts/ en el tema).
{
cat <<'PHP'
<?php
/**
 * GENERADO por el builder: las @font-face autohospedadas.
 *
 * Salen del HTML del repo, que ya trae las fuentes (fonts/*.woff2). Lo unico que se
 * reescribe son las URLs: el repo apunta a /fonts/ (raiz del dominio) y en el tema
 * viven en assets/fonts/.
 *
 * Van INLINE y no como archivo: pesan 1,3 KB, asi que una peticion aparte costaria
 * mas que el ahorro. Se precarga solo plus-jakarta-sans-v12-latin.woff2, que es el
 * texto de la pagina; las demas entran con font-display:swap cuando llegan.
 *
 * Plus Jakarta Sans es una fuente VARIABLE: un archivo cubre todos los pesos.
 *
 * @package Caissa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function caissa_fuentes_inline() {
	?>
PHP
printf '<link rel="preload" href="<?php echo esc_url( CAISSA_URI . '"'"'/assets/fonts/plus-jakarta-sans-v12-latin.woff2'"'"' ); ?>" as="font" type="font/woff2" crossorigin>\n'
printf '<style id="caissa-fuentes">'
gawk -v RS='\x01' '{
  gsub(/^[ \n\t]+|[ \n\t]+$/,"")
  # url(/fonts/X.woff2) -> url(<?php echo esc_url( CAISSA_URI . "/assets/fonts/X.woff2" ); ?>)
  while (match($0, /url\(\/fonts\/[^)]+\)/)) {
    s = substr($0, RSTART, RLENGTH)
    file = substr(s, 12, length(s) - 12)
    rep = "url(<?php echo esc_url( CAISSA_URI . " q "/assets/fonts/" file q " ); ?>)"
    $0 = substr($0,1,RSTART-1) rep substr($0, RSTART+RLENGTH)
  }
  printf "%s", $0
}' q="'" "$W/sty/home/01.css"
printf '</style>\n'
cat <<'PHP'
	<?php
}
PHP
} > "$OUT/inc/fuentes.php"

# bloques: badges, redes y la linea de la Cancilleria. Se verifican identicos en las
# 21 paginas DESPUES de reescribir las rutas (en el HTML difieren solo en ../).
extraer(){ gawk -v RS='\x01' -v A="$2" -v B="$3" -f "$HERE/inner.awk" "$REPO/$1" \
             | gawk -v RS='\x01' -v DIR="$4" -f "$HERE/imgpaths.awk"; }
chk_igual(){ # $1 = etiqueta, $2 = A, $3 = B  -> deja el bloque en $W/blk.txt
  local ref="" h
  while IFS=$'\t' read -r rel slug nombre lang pre; do
    [ -z "${slug:-}" ] && continue
    local dir; dir="$(dirname "$rel")"; [ "$dir" = "." ] && dir=""
    extraer "$rel" "$2" "$3" "$dir" > "$W/blk-$slug.txt"
    h=$(sha1sum "$W/blk-$slug.txt" | cut -c1-12)
    [ -z "$ref" ] && { ref="$h"; cp "$W/blk-$slug.txt" "$W/blk.txt"; }
    [ "$h" = "$ref" ] || die "el bloque '$1' no es igual en todas las paginas ($slug difiere). Hay que moverlo a inc/variantes.php."
  done < "$TSV"
}
{
cat <<'PHP'
<?php
/**
 * GENERADO por el builder: bloques del footer copiados LITERALMENTE del HTML del repo.
 * Solo se les reescribieron las rutas de imagen.
 *
 * Los tres estan verificados identicos en las 21 paginas (el builder aborta si no).
 * Lo que SI varia entre paginas -- las ubicaciones y la bajada -- vive en
 * inc/variantes.php.
 *
 * @package Caissa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function caissa_bloque_badges() {
	?>
PHP
chk_igual badges '<div class="foot-badges">' '</div>'
printf '<div class="foot-badges">'; cat "$W/blk.txt"; printf '</div>\n'
cat <<'PHP'
	<?php
}

function caissa_bloque_social() {
	?>
PHP
chk_igual social '<div class="foot-social">' '</div>'
printf '<div class="foot-social">'; cat "$W/blk.txt"; printf '</div>\n'
cat <<'PHP'
	<?php
}

function caissa_bloque_legal() {
	?>
PHP
chk_igual legal '<div class="foot-legal">' '</p>'
gawk -v RS='\x01' '{sub(/^[ \n\t]+/,""); printf "%s</p>\n", $0}' "$W/blk.txt"
cat <<'PHP'
	<?php
}
PHP
} > "$OUT/inc/bloques.php"

# --- 8. inc/variantes.php ----------------------------------------------------
#  Lo que NO es igual entre plantillas: la cadena de CSS, el lang, el preload del
#  LCP, la bajada del pie, la barra sticky, las ubicaciones y la cola (los lightbox
#  que en el HTML vivian despues del footer).
msg "8/9  inc/variantes.php"
{
cat <<'PHP'
<?php
/**
 * GENERADO por el builder: lo que varia entre las plantillas.
 *
 * No lo edites a mano. Sale de leer el HTML del repo, asi que cuando Manuel cambia
 * algo se regenera el tema y esto se actualiza solo.
 *
 * @package Caissa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function caissa_variantes() {
	static $v = null;
	if ( null !== $v ) {
		return $v;
	}
	$v = array(
PHP
emit_heredoc(){ # $1 = clave, $2 = archivo. La clave entrecomillada se rellena a 10
  local n=$(( 8 - ${#1} )); [ "$n" -lt 1 ] && n=1   # columnas, con un espacio minimo
  printf "\t\t\t'%s'%*s=> <<<'HTML'\n" "$1" "$n" ""
  cat "$2"; printf '\nHTML,\n'
}
while IFS=$'	' read -r rel slug nombre lang pre; do
  [ -z "${slug:-}" ] && continue
  dir="$(dirname "$rel")"; [ "$dir" = "." ] && dir=""
  deps=$(awk -F'\t' -v S="$slug" '$1==S{print $2}' "$W/cssdeps.tsv")
  arr=""; for d in $deps; do arr="$arr'$d', "; done; arr="${arr%, }"
  printf "\t\t'page-templates/tpl-%s.php' => array(\n" "$slug"
  printf "\t\t\t'slug'    => '%s',\n"  "$slug"
  printf "\t\t\t'nombre'  => '%s',\n"  "$nombre"
  printf "\t\t\t'origen'  => '%s',\n"  "$rel"
  printf "\t\t\t'lang'    => '%s',\n"  "$lang"
  if [ -n "$pre" ]; then printf "\t\t\t'preload' => '%s',\n" "$pre"; else printf "\t\t\t'preload' => null,\n"; fi
  printf "\t\t\t'css'     => array(%s),\n" "$arr"
  # robots: solo se usa para el respaldo del noindex (ver inc/parts.php). El resto del
  # SEO lo emite Rank Math; esto no compite con eso.
  rb=$({ grep -m1 -o '<meta name="robots" content="[^"]*"' "$REPO/$rel" || true; } | sed 's/.*content="//; s/"$//')
  printf "\t\t\t'robots'  => '%s',\n" "$rb"
  # preconnect: hints de <head> propios de la pagina. Hoy solo /reservar-consultoria/,
  # que precarga los dos origenes de Typeform.
  pc=$({ grep -o 'rel="preconnect" href="[^"]*"' "$REPO/$rel" || true; } | sed 's/.*href="//; s/"$//' | tr '
' ' ')
  arrpc=""; for u in $pc; do arrpc="$arrpc'$u', "; done; arrpc="${arrpc%, }"
  printf "\t\t\t'preconnect' => array(%s),\n" "$arrpc"
  # bajada
  extraer "$rel" '<p class="foot-desc">' '</p>' "$dir" > "$W/f.txt"
  gawk -v RS='\x01' '{gsub(/^[ \n\t]+|[ \n\t]+$/,""); printf "%s", $0}' "$W/f.txt" > "$W/bajada.txt"
  emit_heredoc bajada "$W/bajada.txt"
  # sticky
  extraer "$rel" '<div class="sticky-cta">' '</div>' "$dir" > "$W/s.txt"
  if [ -s "$W/s.txt" ]; then
    { printf '<div class="sticky-cta">'; cat "$W/s.txt"; printf '</div>'; } > "$W/sticky.txt"
  else : > "$W/sticky.txt"; fi
  emit_heredoc sticky "$W/sticky.txt"
  # ubicaciones: los <a class="foot-loc"> consecutivos del pie
  gawk -v RS='\x01' -v DIR="$dir" 'BEGIN{}{
    s=$0; out=""
    while ((p=index(s,"<a class=\"foot-loc\"")) > 0) {
      s=substr(s,p); e=index(s,"</a>"); if(e==0) break
      out = out (out==""?"":"\n") substr(s,1,e+3); s=substr(s,e+4)
    }
    printf "%s", out }' "$REPO/$rel" | gawk -v RS='\x01' -v DIR="$dir" -f "$HERE/imgpaths.awk" > "$W/ubic.txt"
  emit_heredoc ubicaciones "$W/ubic.txt"
  # cola: lo que va entre </footer> y el primer <script>
  gawk -v RS='\x01' -v A='</footer>' -v B='<script' -f "$HERE/inner.awk" "$REPO/$rel" \
    | gawk -v RS='\x01' -v DIR="$dir" -f "$HERE/imgpaths.awk" \
    | gawk -f "$HERE/cola.awk" > "$W/cola.txt"
  emit_heredoc cola "$W/cola.txt"
  printf "\t\t),\n"
done < "$TSV"
# entrada 'default' para las vistas del blog, que no tienen plantilla asignada:
# se usan las variantes mayoritarias (bajada institucional, sin sticky, lang es-AR).
dflt_rel=$(awk -F'\t' '$2=="equipo"{print $1}' "$TSV")
extraer "$dflt_rel" '<p class="foot-desc">' '</p>' equipo > "$W/f.txt"
gawk -v RS='\x01' '{gsub(/^[ \n\t]+|[ \n\t]+$/,""); printf "%s", $0}' "$W/f.txt" > "$W/bajada.txt"
gawk -v RS='\x01' 'BEGIN{}{
  s=$0; out=""
  while ((p=index(s,"<a class=\"foot-loc\"")) > 0) {
    s=substr(s,p); e=index(s,"</a>"); if(e==0) break
    out = out (out==""?"":"\n") substr(s,1,e+3); s=substr(s,e+4) }
  printf "%s", out }' "$REPO/$dflt_rel" | gawk -v RS='\x01' -v DIR=equipo -f "$HERE/imgpaths.awk" > "$W/ubic.txt"
printf "\t\t'default' => array(\n"
printf "\t\t\t'slug'    => 'default',\n"
printf "\t\t\t'nombre'  => 'Vistas sin plantilla (blog)',\n"
printf "\t\t\t'origen'  => null,\n"
printf "\t\t\t'lang'    => 'es-AR',\n"
printf "\t\t\t'preload' => null,\n"
printf "\t\t\t'css'     => array('base'),\n"
printf "\t\t\t'robots'  => '',\n"
printf "\t\t\t'preconnect' => array(),\n"
emit_heredoc bajada "$W/bajada.txt"
emit_heredoc ubicaciones "$W/ubic.txt"
printf "\t\t\t'sticky'  => '',\n"
printf "\t\t\t'cola'    => '',\n"
printf "\t\t),\n"
cat <<'PHP'
	);
	return $v;
}
PHP
} > "$OUT/inc/variantes.php"

# --- 9. Parches al esqueleto + chequeos --------------------------------------
msg "9/9  version, enlaces y chequeos"
# version, en los dos unicos lugares donde tiene que aparecer
sed -i "s/^Version:.*/Version:     $VER/" "$OUT/style.css"
sed -i "s/define( 'CAISSA_VER', '[^']*' );/define( 'CAISSA_VER', '$VER' );/" "$OUT/functions.php"
grep -q "Version:     $VER" "$OUT/style.css"          || die "no pude escribir la version en style.css"
grep -q "'CAISSA_VER', '$VER'" "$OUT/functions.php"    || die "no pude escribir la version en functions.php"
sed -i "s/Diez plantillas de pagina/Veintiuna plantillas de pagina/" "$OUT/style.css"

# Parches al esqueleto: cambios que el repo hizo y que no viven en el contenido de
# las plantillas sino en los archivos compartidos del tema. Cada uno se verifica.
. "$HERE/parches.sh"
# --- chequeos que abortan el build ------------------------------------------
# a) ningun enlace interno absoluto quedo en las plantillas generadas
# Solo se marcan las URLs que EXISTEN en el repo. Los enlaces absolutos a
# paginas que viven unicamente en produccion (agencia-growth-marketing,
# agencia-marketing-digital-argentina, /caso/, /llamada/, /blog/) son correctos.
cut -f1 "$TSV" | sed 's|index.html$||; s|^|/|; s|^//$|/|' | grep -v '^/$' | sort -u > "$W/urls.txt"
mal=""
while read -r u; do
  h=$(grep -l "href=\"https://caissa.digital${u}\"" "$OUT"/page-templates/*.php "$OUT"/inc/*.php 2>/dev/null || true)
  [ -n "$h" ] && mal="$mal$u -> $h"
done < "$W/urls.txt"
[ -n "$mal" ] && die "quedaron enlaces internos absolutos: $mal"
# b) todos los assets referenciados existen
grep -ho '<?php echo CAISSA_IMG; ?>/[^"]*' "$OUT"/page-templates/*.php "$OUT"/inc/bloques.php \
  | sed 's|<?php echo CAISSA_IMG; ?>/||' | sort -u > "$W/need.txt"
while read -r a; do [ -f "$OUT/assets/img/$a" ] || die "falta el asset assets/img/$a"; done < "$W/need.txt"
# c) llaves balanceadas en todos los .php (find -print0: las rutas tienen espacios)
find "$OUT" -name '*.php' -print0 > "$W/php.z"
while IFS= read -r -d '' f; do
  o=$(tr -cd '{' < "$f" | wc -c); c=$(tr -cd '}' < "$f" | wc -c)
  [ "$o" = "$c" ] || die "llaves desbalanceadas en ${f#$OUT/} ($o abren, $c cierran)"
done < "$W/php.z"
# d) toda funcion caissa_*() que se llama esta definida en un archivo que se carga
: > "$W/llamadas.txt"; : > "$W/definidas.txt"
while IFS= read -r -d '' f; do
  grep -ho 'caissa_[a-z_]*(' "$f" | tr -d '(' >> "$W/llamadas.txt" || true
  grep -ho 'function caissa_[a-z_]*' "$f" | sed 's/function //' >> "$W/definidas.txt" || true
done < "$W/php.z"
sort -u -o "$W/llamadas.txt" "$W/llamadas.txt"; sort -u -o "$W/definidas.txt" "$W/definidas.txt"
faltan=$(comm -23 "$W/llamadas.txt" "$W/definidas.txt" | grep -v '^caissa_variantes$' || true)
[ -n "$faltan" ] && die "funciones llamadas y no definidas: $faltan"
# e) FAQ visible == FAQPage en cada plantilla
for f in "$OUT"/page-templates/*.php; do
  # con pipefail, grep|wc aborta el script cuando grep no encuentra nada
  vis=$(grep -c '<summary' "$f" || true)
  sch=$({ grep -o '"@type": *"Question"' "$f" || true; } | wc -l)
  [ "$vis" = "$sch" ] || die "$(basename "$f"): $vis FAQ visibles y $sch en el FAQPage"
done
# f) una sola H1 por plantilla
for f in "$OUT"/page-templates/*.php; do
  n=$({ grep -o '<h1[ >]' "$f" || true; } | wc -l)
  [ "$n" = "1" ] || die "$(basename "$f"): tiene $n H1"
done

# g) ninguna nota interna del equipo quedo publicada. notas.awk las saca del
#    contenido; esto es el cinturon de seguridad, por si aparece otra clase.
for f in "$OUT"/page-templates/*.php; do
  if grep -qE 'legal-nota|se borra al publicar|Nota para Caissa' "$f"; then
    die "$(basename "$f"): quedo una nota interna en el contenido publicado"
  fi
done

msg ""
msg "LISTO: $OUT"
msg "  $(ls "$OUT"/page-templates/*.php | wc -l) plantillas | $(ls "$OUT"/assets/css/*.css | wc -l) CSS | $(ls "$OUT"/assets/js/*.js | wc -l) JS | $(find "$OUT" -name '*.php' | wc -l) PHP"
msg "  peso: $(du -sk "$OUT" | cut -f1) KB"
