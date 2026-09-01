<?php
/**
 * No encontrado. Plantilla de la jerarquia: se aplica sola.
 *
 * @package Caissa
 */

get_header();
?>
<main id="contenido">
	<div class="bl-head">
		<div class="wrap">
			<span class="eyebrow">Error 404</span>
			<h1><?php echo esc_html( caissa_titulo_blog() ); ?></h1>
			<div class="bl-bajada"><p>El enlace que seguiste no existe o cambió de dirección. Probá con el buscador o volvé al inicio.</p></div>
		</div>
	</div>
	<div class="wrap">
		<div class="bl-vacio">
			<h2>¿Buscabas algo en particular?</h2>
			<?php get_search_form(); ?>
			<p style="margin-top:22px"><a class="bl-volver" href="<?php echo esc_url( home_url( '/' ) ); ?>"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" aria-hidden="true"><path d="M19 12H5M11 18l-6-6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg>Volver al inicio</a></p>
		</div>
	</div>
	<?php get_template_part( 'template-parts/cta-blog' ); ?>
</main>
<?php
get_footer();
