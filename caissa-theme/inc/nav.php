<?php
/**
 * Menus nativos de WordPress, con el markup exacto que espera el CSS.
 *
 * POR QUE NO SE USA wp_nav_menu()
 * El header no es una lista: el desplegable de Servicios es un <button> de
 * verdad (con aria-expanded y aria-controls), no un <a> que finge. Reproducir
 * eso con wp_nav_menu haria falta un Walker con mas excepciones que reglas.
 * Aca se leen los items del menu con wp_get_nav_menu_items() y se imprime el
 * markup tal cual. Los enlaces siguen siendo 100% nativos: se editan en
 * Apariencia > Menus y esto los lee de ahi.
 *
 * @package Caissa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * URL del CTA. Se cambia en un solo lugar con el filtro caissa_cta_url.
 */
function caissa_cta_url() {
	return apply_filters( 'caissa_cta_url', '/reservar-consultoria/' );
}

/**
 * Items de una ubicacion de menu, ordenados y en arbol de un nivel.
 *
 * @param string $ubicacion Slug registrado en register_nav_menus().
 * @return array Lista de objetos con ->item y ->hijos.
 */
function caissa_menu_arbol( $ubicacion ) {
	$locations = get_nav_menu_locations();
	if ( empty( $locations[ $ubicacion ] ) ) {
		return array();
	}
	$items = wp_get_nav_menu_items( $locations[ $ubicacion ] );
	if ( empty( $items ) ) {
		return array();
	}
	$raiz = array();
	$por_id = array();
	foreach ( $items as $it ) {
		$por_id[ $it->ID ] = array( 'item' => $it, 'hijos' => array() );
	}
	foreach ( $items as $it ) {
		$padre = (int) $it->menu_item_parent;
		if ( $padre && isset( $por_id[ $padre ] ) ) {
			$por_id[ $padre ]['hijos'][] = &$por_id[ $it->ID ];
		} else {
			$raiz[] = &$por_id[ $it->ID ];
		}
	}
	return $raiz;
}

/**
 * true si el item del menu apunta a la pagina que se esta viendo.
 */
function caissa_es_actual( $item ) {
	$id = get_queried_object_id();
	if ( $id && 'post_type' === $item->type && (int) $item->object_id === (int) $id ) {
		return true;
	}
	/*
	 * Solo la RUTA de cada URL. Antes se comparaba con el query string incluido
	 * (add_query_arg( array() ) devuelve REQUEST_URI completo), asi que en
	 * /equipo/?gclid=... la URL actual no coincidia con la del item de menu y los
	 * items de tipo "Enlace personalizado" perdian el aria-current cada vez que
	 * alguien llegaba desde un anuncio.
	 */
	$a = untrailingslashit( (string) wp_parse_url( (string) $item->url, PHP_URL_PATH ) );
	$b = untrailingslashit( (string) wp_parse_url( home_url( add_query_arg( array() ) ), PHP_URL_PATH ) );
	return '' !== $a && $a === $b;
}

/**
 * El chevron del desplegable.
 */
function caissa_svg_chev() {
	return '<svg class="nav-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg>';
}

/**
 * Menu principal, version desktop (.nav-links).
 */
function caissa_nav_desktop() {
	$arbol = caissa_menu_arbol( 'principal' );
	if ( ! $arbol ) {
		return;
	}
	echo '<nav class="nav-links" aria-label="' . esc_attr__( 'Navegación principal', 'caissa' ) . '">';
	$n = 0;
	foreach ( $arbol as $nodo ) {
		$it = $nodo['item'];
		if ( $nodo['hijos'] ) {
			$n++;
			$bid = 'navDrop' . $n . 'Btn';
			$pid = 'navDrop' . $n;
			echo '<div class="nav-drop">';
			echo '<button type="button" class="nav-drop-btn" id="' . esc_attr( $bid ) . '" aria-expanded="false" aria-controls="' . esc_attr( $pid ) . '">'
				. esc_html( $it->title ) . ' ' . caissa_svg_chev() . '</button>';
			echo '<div class="nav-menu" id="' . esc_attr( $pid ) . '" role="group" aria-labelledby="' . esc_attr( $bid ) . '">';
			foreach ( $nodo['hijos'] as $h ) {
				printf(
					'<a href="%s"%s>%s</a>' . "
",
					esc_url( $h['item']->url ),
					caissa_es_actual( $h['item'] ) ? ' aria-current="page"' : '',
					esc_html( $h['item']->title )
				);
			}
			echo '</div></div>';
		} else {
			printf(
				'<a href="%s"%s>%s</a>' . "
",
				esc_url( $it->url ),
				caissa_es_actual( $it ) ? ' aria-current="page"' : '',
				esc_html( $it->title )
			);
		}
	}
	echo '</nav>';
}

/**
 * Menu principal, version mobile (el drawer .nav-mobile).
 */
function caissa_nav_mobile() {
	$arbol = caissa_menu_arbol( 'principal' );
	$n = 0;
	foreach ( $arbol as $nodo ) {
		$it = $nodo['item'];
		if ( $nodo['hijos'] ) {
			$n++;
			$bid = 'navMacc' . $n . 'Btn';
			$pid = 'navMacc' . $n;
			echo '<div class="nav-macc">';
			echo '<button type="button" class="nav-macc-btn" id="' . esc_attr( $bid ) . '" aria-expanded="false" aria-controls="' . esc_attr( $pid ) . '">'
				. esc_html( $it->title ) . ' ' . caissa_svg_chev() . '</button>';
			echo '<div class="nav-macc-panel" id="' . esc_attr( $pid ) . '" role="group" aria-labelledby="' . esc_attr( $bid ) . '">';
			foreach ( $nodo['hijos'] as $h ) {
				printf( '<a href="%s">%s</a>' . "
", esc_url( $h['item']->url ), esc_html( $h['item']->title ) );
			}
			echo '</div></div>';
		} else {
			printf( '<a href="%s">%s</a>' . "
", esc_url( $it->url ), esc_html( $it->title ) );
		}
	}
}

/**
 * Una columna de enlaces del footer, con el chevron de siempre.
 */
function caissa_footer_col( $ubicacion, $titulo ) {
	$arbol = caissa_menu_arbol( $ubicacion );
	if ( ! $arbol ) {
		return;
	}
	echo '<div class="foot-col"><p class="foot-col-t">' . esc_html( $titulo ) . '</p>' . "
";
	foreach ( $arbol as $nodo ) {
		$it = $nodo['item'];
		printf(
			'<a href="%s"%s><svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg>%s</a>',
			esc_url( $it->url ),
			caissa_es_actual( $it ) ? ' aria-current="page"' : '',
			esc_html( $it->title )
		);
	}
	echo '</div>';
}

/**
 * ¿La pagina que se esta viendo ES el destino del CTA?
 *
 * El HTML del repo marca el boton del nav con aria-current="page" en
 * /reservar-consultoria/, para no ofrecerle al visitante un enlace a la pagina en
 * la que ya esta. El tema lo resuelve comparando la ruta del CTA con la de la
 * pagina actual, en vez de cablear el slug: si algun dia el CTA apunta a otro
 * lado, esto sigue funcionando.
 */
function caissa_cta_actual() {
	if ( ! is_page() ) {
		return false;
	}
	$destino = wp_parse_url( caissa_cta_url(), PHP_URL_PATH );
	$actual  = wp_parse_url( (string) get_permalink(), PHP_URL_PATH );
	if ( empty( $destino ) || empty( $actual ) ) {
		return false;
	}
	return trailingslashit( $destino ) === trailingslashit( $actual );
}
