<?php
/**
 * Template Name: Caissa — Reservar consultoría
 *
 * Migrada desde reservar-consultoria/index.html del repo Caissa-Nueva-Web-2026.
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
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://caissa.digital/reservar-consultoria/#webpage",
      "url": "https://caissa.digital/reservar-consultoria/",
      "name": "Reservá tu consultoría gratuita | Caissa",
      "description": "Reservá 15 minutos con Manuel Ferrini, CEO de Caissa. Compartimos pantalla y recorremos tu cuenta de Google Ads en vivo.",
      "inLanguage": "es-AR"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Inicio",
          "item": "https://caissa.digital/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Reservar consultoría",
          "item": "https://caissa.digital/reservar-consultoria/"
        }
      ]
    }
  ]
}
</script>
<?php endif; ?>
<main>

<section class="book">
  <div class="wrap">

    <div class="book-head">
      <h1>Reservá tu consultoría gratuita</h1>
      <p>15 minutos en vivo con Manuel, el CEO. Compartimos pantalla y recorremos tu cuenta de Google Ads juntos.</p>
    </div>

    <div class="book-form">
      <div id="tf-consultoria" data-tf-live="01JQSFJ83ZJV57PZ6A8PV98RQ7"></div>
    </div>
    <p class="book-fallback">¿No te carga el formulario? Abrilo en una pestaña nueva:
      <a href="https://form.typeform.com/to/BGj6BAWL" target="_blank" rel="noopener">form.typeform.com/to/BGj6BAWL</a>
    </p>

  </div>
</section>

</main>
<script>
  /* Atribucion: se le pasan al Typeform, como campos ocultos, los utm de la URL y
     la pagina interna desde la que se hizo clic. Los valores se calculan ANTES de
     inyectar embed.js, porque el atributo data-tf-hidden se lee al inicializar.
     OJO: estos campos tienen que existir tambien DENTRO del Typeform
     (Settings > Hidden fields) con exactamente estos nombres, o se ignoran. */
  (function () {
    var host = document.getElementById('tf-consultoria');
    if (!host) return;
    var q = new URLSearchParams(location.search), campos = [];
    ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'].forEach(function (k) {
      var v = q.get(k);
      if (v) campos.push(k + '=' + encodeURIComponent(v.slice(0, 120)));
    });
    var origen = q.get('origen') || '';
    if (!origen && document.referrer) {
      try {
        var r = new URL(document.referrer);
        if (r.host === location.host) origen = r.pathname;   // solo paginas propias
      } catch (e) {}
    }
    if (origen) campos.push('origen=' + encodeURIComponent(origen.slice(0, 120)));
    if (campos.length) host.setAttribute('data-tf-hidden', campos.join(','));

    var s = document.createElement('script');
    s.src = '//embed.typeform.com/next/embed.js';
    document.body.appendChild(s);
  })();
</script>


<?php
get_footer();