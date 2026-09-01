<?php
/**
 * Template Name: Caissa — Perfil Manuel Ferrini
 *
 * Migrada desde equipo/manu-ferrini/index.html del repo Caissa-Nueva-Web-2026.
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
      "@type": "ProfilePage",
      "@id": "https://caissa.digital/equipo/manu-ferrini/#webpage",
      "url": "https://caissa.digital/equipo/manu-ferrini/",
      "name": "Manuel Ferrini, CEO y cofundador de Caissa",
      "inLanguage": "es-AR",
      "mainEntity": { "@id": "https://caissa.digital/equipo/manu-ferrini/#person" }
    },
    {
      "@type": "Person",
      "@id": "https://caissa.digital/equipo/manu-ferrini/#person",
      "name": "Manuel Ferrini",
      "url": "https://caissa.digital/equipo/manu-ferrini/",
      "image": "https://caissa.digital/equipo/fotos/manuel-ferrini.webp",
      "jobTitle": "CEO y cofundador de Caissa",
      "worksFor": { "@type": "Organization", "name": "Caissa", "url": "https://caissa.digital" },
      "sameAs": [
        "https://www.linkedin.com/in/manuelferrini/",
        "https://www.instagram.com/manuferrini/",
        "https://www.youtube.com/@ManuFerrini",
        "https://manuferrini.com/"
      ],
      "knowsAbout": ["Google Ads","Meta Ads","Performance Marketing","Inteligencia Artificial",
        "Conversion Rate Optimization","E-commerce","Lead Generation"],
      "alumniOf": [
        { "@type": "Organization", "name": "Google Skillshop", "url": "https://skillshop.withgoogle.com/" },
        { "@type": "Organization", "name": "Meta Blueprint", "url": "https://www.facebook.com/business/learn" },
        { "@type": "Organization", "name": "CXL Institute", "url": "https://cxl.com/institute/" }
      ],
      "address": { "@type": "PostalAddress", "addressCountry": "AR" },
      "description": "Manuel Ferrini, desde Neuquen, es CEO y cofundador de Caissa, agencia Google Partner y Meta Business Partner, seleccionada Google Partner Premier en 2025. Creador del metodo PCO (PPC + CRO + OPV), asesoro a mas de 100 empresas en performance marketing, con foco en Google Ads, inteligencia artificial y conversion."
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://caissa.digital/" },
        { "@type": "ListItem", "position": 2, "name": "Equipo", "item": "https://caissa.digital/equipo/" },
        { "@type": "ListItem", "position": 3, "name": "Manuel Ferrini" }
      ]
    }
  ]
}
</script>
<?php endif; ?>
<main>

<!-- ===================== HERO =====================
     Visual propio: el retrato a gran tamano sobre el bloque coral. Ninguna otra pagina
     del sitio abre asi, y el coral es el mismo codigo que usa la tarjeta de /equipo/
     desde la que se llega (coral = fundador). -->
<section class="pf">
  <div class="bk"><a href="/equipo/"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg> Volver al equipo</a></div>
  <div class="pf-grid">
    <div class="pf-left">
      <span class="pf-role">CEO y cofundador</span>
      <h1>Manuel Ferrini</h1>
      <p class="pf-lede">Estratega de PPC con foco en optimización de conversión e
        inteligencia artificial. Creó el método PCO™ y llevó a Caissa desde
        Neuquén a trabajar en cinco continentes.</p>
      <div class="pf-social">
        <a href="https://www.linkedin.com/in/manuelferrini/" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.45 20.45h-3.56v-5.57c0-1.33-.02-3.04-1.85-3.04-1.85 0-2.13 1.45-2.13 2.94v5.67H9.35V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29zM5.34 7.43a2.06 2.06 0 1 1 0-4.13 2.06 2.06 0 0 1 0 4.13zM7.12 20.45H3.56V9h3.56v11.45zM22.22 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.73C24 .77 23.2 0 22.22 0z"/></svg> LinkedIn</a>
        <a href="https://www.youtube.com/@ManuFerrini" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2C0 8.1 0 12 0 12s0 3.9.5 5.8a3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1c.5-1.9.5-5.8.5-5.8s0-3.9-.5-5.8zM9.5 15.6V8.4l6.3 3.6-6.3 3.6z"/></svg> YouTube</a>
        <a href="https://www.instagram.com/manuferrini/" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.43.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.43.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.72 3.72 0 01-1.38-.9 3.72 3.72 0 01-.9-1.38c-.16-.43-.36-1.06-.41-2.23C2.17 15.58 2.16 15.2 2.16 12s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.43-.16 1.06-.36 2.23-.41C8.42 2.17 8.8 2.16 12 2.16M12 0C8.74 0 8.33.01 7.05.07 5.78.13 4.9.33 4.14.63c-.79.31-1.46.72-2.13 1.38C1.35 2.68.94 3.35.63 4.14.33 4.9.13 5.78.07 7.05.01 8.33 0 8.74 0 12s.01 3.67.07 4.95c.06 1.27.26 2.15.56 2.91.31.79.72 1.46 1.38 2.13.67.66 1.34 1.07 2.13 1.38.76.3 1.64.5 2.91.56C8.33 23.99 8.74 24 12 24s3.67-.01 4.95-.07c1.27-.06 2.15-.26 2.91-.56.79-.31 1.46-.72 2.13-1.38.66-.67 1.07-1.34 1.38-2.13.3-.76.5-1.64.56-2.91.06-1.28.07-1.69.07-4.95s-.01-3.67-.07-4.95c-.06-1.27-.26-2.15-.56-2.91-.31-.79-.72-1.46-1.38-2.13-.67-.66-1.34-1.07-2.13-1.38-.76-.3-1.64-.5-2.91-.56C15.67.01 15.26 0 12 0z"/><path d="M12 5.84A6.16 6.16 0 1018.16 12 6.16 6.16 0 0012 5.84M12 16a4 4 0 114-4 4 4 0 01-4 4z"/><circle cx="18.41" cy="5.59" r="1.44"/></svg> Instagram</a>
        <a href="https://manuferrini.com/" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.4 2.7 3.7 5.8 3.7 9s-1.3 6.3-3.7 9c-2.4-2.7-3.7-5.8-3.7-9S9.6 5.7 12 3z" stroke-linecap="round" stroke-linejoin="round"/></svg> manuferrini.com</a>
      </div>
      <div class="pf-cta">
        <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
    </div>
    <div class="pf-right">
      <div class="pf-stage">
        <span class="pf-dots" aria-hidden="true"></span>
        <div class="pf-photo">
          <img src="<?php echo CAISSA_IMG; ?>/equipo/fotos/manuel-ferrini.webp" alt="Manuel Ferrini" width="300" height="400" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== TRAYECTORIA ===================== -->
<section class="sec-white" id="trayectoria">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Qué hizo hasta acá</h2>
    </div>
    <div class="trk">
      <div class="trk-c reveal">
        <div class="trk-n">+10</div>
        <div class="trk-t">Años en performance</div>
        <p class="trk-d">Estrategia de PPC con foco en optimización de conversión e inteligencia artificial.</p>
      </div>
      <div class="trk-c reveal">
        <div class="trk-n">+100</div>
        <div class="trk-t">Empresas asesoradas</div>
        <p class="trk-d">Marcas de distintos rubros y tamaños, dentro y fuera de la Argentina.</p>
      </div>
      <div class="trk-c reveal">
        <div class="trk-n">5</div>
        <div class="trk-t">Continentes</div>
        <p class="trk-d">Lideró la expansión de Caissa fuera del país.</p>
      </div>
      <div class="trk-c reveal">
        <div class="trk-n">PCO™</div>
        <div class="trk-t">Método propio</div>
        <p class="trk-d">PPC + CRO + OPV. Es el marco con el que trabaja toda la agencia.</p>
      </div>
      <div class="trk-c reveal">
        <div class="trk-n">Profesor</div>
        <div class="trk-t">Academias de performance</div>
        <p class="trk-d">Dio clases en las academias internacionales más reconocidas del rubro.</p>
      </div>
      <div class="trk-c reveal">
        <div class="trk-n">Speaker</div>
        <div class="trk-t">Conferencista</div>
        <p class="trk-d">Habla de performance marketing en eventos del sector.</p>
      </div>
    </div>
    <p class="trk-note reveal">Fuera del trabajo: familia, libros y pádel. Su objetivo
      personal es mejorar un 1&nbsp;&#37; cada día.</p>
  </div>
</section>

<!-- ===================== METODO PCO =====================
     Version corta y contada desde quien lo creo. El embudo completo, con las tres etapas
     que se angostan y las tarjetas de contraste, vive en la home: aca no se repite. -->
<section class="sec-soft" id="metodo">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>El método que creó</h2>
    </div>
    <div class="pco reveal">
      <div class="pco-row">
        <div class="pco-s">
          <div class="pco-l">PPC</div>
          <div class="pco-t">Pago por click</div>
          <p class="pco-d">Las campañas: qué se compra, a quién y a qué precio.</p>
        </div>
        <div class="pco-s">
          <div class="pco-l">CRO</div>
          <div class="pco-t">Optimización de conversión</div>
          <p class="pco-d">Qué pasa con esa visita una vez que entró al sitio.</p>
        </div>
        <div class="pco-s">
          <div class="pco-l">OPV</div>
          <div class="pco-t">Optimización de procesos de venta</div>
          <p class="pco-d">Qué pasa con la consulta cuando llega al negocio.</p>
        </div>
      </div>
      <p>Casi todas las agencias entregan la primera etapa y dan el trabajo por terminado. El
        problema es que un click que convierte mal, o una consulta que nadie atiende a tiempo,
        se pagan igual.</p>
      <p>PCO™ es el marco con el que trabaja toda Caissa, y el que ordena qué se mira
        primero cuando una cuenta no rinde.</p>
    </div>
  </div>
</section>

<!-- ===================== PRENSA =====================
     Los siete enlaces salen de la pagina en produccion. Los titulares son los reales de
     cada nota, verificados uno por uno; no se escribieron aca. -->
<section class="bg-grad" id="medios">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>En los medios</h2>
    </div>
    <div class="prs reveal">
      <a href="https://www.infobae.com/opinion/2026/07/16/la-ia-decide-que-compras-la-nueva-guerra-por-aparecer-en-las-recomendaciones/" target="_blank" rel="noopener">
        <span class="prs-m">Infobae</span>
        <span class="prs-t">La IA decide qué comprás: la nueva guerra por aparecer en las recomendaciones</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="https://www.rionegro.com.ar/estar-bien/el-marketing-digital-ya-no-es-opcional-como-competir-en-internet-sin-ser-una-gran-empresa-4143025/" target="_blank" rel="noopener">
        <span class="prs-m">Río Negro</span>
        <span class="prs-t">El marketing digital ya no es opcional: cómo competir en internet sin ser una gran empresa</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="https://www.bigbangnews.com/tecnologia/el-desembarco-publicidad-dentro-chatgpt-a-google-le-contamos-lo-buscamos-pero-ia-le-contamos-como-pensamos-n101234" target="_blank" rel="noopener">
        <span class="prs-m">Big Bang News</span>
        <span class="prs-t">El desembarco de la publicidad dentro de ChatGPT</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="https://reporteasia.com/noticias/2025/07/21/el-impacto-del-cybermonday-en-argentina-cifras-clave-y-relevancia-en-el-ecosistema-digital/" target="_blank" rel="noopener">
        <span class="prs-m">Reporte Asia</span>
        <span class="prs-t">El impacto del CyberMonday en Argentina: cifras clave y relevancia en el ecosistema digital</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="https://www.infoveloz.com/post/como-una-pyme-puede-hacer-un-video-publicitario-de-15-segundos-que-venda_279680" target="_blank" rel="noopener">
        <span class="prs-m">InfoVeloz</span>
        <span class="prs-t">Cómo una PyME puede hacer un video publicitario de 15 segundos que venda</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="https://impactoeconomico.com.ar/la-exportacion-de-conocimiento/" target="_blank" rel="noopener">
        <span class="prs-m">Impacto Económico</span>
        <span class="prs-t">La exportación de conocimiento</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="https://www.noticiasnqn.com.ar/noticias/2025/05/01/312849-empresas-se-suman-a-las-capacitaciones-para-emprendedores-planificadas-por-la-municipalidad" target="_blank" rel="noopener">
        <span class="prs-m">Noticias NQN</span>
        <span class="prs-t">Empresas se suman a las capacitaciones para emprendedores de la Municipalidad</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<!-- ===================== WIKIPEDIA ===================== -->
<section class="sec-white" id="referencias">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Citado en Wikipedia</h2>
    </div>
    <div class="wk reveal">
      <a href="https://es.wikipedia.org/wiki/Ciberlunes#cite_note-reporte-8" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3" stroke-linecap="round" stroke-linejoin="round"/></svg>Ciberlunes</a>
      <a href="https://es.wikipedia.org/wiki/C%C3%A1mara_Argentina_de_Comercio_Electr%C3%B3nico#cite_note-2" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3" stroke-linecap="round" stroke-linejoin="round"/></svg>Cámara Argentina de Comercio Electrónico</a>
      <a href="https://es.wikipedia.org/wiki/Publicidad_en_Internet#cite_note-5" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3" stroke-linecap="round" stroke-linejoin="round"/></svg>Publicidad en Internet</a>
      <a href="https://es.wikipedia.org/wiki/Google_Ads#cite_note-6" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3" stroke-linecap="round" stroke-linejoin="round"/></svg>Google Ads</a>
    </div>
    <p class="wk-note reveal">Cuatro artículos de la Wikipedia en español lo citan como fuente.</p>
  </div>
</section>

<!-- ===================== CTA FINAL ===================== -->
<section class="sec-cta">
  <div class="wrap">
    <div class="cta-ga reveal">
      <h2>¿Querés que miremos tu cuenta?</h2>
      <p>Quince minutos con el equipo que dirige. Salís sabiendo qué se está haciendo bien en tu cuenta y qué no, aunque después no trabajemos juntos.</p>
      <a href="/reservar-consultoria/" class="btn btn-light">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <div class="rea">15 minutos · Sin contratos de permanencia</div>
    </div>
  </div>
</section>


</main>

<?php
get_footer();