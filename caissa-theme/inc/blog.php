<?php
/**
 * Ayudantes del blog.
 *
 * A diferencia de las 21 plantillas de pagina, el blog NO se migro de un HTML:
 * se diseno aca, reusando los tokens y las clases del design system (base.css). Las
 * plantillas son de la jerarquia de WordPress, asi que se aplican solas: no hay que
 * elegir nada en el editor.
 *
 *   home.php     el listado del blog (la pagina asignada como "Pagina de entradas")
 *   archive.php  categorias, etiquetas, fechas y autor
 *   search.php   resultados de busqueda
 *   single.php   la nota abierta
 *   404.php      no encontrado
 *
 * @package Caissa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Vistas del blog: donde hay que cargar base.css + blog.css.
 */
function caissa_es_blog() {
	return is_home() || is_archive() || is_search() || is_404() || is_singular( 'post' );
}

/**
 * Minutos de lectura, redondeando para arriba y con un minimo de 1.
 *
 * 200 palabras por minuto es el promedio que se usa habitualmente para lectura en
 * pantalla en espanol. Es una estimacion, no un dato medido: por eso se muestra con
 * "min de lectura" y no como una promesa.
 */
function caissa_minutos_lectura( $post = null ) {
	$post = get_post( $post );
	if ( ! $post ) {
		return 1;
	}
	/*
	 * str_word_count() no entiende UTF-8: corta las palabras en cada acento, asi que
	 * "optimizacion" con tilde contaba como dos y el tiempo de lectura salia inflado.
	 * \p{L}\p{N} con el modificador /u cuenta letras y numeros de cualquier alfabeto.
	 */
	$palabras = preg_match_all( '/[\p{L}\p{N}]+/u', wp_strip_all_tags( strip_shortcodes( $post->post_content ) ), $m )
		? count( $m[0] )
		: 0;
	return max( 1, (int) ceil( $palabras / 200 ) );
}

/**
 * La categoria principal de una nota, para el rotulo de la tarjeta.
 * Se elige la que tiene mas entradas, que en la practica es la mas general.
 */
function caissa_categoria_principal( $post = null ) {
	$cats = get_the_category( get_post( $post ) ? get_post( $post )->ID : null );
	if ( empty( $cats ) ) {
		return null;
	}
	usort( $cats, function ( $a, $b ) { return $b->count - $a->count; } );
	return $cats[0];
}

/**
 * Titulo de la vista actual del blog, sin inventar copy.
 *
 * En el listado usa el titulo de la pagina que WordPress tenga asignada como pagina de
 * entradas; en los archivos, el que da WordPress. Si no hay ninguno, cae en "Blog".
 * La idea es que el texto lo maneje Manuel desde el panel, no el tema.
 */
function caissa_titulo_blog() {
	if ( is_home() ) {
		$id = (int) get_option( 'page_for_posts' );
		return $id ? get_the_title( $id ) : __( 'Blog', 'caissa' );
	}
	if ( is_search() ) {
		/* translators: %s: lo que se busco. */
		return sprintf( __( 'Resultados para %s', 'caissa' ), '“' . get_search_query() . '”' );
	}
	if ( is_404() ) {
		return __( 'No encontramos esta página', 'caissa' );
	}
	return get_the_archive_title();
}

/**
 * Bajada de la vista actual, si hay. Nunca inventada: sale del contenido de la pagina de
 * entradas o de la descripcion de la categoria, las dos editables desde el panel.
 */
function caissa_bajada_blog() {
	if ( is_home() ) {
		$id = (int) get_option( 'page_for_posts' );
		if ( $id ) {
			$p = get_post( $id );
			if ( $p && '' !== trim( (string) $p->post_content ) ) {
				return wp_kses_post( wpautop( $p->post_content ) );
			}
		}
		return '';
	}
	if ( is_archive() ) {
		$d = get_the_archive_description();
		return $d ? wp_kses_post( $d ) : '';
	}
	return '';
}

/**
 * Notas relacionadas: tres de la misma categoria principal, sin repetir la actual.
 * Si la categoria no alcanza para llenar tres, completa con las mas recientes.
 *
 * @param int          $id  La nota actual.
 * @param WP_Term|null $cat Su categoria principal.
 * @return WP_Query|null
 */
function caissa_relacionadas( $id, $cat = null ) {
	$base = array(
		'post_type'           => 'post',
		'posts_per_page'      => 3,
		'post__not_in'        => array( (int) $id ),
		'ignore_sticky_posts' => true,
		'no_found_rows'       => true,
	);
	if ( $cat ) {
		$q = new WP_Query( $base + array( 'cat' => (int) $cat->term_id ) );
		if ( $q->post_count >= 3 ) {
			return $q;
		}
		// Faltan: se completa con las mas recientes, sin repetir las que ya salieron.
		$ya = wp_list_pluck( $q->posts, 'ID' );
		$q2 = new WP_Query( array_merge( $base, array( 'post__not_in' => array_merge( array( (int) $id ), $ya ), 'posts_per_page' => 3 - $q->post_count ) ) );
		$q->posts      = array_merge( $q->posts, $q2->posts );
		$q->post_count = count( $q->posts );
		return $q->post_count ? $q : null;
	}
	$q = new WP_Query( $base );
	return $q->post_count ? $q : null;
}

/**
 * Tablas anchas del contenido: se envuelven para que scrolleen adentro suyo.
 *
 * Es la regla del sitio: el contenido ancho scrollea en su propia caja y la pagina nunca
 * scrollea de costado. En una nota del blog las tablas las escribe el editor, asi que hay
 * que envolverlas desde el tema.
 */
add_filter(
	'the_content',
	function ( $html ) {
		if ( ! is_singular( 'post' ) || false === strpos( $html, '<table' ) ) {
			return $html;
		}
		return preg_replace(
			'/(<table[\s>])/',
			'<div class="tabla-scroll">$1',
			str_replace( '</table>', '</table></div>', $html )
		);
	},
	20
);

/**
 * La foto de un autor.
 *
 * WordPress no tiene foto de perfil propia: usa Gravatar, que para estas cuentas no
 * devuelve nada y deja el monigote gris. Asi que se resuelve en tres pasos, del mas
 * especifico al mas general:
 *
 *   1. El campo caissa_foto del perfil del usuario, si esta cargado. Es la via para
 *      sumar una foto sin tocar codigo: se guarda ahi la URL y listo.
 *   2. El mapa del tema, con las fotos que viajan en assets/img/autores/. La clave es
 *      el nombre para mostrar pasado por sanitize_title: "Manu Ferrini" -> manu-ferrini.
 *      Se puede ampliar desde afuera con el filtro caissa_fotos_autor.
 *   3. Gravatar, como ultimo recurso.
 *
 * @param int $user_id
 * @return string URL, o cadena vacia si hay que caer en get_avatar().
 */
function caissa_foto_autor( $user_id ) {
	$propia = get_user_meta( $user_id, 'caissa_foto', true );
	if ( $propia ) {
		return (string) $propia;
	}
	$mapa = apply_filters(
		'caissa_fotos_autor',
		array(
			// Las dos formas del nombre, por si en el perfil figura como Manu o como Manuel.
			'manu-ferrini'   => CAISSA_IMG . '/autores/manu-ferrini.webp',
			'manuel-ferrini' => CAISSA_IMG . '/autores/manu-ferrini.webp',
		)
	);
	$clave = sanitize_title( get_the_author_meta( 'display_name', $user_id ) );
	return isset( $mapa[ $clave ] ) ? $mapa[ $clave ] : '';
}

/**
 * Imprime la foto del autor: la del mapa si hay, y si no la de Gravatar.
 */
function caissa_avatar_autor( $user_id, $px = 112 ) {
	$url = caissa_foto_autor( $user_id );
	if ( $url ) {
		printf(
			'<img src="%s" alt="" width="%d" height="%d" loading="lazy" decoding="async">',
			esc_url( $url ),
			(int) $px,
			(int) $px
		);
		return;
	}
	echo get_avatar( $user_id, $px, '', '', array( 'loading' => 'lazy' ) );
}

/**
 * Campo "Foto para el blog" en el perfil de usuario.
 *
 * Sin esto, la unica forma de darle foto a un autor seria editar el mapa de
 * caissa_foto_autor(). Con esto, cada persona pega la URL de su foto (la que sea, la
 * de la Biblioteca de medios sirve) y queda. Es lo que hace que el tema no dependa de
 * como este escrito el nombre en el perfil.
 */
add_action( 'show_user_profile', 'caissa_campo_foto_autor' );
add_action( 'edit_user_profile', 'caissa_campo_foto_autor' );
function caissa_campo_foto_autor( $user ) {
	$valor = get_user_meta( $user->ID, 'caissa_foto', true );
	?>
	<h2><?php esc_html_e( 'Blog de Caissa', 'caissa' ); ?></h2>
	<table class="form-table" role="presentation">
		<tr>
			<th><label for="caissa_foto"><?php esc_html_e( 'Foto para el blog', 'caissa' ); ?></label></th>
			<td>
				<input type="url" name="caissa_foto" id="caissa_foto" value="<?php echo esc_attr( $valor ); ?>" class="regular-text" placeholder="https://…">
				<p class="description">
					<?php esc_html_e( 'URL de la foto que aparece al pie de las notas. Cuadrada, 160x160 o más. Si se deja vacío se usa Gravatar.', 'caissa' ); ?>
				</p>
			</td>
		</tr>
	</table>
	<?php
}

add_action( 'personal_options_update', 'caissa_guardar_foto_autor' );
add_action( 'edit_user_profile_update', 'caissa_guardar_foto_autor' );
function caissa_guardar_foto_autor( $user_id ) {
	if ( ! current_user_can( 'edit_user', $user_id ) ) {
		return;
	}
	// El nonce lo pone WordPress en el formulario de perfil (check_admin_referer ya corrio).
	$url = isset( $_POST['caissa_foto'] ) ? esc_url_raw( wp_unslash( $_POST['caissa_foto'] ) ) : '';
	if ( '' === $url ) {
		delete_user_meta( $user_id, 'caissa_foto' );
		return;
	}
	update_user_meta( $user_id, 'caissa_foto', $url );
}
