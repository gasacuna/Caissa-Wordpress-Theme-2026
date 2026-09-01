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

# --- 2. Los titulos de columna del footer: h2 -> h3 --------------------------
# El commit 20f8ff9 los bajo de h2 a h3 a proposito, para sacarlos del outline de
# encabezados de la home. El CSS ya cubre las dos etiquetas (.foot-col h2,.foot-col h3),
# asi que se ve exactamente igual; lo que cambia es la jerarquia que lee Google.
sed -i "s|echo '<div class=\"foot-col\"><h2>' . esc_html( \$titulo ) . '</h2>'|echo '<div class=\"foot-col\"><h3>' . esc_html( \$titulo ) . '</h3>'|" "$OUT/inc/nav.php"
sed -i 's|<h2><?php esc_html_e( .Enlaces., .caissa. ); ?></h2>|<h3><?php esc_html_e( '"'"'Enlaces'"'"', '"'"'caissa'"'"' ); ?></h3>|' "$OUT/footer.php"
grep -q '<div class="foot-col"><h3>' "$OUT/inc/nav.php" || die "no pude bajar a h3 el titulo de columna de caissa_footer_col()"
grep -q '<h3><?php esc_html_e' "$OUT/footer.php"        || die "no pude bajar a h3 el titulo Enlaces del footer"
[ "$(grep -c '<h2>' "$OUT/footer.php")" = "0" ]          || die "quedo un <h2> en el footer"

# --- 3. aria-current en el boton del CTA ------------------------------------
# El repo marca el boton del nav con aria-current="page" en /reservar-consultoria/.
# El tema lo resuelve comparando rutas (caissa_cta_actual), no cableando el slug.
cat "$HERE/parche-cta-actual.php" >> "$OUT/inc/nav.php"
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
