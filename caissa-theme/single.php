<?php
/**
 * La nota abierta. Plantilla de la JERARQUIA de WordPress: se aplica sola.
 *
 * OJO CON LOS HEADINGS. Adentro de <article> el unico h1 es el titulo, y los h2 son los
 * del CUERPO de la nota: los escribe el editor y son la estructura que Google y los
 * modelos de lenguaje leen para entender de que habla el articulo. Todo lo que este
 * ALREDEDOR del cuerpo (el nombre del autor, "Segui leyendo", los titulos de las notas
 * relacionadas, el CTA de cierre) va como <p> con estilo, NO como heading: si compite en
 * el mismo nivel, ensucia el esquema del articulo. Era el caso: habia seis h2 de chrome
 * peleandole a los del contenido.
 *
 * El schema lo emite RANK MATH, no esta plantilla. Aca no hay ni un application/ld+json.
 *
 * @package Caissa
 */

get_header();

while ( have_posts() ) :
	the_post();
	$cat = caissa_categoria_principal();
	$min = caissa_minutos_lectura();
	$uid = (int) get_the_author_meta( 'ID' );
	?>
<main id="contenido">
	<article <?php post_class(); ?>>

		<?php
		/*
		 * Breadcrumb visible. El BreadcrumbList estaba en el schema sin nada en pantalla
		 * que le correspondiera, y Google pide que se correspondan. Sale del breadcrumb de
		 * Rank Math cuando esta disponible, para que lo visible y lo declarado no puedan
		 * divergir.
		 */
		caissa_breadcrumb();
		?>

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
					<span><?php esc_html_e( 'por', 'caissa' ); ?> <?php caissa_enlace_autor( $uid ); ?></span>
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
			 *
			 * El nombre va en <p class="bl-autor-nombre"> y no en <h2>: es la firma de la
			 * nota, no una seccion del articulo. Y el enlace apunta al perfil del sitio
			 * (/equipo/<persona>/), que es la URL de entidad, no al archivo de autor.
			 */
			$bio = trim( (string) get_the_author_meta( 'description' ) );
			?>
			<aside class="bl-autor<?php echo $bio ? '' : ' bl-autor--simple'; ?>">
				<?php caissa_avatar_autor( $uid ); ?>
				<div class="bl-autor-datos">
					<?php if ( $bio ) : ?>
					<span class="bl-autor-rot"><?php esc_html_e( 'Escrito por', 'caissa' ); ?></span>
					<?php endif; ?>
					<p class="bl-autor-nombre"><?php caissa_enlace_autor( $uid ); ?></p>
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
				<p class="bl-rel-t"><?php esc_html_e( 'Seguí leyendo', 'caissa' ); ?></p>
				<div class="bl-grid">
					<?php
					while ( $rel->have_posts() ) :
						$rel->the_post();
						/*
						 * titulo => 'p': en el listado del blog el titulo de cada tarjeta
						 * SI es un h2 (es la estructura de ese documento), pero aca esta
						 * dentro de un articulo que ya tiene sus propios h2.
						 */
						get_template_part( 'template-parts/tarjeta-post', null, array( 'titulo' => 'p' ) );
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
