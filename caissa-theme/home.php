<?php
/**
 * Listado del blog (la pagina asignada como "Pagina de entradas").
 *
 * Plantilla de la JERARQUIA de WordPress: se aplica sola, no hay que elegirla.
 * El listado, la grilla y la paginacion los pone template-parts/listado.php.
 *
 * @package Caissa
 */

get_header();
?>
<main id="contenido">
	<?php
	get_template_part( 'template-parts/listado' );
	get_template_part( 'template-parts/cta-blog' );
	?>
</main>
<?php
get_footer();
