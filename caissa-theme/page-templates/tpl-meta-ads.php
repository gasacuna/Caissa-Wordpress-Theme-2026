<?php
/**
 * Template Name: Caissa — Agencia de Meta Ads
 *
 * Migrada desde agencia-meta-ads/index.html del repo Caissa-Nueva-Web-2026.
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
      "description": "Agencia de performance marketing especializada en Meta Ads y Google Ads. Gestión diaria de la inversión publicitaria, sin contratos de permanencia.",
      "foundingDate": "2021",
      "knowsAbout": ["Meta Ads", "Facebook Ads", "Instagram Ads", "WhatsApp Ads", "Campañas Advantage+", "Meta Pixel y API de Conversiones", "Google Ads", "Performance Marketing", "Social Ads", "Optimización de conversión"],
      "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.9", "reviewCount": "65", "bestRating": "5" },
      "hasCredential": {
        "@type": "EducationalOccupationalCredential",
        "credentialCategory": "certification",
        "name": "Meta Business Partner",
        "recognizedBy": { "@type": "Organization", "name": "Meta" }
      },
      "founder": [
        { "@type": "Person", "name": "Manuel Ferrini", "jobTitle": "CEO y cofundador", "sameAs": "https://ar.linkedin.com/in/manuelferrini" },
        { "@type": "Person", "name": "Martín Pera", "jobTitle": "COO y cofundador" }
      ],
      "sameAs": [
        "https://www.linkedin.com/company/caissa-digital",
        "https://www.instagram.com/caissa_digital/",
        "https://clutch.co/profile/caissa",
        "https://www.sortlist.es/agency/caissa"
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://caissa.digital/agencia-meta-ads/#webpage",
      "url": "https://caissa.digital/agencia-meta-ads/",
      "name": "Agencia de Meta Ads | Meta Business Partner | Caissa",
      "description": "Agencia de Meta Ads y Meta Business Partner oficial. Campañas de Facebook, Instagram y WhatsApp Ads para empresas de Argentina, LATAM y España.",
      "inLanguage": "es",
      "isPartOf": { "@id": "https://caissa.digital/#organization" }
    },
    {
      "@type": "Service",
      "@id": "https://caissa.digital/agencia-meta-ads/#service",
      "serviceType": "Gestión de campañas de Meta Ads",
      "name": "Agencia de Meta Ads",
      "alternateName": ["Agencia de Facebook Ads", "Agencia de Instagram Ads"],
      "url": "https://caissa.digital/agencia-meta-ads/",
      "description": "Estrategia, implementación y optimización continua de campañas en Facebook Ads, Instagram Ads y WhatsApp Ads. Incluye estructura de cuenta, audiencias, testeo de creatividades, campañas Advantage+, catálogo, remarketing y medición con Meta Pixel y API de Conversiones.",
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
        "name": "Servicios de Meta Ads",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Facebook Ads" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Instagram Ads" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "WhatsApp Ads" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Campañas Advantage+" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Meta Pixel y API de Conversiones" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Remarketing y públicos similares" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Anuncios de video, Reels y Stories" } }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://caissa.digital/agencia-meta-ads/#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://caissa.digital/" },
        { "@type": "ListItem", "position": 2, "name": "Agencia de Meta Ads", "item": "https://caissa.digital/agencia-meta-ads/" }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://caissa.digital/agencia-meta-ads/#faq",
      "mainEntity": [
        { "@type": "Question", "name": "¿Qué es una agencia de Meta Ads?", "acceptedAnswer": { "@type": "Answer", "text": "Es una empresa especializada en planificar, implementar y optimizar campañas de publicidad dentro del ecosistema de Meta: Facebook, Instagram, WhatsApp, Messenger y Audience Network. Su rol va más allá de publicar anuncios: define la estrategia de públicos, la estructura de la cuenta, las creatividades, la medición de conversiones y la optimización continua para que cada peso invertido vuelva." } },
        { "@type": "Question", "name": "¿Cuál es la inversión mínima recomendada en Meta Ads?", "acceptedAnswer": { "@type": "Answer", "text": "Meta no exige un presupuesto mínimo, pero existe un piso práctico por debajo del cual el algoritmo no reúne datos suficientes para optimizar. Ese piso depende del objetivo, del costo por resultado de tu industria y de cuánto dure la campaña. Una inversión demasiado baja no produce resultados malos: produce resultados sin significado estadístico, que no permiten decidir nada. Nosotros trabajamos con empresas que invierten más de USD 3.000 por mes en marketing digital." } },
        { "@type": "Question", "name": "¿Cuánto cobra una agencia de Meta Ads?", "acceptedAnswer": { "@type": "Answer", "text": "El honorario de la agencia es independiente de la inversión publicitaria, que va directo a Meta. Los modelos más comunes son un honorario mensual fijo, un porcentaje sobre la inversión gestionada o un esquema mixto con un componente variable por resultados. En Caissa trabajamos con un honorario mensual definido según el alcance del proyecto, sin contratos de permanencia. El número exacto sale de mirar tu cuenta en la consultoría." } },
        { "@type": "Question", "name": "¿Cuánto tiempo tarda en verse resultados con Meta Ads?", "acceptedAnswer": { "@type": "Answer", "text": "Los anuncios pueden empezar a mostrarse apenas se aprueban, pero los datos accionables llegan después. Cada campaña atraviesa un período de aprendizaje en el que el algoritmo necesita acumular conversiones antes de estabilizar la entrega, y durante esa etapa los resultados son más variables. La lectura confiable suele llegar entre la tercera y la sexta semana, según el volumen de conversiones." } },
        { "@type": "Question", "name": "¿La cuenta publicitaria queda a mi nombre?", "acceptedAnswer": { "@type": "Answer", "text": "Sí. La cuenta publicitaria y el administrador comercial son tuyos y siempre deben serlo. Nosotros los administramos con los permisos que corresponden, pero la propiedad, el historial de datos, el píxel y los públicos quedan bajo tu control. Si algún día decidís terminar la relación, te llevás todo con su aprendizaje acumulado. Es la diferencia entre cambiar de agencia un lunes y empezar de cero." } },
        { "@type": "Question", "name": "¿Qué significa que una agencia sea Meta Business Partner?", "acceptedAnswer": { "@type": "Answer", "text": "Meta Business Partner es el programa oficial de certificación de agencias de Meta. El nivel con insignia se otorga a las agencias que demuestran resultados gestionando inversión publicitaria real y que mantienen a su equipo con las certificaciones vigentes, e incluye su presencia en el directorio oficial de partners. No es un sello que se compre. Caissa cuenta con esta distinción." } },
        { "@type": "Question", "name": "¿Conviene anunciar en Facebook o en Instagram?", "acceptedAnswer": { "@type": "Answer", "text": "Las dos se gestionan desde la misma cuenta publicitaria, así que no es una decisión excluyente. Facebook suele rendir mejor en públicos de más de 35 años, formularios de generación de leads y campañas de catálogo. Instagram concentra el consumo de formatos verticales y funciona mejor en rubros con componente visual fuerte. Lo habitual es distribuir en las dos y dejar que los datos definan el reparto." } },
        { "@type": "Question", "name": "¿Cuál es la diferencia entre Facebook Ads, Instagram Ads y Meta Ads?", "acceptedAnswer": { "@type": "Answer", "text": "Son la misma plataforma. Meta Ads es el nombre actual del sistema publicitario que antes se conocía como Facebook Ads, y desde un mismo administrador se compran ubicaciones en Facebook, Instagram, WhatsApp, Messenger y Audience Network. Hoy no se contrata Facebook Ads o Instagram Ads por separado: se define una estrategia en Meta y se eligen las ubicaciones que le sirven al negocio." } }
      ]
    }
  ]
}
</script>
<?php endif; ?>
<main>

<!-- ===================== HERO ===================== -->
<section class="hga">
  <div class="wrap hga-grid">
    <div class="hga-left">
      <h1>Agencia de Meta Ads</h1>
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
      </svg></span><br />y tu rentabilidad con Meta Ads</p>
      <p class="hga-sub">Somos Meta Business Partner y llevamos más de USD 30.000.000 invertidos en Facebook e Instagram Ads para empresas de Argentina, España y Latinoamérica.</p>
      <div class="hga-cta">
        <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <p class="hga-note">Mes a mes, sin permanencia. Te quedás si los números cierran.</p>
      <div class="hga-creds">
        <img src="<?php echo CAISSA_IMG; ?>/meta-partner.webp" alt="Caissa es Meta Business Partner" width="238" height="75" />
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
      <!-- Mockup ilustrativo de un anuncio en el feed. Creatividad abstracta a propósito:
           no se usa el anuncio ni la marca real de ningún cliente. -->
      <div class="feed" role="img" aria-label="Mockup de un anuncio patrocinado en el feed de Facebook e Instagram">
        <div class="feed-tabs">
          <span class="feed-tab on"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.07C24 5.4 18.63 0 12 0S0 5.4 0 12.07C0 18.1 4.39 23.1 10.13 24v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.69 4.53-4.69 1.31 0 2.68.24 2.68.24v2.97h-1.51c-1.49 0-1.96.93-1.96 1.89v2.25h3.33l-.53 3.49h-2.8V24C19.61 23.1 24 18.1 24 12.07z"/></svg>Facebook</span>
          <span class="feed-tab"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.43.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.43.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.72 3.72 0 01-1.38-.9 3.72 3.72 0 01-.9-1.38c-.16-.43-.36-1.06-.41-2.23C2.17 15.58 2.16 15.2 2.16 12s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.43-.16 1.06-.36 2.23-.41C8.42 2.17 8.8 2.16 12 2.16M12 0C8.74 0 8.33.01 7.05.07 5.78.13 4.9.33 4.14.63c-.79.31-1.46.72-2.13 1.38C1.35 2.68.94 3.35.63 4.14.33 4.9.13 5.78.07 7.05.01 8.33 0 8.74 0 12s.01 3.67.07 4.95c.06 1.27.26 2.15.56 2.91.31.79.72 1.46 1.38 2.13.67.66 1.34 1.07 2.13 1.38.76.3 1.64.5 2.91.56C8.33 23.99 8.74 24 12 24s3.67-.01 4.95-.07c1.27-.06 2.15-.26 2.91-.56.79-.31 1.46-.72 2.13-1.38.66-.67 1.07-1.34 1.38-2.13.3-.76.5-1.64.56-2.91.06-1.28.07-1.69.07-4.95s-.01-3.67-.07-4.95c-.06-1.27-.26-2.15-.56-2.91-.31-.79-.72-1.46-1.38-2.13-.67-.66-1.34-1.07-2.13-1.38-.76-.3-1.64-.5-2.91-.56C15.67.01 15.26 0 12 0z"/><path d="M12 5.84A6.16 6.16 0 1018.16 12 6.16 6.16 0 0012 5.84M12 16a4 4 0 114-4 4 4 0 01-4 4z"/><circle cx="18.41" cy="5.59" r="1.44"/></svg>Instagram</span>
        </div>
        <div class="feed-post">
          <div class="feed-user">
            <span class="feed-av"></span>
            <span class="feed-id"><b>Tu negocio</b><span>Publicidad</span></span>
          </div>
          <p class="feed-copy">Tres segundos para frenar el scroll. Si los primeros no enganchan, no hay presupuesto que alcance.</p>
          <div class="feed-creative">
            <span class="feed-cw"><b>Tu producto</b><span>Oferta por tiempo limitado</span></span>
          </div>
          <div class="feed-bar">
            <span class="feed-link">tunegocio.com</span>
            <span class="feed-btn">Comprar ahora</span>
          </div>
          <div class="feed-acts" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 0 0-7.8 7.8l1.1 1L12 21.2l7.7-7.7 1.1-1a5.5 5.5 0 0 0 0-7.9z" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M21 11.5a8.4 8.4 0 0 1-8.5 8.5 8.4 8.4 0 0 1-3.8-.9L3 21l1.9-5.7a8.4 8.4 0 0 1-.9-3.8A8.4 8.4 0 0 1 12.5 3 8.4 8.4 0 0 1 21 11.5z" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4z" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
        </div>
        <span class="feed-cue">
          <svg class="feed-flecha" viewBox="0 0 42 31" fill="none" aria-hidden="true"><path d="M38 5 C 26 6, 13 10, 6 24" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/><path d="M2 14 L5.5 25.5 L16 21" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span class="feed-nota">así te ve tu cliente</span>
        </span>
      </div>
    </div>
  </div>
</section>

<!-- ===================== QUÉ HACE NUESTRA AGENCIA ===================== -->
<section class="sec-white" id="servicio">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>¿Qué hace nuestra agencia de Meta Ads?</h2>
    </div>
    <div class="wedo">
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="4.6"/><circle cx="12" cy="12" r="1" fill="currentColor"/></svg></span>
        <h3>Estrategia y públicos</h3>
        <p>Definimos a quién le hablás en cada etapa: público frío, gente que ya te conoce y quien estuvo a un paso de comprar.</p>
        <span class="win">Dejá de pagar por alcance vacío</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="3.5"/><path d="M3 15l5-5 4 4 3-3 6 6" stroke-linecap="round" stroke-linejoin="round"/><circle cx="15" cy="8" r="1.6"/></svg></span>
        <h3>Creatividades que frenan el scroll</h3>
        <p>En Meta la creatividad es la segmentación. Armamos el briefing, testeamos variantes y cortamos las que no rinden.</p>
        <span class="win">Bajá el costo por resultado</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 7h6v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Medición que no miente</h3>
        <p>Píxel y API de conversiones bien configurados. Sin eso, Meta optimiza hacia el objetivo equivocado y no te enterás.</p>
        <span class="win">Decidí sobre datos reales</span>
      </article>
    </div>
    <div class="prose reveal" style="max-width:820px;margin:0 auto;text-align:center">
      <p>Meta cambió: hoy el algoritmo decide gran parte de la segmentación y lo que mueve la aguja es <b>qué le das de comer</b>. Creatividad, señales de conversión y estructura de cuenta. Ahí trabajamos, y por eso <b>la lectura confiable llega entre la tercera y la sexta semana</b>.</p>
    </div>
    <div class="sec-cta reveal">
      <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<!-- ===================== META BUSINESS PARTNER ===================== -->
<section class="sec-soft" id="partner">
  <div class="wrap">
    <div class="mbp">
      <div class="mbp-badge reveal">
        <img src="<?php echo CAISSA_IMG; ?>/footer/badge-meta.jpg" alt="Caissa es Meta Business Partner" width="1024" height="587" loading="lazy" decoding="async" />
        <div class="t">Meta Business Partner</div>
        <div class="s">Certificación oficial de Meta para agencias con volumen y rendimiento demostrable.</div>
        <span class="tag">Vigente</span>
      </div>
      <div class="mbp-text reveal">
        <div class="head-left" style="margin-bottom:0">
          <h2>Agencia Meta Business Partner</h2>
        </div>
        <div class="prose" style="margin-top:18px">
          <p>Meta no reparte esta certificación: la otorga a agencias que gestionan inversión publicitaria real, sostienen las acreditaciones al día y figuran en su directorio oficial de partners. Se revisa, no se compra.</p>
          <!-- Los tres beneficios de abajo son los del programa Partner (soporte, betas, avisos
               anticipados). Vienen del documento de la SEO. Son ciertos del programa; CONFIRMAR
               CON MANU que Caissa efectivamente los usa así antes de publicar. -->
          <p>En la práctica se nota tres veces: <b>canal de soporte directo</b> cuando una cuenta se restringe o un anuncio se rechaza sin motivo, <b>acceso a formatos en fase beta</b> antes de que se liberen, y los cambios de la plataforma nos llegan antes de que se anuncien.</p>
          <p>Y significa que no aprendemos con tu presupuesto: <b>ya invertimos más de USD 30.000.000 en Meta Ads</b> y sabemos dónde se rompe una cuenta antes de que se rompa.</p>
        </div>
        <div class="mbp-stats">
          <div class="mbp-st"><b>+30M USD</b><span>invertidos en Meta Ads</span></div>
          <div class="mbp-st"><b>+50</b><span>empresas trabajando con Caissa</span></div>
          <div class="mbp-st"><b>+4 años</b><span>dura un cliente en promedio</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CÓMO GESTIONAMOS ===================== -->
<section class="bg-grad" id="como">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Cómo gestionamos tus campañas de Meta Ads</h2>
    </div>
    <div class="flow flow-4">
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">1</span>
        <h3>Estrategia y estructura</h3>
        <p>Definimos el embudo y los objetivos según tu modelo de negocio, y armamos la cuenta para que cada campaña junte las conversiones que necesita para optimizar. Las ubicaciones se eligen por rendimiento, no por defecto.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">2</span>
        <h3>Audiencias y segmentación</h3>
        <p>Construimos los públicos con tus propios datos, públicos similares y señales de comportamiento. Miramos qué segmento compra de verdad y movemos la entrega hacia ahí, no hacia lo que suponemos de tu cliente.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">3</span>
        <h3>Creatividades y testing</h3>
        <p>Imagen, video, secuencia, colección o catálogo dinámico, según lo que pida el objetivo. Probamos en condiciones controladas y escalamos solo lo que demuestra resultado. Un anuncio se quema: hay calendario de reemplazo.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">4</span>
        <h3>Medición y reportes</h3>
        <p>Seguimiento de conversiones configurado de punta a punta, presupuesto ajustado según el rendimiento de cada conjunto y reportes en Looker Studio con las métricas que le importan a tu negocio, no las que la plataforma muestra por defecto.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===================== OPTIMIZACIÓN EN TIEMPO REAL ===================== -->
<section class="sec-white" id="tiempo-real">
  <div class="wrap">
    <div class="rt-grid">
      <div class="rt-text reveal">
        <div class="head-left" style="margin-bottom:0">
          <span class="eyebrow">Tecnología propia</span>
          <h2>Detectamos la creatividad quemada antes que vos</h2>
          <p>AEGIS, nuestro software con inteligencia artificial, vigila la frecuencia y el costo por resultado de cada anuncio las 24 horas. En Meta, un día tarde son varios miles perdidos.</p>
        </div>
        <ul class="rt-list">
          <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>Corta la creatividad quemada.</b><span class="d">Cuando el costo por resultado de un anuncio empieza a subir, se detecta y se reemplaza antes de que se coma el presupuesto del mes.</span></span></li>
          <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>Redistribuye entre conjuntos.</b><span class="d">Lo que no convierte se detecta el mismo día, no en la revisión del lunes.</span></span></li>
          <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>Nada se toca sin registro.</b><span class="d">Cada cambio queda con su hora y su motivo. Lo estructural lo aprueba un especialista antes de ejecutarse.</span></span></li>
        </ul>
        <div class="prose" style="margin-top:22px"><p style="font-size:.96rem"><a href="/tecnologia/">Mirá cómo construimos AEGIS</a>.</p></div>
      </div>
      <div class="rt-visual reveal">
        <div class="rt" id="rtPanel">
          <div class="rt-head">
            <span class="rt-live"><i></i> MONITOREO EN VIVO</span>
            <span class="rt-clock" id="rtClock">--:--:--</span>
          </div>
          <div class="rt-camps">
            <div class="rt-camp" data-base="35">
              <span class="rt-name">Advantage+ · Catálogo</span><span class="rt-roas">ROAS 6,8</span>
              <span class="rt-track"><i style="width:35%"></i></span>
              <span class="rt-share">Presupuesto <b>35%</b></span>
            </div>
            <div class="rt-camp" data-base="29">
              <span class="rt-name">Remarketing · 30 días</span><span class="rt-roas">ROAS 9,2</span>
              <span class="rt-track"><i style="width:29%"></i></span>
              <span class="rt-share">Presupuesto <b>29%</b></span>
            </div>
            <div class="rt-camp" data-base="25">
              <span class="rt-name">Públicos similares</span><span class="rt-roas">ROAS 3,4</span>
              <span class="rt-track"><i style="width:25%"></i></span>
              <span class="rt-share">Presupuesto <b>25%</b></span>
            </div>
            <div class="rt-camp down" data-base="11">
              <span class="rt-name">Reconocimiento · Frío</span><span class="rt-roas">ROAS 0,6</span>
              <span class="rt-track"><i style="width:11%"></i></span>
              <span class="rt-share">Presupuesto <b>11%</b></span>
            </div>
          </div>
          <div class="rt-feed" id="rtFeed"></div>
          <div class="rt-kpis">
            <div class="rt-k"><b id="rtDecs">41</b><span>ajustes hoy</span></div>
            <div class="rt-k"><b id="rtTerms">17</b><span>creatividades rotadas</span></div>
            <div class="rt-k"><b>24/7</b><span>monitoreo de anuncios</span></div>
          </div>
        </div>
        <p class="rt-cap">Vista ilustrativa del monitoreo que corre sobre cada cuenta publicitaria.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===================== FACEBOOK ADS E INSTAGRAM ADS =====================
     ESTA es la sección que absorbe /agencia-facebook-ads/ y /agencia-instagram-ads/.
     Los H3 llevan las keywords exactas de las dos URLs que se van a fusionar. -->
<section class="sec-soft" id="plataformas">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Campañas de Facebook, Instagram y WhatsApp Ads</h2>
      <p>Meta Ads no es una sola plataforma. Facebook, Instagram y WhatsApp se gestionan desde la misma cuenta pero funcionan distinto, y la combinación correcta depende de dónde está tu audiencia y de cómo compra.</p>
    </div>
    <div class="plat">
      <article class="plat-c reveal">
        <div class="plat-h">
          <span class="plat-ic fb"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.07C24 5.4 18.63 0 12 0S0 5.4 0 12.07C0 18.1 4.39 23.1 10.13 24v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.69 4.53-4.69 1.31 0 2.68.24 2.68.24v2.97h-1.51c-1.49 0-1.96.93-1.96 1.89v2.25h3.33l-.53 3.49h-2.8V24C19.61 23.1 24 18.1 24 12.07z"/></svg></span>
          <h3>Agencia de Facebook Ads</h3>
        </div>
        <p>Es donde Meta tiene más datos de segmentación, y donde mejor rinden los públicos de más de 35 años, los formularios de leads y las campañas de catálogo. Suele dar el mejor costo por resultado en salud, construcción, servicios profesionales y B2B.</p>
        <ul class="plat-l">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span><b>Formularios nativos</b> con calificación previa para que no entre cualquiera.</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span><b>Campañas de catálogo</b> con el feed sincronizado y sin productos sin stock.</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span><b>Marketplace y grupos</b> para negocios con venta local.</span></li>
        </ul>
      </article>
      <article class="plat-c reveal">
        <div class="plat-h">
          <span class="plat-ic ig"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.43.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.43.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.72 3.72 0 01-1.38-.9 3.72 3.72 0 01-.9-1.38c-.16-.43-.36-1.06-.41-2.23C2.17 15.58 2.16 15.2 2.16 12s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.43-.16 1.06-.36 2.23-.41C8.42 2.17 8.8 2.16 12 2.16M12 0C8.74 0 8.33.01 7.05.07 5.78.13 4.9.33 4.14.63c-.79.31-1.46.72-2.13 1.38C1.35 2.68.94 3.35.63 4.14.33 4.9.13 5.78.07 7.05.01 8.33 0 8.74 0 12s.01 3.67.07 4.95c.06 1.27.26 2.15.56 2.91.31.79.72 1.46 1.38 2.13.67.66 1.34 1.07 2.13 1.38.76.3 1.64.5 2.91.56C8.33 23.99 8.74 24 12 24s3.67-.01 4.95-.07c1.27-.06 2.15-.26 2.91-.56.79-.31 1.46-.72 2.13-1.38.66-.67 1.07-1.34 1.38-2.13.3-.76.5-1.64.56-2.91.06-1.28.07-1.69.07-4.95s-.01-3.67-.07-4.95c-.06-1.27-.26-2.15-.56-2.91-.31-.79-.72-1.46-1.38-2.13-.67-.66-1.34-1.07-2.13-1.38-.76-.3-1.64-.5-2.91-.56C15.67.01 15.26 0 12 0z"/><path d="M12 5.84A6.16 6.16 0 1018.16 12 6.16 6.16 0 0012 5.84M12 16a4 4 0 114-4 4 4 0 01-4 4z"/><circle cx="18.41" cy="5.59" r="1.44"/></svg></span>
          <h3>Agencia de Instagram Ads</h3>
        </div>
        <p>Concentra el consumo de formatos verticales y video corto, y es donde se da la mayor interacción por impresión. Rinde mejor en e-commerce, moda, gastronomía y turismo. Reels y Stories son hoy las ubicaciones con más volumen de entrega.</p>
        <ul class="plat-l">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span><b>Reels y Stories</b> con creatividad pensada para vertical, no recortada.</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span><b>Instagram Shopping</b> y anuncios de catálogo con el feed sincronizado.</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span><b>Colaboraciones y contenido de creadores</b> puesto a pauta.</span></li>
        </ul>
      </article>
      <article class="plat-c reveal">
        <div class="plat-h">
          <span class="plat-ic wa"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.47 14.38c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.25-.46-2.38-1.47-.88-.78-1.48-1.75-1.65-2.05-.17-.3-.02-.46.13-.61.14-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.67-1.61-.92-2.21-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.48s1.06 2.88 1.21 3.08c.15.2 2.09 3.2 5.07 4.49.71.3 1.26.49 1.69.63.71.22 1.36.19 1.87.12.57-.09 1.76-.72 2.01-1.41.25-.7.25-1.29.17-1.42-.07-.13-.27-.2-.57-.35z"/><path d="M12.04 2C6.6 2 2.17 6.43 2.17 11.87c0 1.74.46 3.44 1.32 4.94L2 22.5l5.83-1.53a9.83 9.83 0 0 0 4.2.95h.01c5.44 0 9.87-4.43 9.87-9.87 0-2.64-1.03-5.12-2.9-6.99A9.8 9.8 0 0 0 12.04 2zm0 1.83c2.15 0 4.17.84 5.69 2.36a8 8 0 0 1 2.36 5.69c0 4.44-3.61 8.05-8.05 8.05a8.2 8.2 0 0 1-4.17-1.14l-.3-.18-3.1.81.83-3.02-.2-.31a8.19 8.19 0 0 1-1.25-4.35c0-4.44 3.61-8.04 8.05-8.04z"/></svg></span>
          <h3>Campañas de WhatsApp Ads</h3>
        </div>
        <p>Las campañas de clic a WhatsApp abren una conversación directa desde el anuncio, sin formulario intermedio. En Latinoamérica suelen ser el canal de leads con mejor tasa de respuesta.</p>
        <ul class="plat-l">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span><b>Del anuncio al chat</b> en un toque, con el mensaje de apertura ya escrito.</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span><b>Medición hasta la venta</b>, no hasta el "hola". La conversación se atribuye a la campaña.</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span><b>Piden proceso comercial listo:</b> un lead que espera horas ya se enfrió.</span></li>
        </ul>
      </article>
    </div>
    <div class="fmt">
      <div class="fmt-c reveal"><h4>Anuncios de imagen</h4><p>Lo más directo. Sirve para probar mensajes rápido antes de invertir en producción.</p></div>
      <div class="fmt-c reveal"><h4>Anuncios de video, Reels y Stories</h4><p>El formato que más entrega hoy. Los primeros tres segundos deciden si alguien se queda.</p></div>
      <div class="fmt-c reveal"><h4>Anuncios de secuencia</h4><p>Varios productos o varios argumentos en una sola pieza, con la que el usuario interactúa.</p></div>
      <div class="fmt-c reveal"><h4>Anuncios de colección y catálogo</h4><p>Tu catálogo entero trabajando solo, con la pieza correcta para cada persona.</p></div>
      <div class="fmt-c reveal"><h4>Remarketing dinámico</h4><p>El producto que miró y no compró, de vuelta frente a esa persona. El más rentable de la cuenta.</p></div>
      <div class="fmt-c reveal"><h4>Públicos similares</h4><p>Gente parecida a tus mejores clientes, construida sobre datos de compra reales, no sobre intereses.</p></div>
    </div>
  </div>
</section>

<!-- ===================== ADVANTAGE+ Y MEDICIÓN AVANZADA =====================
     REEMPLAZA al viejo bloque "El embudo completo" (Reconocimiento / Consideración / Conversión).
     Motivo: esa era la taxonomía de objetivos ANTERIOR A 2022. Meta la reemplazó por seis
     objetivos (Reconocimiento, Tráfico, Interacción, Clientes potenciales, Promoción de la app
     y Ventas), así que el bloque nos hacía parecer desactualizados justo en la página donde
     tenemos que parecer lo contrario. Lo marcó la SEO en el Update 03 y es correcto.
     Lo que entra en su lugar es lo que hoy define si una cuenta rinde: automatización y medición. -->
<section class="bg-grad" id="advantage">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Advantage+ y medición avanzada</h2>
      <p>Las dos decisiones que hoy separan una cuenta que rinde de una que no: cuánto le delegás a la automatización de Meta y cuánta información le devolvés al algoritmo.</p>
    </div>
    <div class="adv">
      <article class="fun-s e2 reveal">
        <span class="fun-n">Automatización</span>
        <h3>Campañas Advantage+</h3>
        <p>Advantage+ es el conjunto de herramientas de automatización con IA de Meta y, <b>desde febrero de 2026, su componente creativo viene activado por defecto</b> en las campañas nuevas. Hay miles de anunciantes corriendo automatizaciones que nunca eligieron: música sobre el Reel, recortes, variantes de texto, cambios de tono.</p>
        <p>Nuestro trabajo no es prender todo ni desconfiar de todo. Es decidir qué automatizar en cada cuenta y medir, mejora por mejora, si aporta valor real.</p>
        <div class="fun-tags"><span>Advantage+ Shopping</span><span>Público Advantage+</span><span>Catálogo dinámico</span><span>Mejoras creativas</span></div>
      </article>
      <article class="fun-s e3 reveal">
        <span class="fun-n">Medición</span>
        <h3>Meta Pixel y API de Conversiones</h3>
        <p>El píxel mide desde el navegador y pierde una parte creciente de los eventos por bloqueadores y restricciones de seguimiento. La API de Conversiones los manda desde tu servidor.</p>
        <p>Una cuenta que mide solo con píxel le entrega a Meta una fracción de sus conversiones reales. Y como el algoritmo optimiza según lo que ve, eso no solo ensucia los reportes: <b>empeora el rendimiento</b>.</p>
        <div class="fun-tags"><span>API de Conversiones</span><span>Eventos del servidor</span><span>Deduplicación</span><span>Calidad de coincidencia</span></div>
      </article>
    </div>
  </div>
</section>

<!-- ===================== INDUSTRIAS ===================== -->
<section class="sec-white" id="industrias">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Especialistas en Meta Ads por industria</h2>
      <p>En Meta lo que cambia entre rubros no es solo el público: es el formato que entrega y el argumento que convence. Un rubro vive de Reels y otro no despega sin catálogo.</p>
    </div>
    <div class="ind-grid">
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6h15l-1.5 9h-12z" stroke-linejoin="round"/><path d="M6 6L5 3H2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="20" r="1.3"/><circle cx="18" cy="20" r="1.3"/></svg></span>
        <div>
          <h3>Ecommerce</h3>
          <p>Catálogo, Advantage+ y remarketing dinámico. Acá Meta rinde más que en ningún otro rubro si el feed está sano.</p>
          <a href="/industrias/ecommerce/">Ver casos de e-commerce</a>
          <div class="ind-logos">
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/colchoneria_blanco.png" alt="Colchonería Ideal" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/espacioCasa_blanco.png" alt="Espacio Casa" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/padel-store.png" alt="Padel Store" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/multitelas_blanco.png" alt="Multitelas" loading="lazy" decoding="async" />
          </div>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V8l7-5 7 5v13" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 21v-6h4v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Construcción e inmobiliario</h3>
          <p>Formularios con calificación previa para que no entre cualquiera. El volumen es fácil en Meta; la calidad del lead es el trabajo.</p>
          <a href="/industrias/constructoras/">Ver casos de construcción</a>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14" stroke-linecap="round"/><rect x="3" y="3" width="18" height="18" rx="4.5"/></svg></span>
        <div>
          <h3>Salud</h3>
          <p>Meta es estricto con el rubro: hay palabras y promesas que directamente no pasan revisión. Lo que cuenta al final es el paciente que llega, no el clic.</p>
          <a href="/industrias/salud/">Ver casos de salud</a>
          <div class="ind-logos">
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/neuroscenter_blanco.png" alt="Neuros Center" loading="lazy" decoding="async" />
          </div>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.7 3.8 5.7 3.8 9S14.5 18.3 12 21c-2.5-2.7-3.8-5.7-3.8-9S9.5 5.7 12 3z"/></svg></span>
        <div>
          <h3>Turismo</h3>
          <p>Acá el video vende solo: la gente compra el lugar antes que el precio. La pauta arranca meses antes de la temporada.</p>
          <a href="/industrias/turismo/">Ver casos de turismo</a>
          <div class="ind-logos">
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/atrapalo-blanco.png" alt="Atrápalo" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/ushuaia-travel.png" alt="Latitud Ushuaia Travel" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/cruzando-mares.png" alt="Cruzando Mares" loading="lazy" decoding="async" />
          </div>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9.5 12 4l9 5.5V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1z" stroke-linejoin="round"/><path d="M8 21v-6h8v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Retail y gastronomía</h3>
          <p>Campañas por radio de cobertura para llenar el local, con la creatividad hablándole a cada sucursal.</p>
          <!-- Rubro de estos dos INFERIDO del nombre de la marca. Confirmar con Manu. -->
          <div class="ind-logos">
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/club-de-la-milanesa.png" alt="El Club de la Milanesa" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/top-iluminaciones.png" alt="Top Iluminaciones" loading="lazy" decoding="async" />
          </div>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21V8l6-4v17M9 21V11l6-3v13M15 21V12l6-2.5V21" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>B2B e industria</h3>
          <p>Meta funciona en B2B cuando se lo usa para generar demanda, no para cerrar. Contenido que educa y remarketing largo.</p>
          <a href="https://caissa.digital/caso/axionlift/">Ver el caso Axion Lift</a>
          <div class="ind-logos">
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/axion-lift-blanco.png" alt="Axion Lift" loading="lazy" decoding="async" />
            <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/dynamic-logistics.png" alt="Dynamic Logistics" loading="lazy" decoding="async" />
          </div>
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
     Son DOS y a propósito: los otros testimonios reales ya están usados en la home
     (Paula Luzzi, Colchonería/Juan París, Espacio Casa, Clean It, Neuros, Cefil, GOIAR,
     Ushuaia, Milanesa, SAMBA, Youtooproject) y en la landing de Google Ads (Constructora
     Cipolletti, Axion Lift/Ignacio, Cruzando Mares, Over Option). Estos dos no se repiten
     en ningún otro lado. PENDIENTE: si Manu consigue testimonios de campañas específicamente
     de Meta, reemplazar estos por esos y sumar un tercero. -->
<section class="sec-soft" id="testimonios">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Resultados de nuestros clientes en Meta Ads</h2>
    </div>
    <div class="tst2">
      <article class="tst2-c reveal">
        <div class="tst2-m">+400%</div>
        <div class="tst2-ml">Leads calificados con el mismo presupuesto</div>
        <p class="tst2-q">“Con Caissa, bajamos costos y tomamos mejores decisiones de marketing.”</p>
        <div class="tst2-w">
          <span><b>Celeste</b><span>Axion Lift</span></span>
          <span class="tst2-logo"><img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/axion-lift-blanco.png" alt="Axion Lift" loading="lazy" decoding="async" /></span>
        </div>
      </article>
      <article class="tst2-c reveal">
        <div class="tst2-m">+249%</div>
        <div class="tst2-ml">Aumento en ventas interanual</div>
        <p class="tst2-q">“Junto a Caissa, crecimos desde cero y superamos todas las expectativas.”</p>
        <div class="tst2-w">
          <span><b>Néstor</b><span>CEO · Colchonería Ideal</span></span>
          <span class="tst2-logo"><img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/colchoneria_blanco.png" alt="Colchonería Ideal" loading="lazy" decoding="async" /></span>
        </div>
      </article>
    </div>
    <div class="sec-cta reveal">
      <a href="https://caissa.digital/caso/" class="btn btn-ghost-d">Ver casos de éxito
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="/reviews/" class="btn btn-ghost-d">Ver todos los testimonios
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<!-- ===================== CÓMO ELEGIR ===================== -->
<section class="sec-white" id="elegir">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Cómo elegir una agencia de Meta Ads</h2>
      <p>Seis preguntas que separan a una agencia que gestiona Meta de una que solo publica anuncios. Hacelas en la primera reunión, con nosotros o con quien sea.</p>
    </div>
    <div class="crit-grid">
      <div class="crit reveal">
        <span class="crit-n">1</span>
        <div>
          <h3>¿La cuenta publicitaria va a ser mía?</h3>
          <p>Tiene que vivir en tu Business Manager, con el píxel y los públicos a tu nombre. Si la agencia usa su cuenta, el día que te vas perdés todo el historial.</p>
        </div>
      </div>
      <div class="crit reveal">
        <span class="crit-n">2</span>
        <div>
          <h3>¿Quién produce las creatividades?</h3>
          <p>En Meta la creatividad es la mitad del resultado. Preguntá si la agencia solo pauta lo que vos le mandás o si trabaja el briefing y el testeo.</p>
        </div>
      </div>
      <div class="crit reveal">
        <span class="crit-n">3</span>
        <div>
          <h3>¿Qué me van a reportar cada mes?</h3>
          <p>Alcance, impresiones y "me gusta" no pagan sueldos. Que te hablen de compras, leads calificados y costo por adquisición, o seguí buscando.</p>
        </div>
      </div>
      <div class="crit reveal">
        <span class="crit-n">4</span>
        <div>
          <h3>¿Cómo miden fuera de la plataforma?</h3>
          <p>Meta se atribuye ventas que a veces no son suyas. Preguntá si cruzan los datos con tu tienda o tu CRM, o si solo miran el administrador de anuncios.</p>
        </div>
      </div>
      <div class="crit reveal">
        <span class="crit-n">5</span>
        <div>
          <h3>¿Me atan con un contrato?</h3>
          <p>Atarte seis meses es la forma más común de comprar tiempo cuando los números no acompañan. Nosotros trabajamos mes a mes.</p>
        </div>
      </div>
      <div class="crit reveal">
        <span class="crit-n">6</span>
        <div>
          <h3>¿Me muestran capturas o resultados?</h3>
          <p>Una captura del administrador de anuncios se arma en dos minutos y no dice nada. Pedí el nombre de la empresa y de quien firma el resultado.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CUÁNTO CUESTA ===================== -->
<!-- Sin cifras propias de Caissa. Los rangos citados son del mercado. -->
<section class="bg-grad" id="precios">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Cuánto cobra una agencia de Meta Ads</h2>
      <p>Hay dos números y conviene no mezclarlos: lo que le pagás a Meta en pauta, y lo que le pagás a la agencia por gestionarla.</p>
    </div>
    <div class="price-grid">
      <article class="pcard reveal">
        <span class="pc-how">Nuestro modelo</span>
        <h3>Honorario mensual fijo</h3>
        <p>Un monto cerrado según el alcance, que no se mueve cuando escalás la pauta. Sabés lo que pagás desde el día uno.</p>
        <p class="pc-warn"><b>Preguntá siempre:</b> si la producción de creatividades está incluida. En Meta ese es el rubro que más presupuesto se lleva por afuera.</p>
      </article>
      <article class="pcard reveal">
        <span class="pc-how">Alternativa</span>
        <h3>Porcentaje sobre la pauta</h3>
        <p>Un 10% a 20% de lo invertido, según el mercado. Sube y baja con la cuenta.</p>
        <p class="pc-warn"><b>Preguntá siempre:</b> qué pasa si lo mejor para el negocio es pausar campañas. Con este modelo, apagar significa cobrar menos.</p>
      </article>
      <article class="pcard reveal">
        <span class="pc-how">Alternativa</span>
        <h3>Mixto o por resultados</h3>
        <p>Una base fija más un variable atado a lo que se factura o a los resultados conseguidos.</p>
        <p class="pc-warn"><b>Preguntá siempre:</b> con qué fuente se mide el variable. Meta se atribuye ventas que a veces no le corresponden.</p>
      </article>
    </div>
    <div class="price-note reveal">
      <p><b>Lo que nunca puede estar mezclado:</b> lo que cobra la agencia y lo que se lleva Meta. Son dos facturas y dos conversaciones distintas. Si te dan un número solo, pedí que lo abran antes de firmar.</p>
      <!-- MÍNIMO DE TRABAJO (confirmado por Manuel el 12/08/2026): empresas que invierten más
           de USD 3.000 por mes en marketing digital. Reemplaza al viejo "USD 2.000 de pauta".
           Mismo número y misma redacción en las tres landings, en la home y en el FAQPage.
           NO enlazar a /precios/ ni a /planes/: esas páginas no van a existir. -->
      <p>Trabajamos con <b>empresas que invierten más de USD 3.000 por mes en marketing digital</b>. Es el mínimo, y no es un número comercial: por debajo de eso los conjuntos de anuncios no juntan las conversiones necesarias para salir de la fase de aprendizaje y la cuenta vive reiniciándose. Traenos tu caso en la consultoría y lo miramos con tus números.</p>
    </div>
  </div>
</section>

<!-- ===================== ARGENTINA Y LATAM ===================== -->
<section class="sec-soft" id="alcance">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Agencia de Meta Ads para Argentina y LATAM</h2>
      <p>Trabajamos con empresas de Argentina, España y el resto de Latinoamérica, gestionando campañas en múltiples mercados y monedas.</p>
    </div>
    <div class="prose reveal" style="max-width:860px;margin-bottom:34px">
      <p>Un anuncio que arrasa en Buenos Aires puede no mover la aguja en Madrid: cambia el humor del feed, el referente cultural y lo que la gente espera ver. <b>La creatividad se adapta por mercado, no se traduce.</b> Todo el equipo habla tu idioma y coordina en tu horario.</p>
    </div>
    <div class="geo-grid">
      <div class="geo-item reveal"><b>Argentina</b><span>Nuestra base, con equipo propio y cobertura nacional.</span></div>
      <div class="geo-item reveal"><b>España</b><span>Costos por resultado del mercado europeo y su calendario comercial propio.</span></div>
      <div class="geo-item reveal"><b>México y Colombia</b><span>Los dos feeds más competitivos de la región y donde el video manda.</span></div>
      <div class="geo-item reveal"><b>Chile y Perú</b><span>Servicios y retail, con vigilancia de lo que hace la competencia local.</span></div>
      <div class="geo-item reveal"><b>Estados Unidos, mercado hispano</b><span>Marcas que le hablan en español a la comunidad hispana.</span></div>
      <div class="geo-item reveal"><b>Cuentas multipaís</b><span>Varios mercados y monedas conviviendo, comparables entre sí.</span></div>
    </div>
    <div class="prose reveal" style="margin:30px auto 0;text-align:center;max-width:820px">
      <p style="font-size:.98rem">¿Buscás también búsqueda pagada? Mirá <a href="/agencia-google-ads/">nuestra agencia de Google Ads</a>.</p>
    </div>
  </div>
</section>

<!-- ===================== CONSULTORÍA GRATUITA ===================== -->
<section class="bg-grad" id="consultoria">
  <div class="wrap">
    <div class="cons reveal">
      <div class="cons-copy">
        <h2>Revisamos tu cuenta publicitaria, gratis</h2>
        <p class="intro">Compartimos pantalla y recorremos tu cuenta publicitaria juntos, en vivo. No hay presentación ni propuesta comercial: se abre el administrador de anuncios y se mira lo que hay adentro.</p>
        <ol>
          <li><span>Revisamos <b>qué campañas y creatividades están drenando presupuesto</b>.</span></li>
          <li><span>Chequeamos si el <b>píxel y las conversiones están midiendo bien</b>. Es el error más común y el más caro.</span></li>
          <li><span>Salís con una <b>lista de arreglos concretos</b>, la apliques con nosotros o con tu equipo.</span></li>
        </ol>
        <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        <p class="cons-note">Trabajamos con empresas que invierten más de <b>USD 3.000 por mes</b> en marketing digital. Si tu cuenta está bien y no tenemos nada para aportar, te lo decimos en la misma llamada.</p>
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
     ABIERTA a propósito: sin acordeón (§4 de CLAUDE.md) y con el texto visible, que es lo que
     Google recomienda para que el FAQPage cuente. Las 8 preguntas son EXACTAMENTE las del
     JSON-LD del <head>. Si editás una, editá la otra.
     Las dos últimas existen para capturar las búsquedas de las dos URLs que se fusionan
     (Facebook e Instagram). La de Meta Business Partner refuerza la consulta donde la página
     ya rankea en posición 3,2. -->
<section class="sec-soft" id="faq">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Preguntas frecuentes sobre agencias de Meta Ads</h2>
    </div>
    <div class="faqo-grid">
      <details class="faqo reveal">
        <summary><h3>¿Qué es una agencia de Meta Ads?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Es una empresa especializada en planificar, implementar y optimizar campañas de publicidad dentro del ecosistema de Meta: Facebook, Instagram, WhatsApp, Messenger y Audience Network.</p>
          <p>Su rol va más allá de publicar anuncios: define la estrategia de públicos, la estructura de la cuenta, las creatividades, la medición de conversiones y la optimización continua para que cada peso invertido vuelva.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cuál es la inversión mínima recomendada en Meta Ads?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Meta no exige un presupuesto mínimo, pero existe un piso práctico por debajo del cual el algoritmo no reúne datos suficientes para optimizar. Ese piso depende del objetivo, del costo por resultado de tu industria y de cuánto dure la campaña.</p>
          <p>Una inversión demasiado baja no produce resultados malos: produce resultados sin significado estadístico, que no permiten decidir nada. Nosotros trabajamos con <b>empresas que invierten más de USD 3.000 por mes en marketing digital</b>.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cuánto cobra una agencia de Meta Ads?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>El honorario de la agencia es independiente de la inversión publicitaria, que va directo a Meta. Los modelos más comunes son un honorario mensual fijo, un porcentaje sobre la inversión gestionada o un esquema mixto con un componente variable por resultados.</p>
          <p>En Caissa trabajamos con un honorario mensual definido según el alcance del proyecto, <b>sin contratos de permanencia</b>. El número exacto sale de mirar tu cuenta en la consultoría.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cuánto tiempo tarda en verse resultados con Meta Ads?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Los anuncios pueden empezar a mostrarse apenas se aprueban, pero los datos accionables llegan después. Cada campaña atraviesa un período de aprendizaje en el que el algoritmo necesita acumular conversiones antes de estabilizar la entrega, y durante esa etapa los resultados son más variables.</p>
          <p>La lectura confiable suele llegar <b>entre la tercera y la sexta semana</b>, según el volumen de conversiones.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿La cuenta publicitaria queda a mi nombre?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Sí. La cuenta publicitaria y el administrador comercial son tuyos y siempre deben serlo. Nosotros los administramos con los permisos que corresponden, pero la propiedad, el historial de datos, el píxel y los públicos quedan bajo tu control.</p>
          <p>Si algún día decidís terminar la relación, te llevás todo con su aprendizaje acumulado. Es la diferencia entre cambiar de agencia un lunes y empezar de cero.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Qué significa que una agencia sea Meta Business Partner?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Meta Business Partner es el programa oficial de certificación de agencias de Meta. El nivel con insignia se otorga a las agencias que demuestran resultados gestionando inversión publicitaria real y que mantienen a su equipo con las certificaciones vigentes, e incluye su presencia en el directorio oficial de partners.</p>
          <p>No es un sello que se compre. <b>Caissa cuenta con esta distinción.</b></p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Conviene anunciar en Facebook o en Instagram?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Las dos se gestionan desde la misma cuenta publicitaria, así que no es una decisión excluyente. Facebook suele rendir mejor en públicos de más de 35 años, formularios de generación de leads y campañas de catálogo. Instagram concentra el consumo de formatos verticales y funciona mejor en rubros con componente visual fuerte.</p>
          <p>Lo habitual es distribuir en las dos y dejar que <a href="#plataformas">los datos definan el reparto</a>.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cuál es la diferencia entre Facebook Ads, Instagram Ads y Meta Ads?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Son la misma plataforma. Meta Ads es el nombre actual del sistema publicitario que antes se conocía como Facebook Ads, y desde un mismo administrador se compran ubicaciones en Facebook, Instagram, WhatsApp, Messenger y Audience Network.</p>
          <p>Hoy no se contrata Facebook Ads o Instagram Ads por separado: se define una estrategia en Meta y se eligen las ubicaciones que le sirven al negocio.</p>
        </div>
      </details>
    </div>
  </div>
</section>

<!-- ===================== CTA FINAL ===================== -->
<section class="final bg-grad" id="cta">
  <div class="wrap">
    <div class="cta-ga reveal">
      <h2>Abrí tu cuenta y miremos juntos</h2>
      <p>Quince minutos sobre tus campañas de Facebook e Instagram, con el administrador de anuncios en pantalla. Sin diagnóstico genérico ni propuesta armada de antemano.</p>
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