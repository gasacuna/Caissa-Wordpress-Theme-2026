<?php
/**
 * Caissa 2026 - arranque del tema.
 *
 * @package Caissa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CAISSA_VER', '1.11' );
define( 'CAISSA_DIR', get_template_directory() );
define( 'CAISSA_URI', get_template_directory_uri() );
define( 'CAISSA_IMG', CAISSA_URI . '/assets/img' );

/**
 * Datos estructurados propios de cada plantilla (JSON-LD escrito a mano).
 *
 * true  = las plantillas emiten su JSON-LD (Service con su catalogo, FAQPage que coincide
 *         con las preguntas visibles, ProfessionalService con el NAP de Neuquen,
 *         ProfilePage de los fundadores, CollectionPage con las 15 resenas). Rank Math va
 *         a emitir ademas su propio grafo: Google tolera nodos repetidos, no es un error.
 * false = lo deja todo en manos de Rank Math y se pierde el schema a medida.
 *
 * Si lo dejas en true, conviene apagar en Rank Math el schema de los tipos que ya cubren
 * estas plantillas, para no duplicar de gusto.
 */
if ( ! defined( 'CAISSA_SCHEMA_PROPIO' ) ) {
	define( 'CAISSA_SCHEMA_PROPIO', true );
}

/*
 * Los cuatro archivos marcados GENERADO los escribe el builder leyendo el HTML original.
 * No los edites a mano: se sobreescriben en la proxima regeneracion.
 */
require_once CAISSA_DIR . '/inc/setup.php';
require_once CAISSA_DIR . '/inc/variantes.php';   // GENERADO: lo que varia por plantilla
require_once CAISSA_DIR . '/inc/enqueue.php';
require_once CAISSA_DIR . '/inc/limpieza.php';
require_once CAISSA_DIR . '/inc/nav.php';
require_once CAISSA_DIR . '/inc/fuentes.php';     // GENERADO: las @font-face autohospedadas
require_once CAISSA_DIR . '/inc/bloques.php';     // GENERADO: badges, redes, ubicaciones, legal
require_once CAISSA_DIR . '/inc/parts.php';
require_once CAISSA_DIR . '/inc/blog.php';      // el blog: home, archive, search, single y 404
