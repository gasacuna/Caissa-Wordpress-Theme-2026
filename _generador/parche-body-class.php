
/**
 * Clases propias en el <body>.
 *
 * caissa-sticky-scroll marca las plantillas donde la barra sticky NO se muestra
 * de entrada, sino a partir de los primeros 100px de scroll. Hoy es solo la home:
 * es la unica pagina donde la barra tapaba el CTA del hero, o sea el "doble call
 * to action" del ATF. En el resto del sitio la barra se ve siempre, que es lo que
 * pidio Manuel y lo que hace el CSS del repo sin ayuda de JavaScript.
 *
 * Si manana se quiere el umbral en mas paginas, se agregan slugs a la lista.
 */
add_filter(
	'body_class',
	function ( $clases ) {
		$con_umbral = apply_filters( 'caissa_sticky_con_umbral', array( 'home' ) );
		$slug       = caissa_var( 'slug' );
		if ( $slug && in_array( $slug, (array) $con_umbral, true ) ) {
			$clases[] = 'caissa-sticky-scroll';
		}
		return $clases;
	}
);
