<?php
/**
 * GENERADO por el builder: lo que varia entre las plantillas.
 *
 * No lo edites a mano. Sale de leer el HTML del repo, asi que cuando Manuel cambia
 * algo se regenera el tema y esto se actualiza solo.
 *
 * @package Caissa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function caissa_variantes() {
	static $v = null;
	if ( null !== $v ) {
		return $v;
	}
	$v = array(
		'page-templates/tpl-home.php' => array(
			'slug'    => 'home',
			'nombre'  => 'Caissa — Home',
			'origen'  => 'index.html',
			'lang'    => 'es-AR',
			'preload' => 'Manu-CEO-home.webp',
			'css'     => array(),
			'robots'  => 'index, follow, max-image-preview:large, max-snippet:-1',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Google Partner y Meta Business Partner, fuimos seleccionados Partner Premier en 2025, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'
<div class="sticky-cta">
  <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita</a>
  <!-- WHATSAPP: cuando esté el número, sumar acá el botón de WhatsApp -->
</div>
HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'
<div class="ytlb" id="ytlb" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Testimonio en video">
  <div class="ytlb-backdrop" data-close></div>
  <div class="ytlb-box">
    <button class="ytlb-close" type="button" data-close aria-label="Cerrar video">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg>
    </button>
    <div class="ytlb-frame" id="ytlbFrame"></div>
  </div>
</div>
HTML,
		),
		'page-templates/tpl-google-ads.php' => array(
			'slug'    => 'google-ads',
			'nombre'  => 'Caissa — Agencia de Google Ads',
			'origen'  => 'agencia-google-ads/index.html',
			'lang'    => 'es',
			'preload' => null,
			'css'     => array('base'),
			'robots'  => 'index, follow, max-image-preview:large, max-snippet:-1',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Google Partner, fuimos seleccionados Partner Premier en 2025, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'
<div class="sticky-cta">
  <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita</a>
</div>
HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-meta-ads.php' => array(
			'slug'    => 'meta-ads',
			'nombre'  => 'Caissa — Agencia de Meta Ads',
			'origen'  => 'agencia-meta-ads/index.html',
			'lang'    => 'es',
			'preload' => null,
			'css'     => array('base', 'landing'),
			'robots'  => 'index, follow, max-image-preview:large, max-snippet:-1',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'
<div class="sticky-cta">
  <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita</a>
</div>
HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-marketing-neuquen.php' => array(
			'slug'    => 'marketing-neuquen',
			'nombre'  => 'Caissa — Marketing en Neuquén',
			'origen'  => 'agencia-marketing-neuquen/index.html',
			'lang'    => 'es-AR',
			'preload' => null,
			'css'     => array('base', 'landing'),
			'robots'  => 'index, follow, max-image-preview:large, max-snippet:-1',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital con oficinas en Neuquén Capital, especializada en performance marketing (Google Ads y Meta Ads). Trabajamos con empresas del Alto Valle, de la Patagonia y de toda Latinoamérica. Somos Google Partner y Meta Business Partner.
HTML,
			'sticky'  => <<<'HTML'
<div class="sticky-cta">
  <a href="tel:+5492994695443" class="btn btn-ghost-d sticky-call" aria-label="Llamar a Caissa Neuquén">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .3 1.9.6 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.1a2 2 0 0 1 2.1-.5c.9.3 1.8.5 2.8.6a2 2 0 0 1 1.7 2z" stroke-linecap="round" stroke-linejoin="round"/></svg>
    Llamar</a>
  <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría</a>
</div>
HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Krawczyk 619, Neuquén Capital</a>
<a class="foot-loc" href="tel:+5492994695443"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .3 1.9.6 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.1a2 2 0 0 1 2.1-.5c.9.3 1.8.5 2.8.6a2 2 0 0 1 1.7 2z" stroke-linejoin="round"/></svg>+54 9 299 469-5443</a>
<a class="foot-loc" href="https://caissa.digital/agencia-marketing-digital-argentina/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing en Argentina</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-industrias.php' => array(
			'slug'    => 'industrias',
			'nombre'  => 'Caissa — Industrias (hub)',
			'origen'  => 'industrias/index.html',
			'lang'    => 'es',
			'preload' => null,
			'css'     => array('base', 'landing'),
			'robots'  => 'index, follow, max-image-preview:large, max-snippet:-1',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'
<div class="sticky-cta">
  <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita</a>
</div>
HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-ind-abogados.php' => array(
			'slug'    => 'ind-abogados',
			'nombre'  => 'Caissa — Industrias · Abogados',
			'origen'  => 'industrias/abogados/index.html',
			'lang'    => 'es',
			'preload' => null,
			'css'     => array('base', 'landing', 'industrias'),
			'robots'  => 'index, follow, max-image-preview:large, max-snippet:-1',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'
<div class="sticky-cta">
  <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita</a>
</div>
HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-ind-constructoras.php' => array(
			'slug'    => 'ind-constructoras',
			'nombre'  => 'Caissa — Industrias · Constructoras',
			'origen'  => 'industrias/constructoras/index.html',
			'lang'    => 'es',
			'preload' => null,
			'css'     => array('base', 'landing', 'industrias'),
			'robots'  => 'index, follow, max-image-preview:large, max-snippet:-1',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'
<div class="sticky-cta">
  <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita</a>
</div>
HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-ind-ecommerce.php' => array(
			'slug'    => 'ind-ecommerce',
			'nombre'  => 'Caissa — Industrias · Ecommerce',
			'origen'  => 'industrias/ecommerce/index.html',
			'lang'    => 'es',
			'preload' => null,
			'css'     => array('base', 'landing', 'industrias'),
			'robots'  => 'index, follow, max-image-preview:large, max-snippet:-1',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'
<div class="sticky-cta">
  <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita</a>
</div>
HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-ind-salud.php' => array(
			'slug'    => 'ind-salud',
			'nombre'  => 'Caissa — Industrias · Salud',
			'origen'  => 'industrias/salud/index.html',
			'lang'    => 'es',
			'preload' => null,
			'css'     => array('base', 'landing', 'industrias'),
			'robots'  => 'index, follow, max-image-preview:large, max-snippet:-1',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'
<div class="sticky-cta">
  <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita</a>
</div>
HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-ind-turismo.php' => array(
			'slug'    => 'ind-turismo',
			'nombre'  => 'Caissa — Industrias · Turismo',
			'origen'  => 'industrias/turismo/index.html',
			'lang'    => 'es',
			'preload' => null,
			'css'     => array('base', 'landing', 'industrias'),
			'robots'  => 'index, follow, max-image-preview:large, max-snippet:-1',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'
<div class="sticky-cta">
  <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita</a>
</div>
HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-reviews.php' => array(
			'slug'    => 'reviews',
			'nombre'  => 'Caissa — Opiniones y testimonios',
			'origen'  => 'reviews/index.html',
			'lang'    => 'es-AR',
			'preload' => null,
			'css'     => array('base', 'landing'),
			'robots'  => 'index, follow, max-snippet:-1, max-image-preview:large',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'
<div class="sticky-cta">
  <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita</a>
</div>
HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'
<div class="ytlb" id="ytlb" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Testimonio en video">
  <div class="ytlb-backdrop" data-close></div>
  <div class="ytlb-box">
    <button class="ytlb-close" type="button" data-close aria-label="Cerrar video">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg>
    </button>
    <div class="ytlb-frame" id="ytlbFrame"></div>
  </div>
</div>
HTML,
		),
		'page-templates/tpl-equipo.php' => array(
			'slug'    => 'equipo',
			'nombre'  => 'Caissa — Equipo y valores',
			'origen'  => 'equipo/index.html',
			'lang'    => 'es-AR',
			'preload' => null,
			'css'     => array('base', 'landing', 'institucional'),
			'robots'  => 'index, follow, max-image-preview:large, max-snippet:-1',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'

HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-manu-ferrini.php' => array(
			'slug'    => 'manu-ferrini',
			'nombre'  => 'Caissa — Perfil Manuel Ferrini',
			'origen'  => 'equipo/manu-ferrini/index.html',
			'lang'    => 'es-AR',
			'preload' => null,
			'css'     => array('base', 'landing', 'perfiles'),
			'robots'  => 'index, follow, max-image-preview:large, max-snippet:-1',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'

HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-martin-pera.php' => array(
			'slug'    => 'martin-pera',
			'nombre'  => 'Caissa — Perfil Martín Pera',
			'origen'  => 'equipo/martin-pera/index.html',
			'lang'    => 'es-AR',
			'preload' => null,
			'css'     => array('base', 'landing', 'perfiles'),
			'robots'  => 'index, follow, max-image-preview:large, max-snippet:-1',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'

HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-tecnologia.php' => array(
			'slug'    => 'tecnologia',
			'nombre'  => 'Caissa — Tecnología',
			'origen'  => 'tecnologia/index.html',
			'lang'    => 'es-AR',
			'preload' => null,
			'css'     => array('base', 'landing'),
			'robots'  => 'index, follow, max-image-preview:large, max-snippet:-1',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'
<div class="sticky-cta">
  <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita</a>
</div>
HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-carreras.php' => array(
			'slug'    => 'carreras',
			'nombre'  => 'Caissa — Trabajá con nosotros (hub)',
			'origen'  => 'carreras/index.html',
			'lang'    => 'es-AR',
			'preload' => null,
			'css'     => array('base', 'landing'),
			'robots'  => 'index, follow, max-snippet:-1, max-image-preview:large',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'

HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-vac-remoto.php' => array(
			'slug'    => 'vac-remoto',
			'nombre'  => 'Caissa — Vacante: Performance Marketing (remoto)',
			'origen'  => 'carreras/especialista-en-performance-marketing/index.html',
			'lang'    => 'es-AR',
			'preload' => null,
			'css'     => array('base', 'landing', 'vacantes'),
			'robots'  => 'index, follow, max-snippet:-1, max-image-preview:large',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'
<div class="sticky-cta">
  <a href="https://form.typeform.com/to/JbBeXiW9" target="_blank" rel="noopener" class="btn btn-primary">Postularme</a>
</div>
HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-vac-neuquen.php' => array(
			'slug'    => 'vac-neuquen',
			'nombre'  => 'Caissa — Vacante: Performance Marketing (Neuquén)',
			'origen'  => 'carreras/especialista-performance-marketing-neuquen/index.html',
			'lang'    => 'es-AR',
			'preload' => null,
			'css'     => array('base', 'landing', 'vacantes'),
			'robots'  => 'index, follow, max-snippet:-1, max-image-preview:large',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'
<div class="sticky-cta">
  <a href="https://form.typeform.com/to/Q1KMO9Ll" target="_blank" rel="noopener" class="btn btn-primary">Postularme</a>
</div>
HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-aviso-legal.php' => array(
			'slug'    => 'aviso-legal',
			'nombre'  => 'Caissa — Aviso legal y privacidad',
			'origen'  => 'aviso-legal/index.html',
			'lang'    => 'es-AR',
			'preload' => null,
			'css'     => array('base', 'landing', 'institucional'),
			'robots'  => 'index, follow',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'

HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-reservar-consultoria.php' => array(
			'slug'    => 'reservar-consultoria',
			'nombre'  => 'Caissa — Reservar consultoría',
			'origen'  => 'reservar-consultoria/index.html',
			'lang'    => 'es-AR',
			'preload' => null,
			'css'     => array('base', 'landing', 'institucional'),
			'robots'  => 'index, follow',
			'preconnect' => array('https://embed.typeform.com', 'https://form.typeform.com'),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'

HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'page-templates/tpl-llamada-confirmada.php' => array(
			'slug'    => 'llamada-confirmada',
			'nombre'  => 'Caissa — Llamada confirmada',
			'origen'  => 'llamada-confirmada/index.html',
			'lang'    => 'es-AR',
			'preload' => null,
			'css'     => array('base', 'landing', 'institucional'),
			'robots'  => 'noindex, follow',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'sticky'  => <<<'HTML'

HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'cola'    => <<<'HTML'

HTML,
		),
		'default' => array(
			'slug'    => 'default',
			'nombre'  => 'Vistas sin plantilla (blog)',
			'origen'  => null,
			'lang'    => 'es-AR',
			'preload' => null,
			'css'     => array('base'),
			'robots'  => '',
			'preconnect' => array(),
			'bajada'  => <<<'HTML'
<b>Caissa</b> es una agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads). Ayudamos a empresas de habla hispana a crecer con publicidad online, CRO y optimización de procesos de venta. Somos Meta Business Partner y Google Partner, y trabajamos con más de 50 empresas en múltiples países.
HTML,
			'ubicaciones' => <<<'HTML'
<a class="foot-loc" href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Oficinas en Argentina</a>
<a class="foot-loc" href="/agencia-marketing-neuquen/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Marketing Neuquén</a>
HTML,
			'sticky'  => '',
			'cola'    => '',
		),
	);
	return $v;
}
