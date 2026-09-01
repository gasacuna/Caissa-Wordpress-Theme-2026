<?php
/**
 * Template Name: Caissa — Trabajá con nosotros (hub)
 *
 * Migrada desde carreras/index.html del repo Caissa-Nueva-Web-2026.
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
      "@type": "Organization",
      "@id": "https://caissa.digital/#organization",
      "name": "Caissa",
      "url": "https://caissa.digital/",
      "logo": "https://caissa.digital/logo-caissa.webp",
      "sameAs": [
        "https://www.linkedin.com/company/caissa-digital",
        "https://www.instagram.com/caissa_digital/"
      ],
      "award": "Great Place to Work Certificada 2025-2026 (Argentina)"
    },
    {
      "@type": "CollectionPage",
      "@id": "https://caissa.digital/carreras/#webpage",
      "url": "https://caissa.digital/carreras/",
      "name": "Trabajá con nosotros: empleos en marketing digital | Caissa",
      "inLanguage": "es-AR",
      "about": {
        "@id": "https://caissa.digital/#organization"
      }
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
          "name": "Trabajá con nosotros",
          "item": "https://caissa.digital/carreras/"
        }
      ]
    }
  ]
}
</script>
<?php endif; ?>
<main>
<!-- ===================== HERO ===================== -->
<section class="inst">
  <div class="inst-head">
    <h1>Trabajá con nosotros</h1>
<!-- GPTW, OJO CON LA FECHA: el badge del repo dice "Certificada JUL 2025 - JUL 2026 ARG",
     o sea que VENCIO en julio de 2026. Manuel pidio destacarla el 24/08/2026; se asume
     renovada. CONFIRMAR: si se renovo, reemplazar footer/badge-gptw.png por el badge
     nuevo; si NO se renovo, pasar todo este copy a pasado (mismo criterio que Premier,
     CLAUDE.md par.10.b). -->
    <p>Estamos construyendo el mejor equipo de performance de habla hispana. Buscamos personas curiosas, analíticas y con obsesión por los resultados.</p>
    <div class="jchips reveal" style="margin-top:24px;margin-bottom:0">
      <span class="jchip"><img src="<?php echo CAISSA_IMG; ?>/footer/badge-gptw.png" alt="Great Place to Work, certificación Argentina" width="300" height="509" loading="lazy" decoding="async" /> Somos Great Place to Work</span>
    </div>
  </div>
</section>

<!-- ===================== BÚSQUEDAS ABIERTAS =====================
     Las dos vacantes reales de caissa.digital/careers/. Si se abre o se cierra una
     busqueda, se toca esta grilla y la pagina de la vacante, nada mas. -->
<section class="sec-white" id="busquedas">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Búsquedas abiertas</h2>
    </div>
    <div class="jobs">
      <article class="job reveal">
        <div class="jchips"><span class="jchip open">Vacante abierta</span><span class="jchip">Presencial · Neuquén Capital</span></div>
        <h3><a href="/carreras/especialista-performance-marketing-neuquen/">Especialista en Performance Marketing</a></h3>
        <p>Para estudiantes o graduados de carreras afines, con o sin experiencia. La formación corre por cuenta nuestra, en nuestra oficina de Neuquén.</p>
        <span class="go">Ver la búsqueda <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </article>
      <article class="job reveal">
        <div class="jchips"><span class="jchip open">Vacante abierta</span><span class="jchip">100% remoto · Argentina</span></div>
        <h3><a href="/carreras/especialista-en-performance-marketing/">Especialista en Performance Marketing (remoto)</a></h3>
        <p>Para especialistas con más de dos años en Google Ads y Meta Ads y experiencia en CRO, que quieran cuentas exigentes y objetivos claros.</p>
        <span class="go">Ver la búsqueda <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </article>
    </div>
  </div>
</section>

<!-- ===================== LO QUE DICE EL EQUIPO =====================
     Los dos datos vienen de caissa.digital/careers/ y son de encuestas internas:
     la fuente esta declarada al pie. No convertirlos en promesas. -->
<section class="sec-soft" id="equipo">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Somos Great Place to Work</h2>
      <p>La certificación se gana con encuestas anónimas al equipo. Las nuestras dicen esto.</p>
    </div>
    <div class="cul reveal">
      <div class="cul-c cul-badge">
        <img src="<?php echo CAISSA_IMG; ?>/footer/badge-gptw.png" alt="Certificación Great Place to Work Argentina" width="300" height="509" loading="lazy" decoding="async" />
      </div>
      <div class="cul-c">
        <div class="cul-n">100%</div>
        <p>siente que puede crecer tanto profesional como personalmente</p>
      </div>
      <div class="cul-c">
        <div class="cul-n">100%</div>
        <p>califica el ambiente laboral como excelente</p>
      </div>
    </div>
    <p class="cul-note reveal">Encuestas internas del equipo de Caissa.</p>
  </div>
</section>

<!-- ===================== BENEFICIOS ===================== -->
<section class="bg-grad" id="beneficios">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Beneficios</h2>
      <p>Queremos ser los número uno en performance marketing, y eso empieza por cómo se trabaja acá adentro.</p>
    </div>
    <div class="ben reveal">
      <div class="ben-c"><b>100% remoto</b><p>Trabajá desde donde prefieras. Las búsquedas presenciales lo dicen en el título.</p></div>
      <div class="ben-c"><b>Home office equipado</b><p>Equipamiento a cargo nuestro y compensación por gastos de teletrabajo.</p></div>
      <div class="ben-c"><b>Ajustes por desempeño</b><p>El salario acompaña lo que sos capaz de generar.</p></div>
      <div class="ben-c"><b>Vacaciones flex</b><p>Se adaptan a tu estilo de vida, no al revés.</p></div>
      <div class="ben-c"><b>Capacitaciones 100% pagas</b><p>Más de $2.000.000 al año en cursos para el equipo.</p></div>
      <div class="ben-c"><b>Desarrollo completo</b><p>Formación permanente, para tu carrera y para vos.</p></div>
      <div class="ben-c"><b>Equipo cercano</b><p>Remoto pero cerca: gente dispuesta a ayudar y que comparte la obsesión por aprender.</p></div>
      <div class="ben-c"><b>Ritmo de vanguardia</b><p>Probamos cosas nuevas todo el tiempo, en un sector que no espera a nadie.</p></div>
    </div>
  </div>
</section>

<!-- ===================== EL EQUIPO ===================== -->
<section class="sec-white">
  <div class="wrap">
    <div class="cband reveal">
      <img src="<?php echo CAISSA_IMG; ?>/equipo-caissa-final.jpeg" alt="El equipo de Caissa" width="1564" height="273" loading="lazy" decoding="async" />
    </div>
  </div>
</section>

</main>

<?php
get_footer();