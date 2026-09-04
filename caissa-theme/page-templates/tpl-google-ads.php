<?php
/**
 * Template Name: Caissa — Agencia de Google Ads
 *
 * Migrada desde agencia-google-ads/index.html del repo Caissa-Nueva-Web-2026.
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
      "description": "Agencia de Google Ads y Meta Ads. Google Partner certificada. Gestión diaria de la inversión publicitaria, sin contratos de permanencia.",
      "foundingDate": "2021",
      "knowsAbout": ["Google Ads", "Meta Ads", "Performance Marketing", "PPC", "SEM", "Optimización de conversión", "Google Shopping", "Performance Max"],
      "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.9", "reviewCount": "65", "bestRating": "5" },
      "hasCredential": {
        "@type": "EducationalOccupationalCredential",
        "credentialCategory": "certification",
        "name": "Google Partner",
        "recognizedBy": { "@type": "Organization", "name": "Google" }
      },
      "award": "Google Partner Premier 2025",
      "founder": [
        { "@type": "Person", "name": "Manuel Ferrini", "jobTitle": "CEO y cofundador", "sameAs": "https://ar.linkedin.com/in/manuelferrini" },
        { "@type": "Person", "name": "Martín Pera", "jobTitle": "COO y cofundador" }
      ],
      "sameAs": [
        "https://www.linkedin.com/company/caissa-digital",
        "https://www.instagram.com/caissa_digital/",
        "https://clutch.co/profile/caissa",
        "https://www.google.com/partners/agency?id=9889692537",
        "https://www.sortlist.es/agency/caissa"
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://caissa.digital/agencia-google-ads/#webpage",
      "url": "https://caissa.digital/agencia-google-ads/",
      "name": "#1 Agencia de Google Ads | Caissa Google Partner",
      "description": "Agencia de Google Ads certificada como Google Partner y seleccionada Partner Premier en 2025. Campañas para empresas de Argentina, LATAM y España.",
      "inLanguage": "es",
      "isPartOf": { "@id": "https://caissa.digital/#organization" }
    },
    {
      "@type": "Service",
      "@id": "https://caissa.digital/agencia-google-ads/#service",
      "serviceType": "Gestión de campañas de Google Ads",
      "name": "Agencia de Google Ads",
      "url": "https://caissa.digital/agencia-google-ads/",
      "description": "Estrategia, implementación y optimización continua de campañas de Google Ads: búsqueda, Performance Max, Shopping, Display, video en YouTube, aplicaciones, remarketing y visitas a la tienda. Incluye medición de conversiones, CRO y optimización del proceso de venta.",
      "provider": { "@id": "https://caissa.digital/#organization" },
      "availableLanguage": "es",
      "areaServed": [
        { "@type": "Country", "name": "Argentina" },
        { "@type": "Country", "name": "España" },
        { "@type": "Country", "name": "México" },
        { "@type": "Country", "name": "Colombia" },
        { "@type": "Country", "name": "Chile" },
        { "@type": "Country", "name": "Perú" }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Tipos de campañas de Google Ads",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Campañas de Búsqueda" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Campañas de Performance Max" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Campañas en Google Shopping" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Campañas de Display" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Campañas de Video en YouTube" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Campañas para descarga de Apps" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Campañas de Remarketing" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Campañas de Visitas a la Tienda" } }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://caissa.digital/agencia-google-ads/#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://caissa.digital/" },
        { "@type": "ListItem", "position": 2, "name": "Agencia de Google Ads", "item": "https://caissa.digital/agencia-google-ads/" }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://caissa.digital/agencia-google-ads/#faq",
      "mainEntity": [
        { "@type": "Question", "name": "¿Qué es una agencia de Google Ads?", "acceptedAnswer": { "@type": "Answer", "text": "Una agencia de Google Ads es una empresa especializada en planificar, implementar y optimizar campañas de publicidad dentro del ecosistema de Google: búsqueda, Display, Shopping, YouTube, Performance Max y aplicaciones. Su rol va más allá de publicar anuncios: define la estrategia de puja, la estructura de la cuenta, la medición de conversiones y la optimización continua para que cada peso invertido genere retorno." } },
        { "@type": "Question", "name": "¿Cómo funciona Google Ads?", "acceptedAnswer": { "@type": "Answer", "text": "Google Ads funciona con un sistema de subasta en tiempo real. Cada vez que alguien busca en Google, la plataforma evalúa los anuncios elegibles y los ordena según la puja y el Nivel de Calidad, que mide la relevancia del anuncio, la experiencia de la página de destino y el porcentaje de clics esperado. Por eso un anuncio mejor optimizado puede aparecer más arriba pagando menos que un competidor." } },
        { "@type": "Question", "name": "¿Cuánto cuesta Google Ads en Argentina?", "acceptedAnswer": { "@type": "Answer", "text": "No hay un costo fijo: pagás por clic o por conversión, y el precio de cada clic depende de la competencia de tu industria. En Argentina, el costo por clic promedio va desde valores muy bajos en nichos poco competitivos hasta rangos altos en sectores como seguros, salud privada, educación o construcción. Lo determinante no es el costo por clic sino el costo por adquisición y el retorno sobre la inversión publicitaria." } },
        { "@type": "Question", "name": "¿Cuánto tiempo tarda en verse resultados con Google Ads?", "acceptedAnswer": { "@type": "Answer", "text": "A diferencia del SEO, en Google Ads los anuncios pueden empezar a mostrarse apenas se aprueban. Cuánto tarda en haber datos suficientes para decidir depende del volumen de búsquedas y de conversiones de cada cuenta: no es lo mismo un rubro con miles de consultas por mes que uno con veinte. Por eso preferimos no dar un plazo cerrado: en la consultoría miramos tu cuenta y te decimos qué esperar en tu caso." } },
        { "@type": "Question", "name": "¿Qué incluye el servicio de gestión de Google Ads?", "acceptedAnswer": { "@type": "Answer", "text": "Incluye auditoría inicial de la cuenta, definición de la estrategia y la estructura de campañas, implementación y configuración del seguimiento de conversiones, redacción de anuncios, optimización continua de pujas y audiencias, pruebas de creatividades y páginas de destino, reportes personalizados en Looker Studio y reuniones periódicas de seguimiento." } },
        { "@type": "Question", "name": "¿La cuenta de Google Ads queda a mi nombre?", "acceptedAnswer": { "@type": "Answer", "text": "Sí. La cuenta, las campañas, el historial y los datos son tuyos. Si algún día decidís irte, te los llevás completos. Nunca trabajamos sobre una cuenta propia que te deje sin historial al terminar la relación." } }
      ]
    }
  ]
}
</script>
<?php endif; ?>
<main>

<!-- ===================== HERO =====================
     ATF deliberadamente distinto de la home: sin foto de Manuel, sin carrusel de logos y con
     el H1 como kicker en vez de titular gigante. El visual es un mockup de resultados de Google,
     que además es el tema exacto de la página. -->
<section class="hga">
  <div class="wrap hga-grid">
    <div class="hga-left">
      <h1>Agencia de Google Ads</h1>
      <p class="hga-claim">Aumentamos tus <span class="hl">ventas<svg class="grow" viewBox="0 0 220 70" preserveAspectRatio="none" aria-hidden="true">
        <defs>
          <linearGradient id="growGrad" gradientUnits="userSpaceOnUse" x1="0" y1="0" x2="116" y2="0" spreadMethod="repeat">
            <stop offset="0" stop-color="#F0402F"/>
            <stop offset=".5" stop-color="#FFD8CF"/>
            <stop offset="1" stop-color="#F0402F"/>
            <animateTransform attributeName="gradientTransform" type="translate" from="0 0" to="116 0" dur="2.8s" repeatCount="indefinite"/>
          </linearGradient>
        </defs>
        <path class="grow-base" d="M4 49 C 54 46, 104 46, 146 46 C 176 46, 193 40, 209 11" fill="none" stroke="url(#growGrad)" stroke-width="3.5" stroke-linecap="round"/>
        <path class="grow-head" d="M196 14 L209 11 L207 26" fill="none" stroke="url(#growGrad)" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg></span><br />con Google Ads</p>
      <p class="hga-sub">Gestionamos la inversión de más de 50 empresas en Argentina, España y Latinoamérica. Seleccionados como Google Partner Premier en 2025.</p>
      <div class="hga-cta">
        <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <p class="hga-note">Sin contratos de permanencia. Servicio mes a mes.</p>
      <div class="hga-creds">
        <img src="<?php echo CAISSA_IMG; ?>/google-partner-premier.webp" alt="Caissa, Google Partner Premier 2025 y Meta Business Partner" width="238" height="75" />
        <div class="hga-cred">
          <div>
            <div class="cn">4.9 <span class="rstars" aria-hidden="true">★★★★★</span></div>
            <div class="cs">65 reseñas en Google</div>
          </div>
        </div>
        <div class="hga-cred clutch">
          <div>
            <div class="cn">5.0 <span class="rstars" aria-hidden="true">★★★★★</span></div>
            <div class="cs">Verificadas en Clutch</div>
          </div>
        </div>
      </div>
    </div>
    <div class="hga-right">
      <!-- Mockup ilustrativo de una página de resultados. El dominio es ficticio a propósito:
           no se usa la marca ni el copy publicitario real de ningún cliente. -->
      <div class="serp" role="img" aria-label="Mockup de resultados de Google: un anuncio patrocinado aparece por encima de los resultados orgánicos">
        <div class="serp-bar">
          <svg class="serp-g" viewBox="0 0 48 48" aria-hidden="true"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg>
          <span class="serp-q"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3" stroke-linecap="round"/></svg>lo que tu cliente está buscando ahora<span class="car"></span></span>
        </div>
        <div class="serp-body">
          <span class="serp-cue">
            <svg class="serp-flecha" viewBox="0 0 44 32" fill="none" aria-hidden="true"><path d="M40 5 C 27 6, 14 11, 7 25" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/><path d="M3 15 L6.5 26.5 L17 22" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <span class="serp-nota">acá aparecés vos</span>
          </span>
          <article class="serp-ad">
            <span class="serp-badge">Patrocinado</span>
            <div class="serp-url">tunegocio.com</div>
            <div class="serp-t">Tu producto, justo cuando lo buscan</div>
            <p class="serp-d">El anuncio correcto frente a la persona correcta, en el momento en que decide comprar. Optimizado todos los días.</p>
          </article>
          <div class="serp-org" aria-hidden="true">
            <div class="o"><span class="l t"></span><span class="l s"></span><span class="l s2"></span></div>
            <div class="o"><span class="l t"></span><span class="l s"></span><span class="l s2"></span></div>
          </div>
          <span class="serp-lbl">Resultados orgánicos</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== QUÉ HACE NUESTRA AGENCIA ===================== -->
<section class="sec-white" id="servicio">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>¿Qué hace nuestra agencia de Google Ads?</h2>
    </div>
    <div class="wedo">
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="4.6"/><circle cx="12" cy="12" r="1" fill="currentColor"/></svg></span>
        <h3>Performance Marketing</h3>
        <p>Campañas de búsqueda y PPC para aparecer cuando alguien está buscando lo que vendés.</p>
        <span class="win">Mejorá tus ganancias</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 7h6v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>CRO &amp; Growth Marketing</h3>
        <p>Trabajamos la conversión de tu sitio además de la campaña, que es donde se decide si el clic que ya pagaste sirve de algo.</p>
        <span class="win">Crecé más a bajo costo</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 20v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9.5" cy="7" r="3.5"/><path d="M22 20v-2a4 4 0 0 0-3-3.87M16.5 3.6a4 4 0 0 1 0 7.75" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Consultoría de negocio</h3>
        <p>Trabajás junto a un equipo con más de 10 años de experiencia en Google Ads, que mira tu cuenta todos los días.</p>
        <span class="win">Aprovechá nuevas oportunidades</span>
      </article>
    </div>
    <div class="prose reveal" style="max-width:820px;margin:0 auto;text-align:center">
      <p>Google Ads se volvió complejo y muchas veces favorece más a Google que al anunciante. Sin alguien que lo vigile a diario, la inversión se va sola hacia donde a Google le conviene. Por eso trabajamos con <b>análisis continuo y decisiones diarias sobre tu cuenta</b>, no con campañas en piloto automático.</p>
    </div>
    <div class="sec-cta reveal">
      <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<!-- ===================== PARTNER PREMIER ===================== -->
<section class="sec-soft" id="partner">
  <div class="wrap">
    <div class="pp-grid">
      <div class="pp-side reveal">
        <div class="pp-badges">
          <!-- INSIGNIA VIGENTE. Construida con la G de Google porque en el repo no hay archivo
               del badge "Google Partner" sin la banda PREMIER. Cuando Manu la baje del panel de
               Google Partners, reemplazar este bloque .bfig por la imagen oficial. -->
          <div class="pp-b now">
            <span class="bfig">
              <svg viewBox="0 0 48 48" aria-hidden="true"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg>
            </span>
            <span class="bt">Google Partner</span>
            <span class="bs">Certificación del programa Google Partners</span>
            <span class="btag">Vigente</span>
          </div>
          <div class="pp-b past">
            <span class="bfig"><img src="<?php echo CAISSA_IMG; ?>/footer/badge-premier.webp" alt="Insignia de Google Partner Premier 2025 de Caissa" width="98" height="94" loading="lazy" decoding="async" /></span>
            <span class="bt">Partner Premier</span>
            <span class="bs">El 3% de las agencias de cada país</span>
            <span class="btag">2025</span>
          </div>
        </div>
        <a class="pp-verify" href="https://www.google.com/partners/agency?id=9889692537" target="_blank" rel="noopener">Verificar en el directorio de Google</a>
      </div>
      <div class="pp-text reveal">
        <div class="head-left" style="margin-bottom:0">
          <h2>Agencia certificada por Google</h2>
        </div>
        <div class="prose" style="margin-top:18px">
          <p>Caissa es <b>Google Partner</b>. La certificación exige certificaciones vigentes del equipo, un volumen mínimo de inversión gestionada y rendimiento demostrable en las cuentas. Google la revisa todos los años.</p>
          <p>En <b>2025 fuimos seleccionados Partner Premier</b>, la distinción más alta del programa, reservada al 3% de las agencias de cada país.</p>
          <p>Es la única credencial de este mercado que no depende de lo que una agencia diga de sí misma: la verificás vos en el directorio de Google.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CÓMO GESTIONAMOS ===================== -->
<section class="bg-grad" id="como">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Cómo gestionamos tus campañas de Google Ads</h2>
    </div>
    <div class="flow">
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">1</span>
        <h3>Implementación y gestión de campañas</h3>
        <p>Analizamos cada etapa del proceso de compra y elegimos los formatos que le sirven a tu negocio: búsqueda, Display, Shopping, remarketing. La estructura sale de tus objetivos comerciales, no de una plantilla.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">2</span>
        <h3>Reportes que se entienden</h3>
        <p>Reportes personalizados en Looker Studio, con las métricas que mueven tu negocio separadas de las que solo hacen ruido. Cuánto entró, cuánto salió, cuánto te queda.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">3</span>
        <h3>Optimización estratégica</h3>
        <p>Pruebas constantes sobre anuncios, pujas y audiencias para bajar el costo por venta. Y lo que casi nadie hace: preguntar si ese lead terminó cerrando.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===================== OPTIMIZACIÓN EN TIEMPO REAL =====================
     Visual PROPIO de esta página. La home tiene un panel navy con gráfico de conversiones por
     hora; este es claro y muestra otra cosa: cómo se reasigna el presupuesto entre campañas
     según lo que devuelve cada una. Números ilustrativos, aclarado al pie del panel. -->
<section class="sec-white" id="tiempo-real">
  <div class="wrap">
    <div class="rt-grid">
      <div class="rt-text reveal">
        <div class="head-left" style="margin-bottom:0">
          <span class="eyebrow">Tecnología propia</span>
          <h2>Tu inversión, vigilada en tiempo real</h2>
          <p>AEGIS, nuestro software con inteligencia artificial, controla las tres cosas que deciden si tu cuenta es rentable: a qué búsquedas va la plata, qué tan rápido carga tu página y cuánto vuelve de verdad.</p>
        </div>
        <ul class="rt-list">
          <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>La plata va a búsquedas calificadas.</b><span class="d">AEGIS revisa los términos de búsqueda que activan tus anuncios y detecta los que no tienen intención de compra, antes de que se coman el presupuesto.</span></span></li>
          <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>La velocidad de carga, controlada.</b><span class="d">Una landing lenta baja el nivel de calidad y encarece cada clic. AEGIS la chequea cada 30 minutos y avisa si algo se degrada.</span></span></li>
          <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>El ROI real, no los clics.</b><span class="d">Cruza la inversión con las ventas para mostrar cuánto vuelve por cada campaña. Las decisiones las firma un especialista, no el software.</span></span></li>
        </ul>
        <div class="prose" style="margin-top:22px"><p style="font-size:.96rem"><a href="/tecnologia/">Conocé cómo funciona nuestra tecnología</a>.</p></div>
      </div>
      <div class="rt-visual reveal">
        <div class="rt" id="rtPanel">
          <div class="rt-head">
            <span class="rt-live"><i></i> MONITOREO EN VIVO</span>
            <span class="rt-clock" id="rtClock">--:--:--</span>
          </div>
          <div class="rt-camps">
            <div class="rt-camp" data-osc="97">
              <span class="rt-name">Términos de búsqueda</span><span class="rt-roas">97% calificados</span>
              <span class="rt-track"><i style="width:97%"></i></span>
              <span class="rt-share">Los que no tienen intención de compra se negativan: <b>26 hoy</b></span>
            </div>
            <div class="rt-camp" data-osc="84">
              <span class="rt-name">Velocidad de carga</span><span class="rt-roas">LCP 1,9 s</span>
              <span class="rt-track"><i style="width:84%"></i></span>
              <span class="rt-share">Chequeo cada 30 minutos sobre tu landing real</span>
            </div>
            <div class="rt-camp" data-osc="76">
              <span class="rt-name">ROI de las campañas</span><span class="rt-roas">4,8x</span>
              <span class="rt-track"><i style="width:76%"></i></span>
              <span class="rt-share">Medido sobre ventas, no sobre clics</span>
            </div>
          </div>
          <div class="rt-feed" id="rtFeed"></div>
          <div class="rt-kpis">
            <div class="rt-k"><b id="rtTerms">214</b><span>búsquedas irrelevantes bloqueadas</span></div>
            <div class="rt-k"><b>30 min</b><span>entre chequeos de velocidad</span></div>
            <div class="rt-k"><b>24/7</b><span>vigilancia de la cuenta</span></div>
          </div>
        </div>
        <p class="rt-cap">Interfaz ilustrativa: así trabaja AEGIS sobre las cuentas, todos los días.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===================== TIPOS DE CAMPAÑA ===================== -->
<section class="sec-soft" id="campanas">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Tipos de campañas de Google Ads que gestionamos</h2>
      <p>Google Ads no es un solo producto. Una campaña de búsqueda captura demanda que ya existe; una de Display o video genera demanda que todavía no está. La combinación correcta depende de tu ciclo de venta y de la madurez de tu mercado.</p>
    </div>
    <div class="svc-grid">
      <article class="svc-card reveal">
        <span class="svc-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3" stroke-linecap="round"/></svg></span>
        <h3>Campañas de Búsqueda</h3>
        <p>Aparecés cuando alguien ya está buscando lo que vendés. El corazón de casi toda cuenta rentable.</p>
      </article>
      <article class="svc-card reveal">
        <span class="svc-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v3M12 18v3M3 12h3M18 12h3M5.6 5.6l2.1 2.1M16.3 16.3l2.1 2.1M18.4 5.6l-2.1 2.1M7.7 16.3l-2.1 2.1" stroke-linecap="round"/><circle cx="12" cy="12" r="3.4"/></svg></span>
        <h3>Performance Max</h3>
        <p>La IA de Google en todas sus plataformas. Puede ser la mejor o la peor campaña de tu cuenta, según cómo se la alimente.</p>
      </article>
      <article class="svc-card reveal">
        <span class="svc-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6h15l-1.5 9h-12z" stroke-linejoin="round"/><path d="M6 6L5 3H2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="20" r="1.4"/><circle cx="18" cy="20" r="1.4"/></svg></span>
        <h3>Google Shopping</h3>
        <p>Tu catálogo con foto y precio arriba de todo. Para e-commerce, el formato que más vende. Depende de un feed bien armado.</p>
      </article>
      <article class="svc-card reveal">
        <span class="svc-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2.5" y="4.5" width="19" height="15" rx="3"/><path d="M10 9l5 3-5 3z" fill="currentColor" stroke="none"/></svg></span>
        <h3>Campañas de Video</h3>
        <p>YouTube para construir marca y volver a impactar a quien ya te conoce. Ideal para lanzamientos.</p>
      </article>
      <article class="svc-card reveal">
        <span class="svc-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 5.5A2.5 2.5 0 0 1 5.5 3h13A2.5 2.5 0 0 1 21 5.5v13a2.5 2.5 0 0 1-2.5 2.5h-13A2.5 2.5 0 0 1 3 18.5z"/><path d="M3 9h18M8 9v12" stroke-linecap="round"/></svg></span>
        <h3>Campañas de Display</h3>
        <p>Alcance visual segmentado por audiencia. Bien usada abre demanda nueva; mal usada es el agujero más común de las cuentas.</p>
      </article>
      <article class="svc-card reveal">
        <span class="svc-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12a9 9 0 1 1 3 6.7" stroke-linecap="round"/><path d="M3 20v-5h5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Campañas de Remarketing</h3>
        <p>Volver a quien visitó y no compró. El tráfico más barato y más rentable de toda la cuenta.</p>
      </article>
      <article class="svc-card reveal">
        <span class="svc-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg></span>
        <h3>Visitas a la Tienda</h3>
        <p>Anuncios geolocalizados que traen gente a tu local y conectan la venta online con la presencial.</p>
      </article>
      <article class="svc-card reveal">
        <span class="svc-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="6" y="2.5" width="12" height="19" rx="2.5"/><path d="M11 18.5h2" stroke-linecap="round"/></svg></span>
        <h3>Descarga de Apps</h3>
        <p>Descargas en Google Play y YouTube, frente a usuarios que buscan apps como la tuya.</p>
      </article>
    </div>
  </div>
</section>

<!-- ===================== INDUSTRIAS ===================== -->
<section class="sec-white" id="industrias">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Especialistas en Google Ads por industria</h2>
      <p>Un e-commerce necesita optimizar el retorno por categoría; una constructora necesita filtrar consultas hasta llegar al lead que califica. Estas son las verticales donde tenemos experiencia acumulada.</p>
    </div>
    <div class="ind-grid">
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6h15l-1.5 9h-12z" stroke-linejoin="round"/><path d="M6 6L5 3H2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="20" r="1.3"/><circle cx="18" cy="20" r="1.3"/></svg></span>
        <div>
          <h3>Ecommerce</h3>
          <p>Shopping, Performance Max y remarketing con foco en el retorno por categoría y en la salud del feed. Hogar y deco, moda, deportes, educación.</p>
          <a href="/industrias/ecommerce/">Ver casos de e-commerce</a>
          <div class="ind-logos">
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/colchoneria_blanco.webp" alt="Colchonería Ideal" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/espacioCasa_blanco.webp" alt="Espacio Casa" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/padel-store.webp" alt="Padel Store" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/multitelas_blanco.webp" alt="Multitelas" loading="lazy" decoding="async" />
          </div>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V8l7-5 7 5v13" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 21v-6h4v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Construcción e inmobiliario</h3>
          <p>Unidades en pozo y propiedades terminadas. El desafío no es el volumen de consultas sino su calidad: optimizamos hacia el lead que califica.</p>
          <a href="/industrias/constructoras/">Ver casos de construcción</a>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 16.5V13l2-5.5h12L20 13v3.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 16.5h18v2.5h-3v-2.5M6 19v-2.5" stroke-linecap="round" stroke-linejoin="round"/><circle cx="7.5" cy="13" r="1"/><circle cx="16.5" cy="13" r="1"/></svg></span>
        <div>
          <h3>Automotriz y concesionarias</h3>
          <p>Búsqueda por modelo, segmentación por punto de venta y medición de visitas a la tienda. La conversión online conectada con la venta presencial.</p>
          <div class="ind-logos">
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/jeep-blanco.webp" alt="Jeep" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/peugeot-blanco.webp" alt="Peugeot" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/ram.webp" alt="RAM" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/fiat.webp" alt="Fiat" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/citroen.webp" alt="Citroën" loading="lazy" decoding="async" />
          </div>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14" stroke-linecap="round"/><rect x="3" y="3" width="18" height="18" rx="4.5"/></svg></span>
        <div>
          <h3>Salud</h3>
          <p>Clínicas, centros médicos y consultorios. Google tiene políticas particulares en el rubro, y se mide el turno efectivo, no el formulario enviado.</p>
          <a href="/industrias/salud/">Ver casos de salud</a>
          <div class="ind-logos">
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/neuroscenter_blanco.webp" alt="Neuros Center" loading="lazy" decoding="async" />
          </div>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.7 3.8 5.7 3.8 9S14.5 18.3 12 21c-2.5-2.7-3.8-5.7-3.8-9S9.5 5.7 12 3z"/></svg></span>
        <div>
          <h3>Turismo</h3>
          <p>Operadores y agencias de viaje. Fuerte estacionalidad: hay que anticipar la ventana de reserva de cada destino.</p>
          <a href="/industrias/turismo/">Ver casos de turismo</a>
          <div class="ind-logos">
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/atrapalo-blanco.webp" alt="Atrápalo" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/ushuaia-travel.webp" alt="Latitud Ushuaia Travel" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/cruzando-mares.webp" alt="Cruzando Mares" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/calafate-tour.webp" alt="Calafate Tour" loading="lazy" decoding="async" />
          </div>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9.5 12 4l9 5.5V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1z" stroke-linejoin="round"/><path d="M8 21v-6h8v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Retail y hogar</h3>
          <p>Negocios con local y tienda online, midiendo el impacto real de la publicidad digital sobre la venta presencial.</p>
          <!-- Rubro de estos dos INFERIDO del nombre de la marca. Confirmar con Manu. -->
          <div class="ind-logos">
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/club-de-la-milanesa.webp" alt="El Club de la Milanesa" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/top-iluminaciones.webp" alt="Top Iluminaciones" loading="lazy" decoding="async" />
          </div>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21V8l6-4v17M9 21V11l6-3v13M15 21V12l6-2.5V21" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>B2B e industria</h3>
          <p>Ciclos largos y poco volumen de búsqueda. Todo pasa por la precisión de las keywords y por medir la calidad del lead, no la cantidad.</p>
          <a href="https://caissa.digital/caso/axionlift/">Ver el caso Axion Lift</a>
          <div class="ind-logos">
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/axion-lift-blanco.webp" alt="Axion Lift" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/dynamic-logistics.webp" alt="Dynamic Logistics" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/aislatek.webp" alt="Aislatek" loading="lazy" decoding="async" />
          </div>
        </div>
      </div>
      <div class="ind reveal">
        <!-- A CONFIRMAR con Manu: no hay caso público de apps/SaaS en el sitio. La vertical la
             propuso la SEO. Si Caissa no tiene experiencia real acá, esta tarjeta se elimina. -->
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7.5" height="7.5" rx="2"/><rect x="13.5" y="3" width="7.5" height="7.5" rx="2"/><rect x="3" y="13.5" width="7.5" height="7.5" rx="2"/><rect x="13.5" y="13.5" width="7.5" height="7.5" rx="2"/></svg></span>
        <div>
          <h3>Apps y software</h3>
          <p>Descargas en Google Play y YouTube, y búsqueda para productos SaaS con prueba gratuita.</p>
        </div>
      </div>
    </div>
    <div class="sec-cta reveal" style="margin-top:34px">
      <a href="/industrias/" class="btn btn-ghost-d">Mirá cómo trabajamos tu industria
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<!-- ===================== TESTIMONIOS =====================
     A PROPÓSITO son testimonios DISTINTOS de los de la home (Paula Luzzi, Colchonería, Espacio
     Casa, Clean It, Neuros, Cefil, GOIAR, Ushuaia, Milanesa, SAMBA, Youtooproject). Estos cuatro
     salen de la página de producción y no se repiten en ningún otro lugar del sitio nuevo.
     No hay fotos de estas personas en el repo, por eso la tarjeta va sin avatar. -->
<section class="sec-soft" id="testimonios">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Testimonios de clientes</h2>
      <p>Resultados de cuentas que gestionamos, firmados por quien los vivió.</p>
    </div>
    <div class="tst-grid">
      <article class="tst reveal">
        <div class="tst-m">407%</div>
        <div class="tst-ml">Aumento en leads calificados interanual</div>
        <p class="tst-q">“Junto a Caissa, crecimos más rápido de lo que imaginamos.”</p>
        <div class="tst-w"><b>Francisco</b><span>Socio · Constructora Cipolletti</span></div>
      </article>
      <article class="tst reveal">
        <div class="tst-m">+400%</div>
        <div class="tst-ml">Leads calificados con el mismo presupuesto</div>
        <p class="tst-q">“Caissa optimizó nuestros costos y ordenó nuestro seguimiento online.”</p>
        <div class="tst-w"><b>Ignacio</b><span>Gerente de Marketing · Axion Lift</span></div>
      </article>
      <article class="tst reveal">
        <div class="tst-m">+85%</div>
        <div class="tst-ml">Aumento en ventas</div>
        <p class="tst-q">“Gracias a Caissa, mi empresa vende incluso cuando estoy de vacaciones.”</p>
        <div class="tst-w"><b>Mariana Luaces</b><span>Cofundadora · Cruzando Mares</span></div>
      </article>
      <article class="tst reveal">
        <div class="tst-m">35%</div>
        <div class="tst-ml">Reducción del costo por adquisición</div>
        <p class="tst-q">“Caissa transformó nuestra publicidad con transparencia y feedback constante.”</p>
        <div class="tst-w"><b>Jaime</b><span>Over Option</span></div>
      </article>
    </div>
    <div class="sec-cta reveal">
      <a href="/reviews/" class="btn btn-ghost-d">Ver todos los testimonios
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<!-- ===================== CÓMO ELEGIR AGENCIA ===================== -->
<section class="sec-white" id="elegir">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Cómo elegir una agencia de Google Ads</h2>
      <p>Seis preguntas para la primera reunión, sea con nosotros o con cualquier otra. Si alguna incomoda, ya sabés algo importante.</p>
    </div>
    <div class="crit-grid">
      <div class="crit reveal">
        <span class="crit-n">1</span>
        <div>
          <h3>¿La cuenta va a estar a mi nombre?</h3>
          <p>Tiene que ser tuya. Si la agencia trabaja sobre una cuenta propia, el día que te vas perdés el historial completo y arrancás de cero en otro lado.</p>
        </div>
      </div>
      <div class="crit reveal">
        <span class="crit-n">2</span>
        <div>
          <h3>¿Quién va a trabajar mi cuenta todos los días?</h3>
          <p>Pedí el nombre y la antigüedad. En muchas agencias te vende un senior y la cuenta la ejecuta alguien que recién arranca.</p>
        </div>
      </div>
      <div class="crit reveal">
        <span class="crit-n">3</span>
        <div>
          <h3>¿Qué métrica van a reportarme?</h3>
          <p>Si la respuesta son clics, impresiones o CTR, buscá en otro lado. Importa cuántas ventas entraron y cuánto costó cada una.</p>
        </div>
      </div>
      <div class="crit reveal">
        <span class="crit-n">4</span>
        <div>
          <h3>¿Hay contrato de permanencia?</h3>
          <p>Un contrato largo suele proteger a la agencia de sus propios resultados. Si el servicio funciona, el mes a mes le conviene a los dos.</p>
        </div>
      </div>
      <div class="crit reveal">
        <span class="crit-n">5</span>
        <div>
          <h3>¿Trabajan lo que pasa después del clic?</h3>
          <p>Podés tener la mejor campaña del mundo y perder la venta en una landing lenta o en un vendedor que contesta a los dos días.</p>
        </div>
      </div>
      <div class="crit reveal">
        <span class="crit-n">6</span>
        <div>
          <h3>¿Me muestran casos verificables?</h3>
          <p>Con nombre de empresa, persona que firma y métrica concreta. Un porcentaje suelto en una placa de Instagram no prueba nada.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CUÁNTO CUESTA ===================== -->
<!-- Sin cifras propias de Caissa (decisión de Manu). Los rangos citados son del mercado. -->
<section class="bg-grad" id="precios">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Cuánto cobra una agencia de Google Ads</h2>
      <p>Hay dos números y conviene no mezclarlos: lo que le pagás a Google en pauta, y lo que le pagás a la agencia por gestionarla.</p>
    </div>
    <div class="price-grid">
      <article class="pcard reveal">
        <span class="pc-how">Lo que usamos</span>
        <h3>Honorario mensual fijo</h3>
        <p>Un monto cerrado por mes, definido según el alcance del proyecto. Previsible para presupuestar y sin sorpresas cuando sube la inversión.</p>
        <p class="pc-warn"><b>Ojo con:</b> que el alcance esté escrito.</p>
      </article>
      <article class="pcard reveal">
        <span class="pc-how">Alternativa</span>
        <h3>Porcentaje sobre la inversión</h3>
        <p>Entre el 10% y el 20% de lo invertido en pauta, según el mercado. Escala con la cuenta.</p>
        <p class="pc-warn"><b>Ojo con:</b> el incentivo empuja a gastar más, no mejor. Preguntá qué pasa si lo correcto es bajar el presupuesto.</p>
      </article>
      <article class="pcard reveal">
        <span class="pc-how">Alternativa</span>
        <h3>Mixto o por resultados</h3>
        <p>Una base fija más un variable atado a la inversión o a los resultados.</p>
        <p class="pc-warn"><b>Ojo con:</b> que el resultado que dispara el variable sea una venta medida, no un formulario cualquiera.</p>
      </article>
    </div>
    <div class="price-note reveal">
      <p><b>La regla que no falla:</b> honorario y pauta son dos números distintos y tienen que estar separados desde la primera conversación. Si una propuesta los mezcla en una sola cifra, pedí que los abran.</p>
      <!-- MÍNIMO DE TRABAJO (confirmado por Manuel el 12/08/2026): empresas que invierten más
           de USD 3.000 por mes en marketing digital. Reemplaza al viejo "desde USD 2.000 en
           pauta". Va con la misma redacción en las tres landings, en la home y en el FAQPage:
           si el número cambia, se cambian los seis lugares. NO enlazar a /precios/ ni a /planes/:
           esas páginas no van a existir. -->
      <p>Trabajamos con <b>empresas que invierten más de USD 3.000 por mes en marketing digital</b>. Es el mínimo, y no es un número comercial: por debajo de ahí Google no junta datos suficientes para optimizar y la cuenta nunca llega a despegar. Pedí la consultoría y hablamos sobre tu caso real. <b>Sin contratos de permanencia.</b></p>
    </div>
  </div>
</section>

<!-- ===================== ARGENTINA Y LATAM ===================== -->
<section class="sec-soft" id="alcance">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Agencia de Google Ads para Argentina y LATAM</h2>
      <p>Trabajamos con empresas de Argentina, España y el resto de Latinoamérica, gestionando campañas en múltiples mercados y monedas.</p>
    </div>
    <div class="prose reveal" style="max-width:860px;margin-bottom:34px">
      <p>La estacionalidad, la competencia y los costos por clic cambian mucho entre mercados: <b>una campaña replicada sin ajustes locales destruye la rentabilidad</b>. Trabajo, reportes y reuniones en español, en tu huso horario.</p>
    </div>
    <div class="geo-grid">
      <div class="geo-item reveal"><b>Argentina</b><span>Nuestra base. Oficinas propias y equipo completo, con cobertura en todo el país.</span></div>
      <div class="geo-item reveal"><b>España</b><span>Cuentas de industria y servicios, con la subasta y la estacionalidad del mercado europeo.</span></div>
      <div class="geo-item reveal"><b>México y Colombia</b><span>E-commerce y generación de leads en los dos mercados más grandes de la región.</span></div>
      <div class="geo-item reveal"><b>Chile y Perú</b><span>Cuentas de servicios y retail, con seguimiento de la competencia local.</span></div>
      <div class="geo-item reveal"><b>Estados Unidos, mercado hispano</b><span>Empresas que venden en español a la comunidad hispana, con los costos por clic de ese mercado.</span></div>
      <div class="geo-item reveal"><b>Estructuras multipaís</b><span>Cuentas con varios mercados y monedas conviviendo, medidas de forma comparable.</span></div>
    </div>
    <div class="prose reveal" style="margin:30px auto 0;text-align:center;max-width:820px">
      <p style="font-size:.98rem">Si buscás una agencia con presencia local, mirá también <a href="https://caissa.digital/agencia-marketing-digital-argentina/">agencia de marketing digital en Argentina</a> y <a href="/agencia-marketing-neuquen/">marketing en Neuquén</a>.</p>
    </div>
  </div>
</section>

<!-- ===================== CONSULTORÍA GRATUITA =====================
     Versión propia de esta página: sin el mockup de dashboard que usa la home. -->
<section class="bg-grad" id="consultoria">
  <div class="wrap">
    <div class="cons reveal">
      <div class="cons-copy">
        <h2>Consultoría gratuita de 15 minutos</h2>
        <p class="intro">Compartimos pantalla y recorremos tu cuenta de Google Ads juntos, en vivo. No hay presentación ni propuesta comercial: se abre tu cuenta y se mira lo que hay adentro.</p>
        <ol>
          <li><span>Revisamos <b>dónde se está yendo la inversión</b> y qué campañas no devuelven.</span></li>
          <li><span>Te decimos si la cuenta <b>está bien, tiene arreglo o apunta al objetivo equivocado</b>.</span></li>
          <li><span>Te llevás <b>recomendaciones accionables</b>, trabajes después con nosotros o no.</span></li>
        </ol>
        <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        <p class="cons-note">Trabajamos con empresas que invierten más de <b>USD 3.000 por mes</b> en marketing digital. No es una venta disfrazada de consultoría: si no te podemos ayudar, también te lo decimos.</p>
      </div>
      <div class="cons-who">
        <span class="ph"><img src="<?php echo CAISSA_IMG; ?>/Manu-CEO-home.webp" alt="Manuel Ferrini, CEO y cofundador de Caissa" width="450" height="568" loading="lazy" decoding="async" /></span>
        <span class="l">La consultoría la hago yo.</span>
        <span class="n">Manuel Ferrini</span>
        <span class="r">CEO y cofundador de Caissa</span>
      </div>
    </div>
  </div>
</section>

<!-- ===================== FAQ =====================
     ABIERTA a propósito: sin acordeón (§4 de CLAUDE.md, Manu los rechazó) y con todo el texto
     visible, que además es lo que Google recomienda para que el FAQPage cuente. Las 10 preguntas
     y respuestas son EXACTAMENTE las del JSON-LD del <head>. Si editás una, editá la otra. -->
<section class="sec-soft" id="faq">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Preguntas frecuentes sobre agencias de Google Ads</h2>
    </div>
    <div class="faqo-grid">
      <details class="faqo reveal">
        <summary><h3>¿Qué es una agencia de Google Ads?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Una agencia de Google Ads es una empresa especializada en planificar, implementar y optimizar campañas de publicidad dentro del ecosistema de Google: búsqueda, Display, Shopping, YouTube, Performance Max y aplicaciones.</p>
          <p>Su rol va más allá de publicar anuncios: define la estrategia de puja, la estructura de la cuenta, la medición de conversiones y la optimización continua para que cada peso invertido genere retorno.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cómo funciona Google Ads?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Google Ads funciona con un sistema de subasta en tiempo real. Cada vez que alguien busca en Google, la plataforma evalúa los anuncios elegibles y los ordena según la puja y el Nivel de Calidad, que mide la relevancia del anuncio, la experiencia de la página de destino y el porcentaje de clics esperado.</p>
          <p>Por eso un anuncio mejor optimizado puede aparecer más arriba pagando menos que un competidor.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cuánto cuesta Google Ads en Argentina?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>No hay un costo fijo: pagás por clic o por conversión, y el precio de cada clic depende de la competencia de tu industria. En Argentina, el costo por clic promedio va desde valores muy bajos en nichos poco competitivos hasta rangos altos en sectores como seguros, salud privada, educación o construcción.</p>
          <p>Lo determinante no es el costo por clic sino el <b>costo por adquisición</b> y el retorno sobre la inversión publicitaria.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cuánto tiempo tarda en verse resultados con Google Ads?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>A diferencia del SEO, en Google Ads los anuncios pueden empezar a mostrarse apenas se aprueban. Cuánto tarda en haber datos suficientes para decidir depende del volumen de búsquedas y de conversiones de cada cuenta: no es lo mismo un rubro con miles de consultas por mes que uno con veinte.</p>
          <p>Por eso preferimos no dar un plazo cerrado: en la consultoría miramos tu cuenta y te decimos qué esperar en tu caso.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Qué incluye el servicio de gestión de Google Ads?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Incluye auditoría inicial de la cuenta, definición de la estrategia y la estructura de campañas, implementación y configuración del seguimiento de conversiones, redacción de anuncios, optimización continua de pujas y audiencias, pruebas de creatividades y páginas de destino, reportes personalizados en Looker Studio y reuniones periódicas de seguimiento.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿La cuenta de Google Ads queda a mi nombre?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Sí. La cuenta, las campañas, el historial y los datos son tuyos. Si algún día decidís irte, te los llevás completos.</p>
          <p>Nunca trabajamos sobre una cuenta propia que te deje sin historial al terminar la relación.</p>
        </div>
      </details>
    </div>
  </div>
</section>

<!-- ===================== CTA FINAL ===================== -->
<section class="final bg-grad" id="cta">
  <div class="wrap">
    <div class="cta-ga reveal">
      <h2>Veamos qué está pasando en tu cuenta</h2>
      <p>En 15 minutos revisamos tu cuenta y te decimos qué cambiaríamos primero. Te llevás las conclusiones, decidas contratarnos o no.</p>
      <a href="/reservar-consultoria/" class="btn btn-light">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <div class="rea">15 minutos · Sin contratos de permanencia</div>
    </div>
  </div>
</section>


<!-- ===================== FOOTER (global del sitio) ===================== -->
</main>

<?php
get_footer();