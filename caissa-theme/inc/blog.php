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
	$min = max( 1, (int) ceil( $palabras / 200 ) );

	/*
	 * Filtrable a proposito. Si algun plugin publica su propio tiempo de lectura en una
	 * meta (paso: la nota mostraba "17 min" en pantalla y "16 minutos" en twitter:data2),
	 * los dos numeros salen de algoritmos distintos y no hay forma de que coincidan solos.
	 * Con este filtro se puede forzar el del tema al del plugin, o al revés, y que el
	 * visitante vea siempre lo mismo que el snippet.
	 *
	 * @param int $min      Minutos calculados por el tema.
	 * @param int $palabras Palabras contadas.
	 * @param WP_Post $post
	 */
	return (int) apply_filters( 'caissa_minutos_lectura', $min, $palabras, $post );
}

/**
 * La categoria principal de una nota, para el rotulo visible.
 *
 * MANDA RANK MATH. Si la nota tiene categoria primaria elegida ahi, esa es la que se
 * muestra. Es lo unico coherente: Rank Math ya usa esa categoria para article:section y
 * para el breadcrumb, asi que si el tema eligiera otra, el rotulo en pantalla
 * contradiria al marcado. Paso de verdad: una nota con tres categorias (Marketing
 * Online, PPC y Ranking) mostraba "PPC" en el eyebrow y declaraba "Marketing Online"
 * en article:section.
 *
 * Sin Rank Math, o sin primaria elegida, cae en la categoria con mas entradas, que en la
 * practica es la mas general.
 */
function caissa_categoria_principal( $post = null ) {
	$p = get_post( $post );
	if ( ! $p ) {
		return null;
	}
	$cats = get_the_category( $p->ID );
	if ( empty( $cats ) ) {
		return null;
	}

	// Rank Math guarda la primaria en este meta. La de Yoast va por si algun dia se migra.
	foreach ( array( 'rank_math_primary_category', '_yoast_wpseo_primary_category' ) as $clave ) {
		$id = (int) get_post_meta( $p->ID, $clave, true );
		if ( ! $id ) {
			continue;
		}
		foreach ( $cats as $c ) {
			if ( (int) $c->term_id === $id ) {
				return $c;
			}
		}
	}

	usort( $cats, function ( $a, $b ) { return $b->count - $a->count; } );
	return $cats[0];
}

/**
 * La URL de ENTIDAD de un autor: su perfil del sitio, no el archivo de autor de WordPress.
 *
 * Por que importa: el schema y el contenido apuntan a /equipo/manu-ferrini/, pero el link
 * "por Manu Ferrini" apuntaba a /blog/author/manu-ferrini/. Son dos URLs para la misma
 * persona, y eso diluye la entidad justo donde mas rinde: el nodo Person es lo que leen
 * Google y los modelos de IA para saber quien firma.
 *
 * El mapa se amplia sin tocar codigo con el filtro caissa_perfiles_autor. La clave es el
 * nombre para mostrar pasado por sanitize_title, igual que en caissa_foto_autor().
 *
 * @param int $user_id
 * @return string Ruta del perfil, o cadena vacia si esa persona no tiene.
 */
function caissa_perfil_autor( $user_id ) {
	$mapa = apply_filters(
		'caissa_perfiles_autor',
		array(
			// Las dos formas del nombre, por si en el perfil figura como Manu o Manuel.
			'manu-ferrini'   => '/equipo/manu-ferrini/',
			'manuel-ferrini' => '/equipo/manu-ferrini/',
			'martin-pera'    => '/equipo/martin-pera/',
		)
	);
	$clave = sanitize_title( get_the_author_meta( 'display_name', $user_id ) );
	return isset( $mapa[ $clave ] ) ? (string) $mapa[ $clave ] : '';
}

/**
 * El enlace del autor en la firma de la nota.
 *
 * Va al perfil del sitio si esa persona tiene uno, y si no al archivo de autor de
 * WordPress, que es el comportamiento por defecto. rel="author me" declara que el destino
 * es la pagina de quien firma: es lo que tenia la version anterior del sitio.
 */
function caissa_enlace_autor( $user_id ) {
	$perfil = caissa_perfil_autor( $user_id );
	$url    = $perfil ? $perfil : get_author_posts_url( $user_id );
	printf(
		'<a href="%s" rel="author me">%s</a>',
		esc_url( $url ),
		esc_html( get_the_author_meta( 'display_name', $user_id ) )
	);
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
 *
 * El alt lleva el nombre de la persona y no va vacio. Un alt="" declara "esta imagen no
 * aporta nada", y aca aporta: es el retrato de quien firma la nota, la parte visible de la
 * entidad autor. Con el nombre adentro, el retrato tambien ancla la entidad.
 */
function caissa_avatar_autor( $user_id, $px = 112 ) {
	$nombre = (string) get_the_author_meta( 'display_name', $user_id );
	$url    = caissa_foto_autor( $user_id );
	if ( $url ) {
		printf(
			'<img src="%s" alt="%s" width="%d" height="%d" loading="lazy" decoding="async">',
			esc_url( $url ),
			/* translators: %s: nombre del autor. */
			esc_attr( sprintf( __( 'Foto de %s', 'caissa' ), $nombre ) ),
			(int) $px,
			(int) $px
		);
		return;
	}
	echo get_avatar( $user_id, $px, '', sprintf( __( 'Foto de %s', 'caissa' ), $nombre ), array( 'loading' => 'lazy' ) );
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

/* =============================================================================
   INTEGRACION CON RANK MATH

   REGLA: el schema y las metas de SEO los emite RANK MATH, no el tema. Ninguna
   plantilla del blog imprime JSON-LD (verificable: no hay un solo
   application/ld+json en single/home/archive/search/404 ni en los parciales).
   Lo de abajo NO agrega nodos que compitan con los de Rank Math: entra por sus
   propios filtros y completa el grafo que el ya emite.

   Por que importa la distincion: dos nodos BlogPosting en la misma pagina compiten
   y Google elige uno. Enriquecer el nodo existente da el mismo resultado que
   pretendia el snippet suelto de Elementor, pero sin el conflicto.
   ============================================================================= */

/**
 * Breadcrumb VISIBLE en la nota.
 *
 * El BreadcrumbList estaba en el schema pero no habia nada en pantalla que le
 * correspondiera, y Google pide que el marcado se corresponda con algo visible.
 *
 * Se usa el breadcrumb de Rank Math cuando esta disponible, y no uno propio: asi lo que
 * se ve y lo que se declara salen de la MISMA fuente y no pueden divergir. Si el modulo
 * esta apagado, se arma uno equivalente a mano, con el nivel "Blog" incluido
 * (Inicio > Blog > Articulo), que es el que faltaba en las dos versiones del sitio.
 */
function caissa_breadcrumb() {
	if ( function_exists( 'rank_math_the_breadcrumbs' ) ) {
		echo '<div class="bl-crumbs wrap">';
		rank_math_the_breadcrumbs();
		echo '</div>';
		return;
	}

	$items = array( array( 'url' => home_url( '/' ), 'txt' => __( 'Inicio', 'caissa' ) ) );

	$blog = (int) get_option( 'page_for_posts' );
	if ( $blog ) {
		$items[] = array( 'url' => get_permalink( $blog ), 'txt' => get_the_title( $blog ) );
	}

	$cat = caissa_categoria_principal();
	if ( $cat ) {
		$items[] = array( 'url' => get_category_link( $cat ), 'txt' => $cat->name );
	}

	echo '<nav class="bl-crumbs wrap" aria-label="' . esc_attr__( 'Migas de pan', 'caissa' ) . '">';
	foreach ( $items as $it ) {
		printf(
			'<a href="%s">%s</a><span class="sep" aria-hidden="true">/</span>',
			esc_url( $it['url'] ),
			esc_html( $it['txt'] )
		);
	}
	echo '<span aria-current="page">' . esc_html( get_the_title() ) . '</span>';
	echo '</nav>';
}

/**
 * El title="" autogenerado de la imagen destacada.
 *
 * WordPress arrastra el titulo del adjunto al atributo title de la imagen, y los titulos
 * que genera solos son del tipo "loquesea 1": no describen nada, y un title en una imagen
 * se muestra como tooltip al pasar el mouse. El alt se conserva, que es el que importa.
 */
add_filter(
	'wp_get_attachment_image_attributes',
	function ( $attr ) {
		unset( $attr['title'] );
		return $attr;
	},
	20
);

/**
 * og:locale acorde al idioma del sitio.
 *
 * Estaba declarando es_ES (Espana) mientras el documento dice lang="es-AR". Facebook
 * acepta es_LA para el espanol de Latinoamerica, que es lo que corresponde: es_AR no esta
 * en su lista de locales soportados.
 */
add_filter(
	'rank_math/opengraph/facebook/locale',
	function ( $locale ) {
		$lang = strtolower( (string) get_bloginfo( 'language' ) );
		return ( 0 === strpos( $lang, 'es' ) && 'es-es' !== $lang ) ? 'es_LA' : $locale;
	}
);

/**
 * Arma un ItemList con los H2 del contenido, para las notas que SON un listado.
 *
 * Se activa por nota con la casilla "Esta nota es un listado" (campo caissa_itemlist).
 * Cada H2 del cuerpo pasa a ser un ListItem con su position y su name; si el H2 tiene un
 * enlace adentro, ese enlace va como url del item.
 *
 * @return array|null
 */
function caissa_itemlist_de_la_nota() {
	if ( '1' !== (string) get_post_meta( get_the_ID(), 'caissa_itemlist', true ) ) {
		return null;
	}

	$html = (string) get_post_field( 'post_content', get_the_ID() );
	if ( ! preg_match_all( '/<h2\b[^>]*>(.*?)<\/h2>/is', $html, $m ) ) {
		return null;
	}

	$items = array();
	foreach ( $m[1] as $interior ) {
		$nombre = trim( wp_strip_all_tags( $interior ) );
		if ( '' === $nombre ) {
			continue;
		}
		$item = array(
			'@type'    => 'ListItem',
			'position' => count( $items ) + 1,
			'name'     => $nombre,
		);
		if ( preg_match( '/<a\b[^>]*href=("|\')([^"\']+)/i', $interior, $a ) ) {
			$item['url'] = esc_url_raw( $a[2] );
		}
		$items[] = $item;
	}

	if ( count( $items ) < 2 ) {
		return null;
	}

	return array(
		'@type'           => 'ItemList',
		'itemListOrder'   => 'https://schema.org/ItemListOrderAscending',
		'numberOfItems'   => count( $items ),
		'itemListElement' => $items,
	);
}

/**
 * Completa el nodo que Rank Math ya emite para la nota.
 *
 * Rank Math no pone wordCount, mainEntityOfPage ni image en el BlogPosting, y los tres son
 * de los que usan Google y los motores generativos para dimensionar y ubicar el articulo.
 * Se agregan SOBRE su nodo, no en uno nuevo.
 *
 * Y si la nota esta marcada como listado, se le cuelga el ItemList como mainEntity: es el
 * marcado que Google usa para los carruseles de listas y el que parsean mas limpio los
 * modelos para responder "cuales son las mejores agencias de Argentina".
 */
add_filter(
	'rank_math/json_ld',
	function ( $data, $jsonld ) {
		if ( ! is_singular( 'post' ) ) {
			return $data;
		}

		foreach ( $data as $clave => $nodo ) {
			if ( empty( $nodo['@type'] ) ) {
				continue;
			}
			$tipos = (array) $nodo['@type'];
			if ( ! array_intersect( $tipos, array( 'BlogPosting', 'Article', 'NewsArticle' ) ) ) {
				continue;
			}

			if ( empty( $nodo['wordCount'] ) ) {
				$texto = wp_strip_all_tags( strip_shortcodes( (string) get_post_field( 'post_content', get_the_ID() ) ) );
				$n     = preg_match_all( '/[\p{L}\p{N}]+/u', $texto, $m ) ? count( $m[0] ) : 0;
				if ( $n ) {
					$nodo['wordCount'] = $n;
				}
			}

			if ( empty( $nodo['mainEntityOfPage'] ) ) {
				$nodo['mainEntityOfPage'] = array( '@id' => get_permalink() . '#webpage' );
			}

			if ( empty( $nodo['image'] ) && has_post_thumbnail() ) {
				$src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
				if ( $src ) {
					$nodo['image'] = array(
						'@type'  => 'ImageObject',
						'url'    => $src[0],
						'width'  => (int) $src[1],
						'height' => (int) $src[2],
					);
				}
			}

			$lista = caissa_itemlist_de_la_nota();
			if ( $lista && empty( $nodo['mainEntity'] ) ) {
				$nodo['mainEntity'] = $lista;
			}

			$data[ $clave ] = $nodo;
		}

		return $data;
	},
	20,
	2
);

/**
 * La casilla "Esta nota es un listado", en la columna lateral del editor.
 *
 * Es lo que activa el ItemList, sin tener que acordarse del nombre del campo
 * personalizado ni habilitar el panel de campos personalizados.
 */
add_action(
	'add_meta_boxes',
	function () {
		add_meta_box(
			'caissa-itemlist',
			__( 'Caissa · listado', 'caissa' ),
			'caissa_caja_itemlist',
			'post',
			'side',
			'default'
		);
	}
);

function caissa_caja_itemlist( $post ) {
	wp_nonce_field( 'caissa_itemlist', 'caissa_itemlist_nonce' );
	$on = '1' === (string) get_post_meta( $post->ID, 'caissa_itemlist', true );
	?>
	<label>
		<input type="checkbox" name="caissa_itemlist" value="1" <?php checked( $on ); ?>>
		<?php esc_html_e( 'Esta nota es un listado', 'caissa' ); ?>
	</label>
	<p class="description">
		<?php esc_html_e( 'Suma un ItemList al schema de Rank Math, armado con los H2 del cuerpo. Tildalo sólo si los H2 son los ítems de una lista (por ejemplo, "las 10 mejores agencias"): en una nota común los H2 no son ítems de nada y el marcado sería falso.', 'caissa' ); ?>
	</p>
	<?php
}

add_action( 'save_post_post', 'caissa_guardar_itemlist' );
function caissa_guardar_itemlist( $post_id ) {
	if ( ! isset( $_POST['caissa_itemlist_nonce'] ) ) {
		return;
	}
	if ( ! wp_verify_nonce( sanitize_key( wp_unslash( $_POST['caissa_itemlist_nonce'] ) ), 'caissa_itemlist' ) ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) || wp_is_post_revision( $post_id ) ) {
		return;
	}
	if ( empty( $_POST['caissa_itemlist'] ) ) {
		delete_post_meta( $post_id, 'caissa_itemlist' );
		return;
	}
	update_post_meta( $post_id, 'caissa_itemlist', '1' );
}

/**
 * El archivo de autor de WordPress, fuera del indice.
 *
 * La firma de la nota ahora apunta a /equipo/<persona>/, asi que /blog/author/<persona>/
 * queda como una segunda URL para la misma entidad, con el mismo contenido que el listado
 * y sin nadie que la enlace. Indexarla solo diluye.
 *
 * SOLO se aplica si Rank Math NO esta activo: si esta, esa decision es suya
 * (Titulos y Metas > Otros archivos) y el tema no le discute.
 */
add_filter(
	'wp_robots',
	function ( $robots ) {
		if ( defined( 'RANK_MATH_VERSION' ) || class_exists( 'RankMath' ) ) {
			return $robots;
		}
		if ( is_author() ) {
			$robots['noindex'] = true;
			$robots['follow']  = true;
			unset( $robots['index'] );
		}
		return $robots;
	},
	20
);

/**
 * Marca las vistas del blog en el <body>.
 *
 * Existe para una sola cosa: que assets/css/blog.css pueda apagar el canvas de
 * degradés del chasis y dejar el fondo casi blanco (pedido de Gaston,
 * 10/09/2026). El detalle de por que, con los ratios de contraste medidos, esta
 * en el comentario de esa regla en blog.css.
 *
 * Se apoya en caissa_es_blog(), que es la misma condicion con la que
 * inc/enqueue.php decide encolar blog.css: asi la clase y la hoja no pueden
 * quedar desalineadas.
 *
 * Desde 1.24 es el UNICO filtro de body_class del tema. Hasta 1.23 inc/parts.php
 * tenia otro, para la clase caissa-sticky-scroll del umbral de la barra sticky de
 * la home, que se saco junto con el umbral. Si alguien agrega otro, que sea igual
 * de acotado: un filtro de body_class solo tiene que AGREGAR al array que recibe,
 * nunca reemplazarlo, o se pisan entre si.
 */
add_filter(
	'body_class',
	function ( $clases ) {
		if ( caissa_es_blog() ) {
			$clases[] = 'caissa-vista-blog';
		}
		return $clases;
	}
);

/**
 * INDICE DE CONTENIDOS de la nota abierta (29/09/2026, pedido de Gaston).
 *
 * POR QUE EXISTE. Las notas tenian un indice de Elementor y al migrar se perdio.
 * En Search Console eso se ve clarisimo: en la nota de "mejores agencias de
 * marketing digital" los anclajes (#elementor-toc__heading-anchor-N) sumaban
 * unas 5.500 impresiones en la ventana del 11 al 25/8 y quedaron en CERO en la
 * del 11 al 25/9. No eran clics propios -los anclajes marcaban 0- sino los
 * enlaces de salto que Google arma debajo del resultado cuando la pagina tiene
 * un indice con anclas. Sin indice no hay anclas, y sin anclas no hay saltos.
 *
 * COMO FUNCIONA. Filtro de the_content con prioridad 25, o sea DESPUES de
 * wpautop (10), de las imagenes (15) y de las tablas (20). La prioridad no es
 * un detalle: por debajo de 10 wpautop envolveria el markup del indice en <p>
 * y lo romperia.
 *
 * Una sola pasada de preg_replace_callback hace las dos cosas: le pone id a
 * cada h2/h3 que no lo tenga y va juntando la lista. Despues el indice se
 * antepone al contenido.
 *
 * DONDE VA: arriba de todo, o sea justo debajo de la imagen de portada, que
 * vive en single.php y no en el contenido. Lo pidio Gaston el 30/09/2026 con
 * una captura. La version anterior lo metia DESPUES de la entradilla, antes del
 * primer encabezado; con el indice arrancando colapsado -57px- ya no hay motivo
 * para empujarlo abajo, y arriba es donde el lector lo busca.
 *
 * DECISIONES QUE CONVIENE NO DESHACER SIN PENSARLAS
 *
 *   - Los id salen del TEXTO del encabezado (sanitize_title), no de su posicion.
 *     Elementor numeraba: heading-anchor-0, -1, -2... Si el editor reordenaba
 *     una seccion, los anclajes indexados pasaban a apuntar a otra cosa. Con el
 *     texto, el ancla viaja con su seccion. Ademas un ancla legible es mejor
 *     enlace de salto: Google muestra el fragmento en el resultado.
 *   - Si un encabezado YA trae id (se lo puso el editor, o un plugin), se
 *     respeta. Nunca se pisa: puede haber enlaces apuntando ahi.
 *   - Los repetidos se desambiguan con -2, -3... Dos "Conclusion" en la misma
 *     nota no pueden compartir id.
 *   - NO hay JavaScript. <details> colapsa solo, funciona con teclado, lo leen
 *     los lectores de pantalla, y su contenido esta en el DOM aunque este
 *     cerrado, asi que Google lo rastrea igual. El scroll suave y el offset del
 *     header sticky ya los da base.css (scroll-behavior:smooth y
 *     scroll-padding-top:84px), que el blog carga siempre.
 *   - NO se cachea en un transient. Es una pasada de regex sobre un string;
 *     imagenes.php cachea porque escribe archivos, aca no hay nada que cachear.
 *
 * LO QUE NO SE HIZO, por si alguien lo extraña: reponer los id viejos de
 * Elementor (heading-anchor-N) como anclas invisibles extra. No recuperan las
 * impresiones -eso lo hace el indice- y solo servirian para que un enlace
 * externo viejo caiga en la seccion correcta. A cambio metian un elemento por
 * encabezado con un nombre de clase de un page builder que este tema no usa.
 * Si aparecen backlinks a esos fragmentos, se agrega y listo.
 *
 * Filtros:
 *   caissa_indice_blog        bool   false apaga el indice en todo el blog
 *   caissa_indice_niveles     array  que encabezados entran. Por defecto 2 y 3
 *   caissa_indice_minimo      int    cuantos hacen falta para mostrarlo (3)
 *   caissa_indice_titulo      string el rotulo del desplegable
 *   caissa_indice_abierto     bool   si arranca desplegado. FALSE por defecto:
 *                                   Gaston pidio que lo abra el lector. Ojo, el
 *                                   contenido de un <details> cerrado igual esta
 *                                   en el DOM, asi que Google lo rastrea.
 */

/**
 * Los niveles de encabezado que entran al indice, saneados.
 *
 * @return array<int,int> Lista de 2..4, ordenada y sin repetidos.
 */
function caissa_indice_niveles() {
	$pedidos = (array) apply_filters( 'caissa_indice_niveles', array( 2, 3 ) );
	$limpios = array();
	foreach ( $pedidos as $n ) {
		$n = (int) $n;
		if ( $n >= 2 && $n <= 4 && ! in_array( $n, $limpios, true ) ) {
			$limpios[] = $n;
		}
	}
	sort( $limpios );
	return $limpios;
}

/**
 * El markup del indice.
 *
 * @param array $items Cada uno con nivel, id y txt (texto plano ya decodificado).
 * @return string
 */
function caissa_indice_markup( $items ) {
	$titulo  = (string) apply_filters( 'caissa_indice_titulo', __( 'Índice de contenidos', 'caissa' ) );
	$abierto = (bool) apply_filters( 'caissa_indice_abierto', false );

	$out  = '<nav class="bl-toc" aria-labelledby="bl-toc-rot">';
	$out .= '<details class="bl-toc-caja"' . ( $abierto ? ' open' : '' ) . '>';
	$out .= '<summary class="bl-toc-cab">';
	$out .= '<svg class="bl-toc-ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M8 6h13M8 12h13M8 18h13M3.5 6h.01M3.5 12h.01M3.5 18h.01" stroke-linecap="round"/></svg>';
	$out .= '<span class="bl-toc-rot" id="bl-toc-rot">' . esc_html( $titulo ) . '</span>';
	$out .= '<svg class="bl-toc-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg>';
	$out .= '</summary>';
	$out .= '<ol class="bl-toc-lista">';
	foreach ( $items as $it ) {
		$out .= '<li class="bl-toc-n' . (int) $it['nivel'] . '">';
		$out .= '<a href="#' . esc_attr( $it['id'] ) . '">' . esc_html( $it['txt'] ) . '</a>';
		$out .= '</li>';
	}
	$out .= '</ol></details></nav>';

	return $out;
}

add_filter( 'the_content', 'caissa_indice_contenido', 25 );
/**
 * Pone id a los encabezados de la nota y le antepone el indice.
 *
 * @param string $html Contenido ya procesado por los filtros anteriores.
 * @return string
 */
function caissa_indice_contenido( $html ) {
	if ( ! is_singular( 'post' ) || ! in_the_loop() || ! is_main_query() ) {
		return $html;
	}
	if ( ! is_string( $html ) || '' === $html ) {
		return $html;
	}
	if ( ! apply_filters( 'caissa_indice_blog', true ) ) {
		return $html;
	}
	/*
	 * Si ya hay un indice, no se pone otro. Pasa cuando algo vuelve a aplicar
	 * the_content sobre contenido ya filtrado (lo hacen varios plugins de cache
	 * y de extractos), y tambien si alguna vez alguien pega uno a mano.
	 */
	if ( false !== strpos( $html, 'class="bl-toc"' ) ) {
		return $html;
	}

	$niveles = caissa_indice_niveles();
	if ( ! $niveles ) {
		return $html;
	}

	$clase  = '[' . implode( '', $niveles ) . ']';
	$items  = array();
	$usados = array();

	$nuevo = preg_replace_callback(
		'/<h(' . $clase . ')\b([^>]*)>(.*?)<\/h\1\s*>/is',
		function ( $m ) use ( &$items, &$usados ) {
			$nivel = (int) $m[1];
			$attr  = $m[2];
			$crudo = $m[3];

			// El texto visible del encabezado, sin etiquetas y sin entidades.
			$txt = trim( html_entity_decode( wp_strip_all_tags( $crudo ), ENT_QUOTES, 'UTF-8' ) );
			$txt = trim( preg_replace( '/\s+/u', ' ', $txt ) );
			if ( '' === $txt ) {
				return $m[0]; // Un encabezado sin texto no va al indice ni lleva id.
			}

			// Si ya tiene id, manda el que esta: puede haber enlaces apuntando ahi.
			$id = '';
			if ( preg_match( '/\sid=("|\')(.*?)\1/i', $attr, $mid ) ) {
				$id = trim( $mid[2] );
			}

			if ( '' === $id ) {
				$base = sanitize_title( $txt );
				if ( '' === $base ) {
					$base = 'seccion';
				}
				/*
				 * Un id no puede EMPEZAR con un numero. En HTML5 es valido y el salto
				 * del navegador funciona igual (resuelve por getElementById), pero
				 * '#7-buho-media' NO es un selector CSS valido: document.querySelector
				 * tira SyntaxError y una regla #7-... no aplica nunca. En estas notas
				 * pasa seguido, porque los h2 de los rankings empiezan con "1.", "2."...
				 * Se le antepone "seccion-" SOLO en ese caso, para no ensuciar los
				 * anclajes que ya arrancan con letra.
				 */
				if ( preg_match( '/^[0-9]/', $base ) ) {
					$base = 'seccion-' . $base;
				}
				$id = $base;
				$n  = 2;
				while ( isset( $usados[ $id ] ) ) {
					$id = $base . '-' . $n;
					++$n;
				}
				$attr = rtrim( $attr ) . ' id="' . esc_attr( $id ) . '"';
			}

			$usados[ $id ] = true;
			$items[]       = array(
				'nivel' => $nivel,
				'id'    => $id,
				'txt'   => $txt,
			);

			return '<h' . $nivel . $attr . '>' . $crudo . '</h' . $nivel . '>';
		},
		$html
	);

	// Si la regex se quedo sin pila (contenido enorme), se devuelve lo original.
	if ( ! is_string( $nuevo ) || '' === $nuevo || PREG_NO_ERROR !== preg_last_error() ) {
		return $html;
	}

	$minimo = max( 2, (int) apply_filters( 'caissa_indice_minimo', 3 ) );
	if ( count( $items ) < $minimo ) {
		return $nuevo; // Pocos encabezados para un indice, pero los id se quedan.
	}

	// Arriba de todo: el contenido empieza con el indice.
	return caissa_indice_markup( $items ) . $nuevo;
}

/**
 * La URL del listado del blog, o cadena vacia si no hay pagina de entradas.
 *
 * @return string
 */
function caissa_url_blog() {
	$id = (int) get_option( 'page_for_posts' );
	if ( ! $id ) {
		return '';
	}
	$url = get_permalink( $id );
	return is_string( $url ) ? $url : '';
}

/**
 * CANONICAL DE LA PAGINACION DEL BLOG -> /blog/ (06/10/2026, pedido de Gaston).
 *
 * Hoy /blog/page/2/ se auto-canonicaliza: Rank Math emite
 * <link rel="canonical" href="https://caissa.digital/blog/page/2/">. Con esto las
 * doce paginas (verificado: la 13 da 404) pasan a apuntar a /blog/.
 *
 * ⚠️ LO QUE HAY QUE SABER ANTES DE TOCAR ESTO. Google recomienda lo contrario: que
 * cada pagina de una serie paginada se canonicalice A SI MISMA, porque la pagina 2
 * no es un duplicado de la 1 -lista otras entradas-. Al apuntarlas todas a /blog/
 * se le dice que esas URLs no son la version buena, y lo habitual es que las
 * rastree menos. Si el unico camino a una entrada vieja fuera la paginacion, esa
 * entrada se quedaria sin ruta de descubrimiento.
 *
 * ACA EL RIESGO ES BAJO Y ESTA MEDIDO: post-sitemap.xml lista las 107 entradas, asi
 * que Google las descubre por el sitemap y no depende de la paginacion. Por eso se
 * aplico. Si algun dia desaparece el sitemap de entradas, hay que revisar esto.
 *
 * SI LO QUE SE BUSCA ES QUE SOLO /blog/ ESTE INDEXADA, la herramienta correcta no es
 * el canonical sino noindex,follow en las paginadas: saca las URLs del indice y a la
 * vez conserva el rastreo de los enlaces. Son dos cosas distintas y se pueden querer
 * por separado; esto hace lo que se pidio.
 *
 * La pagina 1 (/blog/) NO se toca: is_paged() es false ahi, asi que conserva su
 * canonical propio.
 *
 * Las CATEGORIAS no entran: ya salen noindex,follow y sin canonical (verificado en
 * produccion el 06/10/2026), que es lo correcto para un archivo no indexable.
 *
 * Filtro para revertirlo sin tocar el tema:
 *   add_filter( 'caissa_canonical_paginacion', '__return_false' );
 */
add_filter(
	'rank_math/frontend/canonical',
	function ( $canonical ) {
		if ( ! is_home() || ! is_paged() ) {
			return $canonical;
		}
		if ( ! apply_filters( 'caissa_canonical_paginacion', true ) ) {
			return $canonical;
		}
		$url = caissa_url_blog();
		return '' !== $url ? $url : $canonical;
	}
);

/**
 * El mismo canonical, para cuando Rank Math NO esta activo.
 *
 * WordPress no emite rel=canonical en archivos -su rel_canonical() solo corre en
 * contenido singular-, asi que sin esto la paginacion quedaria sin ninguno. Va con
 * la guarda de siempre para que nunca se emitan dos: si Rank Math esta, manda el
 * filtro de arriba y esta funcion no imprime nada.
 */
add_action(
	'wp_head',
	function () {
		if ( defined( 'RANK_MATH_VERSION' ) || class_exists( 'RankMath' ) ) {
			return;
		}
		if ( ! is_home() || ! is_paged() ) {
			return;
		}
		if ( ! apply_filters( 'caissa_canonical_paginacion', true ) ) {
			return;
		}
		$url = caissa_url_blog();
		if ( '' !== $url ) {
			echo '<link rel="canonical" href="' . esc_url( $url ) . '" />' . "\n";
		}
	},
	1
);
