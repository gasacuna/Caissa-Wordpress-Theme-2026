<?php
/**
 * Template Name: Caissa — Vacante: Performance Marketing (Neuquén)
 *
 * Migrada desde carreras/especialista-performance-marketing-neuquen/index.html del repo Caissa-Nueva-Web-2026.
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
      "@type": "JobPosting",
      "title": "Especialista en Performance Marketing",
      "description": "Puesto full time presencial en la oficina de Caissa en Neuquén Capital. Misión: generar resultados de negocio para los clientes ejecutando y optimizando campañas en Google Ads y Meta Ads, participando en la mejora de landing pages y proponiendo mejoras basadas en datos. Para estudiantes o graduados de marketing, administración o carreras afines; no requiere experiencia previa en agencias. Beneficios: salario competitivo en pesos con mejoras por desempeño, capacitaciones 100% pagas, plan de carrera, vacaciones flexibles y hora completa de almuerzo.",
      "datePosted": "2026-08-24",
      "employmentType": "FULL_TIME",
      "jobBenefits": "Salario competitivo con mejoras por desempeño, capacitaciones 100% pagas, plan de carrera, vacaciones flexibles y hora completa de almuerzo. Empresa certificada Great Place to Work.",
      "hiringOrganization": {
        "@type": "Organization",
        "@id": "https://caissa.digital/#organization",
        "name": "Caissa",
        "url": "https://caissa.digital/",
        "logo": "https://caissa.digital/logo-caissa.webp",
        "award": "Great Place to Work Certificada 2025-2026 (Argentina)",
        "sameAs": [
          "https://www.linkedin.com/company/caissa-digital",
          "https://www.instagram.com/caissa_digital/"
        ]
      },
      "directApply": true,
      "url": "https://caissa.digital/carreras/especialista-performance-marketing-neuquen/",
      "industry": "Marketing digital / Performance marketing",
      "identifier": {
        "@type": "PropertyValue",
        "name": "Caissa",
        "value": "https://caissa.digital/carreras/especialista-performance-marketing-neuquen/"
      },
      "jobLocation": {
        "@type": "Place",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Teniente de Navío Eliana María Krawczyk 619, Edificio Zafiro, Piso 1° C",
          "addressLocality": "Neuquén",
          "addressRegion": "Neuquén",
          "postalCode": "Q8300",
          "addressCountry": "AR"
        }
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
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Especialista en Performance Marketing (Neuquén)",
          "item": "https://caissa.digital/carreras/especialista-performance-marketing-neuquen/"
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
    <div class="jchips reveal">
      <span class="jchip open">Vacante abierta</span>
      <span class="jchip">Full time</span>
<!-- GPTW, OJO CON LA FECHA: el badge del repo dice "Certificada JUL 2025 - JUL 2026 ARG",
     o sea que VENCIO en julio de 2026. Manuel pidio destacarla el 24/08/2026; se asume
     renovada. CONFIRMAR: si se renovo, reemplazar footer/badge-gptw.webp por el badge
     nuevo; si NO se renovo, pasar todo este copy a pasado (mismo criterio que Premier,
     CLAUDE.md par.10.b). -->
      <span class="jchip">Presencial · Neuquén Capital</span>
      <span class="jchip"><img src="<?php echo CAISSA_IMG; ?>/footer/badge-gptw.webp" alt="Great Place to Work, certificación Argentina" width="151" height="256" loading="lazy" decoding="async" /> Great Place to Work</span>
    </div>
    <h1>Especialista en Performance Marketing en Neuquén</h1>
    <p>Con o sin experiencia: buscamos cabezas analíticas con ganas de aprender un oficio que se paga bien y no para de crecer. La formación corre por cuenta nuestra.</p>
    <div class="inst-cta">
      <a href="https://form.typeform.com/to/Q1KMO9Ll" target="_blank" rel="noopener" class="btn btn-primary">Postularme
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<!-- ===================== EL ROL ===================== -->
<section class="sec-white" id="rol">
  <div class="wrap">
    <div class="jd reveal">
      <h2>De qué se trata el puesto</h2>
      <p class="lede prose">Tu misión es generar resultados de negocio para nuestros clientes: campañas que venden, sitios que convierten y decisiones tomadas con datos.</p>
    </div>
    <div class="jd reveal" style="margin-top:36px">
      <h2>Lo que vas a hacer</h2>
      <ul class="jl">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Ejecutar y optimizar campañas en <b>Google Ads y Meta Ads</b>, todos los días.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Entender el negocio que hay detrás de cada cuenta, no solo la pauta.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Participar en la mejora de sitios y landing pages que impactan en conversión.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Analizar reportes de rendimiento y proponer mejoras basadas en datos.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Participar en reuniones con clientes y revisar objetivos cada semana.</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- ===================== LO QUE BUSCAMOS ===================== -->
<section class="sec-soft" id="requisitos">
  <div class="wrap">
    <div class="jd reveal">
      <h2>Lo que buscamos</h2>
      <ul class="jl">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Estudiantes o graduados de <b>marketing, administración o carreras afines</b>.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Formación en Google Ads y Meta Ads, deseable pero no excluyente.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Mentalidad analítica, curiosidad y ganas de trabajar full time.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Iniciativa y responsabilidad: las cuentas son de clientes reales desde el primer mes.</span></li>
      </ul>
      <p class="jd-note"><b>No hace falta experiencia previa en agencias.</b> Entrás a un plan de formación y especialización con seguimiento de un equipo senior.</p>
    </div>
  </div>
</section>

<!-- ===================== LA OFICINA =====================
     La foto es la real (oficina-neuquen.jpg, §13) y la dirección es el NAP canónico:
     si cambia, cambia también en la landing de Neuquén y en el Perfil de Empresa. -->
<section class="bg-grad" id="oficina">
  <div class="wrap">
    <div class="off reveal">
      <img src="<?php echo CAISSA_IMG; ?>/oficina-neuquen.jpg" alt="La oficina de Caissa en Neuquén Capital" width="1200" height="900" loading="lazy" decoding="async" />
      <div>
        <h2>Vas a trabajar acá</h2>
        <p>Nuestra oficina en Neuquén Capital, con el equipo local y todo el respaldo del equipo remoto. Hora completa de almuerzo, y un ambiente que el 100% del equipo califica como excelente.</p>
        <address>Teniente de Navío Eliana María Krawczyk 619, Edificio Zafiro, Piso 1° C · Neuquén Capital<br />Lunes a viernes, de 8 a 17</address>
      </div>
    </div>
  </div>
</section>

<!-- ===================== BENEFICIOS ===================== -->
<section class="sec-white" id="beneficios">
  <div class="wrap">
    <div class="jd reveal">
      <h2>Beneficios</h2>
      <ul class="jl">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Salario competitivo en pesos, con <b>mejoras según tu desempeño</b>.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Capacitaciones 100% pagas: más de $2.000.000 al año en cursos para el equipo.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Plan de carrera y especialización desde el primer día.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Vacaciones flexibles y hora completa de almuerzo.</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- ===================== CTA ===================== -->
<section class="bg-grad">
  <div class="wrap">
    <div class="cta-ga reveal">
      <h2>Postulate a la búsqueda de Neuquén</h2>
      <p>El formulario toma cinco minutos. Si tu perfil encaja, te escribimos para coordinar una entrevista.</p>
      <a href="https://form.typeform.com/to/Q1KMO9Ll" target="_blank" rel="noopener" class="btn btn-light">Postularme
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <p class="rea">También podés ver <a href="/carreras/" style="color:#fff;text-decoration:underline">las demás búsquedas abiertas</a>.</p>
    </div>
  </div>
</section>

</main>

<?php
get_footer();