<?php
/**
 * Google Tag Manager, global y con carga diferida.
 *
 * Este archivo lo escribe el generador en cada build desde
 * _generador/parche-gtm.php. Si hay que cambiar algo, se cambia AHI, no aca:
 * editar inc/gtm.php se pierde en el proximo build.
 *
 * ---------------------------------------------------------------------------
 * POR QUE NO ES EL SNIPPET DE GOOGLE TAL CUAL
 *
 * El snippet oficial va en el <head> y arranca la descarga de gtm.js enseguida.
 * Es asincrono, asi que no bloquea el render, pero gtm.js y las etiquetas que
 * trae adentro (GA4, pixel de Meta, LinkedIn) SI ocupan el hilo principal justo
 * en la ventana en la que se mide el LCP y el INP. En este contenedor eso son
 * del orden de 290 KB de JavaScript de terceros.
 *
 * Aca gtm.js se carga cuando el navegador ya no tiene nada mejor que hacer:
 *   1. se espera el evento load,
 *   2. despues requestIdleCallback con timeout de 3 s (o setTimeout de 2 s en
 *      los navegadores que no lo tienen), asi que SIEMPRE carga,
 *   3. y si el visitante toca, teclea o gira la rueda antes, carga en ese
 *      momento, que es cuando ya no molesta a ninguna metrica.
 *
 * Lo importante: NO se exige interaccion. Ese es el patron que usan los plugins
 * de cache para sacar 100 y el que hace perder entre el 10 y el 30 % de las
 * sesiones, porque quien entra y se va sin tocar nada no dispara ni el pageview.
 * Con este esquema la perdida es la del visitante que se va en los primeros
 * segundos: del orden del 1 al 5 %, no del 30.
 *
 * ---------------------------------------------------------------------------
 * NO DUPLICA
 *
 * En caissa.digital hay HOY otro inyector de GTM (se ve el mismo contenedor en
 * el HTML de produccion y no sale de este tema: sale de un plugin, porque
 * aparece despues de wp_site_icon en wp_head y en wp_body_open). Dos
 * contenedores iguales en la misma pagina cuentan cada pageview y cada
 * conversion DOS veces, y eso arruina la optimizacion de Google Ads.
 *
 * Por eso el cargador se hace a un lado si detecta que GTM ya esta: mira
 * window.google_tag_manager y la presencia de un <script> de gtm.js. Igual
 * conviene desactivar el otro inyector, porque el que gana es el que carga
 * primero y ese es el snippet sin diferir.
 *
 * ---------------------------------------------------------------------------
 * LA CONVERSION DE /llamada-confirmada/ ESTA A SALVO
 *
 * Esa pagina empuja la conversion de Google Ads a la cola de dataLayer (no
 * llama a gtag directamente), y dataLayer es un array que GTM vacia cuando
 * carga. Asi que la conversion se dispara igual aunque GTM llegue mas tarde.
 * Aun asi, en ESA plantilla el cargador va inmediato: es lo mas importante del
 * sitio (§23.a), va noindex y su puntaje no le importa a nadie. Mejor perder
 * dos puntos ahi que una conversion.
 *
 * ---------------------------------------------------------------------------
 * FILTROS
 *
 *   caissa_gtm_id                string  el contenedor. '' apaga GTM del todo.
 *   caissa_gtm_activo            bool    si se imprime o no en esta peticion.
 *   caissa_gtm_inmediato_en      array   slugs que cargan sin diferir.
 *   caissa_gtm_inmediato         bool    ultima palabra sobre el diferido.
 *   caissa_gtm_solo_interaccion  bool    no cargar hasta que el visitante toque
 *                                        algo. Es el unico modo que garantiza
 *                                        100 en PageSpeed y el unico que pierde
 *                                        sesiones. Apagado por defecto.
 *
 * Para que NO cargue en el staging, en un plugin o en functions.php de un hijo:
 *
 *   add_filter( 'caissa_gtm_activo', function ( $si ) {
 *       return ( 'demo.caissa.digital' === $_SERVER['HTTP_HOST'] ) ? false : $si;
 *   } );
 *
 * OJO: apagarlo aca solo evita el pageview. Si lo que se quiere es que el
 * staging no dispare conversiones ni el pixel de Meta, eso se resuelve en los
 * DISPARADORES de GTM (excluir el host), que es el unico lugar que cubre todas
 * las etiquetas del contenedor. La conversion de Google Ads ya tiene su propia
 * guarda de host y no puede dispararse desde el staging.
 *
 * @package Caissa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'CAISSA_GTM_ID' ) ) {
	define( 'CAISSA_GTM_ID', 'GTM-5M89995' );
}

/**
 * El ID del contenedor. Cadena vacia = GTM apagado.
 *
 * @return string
 */
function caissa_gtm_id() {
	return trim( (string) apply_filters( 'caissa_gtm_id', CAISSA_GTM_ID ) );
}

/**
 * Si corresponde imprimir GTM en esta peticion.
 *
 * Se excluye todo lo que no es una vista de pagina de un visitante: el panel,
 * AJAX, WP-Cron, la REST API, los feeds, robots.txt, los trackbacks y las
 * previsualizaciones. Medir cualquiera de esas cosas ensucia los informes.
 *
 * @return bool
 */
function caissa_gtm_activo() {
	if ( '' === caissa_gtm_id() ) {
		return false;
	}
	if ( is_admin() || wp_doing_ajax() || wp_doing_cron() ) {
		return false;
	}
	if ( defined( 'REST_REQUEST' ) && REST_REQUEST ) {
		return false;
	}
	if ( is_feed() || is_robots() || is_trackback() ) {
		return false;
	}
	if ( is_preview() || is_customize_preview() ) {
		return false;
	}
	return (bool) apply_filters( 'caissa_gtm_activo', true );
}

/**
 * Modo "solo interaccion": gtm.js no se carga hasta que el visitante toca algo.
 *
 * Apagado a proposito. Es el unico modo que garantiza un 100 en PageSpeed,
 * porque Lighthouse no interactua con la pagina y entonces nunca ve el
 * JavaScript de GTM. Pero se paga con datos: quien entra, mira y se va sin
 * tocar nada NO dispara ni el pageview, y eso en un sitio de servicios es del
 * orden del 10 al 30 % de las sesiones. Tambien deja de contar el scroll y el
 * tiempo en pagina de esas visitas.
 *
 * Encenderlo, si algun dia el puntaje importa mas que la medicion:
 *
 *   add_filter( 'caissa_gtm_solo_interaccion', '__return_true' );
 *
 * OJO: las plantillas listadas en el filtro caissa_gtm_inmediato_en ignoran
 * este modo, porque en la pagina de la conversion perder un dato cuesta mas
 * que cualquier puntaje.
 *
 * @return bool
 */
function caissa_gtm_solo_interaccion() {
	return (bool) apply_filters( 'caissa_gtm_solo_interaccion', false );
}

/**
 * Si esta plantilla carga GTM sin diferir.
 *
 * @return bool
 */
function caissa_gtm_inmediato() {
	$slugs = (array) apply_filters( 'caissa_gtm_inmediato_en', array( 'llamada-confirmada' ) );
	$slug  = function_exists( 'caissa_var' ) ? (string) caissa_var( 'slug' ) : '';
	$si    = ( '' !== $slug && in_array( $slug, $slugs, true ) );

	return (bool) apply_filters( 'caissa_gtm_inmediato', $si );
}

/**
 * 1. En el <head>: la cola de dataLayer y el dns-prefetch.
 *
 * dataLayer tiene que existir antes que cualquier codigo de pagina que empuje
 * algo (la conversion de /llamada-confirmada/ lo hace). Son 40 bytes y cero red.
 *
 * El dns-prefetch resuelve el dominio de GTM temprano, sin abrir socket ni
 * negociar TLS, asi que cuando el cargador arranque no paga la latencia del
 * DNS. A proposito NO se usa preconnect: eso si abre conexion y compite con los
 * recursos del LCP, que es justo lo que se quiere evitar.
 */
add_action(
	'wp_head',
	function () {
		if ( ! caissa_gtm_activo() ) {
			return;
		}
		echo "<link rel='dns-prefetch' href='//www.googletagmanager.com' />\n";
		wp_print_inline_script_tag( 'window.dataLayer=window.dataLayer||[];' );
	},
	2
);

/**
 * 2. Justo despues de <body>: el <noscript>.
 *
 * Solo lo ve quien navega sin JavaScript. Con JS activado el navegador ni
 * siquiera parsea el contenido de un <noscript>, asi que no cuesta nada y no
 * aparece en ninguna medicion de Lighthouse.
 */
add_action(
	'wp_body_open',
	function () {
		if ( ! caissa_gtm_activo() ) {
			return;
		}
		$src = 'https://www.googletagmanager.com/ns.html?id=' . rawurlencode( caissa_gtm_id() );
		printf(
			'<noscript><iframe src="%s" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>' . "\n",
			esc_url( $src )
		);
	}
);

/**
 * 3. En el pie: el cargador.
 *
 * Va en wp_footer y no en el head porque no hay ninguna razon para que el
 * navegador lo lea antes de terminar de pintar la pagina.
 */
add_action(
	'wp_footer',
	function () {
		if ( ! caissa_gtm_activo() ) {
			return;
		}

		$js = <<<'JS'
(function(w,d){
if(w.__caissaGtm){return}
w.__caissaGtm=1;
if(w.google_tag_manager||d.querySelector('script[src*="googletagmanager.com/gtm.js"]')){return}
var hecho=false,i,ev=['pointerdown','keydown','touchstart','wheel'],op={passive:true,capture:true};
function ir(){
if(hecho){return}
hecho=true;
for(i=0;i<ev.length;i++){w.removeEventListener(ev[i],ir,op)}
w.dataLayer=w.dataLayer||[];
w.dataLayer.push({'gtm.start':new Date().getTime(),event:'gtm.js'});
var s=d.createElement('script');
s.async=true;
s.src='https://www.googletagmanager.com/gtm.js?id='+__ID__;
(d.head||d.documentElement).appendChild(s)
}
if(__YA__){ir();return}
for(i=0;i<ev.length;i++){w.addEventListener(ev[i],ir,op)}
if(__SOLO__){return}
function programar(){
if(w.requestIdleCallback){w.requestIdleCallback(ir,{timeout:3000})}else{setTimeout(ir,2000)}
}
if(d.readyState==='complete'){programar()}else{w.addEventListener('load',programar,{once:true})}
})(window,document);
JS;

		// __YA__ gana sobre __SOLO__: en la plantilla de la conversion se carga
		// igual, aunque el modo "solo interaccion" este encendido.
		$inmediato = caissa_gtm_inmediato();

		$js = str_replace(
			array( '__ID__', '__YA__', '__SOLO__' ),
			array(
				wp_json_encode( caissa_gtm_id() ),
				$inmediato ? 'true' : 'false',
				( ! $inmediato && caissa_gtm_solo_interaccion() ) ? 'true' : 'false',
			),
			$js
		);

		wp_print_inline_script_tag( $js );
	},
	99
);
