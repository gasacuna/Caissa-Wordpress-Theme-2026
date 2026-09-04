# =============================================================================
#  Parches al esqueleto del tema. Lo llama build.sh en el paso 9.
#
#  Son cambios que el repo hizo y que NO viven en el contenido de las plantillas,
#  sino en los archivos compartidos del tema (header, footer, nav). El generador
#  los aplica siempre y VERIFICA que se aplicaron, asi que no se pueden perder en
#  una regeneracion.
# =============================================================================

# --- 1. Los dos enlaces que el repo paso a ruta de raiz ----------------------
# En el tema 1.08 estaban absolutos: en demo.caissa.digital cada clic te expulsaba
# a produccion. (§21.d y §22.e del CLAUDE.md.)
sed -i 's|href="https://caissa.digital/aviso-legal"|href="/aviso-legal/"|' "$OUT/footer.php"
sed -i "s|'caissa_cta_url', 'https://caissa.digital/reservar-consultoria/'|'caissa_cta_url', '/reservar-consultoria/'|" "$OUT/inc/nav.php"
grep -q 'href="/aviso-legal/"' "$OUT/footer.php"                        || die "no pude reapuntar el Aviso Legal del footer"
grep -q "'caissa_cta_url', '/reservar-consultoria/'" "$OUT/inc/nav.php" || die "no pude reapuntar caissa_cta_url()"

# --- 2. Los titulos de columna del footer: dejan de ser headings -------------
# El commit 20f8ff9 los bajo de h2 a h3, y la auditoria SEO del blog pidio bajarlos
# un paso mas: "Servicios", "Caissa" y "Enlaces" son ROTULOS de columna, no secciones
# del documento. Como headings ensucian el esquema de cada pagina, y en una nota del
# blog compiten con los h2 del cuerpo del articulo, que son la estructura que leen
# Google y los modelos de lenguaje.
#
# Se ven exactamente igual: la regla .foot-col .foot-col-t (en blindaje.css para las 21
# plantillas y en blog.css para las vistas del blog) les copia el estilo que base.css le
# da a .foot-col h2 y .foot-col h3.
#
# OJO: esto diverge del HTML del repo, que sigue usando <h3>. Es a proposito y hay que
# decidir si se replica alla; mientras no se replique, el tema lo aplica igual porque
# footer.php e inc/nav.php son archivos del esqueleto y este parche los toca siempre.
for et in h2 h3; do
  sed -i "s|echo '<div class=\"foot-col\"><$et>' . esc_html( \$titulo ) . '</$et>'|echo '<div class=\"foot-col\"><p class=\"foot-col-t\">' . esc_html( \$titulo ) . '</p>'|" "$OUT/inc/nav.php"
  sed -i "s|<$et><?php esc_html_e( 'Enlaces', 'caissa' ); ?></$et>|<p class=\"foot-col-t\"><?php esc_html_e( 'Enlaces', 'caissa' ); ?></p>|" "$OUT/footer.php"
done
grep -q '<div class="foot-col"><p class="foot-col-t">' "$OUT/inc/nav.php" || die "no pude convertir a <p> el titulo de columna de caissa_footer_col()"
grep -q '<p class="foot-col-t"><?php esc_html_e' "$OUT/footer.php"        || die "no pude convertir a <p> el titulo Enlaces del footer"
if grep -qE '<h[23]>' "$OUT/footer.php"; then
  die "quedo un heading en el footer"
fi

# --- 3. aria-current en el boton del CTA ------------------------------------
# El repo marca el boton del nav con aria-current="page" en /reservar-consultoria/.
# El tema lo resuelve comparando rutas (caissa_cta_actual), no cableando el slug.
if ! grep -q 'function caissa_cta_actual' "$OUT/inc/nav.php"; then
  cat "$HERE/parche-cta-actual.php" >> "$OUT/inc/nav.php"
fi
grep -q 'function caissa_cta_actual' "$OUT/inc/nav.php" || die "no pude agregar caissa_cta_actual()"
sed -i 's|<a href="<?php echo esc_url( caissa_cta_url() ); ?>" class="btn btn-primary">|<a href="<?php echo esc_url( caissa_cta_url() ); ?>"<?php echo caissa_cta_actual() ? '"'"' aria-current="page"'"'"' : '"''"'; ?> class="btn btn-primary">|g' "$OUT/header.php"
[ "$(grep -c 'caissa_cta_actual()' "$OUT/header.php")" = "2" ] || die "esperaba dos botones de CTA marcados con aria-current en header.php"

# --- 4. Comentarios que quedaron con el numero viejo de plantillas -----------
NPL=$(ls "$OUT"/page-templates/*.php | wc -l)
sed -i "s/compartida por las diez plantillas/compartida por las $NPL plantillas de pagina/; s/compartido por las diez plantillas/compartido por las $NPL plantillas de pagina/" "$OUT/header.php" "$OUT/footer.php"
sed -i "s/las diez plantillas de pagina/las $NPL plantillas de pagina/" "$OUT/index.php" "$OUT/page.php"
sed -i "s/las dieciocho plantillas de pagina/las $NPL plantillas de pagina/; s/las dieciocho plantillas/las $NPL plantillas/" "$OUT/inc/parts.php" "$OUT/inc/blog.php"
q=$(grep -rl 'diez plantillas\|dieciocho plantillas' "$OUT" --include='*.php' || true)
if [ -n "$q" ]; then
  die "quedaron comentarios con el numero viejo de plantillas en: $q"
fi

# El estado de salida de este archivo es el del source que lo llama, y build.sh
# corre con set -e: si la ultima linea fuera un test que da falso, el build
# abortaria sin decir nada. Por eso cierra con :
:

# =============================================================================
#  Correcciones a archivos del blog que venian del tema 1.07/1.08.
#  No salen del repo: son bugs propios del tema. Se aplican aca para que
#  sobrevivan a una regeneracion, y son IDEMPOTENTES: si el esqueleto ya las
#  trae (porque 1.09 paso a ser el esqueleto), no hacen nada.
# =============================================================================

# --- 5. El menu mobile no funcionaba en NINGUNA vista del blog ---------------
# El handler del burger vive en tpl-<slug>.js, que el blog no encola. base.js
# solo trae los desplegables. Resultado: el boton del menu no hacia nada en el
# listado, los archivos, la busqueda, la nota abierta y el 404.
if ! grep -q "getElementById('burger')" "$OUT/assets/js/blog.js"; then
  cat "$HERE/parche-burger.js" >> "$OUT/assets/js/blog.js"
fi
grep -q "getElementById('burger')" "$OUT/assets/js/blog.js" || die "no pude agregar el handler del burger a blog.js"

# --- 6. Notas relacionadas repetidas ----------------------------------------
# En PHP, "+" entre arrays NO sobreescribe las claves que ya existen en el
# operando izquierdo. $base ya define post__not_in y posts_per_page, asi que los
# dos overrides del segundo query se ignoraban en silencio: las relacionadas se
# repetian y podian salir mas de tres. array_merge si sobreescribe.
if grep -q '\$q2 = new WP_Query( \$base + array' "$OUT/inc/blog.php"; then
  sed -i "s|\$q2 = new WP_Query( \$base + array( 'post__not_in'|\$q2 = new WP_Query( array_merge( \$base, array( 'post__not_in'|" "$OUT/inc/blog.php"
  sed -i "s|'posts_per_page' => 3 - \$q->post_count ) );|'posts_per_page' => 3 - \$q->post_count ) ) );|" "$OUT/inc/blog.php"
fi
grep -q 'array_merge( \$base, array(' "$OUT/inc/blog.php" || die "no pude arreglar el query de notas relacionadas"

# --- 7. Tiempo de lectura mal contado en espanol ----------------------------
# str_word_count() no entiende UTF-8. El reemplazo va por splice de lineas y no
# por sed, porque el regex lleva backslashes que sed se come.
if grep -q 'str_word_count( wp_strip_all_tags' "$OUT/inc/blog.php"; then
  ln=$(grep -n 'str_word_count( wp_strip_all_tags' "$OUT/inc/blog.php" | cut -d: -f1)
  gawk -v F="$HERE/parche-palabras.php" -v L="$ln" '
    NR==L { while ((getline l < F) > 0) print l; close(F); salta=1; next }
    salta==1 && /^\treturn max\( 1, \(int\) ceil\( \$palabras \/ 200 \) \);$/ { salta=0; next }
    { print }' "$OUT/inc/blog.php" > "$OUT/inc/blog.tmp" && mv "$OUT/inc/blog.tmp" "$OUT/inc/blog.php"
fi
grep -q 'p{L}' "$OUT/inc/blog.php" || die "no pude arreglar el conteo de palabras"
grep -q '= str_word_count(' "$OUT/inc/blog.php" && die "quedo la llamada vieja a str_word_count() en inc/blog.php"

# --- 8. <nav> de paginacion vacio -------------------------------------------
# paginate_links() devuelve null cuando hay una sola pagina, pero el <nav> con su
# aria-label se imprimia igual: un landmark vacio para el lector de pantalla.
if ! grep -q '\$paginacion = paginate_links' "$OUT/template-parts/listado.php"; then
  gawk '
  /^\techo .<nav class="bl-pag" aria-label=/ { dentro=1
    print "\t$paginacion = paginate_links("
    print "\t\tarray("
    print "\t\t\t\x27prev_text\x27 => \x27&larr;\x27,"
    print "\t\t\t\x27next_text\x27 => \x27&rarr;\x27,"
    print "\t\t\t\x27type\x27      => \x27plain\x27,"
    print "\t\t)"
    print "\t);"
    print "\t// paginate_links() devuelve null con una sola pagina: sin esto quedaba un"
    print "\t// <nav> vacio con su aria-label, o sea un landmark sin contenido."
    print "\tif ( $paginacion ) {"
    print "\t\techo \x27<nav class=\"bl-pag\" aria-label=\x27 . \x27\"\x27 . esc_attr__( \x27Paginación\x27, \x27caissa\x27 ) . \x27\">\x27;"
    print "\t\techo wp_kses_post( $paginacion );"
    print "\t\techo \x27</nav>\x27;"
    print "\t}"
    next }
  dentro && /^\techo .<\/nav>.;$/ { dentro=0; next }
  dentro { next }
  { print }' "$OUT/template-parts/listado.php" > "$OUT/template-parts/listado.tmp" \
    && mv "$OUT/template-parts/listado.tmp" "$OUT/template-parts/listado.php"
fi
grep -q 'if ( \$paginacion )' "$OUT/template-parts/listado.php" || die "no pude condicionar el <nav> de paginacion"

:

# --- 9. Hints de <head> por pagina y respaldo del noindex --------------------
# Los dos preconnect de Typeform de /reservar-consultoria/ no tenian donde vivir
# (header.php es compartido). Y el noindex de /llamada-confirmada/ dependia de un
# paso manual en Rank Math: ahora hay red de seguridad por el filtro wp_robots.
if ! grep -q 'function caissa_preconnect' "$OUT/inc/parts.php"; then
  cat "$HERE/parche-parts.php" >> "$OUT/inc/parts.php"
fi
grep -q 'function caissa_preconnect' "$OUT/inc/parts.php" || die "no pude agregar caissa_preconnect()"
grep -q "'wp_robots'" "$OUT/inc/parts.php"                || die "no pude agregar el respaldo del noindex"
if ! grep -q 'caissa_preconnect();' "$OUT/header.php"; then
  sed -i 's|^caissa_preload_lcp();$|caissa_preload_lcp();\ncaissa_preconnect();|' "$OUT/header.php"
fi
grep -q 'caissa_preconnect();' "$OUT/header.php" || die "no pude llamar a caissa_preconnect() desde header.php"

# --- 10. caissa_es_actual() comparaba con el query string incluido -----------
# add_query_arg( array() ) devuelve REQUEST_URI CON su query string, asi que en
# /equipo/?gclid=... la URL actual no coincidia con la del item de menu de tipo
# "Enlace personalizado" y se perdia el aria-current. Va por splice de lineas: el
# reemplazo tiene comillas y parentesis que sed complica.
if grep -q "strtok( (string) home_url( add_query_arg( array() ) ), '#' )" "$OUT/inc/nav.php"; then
  ln=$(grep -n "\$a = untrailingslashit( strtok( (string) \$item->url" "$OUT/inc/nav.php" | cut -d: -f1)
  gawk -v F="$HERE/parche-es-actual.php" -v L="$ln" '
    NR==L { while ((getline l < F) > 0) print l; close(F); salta=1; next }
    salta==1 { salta=0; next }
    { print }' "$OUT/inc/nav.php" > "$OUT/inc/nav.tmp" && mv "$OUT/inc/nav.tmp" "$OUT/inc/nav.php"
fi
grep -q 'wp_parse_url( (string) \$item->url, PHP_URL_PATH )' "$OUT/inc/nav.php" || die "no pude arreglar caissa_es_actual() (lado del item)"
grep -q 'wp_parse_url( home_url( add_query_arg' "$OUT/inc/nav.php"      || die "no pude arreglar caissa_es_actual() (lado actual)"
grep -q "strtok( (string) home_url" "$OUT/inc/nav.php" && die "quedo la comparacion vieja en caissa_es_actual()"

# --- 11. El label del formulario de busqueda se veia ------------------------
# get_search_form() de WordPress imprime <span class="screen-reader-text">Buscar:</span>.
# El tema no definia esa clase, asi que "Buscar:" salia como texto a la vista en el 404
# y en el estado vacio del listado. Es la definicion estandar de WordPress.
if ! grep -q 'screen-reader-text' "$OUT/assets/css/blog.css"; then
  cat "$HERE/parche-sr.css" >> "$OUT/assets/css/blog.css"
fi
grep -q 'screen-reader-text' "$OUT/assets/css/blog.css" || die "no pude agregar .screen-reader-text"

:

# --- Guarda de idempotencia -------------------------------------------------
# Varios parches AGREGAN codigo a archivos del esqueleto. Si el esqueleto ya es
# una version parcheada (regenerar 1.09 sobre 1.09), un parche sin su "if !
# grep -q" duplicaria una funcion y PHP moriria con "Cannot redeclare". Paso
# de verdad con caissa_cta_actual(), asi que ahora se chequea siempre.
dup=$(grep -rho 'function caissa_[a-z_]*' "$OUT" --include='*.php' | sort | uniq -d)
if [ -n "$dup" ]; then
  die "funcion declarada mas de una vez (un parche se aplico dos veces): $dup"
fi

:

# --- 12. El comentario de la clase .js quedo desactualizado -----------------
# Explicaba la clase por la barra sticky, y la rama de produccion borro las dos
# reglas que la sostenian (html:not(.js) .sticky-cta y .sticky-cta.show): la barra
# ahora es puro CSS. La clase sigue siendo necesaria por otras 12 reglas, asi que
# lo que cambia es el motivo, no la decision.
if grep -q 'html:not(.js) .sticky-cta{transform:none} como respaldo' "$OUT/header.php"; then
  ini=$(grep -n ' \* La clase .js va aca' "$OUT/header.php" | cut -d: -f1)
  fin=$(gawk -v s="$ini" 'NR>s && /^ \*\/$/{print NR; exit}' "$OUT/header.php")
  gawk -v F="$HERE/parche-js-comentario.txt" -v A="$ini" -v B="$fin" '
    NR==A { while ((getline l < F) > 0) print l; close(F); next }
    NR>A && NR<B { next }
    { print }' "$OUT/header.php" > "$OUT/header.tmp" && mv "$OUT/header.tmp" "$OUT/header.php"
fi
grep -q 'su visibilidad es' "$OUT/header.php" || die "no pude actualizar el comentario de la clase .js"
grep -q 'como respaldo para' "$OUT/header.php" && die "quedo el comentario viejo de la clase .js en header.php"

:

# --- 13. "Enlaces destacados": la ultima fila del footer ---------------------
# La trajo el chasis unificado del repo (commit 6f05fe5) y el tema no la tenia,
# porque footer.php es un archivo del esqueleto y no se genera del HTML. Se suma
# como CUARTO menu de WordPress y no cableada: son tres enlaces de SEO que hoy
# apuntan a dos notas del blog y a la landing de Google Ads, y cambian seguido.
if ! grep -q "'footer_destacados'" "$OUT/inc/setup.php"; then
  sed -i "s|\t\t\t\t'footer_caissa'    => __( 'Footer - Caissa', 'caissa' ),|\t\t\t\t'footer_caissa'    => __( 'Footer - Caissa', 'caissa' ),\n\t\t\t\t'footer_destacados' => __( 'Footer - Enlaces destacados', 'caissa' ),|" "$OUT/inc/setup.php"
fi
grep -q "'footer_destacados'" "$OUT/inc/setup.php" || die "no pude registrar la ubicacion de menu footer_destacados"

if ! grep -q 'function caissa_footer_destacados' "$OUT/inc/nav.php"; then
  cat "$HERE/parche-destacados.php" >> "$OUT/inc/nav.php"
fi
grep -q 'function caissa_footer_destacados' "$OUT/inc/nav.php" || die "no pude agregar caissa_footer_destacados()"

# La fila va DENTRO de .foot-top y DESPUES de .foot-links: su CSS es
# grid-column:1/-1, o sea que es un item de la grilla de .foot-top y ocupa las dos
# columnas. Si se metiera adentro de .foot-links quedaria dentro de otra grilla.
if ! grep -q 'caissa_footer_destacados();' "$OUT/footer.php"; then
  gawk '
    /^      <\/div>$/ && !hecho && vistolinks { print; print "      <?php caissa_footer_destacados(); ?>"; hecho=1; next }
    /<div class="foot-links"/ { vistolinks=1 }
    { print }' "$OUT/footer.php" > "$OUT/footer.tmp" && mv "$OUT/footer.tmp" "$OUT/footer.php"
fi
grep -q 'caissa_footer_destacados();' "$OUT/footer.php" || die "no pude llamar a caissa_footer_destacados() desde footer.php"

# El rotulo en <p> necesita su regla: al blindaje (las 22 tpl) y a blog.css.
# La regla del rotulo ya vive en _generador/blindaje.css, que es un INPUT del paso 4.
# No se agrega desde aca: parches.sh corre en el paso 9, cuando los tpl-*.css ya se
# escribieron, asi que un append tardio no llegaria a esta corrida.
grep -q 'foot-feat-t' "$OUT/assets/css/blog.css" || cat "$HERE/parche-feat.css" >> "$OUT/assets/css/blog.css"
grep -q 'foot-feat-t' "$OUT/assets/css/blog.css" || die "no pude agregar la regla de .foot-feat-t a blog.css"

:

# --- 14. La barra sticky de la home, a partir de 100px de scroll ------------
# Pedido de Gaston. El repo la dejo siempre visible (Manuel pidio eso) con puro
# CSS. Aca se le suma un umbral SOLO en la home, que es donde tapaba el CTA del
# hero. El CSS del umbral vive en overrides/tpl-home.css.
if ! grep -q 'caissa-sticky-scroll' "$OUT/assets/js/base.js"; then
  cat "$HERE/parche-sticky-scroll.js" >> "$OUT/assets/js/base.js"
fi
grep -q 'caissa-sticky-scroll' "$OUT/assets/js/base.js" || die "no pude agregar el umbral de scroll a base.js"
if ! grep -q 'caissa-sticky-scroll' "$OUT/inc/parts.php"; then
  cat "$HERE/parche-body-class.php" >> "$OUT/inc/parts.php"
fi
grep -q "'body_class'" "$OUT/inc/parts.php" || die "no pude agregar la clase caissa-sticky-scroll al body"

# --- 15. El CTA del drawer mobile ------------------------------------------
# Pedido de Gaston: sacar el CTA del menu SOLO en mobile. El nav tiene dos: el de
# .nav-cta (que en mobile ya lo esconde el CSS) y el del drawer. Se saca el del
# drawer, asi que desaparece unicamente en mobile y el de desktop queda intacto.
# Motivo: con la barra sticky abajo, abrir el menu mostraba el mismo boton dos
# veces en la misma pantalla.
if grep -q 'nav-mobile' "$OUT/header.php"; then
  gawk '
    /^  <div class="nav-mobile"/ { dentro=1; print; next }
    dentro && /class="btn btn-primary"/ {
      print "    <?php /* El CTA del drawer se saco a pedido de Gaston: en mobile la barra"
      print "       sticky de abajo ya ofrece el mismo boton, y abrir el menu lo mostraba"
      print "       dos veces en la misma pantalla. El de desktop (.nav-cta) sigue. */ ?>"
      quitado=1; next }
    /^  <\/div>$/ && dentro { dentro=0; print; next }
    { print }' "$OUT/header.php" > "$OUT/header.tmp" && mv "$OUT/header.tmp" "$OUT/header.php"
fi
[ "$(grep -c 'class="btn btn-primary"' "$OUT/header.php")" = "1" ] || die "esperaba UN solo CTA en header.php (el de desktop), hay $(grep -c 'class="btn btn-primary"' "$OUT/header.php")"

:
