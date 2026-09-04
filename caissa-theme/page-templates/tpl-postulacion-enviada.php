<?php
/**
 * Template Name: Caissa — Postulación enviada
 *
 * Migrada desde postulacion-enviada/index.html del repo Caissa-Nueva-Web-2026.
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
  "@id": "https://caissa.digital/postulacion-enviada/#webpage",
  "url": "https://caissa.digital/postulacion-enviada/",
  "name": "Postulación enviada | Caissa",
  "inLanguage": "es-AR"
}
</script>
<?php endif; ?>
<main>

<section class="pe">
  <div class="wrap">
    <div class="pe-head reveal">
      <span class="pe-badge">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        Postulación enviada
      </span>
      <h1>¡Gracias por completar el formulario!</h1>
      <p class="pe-lead">Valoramos sinceramente el tiempo y la energía que dedicaste a esta etapa. Este proceso nos permite conocerte mejor desde el inicio y, al mismo tiempo, ahorra tiempo valioso para ambas partes (en promedio, más de 40 minutos) al enfocarnos en los perfiles que mejor se alinean con el rol y nuestra cultura.</p>
    </div>
  </div>
</section>

<!-- Las dos expectativas del proceso. En produccion eran dos parrafos seguidos
     dentro del muro de texto y el segundo -el que dice que no hay feedback
     individual- es el que mas conviene que se lea. -->
<section class="pe-next">
  <div class="wrap">
    <h2 class="reveal">Qué pasa ahora</h2>
    <div class="pe-cards reveal">
      <div class="pe-card">
        <h3>Si hacemos match</h3>
        <p>Si hacemos match, te vamos a contactar para avanzar con una entrevista formal.</p>
      </div>
      <div class="pe-card">
        <h3>Sobre el feedback</h3>
        <p>Por la cantidad de postulaciones que recibimos, no damos feedback individual sobre esta etapa. Aun así, completar este formulario fue una inversión importante: ya nos contaste lo más relevante sobre vos, y eso nos acerca un paso más si este rol resulta ser el adecuado para ambos.</p>
      </div>
    </div>
  </div>
</section>

<section class="pe-more">
  <div class="wrap">
    <h2 class="reveal">Mientras tanto, conocenos un poco más</h2>
    <p class="pe-sub reveal">Dos cosas que se publicaron sobre Caissa hace poco.</p>

    <div class="pe-links reveal">
      <div class="pe-link">
        <a href="https://www.patagonia.press/regionales/2025/10/20/caissa-la-agencia-neuquina-que-redefine-el-marketing-digital-en-argentina-19236.html" target="_blank" rel="noopener">
          <span class="pe-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5.5h13a2 2 0 0 1 2 2v11H6a2 2 0 0 1-2-2z"/><path d="M19 9.5h1.5a1.5 1.5 0 0 1 1.5 1.5v5.5a2 2 0 0 1-2 2"/><path d="M7.5 9h6"/><path d="M7.5 12.5h6"/><path d="M7.5 16h4"/></svg>
          </span>
          <span>
            <b>Una nota en medios</b>
            <span>Patagonia Press, octubre de 2025</span>
          </span>
        </a>
      </div>
      <div class="pe-link">
        <a href="https://www.youtube.com/watch?v=mwLtWzCmLTE&amp;t=3691s" target="_blank" rel="noopener">
          <span class="pe-ico" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="4.5" width="19" height="13" rx="2"/><path d="M8.5 21h7"/><path d="M12 17.5V21"/><path d="M10.6 8.6v4.8l4-2.4z" fill="currentColor" stroke="none"/></svg>
          </span>
          <span>
            <b>Una nota en TV</b>
            <span>La entrevista completa, en YouTube</span>
          </span>
        </a>
      </div>
    </div>

    <p class="pe-sub reveal" style="margin-top:34px">Abrimos nuevas búsquedas constantemente. Para no quedarte afuera, seguinos en redes:</p>
    <div class="pe-redes reveal">
      <a class="pe-chip" href="https://www.linkedin.com/company/caissa-digital/" target="_blank" rel="noopener">LinkedIn
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17 17 7"/><path d="M9 7h8v8"/></svg>
      </a>
      <a class="pe-chip" href="https://www.instagram.com/caissa_digital/" target="_blank" rel="noopener">Instagram
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17 17 7"/><path d="M9 7h8v8"/></svg>
      </a>
      <a class="pe-chip" href="https://www.tiktok.com/@manuferrini" target="_blank" rel="noopener">TikTok
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17 17 7"/><path d="M9 7h8v8"/></svg>
      </a>
    </div>

    <!-- El enlace a /carreras/ no estaba en produccion. Se agrega porque la frase
         de arriba habla de las busquedas abiertas y la pagina no tenia como llegar
         a ellas salvo por el menu. -->
    <p class="pe-thanks reveal">¡Gracias nuevamente!<br />
      <a href="/carreras/">Ver todas las búsquedas abiertas</a>
    </p>
  </div>
</section>

</main>

<?php
get_footer();