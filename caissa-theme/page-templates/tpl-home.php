<?php
/**
 * Template Name: Caissa — Home
 *
 * Migrada desde index.html del repo Caissa-Nueva-Web-2026.
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
      "slogan": "Hacemos crecer tu negocio con Google Ads",
      "description": "Agencia de performance marketing especializada en Google Ads y Meta Ads. Gestión diaria de la inversión, sin contratos de permanencia.",
      "foundingDate": "2021",
      "areaServed": "AR",
      "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.9", "reviewCount": "65", "bestRating": "5" },
      "knowsAbout": ["Google Ads", "Meta Ads", "Performance Marketing", "Optimización de conversión"],
      "founder": [
        { "@type": "Person", "name": "Manuel Ferrini", "jobTitle": "CEO y cofundador", "sameAs": "https://ar.linkedin.com/in/manuelferrini" },
        { "@type": "Person", "name": "Martín Pera", "jobTitle": "COO y cofundador" }
      ]
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "@id": "https://caissa.digital/#faq",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Por qué brindamos un servicio boutique?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nuestro servicio exclusivo se distingue por nuestro equipo de expertos senior dedicados a cada fase del proceso. Además de crear estrategias de primer nivel con Google Ads y Meta Ads, nos involucramos en la conversión del tráfico, en procesos, métodos de venta, y te aconsejamos como consultores para lograr que tu empresa tenga un crecimiento continuo, lo cual nos convierte en verdaderos partners de tu empresa."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué es performance marketing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Hay miles de agencias de marketing digital, en Caissa somos una agencia de marketing digital enfocada en performance marketing. Mientras que el marketing digital tiene múltiples aplicaciones, el performance marketing se enfoca al 100% en ejecutar acciones para lograr resultados concretos, cada acción que nuestro equipo realiza va en línea con lograr resultados de negocio."
      }
    },
    {
      "@type": "Question",
      "name": "¿El servicio tiene contrato de permanencia?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, nuestro servicio es mes a mes sin contratos de permanencia, por lo que para nosotros es primordial lograr resultados. Trabajaremos con dedicación, compromiso y disciplina para lograrlos. En nuestra web encontrarás referencias de empresas que confían en nosotros, respaldando nuestro trabajo."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cómo gestionan la comunicación con sus clientes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Mantenemos una comunicación diaria a través de Slack, Workspace, mail y videollamadas para brindarte un seguimiento detallado de la evolución de tu estrategia. Los reportes son en tiempo real: ves las acciones y los resultados conseguidos a medida que pasan. Además, realizaremos informes que aportarán mucha visibilidad y valor a tu empresa."
      }
    },
    {
      "@type": "Question",
      "name": "¿Por qué la primera consultoría es gratuita?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Una primera videollamada es fundamental para conocer tu negocio, lo cual nos permite ver si podemos ayudarte. No brindamos servicios a empresas que no podemos ayudar. Nos aseguramos de trabajar junto a empresas que tienen potencial de crecimiento y tenemos certeza de que realmente podemos ayudarlas. Si invertís actualmente en Google Ads, podrás compartirnos pantalla para que te mostremos dónde estás perdiendo dinero y cómo mejorarlo. Luego, si podemos ayudarte, te haremos una propuesta sin compromiso. Finalmente, te ayudaremos a tomar la mejor decisión para tu negocio."
      }
    }
  ]
}
</script>
<?php endif; ?>
<main>

<!-- ===================== HERO ===================== -->
<section class="hero">
  <div class="wrap hero-grid">
    <div class="hero-left">
      <h1 class="eyebrow">Agencia de Marketing Digital</h1>
      <h2>Hacemos <span class="hl">crecer<svg class="grow" viewBox="0 0 220 70" preserveAspectRatio="none" aria-hidden="true">
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
      </svg></span><br> tu negocio con<br> Google Ads</h2>
      <p class="sub">Maximizamos el ROI de tu negocio: optimizamos tu marketing digital a diario, con equipo senior e IA.</p>
      <p class="sub-note">Sin contratos. Veamos qué es posible en 15 minutos.</p>
      <div class="hero-cta">
        <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
    </div>
    <div class="hero-right">
      <div class="hero-stage">
        <span class="dots"></span>
        <div class="hero-card"></div>
        <img class="hero-photo" src="<?php echo CAISSA_IMG; ?>/Manu-CEO-home.webp" alt="Manuel Ferrini, CEO y cofundador de Caissa" width="450" height="568" fetchpriority="high" />
      </div>
      <!-- PRENSA: cuando estén los links de las notas, envolver cada logo en un enlace (a con target _blank y rel noopener nofollow). -->
      <div class="hero-press reveal">
        <span class="hp-label">Visto en</span>
        <img class="hp-img-infobae" src="<?php echo CAISSA_IMG; ?>/press-infobae.svg" alt="Infobae" width="249" height="59" decoding="async" />
        <img class="hp-img-rionegro" src="<?php echo CAISSA_IMG; ?>/press-rionegro.svg" alt="Diario Río Negro" width="270" height="59" decoding="async" />
      </div>
    </div>
  </div>
  <div class="hero-brands" aria-label="Marcas que eligieron Caissa">
    <div class="marquee">
      <div class="mtrack">
        <div class="mgroup">
          <img src="<?php echo CAISSA_IMG; ?>/logos/jeep-blanco.webp" alt="Jeep" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/atrapalo-blanco.webp" alt="Atrápalo" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/espacioCasa_blanco.webp" alt="Espacio Casa" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/peugeot-blanco.webp" alt="Peugeot" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/casino-del-rio-blanco.webp" alt="Casino del Río" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/cleanit.webp" alt="Clean It" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/ram.webp" alt="RAM" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/club-de-la-milanesa.webp" alt="El Club de la Milanesa" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/colchoneria_blanco.webp" alt="Colchonería Ideal" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/fiat.webp" alt="Fiat" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/ushuaia-travel.webp" alt="Ushuaia Travel" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/axion-lift-blanco.webp" alt="Axion Lift" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/citroen.webp" alt="Citroën" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/neuroscenter_blanco.webp" alt="Neuros Center" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/cruzando-mares.webp" alt="Cruzando Mares" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/luzzi-blanco.webp" alt="Luzzi Digital" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/betsur_blanco.webp" alt="Betsur" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/galileo_blanco.webp" alt="Galileo" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/dynamic-logistics.webp" alt="Dynamic Logistics" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/fortehouse.webp" alt="Forte House" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/wecar-blanco.webp" alt="WeCar" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/calafate-tour.webp" alt="Calafate Tour" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/aislatek.webp" alt="Aislatek" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/multitelas_blanco.webp" alt="Multitelas" width="220" height="108" decoding="async" />
        </div>
        <div class="mgroup" aria-hidden="true">
          <img src="<?php echo CAISSA_IMG; ?>/logos/jeep-blanco.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/atrapalo-blanco.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/espacioCasa_blanco.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/peugeot-blanco.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/casino-del-rio-blanco.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/cleanit.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/ram.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/club-de-la-milanesa.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/colchoneria_blanco.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/fiat.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/ushuaia-travel.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/axion-lift-blanco.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/citroen.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/neuroscenter_blanco.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/cruzando-mares.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/luzzi-blanco.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/betsur_blanco.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/galileo_blanco.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/dynamic-logistics.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/fortehouse.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/wecar-blanco.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/calafate-tour.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/aislatek.webp" alt="" width="220" height="108" decoding="async" />
          <img src="<?php echo CAISSA_IMG; ?>/logos/multitelas_blanco.webp" alt="" width="220" height="108" decoding="async" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== PAIN ===================== -->
<section class="pain" id="dolor">
  <div class="wrap pain-wrap">
    <div class="pain-grid">
      <div class="pain-left">
        <div class="pain-head reveal">
          <h2>¿Tu agencia dejó de prestarte atención?</h2>
          <p>Muchas agencias prometen el mundo.</p>
        </div>
        <p class="pain-lead reveal">Lo que escuchamos cada semana:</p>
      </div>
      <div class="pain-right reveal">
        <div class="pf3-chat">
      <ul class="pf3-sr">
        <li><blockquote>“Mis campañas están en piloto automático. No hay mejora continua.”</blockquote></li>
        <li><blockquote>“Me llegan muchas consultas, pero pocas de calidad: pierdo el tiempo.”</blockquote></li>
        <li><blockquote>“Cada vez que aumento el presupuesto en anuncios, lo único que aumentan son mis gastos.”</blockquote></li>
        <li><blockquote>“Siento que apuestan mi presupuesto en vez de invertirlo.”</blockquote></li>
        <li><blockquote>“Un mes vendo bien, otro mal, y nadie me explica por qué.”</blockquote></li>
        <li><blockquote>“Firmé un contrato de varios meses y, aunque no me den resultados, no me puedo ir.”</blockquote></li>
      </ul>
      <div class="pf3-owner-side">
        <span class="pf3-tag">Dueño de negocio</span>
        <div class="pf3-owner" aria-hidden="true">
          <div class="pf3-stack">
            <span class="pf3-ghost">“Mis campañas están en piloto automático. No hay mejora continua.”</span>
            <span class="pf3-ghost">“Me llegan muchas consultas, pero pocas de calidad: pierdo el tiempo.”</span>
            <span class="pf3-ghost">“Cada vez que aumento el presupuesto en anuncios, lo único que aumentan son mis gastos.”</span>
            <span class="pf3-ghost">“Siento que apuestan mi presupuesto en vez de invertirlo.”</span>
            <span class="pf3-ghost">“Un mes vendo bien, otro mal, y nadie me explica por qué.”</span>
            <span class="pf3-ghost">“Firmé un contrato de varios meses y, aunque no me den resultados, no me puedo ir.”</span>
            <p class="pf3-live"><span class="pf3-type"></span><span class="pf3-caret pf3-off"></span><span class="pf3-dots" aria-hidden="true"><i></i><i></i><i></i></span></p>
          </div>
        </div>
      </div>
      <div class="pf3-caissa">
        <span class="pf3-tag">Caissa</span>
        <p class="pf3-bub">Si esto te suena, no sos el único.</p>
        <p class="pf3-bub">Y tampoco estás atrapado.</p>
      </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="method" id="metodo">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">Nuestro método PCO™</span>
      <h2>Una venta se construye en tres etapas: PPC, CRO y optimización de ventas</h2>
    </div>

    <div class="m4-flow reveal">
      <div class="m4-lane">
        <div class="m4-line" aria-hidden="true"><span class="m4-seg-solid"></span><span class="m4-seg-dash"></span></div>
        <ol class="m4-track">
          <li class="m4-stage m4-s1">
            <span class="m4-node" aria-hidden="true">1</span>
            <div class="m4-body">
              <h3 class="m4-verb">Atraer <span class="m4-svc">Paid Media (PPC)</span></h3>
              <span class="m4-chip">PPC · Pago por click</span>
              <p class="m4-desc">Anuncios en Google Ads y Meta Ads, frente a los que ya buscan lo que vendés.</p>
            </div>
            <div class="m4-cut">
              <svg class="m4-cut-arrow" viewBox="0 0 24 56" fill="none" aria-hidden="true"><path d="M20 4 C 9 11 5.5 22 7 46 M7 46 l-4.6-7.2 M7 46 l6.8-3.8" stroke="#E63E30" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              <div class="m4-cut-txt">
                <p class="m4-cut-main">Casi todas las agencias llegan hasta acá</p>
                <p class="m4-cut-sub">Si invertís y no ves ventas, el problema está de acá en adelante.</p>
              </div>
            </div>
          </li>
          <li class="m4-stage m4-s2">
            <span class="m4-node" aria-hidden="true">2</span>
            <div class="m4-body">
              <h3 class="m4-verb">Convertir <span class="m4-svc">Mejoras de conversión (CRO)</span></h3>
              <span class="m4-chip">CRO · Optimización de la conversión</span>
              <p class="m4-desc">Mejoramos o creamos la landing page donde cae cada clic, hasta que la visita compra o consulta.</p>
            </div>
          </li>
          <li class="m4-stage m4-s3">
            <span class="m4-node" aria-hidden="true">3</span>
            <div class="m4-body">
              <h3 class="m4-verb">Cerrar <span class="m4-svc">Optimización de ventas (OPV)</span></h3>
              <span class="m4-chip">OPV · Optimización de procesos de venta</span>
              <p class="m4-desc">Analizamos tu proceso comercial y volvemos a buscar con remarketing al que no cerró.</p>
            </div>
          </li>
        </ol>
        <!-- Cierre del recorrido. NO es un botón: es el cuarto hito de la línea, con el mismo
             disco que los nodos 1-2-3 pero en coral. Antes era una píldora coral con sombra y
             en mobile quedaba suelta a la izquierda, idéntica a un .btn-primary. -->
        <div class="m4-sale">
          <span class="m4-sale-node" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M4.6 12.5 9.5 17.6 19.4 6.9" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
          <span class="m4-sale-txt">Venta</span>
        </div>
      </div>

      <div class="m4-end">
        <div class="m4-facts">
          <p>Las tres etapas vienen incluidas en el mismo servicio. No solo el paid media.</p>
          <p><span class="m4-ai">AEGIS · IA</span>Nuestra IA supervisa las tres etapas todos los días.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== PROOF BAR — autoridad de terceros, cerrando el metodo PCO ===================== -->
<section class="creds" style="padding:0">
  <div class="wrap trust">
    <div class="titem"><img class="trust-badges" src="<?php echo CAISSA_IMG; ?>/google-partner-premier.webp" alt="Google Partner Premier 2025 · Meta Business Partner" width="238" height="75" loading="lazy" decoding="async" /></div>
    <div class="titem">
      <div class="trust-rate">
        <span class="rlogo" aria-hidden="true"><svg viewBox="0 0 48 48"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg></span>
        <div>
          <div class="rrow"><span class="rnum">4.9</span><span class="rstars" aria-hidden="true">★★★★★</span></div>
          <div class="rlbl">65 reseñas en Google</div>
        </div>
      </div>
    </div>
    <div class="titem">
      <div class="trust-rate clutch">
        <span class="rlogo rlogo-clutch"><img src="<?php echo CAISSA_IMG; ?>/logo-clutch.svg" alt="Clutch" width="406" height="115" loading="lazy" decoding="async" /></span>
        <div>
          <div class="rrow"><span class="rnum">5.0</span><span class="rstars" aria-hidden="true">★★★★★</span></div>
          <div class="rlbl">Reseñas verificadas en Clutch</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== COMPARISON ===================== -->
<section class="compare-sec on-dark" id="diferencia">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Qué nos hace diferentes</h2>
    </div>
  </div>
  <div class="compare-wrap">
    <div class="compare reveal">
      <div class="compare-headrow">
        <div class="ch-spacer"></div>
        <div class="ch-before">La mayoría de las agencias</div>
        <div class="ch-after">Caissa</div>
      </div>
      <div class="crow"><div class="c-label">Contratos</div><div class="c-before"><svg class="ci" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg>Te atan aunque no haya resultados.</div><div class="c-after"><svg class="ci" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>Mes a mes. Cancelás cuando quieras.</div></div>
      <div class="crow"><div class="c-label">Quién maneja tu cuenta</div><div class="c-before"><svg class="ci" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg>Un junior que aprende con tu plata.</div><div class="c-after"><svg class="ci" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>Especialistas senior en cada cuenta.</div></div>
      <div class="crow"><div class="c-label">Optimización</div><div class="c-before"><svg class="ci" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg>Mensual, si tenés suerte.</div><div class="c-after"><svg class="ci" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>Diaria, con monitoreo 24/7.</div></div>
      <div class="crow"><div class="c-label">Reportes</div><div class="c-before"><svg class="ci" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg>Clicks e impresiones, no ventas.</div><div class="c-after"><svg class="ci" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>Preguntamos: ¿ese lead cerró una venta?</div></div>
      <div class="crow"><div class="c-label">Comunicación</div><div class="c-before"><svg class="ci" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg>Los tenés que perseguir.</div><div class="c-after"><svg class="ci" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>Respuesta en el día.</div></div>
      <!-- La tabla de referencia (Yael) incluía "Exclusividad: un cliente por rubro". No la sumo porque no está confirmado que Caissa dé exclusividad por categoría; si la ofrece, se agrega acá. -->
      <div class="crow"><div class="c-label">Compromiso</div><div class="c-before"><svg class="ci" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg>Sos un número más.</div><div class="c-after"><svg class="ci" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>Nuestros clientes se quedan +4 años.</div></div>
    </div>
  </div>
</section>

<!-- ===================== PRUEBA SOCIAL (consolidada: casos + reseñas + video) ===================== -->
<!--
  Fotos de dueños = placeholder con iniciales (faltan las reales). Reemplazar cada .rc-av / .rav por <img>.
  VIDEOS: el carrusel se desliza solo (marquee, derecha -> izquierda), sin barra. Las tarjetas son posters
  placeholder que enlazan a /reviews/. Cuando estén los embeds/links reales (YouTube + poster), cablear el
  play a un lightbox o al link de cada video. Se duplican en 2 grupos para el loop continuo.
-->
<section class="proof" id="casos">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Casos por industria: <br>ecommerce, B2B, retail y servicios</h2>
    </div>

    <!-- Reseña destacada: Paula Luzzi (Luzzi Digital), clienta referente del sector -->
    <div class="feat-review reveal">
      <div class="fr-left">
        <div class="fr-av"><img src="<?php echo CAISSA_IMG; ?>/paula-luzzi.webp" alt="Paula Luzzi, CEO de Luzzi Digital" width="400" height="400" loading="lazy" decoding="async" /></div>
        <div class="fr-id">
          <b>Paula Luzzi</b>
          <span class="fr-ceo">CEO de Luzzi Digital</span>
          <span class="fr-role">Referente del marketing digital en español</span>
        </div>
      </div>
      <div class="fr-right">
        <blockquote class="fr-quote">No tengo palabras para describir lo que cambió mi empresa después de empezar a trabajar con Manu y su equipo. Obtuve mejores resultados, procesos más fluidos y un acompañamiento continuo de parte de profesionales que son expertos, con una experiencia increíble. <b>Mi vida cambió después de ellos.</b> Si están pensando en contratarlos, <b>no lo duden ni un segundo</b>.</blockquote>
      </div>
    </div>

    <!-- Casos destacados: los explicativos, con cita + persona + logo -->
    <div class="proof-block">
      <div class="rescards feature">
        <article class="rescard reveal">
          <div class="rc-head"><span class="rc-tag">E-commerce · Descanso</span><span class="rc-biz b2c">B2C</span></div>
          <h3>Récords de venta y un segundo e-commerce</h3>
          <p class="rc-body">Ordenamos la cuenta y pusimos toda la inversión donde de verdad convertía.</p>
          <div class="rc-metric">+249% en ventas online</div>
          <p class="rc-quote">“Superamos todas las expectativas y <b>logramos récords en ventas</b>. Gracias al caso de éxito lanzamos nuestro segundo e-commerce junto a ellos.”</p>
          <div class="rc-who">
            <span class="rc-av"><img src="<?php echo CAISSA_IMG; ?>/colchoneria-ideal.webp" alt="Juan París, E-commerce Manager de Colchonería Ideal" width="389" height="389" loading="lazy" decoding="async" /></span>
            <span class="rc-id"><b>Juan París</b><span>E-commerce Manager · Colchonería Ideal</span></span>
            <span class="rc-logo"><img src="<?php echo CAISSA_IMG; ?>/logos/colchoneria_blanco.webp" alt="Colchonería Ideal" width="220" height="108" loading="lazy" decoding="async" /></span>
          </div>
        </article>
        <article class="rescard reveal">
          <div class="rc-head"><span class="rc-tag">E-commerce · Hogar</span><span class="rc-biz b2c">B2C</span></div>
          <h3>Un ROAS récord, sostenido en el tiempo</h3>
          <p class="rc-body">Afinamos cada campaña mirando cuánta plata vuelve por cada peso de pauta.</p>
          <div class="rc-metric">+343% en ventas</div>
          <p class="rc-quote">“Ayudan a traducir todo el esfuerzo de la empresa en ventas. <b>Lograron un ROAS récord.</b> Son un gran aliado de nuestra empresa.”</p>
          <div class="rc-who">
            <span class="rc-av"><img class="av-espacio" src="<?php echo CAISSA_IMG; ?>/espacio-casa.webp" alt="Pamela Cochia, cofundadora de Espacio Casa" width="400" height="400" loading="lazy" decoding="async" /></span>
            <span class="rc-id"><b>Pamela Cochia</b><span>Cofundadora · Espacio Casa</span></span>
            <span class="rc-logo"><img src="<?php echo CAISSA_IMG; ?>/logos/espacioCasa_blanco.webp" alt="Espacio Casa" width="220" height="108" loading="lazy" decoding="async" /></span>
          </div>
        </article>
      </div>
    </div>

    <!-- Otros casos (mismo formato): tipo+B2B/B2C, resultado, qué se hizo, cita, persona+logo -->
    <div class="proof-block">
      <div class="rescards trio">
        <article class="rescard reveal">
          <div class="rc-head"><span class="rc-tag">Servicios · Limpieza</span><span class="rc-biz b2c">B2C</span><!-- B2C inferido, confirmar --></div>
          <h3>Del cuentagotas a un flujo parejo de consultas</h3>
          <div class="rc-metric">+155% en leads calificados</div>
          <p class="rc-quote">“Hemos trabajado juntos desde el día uno, <b>como si Caissa fuera parte de Clean It</b>.”</p>
          <div class="rc-who">
            <span class="rc-av"><img src="<?php echo CAISSA_IMG; ?>/juan-clean-it.webp" alt="Juan Gonzalez Trück, dueño de Clean It" width="800" height="800" loading="lazy" decoding="async" /></span>
            <span class="rc-id"><b>Juan Gonzalez Trück</b><span>Dueño · Clean It</span></span>
            <span class="rc-logo"><img src="<?php echo CAISSA_IMG; ?>/logos/cleanit.webp" alt="Clean It" width="220" height="108" loading="lazy" decoding="async" /></span>
          </div>
        </article>
        <article class="rescard reveal">
          <div class="rc-head"><span class="rc-tag">Salud · Consultorio</span><span class="rc-biz b2c">B2C</span></div>
          <h3>Un servicio difícil de explicar que hoy es rentable</h3>
          <p class="rc-body">Rearmamos las campañas para atraer pacientes.</p>
          <div class="rc-metric">+300% en leads</div>
          <p class="rc-quote">“Ordenaron muy bien nuestra estrategia y <b>aumentaron mucho nuestros clientes</b> y conversiones.”</p>
          <div class="rc-who">
            <span class="rc-av"><img src="<?php echo CAISSA_IMG; ?>/neuroscenter.webp" alt="Sydney Pinoy, CEO de Neuros Center" width="400" height="400" loading="lazy" decoding="async" /></span>
            <span class="rc-id"><b>Sydney Pinoy</b><span>CEO · Neuros Center</span></span>
            <span class="rc-logo"><img src="<?php echo CAISSA_IMG; ?>/logos/neuroscenter_blanco.webp" alt="Neuros Center" width="220" height="108" loading="lazy" decoding="async" /></span>
          </div>
        </article>
        <article class="rescard reveal">
          <div class="rc-head"><span class="rc-tag">Industria · Piletas</span><span class="rc-biz b2b">B2B</span><!-- B2B inferido, confirmar --></div>
          <h3>Más consultas de calidad, pagando menos por cada clic</h3>
          <div class="rc-metric">+210% en leads calificados</div>
          <p class="rc-quote">“Caissa nos consiguió unos costes por leads y por click <b>verdaderamente eficientes</b>.”</p>
          <div class="rc-who">
            <span class="rc-av"><img src="<?php echo CAISSA_IMG; ?>/cefilpool.webp" alt="Jon Uría, Cefil Pool" width="400" height="400" loading="lazy" decoding="async" /></span>
            <span class="rc-id"><b>Jon Uría</b><span>Dir. de ventas y marketing · Cefil Pool</span></span>
          </div>
        </article>
      </div>
    </div>

    <!-- Testimonios en video: carrusel que se desliza solo (marquee), sin barra horizontal -->
    <div class="vidwrap reveal">
      <div class="vidmarquee" aria-label="Testimonios en video de clientes">
        <div class="vidtrack">
          <div class="vidgroup">
          <a class="vidcard" href="https://youtu.be/Z5jpdRI63DY" data-yt="Z5jpdRI63DY" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Colchonería Ideal">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2022/12/review-colcho.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+249%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Colchonería Ideal<span>Ventas online</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/colchoneria_blanco.webp" alt="Colchonería Ideal" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" href="https://youtu.be/-lwp7bWlWsU" data-yt="-lwp7bWlWsU" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Espacio Casa">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2022/12/review-espacio-casa.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+343%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Espacio Casa<span>Ventas</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/espacioCasa_blanco.webp" alt="Espacio Casa" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" href="https://youtu.be/JmsoXM6RJ1Q" data-yt="JmsoXM6RJ1Q" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Axion Lift">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2023/09/review-axion-lift-01.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+400%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Axion Lift<span>Leads calificados</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/axion-lift-blanco.webp" alt="Axion Lift" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" href="https://youtu.be/RqmeH2SVeNo" data-yt="RqmeH2SVeNo" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Clean It">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2025/04/cleanit.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+155%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Clean It<span>Leads calificados</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/cleanit.webp" alt="Clean It" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" href="https://youtu.be/jx52kfHID5w" data-yt="jx52kfHID5w" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Neuros Center">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2022/12/review-neuro.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+300%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Neuros Center<span>Leads</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/neuroscenter_blanco.webp" alt="Neuros Center" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" href="https://youtu.be/9c2Mfic5VJA" data-yt="9c2Mfic5VJA" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Cefil Pool">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2025/04/cefil-pool-placeholder.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+210%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Cefil Pool<span>Leads calificados</span></span></span>
                    </span>
                  </a>
          <a class="vidcard" href="https://youtu.be/ZuG7lcUqWBc" data-yt="ZuG7lcUqWBc" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Constructora Cipolletti">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2022/12/review-constructora.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+407%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Constructora Cipolletti<span>Leads</span></span></span>
                    </span>
                  </a>
          <a class="vidcard" href="https://youtu.be/sWErwVrvTP8" data-yt="sWErwVrvTP8" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Cruzando Mares">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2025/02/caso-de-exito-cruzando-mares.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+85%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Cruzando Mares<span>Ventas</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/cruzando-mares.webp" alt="Cruzando Mares" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          </div>
          <div class="vidgroup" aria-hidden="true">
          <a class="vidcard" tabindex="-1" href="https://youtu.be/Z5jpdRI63DY" data-yt="Z5jpdRI63DY" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Colchonería Ideal">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2022/12/review-colcho.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+249%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Colchonería Ideal<span>Ventas online</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/colchoneria_blanco.webp" alt="Colchonería Ideal" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" tabindex="-1" href="https://youtu.be/-lwp7bWlWsU" data-yt="-lwp7bWlWsU" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Espacio Casa">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2022/12/review-espacio-casa.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+343%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Espacio Casa<span>Ventas</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/espacioCasa_blanco.webp" alt="Espacio Casa" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" tabindex="-1" href="https://youtu.be/JmsoXM6RJ1Q" data-yt="JmsoXM6RJ1Q" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Axion Lift">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2023/09/review-axion-lift-01.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+400%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Axion Lift<span>Leads calificados</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/axion-lift-blanco.webp" alt="Axion Lift" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" tabindex="-1" href="https://youtu.be/RqmeH2SVeNo" data-yt="RqmeH2SVeNo" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Clean It">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2025/04/cleanit.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+155%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Clean It<span>Leads calificados</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/cleanit.webp" alt="Clean It" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" tabindex="-1" href="https://youtu.be/jx52kfHID5w" data-yt="jx52kfHID5w" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Neuros Center">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2022/12/review-neuro.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+300%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Neuros Center<span>Leads</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/neuroscenter_blanco.webp" alt="Neuros Center" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          <a class="vidcard" tabindex="-1" href="https://youtu.be/9c2Mfic5VJA" data-yt="9c2Mfic5VJA" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Cefil Pool">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2025/04/cefil-pool-placeholder.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+210%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Cefil Pool<span>Leads calificados</span></span></span>
                    </span>
                  </a>
          <a class="vidcard" tabindex="-1" href="https://youtu.be/ZuG7lcUqWBc" data-yt="ZuG7lcUqWBc" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Constructora Cipolletti">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2022/12/review-constructora.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+407%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Constructora Cipolletti<span>Leads</span></span></span>
                    </span>
                  </a>
          <a class="vidcard" tabindex="-1" href="https://youtu.be/sWErwVrvTP8" data-yt="sWErwVrvTP8" target="_blank" rel="noopener" aria-label="Ver el testimonio en video de Cruzando Mares">
                    <span class="vc-poster"><img class="vc-thumb" src="https://caissa.digital/wp-content/uploads/2025/02/caso-de-exito-cruzando-mares.jpg" alt="" loading="lazy" decoding="async" width="600" height="337" />
                      <span class="vc-metric">+85%</span>
                      
                      <span class="vc-play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span>
                      <span class="vc-foot"><span class="vc-name">Cruzando Mares<span>Ventas</span></span><img width="220" height="108" class="vc-logo" src="<?php echo CAISSA_IMG; ?>/logos/cruzando-mares.webp" alt="Cruzando Mares" loading="lazy" decoding="async" /></span>
                    </span>
                  </a>
          </div>
        </div>
      </div>
      <p class="vidcap">Tocá cualquier video para verlo.</p>
    </div>

    <div class="compare-foot reveal proof-cta">
      <a href="/reservar-consultoria/" class="btn btn-primary">Quiero resultados así
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="/industrias/" class="btn btn-ghost-d">Ver más casos
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="/reviews/" class="btn btn-ghost-d">Ver más reseñas
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<!-- ===================== AUDIT ===================== -->
<section class="audit" id="auditoria">
  <div class="wrap">
    <div class="audit-panel reveal">
      <div class="audit-text">
        <span class="eyebrow">La consultoría gratuita</span>
        <h2>Te muestro exactamente qué está pasando en tu cuenta</h2>
        <p class="intro">Compartimos pantalla y recorro tu cuenta de Google Ads con vos, en vivo, durante 15 minutos.</p>
        <div class="discover-label">Vas a salir sabiendo:</div>
        <ul class="discover">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>Por qué tus campañas dejaron de funcionar (o nunca arrancaron).</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>Si la cuenta está bien, tiene arreglo o apunta al objetivo equivocado.</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>Si Google Ads es el canal indicado para tu negocio hoy.</li>
        </ul>
        <p class="not-pitch">En caso de poder ayudarte, te haremos una propuesta personalizada sin compromiso.</p>
        <a href="/reservar-consultoria/" class="btn btn-light">Reservá tu consultoría gratuita
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <div class="audit-visual">
        <!-- Captura REAL de una consultoría de Manuel. El nombre de la cuenta y el de la
             campaña van tapados con cajas sólidas en el archivo original (§5 del CLAUDE.md). -->
        <figure class="audit-shot">
          <div class="shot-frame">
            <span class="shot-badge">Videollamada de consultoría</span>
            <img src="<?php echo CAISSA_IMG; ?>/consultoria-google-ads-800.webp" srcset="<?php echo CAISSA_IMG; ?>/consultoria-google-ads-600.webp 600w, <?php echo CAISSA_IMG; ?>/consultoria-google-ads-800.webp 800w, <?php echo CAISSA_IMG; ?>/consultoria-google-ads-1200.webp 1200w, <?php echo CAISSA_IMG; ?>/consultoria-google-ads.webp 1821w" sizes="(max-width:820px) 100vw, 600px" width="1821" height="817"
                 alt="Consultoría en vivo: informe de ubicaciones de Google Ads con el costo por conversión de cada ciudad, y Manuel Ferrini analizándolo en videollamada."
                 loading="lazy" decoding="async" />
          </div>
          <figcaption>Están pagando anuncios en lugares en los que no venden, y de los lugares que venden, tienen un CPA mucho mejor que no están explotando.</figcaption>
        </figure>
      </div>
    </div>
  </div>
</section>

<!-- ===================== FIT ===================== -->
<section class="fit" id="fit">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>No somos para todos</h2>
    </div>
    <div class="fit-cols">
      <div class="fit-card yes reveal">
        <h3>Trabajamos mejor con negocios que…</h3>
        <ul>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span><strong>Invierten más de USD 3.000 por mes en marketing digital</strong>, o están listos para hacerlo.</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Tienen <strong>un producto o servicio probado</strong>.</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span><strong>Buscan un partner experto y comprometido</strong>, no “alguien que haga los anuncios”.</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span><strong>Quieren crecer</strong>, no mantenerse donde están.</span></li>
        </ul>
      </div>
      <div class="fit-card no reveal">
        <h3>Probablemente NO encajamos si…</h3>
        <ul>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg><span><strong>Querés solo redes sociales</strong>, sin Google como base. <em class="fit-note">(también gestionamos Meta y Microsoft Ads)</em></span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg><span><strong>Buscás la opción más barata.</strong> <em class="fit-note">(no lo somos)</em></span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg><span><strong>Tu negocio todavía no arrancó.</strong></span></li>
        </ul>
      </div>
    </div>
    <div class="why-picky reveal">
      <span class="wp-shield"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l7 4v6c0 5-3.5 8-7 10-3.5-2-7-5-7-10V6z" stroke-linejoin="round"/><path d="M9 12l2 2 4-4" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      <span><b>Por qué somos selectivos:</b> elegimos bien desde el principio para darle a cada empresa la atención que necesita y trabajar juntos durante años.</span>
    </div>
    <div class="compare-foot reveal">
      <a href="/reservar-consultoria/" class="btn btn-ghost-d">Reservá tu consultoría gratuita</a>
    </div>
  </div>
</section>

<!-- ===================== HOW IT WORKS ===================== -->
<section class="how">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Cómo arrancamos: consultoría, onboarding y gestión</h2>
    </div>
    <div class="steps">
      <div class="step reveal">
        <div class="num"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3M8 11h6M11 8v6" stroke-linecap="round"/></svg></div>
        <span class="plabel">Paso 1</span>
        <h3>Consultoría</h3>
        <p>15 minutos en vivo con Manuel, el CEO. Recorrés tu cuenta y ves dónde se está yendo la plata.</p>
      </div>
      <div class="step reveal">
        <div class="num"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="4.5"/><circle cx="12" cy="12" r="1" fill="currentColor"/></svg></div>
        <span class="plabel">Paso 2</span>
        <h3>Llamada de pre-onboarding</h3>
        <p>Establecemos objetivos, definimos presupuesto y fecha de inicio.</p>
      </div>
      <div class="step reveal">
        <div class="num"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 7h6v6" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
        <span class="plabel">Paso 3</span>
        <h3>Set-up &amp; on-going</h3>
        <p>Construimos una base sólida, lanzamos y optimizamos día a día.</p>
      </div>
    </div>
    <div class="expect">
      <div class="card reveal"><span class="expect-lbl">Setup</span><p>De 3 a 7 días hábiles para tener todo corriendo, con optimizaciones en el mismo día para detener el desperdicio y aplicar los quick-wins que encontramos en la primera llamada.</p></div>
      <div class="card reveal"><span class="expect-lbl">Primeros resultados</span><p>Trabajamos mes a mes, por lo que en los primeros 30 días deberías ver suficiente valor para que elijas seguir trabajando juntos.</p></div>
      <div class="card reveal"><span class="expect-lbl">Es tuyo</span><p>La cuenta, las campañas y los datos quedan con vos si algún día te vas.</p></div>
    </div>
    <div class="how-cta reveal"><a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita</a></div>
  </div>
</section>

<!-- ===================== TEAM ===================== -->
<section class="team" id="equipo">
  <div class="wrap">
    <div class="team-grid">
      <div class="team-photo reveal">
        <div class="photo-frame"><img src="<?php echo CAISSA_IMG; ?>/Manu-CEO-home.webp" alt="Manuel Ferrini, CEO y cofundador de Caissa" width="450" height="568" loading="lazy" decoding="async" /></div>
        <div class="founder-press">
          <span class="fp-label">Visto en</span>
          <img class="fp-infobae" src="<?php echo CAISSA_IMG; ?>/press-infobae.svg" alt="Infobae" width="249" height="59" loading="lazy" decoding="async" />
          <img class="fp-rionegro" src="<?php echo CAISSA_IMG; ?>/press-rionegro.svg" alt="Diario Río Negro" width="270" height="59" loading="lazy" decoding="async" />
        </div>
      </div>
      <div class="team-text reveal">
        <p class="team-claim">Grandes para entregar resultados. Chicos para que tu negocio nos importe de verdad.</p>
        <p class="lead">Soy Manuel Ferrini, dirijo Caissa desde 2021. Cuando reservás una consultoría, la hago yo.</p>
        <p>No trabajo solo: detrás hay account managers senior con +50 empresas y +20.000 horas de cuentas encima, y <strong>Martín Pera</strong>, cofundador y COO.</p>
        <div class="sign">Manuel Ferrini</div>
        <div class="sign-role">CEO y cofundador de Caissa</div>
        <div class="proofcap reveal">
          <p class="proofcap-q">“Lo que más nos impresionó fue <b>su calidad humana</b>, su paciencia y su profesionalismo.”</p>
          <div class="proofcap-foot">
            <span class="proofcap-av"><img src="<?php echo CAISSA_IMG; ?>/ana.webp" alt="Ana Kaltenbrunner, Brand Manager de El Club de la Milanesa" width="400" height="400" loading="lazy" decoding="async" /></span>
            <span class="proofcap-id"><b>Ana Kaltenbrunner</b><span>Brand Manager · El Club de la Milanesa</span></span>
            <span class="proof-seal" role="img" aria-label="Recomienda a Caissa"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M2 21h4V9H2v12zM23 10c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-1z"/></svg></span>
          </div>
        </div>
</div>
    </div>
  </div>
  <div class="team-band">
    <img src="<?php echo CAISSA_IMG; ?>/equipo-caissa-final.webp" alt="El equipo de Caissa" width="1564" height="273" loading="lazy" decoding="async" />
  </div>
</section>

<!-- ===================== WE ANSWER ===================== -->
<section class="answer">
  <div class="wrap answer-grid">
    <div class="answer-text reveal">
      <span class="eyebrow">Comunicación</span>
      <p class="answer-claim">Te respondemos. Sin que tengas que perseguirnos.</p>
      <div class="proofcap reveal">
        <p class="proofcap-q">“La comunicación es <b>siempre muy rápida</b>, y la respuesta también.”</p>
        <div class="proofcap-foot">
          <span class="proofcap-av"><img src="<?php echo CAISSA_IMG; ?>/camila.webp" alt="Camila Jiménez, Marketing Manager de Youtooproject" width="338" height="338" loading="lazy" decoding="async" /></span>
          <span class="proofcap-id"><b>Camila Jiménez</b><span>Marketing Manager · Youtooproject</span></span>
          <span class="proof-seal" role="img" aria-label="Recomienda a Caissa"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M2 21h4V9H2v12zM23 10c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-1z"/></svg></span>
        </div>
      </div>
    </div>
    <div class="commit reveal">
      <div class="crow2">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8z" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div><b>Canal directo con tu equipo</b><span>Le escribís a la persona que trabaja tu cuenta, no a una casilla genérica.</span></div>
      </div>
      <div class="crow2">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div><b>Respuestas rápidas</b><span>Si algo cambia en tu cuenta, te enterás por nosotros, no por el reporte del mes que viene.</span></div>
      </div>
      <div class="crow2">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19V5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v14M8 21h8M12 17v4" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 9h8M8 13h5" stroke-linecap="round"/></svg></span>
        <div><b>Reportes que se entienden</b><span>Cuánto entró, cuánto salió, cuánto te queda. Sin siglas para impresionar.</span></div>
      </div>
      <div class="crow2">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M3 12h18" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div><b>Te sacás la cuenta de la cabeza</b><span>La miramos nosotros todos los días; vos usá ese tiempo para tu negocio.</span></div>
      </div>
      <!-- WHATSAPP: cuando Manu pase el número, activar: <a class="wsp" href="https://wa.me/54911XXXXXXXX?text=Hola,%20quiero%20la%20consultoría%20de%2015%20minutos">Escribinos por WhatsApp</a> -->
    </div>
  </div>
</section>

<!-- ===================== MÁS RESEÑAS (segunda tanda: testimonios de clientes) ===================== -->
<!-- Reseñas provistas por Manu (las escribieron los clientes). Traducidas y resumidas a lo más relevante.
     Fotos reales en la raíz; logos blancos en /logos (recoloreados a gris). SAMBA no tiene logo. -->
<section class="rev2" id="mas-resenas">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Performance Marketing que eligen +50 clientes cada mes</h2>
    </div>
    <div class="rev2-grid">
      <article class="r2card reveal">
        <span class="proof-seal" role="img" aria-label="Recomienda a Caissa"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M2 21h4V9H2v12zM23 10c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-1z"/></svg></span>
        <div class="r2-metric">10x en facturación · 3x en clientes</div>
        <p class="r2-quote">“Fue <b>un verdadero placer</b> trabajar con ellos.”</p>
        <div class="r2-who">
          <span class="r2-av"><img src="<?php echo CAISSA_IMG; ?>/guillermo.webp" alt="Guillermo Oliveti, COO de GOIAR" width="400" height="400" loading="lazy" decoding="async" /></span>
          <span class="r2-id"><b>Guillermo Oliveti</b><span>COO · GOIAR</span></span>
          <span class="r2-logo"><img src="<?php echo CAISSA_IMG; ?>/logos/goiar-blanco.webp" alt="GOIAR" width="220" height="108" loading="lazy" decoding="async" /></span>
        </div>
      </article>
      <article class="r2card reveal">
        <span class="proof-seal" role="img" aria-label="Recomienda a Caissa"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M2 21h4V9H2v12zM23 10c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-1z"/></svg></span>
        <div class="r2-metric">+30% en consultas · +20-25% de ROI</div>
        <p class="r2-quote">“<b>Entienden nuestro negocio</b>, nuestros objetivos y la dinámica del turismo.”</p>
        <div class="r2-who">
          <span class="r2-av"><img src="<?php echo CAISSA_IMG; ?>/silvana.webp" alt="Silvana Ponce, fundadora de Latitud Ushuaia Travel" width="400" height="400" loading="lazy" decoding="async" /></span>
          <span class="r2-id"><b>Silvana Ponce</b><span>Fundadora · Latitud Ushuaia Travel</span></span>
          <span class="r2-logo"><img src="<?php echo CAISSA_IMG; ?>/logos/ushuaia-travel.webp" alt="Latitud Ushuaia Travel" width="220" height="108" loading="lazy" decoding="async" /></span>
        </div>
      </article>
      <article class="r2card reveal">
        <span class="proof-seal" role="img" aria-label="Recomienda a Caissa"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M2 21h4V9H2v12zM23 10c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-1z"/></svg></span>
        <p class="r2-quote">“Estuvieron <b>presentes, atentos y proactivos</b> durante todo el proceso.”</p>
        <div class="r2-who">
          <span class="r2-av"><img src="<?php echo CAISSA_IMG; ?>/pablo.webp" alt="Pablo Marcovich, CEO de SAMBA" width="400" height="400" loading="lazy" decoding="async" /></span>
          <span class="r2-id"><b>Pablo Marcovich</b><span>CEO · SAMBA</span></span>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ===================== LIVE — AEGIS EN TIEMPO REAL ===================== -->
<section class="live" id="tecnologia">
  <div class="wrap live-grid">
    <div class="live-text reveal">
      <span class="eyebrow">Tecnología propia + IA</span>
      <h2>Mientras leés esto, nuestra IA está revisando campañas</h2>
      <!-- CONFIRMAR descripción técnica real de AEGIS antes de publicar. -->
      <p class="intro">AEGIS es nuestro software con inteligencia artificial: revisa las cuentas las 24 horas y marca dónde mover presupuesto.</p>
      <ul class="live-list">
        <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>Corta el gasto sin retorno.</b> Si una campaña gasta y no vende, se frena ese mismo día.</span></li>
        <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>IA + criterio senior.</b> Las decisiones importantes las firma una persona.</span></li>
        <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>Todo queda registrado.</b> Qué se cambió, cuándo y por qué.</span></li>
      </ul>
    </div>
    <div class="live-visual reveal">
      <div class="panel">
        <div class="panel-head">
          <span class="pulse"><i></i> EN VIVO · CONVERSIONES POR HORA</span>
          <span class="pclock" id="liveClock">--:--:--</span>
        </div>
        <div class="pchart">
          <svg id="liveChart" viewBox="0 0 560 200" preserveAspectRatio="none" aria-label="Gráfico en vivo de conversiones por hora">
            <defs><linearGradient id="gfill" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#5A72FF" stop-opacity=".45"/><stop offset="1" stop-color="#5A72FF" stop-opacity="0"/></linearGradient></defs>
            <path id="liveArea" fill="url(#gfill)"/>
            <path id="liveLine" fill="none" stroke="#7C8CFF" stroke-width="2.5" stroke-linejoin="round"/>
            <g id="liveMarks"></g>
            <line id="liveCursor" y1="8" y2="192" stroke="rgba(255,255,255,.25)" stroke-width="1" style="display:none"/>
          </svg>
          <div class="ptip" id="liveTip"></div>
        </div>
        <div class="pfeed" id="liveFeed"></div>
        <div class="pkpis">
          <div class="pk"><b id="kDecs">38</b><span>ajustes hoy</span></div>
          <div class="pk"><b id="kTerms">214</b><span>búsquedas irrelevantes bloqueadas</span></div>
          <div class="pk"><b>24/7</b><span>análisis de campañas</span></div>
        </div>
      </div>
      <p class="pcap">Interfaz ilustrativa.</p>
    </div>
  </div>
  <!-- Velocidad de carga: mención compacta — suma autoridad sin robar protagonismo -->
  <div class="wrap">
    <div class="speedline reveal">
      <div class="sl-stat"><i></i><b><span id="gaugeVal">1,9</span> s</b><span class="sl-lbl">carga de las landings</span></div>
      <p class="sl-txt">Cronometramos tus landings: una página lenta encarece cada clic que pagás.</p>
      <div class="sl-spark"><svg id="sparkSvg" viewBox="0 0 300 60" preserveAspectRatio="none" aria-label="Velocidad de carga de las últimas 24 horas"></svg><div class="stip" id="sparkTip"></div></div>
    </div>
  </div>
</section>

<!-- ===================== MÉTODO PCO (línea de proceso: 3 etapas + corte + Venta; coreografía CSS via .reveal) ===================== -->


<!-- ===================== FAQ ===================== -->
<section class="faq" id="faq">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Preguntas frecuentes</h2>
    </div>
    <div class="faqo-grid">
      <details class="faqo reveal">
        <summary><h3>¿Por qué brindamos un servicio boutique?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Nuestro servicio exclusivo se distingue por nuestro equipo de expertos senior dedicados a cada fase del proceso.</p>
          <p>Además de crear estrategias de primer nivel con Google Ads y Meta Ads, nos involucramos en la conversión del tráfico, en procesos, métodos de venta, y te aconsejamos como consultores para lograr que tu empresa tenga un crecimiento continuo, lo cual nos convierte en verdaderos partners de tu empresa.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Qué es performance marketing?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Hay miles de agencias de marketing digital, en Caissa somos una agencia de marketing digital enfocada en performance marketing.</p>
          <p>Mientras que el marketing digital tiene múltiples aplicaciones, el performance marketing se enfoca al 100% en ejecutar acciones para lograr resultados concretos, cada acción que nuestro equipo realiza va en línea con lograr resultados de negocio.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿El servicio tiene contrato de permanencia?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>No, nuestro servicio es mes a mes sin contratos de permanencia, por lo que para nosotros es primordial lograr resultados. Trabajaremos con dedicación, compromiso y disciplina para lograrlos.</p>
          <p>En nuestra web encontrarás referencias de empresas que confían en nosotros, respaldando nuestro trabajo.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cómo gestionan la comunicación con sus clientes?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Mantenemos una comunicación diaria a través de Slack, Workspace, mail y videollamadas para brindarte un seguimiento detallado de la evolución de tu estrategia.</p>
          <p>Los reportes son en tiempo real: ves las acciones y los resultados conseguidos a medida que pasan. Además, realizaremos informes que aportarán mucha visibilidad y valor a tu empresa.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Por qué la primera consultoría es gratuita?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Una primera videollamada es fundamental para conocer tu negocio, lo cual nos permite ver si podemos ayudarte. No brindamos servicios a empresas que no podemos ayudar.</p>
          <p>Nos aseguramos de trabajar junto a empresas que tienen potencial de crecimiento y tenemos certeza de que realmente podemos ayudarlas.</p>
          <p>Si invertís actualmente en Google Ads, podrás compartirnos pantalla para que te mostremos dónde estás perdiendo dinero y cómo mejorarlo. Luego, si podemos ayudarte, te haremos una propuesta sin compromiso. Finalmente, te ayudaremos a tomar la mejor decisión para tu negocio.</p>
        </div>
      </details>
    </div>
  </div>
</section>

<!-- ===================== PRENSA ===================== -->
<section class="prensa" id="prensa">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Últimas menciones en medios</h2>
      <p>Agencia de performance marketing con oficinas en Argentina.</p>
    </div>
    <!-- Carrusel infinito: en PC se ven 4 tarjetas a la vez y la pista se desliza sola.
         El segundo grupo (el que cierra el loop) lo CLONA el JS, no esta en el HTML: asi los
         titulares de prensa aparecen una sola vez en el documento y no hay dos copias que
         mantener sincronizadas. Para sumar o sacar un medio, editas solo esta lista. -->
    <div class="pr-wrap reveal">
      <div class="pr-marquee" aria-label="Menciones de Caissa en medios">
        <div class="pr-track">
          <div class="pr-group">
            <a class="pr-card" href="https://www.infobae.com/opinion/2026/07/16/la-ia-decide-que-compras-la-nueva-guerra-por-aparecer-en-las-recomendaciones/" target="_blank" rel="noopener">
              <img class="pr-img" src="<?php echo CAISSA_IMG; ?>/prensa/prensa-infobae.webp" width="480" height="270" alt="" loading="lazy" decoding="async" />
              <span class="pr-medio"><img class="pr-logo" src="<?php echo CAISSA_IMG; ?>/press-infobae.svg" alt="Infobae" width="249" height="59" loading="lazy" decoding="async" /></span>
              <span class="pr-tit">La IA decide qué comprás: la nueva guerra por aparecer en las recomendaciones</span>
              <span class="pr-ir" aria-hidden="true">&rarr;</span>
            </a>
            <a class="pr-card" href="https://www.rionegro.com.ar/estar-bien/el-marketing-digital-ya-no-es-opcional-como-competir-en-internet-sin-ser-una-gran-empresa-4143025/" target="_blank" rel="noopener">
              <img class="pr-img" src="<?php echo CAISSA_IMG; ?>/prensa/prensa-rionegro.webp" width="480" height="270" alt="" loading="lazy" decoding="async" />
              <span class="pr-medio"><img class="pr-logo" src="<?php echo CAISSA_IMG; ?>/press-rionegro.svg" alt="Diario Río Negro" width="270" height="59" loading="lazy" decoding="async" /></span>
              <span class="pr-tit">El marketing digital ya no es opcional: cómo competir en internet sin ser una gran empresa</span>
              <span class="pr-ir" aria-hidden="true">&rarr;</span>
            </a>
            <a class="pr-card" href="https://reporteasia.com/noticias/2025/07/21/el-impacto-del-cybermonday-en-argentina-cifras-clave-y-relevancia-en-el-ecosistema-digital/" target="_blank" rel="noopener">
              <img class="pr-img" src="<?php echo CAISSA_IMG; ?>/prensa/prensa-reporteasia.webp" width="480" height="270" alt="" loading="lazy" decoding="async" />
              <span class="pr-medio">Reporte Asia</span>
              <span class="pr-tit">El impacto del CyberMonday en Argentina: cifras clave y relevancia en el ecosistema digital</span>
              <span class="pr-ir" aria-hidden="true">&rarr;</span>
            </a>
            <a class="pr-card" href="https://impactoeconomico.com.ar/la-exportacion-de-conocimiento/" target="_blank" rel="noopener">
              <img class="pr-img" src="<?php echo CAISSA_IMG; ?>/prensa/prensa-impacto.webp" width="480" height="270" alt="" loading="lazy" decoding="async" />
              <span class="pr-medio">Impacto Económico</span>
              <span class="pr-tit">La exportación de conocimiento</span>
              <span class="pr-ir" aria-hidden="true">&rarr;</span>
            </a>
            <a class="pr-card" href="https://www.patagonia.press/regionales/2025/10/20/caissa-la-agencia-neuquina-que-redefine-el-marketing-digital-en-argentina-19236.html" target="_blank" rel="noopener">
              <img class="pr-img" src="<?php echo CAISSA_IMG; ?>/prensa/prensa-patagonia.webp" width="480" height="270" alt="" loading="lazy" decoding="async" />
              <span class="pr-medio">Patagonia Press</span>
              <span class="pr-tit">Caissa: la agencia neuquina que redefine el marketing digital en Argentina</span>
              <span class="pr-ir" aria-hidden="true">&rarr;</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== FINAL CTA ===================== -->
<section class="final" id="cta">
  <div class="wrap">
    <div class="final-panel reveal">
      <div class="final-copy">
        <h2>Veamos si te podemos ayudar</h2>
        <p class="body">En 15 minutos te mostramos dónde se está yendo la plata y qué cambiaríamos primero. El diagnóstico es tuyo, trabajes después con nosotros o no.</p>
        <a href="/reservar-consultoria/" class="btn btn-light">Reservá tu consultoría gratuita
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        <!-- WHATSAPP: cuando Manu pase el número, agregar debajo del botón:
             <p style="margin-top:16px"><a href="https://wa.me/54911XXXXXXXX?text=..." style="color:#fff;text-decoration:underline;font-weight:600">¿Preferís ir directo? Escribinos por WhatsApp</a></p> -->
        <div class="final-reassure">15 minutos · Sin contratos de permanencia</div>
      </div>
      <!-- CONFIRMAR: que Manuel hace personalmente TODAS las consultorías iniciales. Si no es sostenible: "Las consultorías iniciales las arranco yo o alguien de mi equipo de estrategia. Manuel" -->
      <div class="final-side">
        <span class="fs-photo"><img src="<?php echo CAISSA_IMG; ?>/Manu-CEO-home.webp" alt="Manuel Ferrini" width="450" height="568" loading="lazy" decoding="async" /></span>
        <span class="fs-line">La consultoría la hago yo.</span>
        <span class="fs-name">Manuel Ferrini</span>
        <span class="fs-role">CEO y cofundador de Caissa</span>
      </div>
    </div>
  </div>
</section>

<!-- ===================== FOOTER ===================== -->
</main>

<?php
get_footer();