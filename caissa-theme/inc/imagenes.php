<?php
/**
 * Imagenes del contenido: dimensiones, carga diferida y base64 fuera del HTML.
 *
 * @package Caissa
 */

/**
 * POR QUE EXISTE ESTE MODULO (medido el 10/09/2026)
 *
 * La nota /blog/las-mejores-agencias-google-ads-argentina/ puntuaba 25 en
 * PageSpeed mobile, contra 48 de otra nota de la MISMA plantilla. La diferencia
 * no era el tema: eran siete PNG pegados en el editor como data URI.
 *
 *   HTML de esa nota .................. 2.629 KB
 *   de eso, base64 dentro del HTML .... 2.561 KB  (97 %)
 *   HTML de las otras cinco notas ..... 61 a 82 KB
 *
 * Un data URI es lo peor de los dos mundos: viaja en el documento, asi que
 * bloquea el parseo y empuja el FCP (10,7 s medidos), no se puede diferir con
 * loading=lazy, no lo cachea el navegador por separado y encima pesa un 33 %
 * mas que el binario. Ademas esas imagenes venian sin width ni height, y ese
 * era el CLS de 0,061 de la nota.
 *
 * QUE HACE
 *
 *   1. Cada data URI de imagen se escribe UNA vez en uploads/caissa-inline/ con
 *      el sha1 de su contenido como nombre, y el src pasa a apuntar al archivo.
 *      El HTML de esa nota baja de 2.629 KB a ~70 KB y las imagenes se vuelven
 *      requests cacheables e independientes.
 *   2. A toda imagen del contenido sin width/height se le miden las reales y se
 *      le escriben, asi el navegador reserva el espacio y el CLS queda en 0.
 *   3. Todas salen con loading=lazy y decoding=async si el nucleo no se los
 *      puso ya: medido, ninguna imagen del cuerpo cae en el primer viewport.
 *
 * ESTO NO REEMPLAZA SUBIR LAS IMAGENES BIEN. Una imagen subida por la
 * biblioteca de medios ademas tiene sus tamanios intermedios y su srcset, y el
 * telefono se baja el de 768px en vez del de 1685. Este modulo la deja
 * cacheable y sin salto de layout; el srcset sigue siendo motivo para
 * reinsertarlas desde el editor. Se hace desde el tema porque el defecto lo
 * escribe el editor y no hay forma de arreglarlo en la plantilla, igual que las
 * tablas anchas de inc/blog.php.
 *
 * POR QUE NO SE GENERAN LOS TAMANIOS INTERMEDIOS
 *
 * Redimensionar siete PNG grandes en la primera peticion que toque la nota es
 * pedirle a esa visita que pague todo el trabajo, con riesgo de timeout. Este
 * modulo solo decodifica y escribe: nada de procesamiento de imagen.
 *
 * SE PUEDE APAGAR ENTERO:
 *
 *   add_filter( 'caissa_imagenes_contenido', '__return_false' );
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Piso, en bytes ya decodificados, para sacar una imagen del HTML.
 *
 * Debajo de esto el data URI conviene: un icono de 2 KB en linea es un request
 * menos y no mueve ninguna metrica.
 */
if ( ! defined( 'CAISSA_IMG_MIN' ) ) {
	define( 'CAISSA_IMG_MIN', 8192 );
}

/**
 * Formatos que se aceptan, mime => extension.
 *
 * SVG queda afuera a proposito: puede traer script adentro, y escribir en
 * uploads un SVG que vino de un data URI seria darle un hueco a cualquiera con
 * permiso de edicion.
 *
 * @return array<string,string>
 */
function caissa_img_formatos() {
	return array(
		'image/png'  => 'png',
		'image/jpeg' => 'jpg',
		'image/jpg'  => 'jpg',
		'image/gif'  => 'gif',
		'image/webp' => 'webp',
	);
}

/**
 * La carpeta donde se guardan, creada si hace falta.
 *
 * Devuelve null si no se puede escribir. Todo el modulo esta escrito para que
 * eso no sea un error: si no hay donde escribir, el contenido sale como vino.
 *
 * @return array{dir:string,url:string}|null
 */
function caissa_img_carpeta() {
	static $cache = false;
	if ( false !== $cache ) {
		return $cache;
	}
	$cache = null;

	$up = wp_get_upload_dir();
	if ( empty( $up['basedir'] ) || empty( $up['baseurl'] ) || ! empty( $up['error'] ) ) {
		return $cache;
	}

	$dir = $up['basedir'] . '/caissa-inline';
	if ( ! is_dir( $dir ) && ! wp_mkdir_p( $dir ) ) {
		return $cache;
	}
	if ( ! is_writable( $dir ) ) {
		return $cache;
	}

	$cache = array(
		'dir' => $dir,
		'url' => $up['baseurl'] . '/caissa-inline',
	);
	return $cache;
}

/**
 * Escribe un data URI como archivo y devuelve su URL y sus medidas.
 *
 * El nombre es el sha1 del base64, asi que la misma imagen pegada en dos notas
 * se escribe una sola vez y volver a publicar no duplica nada. Si el archivo ya
 * esta, no se decodifica de nuevo.
 *
 * @param string $mime El mime declarado en el data URI.
 * @param string $b64  La carga en base64, tal como vino.
 * @return array{url:string,ancho:int,alto:int}|null
 */
function caissa_img_desde_base64( $mime, $b64 ) {
	$formatos = caissa_img_formatos();
	$mime     = strtolower( $mime );
	if ( ! isset( $formatos[ $mime ] ) ) {
		return null;
	}

	$carpeta = caissa_img_carpeta();
	if ( null === $carpeta ) {
		return null;
	}

	$nombre = sha1( $b64 ) . '.' . $formatos[ $mime ];
	$ruta   = $carpeta['dir'] . '/' . $nombre;

	if ( ! file_exists( $ruta ) ) {
		// El editor puede haber cortado el base64 en lineas.
		$bytes = base64_decode( preg_replace( '/\s+/', '', $b64 ), true );
		if ( false === $bytes || strlen( $bytes ) < CAISSA_IMG_MIN ) {
			return null;
		}
		if ( false === file_put_contents( $ruta, $bytes ) ) { // phpcs:ignore WordPress.WP.AlternativeFunctions
			return null;
		}
	}

	// getimagesize() es tambien la validacion: si lo que se escribio no era una
	// imagen de verdad, el archivo se borra y el data URI queda como estaba.
	$medidas = getimagesize( $ruta );
	if ( ! is_array( $medidas ) || empty( $medidas[0] ) || empty( $medidas[1] ) ) {
		wp_delete_file( $ruta );
		return null;
	}

	return array(
		'url'   => $carpeta['url'] . '/' . $nombre,
		'ancho' => (int) $medidas[0],
		'alto'  => (int) $medidas[1],
	);
}

/**
 * Mide una imagen que ya vive en uploads, a partir de su URL.
 *
 * Solo mira archivos propios: una URL de otro dominio no se toca (no se va a
 * hacer una peticion de red para medir una imagen mientras se arma la pagina).
 *
 * @param string $url La URL del src.
 * @return array{ancho:int,alto:int}|null
 */
function caissa_img_medir( $url ) {
	$up = wp_get_upload_dir();
	if ( empty( $up['basedir'] ) || empty( $up['baseurl'] ) ) {
		return null;
	}

	$limpia = strtok( $url, '?#' );
	if ( ! is_string( $limpia ) || '' === $limpia ) {
		return null;
	}

	// http y https del mismo sitio son el mismo archivo.
	$base = set_url_scheme( $up['baseurl'], 'https' );
	$sube = set_url_scheme( $limpia, 'https' );
	if ( 0 !== strpos( $sube, $base ) ) {
		return null;
	}

	$rel = substr( $sube, strlen( $base ) );
	if ( false !== strpos( $rel, '..' ) ) {
		return null;
	}

	$ruta = $up['basedir'] . $rel;
	if ( ! is_file( $ruta ) ) {
		return null;
	}

	$medidas = getimagesize( $ruta );
	if ( ! is_array( $medidas ) || empty( $medidas[0] ) || empty( $medidas[1] ) ) {
		return null;
	}

	return array(
		'ancho' => (int) $medidas[0],
		'alto'  => (int) $medidas[1],
	);
}

/**
 * Si una etiqueta ya trae un atributo.
 *
 * @param string $tag  La etiqueta completa.
 * @param string $attr El nombre del atributo.
 * @return bool
 */
function caissa_img_tiene( $tag, $attr ) {
	return (bool) preg_match( '/\s' . preg_quote( $attr, '/' ) . '\s*=/i', $tag );
}

/**
 * Agrega atributos justo despues de "<img".
 *
 * @param string               $tag    La etiqueta completa.
 * @param array<string,string> $attrs  Atributos a sumar, solo si faltan.
 * @return string
 */
function caissa_img_sumar( $tag, $attrs ) {
	$nuevos = '';
	foreach ( $attrs as $nombre => $valor ) {
		if ( ! caissa_img_tiene( $tag, $nombre ) ) {
			$nuevos .= ' ' . $nombre . '="' . esc_attr( $valor ) . '"';
		}
	}
	if ( '' === $nuevos ) {
		return $tag;
	}
	return preg_replace( '/^<img/i', '<img' . $nuevos, $tag, 1 );
}

/**
 * El filtro.
 *
 * Va en prioridad 15: el nucleo corre wp_filter_content_tags() en la 10, asi que
 * lo que el haya decidido sobre loading y fetchpriority ya esta escrito y este
 * modulo no lo pisa. Y va antes que el envoltorio de tablas de inc/blog.php,
 * que esta en la 20.
 */
add_filter(
	'the_content',
	function ( $html ) {
		if ( ! is_singular() || ! in_the_loop() ) {
			return $html;
		}
		if ( ! is_string( $html ) || false === stripos( $html, '<img' ) ) {
			return $html;
		}
		if ( ! apply_filters( 'caissa_imagenes_contenido', true ) ) {
			return $html;
		}

		// El trabajo caro (decodificar y medir) se hace una vez por version del
		// contenido. La clave es el hash del HTML que entra, asi que editar la
		// nota invalida la cache sola y no hay nada que purgar.
		$clave    = 'caissa_img_' . md5( $html );
		$guardado = get_transient( $clave );
		if ( is_string( $guardado ) && '' !== $guardado ) {
			return $guardado;
		}

		$nuevo = preg_replace_callback(
			'/<img\b[^>]*>/i',
			function ( $m ) {
				$tag = $m[0];

				if ( ! preg_match( '/\ssrc\s*=\s*("[^"]*"|\'[^\']*\')/i', $tag, $s ) ) {
					return $tag;
				}
				$src = trim( $s[1], '"\'' );

				$ancho = 0;
				$alto  = 0;

				if ( preg_match( '#^data:(image/[a-z+]+);base64,(.*)$#is', $src, $d ) ) {
					$archivo = caissa_img_desde_base64( $d[1], $d[2] );
					if ( null !== $archivo ) {
						// El src se reemplaza con el atributo entero, para no
						// tocar por accidente otra cosa que diga lo mismo.
						$tag   = str_replace( $s[0], ' src="' . esc_url( $archivo['url'] ) . '"', $tag );
						$ancho = $archivo['ancho'];
						$alto  = $archivo['alto'];
					}
				} elseif ( ! caissa_img_tiene( $tag, 'width' ) || ! caissa_img_tiene( $tag, 'height' ) ) {
					$m2 = caissa_img_medir( $src );
					if ( null !== $m2 ) {
						$ancho = $m2['ancho'];
						$alto  = $m2['alto'];
					}
				}

				$attrs = array();

				// Los dos juntos o ninguno: un width sin height, o al revés, le
				// da al navegador una relación de aspecto falsa y el salto de
				// layout queda peor que sin nada.
				if ( $ancho && $alto && ! caissa_img_tiene( $tag, 'width' ) && ! caissa_img_tiene( $tag, 'height' ) ) {
					$attrs['width']  = (string) $ancho;
					$attrs['height'] = (string) $alto;
				}

				// TODAS se difieren, incluida la primera del contenido.
				//
				// MEDIDO el 10/09/2026 a 375x812 en la nota mas cargada del blog:
				// la primera imagen del contenido arranca en el pixel 2.841, o sea
				// a tres pantallas y media del pliegue, y NINGUNA de las siete cae
				// dentro del primer viewport. En una nota el LCP es el titulo o la
				// portada, y esas las emite la plantilla; lo que inserta el editor
				// va siempre debajo del texto de entrada.
				//
				// La convencion de "la primera imagen no se difiere" es del nucleo
				// y esta pensada para una portada, no para el cuerpo de un
				// articulo largo. Igual el nucleo tiene la ultima palabra: si el
				// decidio que una es el LCP y le puso loading=eager o
				// fetchpriority=high, caissa_img_sumar() no lo pisa, porque solo
				// agrega los atributos que faltan.
				$attrs['loading']  = 'lazy';
				$attrs['decoding'] = 'async';

				return caissa_img_sumar( $tag, $attrs );
			},
			$html
		);

		// preg_replace_callback() devuelve null si PCRE se queda sin recursos, y
		// un data URI de 400 KB es justo el caso que lo puede provocar. Sin esta
		// guarda el contenido de la nota desapareceria.
		if ( ! is_string( $nuevo ) || '' === $nuevo || PREG_NO_ERROR !== preg_last_error() ) {
			return $html;
		}

		if ( $nuevo !== $html ) {
			set_transient( $clave, $nuevo, WEEK_IN_SECONDS );
		}

		return $nuevo;
	},
	15
);
