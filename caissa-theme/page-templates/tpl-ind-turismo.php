<?php
/**
 * Template Name: Caissa — Industrias · Turismo
 *
 * Migrada desde industrias/turismo/index.html del repo Caissa-Nueva-Web-2026.
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
      "knowsAbout": [
        "Marketing turístico",
        "Google Ads para agencias de viajes",
        "Meta Ads",
        "Generación de reservas",
        "Optimización de conversión"
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "65",
        "bestRating": "5"
      },
      "hasCredential": [
        {
          "@type": "EducationalOccupationalCredential",
          "credentialCategory": "certification",
          "name": "Google Partner",
          "recognizedBy": {
            "@type": "Organization",
            "name": "Google"
          }
        },
        {
          "@type": "EducationalOccupationalCredential",
          "credentialCategory": "certification",
          "name": "Meta Business Partner",
          "recognizedBy": {
            "@type": "Organization",
            "name": "Meta"
          }
        }
      ],
      "award": "Google Partner Premier 2025",
      "founder": [
        {
          "@type": "Person",
          "name": "Manuel Ferrini",
          "jobTitle": "CEO y cofundador",
          "sameAs": "https://ar.linkedin.com/in/manuelferrini"
        },
        {
          "@type": "Person",
          "name": "Martín Pera",
          "jobTitle": "COO y cofundador"
        }
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
      "@id": "https://caissa.digital/industrias/turismo/#webpage",
      "url": "https://caissa.digital/industrias/turismo/",
      "name": "Agencia de Marketing Digital para Turismo | Caissa",
      "description": "Marketing digital para agencias de viajes, operadores y hotelería: Google Ads y Meta Ads siguiendo el calendario del viajero. Caso real: +85% en ventas.",
      "inLanguage": "es",
      "isPartOf": {
        "@id": "https://caissa.digital/#organization"
      }
    },
    {
      "@type": "Service",
      "@id": "https://caissa.digital/industrias/turismo/#service",
      "serviceType": "Marketing digital para turismo y agencias de viajes",
      "name": "Agencia de Marketing Digital para Turismo y Agencias de Viajes",
      "url": "https://caissa.digital/industrias/turismo/",
      "description": "Campañas de Google Ads y Meta Ads para agencias de viajes, operadores, hotelería y turismo receptivo, con la inversión siguiendo el calendario de demanda de cada producto: siembra, captura y remarketing hasta la reserva.",
      "provider": {
        "@id": "https://caissa.digital/#organization"
      },
      "availableLanguage": "es",
      "audience": {
        "@type": "BusinessAudience",
        "name": "Agencias de viajes, operadores turísticos y hotelería"
      },
      "areaServed": [
        {
          "@type": "Country",
          "name": "Argentina"
        },
        {
          "@type": "Country",
          "name": "España"
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://caissa.digital/industrias/turismo/#breadcrumb",
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
          "name": "Industrias",
          "item": "https://caissa.digital/industrias/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Turismo",
          "item": "https://caissa.digital/industrias/turismo/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://caissa.digital/industrias/turismo/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿Tiene sentido competir contra Booking y las OTAs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "De frente y por todo el mercado, no: nadie le gana esa subasta a una plataforma global. Pero no hace falta. Se compite donde la agencia es más fuerte: tu marca, tu destino, tu producto y tu base de viajeros. Cada reserva directa que recuperás vale doble: te ahorrás la comisión y el cliente queda en tu base, no en la de la plataforma."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cuándo hay que empezar a invertir para la temporada alta?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Antes de lo que la mayoría cree. Un viaje grande se decide con meses de anticipación, así que la siembra arranca cuando el viajero empieza a soñar, no cuando empieza a comprar. La ventana depende del producto: un crucero se decide con más anticipación que una escapada de fin de semana."
          }
        },
        {
          "@type": "Question",
          "name": "¿Google Ads o Meta Ads para una agencia de viajes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Los dos, en momentos distintos del mismo viajero. Meta siembra: instala el destino cuando todavía no hay búsqueda. Google captura: aparece cuando el sueño ya se volvió \"paquete a Bariloche fechas\". Usar uno solo es correr media carrera: sembrar sin capturar regala la venta, y capturar sin sembrar te deja pujando caro por viajeros que no te conocen."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cómo filtran a los que solo preguntan precio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Con el formulario trabajando de filtro: fechas tentativas, cantidad de pasajeros y rango de presupuesto. El que no sabe ni cuándo ni cuántos todavía no es una consulta, es una visita. Y midiendo qué campañas traen consultas que terminan en reserva, para que el algoritmo busque más viajeros parecidos a los que embarcan."
          }
        },
        {
          "@type": "Question",
          "name": "¿Trabajan con hoteles y alojamientos chicos?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sí, cuando los números dan. Para un alojamiento el trabajo central es la reserva directa: proteger la búsqueda de tu marca, que hoy quizás está pagando una OTA para quedarse con ella, y hacer que reservar en tu web sea tan fácil como en la plataforma."
          }
        },
        {
          "@type": "Question",
          "name": "¿Sirve para turismo receptivo, con clientes de otros países?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sí, y es de lo que más trabajamos desde la Patagonia. Cambia todo: el idioma, la moneda, el horario de los anuncios y hasta qué se muestra de un mismo destino según el mercado emisor. Las campañas se arman por país de origen, cada una con su mensaje, y se mide qué mercado deja mejor costo por reserva."
          }
        }
      ]
    }
  ]
}
</script>
<?php endif; ?>
<main>
<section class="hga">
  <div class="wrap hga-grid">
    <div class="hga-left">
      <h1>Agencia de Marketing Digital para Turismo y Agencias de Viajes</h1>
      <p class="hga-claim">Trabajamos tu temporada<br /> <span class="hl">antes<svg class="grow" viewBox="0 0 220 70" preserveAspectRatio="none" aria-hidden="true">
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
      </svg></span> de que empiece</p>
      <p class="hga-sub">Trabajamos con agencias de viajes, operadores y hotelería. El viajero decide online y con meses de anticipación: cuando la temporada arranca, la campaña que importaba ya pasó.</p>
      <div class="hga-cta">
        <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <p class="hga-note">Sin contratos de permanencia. Quince minutos sobre tu próxima temporada.</p>
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
      <!-- Calendario de demanda: el visual propio de esta landing. Dice la tesis de la
           página sin texto: la pauta que llena la temporada corre meses antes. No repite
           el SERP de Google, el feed de Meta, el paquete local de Neuquén ni la bandeja
           de abogados. Datos ilustrativos, de ningún cliente real. -->
      <div class="season" role="img" aria-label="Calendario de demanda de una agencia de viajes: la inversión publicitaria empieza meses antes del pico de reservas de temporada">
        <div class="season-h">
          <b>Un año de tu agencia</b>
          <span>reservas por mes</span>
        </div>
        <div class="season-bars" aria-hidden="true">
          <div class="sb hi" style="--h:88%"><i></i><u>E</u></div>
          <div class="sb hi" style="--h:74%"><i></i><u>F</u></div>
          <div class="sb" style="--h:36%"><i></i><u>M</u></div>
          <div class="sb" style="--h:28%"><i></i><u>A</u></div>
          <div class="sb lo" style="--h:16%"><i></i><u>M</u></div>
          <div class="sb lo" style="--h:14%"><i></i><u>J</u></div>
          <div class="sb" style="--h:38%"><i></i><u>J</u></div>
          <div class="sb" style="--h:26%"><i></i><u>A</u></div>
          <div class="sb" style="--h:32%"><i></i><u>S</u></div>
          <div class="sb pre" style="--h:44%"><i></i><u>O</u></div>
          <div class="sb pre" style="--h:58%"><i></i><u>N</u></div>
          <div class="sb hi" style="--h:78%"><i></i><u>D</u></div>
        </div>
        <div class="season-mark" aria-hidden="true">
          <span class="season-nota">acá se gana enero</span>
          <svg viewBox="0 0 60 30" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M8 6 C 24 8, 40 14, 50 24 M50 24l2-9M50 24l-9-2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div class="season-f">
          <b>El pico se siembra en octubre</b>
          <span>no en enero</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CÓMO LLEGAN HOY LAS RESERVAS ===================== -->
<section class="sec-white" id="reservas">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Cómo llegan hoy las reservas a una agencia de viajes</h2>
      <p>Antes de hablar de campañas conviene mirar de dónde sale hoy la venta. En la mayoría de las agencias, de estos lugares.</p>
    </div>
    <ul class="pain">
      <li class="reveal">
        <b>De las OTAs, pagando la comisión de otro</b>
        <span>Booking y Despegar te traen volumen, pero el cliente es de ellos, el margen se achica y tu marca desaparece detrás de la de la plataforma. Crecés y a la vez dependés más.</span>
      </li>
      <li class="reveal">
        <b>De una temporada que dura dos meses</b>
        <span>El año se define en el pico. Si la temporada alta viene floja no hay temporada baja que la rescate, y la campaña que la llenaba había que correrla cuando nadie pensaba en vacaciones.</span>
      </li>
      <li class="reveal">
        <b>De un viajero que compara en cinco pestañas</b>
        <span>Nadie reserva un viaje en la primera visita. Mira hoy, consulta mañana, vuelve el fin de semana. En ese recorrido, la marca que sigue apareciendo tiene una ventaja que la que desaparece no tiene.</span>
      </li>
      <li class="reveal">
        <b>De consultas que preguntan precio y desaparecen</b>
        <span>El "¿cuánto sale?" que no dice fechas, cantidad de pasajeros ni presupuesto se lleva el mismo tiempo de respuesta que una reserva real. Y en temporada, el tiempo del mostrador es lo más caro que tenés.</span>
      </li>
      <li class="reveal">
        <b>De la urgencia de hoy, que tapa la de marzo</b>
        <span>Cuando el mostrador explota, nadie está sembrando la temporada que viene. El resultado es un año en serrucho: picos que agotan y valles que asustan.</span>
      </li>
      <li class="reveal">
        <b>Y de campañas que nadie mide hasta la reserva</b>
        <span>Se cuentan los mensajes que entran, no los pasajeros que embarcan. Sin ese número, la pauta de la próxima temporada se decide a ciegas.</span>
      </li>
    </ul>
  </div>
</section>

<!-- ===================== LA TEMPORADA =====================
     Sección propia de esta página (el equivalente del #reglas de abogados): el
     calendario de inversión. Es el mayor diferenciador frente a una agencia
     genérica, que prende la pauta cuando el cliente la pide: en temporada. -->
<section class="sec-soft" id="temporada">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>La temporada se gana antes de que empiece</h2>
      <p>Un viaje grande se decide meses antes de viajarse. Una escapada, semanas. Esa distancia es la que conviene tener en cuenta al repartir la inversión del año.</p>
    </div>
    <div class="tphase">
      <article class="tp reveal">
        <span class="tp-k">Meses antes</span>
        <h3>Sembrar</h3>
        <p>Cuando el viajero todavía sueña, la marca que le muestra el destino entra en la lista. Acá trabaja Meta: creatividades que venden el lugar, no el precio, sobre públicos que ya mostraron intención de viajar.</p>
      </article>
      <article class="tp reveal">
        <span class="tp-k">Semanas antes</span>
        <h3>Capturar</h3>
        <p>El sueño se vuelve búsqueda: destino, fechas, "paquete a". Acá trabaja Google, y se gana con precisión: campañas por destino y por producto, en el momento exacto de mayor intención.</p>
      </article>
      <article class="tp reveal">
        <span class="tp-k">Los días de la decisión</span>
        <h3>Cerrar</h3>
        <p>El viajero que consultó y no reservó sigue comparando. El remarketing lo acompaña esos días con el paquete que miró, y la landing le saca la fricción que quedaba entre el interés y la seña.</p>
      </article>
    </div>
    <div class="rules-note reveal">
      <p><b>Por qué importa tanto.</b> El costo del clic acompaña a la demanda: en el pico, todos pujan por el mismo viajero. Trabajar la demanda con anticipación permite llegar al pico con audiencias propias ya construidas, en vez de salir a competir de cero cuando el clic está más caro.</p>
    </div>
  </div>
</section>

<!-- ===================== ESTRATEGIAS ===================== -->
<section class="bg-grad" id="estrategias">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Estrategias de marketing digital para turismo</h2>
      <p>Cuatro piezas que trabajan juntas sobre el mismo calendario. Ninguna sirve sola: podés inspirar a miles y perder la reserva en un formulario que pide demasiado.</p>
    </div>
    <div class="wedo wedo-4">
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3" stroke-linecap="round"/></svg></span>
        <h3>Google Ads para agencias de viajes</h3>
        <p>Campañas separadas por destino y por producto, con las fechas clave de cada uno. El que busca "paquete a Bariloche julio" ya decidió viajar: la subasta se gana con relevancia, no con presupuesto.</p>
        <span class="win">Aparecer cuando ya deciden</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="3.5"/><path d="M3 15l5-5 4 4 3-3 6 6" stroke-linecap="round" stroke-linejoin="round"/><circle cx="15" cy="8" r="1.6"/></svg></span>
        <h3>Meta Ads: vender el destino antes que el precio</h3>
        <p>El turismo se compra con los ojos. Acá el trabajo es instalar el viaje en la cabeza del viajero meses antes de que lo busque, con segmentación por intereses, comportamientos de viaje y públicos parecidos a tus pasajeros.</p>
        <span class="win">Demanda sembrada a tiempo</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 7h6v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Landings y conversión: del interés a la seña</h3>
        <p>Una página por paquete, con lo que el viajero necesita para decidir y un formulario que pregunta fechas y pasajeros. Califica la consulta antes de que llegue al mostrador, que en temporada vale oro.</p>
        <span class="win">Consultas que dicen cuándo y cuántos</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12a9 9 0 1 1 3 6.7" stroke-linecap="round"/><path d="M3 20v-5h5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Remarketing sobre el viajero que compara</h3>
        <p>Entre la primera visita y la reserva pasan días y cinco competidores. Volvemos a mostrarle el paquete que miró, con el mensaje siguiente: disponibilidad, financiación, lo que le faltaba para decidir.</p>
        <span class="win">La reserva que se estaba yendo</span>
      </article>
    </div>
    <div class="sec-cta reveal">
      <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<!-- ===================== TIPOS DE NEGOCIO ===================== -->
<section class="sec-white" id="especialidades">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Tipos de negocio turístico con los que trabajamos</h2>
      <p>Un crucero se decide en meses y una escapada en días. Cada producto tiene su ventana, su ticket y su viajero, y la campaña se arma alrededor de eso.</p>
    </div>
    <div class="ind-grid">
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2.5 19c1.5 1 3 1 4.5 0s3-1 4.5 0 3 1 4.5 0 3-1 4.5 0" stroke-linecap="round"/><path d="M4 15l1.5-6h13L20 15M12 9V5M9 5h6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Agencias de paquetes turísticos</h3>
          <p>El producto con más competencia de precio. Se gana separando campañas por destino, con la fecha límite de cada salida trabajando a favor: la urgencia real convierte mejor que el descuento.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 20c2-1.5 5-6 9-6s7 4.5 9 6M12 14V4M12 4l-6 8M12 4l6 8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Cruceros y viajes de lujo</h3>
          <p>Ticket alto, decisión de meses y un pasajero que investiga muchísimo. La campaña acompaña ese ciclo largo en vez de apurarlo. Es el rubro de nuestro caso de éxito de acá abajo.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V8l7-5 7 5v13M9 21v-6h6v6M9 11h.01M15 11h.01" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Hotelería, cabañas y alojamiento</h3>
          <p>La pelea acá es por la reserva directa: cada una que entra por tu web es comisión que no se va a la OTA. Búsqueda de marca protegida, remarketing propio y una landing que reserve sin fricción.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2.5" y="6.5" width="19" height="13" rx="2.5"/><path d="M8.5 6.5V5a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v1.5M2.5 11h19" stroke-linecap="round"/></svg></span>
        <div>
          <h3>Turismo corporativo</h3>
          <p>El único B2B del grupo: acá no se vende un destino, se vende dejar de perder tiempo. Campañas de búsqueda acotadas, LinkedIn cuando corresponde y un mensaje de eficiencia, no de playa.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 3 4 14h6l-1 7 9-11h-6z" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Turismo aventura y experiencias</h3>
          <p>Se compra por impulso visual: el video de la excursión vende más que cualquier texto. Meta e Instagram llevan la delantera, y la reserva tiene que poder cerrarse desde el teléfono, en el momento.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-linejoin="round"/><circle cx="12" cy="10" r="3"/></svg></span>
        <div>
          <h3>Turismo receptivo</h3>
          <p>Tu cliente está en otro país y busca en otro idioma. Campañas por mercado emisor, con horarios, moneda y mensaje de cada uno. La Patagonia se vende distinto en San Pablo que en Madrid.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CASO DE ÉXITO =====================
     Caso REAL y con nombre: Cruzando Mares. El +85% en ventas es la métrica que la
     propia página de producción publica para el caso de turismo (cruceros), la misma
     que la empresa firma en la home y en /reviews/. La cita de Mariana es la publicada.
     NO agregar cifras que no estén en producción. -->
<section class="sec-soft" id="caso">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Caso de éxito: Cruzando Mares</h2>
    </div>
    <div class="casebox reveal">
      <div class="case-grid">
        <div class="case-s">
          <h3>El desafío</h3>
          <p>Una agencia especializada en cruceros: ticket alto, decisión de meses y un viajero que compara mucho antes de señar. El objetivo era captar clientes calificados para un producto que no se vende por impulso.</p>
        </div>
        <div class="case-s">
          <h3>Qué hicimos</h3>
          <p>Una estrategia enfocada en acciones escalables y con costos razonables: campañas de búsqueda sobre la demanda que ya existía, siembra en Meta sobre públicos afines al producto y páginas pensadas para convertir la consulta en una conversación de venta.</p>
        </div>
        <div class="case-s">
          <h3>Resultados</h3>
          <p>Las ventas crecieron un 85% y la operación dejó de depender de que la fundadora empujara cada venta: el sistema trae la demanda y el equipo la cierra.</p>
        </div>
      </div>
      <div class="case-m">
        <b>+85%</b>
        <span><i>Aumento en ventas.</i> "Gracias a Caissa, mi empresa vende incluso cuando estoy de vacaciones", Mariana Luaces, cofundadora de Cruzando Mares. Podés <a href="https://youtu.be/sWErwVrvTP8" target="_blank" rel="noopener">ver su testimonio en video</a>.</span>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CÓMO TRABAJAMOS ===================== -->
<section class="bg-grad" id="como">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Cómo trabajamos con tu agencia</h2>
    </div>
    <div class="flow flow-4">
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">1</span>
        <h3>Diagnóstico</h3>
        <p>Miramos la cuenta: a qué destinos y búsquedas se está yendo el presupuesto hoy y qué campañas están corriendo.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">2</span>
        <h3>Estrategia</h3>
        <p>Armamos la estructura de campañas por destino y producto, con su presupuesto y su costo objetivo por consulta.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">3</span>
        <h3>Implementación</h3>
        <p>Campañas por destino, creatividades que venden el viaje, landings por paquete con formularios que califican, y la medición conectada hasta la reserva, no hasta el mensaje.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">4</span>
        <h3>Optimización</h3>
        <p>Revisión diaria: el destino que rinde escala, el que no se corta, y cada temporada deja audiencias y aprendizajes que la siguiente aprovecha.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===================== POR QUÉ UNA AGENCIA ESPECIALIZADA ===================== -->
<section class="sec-white" id="porque">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Por qué elegir una agencia que entiende turismo</h2>
      <p>No es cariño por los viajes. Son cuatro cosas que una agencia generalista aprende tarde, con tu temporada de por medio.</p>
    </div>
    <div class="wedo wedo-4">
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="16" rx="2.5"/><path d="M3 10h18M8 3v4M16 3v4" stroke-linecap="round"/></svg></span>
        <h3>Pensamos en temporadas, no en meses</h3>
        <p>Un presupuesto plano dividido en doce es la manera más cara de hacer turismo. El nuestro respira con tu calendario: fuerte cuando se decide, quieto cuando no hay a quién hablarle.</p>
        <span class="win">La inversión sigue a la demanda</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 7h6v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Medimos pasajeros, no mensajes</h3>
        <p>Cien consultas que preguntan precio valen menos que veinte que dicen fechas y pasajeros. Conectamos la medición hasta la reserva para que la campaña aprenda de la venta real.</p>
        <span class="win">El número que embarca</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2.5" y="4.5" width="19" height="15" rx="3"/><path d="M10 9l5 3-5 3z" fill="currentColor" stroke="none"/></svg></span>
        <h3>Sabemos que el destino entra por los ojos</h3>
        <p>En este rubro el material visual pesa tanto como la puja: el mejor anuncio de un viaje es el viaje. Trabajamos con tus fotos y videos para armar los anuncios que mejor rinden.</p>
        <span class="win">Anuncios que muestran el destino</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16M4 12h16M4 17h9" stroke-linecap="round"/></svg></span>
        <h3>Sin contratos de permanencia</h3>
        <p>Trabajamos mes a mes desde 2021 y los clientes se quedan más de cuatro años en promedio. En un rubro de temporadas, quedarse temporada tras temporada dice más que cualquier contrato.</p>
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
        <h2>Miramos tus campañas juntos, gratis</h2>
        <p class="intro">Quince minutos por videollamada, con tu cuenta publicitaria y tu web en pantalla. Sin presentación armada ni promesas de destino paradisíaco.</p>
        <ol>
          <li><span>Vemos <b>si tu inversión sigue a tu calendario</b> o si estás pagando lo mismo en mayo que en noviembre.</span></li>
          <li><span>Le damos una mirada a <b>la página donde cae el clic</b>: ahí se decide si la consulta llega con fechas o solo pregunta precio.</span></li>
          <li><span>Salís con una <b>lista de arreglos concretos</b> para la temporada que viene, la trabajes con nosotros o no.</span></li>
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
     ABIERTA, sin acordeón (§4). Las 6 preguntas son EXACTAMENTE las del FAQPage del
     <head>. Si editás una, editá la otra. -->
<section class="sec-soft" id="faq">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Preguntas frecuentes sobre marketing para turismo</h2>
    </div>
    <div class="faqo-grid">
      <details class="faqo reveal">
        <summary><h3>¿Tiene sentido competir contra Booking y las OTAs?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>De frente y por todo el mercado, no: nadie le gana esa subasta a una plataforma global. Pero no hace falta. Se compite donde la agencia es más fuerte: tu marca, tu destino, tu producto y tu base de viajeros.</p>
          <p>Cada reserva directa que recuperás vale doble: te ahorrás la comisión y el cliente queda en tu base, no en la de la plataforma.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cuándo hay que empezar a invertir para la temporada alta?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Antes de lo que la mayoría cree. Un viaje grande se decide con meses de anticipación, así que la siembra arranca cuando el viajero empieza a soñar, no cuando empieza a comprar.</p>
          <p>La ventana depende del producto: un crucero se decide con más anticipación que una escapada de fin de semana.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Google Ads o Meta Ads para una agencia de viajes?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Los dos, en momentos distintos del mismo viajero. Meta siembra: instala el destino cuando todavía no hay búsqueda. Google captura: aparece cuando el sueño ya se volvió "paquete a Bariloche fechas".</p>
          <p>Usar uno solo es correr media carrera: sembrar sin capturar regala la venta, y capturar sin sembrar te deja pujando caro por viajeros que no te conocen.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cómo filtran a los que solo preguntan precio?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Con el formulario trabajando de filtro: fechas tentativas, cantidad de pasajeros y rango de presupuesto. El que no sabe ni cuándo ni cuántos todavía no es una consulta, es una visita.</p>
          <p>Y midiendo qué campañas traen consultas que terminan en reserva, para que el algoritmo busque más viajeros parecidos a los que embarcan.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Trabajan con hoteles y alojamientos chicos?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Sí, cuando los números dan. Para un alojamiento el trabajo central es la reserva directa: proteger la búsqueda de tu marca, que hoy quizás está pagando una OTA para quedarse con ella, y hacer que reservar en tu web sea tan fácil como en la plataforma.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Sirve para turismo receptivo, con clientes de otros países?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Sí, y es de lo que más trabajamos desde la Patagonia. Cambia todo: el idioma, la moneda, el horario de los anuncios y hasta qué se muestra de un mismo destino según el mercado emisor.</p>
          <p>Las campañas se arman por país de origen, cada una con su mensaje, y se mide qué mercado deja mejor costo por reserva.</p>
        </div>
      </details>
    </div>
  </div>
</section>

<!-- ===================== CTA FINAL ===================== -->
<section class="final bg-grad" id="cta">
  <div class="wrap">
    <div class="cta-ga reveal">
      <h2>Tu próxima temporada se decide ahora</h2>
      <p>Quince minutos sobre tu cuenta y tu web. Si la temporada que viene ya está bien sembrada, te lo decimos y listo. Si no, todavía estás a tiempo.</p>
      <a href="/reservar-consultoria/" class="btn btn-light">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <div class="rea">15 minutos · Sin contratos de permanencia</div>
    </div>
  </div>
</section>

</main>

<?php
get_footer();