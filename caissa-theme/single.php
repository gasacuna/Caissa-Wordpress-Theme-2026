<?php
/**
 * La nota abierta. Plantilla de la JERARQUIA de WordPress: se aplica sola.
 *
 * @package Caissa
 */

get_header();

while ( have_posts() ) :
	the_post();
	$cat = caissa_categoria_principal();
	$min = caissa_minutos_lectura();
	?>
<main id="contenido">
	<article <?php post_class(); ?>>

		<header class="bl-post-head">
			<div class="wrap">
				<?php if ( $cat ) : ?>
				<a class="eyebrow" href="<?php echo esc_url( get_category_link( $cat ) ); ?>"><?php echo esc_html( $cat->name ); ?></a>
				<?php endif; ?>
				<h1><?php the_title(); ?></h1>
				<div class="bl-meta">
					<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
					<span class="punto" aria-hidden="true"></span>
					<span><?php echo esc_html( $min ); ?> min de lectura</span>
					<span class="punto" aria-hidden="true"></span>
					<span><?php esc_html_e( 'por', 'caissa' ); ?> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span>
				</div>
			</div>
		</header>

		<?php if ( has_post_thumbnail() ) : ?>
		<figure class="bl-portada">
			<?php the_post_thumbnail( 'large', array( 'fetchpriority' => 'high', 'decoding' => 'async' ) ); ?>
			<?php
			$pie = wp_get_attachment_caption( get_post_thumbnail_id() );
			if ( $pie ) :
				?>
			<figcaption><?php echo esc_html( $pie ); ?></figcaption>
			<?php endif; ?>
		</figure>
		<?php endif; ?>

		<div class="wrap">
			<div class="bl-prose">
				<?php the_content(); ?>
			</div>

			<?php
			/*
			 * Caja de autor. Dos variantes, segun lo que tenga cargado la persona:
			 *   - con biografia: foto, "Escrito por", nombre y la bio plegada a dos
			 *     renglones, con un "Leer mas" que es texto, no un boton.
			 *   - sin biografia: solo la foto y el nombre. Es el caso de las notas que
			 *     escribe otra persona del equipo, donde no hay nada mas que decir.
			 * La bio se llena en Usuarios > Perfil > Informacion biografica.
			 */
			$uid = (int) get_the_author_meta( 'ID' );
			$bio = trim( (string) get_the_author_meta( 'description' ) );
			?>
			<aside class="bl-autor<?php echo $bio ? '' : ' bl-autor--simple'; ?>">
				<?php caissa_avatar_autor( $uid ); ?>
				<div class="bl-autor-datos">
					<?php if ( $bio ) : ?>
					<span class="bl-autor-rot"><?php esc_html_e( 'Escrito por', 'caissa' ); ?></span>
					<?php endif; ?>
					<h2><?php the_author(); ?></h2>
					<?php if ( $bio ) : ?>
					<p class="bl-autor-bio" id="bio-autor"><?php echo esc_html( $bio ); ?></p>
					<button type="button" class="bl-autor-mas" aria-expanded="false" aria-controls="bio-autor">
						<span class="bl-autor-mas-txt"><?php esc_html_e( 'Leer más', 'caissa' ); ?></span>
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</button>
					<?php endif; ?>
				</div>
			</aside>

			<?php
			$blog = (int) get_option( 'page_for_posts' );
			if ( $blog ) :
				?>
			<a class="bl-volver" href="<?php echo esc_url( get_permalink( $blog ) ); ?>"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" aria-hidden="true"><path d="M19 12H5M11 18l-6-6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg><?php esc_html_e( 'Volver al blog', 'caissa' ); ?></a>
			<?php endif; ?>
		</div>

		<?php
		// Relacionadas: de la misma categoria principal, sin repetir la actual.
		$rel = caissa_relacionadas( get_the_ID(), $cat );
		if ( $rel && $rel->have_posts() ) :
			?>
		<section class="bl-rel">
			<div class="wrap">
				<h2><?php esc_html_e( 'Seguí leyendo', 'caissa' ); ?></h2>
				<div class="bl-grid">
					<?php
					while ( $rel->have_posts() ) :
						$rel->the_post();
						get_template_part( 'template-parts/tarjeta-post' );
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</section>
		<?php endif; ?>

	</article>

	<?php get_template_part( 'template-parts/cta-blog' ); ?>
</main>
	<?php
endwhile;

get_footer();
