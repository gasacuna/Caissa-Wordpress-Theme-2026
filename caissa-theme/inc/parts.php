<?php
/**
 * Lo que NO es igual en las 21 plantillas.
 *
 * El header y el footer se comparten enteros. Lo unico que varia son estas cinco cosas,
 * y ninguna esta escrita a mano: todas salen de inc/variantes.php, que el builder genera
 * leyendo el HTML original. Si Manuel cambia algo, se regenera y listo.
 *
 *   lang      es para el mercado hispano amplio, es-AR para lo regional
 *   sticky    la barra de CTA en mobile: 6 variantes, y 4 paginas no la llevan
 *   bajada    la redaccion del pie: 4 variantes
 *   preload   la imagen del LCP: solo la home tiene foto de heroe
 *   cola      markup que va despues del footer (los lightbox de video)
 *
 * @package Caissa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Bajada del footer de la plantilla en uso.
 */
function caissa_foot_desc() {
	$t = caissa_var( 'bajada' );
	if ( null === $t ) {
		return;
	}
	echo '<p class="foot-desc">' . $t . '</p>'; // phpcs:ignore WordPress.Security.EscapeOutput -- HTML fijo del tema.
}

/**
 * Barra sticky de CTA en mobile.
 *
 * Las cuatro paginas institucionales (equipo, los dos perfiles y el hub de carreras) no
 * la llevan; las dos vacantes tienen la suya, que apunta al Typeform en vez de a la
 * consultoria. El HTML sale tal cual del original.
 */
function caissa_sticky_cta() {
	$s = caissa_var( 'sticky' );
	if ( empty( $s ) ) {
		return;
	}
	echo $s; // phpcs:ignore WordPress.Security.EscapeOutput -- HTML fijo del tema.
}

/**
 * Ubicaciones de la columna Enlaces del footer.
 *
 * Diecisiete paginas comparten dos enlaces; la landing de Neuquen tiene tres propios
 * (direccion, telefono y enlace a la pagina de Argentina). Sale del HTML original.
 */
function caissa_ubicaciones() {
	$u = caissa_var( 'ubicaciones' );
	if ( empty( $u ) ) {
		return;
	}
	echo $u; // phpcs:ignore WordPress.Security.EscapeOutput -- HTML fijo del tema.
}

/**
 * Markup que en el HTML original vivia despues del footer.
 * Hoy son los lightbox de los testimonios en video, en la home y en /reviews/.
 */
function caissa_cola() {
	$c = caissa_var( 'cola' );
	if ( empty( $c ) ) {
		return;
	}
	echo $c; // phpcs:ignore WordPress.Security.EscapeOutput -- HTML fijo del tema.
}

/**
 * Preload de la imagen del LCP.
 *
 * Solo la home tiene una foto grande arriba del pliegue. En el resto el visual del heroe
 * se dibuja con CSS y SVG, asi que no hay nada que precargar: sumar un preload de gusto
 * competiria por ancho de banda con lo que si importa.
 */
function caissa_preload_lcp() {
	$img = caissa_var( 'preload' );
	if ( empty( $img ) ) {
		return;
	}
	echo '<link rel="preload" as="image" fetchpriority="high" href="'
		. esc_url( CAISSA_IMG . '/' . ltrim( $img, '/' ) ) . '">' . "\n";
}

/**
 * El atributo lang de <html>.
 *
 * Las landings que apuntan a todo el mercado hispanohablante declaran "es"; lo regional,
 * "es-AR". Es una decision editorial tomada a proposito: Google no usa este atributo para
 * detectar el idioma, pero si lo usan los lectores de pantalla y la separacion de silabas.
 */
add_filter(
	'language_attributes',
	function ( $salida ) {
		$lang = caissa_var( 'lang' );
		if ( empty( $lang ) ) {
			return $salida;
		}
		return (string) preg_replace( '/lang="[^"]*"/', 'lang="' . esc_attr( $lang ) . '"', $salida );
	}
);

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
