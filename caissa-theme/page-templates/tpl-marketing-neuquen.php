<?php
/**
 * Template Name: Caissa — Marketing en Neuquén
 *
 * Migrada desde agencia-marketing-neuquen/index.html del repo Caissa-Nueva-Web-2026.
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
      "@type": "ProfessionalService",
      "@id": "https://caissa.digital/agencia-marketing-neuquen/#localbusiness",
      "name": "Caissa",
      "description": "Agencia de marketing digital con oficinas en Neuquén Capital. Google Ads, Meta Ads y optimización de conversión para empresas del Alto Valle y la Patagonia.",
      "url": "https://caissa.digital/agencia-marketing-neuquen/",
      "logo": "https://caissa.digital/logo-caissa.webp",
      "image": ["https://caissa.digital/oficina-neuquen.jpg", "https://caissa.digital/logo-caissa.webp"],
      "priceRange": "$$$",
      "currenciesAccepted": "ARS, USD",
      "foundingDate": "2021",
      "telephone": "+5492994695443",
      "parentOrganization": { "@type": "Organization", "name": "Caissa", "url": "https://caissa.digital/" },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Teniente de Navío Eliana María Krawczyk 619, Edificio Zafiro, Piso 1° C",
        "addressLocality": "Neuquén",
        "addressRegion": "Neuquén",
        "postalCode": "Q8300",
        "addressCountry": "AR"
      },
      "geo": { "@type": "GeoCoordinates", "latitude": -38.977812, "longitude": -68.050062 },
      "openingHoursSpecification": [{
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
        "opens": "08:00",
        "closes": "17:00"
      }],
      "hasMap": "https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6",
      "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.9", "reviewCount": "65", "bestRating": "5" },
      "areaServed": [
        { "@type": "City", "name": "Neuquén" },
        { "@type": "City", "name": "Plottier" },
        { "@type": "City", "name": "Centenario" },
        { "@type": "City", "name": "Cipolletti" },
        { "@type": "City", "name": "General Roca" },
        { "@type": "AdministrativeArea", "name": "Alto Valle de Río Negro y Neuquén" },
        { "@type": "AdministrativeArea", "name": "Patagonia argentina" }
      ],
      "knowsAbout": ["Google Ads", "Meta Ads", "Marketing digital", "Publicidad online", "Performance marketing", "Optimización de conversión", "Vaca Muerta", "Marketing para la industria energética"],
      "sameAs": [
        "https://www.linkedin.com/company/caissa-digital",
        "https://www.instagram.com/caissa_digital/",
        "https://clutch.co/profile/caissa",
        "https://www.sortlist.es/agency/caissa",
        "https://www.google.com/partners/agency?id=9889692537",
        "https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6",
        "https://www.cancilleria.gob.ar/es/directorios-argentina-creativa/marketing-publicidad-y-comunicacion/caissa"
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Servicios de marketing digital y publicidad online en Neuquén",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Google Ads y performance marketing" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Meta Ads" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "CRO y growth marketing" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Consultoría de negocio y estrategia digital" } }
        ]
      }
    },
    {
      "@type": "WebPage",
      "@id": "https://caissa.digital/agencia-marketing-neuquen/#webpage",
      "url": "https://caissa.digital/agencia-marketing-neuquen/",
      "name": "Agencia de Marketing Digital en Neuquén | Caissa",
      "description": "Agencia de marketing digital en Neuquén Capital, con oficinas propias. Google Ads y Meta Ads para empresas del Alto Valle, Vaca Muerta y la Patagonia.",
      "inLanguage": "es-AR",
      "about": { "@id": "https://caissa.digital/agencia-marketing-neuquen/#localbusiness" }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://caissa.digital/agencia-marketing-neuquen/#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://caissa.digital/" },
        { "@type": "ListItem", "position": 2, "name": "Agencia de marketing en Neuquén", "item": "https://caissa.digital/agencia-marketing-neuquen/" }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://caissa.digital/agencia-marketing-neuquen/#faq",
      "mainEntity": [
        { "@type": "Question", "name": "¿Dónde queda la oficina de Caissa en Neuquén?", "acceptedAnswer": { "@type": "Answer", "text": "En Teniente de Navío Eliana María Krawczyk 619, Edificio Zafiro, Piso 1° C, Neuquén Capital. Atendemos de lunes a viernes de 8 a 17 y podés llamarnos al +54 9 299 469-5443. Es una oficina propia con equipo trabajando ahí todos los días, no una dirección de correspondencia." } },
        { "@type": "Question", "name": "¿Puedo ir a la oficina a reunirme con el equipo?", "acceptedAnswer": { "@type": "Answer", "text": "Sí. Podés venir a la oficina de Neuquén Capital o vamos nosotros a tu empresa si estás en el Alto Valle. También trabajamos por videollamada si te resulta más cómodo. La consultoría inicial de 15 minutos es gratuita en cualquiera de las tres formas." } },
        { "@type": "Question", "name": "¿Trabajan solo en Neuquén Capital o también en el Alto Valle?", "acceptedAnswer": { "@type": "Answer", "text": "En todo el Alto Valle: Neuquén Capital, Plottier, Centenario, Cipolletti, General Roca, Cinco Saltos y las localidades de la zona. También en Añelo y en el resto de la Patagonia. Para reuniones presenciales nos movemos por la región sin costo adicional." } },
        { "@type": "Question", "name": "¿Cuánto cuesta contratar una agencia de marketing digital en Neuquén?", "acceptedAnswer": { "@type": "Answer", "text": "El honorario de la agencia y la inversión publicitaria son dos números distintos: uno lo cobra la agencia y el otro va directo a Google o Meta. Conviene no mezclarlos nunca. Nosotros trabajamos con un honorario mensual fijo según el alcance del proyecto y sin contratos de permanencia, con empresas que invierten más de USD 3.000 por mes en marketing digital. El número exacto sale de mirar tu caso en la consultoría." } },
        { "@type": "Question", "name": "¿Qué inversión mínima necesito para empezar?", "acceptedAnswer": { "@type": "Answer", "text": "Trabajamos con empresas que invierten más de USD 3.000 por mes en marketing digital. Es el mínimo, y no es un número comercial: por debajo de eso las campañas no juntan las conversiones que Google y Meta necesitan para optimizar, y la cuenta se pasa la vida reiniciando el aprendizaje. Si tu presupuesto todavía está por debajo, te lo decimos en la primera llamada en vez de venderte algo que no va a funcionar." } },
        { "@type": "Question", "name": "¿En cuánto tiempo se ven resultados?", "acceptedAnswer": { "@type": "Answer", "text": "Los anuncios pueden empezar a mostrarse apenas se aprueban, pero la lectura confiable llega después: cada campaña necesita acumular conversiones antes de estabilizarse, y durante esa etapa los números se mueven mucho. En general, entre la tercera y la sexta semana ya se puede decidir con datos. Lo estructural, como la página donde cae el clic o qué pasa con la consulta después, tarda un poco más y es lo que más mueve la aguja." } },
        { "@type": "Question", "name": "¿Qué diferencia hay entre una agencia de publicidad y una agencia de performance marketing?", "acceptedAnswer": { "@type": "Answer", "text": "Una agencia de publicidad tradicional trabaja sobre la marca: la pieza, el mensaje, la presencia. El resultado se mide en alcance y en recordación. Una agencia de performance arranca del otro lado, de la venta. Cada peso invertido tiene que poder rastrearse hasta una consulta, un turno o una compra. Caissa es lo segundo: trabajamos la marca cuando ayuda a vender, no como un fin." } },
        { "@type": "Question", "name": "¿Qué significa ser Google Partner?", "acceptedAnswer": { "@type": "Answer", "text": "Google Partner es la certificación que Google les da a las agencias que sostienen un volumen de inversión gestionada, un rendimiento mínimo en las cuentas y el equipo con las certificaciones al día. Se revisa todos los años y se puede perder. Caissa es Google Partner, y en 2025 fue seleccionada dentro del programa Premier, el escalón que Google reserva a un grupo reducido de agencias por país. También somos Meta Business Partner." } },
        { "@type": "Question", "name": "¿Por qué contratar una agencia de Neuquén y no una de Buenos Aires?", "acceptedAnswer": { "@type": "Answer", "text": "Por dos cosas concretas. La primera es que conocemos el mercado: la estacionalidad del Alto Valle, cómo se mueve la demanda alrededor de Vaca Muerta y qué busca la gente de la región, que no es lo mismo que busca alguien en Buenos Aires. La segunda es que podemos sentarnos en tu oficina cuando hace falta. Dicho esto, gestionamos cuentas en España, México y toda Latinoamérica: la ventaja es tener las dos cosas, cercanía y escala." } }
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
      <h1>Agencia de marketing digital en Neuquén</h1>
      <p class="hga-claim">Te están <span class="hl">buscando<svg class="grow" viewBox="0 0 220 70" preserveAspectRatio="none" aria-hidden="true">
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
      </svg></span><br />ahora mismo, en Neuquén</p>
      <p class="hga-sub">Cada día hay gente de la región buscando en Google lo que vos vendés. Nos ocupamos de que te encuentren a vos. Oficinas propias en Neuquén Capital y clientes en España, México y toda Latinoamérica.</p>
      <div class="hga-cta">
        <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <p class="hga-note">Presencial en el Alto Valle o por videollamada. Sin permanencia.</p>
      <!-- NAP ARRIBA DEL PLIEGUE (pedido de la SEO, Update 04). Son exactamente los mismos tres
           datos que en #oficina, en la FAQ, en el footer y en el JSON-LD. Si cambia uno, se
           cambian todos y el Perfil de Empresa de Google el mismo día. Va en <address>, que es
           el elemento semántico correcto, y en texto plano: nunca dentro de una imagen. -->
      <address class="hga-nap">
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg>Teniente de Navío Eliana María Krawczyk 619, Edificio Zafiro, Piso 1° C · Neuquén Capital</span>
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .3 1.9.6 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.1a2 2 0 0 1 2.1-.5c.9.3 1.8.5 2.8.6a2 2 0 0 1 1.7 2z" stroke-linecap="round" stroke-linejoin="round"/></svg><a href="tel:+5492994695443">+54 9 299 469-5443</a></span>
        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3" stroke-linecap="round" stroke-linejoin="round"/></svg>Lunes a viernes, de 8 a 17 h</span>
      </address>
      <div class="hga-creds">
        <img src="<?php echo CAISSA_IMG; ?>/google-partner-premier.webp" alt="Caissa, Google Partner Premier 2025 y Meta Business Partner" width="238" height="75" />
        <div class="hga-cred">
          <div>
            <div class="cn">4.9 <span class="rstars" aria-hidden="true">★★★★★</span></div>
            <div class="cs">65 reseñas en Google</div>
          </div>
        </div>
      </div>
    </div>
    <div class="hga-right">
      <!-- Local pack ilustrativo. Los competidores van sin nombre a propósito: no se nombra
           ni se compara con agencias reales de la zona. -->
      <div class="lp" role="img" aria-label="Mockup del paquete local de Google: el negocio aparece primero entre los resultados con mapa">
        <div class="lp-q">
          <svg class="g" viewBox="0 0 48 48" aria-hidden="true"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg>
          <span class="lp-qt"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3" stroke-linecap="round"/></svg>lo que vendés + en Neuquén</span>
        </div>
        <div class="lp-map" aria-hidden="true">
          <i class="h1_"></i><i class="h2_"></i><i class="v1"></i><i class="v2"></i>
          <span class="park"></span>
          <span class="lp-dot" style="left:64%;top:60px"></span>
          <span class="lp-dot" style="left:80%;top:92px"></span>
          <span class="lp-pin"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7z"/><circle cx="12" cy="9" r="2.6" fill="#fff"/></svg></span>
        </div>
        <div class="lp-list">
          <div class="lp-i you">
            <span class="lp-n">1</span>
            <span class="lp-b">
              <b>Tu empresa</b>
              <span class="lp-stars"><span class="s">★★★★★</span> 4,9 · 65 reseñas</span>
              <span class="lp-meta">Neuquén Capital · Abierto ahora</span>
            </span>
          </div>
          <div class="lp-i lp-ghost"><span class="lp-n">2</span><span class="lp-b"><b></b><span class="g2"></span></span></div>
          <div class="lp-i lp-ghost"><span class="lp-n">3</span><span class="lp-b"><b></b><span class="g2"></span></span></div>
        </div>
        <span class="lp-cue">
          <svg class="lp-flecha" viewBox="0 0 42 31" fill="none" aria-hidden="true"><path d="M38 5 C 26 6, 13 10, 6 24" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/><path d="M2 14 L5.5 25.5 L16 21" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span class="lp-nota">acá te buscan</span>
        </span>
      </div>
    </div>
  </div>
</section>

<!-- ===================== SERVICIOS ===================== -->
<section class="sec-white" id="servicios">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Servicios de marketing digital y publicidad online en Neuquén</h2>
      <p>Somos una agencia de performance: todo lo que hacemos termina en una venta medida.</p>
    </div>
    <div class="lsv lsv-4">
      <article class="lsv-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3" stroke-linecap="round"/></svg></span>
        <h3>Google Ads y performance marketing</h3>
        <p>Aparecer justo cuando alguien de la región busca lo que vendés. Búsqueda, Shopping, Performance Max, remarketing y campañas geolocalizadas para traer gente a tu local.</p>
        <a href="/agencia-google-ads/">Ver agencia de Google Ads</a>
      </article>
      <article class="lsv-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="3.5"/><path d="M3 15l5-5 4 4 3-3 6 6" stroke-linecap="round" stroke-linejoin="round"/><circle cx="15" cy="8" r="1.6"/></svg></span>
        <h3>Meta Ads</h3>
        <p>Facebook, Instagram y WhatsApp para generar demanda que todavía no existe. Fundamental en rubros donde nadie busca tu producto en Google porque no sabe que lo necesita.</p>
        <a href="/agencia-meta-ads/">Ver agencia de Meta Ads</a>
      </article>
      <article class="lsv-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 7h6v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>CRO y growth marketing</h3>
        <p>Trabajamos la página donde cae el clic y revisamos qué pasa con la consulta después. Podés tener la mejor campaña y perder la venta porque nadie contestó el WhatsApp.</p>
        <a href="https://caissa.digital/agencia-growth-marketing/">Ver growth marketing</a>
      </article>
      <article class="lsv-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v18M5 8h14M7 13h10M9 18h6" stroke-linecap="round"/></svg></span>
        <h3>Consultoría de negocio y estrategia digital</h3>
        <p>Dónde está la demanda de tu rubro en la región y qué canal conviene primero, para que la inversión se pueda defender con números.</p>
        <a href="/reservar-consultoria/">Reservá tu consultoría</a>
      </article>
    </div>
  </div>
</section>

<!-- ===================== OFICINA + NAP =====================
     NAP = Name, Address, Phone. Es el bloque que más pesa para el paquete local.
     La dirección va en TEXTO PLANO y tiene que ser idéntica, carácter por carácter,
     a la del Perfil de Empresa de Google. -->
<section class="sec-soft" id="oficina">
  <div class="wrap">
    <div class="nap reveal">
      <div class="nap-copy">
        <span class="eyebrow">Estamos acá</span>
        <h2>Nuestra oficina en Neuquén Capital</h2>
        <p style="color:var(--ink-soft);font-size:1.02rem;line-height:1.65">Oficina propia, con el equipo trabajando adentro todos los días. No es una dirección de correspondencia ni un espacio de coworking alquilado por hora.</p>
        <ul class="nap-rows">
          <li>
            <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg></span>
            <span>
              <b>Dirección</b>
              <span class="v">Teniente de Navío Eliana María Krawczyk 619<br />Edificio Zafiro, Piso 1° C · Neuquén Capital, Neuquén</span>
              <a href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener">Cómo llegar</a>
            </span>
          </li>
          <li>
            <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .3 1.9.6 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.1a2 2 0 0 1 2.1-.5c.9.3 1.8.5 2.8.6a2 2 0 0 1 1.7 2z" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
            <span>
              <b>Teléfono</b>
              <!-- tel: con el número en formato internacional. El texto visible va con el mismo
                   número, formateado a la argentina. Ambos tienen que coincidir con el Perfil
                   de Empresa: es la P de NAP. -->
              <span class="v"><a href="tel:+5492994695443">+54 9 299 469-5443</a></span>
            </span>
          </li>
          <li>
            <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
            <span>
              <b>Horario de atención</b>
              <span class="v">Lunes a viernes, de 8 a 17 h</span>
            </span>
          </li>
        </ul>
        <div class="nap-cta">
          <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          <a href="tel:+5492994695443" class="btn btn-ghost-d">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .3 1.9.6 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.1a2 2 0 0 1 2.1-.5c.9.3 1.8.5 2.8.6a2 2 0 0 1 1.7 2z" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Llamanos</a>
        </div>
      </div>
      <div class="nap-visual">
        <!-- Foto real de la oficina (1200x900, 4:3, misma proporción que el contenedor).
             El alt describe el lugar y nombra la ciudad: en local, el texto alternativo de la
             foto del local es una señal más. SUBIR TAMBIÉN AL PERFIL DE EMPRESA DE GOOGLE. -->
        <img src="<?php echo CAISSA_IMG; ?>/oficina-neuquen.jpg" alt="Interior de la oficina de Caissa en Neuquén Capital: espacio de trabajo con el equipo y el logo de la agencia en la pared" width="1200" height="900" loading="lazy" decoding="async" />
        <span class="nap-cap">Nuestra oficina en el Edificio Zafiro, Neuquén Capital.</span>
      </div>
    </div>

    <!-- MAPA (pedido de la SEO, Update 04). Carga sólo si el usuario lo pide: el iframe de
         Google Maps trae ~800 KB y cookies de terceros, y esta página tiene que abrir rápido
         en un celular del Alto Valle. Hasta que se toca el botón no se pide nada.
         El mapa embebido no es factor de ranking; lo que pesa para el paquete local es el
         hasMap del JSON-LD y el enlace al Perfil de Empresa, que ya están. Esto es para el
         usuario que quiere ver dónde queda sin salir de la página.
         El iframe usa el endpoint sin API key (maps?q=lat,lng&output=embed). Si alguna vez
         deja de andar, la alternativa es la Maps Embed API oficial, que sí pide clave. -->
    <div class="nap-map reveal" id="napMap">
      <button type="button" class="nap-map-btn" id="napMapBtn" aria-expanded="false" aria-controls="napMapFrame">
        <span class="pin"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7z"/><circle cx="12" cy="9" r="2.6" fill="#fff"/></svg></span>
        <span class="t"><b>Ver el mapa</b><span>Teniente de Navío Eliana María Krawczyk 619 · Neuquén Capital</span></span>
      </button>
      <div id="napMapFrame"></div>
      <div class="nap-map-links">
        <a href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener">Cómo llegar</a>
        <a href="https://maps.app.goo.gl/KCAFVTBE5gHcGEDu6" target="_blank" rel="noopener">Nuestro perfil y reseñas en Google</a>
      </div>
    </div>
  </div>
</section>

<!-- ===================== POR QUÉ UNA AGENCIA DE ACÁ ===================== -->
<section class="bg-grad" id="porque">
  <div class="wrap">
    <div class="head-left reveal">
      <!-- La SEO lo escribió como "Por qué elegir a Caissa como agencia de publicidad y
           marketing en Neuquén". Se le sacó "a Caissa como": no aporta nada en búsqueda, hacía
           73 caracteres y el H2 se iba a tres renglones. Las dos keywords que importan
           ("agencia de publicidad ... en Neuquén" y "marketing en Neuquén") quedan intactas. -->
      <h2>Por qué elegir una agencia de publicidad y marketing en Neuquén</h2>
      <p>No es por el asado ni por la cercanía emocional. Son tres ventajas concretas que una agencia de Buenos Aires no te puede dar.</p>
    </div>
    <div class="wedo">
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg></span>
        <h3>Conocemos el mercado</h3>
        <p>Sabemos cómo se mueve la demanda en el Alto Valle, qué cambia cuando Vaca Muerta se acelera y por qué acá la temporada no arranca cuando arranca en el resto del país.</p>
        <span class="win">Menos meses de aprendizaje</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 20v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9.5" cy="7" r="3.5"/><path d="M22 20v-2a4 4 0 0 0-3-3.87" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Nos podés ver la cara</h3>
        <p>Reuniones en tu oficina o en la nuestra cuando el tema lo pide. Hay conversaciones que por videollamada tardan tres semanas y sentados a una mesa se resuelven en una hora.</p>
        <span class="win">Decisiones más rápidas</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.7 3.8 5.7 3.8 9S14.5 18.3 12 21c-2.5-2.7-3.8-5.7-3.8-9S9.5 5.7 12 3z"/></svg></span>
        <h3>Escala que no es local</h3>
        <p>Gestionamos cuentas en España, México y toda Latinoamérica. Lo que aprendemos en mercados grandes lo aplicamos acá, y no al revés.</p>
        <span class="win">Lo mejor de los dos mundos</span>
      </article>
    </div>
    <div class="prose reveal" style="max-width:840px;margin:0 auto;text-align:center">
      <p>Caissa nació en Neuquén en 2021 y sigue operando desde acá. Somos <b>Google Partner</b>, fuimos <b>seleccionados Partner Premier en 2025</b> y somos <b>Meta Business Partner</b>. La combinación de oficina propia en el Alto Valle con esas certificaciones no es habitual en la región.</p>
    </div>
  </div>
</section>

<!-- ===================== VACA MUERTA / ENERGÍA =====================
     Sección propia pedida por la SEO (Update 04). Es el diferencial económico de la región y
     ninguna otra landing del sitio la toca, así que suma sin duplicar.
     OJO: el documento de la SEO proponía ilustrarla con "Axion Lift + Over Option".
     Over Option NO va: es una empresa de tecnología de trading con sede en España (está en
     caissa.digital/reviews/), no tiene nada que ver con energía ni con la Patagonia. Ponerla acá
     sería afirmar algo falso sobre un cliente real. Se lo avisamos a la SEO.
     Axion Lift sí: fabrica elevadores hidráulicos e hidrogrúas y atiende la región (tiene
     sucursal en Neuquén Capital, dato público de la empresa). Los números salen de la ficha
     pública caissa.digital/caso/axionlift/. -->
<section class="sec-white" id="vaca-muerta">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Marketing para empresas de Vaca Muerta y la industria energética</h2>
      <p>Es el mercado que mueve la región y también el más difícil de pautar. Nada de lo que funciona en un comercio funciona acá.</p>
    </div>
    <div class="vm">
      <div class="vm-text reveal">
        <div class="prose">
          <p>En energía el volumen de búsqueda es bajo, el ciclo de venta se mide en meses y una sola consulta puede valer más que un año entero de facturación de un local. Con esos números, <b>optimizar por cantidad de leads es la forma más rápida de quemar el presupuesto</b>.</p>
          <p>Acá conviene lo contrario: pocas palabras clave elegidas con precisión, porque el volumen de búsqueda es chico y cada consulta vale mucho. No cuántos formularios entraron, sino cuántos llegaron a una reunión técnica y cuántos terminaron en una orden de compra.</p>
        </div>
      </div>
      <ul class="rt-list vm-list reveal">
        <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>El que busca no es el que firma.</b><span class="d">Del otro lado hay un comprador técnico, un área de compras y una gerencia. La campaña tiene que sobrevivir a los tres, y eso se resuelve con contenido, no con una oferta.</span></span></li>
        <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>Meses entre el clic y la compra.</b><span class="d">Si medís a 30 días, la campaña que trae los mejores clientes parece la peor. Configuramos las ventanas de atribución para el ciclo real de tu venta.</span></span></li>
        <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>Operadoras, servicios y proveedores.</b><span class="d">Cada eslabón de la cadena busca distinto: no es lo mismo pautarle a una operadora que a la pyme que le alquila equipos. Se segmenta por eslabón, no por rubro.</span></span></li>
      </ul>
    </div>
    <div class="sec-cta reveal">
      <a href="https://caissa.digital/caso/axionlift/" class="btn btn-ghost-d">Ver el caso Axion Lift
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<!-- ===================== CASOS LOCALES + MARCAS DE LA REGIÓN =====================
     La SEO pidió "casos de éxito de empresas de Neuquén y el Alto Valle, solo testimonios
     locales, con link a /caso/". Estos tres son los únicos testimonios REALES del sitio que
     son de la región; los demás (Paula Luzzi, Colchonería, Espacio Casa, GOIAR, Ushuaia…) son
     de otras provincias o de España y no entran acá aunque sobren.
       · Constructora Cipolletti  -> Cipolletti, Río Negro. Local, confirmado.
       · Axion Lift               -> sucursal en Neuquén Capital, atiende Vaca Muerta.
       · Cruzando Mares           -> LOCALIDAD INFERIDA de que ya estaba en el muro de logos
                                     "marcas de la región". CONFIRMAR CON MANU.
     Los tres ya aparecen en la landing de Google Ads: son citas de doce palabras, así que el
     solapamiento medido con shingles sigue muy por debajo del umbral. -->
<section class="sec-soft" id="casos">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Casos de éxito de empresas de Neuquén y el Alto Valle</h2>
      <p>Resultados de cuentas de la región, firmados por quien los vivió.</p>
    </div>
    <div class="tst-grid tst-3">
      <article class="tst reveal">
        <div class="tst-m">407%</div>
        <div class="tst-ml">Aumento en leads calificados interanual</div>
        <p class="tst-q">“Junto a Caissa, crecimos más rápido de lo que imaginamos.”</p>
        <div class="tst-w"><b>Francisco</b><span>Socio · Constructora Cipolletti</span><span>Cipolletti, Río Negro</span></div>
      </article>
      <article class="tst reveal">
        <div class="tst-m">+400%</div>
        <div class="tst-ml">Leads calificados con el mismo presupuesto</div>
        <p class="tst-q">“Caissa optimizó nuestros costos y ordenó nuestro seguimiento online.”</p>
        <div class="tst-w"><b>Ignacio</b><span>Gerente de Marketing · Axion Lift</span><span>Elevadores e hidrogrúas · Neuquén</span></div>
      </article>
      <article class="tst reveal">
        <div class="tst-m">+85%</div>
        <div class="tst-ml">Aumento en ventas</div>
        <p class="tst-q">“Gracias a Caissa, mi empresa vende incluso cuando estoy de vacaciones.”</p>
        <div class="tst-w"><b>Mariana Luaces</b><span>Cofundadora · Cruzando Mares</span><span>Turismo · Patagonia</span></div>
      </article>
    </div>
    <div class="sec-cta reveal">
      <a href="https://caissa.digital/caso/" class="btn btn-ghost-d">Ver todos los casos de éxito
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="/reviews/" class="btn btn-ghost-d">Ver testimonios de clientes
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
    <div class="loc-wall">
      <h3>Marcas de la región que confían en Caissa</h3>
      <div class="loc-logos reveal">
        <img src="<?php echo CAISSA_IMG; ?>/logos/casino-del-rio-blanco.png" alt="Casino del Río" width="220" height="108" loading="lazy" decoding="async" />
        <img src="<?php echo CAISSA_IMG; ?>/logos/betsur_blanco.png" alt="Betsur" width="220" height="108" loading="lazy" decoding="async" />
        <img src="<?php echo CAISSA_IMG; ?>/logos/piren-rayen.png" alt="Pirén Rayén" width="220" height="108" loading="lazy" decoding="async" />
        <img src="<?php echo CAISSA_IMG; ?>/logos/del-rio-blanco.png" alt="Del Río" width="220" height="108" loading="lazy" decoding="async" />
        <img src="<?php echo CAISSA_IMG; ?>/logos/mil-ruedas.png" alt="Mil Ruedas" width="220" height="108" loading="lazy" decoding="async" />
        <img src="<?php echo CAISSA_IMG; ?>/logos/blanco-amor.png" alt="Blanco Amor" width="220" height="108" loading="lazy" decoding="async" />
        <img src="<?php echo CAISSA_IMG; ?>/logos/bazar_blanco.png" alt="Bazar" width="220" height="108" loading="lazy" decoding="async" />
        <img src="<?php echo CAISSA_IMG; ?>/logos/colchoneria_blanco.png" alt="Colchonería Ideal" width="220" height="108" loading="lazy" decoding="async" />
        <img src="<?php echo CAISSA_IMG; ?>/logos/cruzando-mares.png" alt="Cruzando Mares" width="220" height="108" loading="lazy" decoding="async" />
        <img src="<?php echo CAISSA_IMG; ?>/logos/calafate-tour.png" alt="Calafate Tour" width="220" height="108" loading="lazy" decoding="async" />
        <img src="<?php echo CAISSA_IMG; ?>/logos/ushuaia-travel.png" alt="Latitud Ushuaia Travel" width="220" height="108" loading="lazy" decoding="async" />
        <img src="<?php echo CAISSA_IMG; ?>/logos/aislatek.png" alt="Aislatek" width="220" height="108" loading="lazy" decoding="async" />
      </div>
    </div>
  </div>
</section>

<!-- ===================== RUBROS DE LA REGIÓN ===================== -->
<section class="bg-grad" id="rubros">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Rubros que trabajamos en la región</h2>
      <p>La economía del Alto Valle no se parece a la del resto del país. Estos son los sectores donde ya tenemos cuentas andando.</p>
    </div>
    <!-- "Energía y servicios petroleros" ya no se explica acá: ahora tiene su propia sección
         con H2 (#vaca-muerta), como pidió la SEO en el Update 04. Queda esta tarjeta como
         puerta de entrada, con una sola línea y el enlace, para no repetir el texto de allá
         y para que la grilla no quede con una tarjeta huérfana en la última fila. -->
    <div class="ind-grid">
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21V8l6-4v17M9 21V11l6-3v13M15 21V12l6-2.5V21" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Energía y servicios petroleros</h3>
          <p>El rubro que mueve la región y el que menos se parece a todos los demás. Le dedicamos una sección aparte.</p>
          <a href="#vaca-muerta">Cómo trabajamos Vaca Muerta</a>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V8l7-5 7 5v13" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 21v-6h4v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Construcción e inmobiliario</h3>
          <p>El crecimiento demográfico de Neuquén sostiene la demanda de unidades en pozo y alquileres. El desafío nunca es el volumen de consultas, es filtrar hasta el comprador que realmente califica.</p>
          <a href="/industrias/constructoras/">Ver casos de construcción</a>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9.5 12 4l9 5.5V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1z" stroke-linejoin="round"/><path d="M8 21v-6h8v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Comercio y retail del valle</h3>
          <p>Negocios con local a la calle que compiten contra el e-commerce nacional. Campañas por radio de cobertura, medición de visitas a la tienda y presencia en el momento exacto de la búsqueda.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14" stroke-linecap="round"/><rect x="3" y="3" width="18" height="18" rx="4.5"/></svg></span>
        <div>
          <h3>Salud</h3>
          <p>Clínicas, centros médicos y consultorios de la región. Google y Meta tienen políticas particulares con el rubro, y lo que se mide es el turno que se cumple, no el formulario enviado.</p>
          <a href="/industrias/salud/">Ver casos de salud</a>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 20h18M5 20l3-9 4 5 3-8 4 12" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Turismo patagónico</h3>
          <p>Operadores y agencias con una estacionalidad brutal: la venta se define en una ventana corta y hay que estar comprando demanda meses antes de que empiece la temporada.</p>
          <a href="/industrias/turismo/">Ver casos de turismo</a>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6h15l-1.5 9h-12z" stroke-linejoin="round"/><path d="M6 6L5 3H2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="20" r="1.3"/><circle cx="18" cy="20" r="1.3"/></svg></span>
        <div>
          <h3>E-commerce</h3>
          <p>Tiendas de la región que venden a todo el país. Acá el juego deja de ser local: se compite contra los grandes y todo pasa por el feed de productos y el retorno por categoría.</p>
          <a href="/industrias/ecommerce/">Ver casos de e-commerce</a>
        </div>
      </div>
    </div>
    <div class="sec-cta reveal" style="margin-top:34px">
      <a href="/industrias/" class="btn btn-ghost-d">Mirá cómo trabajamos tu industria
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<!-- ===================== PRENSA ===================== -->
<section class="sec-white" id="prensa">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Hablaron de nosotros</h2>
    </div>
    <div class="press">
      <article class="press-c reveal">
        <div class="press-logo"><span class="txt">Canal 10 · Río Negro</span></div>
        <p>“Desde Neuquén al mundo: Caissa, la agencia de marketing seleccionada por Google que redefine el marketing digital argentino.”</p>
        <a href="https://diario10.com.ar/desde-neuquen-al-mundo-caissa-la-agencia-de-marketing-seleccionada-por-google-que-redefine-el-marketing-digital-argentino/" target="_blank" rel="noopener">Leer la nota</a>
      </article>
      <!-- PENDIENTE: cuando estén los links de las notas de Río Negro e Infobae, agregarlos acá
           igual que el de Canal 10 (siguen listados como pendientes en §9 de CLAUDE.md). -->
      <article class="press-c reveal">
        <div class="press-logo"><img src="<?php echo CAISSA_IMG; ?>/press-rionegro.svg" alt="Diario Río Negro" width="270" height="59" loading="lazy" decoding="async" /></div>
        <p>El diario de mayor alcance de la Patagonia norte cubrió el crecimiento de la agencia y su llegada a mercados internacionales.</p>
      </article>
      <article class="press-c reveal">
        <div class="press-logo"><img src="<?php echo CAISSA_IMG; ?>/press-infobae.svg" alt="Infobae" width="249" height="59" loading="lazy" decoding="async" /></div>
        <p>Cobertura nacional sobre el modelo de trabajo de Caissa y su certificación dentro del programa de partners de Google.</p>
      </article>
    </div>
  </div>
</section>

<!-- ===================== COBERTURA ===================== -->
<section class="sec-soft" id="cobertura">
  <div class="wrap">
    <!-- H2 largo a propósito (pedido de la SEO): nombra las cinco localidades que son la zona
         de servicio declarada, y son las mismas que van en areaServed del JSON-LD. Por el largo
         se le baja el cuerpo a --h2-sub, el mismo tamaño que usa el H2 del bloque de oficina. -->
    <div class="head-left head-cov reveal">
      <h2>Zonas donde trabajamos: Neuquén, Plottier, Centenario, Cipolletti y General Roca</h2>
      <p>Si tu empresa está en la región, llegamos. Para reuniones presenciales nos movemos por la zona sin cargo.</p>
    </div>
    <div class="cov">
      <div class="cov-c reveal"><b>Neuquén Capital</b><span>Donde está nuestra oficina.</span></div>
      <div class="cov-c reveal"><b>Plottier</b><span>A 20 minutos por la Ruta 22.</span></div>
      <div class="cov-c reveal"><b>Centenario</b><span>Zona de fuerte crecimiento comercial.</span></div>
      <div class="cov-c reveal"><b>Cipolletti</b><span>Cruzando el puente, Río Negro.</span></div>
      <div class="cov-c reveal"><b>General Roca</b><span>El otro polo comercial del valle.</span></div>
      <div class="cov-c reveal"><b>Cinco Saltos y Cinco Esquinas</b><span>Y el resto del Alto Valle rionegrino.</span></div>
      <div class="cov-c reveal"><b>Añelo y Vaca Muerta</b><span>Empresas de servicios petroleros y su cadena.</span></div>
      <div class="cov-c reveal"><b>Resto de la Patagonia</b><span>Bariloche, Ushuaia, El Calafate y Comodoro.</span></div>
    </div>
    <p class="cov-note reveal">¿Estás fuera de la región? También gestionamos cuentas en <b>España, México, Colombia, Chile y Perú</b>. Mirá <a href="https://caissa.digital/agencia-marketing-digital-argentina/" style="color:var(--violet);font-weight:700;text-decoration:underline;text-underline-offset:3px">marketing digital en Argentina</a>.</p>
  </div>
</section>

<!-- ===================== CONSULTORÍA ===================== -->
<section class="bg-grad" id="consultoria">
  <div class="wrap">
    <div class="cons reveal">
      <div class="cons-copy">
        <h2>Tomemos un café y miremos tus números</h2>
        <p class="intro">Quince minutos, en nuestra oficina de Neuquén Capital, en tu empresa o por videollamada. Vos elegís. Abrimos tu cuenta publicitaria y la miramos juntos.</p>
        <ol>
          <li><span>Te mostramos <b>en qué se está yendo la inversión</b> y qué campañas no devuelven nada.</span></li>
          <li><span>Vemos si <b>estás apareciendo en las búsquedas de la región</b> o si se las está llevando tu competencia.</span></li>
          <li><span>Salís con una <b>lista de arreglos concretos</b>, la apliques con nosotros o con tu equipo.</span></li>
        </ol>
        <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        <p class="cons-note">Trabajamos con empresas que invierten más de <b>USD 3.000 por mes</b> en marketing digital. Si tu cuenta está bien y no tenemos nada para aportar, te lo decimos en la misma reunión.</p>
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
     Abierta, sin acordeón (§4 de CLAUDE.md). Las 9 preguntas son EXACTAMENTE las del JSON-LD.
     Están elegidas por intención LOCAL. Se sacó la de Vaca Muerta porque ahora tiene su propia
     sección con H2, y se sumaron las cuatro que pidió la SEO en el Update 04.
     ATENCIÓN CON LA ÚLTIMA: la SEO la había escrito como "¿Qué significa ser Google Partner
     Premier?" en presente. NO se puede: Premier fue en 2025 y este año no se renovó (§10.b de
     CLAUDE.md). Está reescrita como "Google Partner" con Premier en pasado y con el año. -->
<section class="sec-white" id="faq">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Preguntas frecuentes sobre agencias de marketing en Neuquén</h2>
    </div>
    <div class="faqo-grid">
      <details class="faqo reveal">
        <summary><h3>¿Dónde queda la oficina de Caissa en Neuquén?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>En <b>Teniente de Navío Eliana María Krawczyk 619, Edificio Zafiro, Piso 1° C</b>, Neuquén Capital. Atendemos de <b>lunes a viernes, de 8 a 17</b>, y podés llamarnos al <a href="tel:+5492994695443">+54 9 299 469-5443</a>.</p>
          <p>Es una oficina propia con equipo trabajando ahí todos los días, no una dirección de correspondencia.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Puedo ir a la oficina a reunirme con el equipo?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Sí. Podés venir a la oficina de Neuquén Capital o vamos nosotros a tu empresa si estás en el Alto Valle. También trabajamos por videollamada si te resulta más cómodo.</p>
          <p>La consultoría inicial de 15 minutos es gratuita en cualquiera de las tres formas.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Trabajan solo en Neuquén Capital o también en el Alto Valle?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>En todo el Alto Valle: Neuquén Capital, Plottier, Centenario, Cipolletti, General Roca, Cinco Saltos y las localidades de la zona. También en Añelo y en el resto de la Patagonia.</p>
          <p>Para reuniones presenciales nos movemos por la región sin costo adicional.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cuánto cuesta contratar una agencia de marketing digital en Neuquén?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>El honorario de la agencia y la inversión publicitaria son dos números distintos: uno lo cobra la agencia y el otro va directo a Google o Meta. Conviene no mezclarlos nunca.</p>
          <p>Nosotros trabajamos con un honorario mensual fijo según el alcance del proyecto y <b>sin contratos de permanencia</b>, con empresas que invierten más de USD 3.000 por mes en marketing digital. El número exacto sale de mirar tu caso en la consultoría.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Qué inversión mínima necesito para empezar?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Trabajamos con <b>empresas que invierten más de USD 3.000 por mes en marketing digital</b>. Es el mínimo, y no es un número comercial: por debajo de eso las campañas no juntan las conversiones que Google y Meta necesitan para optimizar, y la cuenta se pasa la vida reiniciando el aprendizaje.</p>
          <p>Si tu presupuesto todavía está por debajo, te lo decimos en la primera llamada en vez de venderte algo que no va a funcionar.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿En cuánto tiempo se ven resultados?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Los anuncios pueden empezar a mostrarse apenas se aprueban, pero la lectura confiable llega después: cada campaña necesita acumular conversiones antes de estabilizarse, y durante esa etapa los números se mueven mucho.</p>
          <p>En general, entre la tercera y la sexta semana ya se puede decidir con datos. Lo estructural, como la página donde cae el clic o qué pasa con la consulta después, tarda un poco más y es lo que más mueve la aguja.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Qué diferencia hay entre una agencia de publicidad y una agencia de performance marketing?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Una agencia de publicidad tradicional trabaja sobre la marca: la pieza, el mensaje, la presencia. El resultado se mide en alcance y en recordación.</p>
          <p>Una agencia de performance arranca del otro lado, de la venta. Cada peso invertido tiene que poder rastrearse hasta una consulta, un turno o una compra. <b>Caissa es lo segundo</b>: trabajamos la marca cuando ayuda a vender, no como un fin.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Qué significa ser Google Partner?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Google Partner es la certificación que Google les da a las agencias que sostienen un volumen de inversión gestionada, un rendimiento mínimo en las cuentas y el equipo con las certificaciones al día. Se revisa todos los años y se puede perder.</p>
          <p>Caissa es <b>Google Partner</b>, y en <b>2025 fue seleccionada dentro del programa Premier</b>, el escalón que Google reserva a un grupo reducido de agencias por país. También somos <b>Meta Business Partner</b>.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Por qué contratar una agencia de Neuquén y no una de Buenos Aires?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Por dos cosas concretas. La primera es que conocemos el mercado: la estacionalidad del Alto Valle, cómo se mueve la demanda alrededor de Vaca Muerta y qué busca la gente de la región, que no es lo mismo que busca alguien en Buenos Aires. La segunda es que podemos sentarnos en tu oficina cuando hace falta.</p>
          <p>Dicho esto, gestionamos cuentas en España, México y toda Latinoamérica: <b>la ventaja es tener las dos cosas, cercanía y escala</b>.</p>
        </div>
      </details>
    </div>

    <!-- Bloque chico de empleo, pedido por la SEO. Es señal local de las buenas: una agencia que
         contrata en la ciudad es una agencia que está en la ciudad. Y captura las búsquedas de
         "trabajo marketing digital neuquén", que hoy no las toma ninguna página del sitio. -->
    <div class="careers reveal">
      <div class="careers-t">
        <b>¿Buscás trabajar en marketing digital en Neuquén?</b>
        <span>El equipo se arma acá, en la oficina de Neuquén Capital. Cuando abrimos una búsqueda, la publicamos en nuestra página de empleo.</span>
      </div>
      <a href="/carreras/" class="btn btn-ghost-d">Ver búsquedas abiertas
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<!-- ===================== CTA FINAL ===================== -->
<section class="final bg-grad" id="cta">
  <div class="wrap">
    <div class="cta-ga reveal">
      <h2>¿Charlamos?</h2>
      <p>Estamos en Neuquén Capital y atendemos todo el Alto Valle. Quince minutos con tu cuenta en pantalla y te decimos qué cambiaríamos primero.</p>
      <a href="/reservar-consultoria/" class="btn btn-light">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <div class="rea">Presencial o por videollamada · Sin contratos de permanencia</div>
    </div>
  </div>
</section>


<!-- ===================== FOOTER ===================== -->
</main>

<?php
get_footer();