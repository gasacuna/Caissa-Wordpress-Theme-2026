<?php
/**
 * Soportes del tema y registro de menus.
 *
 * @package Caissa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'after_setup_theme',
	function () {
		// El <title> lo emite WordPress (y lo escribe Rank Math): la plantilla no lo hardcodea.
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );

		/*
		 * Menus nativos. Los tres se editan en Apariencia > Menus.
		 * Si un menu no esta asignado, el bloque correspondiente no se imprime:
		 * no hay fallback con enlaces cableados, para que no aparezcan enlaces
		 * fantasma que nadie configuro.
		 */
		register_nav_menus(
			array(
				'principal'        => __( 'Principal (header)', 'caissa' ),
				'footer_servicios' => __( 'Footer - Servicios', 'caissa' ),
				'footer_caissa'    => __( 'Footer - Caissa', 'caissa' ),
				'footer_destacados' => __( 'Footer - Enlaces destacados', 'caissa' ),
			)
		);

		// Un submenu de un nivel es todo lo que soporta el diseno del header.
		add_filter( 'wp_nav_menu_args', function ( $args ) { return $args; } );
	}
);

/**
 * El ancho del contenido no aplica: las plantillas manejan su propio layout.
 */
add_action( 'template_redirect', function () {
	if ( ! isset( $GLOBALS['content_width'] ) ) {
		$GLOBALS['content_width'] = 1140;
	}
} );
