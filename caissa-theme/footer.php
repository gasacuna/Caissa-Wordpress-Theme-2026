<?php
/**
 * Pie compartido por las 21 plantillas de pagina.
 *
 * Las dos primeras columnas salen de menus de WordPress (Apariencia > Menus).
 * La tercera, "Enlaces", no es un menu: son iconos de redes y ubicaciones, asi
 * que va como markup del tema. En la landing de Neuquen se le suma el telefono.
 *
 * @package Caissa
 */

?>
<footer>
  <div class="wrap">
    <div class="foot-top">
      <a class="foot-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Caissa"><img src="<?php echo esc_url( CAISSA_IMG . '/logo-caissa.webp' ); ?>" alt="Caissa" width="194" height="41" loading="lazy" decoding="async"></a>
      <?php caissa_bloque_badges(); ?>
      <div class="foot-links" role="navigation" aria-label="Mapa del sitio">
        <?php
        caissa_footer_col( 'footer_servicios', __( 'Servicios', 'caissa' ) );
        caissa_footer_col( 'footer_caissa', 'Caissa' );
        ?>
        <div class="foot-col">
          <p class="foot-col-t"><?php esc_html_e( 'Enlaces', 'caissa' ); ?></p>
          <?php
          caissa_bloque_social();
          caissa_ubicaciones();
          ?>
        </div>
      </div>
    </div>
    <div class="foot-bottom">
      <div class="foot-legal">
        <?php caissa_bloque_legal(); ?>
        <?php caissa_foot_desc(); ?>
      </div>
      <div class="foot-copy">
        <span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> SYNERGYMEDIA PATAGONIA S.A.S</span>
        <a href="/aviso-legal/" target="_blank" rel="noopener">Aviso Legal y Política de Privacidad</a>
      </div>
    </div>
  </div>
</footer>

<?php
caissa_cola();
caissa_sticky_cta();
wp_footer();
?>
</body>
</html>
