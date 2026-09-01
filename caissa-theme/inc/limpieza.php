<?php
/**
 * Sacar de la cabecera lo que WordPress agrega y estas paginas no usan.
 *
 * Todo lo de aca esta elegido por performance, no por gusto. Nada de esto toca
 * los plugins: Rank Math, IndexNow y Pixel Cat siguen funcionando igual.
 *
 * @package Caissa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * 1. El CSS de los bloques de Gutenberg, SOLO en nuestras plantillas.
 *
 * WordPress encola wp-block-library y el CSS en linea de theme.json en cada
 * pagina. Entre los dos son del orden de 90 KB que estas plantillas no usan:
 * el diseno no tiene un solo bloque de Gutenberg.
 *
 * Va limitado a nuestras plantillas a proposito. Si alguna pagina del sitio
 * sigue armada con bloques, ahi el CSS se sigue cargando y se ve bien.
 *
 * Bonus: ese CSS es el que trae img{height:auto}, la regla que anula el
 * atributo height del HTML y reventaba los badges del footer.
 */
add_action(
	'wp_enqueue_scripts',
	function () {
		if ( '' === caissa_plantilla_actual() ) {
			return;
		}
		foreach ( array( 'wp-block-library', 'wp-block-library-theme', 'global-styles', 'classic-theme-styles' ) as $h ) {
			wp_dequeue_style( $h );
			wp_deregister_style( $h );
		}
	},
	100
);

/**
 * 2. Emojis. WordPress inyecta un script de deteccion y una hoja de estilos
 * para reemplazar emojis por imagenes de Twemoji. No se usa ninguno.
 */
add_action(
	'init',
	function () {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		add_filter( 'emoji_svg_url', '__return_false' );
	}
);

/**
 * 3. wp-embed.js: sirve para incrustar posts de otros WordPress. No se usa.
 */
add_action(
	'wp_footer',
	function () {
		wp_dequeue_script( 'wp-embed' );
	}
);

/**
 * 4. Etiquetas de la cabecera que no aportan nada en produccion.
 * El canonical NO se toca: lo maneja Rank Math.
 */
add_action(
	'init',
	function () {
		remove_action( 'wp_head', 'rsd_link' );                      // Really Simple Discovery
		remove_action( 'wp_head', 'wlwmanifest_link' );              // Windows Live Writer
		remove_action( 'wp_head', 'wp_generator' );                  // version de WordPress
		remove_action( 'wp_head', 'wp_shortlink_wp_head' );
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
	}
);

/**
 * 5. jQuery Migrate. Si algun plugin necesita jQuery lo va a encolar igual;
 * lo que se saca es la capa de compatibilidad con codigo de 2016.
 */
add_action(
	'wp_default_scripts',
	function ( $scripts ) {
		if ( is_admin() || empty( $scripts->registered['jquery'] ) ) {
			return;
		}
		$scripts->registered['jquery']->deps = array_diff(
			$scripts->registered['jquery']->deps,
			array( 'jquery-migrate' )
		);
	}
);

/**
 * 6. Dashicons para visitantes no logueados (la usa la barra de admin).
 */
add_action(
	'wp_enqueue_scripts',
	function () {
		if ( ! is_user_logged_in() ) {
			wp_deregister_style( 'dashicons' );
		}
	},
	100
);
