<?php
/**
 * Template Name: Caissa — Llamada confirmada
 *
 * Migrada desde llamada-confirmada/index.html del repo Caissa-Nueva-Web-2026.
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
  "@id": "https://caissa.digital/llamada-confirmada/#webpage",
  "url": "https://caissa.digital/llamada-confirmada/",
  "name": "Llamada confirmada | Caissa",
  "inLanguage": "es-AR"
}
</script>
<?php endif; ?>
<main>

<section class="ok">
  <div class="wrap">

    <div class="ok-head">
      <span class="ok-badge">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        Reunión agendada
      </span>
      <h1>¡Serán los 45 minutos mejor invertidos en marketing online para tu negocio!</h1>
      <p>Compartimos pantalla y recorremos tu cuenta de Google Ads con vos, en vivo.</p>
    </div>

    <div class="ok-sec">
      <h2>Mientras tanto, mirá qué dicen nuestros clientes</h2>
      <p class="ok-lead">Empresas de Argentina y España que trabajan con nosotros.</p>
      <div class="ok-quotes">
        <figure class="ok-q">
          <blockquote>Ayudan a traducir todo el esfuerzo de la empresa en ventas. Lograron un ROAS récord. Son un gran aliado de nuestra empresa…</blockquote>
          <figcaption><b>Espacio Casa</b><span>Argentina</span></figcaption>
        </figure>
        <figure class="ok-q">
          <blockquote>Caissa nos consiguió unos costes por leads muy eficientes que se convierten en ventas. Los recomiendo al 100%.</blockquote>
          <figcaption><b>Jon Uría · Cefil Pool</b><span>España</span></figcaption>
        </figure>
        <figure class="ok-q">
          <blockquote>Hemos trabajado juntos desde el día uno, como si Caissa fuera parte de nuestra empresa, los recomiendo totalmente.</blockquote>
          <figcaption><b>Juan Gonzalez Trück · Clean It</b><span>Argentina</span></figcaption>
        </figure>
        <figure class="ok-q">
          <blockquote>Superamos todas las expectativas y logramos récords en ventas. Gracias al caso de éxito lanzamos nuestro segundo eCommerce junto a ellos.</blockquote>
          <figcaption><b>Colchonería Ideal</b><span>Argentina</span></figcaption>
        </figure>
      </div>
      <p class="ok-more"><a href="/reviews/">Ver todas las opiniones y los videos &rarr;</a></p>

      <h2>Nuestros resultados hablan solos</h2>
      <p class="ok-lead">En Caissa mantenemos las cosas simples. Nuestro trabajo es ayudar a nuestros clientes a crecer online, y eso es exactamente lo que hacemos. Esto es lo que significa para tu empresa:</p>
      <div class="ok-princ">
        <article class="ok-p">
          <h3>Compromiso a largo plazo</h3>
          <p>Dejamos en manos de nuestros clientes la decisión de renovar el servicio mes a mes.</p>
        </article>
        <article class="ok-p">
          <h3>Lo importante son los resultados</h3>
          <p>Desarrollamos y medimos los proyectos por resultados logrados, no por horas invertidas en el proceso.</p>
        </article>
        <article class="ok-p">
          <h3>Somos parte de la solución</h3>
          <p>Si la empresa requiere soluciones fuera de nuestro campo de acción seremos los primeros en asesorar y derivar al cliente hacia la búsqueda de otros profesionales.</p>
        </article>
        <article class="ok-p">
          <h3>El tiempo es primordial</h3>
          <p>Tanto el nuestro como el del cliente. La comunicación fluida entre ambos equipos nos permite llegar a los resultados deseados de una manera rápida y eficaz.</p>
        </article>
      </div>
    </div>

  </div>
</section>

</main>
<script>
  /* CONVERSION DE GOOGLE ADS. Es lo mas importante de esta pagina: si deja de dispararse,
     Google Ads deja de medir el resultado de todas las campanias. NO cambiar el send_to.
     Dos guardas:
       1. No dispara fuera de caissa.digital, para no ensuciar los datos desde localhost.
       2. Usa la cola de dataLayer, asi funciona aunque gtag.js todavia no haya cargado
          (en el repo no hay GTM; lo inyecta WordPress en produccion). */
  (function () {
    if (location.hostname !== 'caissa.digital') return;
    window.dataLayer = window.dataLayer || [];
    window.gtag = window.gtag || function () { window.dataLayer.push(arguments); };
    window.gtag('event', 'conversion', {
      'send_to': 'AW-10868839507/wATECKHypt8bENOo1b4o',
      'value': 1.0,
      'currency': 'ARS'
    });
  })();
</script>


<?php
get_footer();