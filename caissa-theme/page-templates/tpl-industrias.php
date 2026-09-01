<?php
/**
 * Template Name: Caissa — Industrias (hub)
 *
 * Migrada desde industrias/index.html del repo Caissa-Nueva-Web-2026.
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
        "Google Ads",
        "Meta Ads",
        "Performance Marketing",
        "Marketing por industria",
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
      "@type": "CollectionPage",
      "@id": "https://caissa.digital/industrias/#webpage",
      "url": "https://caissa.digital/industrias/",
      "name": "Marketing Digital por Industria | Caissa",
      "description": "Estrategias de marketing digital por industria: ecommerce, constructoras, salud, turismo y abogados. Casos reales con resultados publicados en cada rubro.",
      "inLanguage": "es",
      "isPartOf": {
        "@id": "https://caissa.digital/#organization"
      },
      "mainEntity": {
        "@type": "ItemList",
        "numberOfItems": 5,
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Marketing digital para ecommerce",
            "item": "https://caissa.digital/industrias/ecommerce/"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "Marketing digital para constructoras y desarrolladoras",
            "item": "https://caissa.digital/industrias/constructoras/"
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "Marketing digital para salud: clínicas y centros médicos",
            "item": "https://caissa.digital/industrias/salud/"
          },
          {
            "@type": "ListItem",
            "position": 4,
            "name": "Marketing digital para turismo y agencias de viajes",
            "item": "https://caissa.digital/industrias/turismo/"
          },
          {
            "@type": "ListItem",
            "position": 5,
            "name": "Marketing digital para abogados y estudios jurídicos",
            "item": "https://caissa.digital/industrias/abogados/"
          }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://caissa.digital/industrias/#breadcrumb",
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
    <h1>Marketing digital por industria</h1>
    <p>No es lo mismo vender un colchón que un departamento en pozo. Cada rubro tiene su manera de buscar, de comparar y de decidir, y la campaña tiene que respetarla. Acá te contamos cómo trabajamos cada uno, con su caso real adentro.</p>
  </div>
</section>

<!-- ===================== LAS INDUSTRIAS =====================
     Una tarjeta por página del árbol /industrias/. La métrica de cada una es la del
     caso real publicado en esa página: no inventar ni redondear para arriba.
     Si nace una industria nueva, se suma acá y en el ItemList del JSON-LD. -->
<section class="sec-white" id="industrias">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Elegí tu industria</h2>
    </div>
    <div class="hubgrid">
      <article class="hub-c reveal">
        <div class="hub-m">+249%</div>
        <div class="hub-ml">en ventas online, interanual</div>
        <h3><a href="/industrias/ecommerce/">Ecommerce</a></h3>
        <p>Pauta apuntada al margen, no solo a la facturación: Shopping, Meta y CRO sobre el mismo número.</p>
        <span class="go">Ver la estrategia <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </article>
      <article class="hub-c reveal">
        <div class="hub-m">+650%</div>
        <div class="hub-ml">en oportunidades comerciales en 90 días</div>
        <h3><a href="/industrias/constructoras/">Constructoras y desarrolladoras</a></h3>
        <p>Vender en pozo con un embudo que junta interesados hoy para firmar dentro de meses.</p>
        <span class="go">Ver la estrategia <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </article>
      <article class="hub-c reveal">
        <div class="hub-m">+207%</div>
        <div class="hub-ml">en leads, con un CPA 40% más bajo</div>
        <h3><a href="/industrias/salud/">Salud: clínicas y centros médicos</a></h3>
        <p>Traer al paciente que ya te busca, dentro de las políticas más estrictas que existen.</p>
        <span class="go">Ver la estrategia <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </article>
      <article class="hub-c reveal">
        <div class="hub-m">+85%</div>
        <div class="hub-ml">en ventas de viajes en cruceros</div>
        <h3><a href="/industrias/turismo/">Turismo y agencias de viajes</a></h3>
        <p>El viajero decide con meses de anticipación, y la inversión puede seguir ese calendario.</p>
        <span class="go">Ver la estrategia <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </article>
      <article class="hub-c reveal">
        <div class="hub-m">+250%</div>
        <div class="hub-ml">en leads calificados</div>
        <h3><a href="/industrias/abogados/">Abogados y estudios jurídicos</a></h3>
        <p>Campañas por materia y páginas que califican, para que entren consultas y no curiosos.</p>
        <span class="go">Ver la estrategia <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </article>
      <article class="hub-c alt reveal">
        <div class="hub-ml" style="margin-top:6px">¿Tu rubro no está en la lista?</div>
        <h3>B2B, industria, servicios y más</h3>
        <p>Trabajamos con más de 50 empresas de rubros que van de la industria pesada al retail. Si el tuyo no tiene página propia todavía, la consultoría es el mismo punto de partida.</p>
        <a href="/reservar-consultoria/" class="go">Reservá tu consultoría gratuita <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </article>
    </div>
  </div>
</section>

<!-- ===================== POR QUÉ POR INDUSTRIA ===================== -->
<section class="sec-soft" id="porque">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Por qué trabajamos por industria</h2>
      <p>Porque después de años trabajando rubros distintos aprendimos que tres cosas cambian de uno a otro, y las tres definen cómo se arma la campaña.</p>
    </div>
    <div class="hubwhy">
      <article class="hw reveal">
        <b>Cómo busca el cliente</b>
        <p>El paciente busca con urgencia, el comprador de un departamento investiga meses y el viajero sueña antes de buscar. El mismo anuncio no puede hablarles a los tres.</p>
      </article>
      <article class="hw reveal">
        <b>Cuánto vale cada venta</b>
        <p>Un lead de construcción vale cientos de veces más que un carrito promedio. Ese número define cuánto conviene pagar por cada clic, y por eso no puede ser el mismo en dos rubros.</p>
      </article>
      <article class="hw reveal">
        <b>Qué se puede decir</b>
        <p>Salud y abogados tienen reglas duras sobre qué se publicita y cómo. Saber de antemano por dónde pasan esos límites ahorra rechazos y demoras.</p>
      </article>
    </div>
  </div>
</section>

<!-- ===================== CTA FINAL ===================== -->
<section class="final bg-grad" id="cta">
  <div class="wrap">
    <div class="cta-ga reveal">
      <h2>Contanos de qué rubro sos</h2>
      <p>Quince minutos por videollamada con tu cuenta en pantalla. Salís con una lectura honesta de tu industria y de tu inversión, trabajemos juntos o no.</p>
      <a href="/reservar-consultoria/" class="btn btn-light">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <div class="rea">15 minutos · Sin contratos de permanencia</div>
    </div>
  </div>
</section>

</main>

<?php
get_footer();