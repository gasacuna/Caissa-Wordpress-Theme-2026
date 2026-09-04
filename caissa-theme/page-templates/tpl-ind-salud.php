<?php
/**
 * Template Name: Caissa — Industrias · Salud
 *
 * Migrada desde industrias/salud/index.html del repo Caissa-Nueva-Web-2026.
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
        "Marketing para salud",
        "Google Ads para clínicas",
        "Políticas de publicidad de salud",
        "Meta Ads",
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
      "@id": "https://caissa.digital/industrias/salud/#webpage",
      "url": "https://caissa.digital/industrias/salud/",
      "name": "Agencia de Marketing Digital para Salud y Clínicas | Caissa",
      "description": "Marketing digital para clínicas, centros médicos y consultorios, dentro de las políticas de salud. Caso real: +207% en leads con un CPA 40% más bajo.",
      "inLanguage": "es",
      "isPartOf": {
        "@id": "https://caissa.digital/#organization"
      }
    },
    {
      "@type": "Service",
      "@id": "https://caissa.digital/industrias/salud/#service",
      "serviceType": "Marketing digital para salud",
      "name": "Agencia de Marketing Digital para Salud: Clínicas y Centros Médicos",
      "url": "https://caissa.digital/industrias/salud/",
      "description": "Captación de pacientes para clínicas, centros médicos y consultorios: Google Ads y Meta Ads escritos dentro de las políticas de salud de cada plataforma, landings con turnos online y medición de llamadas y turnos hasta el paciente que se presenta.",
      "provider": {
        "@id": "https://caissa.digital/#organization"
      },
      "availableLanguage": "es",
      "audience": {
        "@type": "BusinessAudience",
        "name": "Clínicas, centros médicos y consultorios"
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
      "@id": "https://caissa.digital/industrias/salud/#breadcrumb",
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
          "name": "Salud",
          "item": "https://caissa.digital/industrias/salud/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://caissa.digital/industrias/salud/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿Se puede hacer publicidad médica en Google?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sí, y de hecho es el canal más efectivo del rubro: el paciente que busca \"especialidad más zona\" quiere un turno. Lo que no se puede es publicitar de cualquier manera: la categoría salud tiene políticas propias en Google y en Meta, más la regulación de la publicidad médica. Trabajar dentro de ese marco no limita los resultados: los ordena."
          }
        },
        {
          "@type": "Question",
          "name": "¿Por qué las plataformas rechazan anuncios de salud?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Casi siempre por lo mismo: textos que atribuyen una condición a quien los ve, promesas de resultados o de plazos, términos de categorías restringidas, o intentos de remarketing sobre públicos de salud. El problema no es solo el aviso caído: una cuenta que acumula rechazos queda marcada y compite peor."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cómo se consiguen pacientes particulares, no de cartilla?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Eligiendo las batallas: hay especialidades y tratamientos donde el paciente ya espera pagar de su bolsillo, y ahí la pauta rinde. La landing hace la otra mitad, mostrando el valor del turno con claridad antes de hablar de precio. La proporción entre cartilla y particular es una decisión del centro, y la campaña se diseña para empujarla en la dirección que definas."
          }
        },
        {
          "@type": "Question",
          "name": "¿Sirve para un consultorio chico o solo para clínicas?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sirve cuando los números dan. Un consultorio con una especialidad definida y una zona clara puede competir muy bien: la campaña es más chica y más precisa que la de una clínica. Lo que miramos antes de empezar es el valor del paciente en tu especialidad: si el tratamiento promedio no financia el costo de conseguirlo, te lo decimos antes de que inviertas."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cómo miden si la campaña trae pacientes de verdad?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Midiendo las tres puertas de entrada: el formulario, el turno online y, sobre todo, el teléfono, que en salud es donde entra la mayoría. Cada llamada de campaña queda registrada con su origen. Y si tu equipo nos comparte qué turnos se concretaron, la campaña también aprende de eso. La métrica que importa es el turno agendado, no el clic."
          }
        },
        {
          "@type": "Question",
          "name": "¿Qué pasa con la privacidad de los pacientes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Es un límite duro. No se arman públicos ni audiencias con datos de salud, no se hace remarketing sobre visitantes de páginas de tratamientos y la medición se configura para no enviar datos sensibles a las plataformas. No es solo cumplimiento: la confianza es el activo de un centro de salud, y ninguna campaña puede costarla."
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
      <h1>Agencia de Marketing Digital para Salud: Clínicas y Centros Médicos</h1>
      <p class="hga-claim">Traemos al paciente<br /> <span class="hl">que ya te busca<svg class="grow" viewBox="0 0 220 70" preserveAspectRatio="none" aria-hidden="true">
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
      </svg></span></p>
      <p class="hga-sub">Trabajamos con clínicas, centros médicos y consultorios. El paciente ya te busca en Google: la pregunta es si te encuentra a vos o al de la otra cuadra.</p>
      <div class="hga-cta">
        <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <p class="hga-note">Sin contratos de permanencia. Quince minutos sobre tu cuenta.</p>
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
      <!-- Agenda de turnos: el visual propio de esta landing. El problema de una clínica
           no es solo atraer pacientes: es que el turno reservado se presente y que la
           consulta sea de su especialidad. Grilla de agenda, no bandeja (abogados) ni
           calendario anual (turismo). Datos ilustrativos, de ningún centro real. -->
      <div class="agenda" role="img" aria-label="Agenda semanal de un centro médico: turnos confirmados, una primera consulta, un turno sin asistencia y una consulta fuera de especialidad">
        <div class="agenda-h">
          <b>Agenda de la semana</b>
          <span>consultorio 2</span>
        </div>
        <ul class="agenda-l">
          <li class="ok">
            <span class="ag-hr">09:00</span>
            <span class="ag-b"><b>Control postoperatorio</b><span>Paciente de la clínica</span></span>
            <span class="ag-tag">Confirmado</span>
          </li>
          <li class="new">
            <span class="ag-hr">10:30</span>
            <span class="ag-b"><b>Primera consulta</b><span>Llegó por la campaña · particular</span></span>
            <span class="ag-tag">Paciente nuevo</span>
          </li>
          <li class="no">
            <span class="ag-hr">11:30</span>
            <span class="ag-b"><b>Turno sin confirmar</b><span>No respondió el recordatorio</span></span>
            <span class="ag-tag">No asistió</span>
          </li>
          <li class="ok">
            <span class="ag-hr">15:00</span>
            <span class="ag-b"><b>Interconsulta</b><span>Derivación con historia</span></span>
            <span class="ag-tag">Confirmado</span>
          </li>
          <li class="no">
            <span class="ag-hr">16:30</span>
            <span class="ag-b"><b>Consulta fuera de especialidad</b><span>El formulario no la filtró</span></span>
            <span class="ag-tag">No califica</span>
          </li>
        </ul>
        <div class="agenda-f">
          <b>La agenda llena no es la meta</b>
          <span class="agenda-nota">la consulta real, sí</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CÓMO LLEGAN HOY LOS PACIENTES ===================== -->
<section class="sec-white" id="pacientes">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Cómo llegan hoy los pacientes a una clínica</h2>
      <p>Antes de hablar de campañas conviene mirar de dónde sale hoy la agenda. En la mayoría de los centros, de estos lugares.</p>
    </div>
    <ul class="pain">
      <li class="reveal">
        <b>De la cartilla, con aranceles que no fijás</b>
        <span>La obra social llena la agenda, pero a su precio y con sus tiempos de pago. Crecer solo por cartilla es crecer en volumen sin decidir sobre tu propia rentabilidad.</span>
      </li>
      <li class="reveal">
        <b>De la recomendación, que no se puede escalar</b>
        <span>El paciente derivado por otro paciente es el mejor que existe, y también el más imprevisible. Ningún centro planifica su crecimiento sobre el boca a boca.</span>
      </li>
      <li class="reveal">
        <b>De portales donde estás al lado de tu competencia</b>
        <span>Los directorios de turnos te dan visibilidad, pero en la misma pantalla que otros diez profesionales, compitiendo por precio y por reseñas en una vidriera que no es tuya.</span>
      </li>
      <li class="reveal">
        <b>Del que llama al primero que atiende</b>
        <span>El paciente con una molestia hoy no espera: saca turno donde le contestan. Si la consulta entra a las siete de la tarde y se responde mañana, el turno ya lo dio otro.</span>
      </li>
      <li class="reveal">
        <b>De turnos que se reservan y no se presentan</b>
        <span>El ausentismo es plata perdida dos veces: el costo de conseguir ese turno y la hora de agenda que quedó vacía. Sin confirmación trabajada, la campaña llena huecos que después se vacían solos.</span>
      </li>
      <li class="reveal">
        <b>Y de campañas que nadie mide hasta el paciente</b>
        <span>Se cuentan los formularios y las llamadas, no los pacientes que efectivamente llegaron y volvieron. Sin ese dato, no hay forma de saber qué especialidad financia la pauta.</span>
      </li>
    </ul>
  </div>
</section>


<!-- ===================== ESTRATEGIAS ===================== -->
<section class="bg-grad" id="estrategias">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Estrategias de marketing digital para salud</h2>
      <p>Cuatro piezas que trabajan juntas. Ninguna sirve sola: podés ganar la búsqueda y perder el paciente en un teléfono que nadie atiende.</p>
    </div>
    <div class="wedo wedo-4">
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3" stroke-linecap="round"/></svg></span>
        <h3>Google Ads para clínicas y centros médicos</h3>
        <p>El paciente busca especialidad más zona, y esa búsqueda tiene una urgencia que ningún otro canal iguala. Campañas separadas por especialidad, con negativas que sacan lo que tu centro no atiende.</p>
        <span class="win">El turno se decide en esa búsqueda</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="3.5"/><path d="M3 15l5-5 4 4 3-3 6 6" stroke-linecap="round" stroke-linejoin="round"/><circle cx="15" cy="8" r="1.6"/></svg></span>
        <h3>Meta Ads: presencia sin señalar a nadie</h3>
        <p>En salud, Meta tiene reglas propias: no se puede segmentar por condición ni hacer remarketing. Se trabaja con públicos por zona e intereses generales, y anuncios que hablan del centro sin señalar a nadie.</p>
        <span class="win">El centro que ya conocés</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 7h6v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Landings que terminan en turno</h3>
        <p>Una página por especialidad con lo que el paciente decide: quién atiende, qué cobertura toma, cómo llegar y un turno que se saca sin llamar. Cada fricción que sacás es un paciente que no se va al portal.</p>
        <span class="win">Del clic al turno sin escalas</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.4 2.1L8 9.8a16 16 0 0 0 6.2 6.2l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.7 2z" stroke-linejoin="round"/></svg></span>
        <h3>Medición hasta el paciente, no hasta el formulario</h3>
        <p>En salud, gran parte de las consultas entra por teléfono. Medimos llamadas y turnos, no solo clics, y le enseñamos a la campaña cuáles se convirtieron en turnos.</p>
        <span class="win">La agenda como métrica</span>
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
      <h2>Especialidades médicas con las que trabajamos</h2>
      <p>Una urgencia odontológica y un tratamiento estético no se buscan igual, no cuestan igual y no se deciden igual. La campaña se arma alrededor de cómo decide cada paciente.</p>
    </div>
    <div class="ind-grid">
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 21V8a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v13M9 21v-5h6v5M12 9v4M10 11h4" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Clínicas y centros médicos</h3>
          <p>El desafío es el mix: cada especialidad tiene su costo por paciente y su valor. Separadas en campañas propias, las rentables financian el crecimiento y ninguna se come el presupuesto de otra.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 3c-2 0-3.5 1.6-3.5 3.8 0 3 1.3 4 2 7.2.4 2 .6 7 2.3 7 1.4 0 1-4 2.2-4s.8 4 2.2 4c1.7 0 1.9-5 2.3-7 .7-3.2 2-4.2 2-7.2C16.5 4.6 15 3 13 3c-1.6 0-2 .8-3 .8S8.6 3 7 3z" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Odontología</h3>
          <p>Convive la urgencia que llama ya con el tratamiento que se piensa meses. Son dos campañas distintas: una gana con velocidad de respuesta, la otra con financiación clara y confianza.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-4.5-7-10a4.5 4.5 0 0 1 7-3.7A4.5 4.5 0 0 1 19 11c0 5.5-7 10-7 10z" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Salud mental y psicología</h3>
          <p>El rubro donde la sensibilidad manda: sin remarketing, sin señalar condiciones, con un mensaje que baje la barrera de la primera consulta. Es el terreno de nuestro caso destacado.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v.01M12 11v5" stroke-linecap="round"/></svg></span>
        <div>
          <h3>Estética y dermatología</h3>
          <p>Decisión larga, mayormente particular y con restricciones fuertes: las plataformas limitan el antes y después. Se gana con contenido que muestra criterio profesional, no promesas.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3.2"/><path d="M2.5 12S6 5.5 12 5.5 21.5 12 21.5 12 18 18.5 12 18.5 2.5 12 2.5 12z" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Oftalmología y especialidades quirúrgicas</h3>
          <p>Ticket alto y paciente que investiga: compara centros, lee reseñas y pregunta por el cirujano. La página del procedimiento y la reputación pesan tanto como el anuncio.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 14h4l2-5 3 8 2-5h5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Kinesiología y rehabilitación</h3>
          <p>Vive de la recurrencia: el paciente que empieza un tratamiento vuelve muchas veces. Por eso el costo de captarlo se mide contra el tratamiento completo, no contra la primera sesión.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CASO DE ÉXITO =====================
     Los DOS números (+207% leads interanual y -40% de CPA) son los publicados en
     caissa.digital/caso/generacion-de-leads/rubro-salud/. El caso va sin nombre,
     igual que en producción. La cita de Sydney es la publicada en esa misma página
     (con la ortografía normalizada: tildes que el CMS de producción perdió).
     NO agregar cifras que no estén en producción. -->
<section class="sec-soft" id="caso">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Caso de éxito: rubro salud</h2>
    </div>
    <div class="casebox reveal">
      <span class="case-conf">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="4" y="10.5" width="16" height="10" rx="2.5"/><path d="M8 10.5V7a4 4 0 0 1 8 0v3.5" stroke-linecap="round"/></svg>
        En salud publicamos resultados sin identificar la especialidad del centro
      </span>
      <div class="case-grid">
        <div class="case-s">
          <h3>El punto de partida</h3>
          <p>Un centro de salud con campañas andando y un costo por paciente que subía sin explicación. Las consultas entraban mezcladas: especialidades distintas compartiendo presupuesto, y ninguna medición de cuáles terminaban en un turno real.</p>
        </div>
        <div class="case-s">
          <h3>Qué hicimos</h3>
          <p>Separamos las campañas por especialidad y reescribimos anuncios y páginas para cumplir las políticas de salud sin perder claridad. Sumamos la medición de llamadas y turnos, y negativas para las búsquedas que el centro no atiende.</p>
        </div>
        <div class="case-s">
          <h3>Resultados</h3>
          <p>Más del triple de pacientes potenciales, pagando cada uno bastante menos que antes. Con el costo por adquisición bajando, el centro pudo abrir la pauta a especialidades que antes no se financiaban.</p>
        </div>
      </div>
      <div class="case-m">
        <b>+207%</b>
        <span><i>Aumento interanual en leads, con un CPA 40% más bajo.</i> Son los dos números que el centro autorizó a publicar. El detalle completo lo repasamos en la consultoría, con la cuenta en pantalla.</span>
      </div>
    </div>
    <div class="tsty reveal">
      <blockquote>"Si bien el rubro de la salud y psicología no es fácil de trabajar, el equipo de Caissa mejoró y ordenó muy bien nuestra estrategia, campañas y landing pages, consiguiendo un gran incremento en nuestras conversiones y clientes."</blockquote>
      <div class="tsty-w"><b>Sydney Pinoy</b><span>CEO · Neuros Center</span></div>
    </div>
  </div>
</section>

<!-- ===================== CÓMO TRABAJAMOS ===================== -->
<section class="bg-grad" id="como">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Cómo trabajamos con tu centro</h2>
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
        <p>Campañas por especialidad escritas dentro de las políticas, landings con turnos online, medición de llamadas y formularios, y negativas que sacan lo que no atendés.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">4</span>
        <h3>Optimización</h3>
        <p>Revisión diaria de términos y costos por especialidad, presupuesto que se corre hacia la que rinde, y reportes que hablan de pacientes y turnos, no de impresiones.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===================== POR QUÉ UNA AGENCIA ESPECIALIZADA ===================== -->
<section class="sec-white" id="porque">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Por qué elegir una agencia que entiende salud</h2>
      <p>No es vocación médica. Son cuatro cosas que una agencia generalista aprende tarde, con tu cuenta pagando el aprendizaje.</p>
    </div>
    <div class="wedo wedo-4">
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3 4 6v6c0 4.4 3.4 8.2 8 9 4.6-.8 8-4.6 8-9V6z" stroke-linejoin="round"/><path d="M9 12l2 2 4-4" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Trabajamos la campaña y la página juntas</h3>
        <p>La mayoría de las agencias entrega tráfico y se desentiende de dónde cae. Nosotros miramos las dos puntas: la campaña que trae la consulta y la página que la convierte.</p>
        <span class="win">PPC y CRO, no solo pauta</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 7h6v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Medimos pacientes, no formularios</h3>
        <p>Una campaña puede llenar el formulario de consultas que nunca llegan al turno. Conectamos la medición hasta el turno agendado, y esa es la señal con la que optimiza la cuenta.</p>
        <span class="win">El número que llega a la agenda</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Entendemos cómo elige un paciente</h3>
        <p>Elige con miedo y con apuro, entre profesionales que no puede evaluar. Por eso deciden la claridad, las reseñas y la velocidad de respuesta, y por eso trabajamos las tres.</p>
        <span class="win">Confianza antes que oferta</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16M4 12h16M4 17h9" stroke-linecap="round"/></svg></span>
        <h3>Sin contratos de permanencia</h3>
        <p>Trabajamos mes a mes desde 2021 y los clientes se quedan más de cuatro años en promedio. Es la única garantía honesta que podemos dar: que te quedes porque la agenda lo muestra.</p>
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
        <p class="intro">Quince minutos por videollamada, con tu cuenta publicitaria y tu web en pantalla. Sin presentación armada ni diagnóstico a distancia.</p>
        <ol>
          <li><span>Vemos <b>cuánto estás pagando por cada consulta</b> y a qué búsquedas se está yendo el presupuesto.</span></li>
          <li><span>Le damos una mirada a <b>la página donde cae el clic</b>, que es donde se decide si la consulta entra.</span></li>
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
     ABIERTA, sin acordeón (§4). Las 6 preguntas son EXACTAMENTE las del FAQPage del
     <head>. Si editás una, editá la otra. -->
<section class="sec-soft" id="faq">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Preguntas frecuentes sobre marketing para salud</h2>
    </div>
    <div class="faqo-grid">
      <details class="faqo reveal">
        <summary><h3>¿Se puede hacer publicidad médica en Google?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Sí, y de hecho es el canal más efectivo del rubro: el paciente que busca "especialidad más zona" quiere un turno. Lo que no se puede es publicitar de cualquier manera: la categoría salud tiene políticas propias en Google y en Meta, más la regulación de la publicidad médica.</p>
          <p>Trabajar dentro de ese marco no limita los resultados: los ordena.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Por qué las plataformas rechazan anuncios de salud?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Casi siempre por lo mismo: textos que atribuyen una condición a quien los ve, promesas de resultados o de plazos, términos de categorías restringidas, o intentos de remarketing sobre públicos de salud.</p>
          <p>El problema no es solo el aviso caído: una cuenta que acumula rechazos queda marcada y compite peor.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cómo se consiguen pacientes particulares, no de cartilla?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Eligiendo las batallas: hay especialidades y tratamientos donde el paciente ya espera pagar de su bolsillo, y ahí la pauta rinde. La landing hace la otra mitad, mostrando el valor del turno con claridad antes de hablar de precio.</p>
          <p>La proporción entre cartilla y particular es una decisión del centro, y la campaña se diseña para empujarla en la dirección que definas.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Sirve para un consultorio chico o solo para clínicas?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Sirve cuando los números dan. Un consultorio con una especialidad definida y una zona clara puede competir muy bien: la campaña es más chica y más precisa que la de una clínica.</p>
          <p>Lo que miramos antes de empezar es el valor del paciente en tu especialidad: si el tratamiento promedio no financia el costo de conseguirlo, te lo decimos antes de que inviertas.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cómo miden si la campaña trae pacientes de verdad?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Midiendo las tres puertas de entrada: el formulario, el turno online y, sobre todo, el teléfono, que en salud es donde entra la mayoría. Cada llamada de campaña queda registrada con su origen.</p>
          <p>Y si tu equipo nos comparte qué turnos se concretaron, la campaña también aprende de eso. La métrica que importa es el turno agendado, no el clic.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Qué pasa con la privacidad de los pacientes?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Es un límite duro. No se arman públicos ni audiencias con datos de salud, no se hace remarketing sobre visitantes de páginas de tratamientos y la medición se configura para no enviar datos sensibles a las plataformas.</p>
          <p>No es solo cumplimiento: la confianza es el activo de un centro de salud, y ninguna campaña puede costarla.</p>
        </div>
      </details>
    </div>
  </div>
</section>

<!-- ===================== CTA FINAL ===================== -->
<section class="final bg-grad" id="cta">
  <div class="wrap">
    <div class="cta-ga reveal">
      <h2>Veamos si tu pauta trae pacientes o solo clics</h2>
      <p>Quince minutos sobre tu cuenta y tu web. Si la pauta está trayendo las consultas que querés, te lo decimos y listo. Si está pagando clics que no llaman, también.</p>
      <a href="/reservar-consultoria/" class="btn btn-light">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <div class="rea">15 minutos · Sin contratos de permanencia</div>
    </div>
  </div>
</section>

</main>

<?php
get_footer();