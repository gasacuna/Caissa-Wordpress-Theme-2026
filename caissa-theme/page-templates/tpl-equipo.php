<?php
/**
 * Template Name: Caissa — Equipo y valores
 *
 * Migrada desde equipo/index.html del repo Caissa-Nueva-Web-2026.
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
      "description": "Agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads).",
      "foundingDate": "2021",
      "numberOfEmployees": { "@type": "QuantitativeValue", "value": 9 },
      "founder": [
        { "@type": "Person", "name": "Manuel Ferrini", "jobTitle": "CEO & Co-Founder", "sameAs": "https://ar.linkedin.com/in/manuelferrini" },
        { "@type": "Person", "name": "Martín Pera", "jobTitle": "COO & Co-Founder" }
      ],
      "employee": [
        { "@type": "Person", "name": "Manuel Ferrini", "jobTitle": "CEO & Co-Founder" },
        { "@type": "Person", "name": "Martín Pera", "jobTitle": "COO & Co-Founder" },
        { "@type": "Person", "name": "Gastón Acuña", "jobTitle": "Growth Engineer" },
        { "@type": "Person", "name": "José Salinas", "jobTitle": "Performance Manager" },
        { "@type": "Person", "name": "Liana Valdebenito", "jobTitle": "Analista de Performance" },
        { "@type": "Person", "name": "Juan Fornero", "jobTitle": "Analista de Performance" },
        { "@type": "Person", "name": "Lucas Accoce", "jobTitle": "Analista de Performance" },
        { "@type": "Person", "name": "Facundo Álvarez", "jobTitle": "Analista de Performance" },
        { "@type": "Person", "name": "Candela Pesiney", "jobTitle": "Analista de Performance" }
      ],
      "sameAs": [
        "https://www.linkedin.com/company/caissa-digital",
        "https://www.instagram.com/caissa_digital/",
        "https://clutch.co/profile/caissa",
        "https://www.sortlist.es/agency/caissa"
      ]
    },
    {
      "@type": "AboutPage",
      "@id": "https://caissa.digital/equipo/#webpage",
      "url": "https://caissa.digital/equipo/",
      "name": "Nuestro equipo y nuestros valores | Caissa",
      "description": "Conocé a las nueve personas del equipo de Caissa y los seis valores que sostienen nuestra forma de trabajar: respeto, integridad y servicio experto.",
      "inLanguage": "es-AR",
      "about": { "@id": "https://caissa.digital/#organization" }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://caissa.digital/equipo/#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://caissa.digital/" },
        { "@type": "ListItem", "position": 2, "name": "Equipo", "item": "https://caissa.digital/equipo/" }
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
    <h1>Equipo de Caissa</h1>
    <p>Conocé a los profesionales que están detrás de cada caso de éxito</p>
  </div>
</section>

<!-- ===================== LAS PERSONAS =====================
     Los nueve nombres y cargos son literalmente los de caissa.digital/equipo/,
     en el mismo orden. No agregar ni sacar a nadie sin que lo pida Manu. -->
<section class="sec-white" id="personas">
  <div class="wrap">
    <!-- El H2 va oculto a la vista (pedido de Manuel el 24/08/2026: "ya dice Equipo de
         Caissa"), pero se conserva para lectores de pantalla y para la estructura del
         documento: sin el, los nueve H3 colgarian directo del H1. -->
    <h2 class="pf3-sr">Las personas</h2>
    <div class="tm">
      <article class="tm-c founder has-pf reveal">
        <div class="tm-ph"><img src="<?php echo CAISSA_IMG; ?>/equipo/fotos/manuel-ferrini.webp" alt="Manuel Ferrini" width="300" height="400" fetchpriority="high" decoding="async" /></div>
        <h3 class="tm-n"><a href="/equipo/manu-ferrini/">Manuel Ferrini</a></h3>
        <span class="tm-r">CEO &amp; Co-Founder</span>
        <span class="tm-pf">Ver perfil <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </article>
      <article class="tm-c founder has-pf reveal">
        <div class="tm-ph"><img src="<?php echo CAISSA_IMG; ?>/equipo/fotos/martin-pera.webp" alt="Martín Pera" width="300" height="400" loading="lazy" decoding="async" /></div>
        <h3 class="tm-n"><a href="/equipo/martin-pera/">Martín Pera</a></h3>
        <span class="tm-r">COO &amp; Co-Founder</span>
        <span class="tm-pf">Ver perfil <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
      </article>
      <article class="tm-c reveal">
        <div class="tm-ph"><img src="<?php echo CAISSA_IMG; ?>/equipo/fotos/gaston-acuna.webp" alt="Gastón Acuña" width="300" height="400" loading="lazy" decoding="async" /></div>
        <h3 class="tm-n">Gastón Acuña</h3>
        <span class="tm-r">Growth Engineer</span>
      </article>
      <article class="tm-c reveal">
        <div class="tm-ph"><img src="<?php echo CAISSA_IMG; ?>/equipo/fotos/jose-salinas.webp" alt="José Salinas" width="300" height="400" loading="lazy" decoding="async" /></div>
        <h3 class="tm-n">José Salinas</h3>
        <span class="tm-r">Performance Manager</span>
      </article>
      <article class="tm-c reveal">
        <div class="tm-ph"><img src="<?php echo CAISSA_IMG; ?>/equipo/fotos/liana-valdebenito.webp" alt="Liana Valdebenito" width="300" height="400" loading="lazy" decoding="async" /></div>
        <h3 class="tm-n">Liana Valdebenito</h3>
        <span class="tm-r">Analista de Performance</span>
      </article>
      <article class="tm-c reveal">
        <div class="tm-ph"><img src="<?php echo CAISSA_IMG; ?>/equipo/fotos/juan-fornero.webp" alt="Juan Fornero" width="300" height="400" loading="lazy" decoding="async" /></div>
        <h3 class="tm-n">Juan Fornero</h3>
        <span class="tm-r">Analista de Performance</span>
      </article>
      <article class="tm-c reveal">
        <div class="tm-ph"><img src="<?php echo CAISSA_IMG; ?>/equipo/fotos/lucas-accoce.webp" alt="Lucas Accoce" width="300" height="400" loading="lazy" decoding="async" /></div>
        <h3 class="tm-n">Lucas Accoce</h3>
        <span class="tm-r">Analista de Performance</span>
      </article>
      <article class="tm-c reveal">
        <div class="tm-ph"><img src="<?php echo CAISSA_IMG; ?>/equipo/fotos/facundo-alvarez.webp" alt="Facundo Álvarez" width="300" height="400" loading="lazy" decoding="async" /></div>
        <h3 class="tm-n">Facundo Álvarez</h3>
        <span class="tm-r">Analista de Performance</span>
      </article>
      <article class="tm-c reveal">
        <div class="tm-ph"><img src="<?php echo CAISSA_IMG; ?>/equipo/fotos/candela-pesiney.webp" alt="Candela Pesiney" width="300" height="400" loading="lazy" decoding="async" /></div>
        <h3 class="tm-n">Candela Pesiney</h3>
        <span class="tm-r">Analista de Performance</span>
      </article>
    </div>
  </div>
</section>


<!-- ===================== NUESTROS VALORES =====================
     Fusion de la vieja /valores/, absorbida acá el 24/08/2026 (esa URL murio y necesita
     301 a /equipo/#valores al publicar). El texto es literal de caissa.digital/valores/,
     con las mismas negritas: son los valores de la empresa, no copy de marketing, asi que
     no se reescriben sin que lo pida Manu.
     Tratamiento de manifiesto (lista numerada 01-06 con hairlines) y no de tarjetas: seis
     tarjetas iguales habrian quedado como cualquier otra seccion del sitio.
     sec-soft y no sec-white: #personas, acá arriba, ya es blanca. -->
<section class="sec-soft" id="valores">
  <div class="wrap">
    <div class="vhead head-left reveal">
      <h2>Nuestros valores</h2>
      <p>Nuestros valores nos mantienen unidos ante los más grandes obstáculos, y nos permiten innovar y alcanzar metas que antes parecían imposibles, como también recorrer con claridad el camino, o guiarnos si nos desviamos.</p>
    </div>

    <div class="quote reveal">
      <blockquote>
        En lo que nos convertimos en la vida depende de nuestra elección de valores y acciones.
        <cite>Mahatma Gandhi</cite>
      </blockquote>
    </div>

    <ol class="vals">
      <li class="reveal">
        <div class="val-k">
          <span class="val-n">01</span>
          <h3>Respeto</h3>
        </div>
        <p class="val-t">No podemos concebir la idea de trabajar sin respeto. <b>En Caissa respetamos el tiempo de los demás</b>, las opiniones de cada persona, a cada profesional, a cada partner y, por sobre todo, a cada persona.</p>
      </li>
      <li class="reveal">
        <div class="val-k">
          <span class="val-n">02</span>
          <h3>Integridad</h3>
        </div>
        <p class="val-t">Nuestras acciones y decisiones son tomadas desde la integridad, <b>buscando en todo momento lograr los mejores resultados</b> sin afectar los intereses de los demás individuos.</p>
      </li>
      <li class="reveal">
        <div class="val-k">
          <span class="val-n">03</span>
          <h3>Servicio Experto</h3>
        </div>
        <p class="val-t">Nuestro equipo está capacitado para brindar <b>un servicio experto, lo cual es el sello de nuestra marca</b>. No somos un “resuelve todo”, nos enfocamos en el servicio de paid media y <b>nos capacitamos constantemente en la materia para ejecutarlo con excelencia.</b></p>
      </li>
      <li class="reveal">
        <div class="val-k">
          <span class="val-n">04</span>
          <h3>Play To Win</h3>
        </div>
        <p class="val-t"><b>Nuestro objetivo principal es hacer ganar a nuestros clientes.</b> Cada uno de nuestros socios tiene una meta distinta, por esto nos enfocamos en cada uno de ellos para definir cuál es la victoria que necesitan y damos todo para colaborar en el camino hacia ella.</p>
      </li>
      <li class="reveal">
        <div class="val-k">
          <span class="val-n">05</span>
          <h3>Trabajo Extraordinario</h3>
        </div>
        <p class="val-t">Vemos más allá de las tareas específicas de nuestro core, extendiendo este estándar de excelencia y cuidado a todas las áreas que integran el negocio de nuestro cliente. <b>Trabajamos en cooperación con profesionales externos para que</b> cada cliente <b>pueda asesorarse de manera correcta</b> en todas las áreas que requiera.</p>
      </li>
      <li class="reveal">
        <div class="val-k">
          <span class="val-n">06</span>
          <h3>Cooperación</h3>
        </div>
        <p class="val-t">Es la base de Caissa. Para nosotros, <b>la cooperación es el principal valor y la clave para lograr todos los objetivos propuestos</b>, tanto de forma interna como en las relaciones con los equipos de trabajo externos y clientes.</p>
      </li>
    </ol>

    <p class="vclose reveal">Son seis y están escritos porque se usan: es la vara con la que discutimos una decisión difícil, y también con la que contratamos.</p>
  </div>
</section>

<!-- ===================== TRABAJÁ CON NOSOTROS =====================
     El único enlace de acción de la página, y no es comercial: va a /careers/,
     que ya figura como "Trabajá con nosotros" en el pie del sitio. -->
<!-- bg-grad: #valores, aca arriba, es soft; la pagina cierra grad contra el footer gris. -->
<section class="bg-grad" id="sumate">
  <div class="wrap">
    <div class="join reveal">
      <div>
        <b>¿Querés trabajar con este equipo?</b>
        <span>Cuando abrimos una búsqueda, la publicamos en nuestra página de empleo.</span>
      </div>
      <a href="/carreras/" class="btn btn-ghost-d">Ver búsquedas abiertas
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>


</main>

<?php
get_footer();