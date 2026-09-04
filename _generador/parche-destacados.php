
/**
 * "Enlaces destacados": la ultima fila del footer, para SEO/GEO.
 *
 * La trajo el chasis unificado del repo y va a lo ancho de las dos columnas de
 * .foot-top, debajo del mapa del sitio. En el HTML del repo los tres enlaces estan
 * cableados; aca salen de un menu de WordPress como las otras dos columnas, porque son
 * justo el tipo de enlace que cambia seguido: hoy apuntan a dos notas del blog y a la
 * landing de Google Ads, y manana pueden apuntar a otras.
 *
 * Igual que en caissa_footer_col(): si la ubicacion no tiene menu asignado, la fila NO
 * se imprime. No hay enlaces de respaldo cableados, para que no aparezca nada que nadie
 * configuro.
 *
 * El rotulo va en <p> y no en <h3>, por lo mismo que los titulos de columna: es una
 * etiqueta, no una seccion del documento (auditoria SEO del blog). Se ve igual, con la
 * regla .foot-feat .foot-feat-t.
 */
function caissa_footer_destacados() {
	$arbol = caissa_menu_arbol( 'footer_destacados' );
	if ( ! $arbol ) {
		return;
	}
	echo '<div class="foot-feat" role="navigation" aria-label="' . esc_attr__( 'Enlaces destacados', 'caissa' ) . '">' . "\n";
	echo '<p class="foot-feat-t">' . esc_html__( 'Enlaces destacados', 'caissa' ) . '</p>' . "\n";
	foreach ( $arbol as $nodo ) {
		$it = $nodo['item'];
		printf(
			'<a href="%s"%s><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg>%s</a>',
			esc_url( $it->url ),
			caissa_es_actual( $it ) ? ' aria-current="page"' : '',
			esc_html( $it->title )
		);
		echo "\n";
	}
	echo '</div>' . "\n";
}
