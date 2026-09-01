<?php
/**
 * Listado del blog: encabezado, grilla y paginacion.
 * Lo comparten home.php, archive.php y search.php.
 *
 * @package Caissa
 */

$titulo = caissa_titulo_blog();
$bajada = caissa_bajada_blog();
// La destacada solo en la primera pagina del listado: en un archivo de categoria o en
// la pagina 2 no hay una "primera nota", hay un tramo de una lista.
$con_destacada = is_home() && ! is_paged();
?>
<div class="bl-head">
	<div class="wrap">
		<span class="eyebrow"><?php echo is_home() ? esc_html__( 'Blog', 'caissa' ) : esc_html__( 'Blog de Caissa', 'caissa' ); ?></span>
		<h1><?php echo wp_kses_post( $titulo ); ?></h1>
		<?php if ( $bajada ) : ?>
		<div class="bl-bajada"><?php echo wp_kses_post( $bajada ); ?></div>
		<?php endif; ?>
		<?php
		// Chips de categoria. Solo si hay mas de una: con una sola no aporta nada.
		$cats = get_categories( array( 'hide_empty' => true ) );
		if ( count( $cats ) > 1 ) :
			$actual = is_category() ? (int) get_queried_object_id() : 0;
			?>
		<nav class="bl-cats" aria-label="<?php esc_attr_e( 'Categorías del blog', 'caissa' ); ?>">
			<?php
			$blog = (int) get_option( 'page_for_posts' );
			if ( $blog ) :
				?>
			<a href="<?php echo esc_url( get_permalink( $blog ) ); ?>"<?php echo is_home() ? ' aria-current="page"' : ''; ?>><?php esc_html_e( 'Todas', 'caissa' ); ?></a>
			<?php endif; ?>
			<?php foreach ( $cats as $c ) : ?>
			<a href="<?php echo esc_url( get_category_link( $c ) ); ?>"<?php echo $actual === (int) $c->term_id ? ' aria-current="page"' : ''; ?>><?php echo esc_html( $c->name ); ?></a>
			<?php endforeach; ?>
		</nav>
		<?php endif; ?>
	</div>
</div>

<div class="wrap">
	<?php if ( have_posts() ) : ?>
	<div class="bl-grid">
		<?php
		$i = 0;
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/tarjeta-post', null, array( 'destacada' => ( 0 === $i && $con_destacada ) ) );
			$i++;
		endwhile;
		?>
	</div>
	<?php
	$paginacion = paginate_links(
		array(
			'prev_text' => '&larr;',
			'next_text' => '&rarr;',
			'type'      => 'plain',
		)
	);
	// paginate_links() devuelve null con una sola pagina: sin esto quedaba un
	// <nav> vacio con su aria-label, o sea un landmark sin contenido.
	if ( $paginacion ) {
		echo '<nav class="bl-pag" aria-label=' . '"' . esc_attr__( 'Paginación', 'caissa' ) . '">';
		echo wp_kses_post( $paginacion );
		echo '</nav>';
	}
	?>
	<?php else : ?>
	<div class="bl-vacio">
		<h2><?php esc_html_e( 'Todavía no hay nada acá', 'caissa' ); ?></h2>
		<p><?php esc_html_e( 'Probá con otra búsqueda o volvé al listado completo.', 'caissa' ); ?></p>
		<?php get_search_form(); ?>
	</div>
	<?php endif; ?>
</div>
