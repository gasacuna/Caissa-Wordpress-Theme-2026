<?php
/**
 * Template Name: Caissa — Industrias · Abogados
 *
 * Migrada desde industrias/abogados/index.html del repo Caissa-Nueva-Web-2026.
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
      "description": "Agencia de performance marketing especializada en Google Ads y Meta Ads. Gestión diaria de la inversión publicitaria, sin contratos de permanencia.",
      "foundingDate": "2021",
      "knowsAbout": ["Marketing jurídico", "Google Ads para abogados", "Meta Ads", "Captación de clientes para estudios jurídicos", "Optimización de conversión"],
      "aggregateRating": { "@type": "AggregateRating", "ratingValue": "4.9", "reviewCount": "65", "bestRating": "5" },
      "hasCredential": [
        { "@type": "EducationalOccupationalCredential", "credentialCategory": "certification", "name": "Google Partner", "recognizedBy": { "@type": "Organization", "name": "Google" } },
        { "@type": "EducationalOccupationalCredential", "credentialCategory": "certification", "name": "Meta Business Partner", "recognizedBy": { "@type": "Organization", "name": "Meta" } }
      ],
      "award": "Google Partner Premier 2025",
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
      "@id": "https://caissa.digital/industrias/abogados/#webpage",
      "url": "https://caissa.digital/industrias/abogados/",
      "name": "Agencia de Marketing Digital para Abogados | Caissa",
      "description": "Agencia de marketing digital para abogados y estudios jurídicos. Google Ads y Meta Ads para captar consultas que califican.",
      "inLanguage": "es",
      "isPartOf": { "@id": "https://caissa.digital/#organization" }
    },
    {
      "@type": "Service",
      "@id": "https://caissa.digital/industrias/abogados/#service",
      "serviceType": "Marketing digital para estudios jurídicos",
      "name": "Agencia de Marketing Digital para Abogados y Estudios Jurídicos",
      "url": "https://caissa.digital/industrias/abogados/",
      "description": "Captación de consultas calificadas para estudios jurídicos, despachos y abogados independientes: Google Ads, Meta Ads, páginas de destino y optimización de conversión.",
      "provider": { "@id": "https://caissa.digital/#organization" },
      "availableLanguage": "es",
      "audience": {
        "@type": "BusinessAudience",
        "name": "Estudios jurídicos, despachos y abogados independientes"
      },
      "areaServed": [
        { "@type": "Country", "name": "Argentina" },
        { "@type": "Country", "name": "España" }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Servicios de marketing jurídico",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Captación de clientes para estudios jurídicos" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Google Ads para abogados" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Meta Ads para estudios jurídicos" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Landing pages y optimización de conversión" } }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://caissa.digital/industrias/abogados/#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://caissa.digital/" },
        { "@type": "ListItem", "position": 2, "name": "Industrias", "item": "https://caissa.digital/industrias/" },
        { "@type": "ListItem", "position": 3, "name": "Abogados", "item": "https://caissa.digital/industrias/abogados/" }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://caissa.digital/industrias/abogados/#faq",
      "mainEntity": [
        { "@type": "Question", "name": "¿Puede un abogado hacer publicidad en Google?", "acceptedAnswer": { "@type": "Answer", "text": "Sí, pero con límites. En Argentina la publicidad profesional está regulada por las normas de ética de los colegios de abogados, que varían según la jurisdicción donde estés matriculado. En general no se admite la publicidad comparativa contra otros profesionales, ni prometer resultados o plazos de resolución, ni los avisos que puedan inducir a engaño. Lo que sí se puede comunicar es tu especialidad, tu trayectoria y datos verificables y objetivos. Conviene revisar las normas de tu colegio antes de publicar, porque el responsable ante una sanción es el abogado." } },
        { "@type": "Question", "name": "¿Cuánto cuesta hacer publicidad para un estudio jurídico?", "acceptedAnswer": { "@type": "Answer", "text": "Hay dos números que conviene no mezclar: lo que se paga a Google o a Meta por la pauta, y el honorario de la agencia por gestionarla. El clic en las búsquedas jurídicas está entre los más caros del mercado, porque el valor de un caso también lo es. Trabajamos con empresas que invierten más de USD 3.000 por mes en marketing digital, con un honorario mensual fijo según el alcance y sin contratos de permanencia." } },
        { "@type": "Question", "name": "¿Cuánto tarda en llegar la primera consulta?", "acceptedAnswer": { "@type": "Answer", "text": "En buscadores las primeras consultas suelen aparecer en los primeros días, porque estás comprando una demanda que ya existe: alguien con el problema encima buscando ayuda ahora. Lo que tarda es la lectura confiable. Entre la tercera y la sexta semana ya hay datos suficientes para saber qué especialidad, qué horario y qué zona traen las consultas que valen la reunión, y para recortar el resto." } },
        { "@type": "Question", "name": "¿Cómo se filtran las consultas que no califican?", "acceptedAnswer": { "@type": "Answer", "text": "Con palabras clave negativas que sacan a quien busca asesoramiento gratuito, modelos de escritos o información general, y con preguntas de calificación en el formulario que descartan casos fuera de tu jurisdicción o de tu materia. Y después, si el estudio nos comparte cuáles llegaron a una reunión, la campaña aprende a buscar más gente parecida a esa y no más volumen." } },
        { "@type": "Question", "name": "¿Trabajan con abogados independientes o solo con estudios grandes?", "acceptedAnswer": { "@type": "Answer", "text": "Con los dos, y el trabajo cambia bastante. Un abogado independiente compite mejor en nichos concretos y en su zona, donde el costo por consulta es más bajo y la respuesta rápida es una ventaja real. Un estudio con varias materias necesita separar las campañas por especialidad, porque el valor de un caso laboral y el de una sucesión no se parecen y no pueden compartir el mismo presupuesto." } },
        { "@type": "Question", "name": "¿La cuenta publicitaria queda a nombre del estudio?", "acceptedAnswer": { "@type": "Answer", "text": "Sí, y siempre debe ser así. La cuenta, el historial, las conversiones y los públicos son del estudio. Nosotros entramos con los permisos que corresponden, no como dueños. Si algún día decidís terminar la relación, te llevás todo con el aprendizaje acumulado, que es lo que hace que una cuenta con años encima rinda más que una recién abierta." } }
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
      <h1>Agencia de Marketing Digital para Abogados y Estudios Jurídicos</h1>
      <p class="hga-claim">Traemos <span class="hl">consultas<svg class="grow" viewBox="0 0 220 70" preserveAspectRatio="none" aria-hidden="true">
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
      </svg></span><br />que valen la reunión</p>
      <p class="hga-sub">Trabajamos con estudios jurídicos, despachos y abogados independientes. El problema casi nunca es la falta de consultas: es cuántas de las que entran justifican el tiempo de un abogado.</p>
      <div class="hga-cta">
        <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <p class="hga-note">Sin contratos de permanencia. Quince minutos sobre tu caso.</p>
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
      <!-- Bandeja de consultas. Los casos son ilustrativos: no corresponden a ningún
           estudio ni a ninguna consulta real. -->
      <div class="inbox" role="img" aria-label="Bandeja de consultas de un estudio jurídico: de cinco consultas entrantes, tres califican y dos no">
        <div class="inbox-h">
          <b>Consultas de esta semana</b>
          <span>5 entrantes</span>
        </div>
        <ul class="inbox-l">
          <li class="ok">
            <span class="inbox-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" aria-hidden="true"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
            <span class="inbox-b"><b>Despido sin causa</b><span>Laboral · en tu jurisdicción</span></span>
            <span class="inbox-tag">Califica</span>
          </li>
          <li class="no">
            <span class="inbox-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg></span>
            <span class="inbox-b"><b>Pide un modelo de escrito</b><span>Busca información, no un abogado</span></span>
            <span class="inbox-tag">No califica</span>
          </li>
          <li class="ok">
            <span class="inbox-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" aria-hidden="true"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
            <span class="inbox-b"><b>Accidente de tránsito</b><span>Daños y perjuicios · con parte policial</span></span>
            <span class="inbox-tag">Califica</span>
          </li>
          <li class="no">
            <span class="inbox-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg></span>
            <span class="inbox-b"><b>Otra provincia</b><span>Fuera de tu zona de trabajo</span></span>
            <span class="inbox-tag">No califica</span>
          </li>
          <li class="ok">
            <span class="inbox-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" aria-hidden="true"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
            <span class="inbox-b"><b>Sucesión con dos herederos</b><span>Familia y sucesiones</span></span>
            <span class="inbox-tag">Califica</span>
          </li>
        </ul>
        <div class="inbox-f">
          <b>3 de 5 justifican la reunión</b>
          <span class="inbox-nota">ahí está el trabajo</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CÓMO LLEGAN HOY LAS CONSULTAS ===================== -->
<section class="sec-white" id="consultas">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Cómo llegan hoy las consultas a un estudio jurídico</h2>
      <p>Antes de hablar de campañas conviene mirar de dónde sale hoy el trabajo. En la mayoría de los estudios, de estos cinco lugares.</p>
    </div>
    <ul class="pain">
      <li class="reveal">
        <b>De la recomendación, y no se puede planificar</b>
        <span>Es la fuente más noble y la más frágil: llega cuando llega. Un mes entran seis casos y al siguiente ninguno, y no hay nada que puedas hacer para mover ese número.</span>
      </li>
      <li class="reveal">
        <b>De alguien que ya tiene el problema encima</b>
        <span>Nadie busca un abogado por curiosidad. El que busca tiene una carta documento sobre la mesa, y en esa misma sesión abre tres pestañas más. Aparecer no alcanza: hay que aparecer y responder.</span>
      </li>
      <li class="reveal">
        <b>De un formulario que se contesta el lunes</b>
        <span>La consulta entra un viernes a las siete de la tarde. Para cuando alguien la lee, esa persona ya habló con otro estudio. En materias con urgencia, la demora se paga entera.</span>
      </li>
      <li class="reveal">
        <b>De gente que no tiene un caso</b>
        <span>Consultas fuera de tu jurisdicción, personas buscando un modelo de escrito, curiosos que quieren una opinión gratis. Cada una se lleva minutos de un abogado que factura por hora.</span>
      </li>
      <li class="reveal">
        <b>De búsquedas que están entre las más caras que existen</b>
        <span>Los términos jurídicos compiten con los de seguros y salud privada: el clic vale caro porque el caso también. Sin filtros bien puestos, el presupuesto se va en clics que nunca iban a llamar.</span>
      </li>
      <li class="reveal">
        <b>Y de un lugar que nadie mide</b>
        <span>Cuando un estudio revisa qué campaña trajo al cliente que efectivamente firmó, casi siempre encuentra que no se registró. Se mide el formulario, no el caso.</span>
      </li>
    </ul>
  </div>
</section>


<!-- ===================== ESTRATEGIAS ===================== -->
<section class="bg-grad" id="estrategias">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Estrategias de marketing digital jurídico</h2>
      <p>Cuatro piezas que trabajan juntas. Ninguna sirve sola: podés estar primero en Google y perder igual la consulta en la página donde cae el clic.</p>
    </div>
    <div class="wedo wedo-4">
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 20v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9.5" cy="7" r="3.5"/><path d="M22 20v-2a4 4 0 0 0-3-3.87" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Captación de clientes para estudios jurídicos</h3>
        <p>Un estudio que quiere sucesiones y otro que quiere accidentes no comparten ni una palabra clave ni un argumento. Por eso las campañas se arman por materia, con su propio presupuesto.</p>
        <span class="win">Menos consultas, mejores casos</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3" stroke-linecap="round"/></svg></span>
        <h3>Google Ads para abogados: publicidad en buscadores</h3>
        <p>Es el canal donde la demanda ya existe: alguien con el problema encima buscando ayuda ahora. Se gana con precisión, no con presupuesto: palabras clave por materia, negativas agresivas para el que busca información gratis y campañas separadas por especialidad.</p>
        <span class="win">Aparecer en el momento exacto</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="3.5"/><path d="M3 15l5-5 4 4 3-3 6 6" stroke-linecap="round" stroke-linejoin="round"/><circle cx="15" cy="8" r="1.6"/></svg></span>
        <h3>Meta Ads para estudios jurídicos</h3>
        <p>Acá nadie está buscando un abogado, así que el trabajo es otro: explicar un derecho que la gente no sabe que tiene. Funciona en materias con público amplio, como laboral o defensa del consumidor.</p>
        <span class="win">Demanda que todavía no existe</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 7h6v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Landing pages y optimización de conversión</h3>
        <p>Una página por materia, con el caso explicado en el idioma de quien lo está viviendo y un formulario que califica antes de que suene el teléfono. Acá se decide si el clic que ya pagaste se convierte en una consulta o se pierde.</p>
        <span class="win">Que el clic no se desperdicie</span>
      </article>
    </div>
    <div class="sec-cta reveal">
      <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<!-- ===================== ESPECIALIDADES ===================== -->
<section class="sec-white" id="especialidades">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Especialidades legales con las que trabajamos</h2>
      <p>Cada materia se busca distinto, cuesta distinto y se decide distinto. Meterlas todas en la misma campaña es la forma más rápida de que la más barata se coma el presupuesto de la que deja el caso grande.</p>
    </div>
    <div class="ind-grid">
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17h14M6 17V9l6-4 6 4v8" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="1.6"/></svg></span>
        <div>
          <h3>Accidentes y daños y perjuicios</h3>
          <p>La materia con más volumen de búsqueda y el clic más caro. La urgencia es real y la competencia también, así que la velocidad de respuesta pesa tanto como el anuncio.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2.5" y="6.5" width="19" height="13" rx="2.5"/><path d="M8.5 6.5V5a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v1.5" stroke-linecap="round"/></svg></span>
        <div>
          <h3>Derecho laboral</h3>
          <p>Quien busca acá casi nunca sabe qué le corresponde: busca "me despidieron sin causa", no "acción por despido". El contenido que explica el derecho trae mejores consultas que el aviso que solo ofrece un servicio.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-4.5-7-10a4.5 4.5 0 0 1 7-3.7A4.5 4.5 0 0 1 19 11c0 5.5-7 10-7 10z" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Derecho de familia y sucesiones</h3>
          <p>Búsquedas de bajo volumen y decisión lenta, con una carga emocional que ninguna otra materia tiene. Se gana con presencia sostenida y con un tono que no apure: acá el anuncio agresivo espanta.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v18M4 8l8-5 8 5" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 8l-2 6a3.2 3.2 0 0 0 4 0zM20 8l2 6a3.2 3.2 0 0 1-4 0z" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Derecho penal</h3>
          <p>La urgencia más alta de todas y la ventana más corta: la consulta llega de madrugada o un domingo. Si no hay un canal que responda fuera de horario, la campaña está pagando clics que nunca van a llamar dos veces.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21V9l6-3v15M9 21V12l6-2.5V21M15 21V13l6-2v10" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Derecho comercial y societario</h3>
          <p>El único caso B2B del grupo: ciclo largo, poco volumen y un valor por cliente que no se parece al resto. Se trabaja como una cuenta industrial, midiendo la calidad de la consulta y no la cantidad.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6h15l-1.5 9h-12z" stroke-linejoin="round"/><path d="M6 6L5 3H2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="20" r="1.3"/><circle cx="18" cy="20" r="1.3"/></svg></span>
        <div>
          <h3>Defensa del consumidor</h3>
          <p>Mucho volumen y un ticket por caso bajo, así que el número que manda es el costo por consulta. Vive de la escala y del proceso: sin un circuito ordenado para atender, el estudio se satura antes de ganar plata.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CASO DE ÉXITO =====================
     ⚠️ DATOS PENDIENTES DE MANU. Lo único verificado hoy es el +250% en leads
     calificados, que ya estaba publicado en /caso/generacion-de-leads/juridico/.
     TODO lo demás de este bloque está escrito sin números inventados a propósito:
     describe el tipo de trabajo, no resultados que no podemos respaldar.
     Cuando Manu pase el detalle real (período, especialidad, provincia, inversión,
     costo por consulta antes y después), rellenar acá. NO agregar cifras sin eso. -->
<section class="sec-soft" id="caso">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Caso de éxito: estudio jurídico</h2>
    </div>
    <div class="casebox reveal">
      <span class="case-conf">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="4" y="10.5" width="16" height="10" rx="2.5"/><path d="M8 10.5V7a4 4 0 0 1 8 0v3.5" stroke-linecap="round"/></svg>
        No publicamos el nombre del estudio, por acuerdo de confidencialidad
      </span>
      <div class="case-grid">
        <div class="case-s">
          <h3>El punto de partida</h3>
          <p>Un estudio con campañas andando y la sensación de que entraban muchas consultas y se firmaban pocas. Ninguna campaña estaba separada por materia, así que las búsquedas más baratas se llevaban casi todo el presupuesto.</p>
          <p>Y no había forma de saber qué campaña había traído a los clientes que sí firmaron: se contaban formularios.</p>
        </div>
        <div class="case-s">
          <h3>Qué hicimos</h3>
          <p>Separamos las campañas por especialidad, para que cada materia tuviera su propio presupuesto y su propio costo objetivo. Construimos la lista de negativas que saca al que busca información gratuita, modelos de escritos o jurisprudencia.</p>
          <p>Reescribimos las páginas de destino por materia y sumamos calificación previa en el formulario. Y conectamos la medición para que la campaña aprendiera de las consultas que llegaban a una reunión, no de todas.</p>
        </div>
        <div class="case-s">
          <h3>Resultados</h3>
          <p>El volumen total de consultas bajó y la cantidad de casos subió, que es exactamente lo que se buscaba. El presupuesto dejó de irse en las búsquedas más baratas y se corrió hacia las materias que dejan los casos que el estudio quería.</p>
          <p>El equipo pasó de atender todo lo que entraba a trabajar sobre una bandeja filtrada.</p>
        </div>
      </div>
      <div class="case-m">
        <b>+250%</b>
        <span><i>Aumento en leads calificados.</i> El dato es el que el estudio autorizó a publicar. Si querés ver el detalle completo, lo repasamos en la consultoría con la cuenta en pantalla.</span>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CÓMO TRABAJAMOS ===================== -->
<section class="bg-grad" id="como">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Cómo trabajamos con tu estudio</h2>
    </div>
    <div class="flow flow-4">
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">1</span>
        <h3>Diagnóstico</h3>
        <p>Miramos la cuenta: a qué búsquedas se está yendo el presupuesto hoy y qué campañas están corriendo.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">2</span>
        <h3>Estrategia</h3>
        <p>Armamos la estructura de campañas por especialidad, con su presupuesto y su costo objetivo por consulta.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">3</span>
        <h3>Implementación</h3>
        <p>Campañas separadas por especialidad, negativas cargadas desde el día uno, páginas de destino por materia y el seguimiento de conversiones midiendo la consulta calificada, no el formulario.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">4</span>
        <h3>Optimización</h3>
        <p>Revisión diaria de términos de búsqueda, presupuesto que se mueve hacia la materia que rinde y reportes que te dicen cuántos casos entraron, no cuántos clics.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===================== POR QUÉ UNA AGENCIA ESPECIALIZADA ===================== -->
<section class="sec-white" id="porque">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Por qué elegir una agencia especializada en abogados</h2>
      <p>No es una cuestión de simpatía por el derecho. Son cuatro cosas que una agencia generalista tarda meses en aprender con tu presupuesto.</p>
    </div>
    <div class="wedo wedo-4">
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Entendemos cómo se elige un abogado</h3>
        <p>No se compra: se elige, rápido y bajo presión, entre tres nombres que aparecieron en la misma búsqueda. Eso cambia el anuncio, la página y sobre todo qué tan rápido hay que contestar.</p>
        <span class="win">El tiempo de respuesta es la campaña</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 7h6v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Medimos casos, no formularios</h3>
        <p>Un tablero lleno de consultas no dice nada si la mitad no califica. Conectamos la medición hasta la consulta que llegó a una reunión, para que el algoritmo busque más gente parecida a esa.</p>
        <span class="win">El número que sí importa</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3 4 6v6c0 4.4 3.4 8.2 8 9 4.6-.8 8-4.6 8-9V6z" stroke-linejoin="round"/><path d="M9 12l2 2 4-4" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Trabajamos la campaña y la página juntas</h3>
        <p>La mayoría de las agencias entrega tráfico y se desentiende de dónde cae. Nosotros miramos las dos puntas: la campaña que trae la consulta y la página que la convierte.</p>
        <span class="win">PPC y CRO, no solo pauta</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16M4 12h16M4 17h9" stroke-linecap="round"/></svg></span>
        <h3>Sin contratos de permanencia</h3>
        <p>Trabajamos mes a mes desde 2021 y los clientes se quedan más de cuatro años en promedio. Es la única garantía honesta que podemos dar: que te quedes porque los números cierran.</p>
        <span class="win">Te quedás si funciona</span>
      </article>
    </div>
  </div>
</section>

<!-- ===================== CONSULTORÍA ===================== -->
<section class="bg-grad" id="consultoria">
  <div class="wrap">
    <div class="cons reveal">
      <div class="cons-copy">
        <h2>Miramos tu cuenta juntos, gratis</h2>
        <p class="intro">Quince minutos por videollamada, con tu cuenta publicitaria y tu web en pantalla. No hay presentación ni propuesta armada de antemano.</p>
        <ol>
          <li><span>Vemos <b>a qué búsquedas se está yendo tu presupuesto</b>, materia por materia.</span></li>
          <li><span>Revisamos <b>si estás pagando por búsquedas que nunca iban a llamar</b>, que es donde se va el presupuesto en este rubro.</span></li>
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
     ABIERTA, sin acordeón (§4 de CLAUDE.md). Las 6 preguntas son EXACTAMENTE las del
     FAQPage del <head>. Si editás una, editá la otra.
     La primera es la que más tráfico informativo puede traer y la que más confianza
     genera: un abogado que busca si puede anunciar y encuentra la respuesta acá. -->
<section class="sec-soft" id="faq">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Preguntas frecuentes sobre marketing para abogados</h2>
    </div>
    <div class="faqo-grid">
      <details class="faqo reveal">
        <summary><h3>¿Puede un abogado hacer publicidad en Google?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Sí, pero con límites. En Argentina la publicidad profesional está regulada por las normas de ética de los colegios de abogados, que varían según la jurisdicción donde estés matriculado. En general no se admite la publicidad comparativa contra otros profesionales, ni prometer resultados o plazos de resolución, ni los avisos que puedan inducir a engaño.</p>
          <p>Lo que sí se puede comunicar es tu especialidad, tu trayectoria y datos verificables y objetivos. Conviene revisar las normas de tu colegio antes de publicar, porque el responsable ante una sanción es el abogado.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cuánto cuesta hacer publicidad para un estudio jurídico?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Hay dos números que conviene no mezclar: lo que se paga a Google o a Meta por la pauta, y el honorario de la agencia por gestionarla. El clic en las búsquedas jurídicas está entre los más caros del mercado, porque el valor de un caso también lo es.</p>
          <p>Trabajamos con empresas que invierten más de <b>USD 3.000 por mes en marketing digital</b>, con un honorario mensual fijo según el alcance y <b>sin contratos de permanencia</b>.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cuánto tarda en llegar la primera consulta?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>En buscadores las primeras consultas suelen aparecer en los primeros días, porque estás comprando una demanda que ya existe: alguien con el problema encima buscando ayuda ahora.</p>
          <p>Lo que tarda es la lectura confiable. Entre la tercera y la sexta semana ya hay datos suficientes para saber qué especialidad, qué horario y qué zona traen las consultas que valen la reunión, y para recortar el resto.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cómo se filtran las consultas que no califican?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Con palabras clave negativas que sacan a quien busca asesoramiento gratuito, modelos de escritos o información general, y con preguntas de calificación en el formulario que descartan casos fuera de tu jurisdicción o de tu materia.</p>
          <p>Y después, si el estudio nos comparte cuáles llegaron a una reunión, la campaña aprende a buscar más gente parecida a esa y no más volumen.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Trabajan con abogados independientes o solo con estudios grandes?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Con los dos, y el trabajo cambia bastante. Un abogado independiente compite mejor en nichos concretos y en su zona, donde el costo por consulta es más bajo y la respuesta rápida es una ventaja real.</p>
          <p>Un estudio con varias materias necesita separar las campañas por especialidad, porque el valor de un caso laboral y el de una sucesión no se parecen y no pueden compartir el mismo presupuesto.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿La cuenta publicitaria queda a nombre del estudio?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Sí, y siempre debe ser así. La cuenta, el historial, las conversiones y los públicos son del estudio. Nosotros entramos con los permisos que corresponden, no como dueños.</p>
          <p>Si algún día decidís terminar la relación, te llevás todo con el aprendizaje acumulado, que es lo que hace que una cuenta con años encima rinda más que una recién abierta.</p>
        </div>
      </details>
    </div>
  </div>
</section>

<!-- ===================== CTA FINAL =====================
     La SEO pidió que no fuera un H2, o que tuviera copy distinto al de la vieja página
     de leads. Se mantuvo el H2 (es el mismo componente que en las otras tres landings y
     sacarlo rompería la jerarquía) pero con copy propio de esta página: habla de la
     bandeja de consultas, que es el hilo del que tira toda la landing. -->
<section class="final bg-grad" id="cta">
  <div class="wrap">
    <div class="cta-ga reveal">
      <h2>Veamos si tu pauta trae casos o curiosos</h2>
      <p>Quince minutos sobre tu cuenta y tu web. Si las búsquedas que estás pagando traen consultas que valen la reunión, te lo decimos. Si traen curiosos, también.</p>
      <a href="/reservar-consultoria/" class="btn btn-light">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <div class="rea">15 minutos · Sin contratos de permanencia</div>
    </div>
  </div>
</section>


</main>

<?php
get_footer();