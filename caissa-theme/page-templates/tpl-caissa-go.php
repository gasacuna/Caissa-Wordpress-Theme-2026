<?php
/**
 * Template Name: Caissa — Caissa Go (hub de enlaces)
 *
 * Migrada desde caissa-go/index.html del repo Caissa-Nueva-Web-2026.
 * El head, el nav y el footer los pone el tema (header.php / footer.php).
 * El CSS y el JS de esta plantilla se encolan desde inc/enqueue.php.
 *
 * @package Caissa
 */

get_header();
?>
<?php if ( CAISSA_SCHEMA_PROPIO ) : ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "https://caissa.digital/caissa-go/#webpage",
  "url": "https://caissa.digital/caissa-go/",
  "name": "Caissa Go | Manuel Ferrini",
  "inLanguage": "es-AR"
}
</script>
<?php endif; ?>
<main>

<section class="go">
  <div class="wrap">
    <div class="go-col">

      <!-- Identidad. Produccion no tenia H1 (arrancaba en H2), asi que el nombre
           pasa a ser el H1: es lo que la pagina es. -->
      <div class="go-id reveal">
        <span class="go-av">
          <img src="<?php echo CAISSA_IMG; ?>/equipo/fotos/manuel-ferrini.webp" alt="Manuel Ferrini" width="300" height="400" fetchpriority="high" decoding="async" />
        </span>
        <div>
          <h1>Manuel Ferrini</h1>
          <p class="go-role">CEO en Caissa y Experto en Google Ads</p>
          <span class="go-badge">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.35V9h3.41v1.56h.05c.48-.9 1.63-1.85 3.36-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.55V9h3.57v11.45z"/></svg>
            LinkedIn Top SEM Voice
          </span>
        </div>
      </div>

      <!-- La agencia. El CTA principal apunta a /reservar-consultoria/, no a la
           home: en produccion la tarjeta decia "Solicita tu auditoria gratis" y
           llevaba a la home, que no es donde se reserva. El enlace a la home queda
           como secundario, asi no se pierde. El nombre de la oferta es el canonico
           del sitio (§18.h): "consultoria gratuita", en voseo. -->
      <div class="go-feat reveal">
        <p class="go-kicker">Agencia de Performance Marketing</p>
        <h2>Reservá tu consultoría gratuita</h2>
        <p>Revisamos tu cuenta de Google Ads y la web donde caen los clics.</p>
        <a class="btn btn-primary" href="/reservar-consultoria/">Reservar consultoría</a>
        <a class="go-alt" href="/">Ir a Caissa</a>
      </div>

      <!-- La academia. Es otra empresa de Manuel, dominio aparte: rel=noopener y
           target en blanco, como en produccion. -->
      <div class="go-feat reveal">
        <p class="go-kicker">Academia de Google Ads</p>
        <h2>Cursos de Google Ads</h2>
        <p>Formación en Google Ads para quien quiere manejar su propia cuenta.</p>
        <a class="btn btn-primary" href="https://semastery.com/" target="_blank" rel="noopener">Ir a Semastery</a>
      </div>

      <h2 class="go-sect reveal">Recursos gratuitos</h2>
      <ul class="go-list reveal">
        <li class="go-item">
          <a href="https://www.semastery.com/checklist" target="_blank" rel="noopener">
            <span class="go-ico" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 8 2.5 2.5L10 6"/><path d="m3 17 2.5 2.5L10 15"/><path d="M14 8h7"/><path d="M14 17h7"/></svg>
            </span>
            <span class="go-tx">
              <span class="go-h">Checklist de optimización</span>
              <span class="go-d">Lo que revisamos en una cuenta de Google Ads, paso por paso</span>
            </span>
            <svg class="go-arr" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 6 6 6-6 6"/></svg>
          </a>
        </li>
        <li class="go-item">
          <a href="https://www.semastery.com/" target="_blank" rel="noopener">
            <span class="go-ico" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="4.5" width="19" height="15" rx="2.5"/><path d="m3 6.5 9 6.5 9-6.5"/></svg>
            </span>
            <span class="go-tx">
              <span class="go-h">Newsletter de Google Ads</span>
              <span class="go-d">Tips accionables, una vez por semana</span>
            </span>
            <svg class="go-arr" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 6 6 6-6 6"/></svg>
          </a>
        </li>
      </ul>

      <h2 class="go-sect reveal">Otros enlaces</h2>
      <ul class="go-list reveal">
        <li class="go-item">
          <a href="/blog/">
            <span class="go-ico" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h9l4.5 4.5V21H6z"/><path d="M14.5 3v5h5"/><path d="M9 12.5h7"/><path d="M9 16.5h5"/></svg>
            </span>
            <span class="go-tx">
              <span class="go-h">Artículos</span>
              <span class="go-d">Blog con guías, recursos y novedades</span>
            </span>
            <svg class="go-arr" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 6 6 6-6 6"/></svg>
          </a>
        </li>
        <li class="go-item">
          <a href="https://www.youtube.com/@ManuFerrini" target="_blank" rel="noopener">
            <span class="go-ico yt" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M23 12s0-3.8-.48-5.63a2.93 2.93 0 0 0-2.06-2.07C18.66 3.82 12 3.82 12 3.82s-6.66 0-8.46.48a2.93 2.93 0 0 0-2.06 2.07C1 8.2 1 12 1 12s0 3.8.48 5.63a2.93 2.93 0 0 0 2.06 2.07c1.8.48 8.46.48 8.46.48s6.66 0 8.46-.48a2.93 2.93 0 0 0 2.06-2.07C23 15.8 23 12 23 12z"/><path d="M9.8 15.57V8.43L15.9 12z" fill="#fff"/></svg>
            </span>
            <span class="go-tx">
              <span class="go-h">Canal de YouTube</span>
              <span class="go-d">Video tutoriales de Google Ads</span>
            </span>
            <svg class="go-arr" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 6 6 6-6 6"/></svg>
          </a>
        </li>
        <li class="go-item">
          <a href="https://www.linkedin.com/in/manuelferrini/" target="_blank" rel="noopener">
            <span class="go-ico li" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.35V9h3.41v1.56h.05c.48-.9 1.63-1.85 3.36-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.55V9h3.57v11.45z"/></svg>
            </span>
            <span class="go-tx">
              <span class="go-h">Mi LinkedIn</span>
              <span class="go-d">Posts semanales de Google Ads</span>
            </span>
            <svg class="go-arr" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 6 6 6-6 6"/></svg>
          </a>
        </li>
      </ul>

    </div>
  </div>
</section>

</main>

<?php
get_footer();