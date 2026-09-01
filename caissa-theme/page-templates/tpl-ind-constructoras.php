<?php
/**
 * Template Name: Caissa — Industrias · Constructoras
 *
 * Migrada desde industrias/constructoras/index.html del repo Caissa-Nueva-Web-2026.
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
        "Marketing inmobiliario",
        "Google Ads para constructoras",
        "Venta en pozo",
        "Meta Ads",
        "Generación de leads calificados"
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
      "@id": "https://caissa.digital/industrias/constructoras/#webpage",
      "url": "https://caissa.digital/industrias/constructoras/",
      "name": "Agencia de Marketing Digital para Constructoras | Caissa",
      "description": "Marketing digital para constructoras y desarrolladoras que venden en pozo: consultas calificadas y seguimiento hasta la firma. Caso real: +650% en 90 días.",
      "inLanguage": "es",
      "isPartOf": {
        "@id": "https://caissa.digital/#organization"
      }
    },
    {
      "@type": "Service",
      "@id": "https://caissa.digital/industrias/constructoras/#service",
      "serviceType": "Marketing digital para constructoras y desarrolladoras",
      "name": "Agencia de Marketing Digital para Constructoras y Desarrolladoras",
      "url": "https://caissa.digital/industrias/constructoras/",
      "description": "Generación de demanda para constructoras y desarrolladoras que comercializan en pozo: campañas locales por proyecto, formularios que califican forma de pago y plazo, y remarketing que acompaña el ciclo de decisión hasta la firma.",
      "provider": {
        "@id": "https://caissa.digital/#organization"
      },
      "availableLanguage": "es",
      "audience": {
        "@type": "BusinessAudience",
        "name": "Constructoras, desarrolladoras y empresas de la construcción"
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
      "@id": "https://caissa.digital/industrias/constructoras/#breadcrumb",
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
          "name": "Constructoras",
          "item": "https://caissa.digital/industrias/constructoras/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://caissa.digital/industrias/constructoras/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿El marketing digital sirve para vender en pozo?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Es donde mejor rinde. La preventa necesita exactamente lo que la pauta hace bien: juntar interesados de una zona concreta, calificarlos y mantenerlos cerca durante los meses de la decisión, con el precio de pozo subiendo como argumento. Nuestro caso más fuerte del rubro es de preventa: +650% en oportunidades comerciales en 90 días."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cuánto tarda en verse una venta?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "La firma tarda lo que tarda la decisión de compra de un inmueble, que se mide en meses. Cualquiera que te prometa escrituras en el primer mes no vendió un departamento en su vida. Por eso miramos las etapas que la cuenta puede ver: consultas calificadas y visitas pedidas. Son las señales que aparecen antes que la firma."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cómo filtran a los que no tienen crédito ni apuro?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Preguntando antes de que llegue al vendedor: destino de la compra, forma de pago y plazo, en el mismo formulario. El que no completa eso era una visita, no una consulta. Y con la medición aprendiendo de las consultas que avanzaron a visita o reserva, para que la campaña busque más compradores parecidos a esos."
          }
        },
        {
          "@type": "Question",
          "name": "¿Esto reemplaza a la inmobiliaria?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No, cambia la relación. La demanda propia te da un flujo que no depende de nadie y te sienta distinto en la mesa: la inmobiliaria pasa a ser un canal más, no el único. De hecho, muchos equipos comerciales externos trabajan mejor cuando el desarrollador les acerca consultas calificadas en lugar de esperar las suyas."
          }
        },
        {
          "@type": "Question",
          "name": "¿Trabajan con proveedores de la construcción?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sí. Materiales, aberturas, aislamientos, equipamiento de obra: es B2B con recompra, y se trabaja distinto que un desarrollo. La cuenta se optimiza por el valor del cliente en el tiempo, no por el primer pedido."
          }
        },
        {
          "@type": "Question",
          "name": "¿Qué pasa cuando el proyecto se vende entero?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Queda la audiencia: los interesados que no llegaron a comprar, los datos de qué zona y qué perfil respondieron mejor, y una cuenta con historial. El próximo proyecto arranca con eso a favor."
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
      <h1>Agencia de Marketing Digital para Constructoras y Desarrolladoras</h1>
      <p class="hga-claim">El pozo se vende <span class="hl">antes<svg class="grow" viewBox="0 0 220 70" preserveAspectRatio="none" aria-hidden="true">
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
      </svg></span><br /> de que sea edificio</p>
      <p class="hga-sub">Trabajamos con constructoras y desarrolladoras que venden en pozo. Un departamento no se vende con un clic: se vende con un embudo que junta interesados hoy para firmar dentro de meses.</p>
      <div class="hga-cta">
        <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <p class="hga-note">Sin contratos de permanencia. Quince minutos sobre tu proyecto.</p>
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
      <!-- Pipeline del proyecto: el visual propio de esta landing. La tesis en un vistazo:
           la venta de un desarrollo es un embudo largo, y las firmas de fin de año son los
           interesados de hoy. No repite la bandeja de abogados, el calendario de turismo
           ni la agenda de salud. Datos ilustrativos, de ningún proyecto real. -->
      <div class="pipe" role="img" aria-label="Embudo comercial de un desarrollo inmobiliario: de 120 interesados a 34 visitas, 9 reservas y 5 firmas">
        <div class="pipe-h">
          <b>Torre en pozo · etapa 2</b>
          <span>embudo comercial</span>
        </div>
        <ul class="pipe-l">
          <li style="--w:100%"><i></i><span class="pp-n">Interesados</span><span class="pp-v">120</span></li>
          <li style="--w:62%"><i></i><span class="pp-n">Consultas calificadas</span><span class="pp-v">58</span></li>
          <li style="--w:38%"><i></i><span class="pp-n">Visitas al showroom</span><span class="pp-v">34</span></li>
          <li style="--w:20%"><i></i><span class="pp-n">Reservas</span><span class="pp-v">9</span></li>
          <li class="hot" style="--w:12%"><i></i><span class="pp-n">Firmas</span><span class="pp-v">5</span></li>
        </ul>
        <div class="pipe-f">
          <b>Las firmas de diciembre</b>
          <span class="pipe-nota">entraron en marzo</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CÓMO LLEGAN HOY LOS COMPRADORES ===================== -->
<section class="sec-white" id="compradores">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Cómo llegan hoy los compradores a una constructora</h2>
      <p>Antes de hablar de campañas conviene mirar de dónde salen hoy las firmas. En la mayoría de las desarrolladoras, de estos lugares.</p>
    </div>
    <ul class="pain">
      <li class="reveal">
        <b>Del cartel de obra y el boca a boca</b>
        <span>Funcionan, pero no escalan ni se planifican: dependen de quién pasa por la esquina y de qué proyecto entregaste antes. Nadie proyecta un edificio sobre esa base.</span>
      </li>
      <li class="reveal">
        <b>De portales donde tu proyecto es uno más</b>
        <span>Los portales inmobiliarios ponen tu desarrollo al lado de veinte parecidos, ordenados por quién paga más por destacar. La consulta llega comparando precio por metro, no eligiendo tu proyecto.</span>
      </li>
      <li class="reveal">
        <b>De consultas que preguntan precio y desaparecen</b>
        <span>El "¿valor del monoambiente?" sin apuro, sin crédito y sin fecha se lleva el mismo tiempo del vendedor que un comprador real. En un ciclo de meses, atender curiosos cuesta carísimo.</span>
      </li>
      <li class="reveal">
        <b>De un interesado al que nadie le siguió el rastro</b>
        <span>El que consultó en marzo compra en noviembre. En esos meses, el proyecto que sigue apareciendo tiene una ventaja que el que desaparece no tiene.</span>
      </li>
      <li class="reveal">
        <b>De la inmobiliaria, que vende tu proyecto y todos los demás</b>
        <span>El canal tradicional empuja lo que se vende más fácil, que no siempre es tu desarrollo. Tener demanda propia cambia la conversación hasta con tu propia inmobiliaria.</span>
      </li>
      <li class="reveal">
        <b>Y de campañas que se miden por formularios</b>
        <span>Se cuentan las consultas del mes, no las reservas del trimestre. Con un ciclo así de largo, medir corto es no medir: la campaña que trajo la firma de hoy corrió hace medio año.</span>
      </li>
    </ul>
  </div>
</section>

<!-- ===================== EL CICLO LARGO =====================
     Sección propia de esta página (el equivalente del #reglas de abogados): el ciclo
     de venta largo y el seguimiento. Es la diferencia entre hacer pauta inmobiliaria
     y hacer un embudo que escritura. -->
<section class="sec-soft" id="ciclo">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Un ciclo de venta largo se gana con seguimiento</h2>
      <p>Entre la primera consulta y la firma pasan meses, decisiones familiares y un crédito. Por eso la campaña no termina en el formulario: el remarketing acompaña ese recorrido.</p>
    </div>
    <div class="tphase">
      <article class="tp reveal">
        <span class="tp-k">El primer contacto</span>
        <h3>Captar y calificar</h3>
        <p>El formulario pregunta lo que el vendedor necesita saber: para vivir o para invertir, contado o crédito, y en qué plazo. La consulta llega al equipo comercial con la ficha hecha, no como un teléfono suelto.</p>
      </article>
      <article class="tp reveal">
        <span class="tp-k">Los meses del medio</span>
        <h3>Acompañar la decisión</h3>
        <p>El interesado sigue viendo el proyecto mientras decide: el avance de obra, la financiación, las unidades que quedan. Cada losa que se termina es un anuncio nuevo, y el precio de pozo que sube es el mejor argumento.</p>
      </article>
      <article class="tp reveal">
        <span class="tp-k">El momento de la firma</span>
        <h3>Cerrar con el equipo comercial</h3>
        <p>El remarketing mantiene el proyecto presente hasta el final. El cierre es del equipo comercial; el trabajo de la campaña es que el comprador llegue a esa charla con el interés intacto.</p>
      </article>
    </div>
    <div class="rules-note reveal">
      <p><b>Por qué importa tanto.</b> En un ciclo corto, una campaña mediocre se nota en el mes. En uno largo, se nota cuando ya es tarde: el trimestre flojo de firmas es el semestre pasado sin consultas calificadas. Por eso acá el embudo completo importa más que ningún anuncio suelto.</p>
    </div>
  </div>
</section>

<!-- ===================== ESTRATEGIAS ===================== -->
<section class="bg-grad" id="estrategias">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Estrategias de marketing digital para constructoras</h2>
      <p>Cuatro piezas que trabajan juntas sobre el mismo embudo. Ninguna sirve sola: el mejor render del mundo no firma nada si nadie sigue al interesado.</p>
    </div>
    <div class="wedo wedo-4">
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3" stroke-linecap="round"/></svg></span>
        <h3>Google Ads para desarrollos inmobiliarios</h3>
        <p>El que busca "departamentos en pozo" con tu ciudad al lado ya está en el mercado. Campañas por proyecto y por zona, con negativas que sacan al que busca alquiler o usados.</p>
        <span class="win">Demanda con intención de compra</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="3.5"/><path d="M3 15l5-5 4 4 3-3 6 6" stroke-linecap="round" stroke-linejoin="round"/><circle cx="15" cy="8" r="1.6"/></svg></span>
        <h3>Meta Ads: el render que junta interesados</h3>
        <p>Acá se construye el volumen del embudo: el proyecto mostrado a la zona y a los perfiles que invierten en ladrillo. El render y el avance de obra son el contenido; la segmentación local, la puntería.</p>
        <span class="win">El embudo se llena arriba</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 7h6v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Una landing por proyecto, que califica</h3>
        <p>Ficha, planos, financiación y un formulario que pregunta lo que importa: destino de la compra, forma de pago, plazo. La conversión no es el objetivo final; la consulta calificada, sí.</p>
        <span class="win">Consultas con ficha, no teléfonos sueltos</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12a9 9 0 1 1 3 6.7" stroke-linecap="round"/><path d="M3 20v-5h5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Remarketing que dura lo que dura la decisión</h3>
        <p>Audiencias por etapa: el que miró, el que consultó, el que visitó. Cada una recibe el mensaje siguiente durante los meses que tarda la decisión, con el avance de obra empujando.</p>
        <span class="win">Nadie se enfría en el camino</span>
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
      <h2>Tipos de negocio de la construcción con los que trabajamos</h2>
      <p>Un desarrollo en pozo y un corralón no comparten ni el comprador ni el ciclo ni el canal. La campaña se arma alrededor de cómo compra cada uno.</p>
    </div>
    <div class="ind-grid">
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M6 21V5l6-2v18M12 21V9l6 2v10M15 14h.01M15 17h.01M9 8h.01M9 11h.01M9 14h.01M9 17h.01" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Desarrollos en pozo</h3>
          <p>El corazón de nuestro trabajo en el rubro: juntar la demanda del proyecto antes y durante la obra. El precio que sube con cada etapa es el argumento de venta que ningún otro producto tiene.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 11l9-7 9 7M5 9.5V21h14V9.5M9 21v-6h6v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Viviendas llave en mano</h3>
          <p>El comprador tiene el terreno y compara constructores durante meses. Deciden la confianza y la obra mostrada: documentar lo que construís pesa más que prometer plazos.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 20h20M4 20V8l8-4 8 4v12M8 12h8M8 16h8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Construcción industrial y comercial</h3>
          <p>Un B2B de ciclo largo y ticket enorme: naves, plantas, locales. Pocas búsquedas pero valiosísimas, y una decisión donde pesan los casos y la capacidad técnica que puedas mostrar.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 21V10l8-6 8 6v11M4 14h16M9 21v-4h6v4" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Steel framing y construcción en seco</h3>
          <p>El rubro que además tiene que vender el sistema: la mitad de la campaña es educar sobre el método antes de vender la obra. El contenido que explica el método suele traer compradores mejor informados.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 4l6 6-9 9H5v-6zM12 6l6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Refacciones y obras a escala</h3>
          <p>Ciclo más corto, volumen más alto y una competencia feroz por la búsqueda local. Se gana con velocidad de respuesta y una zona de trabajo bien definida en la campaña.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6h15l-1.5 9h-12z" stroke-linejoin="round"/><path d="M6 6L5 3H2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="20" r="1.3"/><circle cx="18" cy="20" r="1.3"/></svg></span>
        <div>
          <h3>Proveedores de la construcción</h3>
          <p>Materiales, aberturas, aislamiento: venderle al que construye es puro B2B de recompra. La cuenta se optimiza por cliente recurrente, no por la primera orden.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CASO DE ÉXITO =====================
     Caso REAL y con nombre: Constructora Cipolletti. El +650,87% en oportunidades
     comerciales en 90 días es la métrica publicada en la página de producción del
     caso; la cita de Francisco Cabo es la publicada ahí, verbatim. En otras páginas
     del sitio se usa su +407% en leads interanual: son dos ventanas distintas del
     mismo caso, las dos publicadas. NO mezclarlas ni inventar terceras. -->
<section class="sec-soft" id="caso">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Caso de éxito: Constructora Cipolletti</h2>
    </div>
    <div class="casebox reveal">
      <div class="case-grid">
        <div class="case-s">
          <h3>El desafío</h3>
          <p>Una constructora que comercializa proyectos en pozo y necesitaba dejar de depender del canal tradicional: más visibilidad en su región y un flujo de oportunidades propio para su equipo comercial.</p>
        </div>
        <div class="case-s">
          <h3>Qué hicimos</h3>
          <p>Desde el primer día trabajamos la visibilidad y el posicionamiento en la región objetivo, optimizando la estrategia de pauta y mejorando la tasa de conversión de las páginas de los proyectos en pozo.</p>
        </div>
        <div class="case-s">
          <h3>Resultados</h3>
          <p>Las oportunidades comerciales se multiplicaron en el primer trimestre de trabajo, y el crecimiento se tradujo en resultados de negocio en pocos meses. Hoy es uno de los casos que más nos gusta mostrar.</p>
        </div>
      </div>
      <div class="case-m">
        <b>+650%</b>
        <span><i>Aumento en oportunidades comerciales en los primeros 90 días</i> (+650,87%, el número exacto publicado). "Entendieron muy bien y rápido nuestro mercado y nuestra problemática. Hemos logrado metas que nunca imaginamos que íbamos a lograr", Francisco Cabo, CEO. Podés <a href="https://youtu.be/ZuG7lcUqWBc" target="_blank" rel="noopener">ver su testimonio en video</a>.</span>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CÓMO TRABAJAMOS ===================== -->
<section class="bg-grad" id="como">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Cómo trabajamos con tu desarrolladora</h2>
    </div>
    <div class="flow flow-4">
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">1</span>
        <h3>Diagnóstico</h3>
        <p>Miramos el proyecto: etapa de obra, precio contra la zona, unidades disponibles y de dónde salen hoy las consultas. Y cuántas de esas consultas tienen forma de pago real.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">2</span>
        <h3>Estrategia</h3>
        <p>Armamos la estructura de campañas por proyecto y por zona, con su presupuesto y su costo objetivo por consulta.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">3</span>
        <h3>Implementación</h3>
        <p>Landing por proyecto, campañas locales por canal, formularios que califican y remarketing por etapa para que ninguna consulta se enfríe.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">4</span>
        <h3>Optimización</h3>
        <p>Revisión diaria de términos y costos, presupuesto hacia el canal que trae visitas al showroom, y reportes por etapa del embudo: consultas, visitas, reservas, firmas.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===================== POR QUÉ UNA AGENCIA ESPECIALIZADA ===================== -->
<section class="sec-white" id="porque">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Por qué elegir una agencia que entiende la obra</h2>
      <p>No es romanticismo por el ladrillo. Son cuatro cosas que una agencia generalista aprende tarde, con tu preventa de por medio.</p>
    </div>
    <div class="wedo wedo-4">
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Pensamos en el ciclo completo</h3>
        <p>Una campaña inmobiliaria se juzga en trimestres, no en semanas. Los reportes están armados para ese plazo, y te decimos desde el día uno qué se puede esperar y qué no.</p>
        <span class="win">Expectativas del tamaño del ciclo</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3 8-8" stroke-linecap="round" stroke-linejoin="round"/><path d="M20 12v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h9" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>Calificamos antes de que suene el teléfono</h3>
        <p>Tu vendedor no tiene que descubrir en la llamada que el interesado no tiene forma de pago. El formulario lo pregunta antes, y la campaña aprende de las consultas que avanzaron.</p>
        <span class="win">El comercial atiende compradores</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2.5" y="4.5" width="19" height="15" rx="3"/><path d="M10 9l5 3-5 3z" fill="currentColor" stroke="none"/></svg></span>
        <h3>La obra es el mejor anuncio</h3>
        <p>El avance de obra es la prueba de que el proyecto existe y avanza. Con tus fotos de cada etapa armamos anuncios nuevos, que rinden mejor que el render repetido todo el año.</p>
        <span class="win">La obra vende la obra</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16M4 12h16M4 17h9" stroke-linecap="round"/></svg></span>
        <h3>Sin contratos de permanencia</h3>
        <p>Trabajamos mes a mes desde 2021 y los clientes se quedan más de cuatro años en promedio. En un rubro de proyectos largos, que nos elijan proyecto tras proyecto es el único contrato que vale.</p>
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
        <h2>Miramos tu proyecto juntos, gratis</h2>
        <p class="intro">Quince minutos por videollamada, con tu cuenta publicitaria y la landing de tu proyecto en pantalla. Sin presentación armada ni render de promesas.</p>
        <ol>
          <li><span>Vemos <b>a qué búsquedas se está yendo tu presupuesto</b> y cuáles traen curiosos en vez de compradores.</span></li>
          <li><span>Le damos una mirada a <b>la landing del proyecto</b>: ahí se decide si el clic se convierte en consulta.</span></li>
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
      <h2>Preguntas frecuentes sobre marketing para constructoras</h2>
    </div>
    <div class="faqo-grid">
      <details class="faqo reveal">
        <summary><h3>¿El marketing digital sirve para vender en pozo?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Es donde mejor rinde. La preventa necesita exactamente lo que la pauta hace bien: juntar interesados de una zona concreta, calificarlos y mantenerlos cerca durante los meses de la decisión, con el precio de pozo subiendo como argumento.</p>
          <p>Nuestro caso más fuerte del rubro es de preventa: <a href="#caso">+650% en oportunidades comerciales en 90 días</a>.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cuánto tarda en verse una venta?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>La firma tarda lo que tarda la decisión de compra de un inmueble, que se mide en meses. Cualquiera que te prometa escrituras en el primer mes no vendió un departamento en su vida.</p>
          <p>Por eso miramos las etapas que la cuenta puede ver: consultas calificadas y visitas pedidas. Son las señales que aparecen antes que la firma.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Cómo filtran a los que no tienen crédito ni apuro?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Preguntando antes de que llegue al vendedor: destino de la compra, forma de pago y plazo, en el mismo formulario. El que no completa eso era una visita, no una consulta.</p>
          <p>Y con la medición aprendiendo de las consultas que avanzaron a visita o reserva, para que la campaña busque más compradores parecidos a esos.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Esto reemplaza a la inmobiliaria?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>No, cambia la relación. La demanda propia te da un flujo que no depende de nadie y te sienta distinto en la mesa: la inmobiliaria pasa a ser un canal más, no el único.</p>
          <p>De hecho, muchos equipos comerciales externos trabajan mejor cuando el desarrollador les acerca consultas calificadas en lugar de esperar las suyas.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Trabajan con proveedores de la construcción?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Sí. Materiales, aberturas, aislamientos, equipamiento de obra: es B2B con recompra, y se trabaja distinto que un desarrollo. La cuenta se optimiza por el valor del cliente en el tiempo, no por el primer pedido.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Qué pasa cuando el proyecto se vende entero?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Queda la audiencia: los interesados que no llegaron a comprar, los datos de qué zona y qué perfil respondieron mejor, y una cuenta con historial. El próximo proyecto arranca con eso a favor.</p>
        </div>
      </details>
    </div>
  </div>
</section>

<!-- ===================== CTA FINAL ===================== -->
<section class="final bg-grad" id="cta">
  <div class="wrap">
    <div class="cta-ga reveal">
      <h2>Veamos qué está trayendo la pauta de tu proyecto</h2>
      <p>Quince minutos sobre tu cuenta y tu landing. Si la pauta está sana, te lo decimos y listo. Si el presupuesto se está yendo en curiosos, mejor saberlo hoy que en la entrega.</p>
      <a href="/reservar-consultoria/" class="btn btn-light">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <div class="rea">15 minutos · Sin contratos de permanencia</div>
    </div>
  </div>
</section>

</main>

<?php
get_footer();