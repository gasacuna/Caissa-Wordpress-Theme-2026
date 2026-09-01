<?php
/**
 * Encolado de CSS y JS.
 *
 * POR QUE HAY VARIOS ARCHIVOS Y NO UNO SOLO
 * El HTML del repo suma 2.582 KB, de los cuales 1.647 KB son CSS embebido. Pero ese
 * CSS se repite pagina por pagina: el design system solo aparece 17 veces. Partirlo
 * por lo que de verdad se comparte ahorra del orden de 1,37 MB en el sitio.
 *
 *   base.css        61 KB  design system         -> 17 plantillas
 *   landing.css     20 KB  chasis de landings    -> 16
 *   industrias.css   6 KB  chasis de industrias  ->  5
 *   perfiles.css     7 KB  los dos fundadores    ->  2
 *   vacantes.css     6 KB  las dos vacantes      ->  2
 *   tpl-*.css     0-65 KB  lo propio de cada una, con la densidad mobile al final
 *
 * La cadena de cada plantilla y su orden salen de inc/variantes.php, que lo genera el
 * builder leyendo el HTML original. El orden se garantiza con dependencias de
 * wp_enqueue_style(), no con el orden de las llamadas.
 *
 * @package Caissa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * La plantilla en uso, o cadena vacia si la pagina no usa ninguna de las nuestras.
 */
function caissa_plantilla_actual() {
	if ( ! is_singular() ) {
		return '';
	}
	$slug = (string) get_page_template_slug( get_queried_object_id() );
	$mapa = caissa_variantes();
	return isset( $mapa[ $slug ] ) ? $slug : '';
}

/**
 * Los datos de la plantilla en uso, o null.
 */
function caissa_var( $clave = null ) {
	$mapa = caissa_variantes();
	$slug = caissa_plantilla_actual();
	if ( '' === $slug ) {
		/*
		 * Las vistas del blog no tienen plantilla asignada, pero comparten el header y el
		 * footer del sitio, asi que necesitan la bajada del pie, las ubicaciones y el lang.
		 * Para eso el generador escribe una entrada 'default' con las variantes mayoritarias.
		 */
		if ( ! function_exists( 'caissa_es_blog' ) || ! caissa_es_blog() || empty( $mapa['default'] ) ) {
			return null;
		}
		$v = $mapa['default'];
	} else {
		$v = $mapa[ $slug ];
	}
	return null === $clave ? $v : ( isset( $v[ $clave ] ) ? $v[ $clave ] : null );
}

/**
 * Version de cache tomada de la fecha del archivo: cambia sola al subir un CSS nuevo.
 */
function caissa_ver( $rel ) {
	$abs = CAISSA_DIR . '/' . ltrim( $rel, '/' );
	return file_exists( $abs ) ? (string) filemtime( $abs ) : CAISSA_VER;
}

add_action(
	'wp_enqueue_scripts',
	function () {
		$v = caissa_var();
		if ( null === $v ) {
			return; // Pagina sin plantilla nuestra: no cargamos el CSS del diseno.
		}

		// Cadena de hojas compartidas, en el orden en que venian en el HTML original.
		$deps = array();
		foreach ( (array) $v['css'] as $nombre ) {
			$rel    = 'assets/css/' . $nombre . '.css';
			$handle = 'caissa-' . $nombre;
			wp_enqueue_style( $handle, CAISSA_URI . '/' . $rel, $deps, caissa_ver( $rel ) );
			$deps = array( $handle );
		}

		// La hoja propia de la plantilla va ultima: trae la densidad mobile y el blindaje.
		$rel = 'assets/css/tpl-' . $v['slug'] . '.css';
		if ( file_exists( CAISSA_DIR . '/' . $rel ) ) {
			wp_enqueue_style( 'caissa-tpl', CAISSA_URI . '/' . $rel, $deps, caissa_ver( $rel ) );
		}

		// Las vistas del blog: base.css ya vino en la cadena; se suma su hoja propia.
		if ( caissa_es_blog() ) {
			wp_enqueue_style( 'caissa-blog', CAISSA_URI . '/assets/css/blog.css', $deps, caissa_ver( 'assets/css/blog.css' ) );
		}

		wp_enqueue_script( 'caissa-base', CAISSA_URI . '/assets/js/base.js', array(), caissa_ver( 'assets/js/base.js' ), true );
		if ( caissa_es_blog() ) {
			wp_enqueue_script( 'caissa-blog', CAISSA_URI . '/assets/js/blog.js', array( 'caissa-base' ), caissa_ver( 'assets/js/blog.js' ), true );
		}
		$rel = 'assets/js/tpl-' . $v['slug'] . '.js';
		if ( file_exists( CAISSA_DIR . '/' . $rel ) ) {
			wp_enqueue_script( 'caissa-tpl', CAISSA_URI . '/' . $rel, array( 'caissa-base' ), caissa_ver( $rel ), true );
		}
	}
);

/**
 * defer en el JS del tema. Todo el JS de estas paginas es comportamiento de abajo del
 * pliegue (observers, carruseles, paneles en vivo): nada pinta el primer render.
 */
add_filter(
	'script_loader_tag',
	function ( $tag, $handle ) {
		if ( 0 !== strpos( $handle, 'caissa-' ) ) {
			return $tag;
		}
		if ( false !== strpos( $tag, ' defer' ) || false !== strpos( $tag, ' async' ) ) {
			return $tag;
		}
		return str_replace( ' src=', ' defer src=', $tag );
	},
	10,
	2
);
