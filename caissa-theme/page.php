<?php
/**
 * Pagina sin plantilla propia.
 *
 * Este tema existe para las 21 plantillas de pagina. Si algo cae aca es
 * porque no tiene plantilla asignada, asi que se imprime el contenido tal cual
 * dentro del chasis del sitio.
 *
 * @package Caissa
 */

get_header();
?>
<main class="wrap" style="padding:64px 0 80px">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
	<article>
		<h1><?php the_title(); ?></h1>
		<div class="entry"><?php the_content(); ?></div>
	</article>
			<?php
		endwhile;
	else :
		?>
	<h1><?php esc_html_e( 'No hay nada acá', 'caissa' ); ?></h1>
		<?php
	endif;
	?>
</main>
<?php
get_footer();
