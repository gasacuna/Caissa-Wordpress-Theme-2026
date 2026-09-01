<?php
/**
 * Template Name: Caissa — Industrias · Ecommerce
 *
 * Migrada desde industrias/ecommerce/index.html del repo Caissa-Nueva-Web-2026.
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
        "Marketing para ecommerce",
        "Google Shopping",
        "Meta Ads",
        "CRO",
        "Optimización de feeds",
        "Medición y analítica"
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
      "@id": "https://caissa.digital/industrias/ecommerce/#webpage",
      "url": "https://caissa.digital/industrias/ecommerce/",
      "name": "Agencia de Marketing Digital para Ecommerce | Caissa",
      "description": "Agencia de marketing para ecommerce: Google Shopping, Meta Ads y CRO optimizando ganancia, no solo facturación. Caso real: +249% en ventas online.",
      "inLanguage": "es",
      "isPartOf": {
        "@id": "https://caissa.digital/#organization"
      }
    },
    {
      "@type": "Service",
      "@id": "https://caissa.digital/industrias/ecommerce/#service",
      "serviceType": "Marketing digital para ecommerce",
      "name": "Agencia de Marketing Digital para Ecommerce",
      "url": "https://caissa.digital/industrias/ecommerce/",
      "description": "Performance marketing para tiendas online: Google Shopping con el feed trabajado como activo, Meta Ads de catálogo y prospecting, CRO y medición por API, con objetivos de retorno definidos por el margen de cada línea de producto.",
      "provider": {
        "@id": "https://caissa.digital/#organization"
      },
      "availableLanguage": "es",
      "audience": {
        "@type": "BusinessAudience",
        "name": "Tiendas online y ecommerce"
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
      "@id": "https://caissa.digital/industrias/ecommerce/#breadcrumb",
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
          "name": "Ecommerce",
          "item": "https://caissa.digital/industrias/ecommerce/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://caissa.digital/industrias/ecommerce/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿Qué ROAS es un buen ROAS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "El que deja ganancia con tu margen, y por eso no existe un número universal. Un ROAS 4 es excelente vendiendo con 45% de margen y una pérdida silenciosa vendiendo con 18%. Con el margen de cada línea sobre la mesa, \"buen ROAS\" empieza a significar algo concreto en tu tienda."
          }
        },
        {
          "@type": "Question",
          "name": "¿Google Shopping o Meta Ads para una tienda?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Hacen trabajos distintos sobre el mismo cliente. Shopping captura al que ya busca el producto: entra más abajo del embudo y convierte más. Meta genera la demanda que todavía no busca y recupera al que miró y no compró. La proporción entre los dos depende del rubro y de la etapa de la tienda, y se ajusta con datos, no por preferencia."
          }
        },
        {
          "@type": "Question",
          "name": "¿Sirve si hoy vendo casi todo por Mercado Libre?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Justamente. El marketplace es un canal válido, pero construir canal propio es construir margen y base de clientes: cada venta en tu tienda te deja la ganancia entera y el dato del comprador. La transición se hace sin soltar el volumen del marketplace: el canal propio crece al lado, no en contra."
          }
        },
        {
          "@type": "Question",
          "name": "¿Con qué tiendas trabajan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Con tiendas que ya venden y quieren escalar: nuestro servicio de ecommerce rinde a pleno en operaciones que facturan desde unos USD 50.000 por mes. Y como con todos nuestros clientes, trabajamos con empresas que invierten más de USD 3.000 por mes en marketing digital. Si tu tienda todavía no está ahí, te lo decimos en la primera llamada y te orientamos igual."
          }
        },
        {
          "@type": "Question",
          "name": "¿En cuánto tiempo se ven resultados?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Shopping compra demanda que ya existe, así que los anuncios pueden empezar a mostrarse apenas se aprueban. Cuánto tarda en haber datos para saber qué línea rinde depende del volumen de tu tienda. Lo que lleva más tiempo es la estructura por márgenes y la medición, que es lo que después permite decidir con números."
          }
        },
        {
          "@type": "Question",
          "name": "¿Qué pasa con iOS y las cookies? ¿Se puede medir bien?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Perfecto ya no. Medición por API además del píxel, deduplicación correcta y modelos de atribución leídos con criterio recuperan buena parte de lo que iOS esconde. La diferencia no es cosmética: una cuenta que ve más conversiones reales tiene mejor información para pujar."
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
      <h1>Agencia de Marketing Digital para Ecommerce</h1>
      <p class="hga-claim">El objetivo es el <span class="hl">margen<svg class="grow" viewBox="0 0 220 70" preserveAspectRatio="none" aria-hidden="true">
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
      </svg></span><br /> no la facturación</p>
      <p class="hga-sub">Trabajamos con tiendas online que ya venden y quieren escalar sin quemar rentabilidad. Google Shopping, Meta Ads y CRO optimizando el mismo número: el que queda después de los costos.</p>
      <div class="hga-cta">
        <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <p class="hga-note">Sin contratos de permanencia. Quince minutos sobre tu tienda.</p>
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
      <!-- La caja del día: el visual propio de esta landing. La tesis sin texto: dos
           productos con el mismo ROAS pueden ser un negocio y una pérdida, porque el
           margen manda. No repite la bandeja, el calendario, la agenda ni el pipeline.
           Datos ilustrativos, de ninguna tienda real. -->
      <div class="caja" role="img" aria-label="Panel de ventas de una tienda online: dos productos con el mismo retorno publicitario y márgenes muy distintos">
        <div class="caja-h">
          <b>Tu pauta, producto por producto</b>
          <span>mismo ROAS, distinta ganancia</span>
        </div>
        <div class="caja-rows">
          <div class="caja-r win">
            <div class="cj-top"><b>Sommier Premium 2 plazas</b><span class="cj-roas">ROAS 4,0</span></div>
            <div class="cj-bar"><i style="width:62%"></i></div>
            <div class="cj-bot"><span>Margen 45%</span><b class="cj-res ok">deja ganancia</b></div>
          </div>
          <div class="caja-r lose">
            <div class="cj-top"><b>Almohada viscoelástica</b><span class="cj-roas">ROAS 4,0</span></div>
            <div class="cj-bar"><i style="width:24%"></i></div>
            <div class="cj-bot"><span>Margen 18%</span><b class="cj-res no">pierde plata</b></div>
          </div>
        </div>
        <div class="caja-f">
          <b>El ROAS de pantalla empata</b>
          <span class="caja-nota">el banco no</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== DE DÓNDE SALEN HOY LAS VENTAS ===================== -->
<section class="sec-white" id="ventas">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>De dónde salen hoy las ventas de una tienda online</h2>
      <p>Antes de hablar de campañas conviene mirar de dónde sale hoy la facturación, y cuánta de esa facturación es ganancia.</p>
    </div>
    <ul class="pain">
      <li class="reveal">
        <b>Del marketplace, con el margen de otro</b>
        <span>Mercado Libre te da volumen, pero entre la comisión, los envíos y la guerra de precio contra el de al lado, la ganancia se queda en la plataforma. Y el cliente también.</span>
      </li>
      <li class="reveal">
        <b>De un ROAS que se ve bien y paga mal</b>
        <span>La cuenta muestra un retorno sano y el banco no lo encuentra por ningún lado. El ROAS sin margen adentro es el número más peligroso del ecommerce: justifica seguir perdiendo plata.</span>
      </li>
      <li class="reveal">
        <b>De promos que canibalizan</b>
        <span>El descuento que empuja las ventas del mes también se lo aplica al que iba a comprar igual. Facturación que sube, rentabilidad que baja, y la sensación de correr cada vez más rápido para el mismo lugar.</span>
      </li>
      <li class="reveal">
        <b>De un catálogo tratado como si fuera un producto</b>
        <span>Todo el inventario en la misma campaña, con el mismo objetivo. El producto estrella termina financiando la pauta del que no rota, y nadie lo ve porque el promedio da bien.</span>
      </li>
      <li class="reveal">
        <b>De carritos que se abandonan y nadie persigue</b>
        <span>La mayoría de los carritos no se convierten en compra. Sin un remarketing que trabaje ese momento, la tienda paga por llevar gente hasta la caja y la deja ir con el carrito lleno.</span>
      </li>
      <li class="reveal">
        <b>Y de una medición que quedó vieja</b>
        <span>Entre iOS, los bloqueadores y las cookies que se van, buena parte de las conversiones se pierde en el camino. Con datos rotos, hasta el mejor analista optimiza a ciegas.</span>
      </li>
    </ul>
  </div>
</section>

<!-- ===================== EL ROAS NO ES GANANCIA =====================
     Sección propia de esta página (el equivalente del #reglas de abogados): la unidad
     económica. El diferenciador contra la agencia que optimiza facturación.
     Los números del ejemplo son ILUSTRATIVOS y está aclarado al pie. -->
<section class="sec-soft" id="margen">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>El ROAS no es ganancia</h2>
      <p>Dos productos pueden tener el mismo retorno publicitario y resultados opuestos, porque el margen de cada uno es distinto. La cuenta que optimiza "el ROAS de la cuenta" está optimizando un promedio que no existe.</p>
    </div>
    <div class="rules">
      <article class="rule-c no reveal">
        <h3>Cómo se rompe una tienda rentable</h3>
        <ul>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg><span>Un ROAS objetivo único para todo el catálogo, como si el producto de margen alto y el de margen finito fueran el mismo negocio.</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg><span>Escalar presupuesto sobre la facturación: cuanto más vende, más pierde, y el crecimiento tapa el agujero hasta que no lo tapa más.</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg><span>Medir la promo por lo que vendió, nunca por cuánto de eso se hubiera vendido sin descuento.</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg><span>Ignorar la recompra: tratar igual al producto que trae un cliente que vuelve y al que trae una venta única.</span></li>
        </ul>
      </article>
      <article class="rule-c si reveal">
        <h3>Cómo se escala con margen</h3>
        <ul>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Un ROAS objetivo por línea de producto, calculado desde el margen real de cada una. El de 45% de margen puede pagar tráfico que el de 18% no puede.</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span>El presupuesto se corre hacia lo que deja ganancia, aunque facture menos: la meta es el resultado del mes, no el gráfico de ventas.</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span>La recompra en la ecuación: el producto puerta de entrada puede tolerar más costo si el cliente vuelve. Eso se mide, no se supone.</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Y el margen viaja a la máquina: cuando el algoritmo conoce la ganancia de cada venta, optimiza rentabilidad en vez de volumen.</span></li>
        </ul>
      </article>
    </div>
    <div class="rules-note reveal">
      <p><b>Por eso trabajamos con tus márgenes.</b> Cuando nos pasás el margen de cada línea, los objetivos de la pauta se pueden fijar sobre ese número en vez de sobre un promedio. Los números de esta sección son un ejemplo ilustrativo; los tuyos son los que mandan.</p>
    </div>
  </div>
</section>

<!-- ===================== ESTRATEGIAS ===================== -->
<section class="bg-grad" id="estrategias">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Estrategias de marketing digital para ecommerce</h2>
      <p>Cuatro piezas que trabajan juntas. Ninguna sirve sola: podés tener el mejor tráfico del mundo y perderlo en un checkout de cinco pasos.</p>
    </div>
    <div class="wedo wedo-4">
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6h15l-1.5 9h-12z" stroke-linejoin="round"/><path d="M6 6L5 3H2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="20" r="1.4"/><circle cx="18" cy="20" r="1.4"/></svg></span>
        <h3>Google Shopping con el feed como producto</h3>
        <p>Shopping vive del feed: títulos, precios, disponibilidad y categorías deciden qué subasta jugás. Lo trabajamos como un activo, con campañas separadas por margen y no por costumbre.</p>
        <span class="win">El catálogo compitiendo entero</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="3.5"/><path d="M3 15l5-5 4 4 3-3 6 6" stroke-linecap="round" stroke-linejoin="round"/><circle cx="15" cy="8" r="1.6"/></svg></span>
        <h3>Meta Ads: catálogo, prospecting y recupero</h3>
        <p>La vidriera que sale a buscar al cliente: creatividades que muestran el producto en uso, públicos parecidos a tus compradores y el catálogo dinámico persiguiendo carritos y vistas.</p>
        <span class="win">Demanda nueva todos los días</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 7h6v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>CRO: que la tienda convierta lo que la pauta trae</h3>
        <p>Fichas de producto, envíos claros, checkout sin fricción. Cuando la conversión mejora, todo el tráfico que ya estás pagando rinde más. Es la palanca menos usada del ecommerce.</p>
        <span class="win">Más ventas con el mismo tráfico</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3v3M12 18v3M3 12h3M18 12h3M5.6 5.6l2.1 2.1M16.3 16.3l2.1 2.1M18.4 5.6l-2.1 2.1M7.7 16.3l-2.1 2.1" stroke-linecap="round"/><circle cx="12" cy="12" r="3.4"/></svg></span>
        <h3>Medición que sobrevive a iOS</h3>
        <p>Conversiones por API además del píxel, deduplicación bien hecha y el margen viajando con cada venta. La mitad del rendimiento de una cuenta moderna es la calidad de sus datos.</p>
        <span class="win">Decisiones con el número entero</span>
      </article>
    </div>
    <div class="sec-cta reveal">
      <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<!-- ===================== RUBROS ===================== -->
<section class="sec-white" id="especialidades">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Rubros de ecommerce con los que trabajamos</h2>
      <p>Un colchón se compra una vez cada década y un suplemento todos los meses. El rubro define el ticket, la recompra y la estrategia entera.</p>
    </div>
    <div class="ind-grid">
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 18v-5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v5M3 18h18M5 11V7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4M6 18v2M18 18v2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Hogar, deco y descanso</h3>
          <p>Ticket alto, comparación larga y compra que se piensa de a dos. El rubro de nuestros casos más conocidos: acá el remarketing y las cuotas claras hacen la mitad del trabajo.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 4l-5 4 3 3 2-1.5V20h8v-10.5L18 11l3-3-5-4a4 4 0 0 1-8 0z" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Indumentaria y moda</h3>
          <p>Catálogo grande, temporadas cortas y devoluciones que muerden el margen. La rotación manda: la campaña tiene que mover el stock de la temporada, no el promedio del año.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M5.5 6.5c3 3.5 10 3.5 13 0M5.5 17.5c3-3.5 10-3.5 13 0" stroke-linecap="round"/></svg></span>
        <div>
          <h3>Deporte y outdoor</h3>
          <p>Comunidades apasionadas que saben exactamente qué buscan. Se gana con especificidad: el aviso genérico de "zapatillas" pierde contra el que habla el idioma del que entrena.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18h6M10 21h4M12 3a6 6 0 0 1 3.5 10.9c-.6.5-1 1.2-1 2.1h-5c0-.9-.4-1.6-1-2.1A6 6 0 0 1 12 3z" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Iluminación y electro</h3>
          <p>Productos técnicos con specs que el comprador compara en planillas. El feed impecable y la ficha que responde todo convierten más que cualquier descuento.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12a9 9 0 1 1 3 6.7" stroke-linecap="round"/><path d="M3 20v-5h5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Consumo recurrente</h3>
          <p>Alimentos, suplementos, mascotas: acá el cliente vale lo que compra en un año, no en un pedido. El costo de adquisición se calcula contra la recurrencia, y eso cambia cuánto podés pujar.</p>
        </div>
      </div>
      <div class="ind reveal">
        <span class="ind-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21V9l6-3v15M9 21V12l6-2.5V21M15 21V13l6-2v10" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Mayorista y B2B online</h3>
          <p>El comprador es una empresa que repone: pedidos grandes, lista de precios y decisión racional. La cuenta se optimiza por cliente activo, no por transacción suelta.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CASO DE ÉXITO =====================
     Caso REAL y con nombre: Colchonería Ideal. El +249% en ventas online interanual es
     la métrica publicada (producción, home y /reviews/). La cita de Néstor es la de la
     grilla de testimonios de producción, verbatim. El dato del segundo ecommerce viene
     de la reseña publicada en la home. NO agregar cifras que no estén publicadas. -->
<section class="sec-soft" id="caso">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Caso de éxito: Colchonería Ideal</h2>
    </div>
    <div class="casebox reveal">
      <div class="case-grid">
        <div class="case-s">
          <h3>El desafío</h3>
          <p>Un ecommerce de descanso en un rubro de ticket alto y comparación feroz, donde el margen se define en cada subasta. El objetivo era escalar las ventas online sin que la rentabilidad se quedara en el camino.</p>
        </div>
        <div class="case-s">
          <h3>Qué hicimos</h3>
          <p>Estructura de campañas por línea de producto, el feed de Shopping trabajado como un activo, remarketing sobre el comprador que compara y optimización de la conversión de la tienda para aprovechar cada visita.</p>
        </div>
        <div class="case-s">
          <h3>Resultados</h3>
          <p>Las ventas online más que se triplicaron año contra año, y el proyecto creció hasta el punto de lanzar un segundo ecommerce, trabajado juntos desde el día cero.</p>
        </div>
      </div>
      <div class="case-m">
        <b>+249%</b>
        <span><i>Aumento interanual en ventas online.</i> "Junto a Caissa, crecimos desde cero y superamos todas las expectativas", Néstor, CEO de Colchonería Ideal. Podés <a href="https://youtu.be/Z5jpdRI63DY" target="_blank" rel="noopener">ver su testimonio en video</a>.</span>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CÓMO TRABAJAMOS ===================== -->
<section class="bg-grad" id="como">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Cómo trabajamos con tu tienda</h2>
    </div>
    <div class="flow flow-4">
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">1</span>
        <h3>Diagnóstico</h3>
        <p>Miramos la cuenta y la tienda: a qué productos y búsquedas se está yendo el presupuesto hoy.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">2</span>
        <h3>Estrategia</h3>
        <p>Estructura de campañas por línea de producto, con su presupuesto y su objetivo de retorno. Shopping captura, Meta prospecta, el remarketing recupera.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">3</span>
        <h3>Implementación</h3>
        <p>Feed optimizado, campañas por margen, catálogo dinámico en Meta, medición por API con deduplicación, y los primeros tests de CRO sobre lo que más frena la conversión.</p>
      </div>
      <div class="flow-s reveal">
        <span class="flow-n" aria-hidden="true">4</span>
        <h3>Optimización</h3>
        <p>Revisión diaria: el presupuesto se corre hacia lo que deja ganancia, el feed se mantiene sano y los reportes te dicen cuánto quedó, no solo cuánto entró.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===================== POR QUÉ UNA AGENCIA ESPECIALIZADA ===================== -->
<section class="sec-white" id="porque">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Por qué elegir una agencia que entiende ecommerce</h2>
      <p>No es amor por los carritos. Son cuatro cosas que una agencia generalista aprende tarde, con tu margen pagando la escuela.</p>
    </div>
    <div class="wedo wedo-4">
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 6.5c0-1.9-2.2-3-5-3s-5 1.1-5 3 1.8 2.6 5 3.2 5 1.4 5 3.3-2.2 3-5 3-5-1.1-5-3" stroke-linecap="round"/></svg></span>
        <h3>Optimizamos ganancia, no facturación</h3>
        <p>Cualquier agencia puede hacer crecer el gráfico de ventas quemando margen. Nosotros apuntamos la pauta con tus márgenes como referencia, y el éxito se mide en lo que queda.</p>
        <span class="win">El número del banco, no el del panel</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16v4H4zM4 12h7v8H4zM15 12h5v8h-5z" stroke-linejoin="round"/></svg></span>
        <h3>Tratamos el feed como un producto</h3>
        <p>En Shopping, el feed es la campaña: un título mal armado es una subasta que no jugás. Por eso el feed entra en el trabajo de la cuenta, no queda como problema de otro.</p>
        <span class="win">La base técnica que casi nadie hace</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 7h6v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <h3>CRO adentro del servicio</h3>
        <p>La agencia de tráfico te trae visitas y el problema queda en tu checkout. Nosotros trabajamos la conversión de la tienda como parte del mismo sistema, porque es el mismo número.</p>
        <span class="win">La tienda y la pauta, un solo equipo</span>
      </article>
      <article class="wedo-c reveal">
        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16M4 12h16M4 17h9" stroke-linecap="round"/></svg></span>
        <h3>Sin contratos de permanencia</h3>
        <p>Trabajamos mes a mes desde 2021 y los clientes se quedan más de cuatro años en promedio. En un rubro donde todo se mide, la permanencia voluntaria es la única métrica que no se puede inflar.</p>
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
        <h2>Miramos tu pauta juntos, gratis</h2>
        <p class="intro">Quince minutos por videollamada, con tu cuenta publicitaria y tu tienda en pantalla. Sin presentación armada ni promesas de ROAS mágico.</p>
        <ol>
          <li><span>Vemos <b>a qué búsquedas y productos se está yendo el presupuesto</b>, y cuáles lo están devolviendo.</span></li>
          <li><span>Revisamos <b>si tu medición está entera</b> o si estás optimizando con la mitad de los datos.</span></li>
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
      <h2>Preguntas frecuentes sobre marketing para ecommerce</h2>
    </div>
    <div class="faqo-grid">
      <details class="faqo reveal">
        <summary><h3>¿Qué ROAS es un buen ROAS?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>El que deja ganancia con tu margen, y por eso no existe un número universal. Un ROAS 4 es excelente vendiendo con 45% de margen y una pérdida silenciosa vendiendo con 18%.</p>
          <p>Con <a href="#margen">el margen de cada línea</a> sobre la mesa, "buen ROAS" empieza a significar algo concreto en tu tienda.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Google Shopping o Meta Ads para una tienda?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Hacen trabajos distintos sobre el mismo cliente. Shopping captura al que ya busca el producto: entra más abajo del embudo y convierte más. Meta genera la demanda que todavía no busca y recupera al que miró y no compró.</p>
          <p>La proporción entre los dos depende del rubro y de la etapa de la tienda, y se ajusta con datos, no por preferencia.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Sirve si hoy vendo casi todo por Mercado Libre?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Justamente. El marketplace es un canal válido, pero construir canal propio es construir margen y base de clientes: cada venta en tu tienda te deja la ganancia entera y el dato del comprador.</p>
          <p>La transición se hace sin soltar el volumen del marketplace: el canal propio crece al lado, no en contra.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Con qué tiendas trabajan?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Con tiendas que ya venden y quieren escalar: nuestro servicio de ecommerce rinde a pleno en operaciones que facturan desde unos USD 50.000 por mes. Y como con todos nuestros clientes, trabajamos con empresas que invierten más de USD 3.000 por mes en marketing digital.</p>
          <p>Si tu tienda todavía no está ahí, te lo decimos en la primera llamada y te orientamos igual.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿En cuánto tiempo se ven resultados?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Shopping compra demanda que ya existe, así que los anuncios pueden empezar a mostrarse apenas se aprueban. Cuánto tarda en haber datos para saber qué línea rinde depende del volumen de tu tienda.</p>
          <p>Lo que lleva más tiempo es la estructura por márgenes y la medición, que es lo que después permite decidir con números.</p>
        </div>
      </details>
      <details class="faqo reveal">
        <summary><h3>¿Qué pasa con iOS y las cookies? ¿Se puede medir bien?</h3><svg class="faqo-chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
        <div class="faqo-body">
          <p>Perfecto ya no. Medición por API además del píxel, deduplicación correcta y modelos de atribución leídos con criterio recuperan buena parte de lo que iOS esconde.</p>
          <p>La diferencia no es cosmética: una cuenta que ve más conversiones reales tiene mejor información para pujar.</p>
        </div>
      </details>
    </div>
  </div>
</section>

<!-- ===================== CTA FINAL ===================== -->
<section class="final bg-grad" id="cta">
  <div class="wrap">
    <div class="cta-ga reveal">
      <h2>Miremos tu cuenta antes de seguir escalando</h2>
      <p>Quince minutos sobre tu cuenta y tu tienda. Si la pauta está sana, te lo decimos y listo. Si hay plata yéndose en clics que no venden, mejor descubrirlo hoy.</p>
      <a href="/reservar-consultoria/" class="btn btn-light">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <div class="rea">15 minutos · Sin contratos de permanencia</div>
    </div>
  </div>
</section>

</main>

<?php
get_footer();