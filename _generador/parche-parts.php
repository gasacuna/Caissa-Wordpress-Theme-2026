
/**
 * Hints de <head> propios de la pagina.
 *
 * header.php es compartido, asi que los <link rel="preconnect"> que el HTML del repo
 * declara por pagina no tenian donde vivir. Hoy solo los usa /reservar-consultoria/,
 * que abre la conexion con los dos origenes de Typeform antes de necesitarlos.
 */
function caissa_preconnect() {
	$urls = caissa_var( 'preconnect' );
	if ( empty( $urls ) || ! is_array( $urls ) ) {
		return;
	}
	foreach ( $urls as $u ) {
		echo '<link rel="preconnect" href="' . esc_url( $u ) . '">' . "\n";
	}
}

/**
 * Respaldo del noindex.
 *
 * El tema NO emite metas de SEO: las escribe Rank Math. La unica excepcion es el
 * noindex, y no por SEO sino porque es funcional: /llamada-confirmada/ es una pagina
 * de gracias y si se indexa aparece en resultados gente que nunca reservo nada.
 *
 * Va por el filtro wp_robots, que es la via nativa de WordPress: si Rank Math toma el
 * control de la etiqueta, este filtro simplemente no llega a imprimir nada, y si no lo
 * toma, el noindex queda puesto igual. En ninguno de los dos casos estorba.
 *
 * El valor sale del <meta name="robots"> del HTML del repo, asi que si alguna otra
 * pagina pasa a noindex se refleja sola al regenerar.
 */
add_filter(
	'wp_robots',
	function ( $robots ) {
		$r = caissa_var( 'robots' );
		if ( is_string( $r ) && false !== strpos( $r, 'noindex' ) ) {
			$robots['noindex'] = true;
			unset( $robots['index'] );
		}
		return $robots;
	}
);
