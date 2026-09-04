<?php
/**
 * El CTA de cierre, en el blog.
 *
 * Reusa el componente .final del sitio con el copy EXACTO de la home: nada de esto se
 * reescribio. Va a una columna (ver blog.css) para no repetir la foto de Manuel en cada
 * nota, que es lo unico que se dejo afuera.
 *
 * El titular va en <p class="bl-cta-t"> y no en <h2>: es un panel de cierre, no una
 * seccion del articulo, y como h2 competia con los h2 del cuerpo de la nota. Se ve igual
 * (blog.css le copia el estilo de .final-copy h2).
 *
 * @package Caissa
 */

?>
<section class="final bl-cta">
	<div class="wrap">
		<div class="final-panel reveal">
			<div class="final-copy">
				<p class="bl-cta-t">Veamos si te podemos ayudar</p>
				<p class="body">En 15 minutos te mostramos dónde se está yendo la plata y qué cambiaríamos primero. El diagnóstico es tuyo, trabajes después con nosotros o no.</p>
				<a href="<?php echo esc_url( caissa_cta_url() ); ?>" class="btn btn-light">Reservá tu consultoría gratuita
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
				<div class="final-reassure">15 minutos · Sin contratos de permanencia</div>
			</div>
		</div>
	</div>
</section>
