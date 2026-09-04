<?php
/**
 * Cabecera compartida por las 21 plantillas de pagina.
 *
 * @package Caissa
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#FAFAFE">
<?php
/*
 * La clase .js va aca, en linea, y no en el JS diferido.
 *
 * Antes el motivo era la barra sticky: el CSS traia html:not(.js) .sticky-cta como
 * respaldo y, si la clase llegaba con defer, la barra parpadeaba en cada carga. Esa
 * regla ya no existe: desde que la barra quedo siempre visible, su visibilidad es
 * puro CSS y no depende de JavaScript.
 *
 * Pero la clase SIGUE haciendo falta, y por eso no se toca: alimenta 12 reglas por
 * pagina (.js .reveal y el embudo del metodo PCO). Si llegara con defer, el contenido
 * con .reveal se veria un instante y despues se ocultaria hasta que el observer lo
 * revele. Son 62 bytes y no bloquean nada.
 */
?>
<script>document.documentElement.classList.add('js')</script>
<?php
/*
 * FAVICON. Lo emite WordPress con wp_site_icon(), dentro de wp_head(), a partir de
 * Apariencia > Personalizar > Identidad del sitio > Icono del sitio. Eso da el juego
 * completo: 32x32, 192x192, apple-touch-icon y el tile de Windows.
 *
 * El data-URI de abajo es SOLO un respaldo para cuando no hay icono del sitio puesto.
 * Si se emitiera siempre le competiria al de WordPress y el navegador podria quedarse
 * con este, que es un placeholder (el cuadrito azul con la C).
 */
if ( ! has_site_icon() ) :
	?>
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='14' fill='%232034E6'/%3E%3Ctext x='32' y='44' font-family='Arial,sans-serif' font-size='36' font-weight='800' fill='white' text-anchor='middle'%3EC%3C/text%3E%3C/svg%3E">
	<?php
endif;
?>
<?php
caissa_fuentes_inline();
caissa_preload_lcp();
caissa_preconnect();
wp_head();
?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ===================== NAV ===================== -->
<header class="nav">
  <div class="wrap nav-inner">
    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Caissa, inicio', 'caissa' ); ?>"><img src="<?php echo esc_url( CAISSA_IMG . '/logo-caissa.webp' ); ?>" alt="Caissa" width="194" height="41" fetchpriority="high" decoding="async"></a>
    <?php caissa_nav_desktop(); ?>
    <div class="nav-cta"><a href="<?php echo esc_url( caissa_cta_url() ); ?>"<?php echo caissa_cta_actual() ? ' aria-current="page"' : ''; ?> class="btn btn-primary">Reservá tu consultoría <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
    <button class="burger" aria-label="<?php esc_attr_e( 'Abrir menú', 'caissa' ); ?>" aria-expanded="false" aria-controls="navMobile" id="burger"><span></span><span></span><span></span></button>
  </div>
  <div class="nav-mobile" id="navMobile">
    <?php caissa_nav_mobile(); ?>
    <?php /* El CTA del drawer se saco a pedido de Gaston: en mobile la barra
       sticky de abajo ya ofrece el mismo boton, y abrir el menu lo mostraba
       dos veces en la misma pantalla. El de desktop (.nav-cta) sigue. */ ?>
  </div>
</header>
