<?php
/**
 * Template Name: Caissa — Perfil Martín Pera
 *
 * Migrada desde equipo/martin-pera/index.html del repo Caissa-Nueva-Web-2026.
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
      "@type": "ProfilePage",
      "@id": "https://caissa.digital/equipo/martin-pera/#webpage",
      "url": "https://caissa.digital/equipo/martin-pera/",
      "name": "Martin Pera, COO y cofundador de Caissa",
      "inLanguage": "es-AR",
      "mainEntity": { "@id": "https://caissa.digital/equipo/martin-pera/#person" }
    },
    {
      "@type": "Person",
      "@id": "https://caissa.digital/equipo/martin-pera/#person",
      "name": "Martin Pera",
      "url": "https://caissa.digital/equipo/martin-pera/",
      "image": "https://caissa.digital/equipo/fotos/martin-pera.webp",
      "jobTitle": "COO y cofundador de Caissa",
      "worksFor": { "@type": "Organization", "name": "Caissa", "url": "https://caissa.digital" },
      "knowsAbout": ["Marketing Digital","Performance Marketing","Operaciones","Liderazgo de equipos"],
      "address": { "@type": "PostalAddress", "addressCountry": "AR" },
      "description": "Martin Pera es COO y cofundador de Caissa. Lidera el equipo y la cultura de la agencia, con mas de 7 anos de experiencia en marketing digital y decenas de marcas nacionales e internacionales asesoradas en su estrategia de crecimiento digital."
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://caissa.digital/" },
        { "@type": "ListItem", "position": 2, "name": "Equipo", "item": "https://caissa.digital/equipo/" },
        { "@type": "ListItem", "position": 3, "name": "Martin Pera" }
      ]
    }
  ]
}
</script>
<?php endif; ?>
<main>

<!-- ===================== HERO =====================
     Mismo visual que el perfil de Manuel, pero el bloque va en lavanda para que las dos
     paginas no se lean identicas al entrar. -->
<section class="pf">
  <div class="bk"><a href="/equipo/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg> Volver al equipo</a></div>
  <div class="pf-grid">
    <div class="pf-left">
      <span class="pf-role">COO y cofundador</span>
      <h1>Martín Pera</h1>
      <p class="pf-lede">Lidera el equipo de Caissa y la cultura con la que trabaja. Más de
        siete años en marketing digital y decenas de marcas nacionales e internacionales
        asesoradas en su estrategia de crecimiento.</p>
      <div class="pf-cta">
        <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
    </div>
    <div class="pf-right">
      <div class="pf-stage">
        <span class="pf-dots" aria-hidden="true"></span>
        <div class="pf-photo lav">
          <img src="<?php echo CAISSA_IMG; ?>/equipo/fotos/martin-pera.webp" alt="Martín Pera" width="300" height="400" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== QUE LIDERA ===================== -->
<section class="sec-white" id="rol">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Qué lidera</h2>
    </div>
    <div class="pco reveal">
      <p>Martín conduce el equipo de Caissa y sostiene una cultura de alto rendimiento
        pensada para que crezcan las dos partes: las personas que trabajan acá y los
        clientes que confían la cuenta.</p>
      <p>Es ecléctico por naturaleza. Su forma de resolver es la misma para un conflicto
        interno que para una cuenta que no está rindiendo: sentarse, mirar el problema de
        frente y trabajarlo.</p>
    </div>
  </div>
</section>

<!-- ===================== SU FRASE ===================== -->
<section class="sec-soft" id="frase">
  <div class="wrap">
    <div class="qt reveal">
      <blockquote>&ldquo;No existen problemas o diferencias que no se puedan resolver con
        trabajo duro y charlas sinceras.&rdquo;</blockquote>
      <div class="qt-w">Martín Pera, COO y cofundador de Caissa</div>
    </div>
  </div>
</section>

<!-- ===================== SUPER-PODERES =====================
     Los cuatro son los que lista la pagina en produccion, tal cual. No llevan descripcion
     porque alla tampoco la tienen: escribirla seria inventarle rasgos a una persona real. -->
<section class="bg-grad" id="poderes">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Sus super&#8209;poderes</h2>
    </div>
    <div class="pw">
      <div class="pw-c reveal">
        <span class="pw-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><circle cx="5" cy="5" r="2"/><circle cx="19" cy="5" r="2"/><circle cx="5" cy="19" r="2"/><circle cx="19" cy="19" r="2"/><path d="M6.6 6.6l3 3M17.4 6.6l-3 3M6.6 17.4l3-3M17.4 17.4l-3-3" stroke-linecap="round"/></svg></span>
        <div class="pw-t">Coordinador</div>
      </div>
      <div class="pw-c reveal">
        <span class="pw-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.8 5.6a5 5 0 0 0-7.1 0L12 7.3l-1.7-1.7a5 5 0 1 0-7.1 7.1l8.8 8.8 8.8-8.8a5 5 0 0 0 0-7.1z" stroke-linejoin="round"/></svg></span>
        <div class="pw-t">Empatía</div>
      </div>
      <div class="pw-c reveal">
        <span class="pw-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.4 8.4 0 0 1-9 8.4 8.9 8.9 0 0 1-3.9-.9L3 21l1.9-5a8.4 8.4 0 0 1-.9-3.8 8.4 8.4 0 0 1 8.4-8.4h.6a8.4 8.4 0 0 1 8 8v.2z" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div class="pw-t">Comunicación</div>
      </div>
      <div class="pw-c reveal">
        <span class="pw-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 9L12 4 2 9l10 5 10-5z" stroke-linejoin="round"/><path d="M6 11.5V17c0 1.4 2.7 2.6 6 2.6s6-1.2 6-2.6v-5.5" stroke-linecap="round"/></svg></span>
        <div class="pw-t">Tutor</div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CTA FINAL ===================== -->
<section class="sec-cta">
  <div class="wrap">
    <div class="cta-ga reveal">
      <h2>¿Querés trabajar con Martín y su equipo?</h2>
      <p>Quince minutos para entender cómo está tu cuenta hoy y qué haríamos distinto. Sin compromiso y sin contratos de permanencia.</p>
      <a href="/reservar-consultoria/" class="btn btn-light">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <div class="rea">15 minutos · Te respondemos el mismo día</div>
    </div>
  </div>
</section>


</main>

<?php
get_footer();