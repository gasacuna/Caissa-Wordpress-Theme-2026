<?php
/**
 * Una tarjeta del listado del blog.
 *
 * @param bool   $args['destacada'] La primera del listado va horizontal y mas grande.
 * @param string $args['titulo']    Etiqueta del titulo: 'h2' (por defecto) o 'p'.
 *
 * Por que el titulo es configurable: en el listado del blog cada tarjeta ES una seccion
 * del documento y su titulo corresponde que sea un h2. Pero la misma tarjeta se reusa en
 * el bloque de relacionadas de una nota abierta, y ahi ese h2 competiria con los h2 del
 * cuerpo del articulo, que son la estructura que leen Google y los modelos de lenguaje.
 * En ese caso single.php pide 'p'.
 *
 * @package Caissa
 */

$destacada = ! empty( $args['destacada'] );
$titulo    = ( isset( $args['titulo'] ) && 'p' === $args['titulo'] ) ? 'p' : 'h2';
$cat       = caissa_categoria_principal();
$min       = caissa_minutos_lectura();
$tiene_img = has_post_thumbnail();
?>
<article class="bl-card reveal<?php echo $destacada ? ' bl-card--destacada' : ''; ?>">
	<?php if ( $tiene_img ) : ?>
	<a class="bl-card-tapa" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
		<?php
		// El tamano se pide grande solo en la destacada: en la grilla se ve a ~340px.
		the_post_thumbnail(
			$destacada ? 'large' : 'medium_large',
			array(
				'loading'  => $destacada ? 'eager' : 'lazy',
				'decoding' => 'async',
				'alt'      => '',
			)
		);
		?>
	</a>
	<?php else : ?>
	<a class="bl-card-tapa sin-img" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
		<span><?php echo esc_html( mb_substr( wp_strip_all_tags( get_the_title() ), 0, 1 ) ); ?></span>
	</a>
	<?php endif; ?>

	<div class="bl-card-cuerpo">
		<?php if ( $cat ) : ?>
		<span class="bl-tag"><?php echo esc_html( $cat->name ); ?></span>
		<?php endif; ?>
		<<?php echo esc_attr( $titulo ); ?> class="bl-card-t"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></<?php echo esc_attr( $titulo ); ?>>
		<?php
		$resumen = get_the_excerpt();
		if ( $resumen ) :
			?>
		<p><?php echo esc_html( wp_trim_words( $resumen, $destacada ? 38 : 22, '…' ) ); ?></p>
		<?php endif; ?>
	</div>

	<div class="bl-card-pie">
		<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
		<span class="punto" aria-hidden="true"></span>
		<span><?php echo esc_html( $min ); ?> min de lectura</span>
	</div>
</article>
