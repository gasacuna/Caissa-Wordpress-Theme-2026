<?php
/**
 * Template Name: Caissa — Tecnología
 *
 * Migrada desde tecnologia/index.html del repo Caissa-Nueva-Web-2026.
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
      "description": "Agencia boutique de marketing digital especializada en performance marketing (Google Ads y Meta Ads), con software PPC propio.",
      "foundingDate": "2021",
      "knowsAbout": ["PPC", "Google Ads", "Meta Ads", "Automatización de campañas", "Optimización de conversión"],
      "sameAs": [
        "https://www.linkedin.com/company/caissa-digital",
        "https://www.instagram.com/caissa_digital/",
        "https://clutch.co/profile/caissa",
        "https://www.sortlist.es/agency/caissa"
      ]
    },
    {
      "@type": "SoftwareApplication",
      "@id": "https://caissa.digital/tecnologia/#aegis",
      "name": "AEGIS",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": "Web",
      "description": "Software PPC propio de Caissa, desarrollado durante más de cuatro años con una inversión superior a USD 1.000.000 y 20.000 horas de experiencia práctica. Detecta desperdicio de inversión publicitaria, clasifica términos de búsqueda y habilita optimizaciones diarias.",
      "author": { "@id": "https://caissa.digital/#organization" },
      "publisher": { "@id": "https://caissa.digital/#organization" },
      "isAccessibleForFree": false,
      "offers": { "@type": "Offer", "availability": "https://schema.org/LimitedAvailability", "description": "Disponible para los clientes de Caissa como parte del servicio de gestión." }
    },
    {
      "@type": "WebPage",
      "@id": "https://caissa.digital/tecnologia/#webpage",
      "url": "https://caissa.digital/tecnologia/",
      "name": "AEGIS, nuestra tecnología PPC propia | Caissa",
      "description": "Desarrollamos AEGIS, nuestro software PPC propio: más de cuatro años, 20.000 horas de experiencia y +$1M USD de inversión.",
      "inLanguage": "es-AR",
      "about": { "@id": "https://caissa.digital/tecnologia/#aegis" }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://caissa.digital/tecnologia/#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://caissa.digital/" },
        { "@type": "ListItem", "position": 2, "name": "Tecnología", "item": "https://caissa.digital/tecnologia/" }
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
      <h1>La tecnología PPC más poderosa del mundo al alcance de tu mano</h1>
      <p class="hga-sub">Nos tomó más de cuatro años y <b>+$1M USD</b> desarrollar nuestro software PPC propio. Ahora es tu ventaja.</p>
      <div class="hga-cta">
        <a href="/reservar-consultoria/" class="btn btn-primary">Reservá tu consultoría gratuita
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <p class="hga-note">Sin contratos de permanencia. Quince minutos con tu cuenta en pantalla.</p>
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
      <!-- Panel de AEGIS. Los términos son genéricos e ilustrativos: NO son de ninguna
           cuenta de cliente. Está aclarado al pie del panel. -->
      <div class="ag" id="agPanel">
        <div class="ag-h">
          <span class="ag-live"><i></i> AEGIS · analizando</span>
          <span class="ag-clock" id="agClock">--:--:--</span>
        </div>
        <div class="ag-scan" aria-hidden="true"><span class="ag-beam"></span></div>
        <div class="ag-feed" id="agFeed" aria-label="Términos de búsqueda clasificados por AEGIS"></div>
        <div class="ag-kpis">
          <div class="ag-k"><b id="agTerms">4.812</b><span>términos analizados hoy</span></div>
          <div class="ag-k"><b id="agNeg">137</b><span>negativos aplicados</span></div>
          <div class="ag-k"><b>24/7</b><span>sin pausa</span></div>
        </div>
      </div>
      <p class="ag-cap">Vista ilustrativa. Los términos son genéricos, no de una cuenta real.</p>
    </div>
  </div>
</section>

<!-- ===================== LOS NÚMEROS =====================
     Los cinco son los que ya publica la página actual. No agregar ninguno que no esté
     respaldado. El data-final es el string exacto con el que termina el contador. -->
<section class="sec-white" id="numeros">
  <div class="wrap">
    <div class="nums">
      <div class="num reveal"><b data-count="1000000" data-fmt="musd" data-final="+$1M">+$1M</b><span>USD invertidos en desarrollo</span></div>
      <div class="num reveal"><b data-count="20000" data-fmt="int" data-final="20.000">20.000</b><span>horas de experiencia práctica</span></div>
      <div class="num reveal"><b data-count="4" data-fmt="plus" data-final="+4">+4</b><span>años de desarrollo</span></div>
      <div class="num reveal"><b data-count="10" data-fmt="x" data-final="+10X">+10X</b><span>más rápido y eficiente</span></div>
      <div class="num reveal"><b data-count="70" data-fmt="pct" data-final="70%">70%</b><span>más productividad</span></div>
    </div>
  </div>
</section>

<!-- ===================== QUÉ ES AEGIS ===================== -->
<section class="sec-soft" id="aegis">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>La ventaja clave para superar a tus competidores</h2>
      <p>Tres preguntas que nos hacen siempre, contestadas sin vueltas.</p>
    </div>
    <div class="qa">
      <article class="qa-c reveal">
        <h3>¿Qué es AEGIS?</h3>
        <p>Una tecnología 100% personalizada y propia, desarrollada tras más de 20.000 horas de experiencia, diseñada para que el equipo dedique su tiempo a decidir sobre las cuentas y no a tareas repetitivas.</p>
      </article>
      <article class="qa-c reveal">
        <h3>¿Por qué importa?</h3>
        <p>La mayoría de las herramientas PPC son creadas por programadores y analistas de datos que entienden los números pero no Google Ads, lo que significa que obtenés recomendaciones mediocres.</p>
      </article>
      <article class="qa-c reveal">
        <h3>¿Qué obtengo?</h3>
        <p>El sistema nos permite trabajar más rápido sobre tu cuenta y dedicar el tiempo del equipo a decidir, no a revisar planillas.</p>
      </article>
    </div>
  </div>
</section>

<!-- ===================== VELOCIDAD DE CARGA =====================
     Panel A. Los valores oscilan dentro de rangos realistas y los umbrales son los públicos
     de Core Web Vitals (LCP 2,5s / INP 200ms / CLS 0,1). Los números son ILUSTRATIVOS y está
     aclarado al pie: no son de ninguna cuenta. -->
<section class="bg-grad" id="velocidad">
  <div class="wrap">
    <div class="rt-grid">
      <div class="rt-text reveal">
        <div class="head-left" style="margin-bottom:0">
          <span class="eyebrow">Monitoreo programado</span>
          <h2>Velocidad de carga, medida donde caen tus anuncios</h2>
          <p>Una landing que tarda un segundo de más no solo convierte menos. Google la evalúa, te baja el nivel de calidad y terminás pagando más caro cada clic por el mismo lugar.</p>
        </div>
        <ul class="rt-list">
          <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>Se miden las páginas que reciben los anuncios.</b><span class="d">No la home. LCP, INP y CLS sobre las landings donde cae el clic, que es donde se define si la visita se convierte o se va.</span></span></li>
          <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>Se vuelve a medir sola, no una vez y listo.</b><span class="d">Un sitio puede estar rápido hoy y lento el martes, cuando alguien sube una imagen de cuatro megas sin comprimir.</span></span></li>
          <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>El aviso sale antes de que se note en la cuenta.</b><span class="d">Cuando un indicador se cae, salta la alerta. Lo que hay que tocar lo revisa un especialista antes de ejecutarse.</span></span></li>
        </ul>
      </div>
      <div class="rt-visual reveal">
        <div class="pnl" id="cwvPanel">
          <div class="pnl-h">
            <span class="pnl-t"><i></i> Velocidad · landing principal</span>
            <!-- Antes acá había un reloj corriendo, y eso daba a entender que se mide cada
                 segundo. No es cierto: una medición de Core Web Vitals es un chequeo programado.
                 Dice la frecuencia real, no la hora. -->
            <span class="pnl-m">chequeo cada 30 min</span>
          </div>
          <div class="pnl-b">
            <div class="cwv">
              <div class="cwv-r good" data-k="lcp"><span class="cwv-k">LCP</span><span class="cwv-track"><i></i></span><span class="cwv-v">–</span></div>
              <div class="cwv-r good" data-k="inp"><span class="cwv-k">INP</span><span class="cwv-track"><i></i></span><span class="cwv-v">–</span></div>
              <div class="cwv-r good" data-k="cls"><span class="cwv-k">CLS</span><span class="cwv-track"><i></i></span><span class="cwv-v">–</span></div>
            </div>
            <div class="cwv-foot">
              <span class="cwv-score"><b id="cwvScore">–</b><span>puntaje de rendimiento</span></span>
              <span class="cwv-when" id="cwvWhen">—</span>
            </div>
          </div>
        </div>
        <p class="pnl-cap">Vista ilustrativa. Los umbrales son los públicos de Core Web Vitals; los valores no son de una cuenta real.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===================== MONITOREO DE LANDING PAGES =====================
     Panel B. Cuenta una historia en vez de mostrar una lista quieta: una página se cae,
     salta la alerta y después se recupera. Es el argumento más fuerte de los tres, porque
     es la plata que se pierde sin que nadie se entere. URLs genéricas. -->
<section class="sec-white" id="landings">
  <div class="wrap">
    <div class="rt-grid flip">
      <div class="rt-text reveal">
        <div class="head-left" style="margin-bottom:0">
          <span class="eyebrow">Vigilancia 24/7</span>
          <h2>Si tu landing se cae, lo sabemos antes que vos</h2>
          <p>El peor gasto de una cuenta no es un clic caro. Es un viernes a las siete de la tarde con el formulario roto y la campaña entregando hasta el lunes a la mañana.</p>
        </div>
        <ul class="rt-list">
          <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>Se chequea cada página, no el sitio.</b><span class="d">Cada landing con anuncios activos se controla sola: que responda, que cargue entera y que el certificado esté vigente.</span></span></li>
          <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>El formulario también se prueba.</b><span class="d">Que la página abra no significa que la consulta llegue. Se verifica que el envío devuelva y que la conversión quede registrada.</span></span></li>
          <li><span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span><b>Aviso inmediato, con contexto.</b><span class="d">Qué se rompió, desde cuándo y qué campañas están mandando tráfico ahí. Sin eso, la alerta es solo un susto.</span></span></li>
        </ul>
      </div>
      <div class="rt-visual reveal">
        <div class="pnl" id="lpPanel">
          <div class="pnl-h">
            <span class="pnl-t"><i></i> Landing pages · estado</span>
            <span class="pnl-m" id="lpWhen">chequeo cada 60 s</span>
          </div>
          <div class="pnl-b">
            <div class="lps" id="lpList"></div>
            <div class="lp-alert" id="lpAlert">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M12 9v5" stroke-linecap="round"/><circle cx="12" cy="17.4" r="1.1" fill="currentColor" stroke="none"/><path d="M10.3 3.9 2.6 17.5A2 2 0 0 0 4.3 20.5h15.4a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0z" stroke-linejoin="round"/></svg>
              <span>
                <b>Formulario sin respuesta</b>
                <span id="lpAlertTxt">Aviso enviado al equipo. Hay campañas activas apuntando a esa página.</span>
              </span>
            </div>
          </div>
        </div>
        <p class="pnl-cap">Vista ilustrativa. Las direcciones son genéricas, no de un cliente.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===================== MINIMIZA EL DESPERDICIO ===================== -->
<section class="bg-grad" id="desperdicio">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Minimiza el desperdicio. Maximiza tu crecimiento</h2>
      <p>Merecés algo mejor que una agencia genérica que ofrece resultados promedio.</p>
    </div>
    <div class="prose reveal" style="max-width:880px;margin-bottom:38px">
      <p>La mayoría de las agencias de Google Ads utiliza herramientas estándar creadas por personas que saben poco sobre negocios. ¿El resultado? Pérdida de tu valioso tiempo, resultados mediocres y un camino más lento para lograr impacto.</p>
      <p>En su lugar, <b>AEGIS detiene la pérdida de dinero en anuncios ineficaces</b>, identifica en segundos los términos que están consumiendo presupuesto sin convertir, y libera a nuestros especialistas para dedicarse a decidir.</p>
    </div>
    <div class="ben">
      <article class="ben-c reveal">
        <span class="ben-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M8.5 8.5l7 7M15.5 8.5l-7 7" stroke-linecap="round"/></svg></span>
        <div>
          <h3>Detener el desperdicio. Más rápido.</h3>
          <p>Cada peso que deja de irse en clics que no convierten queda disponible para lo que sí funciona.</p>
        </div>
      </article>
      <article class="ben-c reveal">
        <span class="ben-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3l2.6 5.6 6.1.8-4.5 4.2 1.2 6-5.4-3-5.4 3 1.2-6L3.3 9.4l6.1-.8z" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Servicio premium, por menos.</h3>
          <p>Ofrecemos el mismo nivel de servicio que las agencias más grandes, o mejor, sin romper tu presupuesto.</p>
        </div>
      </article>
      <article class="ben-c reveal">
        <span class="ben-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 17l6-6 4 4 8-8" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 7h6v6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Movernos rápido.</h3>
          <p>La eficiencia no es solo un medio para un fin, es el fin. Nuestros procesos y velocidad hacen que los cambios en tu cuenta no esperen a la reunión del mes.</p>
        </div>
      </article>
      <article class="ben-c reveal">
        <span class="ben-ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2 4 14h7l-1 8 9-12h-7z" stroke-linejoin="round"/></svg></span>
        <div>
          <h3>Somos proactivos, nunca reactivos.</h3>
          <p>Nuestra tecnología permite a nuestro equipo hacer más en menos tiempo y encontrar oportunidades de optimización antes de que las necesites.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ===================== COMPARACIÓN =====================
     Las nueve filas son literalmente las de la página actual. -->
<section class="sec-white" id="comparacion">
  <div class="wrap">
    <div class="head-left reveal">
      <h2>Qué hace nuestra tecnología PPC</h2>
      <p>En un mundo competitivo para los pequeños negocios, la velocidad importa. ¿Por qué elegirnos frente a otras agencias?</p>
    </div>
    <div class="cmp reveal" id="cmp">
      <div class="cmp-h">
        <span>Qué recibís</span>
        <span class="me">Caissa</span>
        <span>Otras agencias</span>
      </div>
      <div class="cmp-r"><b>Metodología propia de performance PCO™</b><span class="cmp-v si"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span class="cmp-v no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg></span></div>
      <div class="cmp-r"><b>10X más de eficiencia con sistema 100% propio AEGIS</b><span class="cmp-v si"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span class="cmp-v no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg></span></div>
      <div class="cmp-r"><b>Reducción máxima de desperdicio</b><span class="cmp-v si"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span class="cmp-v no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg></span></div>
      <div class="cmp-r"><b>Trabajamos como tu equipo, no como un proveedor</b><span class="cmp-v si"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span class="cmp-v no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg></span></div>
      <div class="cmp-r"><b>Cuidamos tu dinero como si fuera nuestro</b><span class="cmp-v si"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span class="cmp-v no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg></span></div>
      <div class="cmp-r"><b>Optimizaciones diarias sin límites</b><span class="cmp-v si"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span class="cmp-v no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg></span></div>
      <div class="cmp-r"><b>Informes en tiempo real, sin esperas</b><span class="cmp-v si"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span class="cmp-v no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg></span></div>
      <div class="cmp-r"><b>Sin contratos de retención o permanencia</b><span class="cmp-v si"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span class="cmp-v no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg></span></div>
      <div class="cmp-r"><b>Protección contra clics fraudulentos ClickCease™</b><span class="cmp-v si"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg></span><span class="cmp-v no"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg></span></div>
    </div>
  </div>
</section>

<!-- ===================== TESTIMONIO =====================
     Literal de la página actual. Néstor, Colchonería Ideal. -->
<section class="sec-soft" id="testimonios">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>Lo que dicen nuestros clientes</h2>
    </div>
    <div class="tq reveal">
      <blockquote>“No solo superamos todas las expectativas, sino que logramos récords históricos en ventas. Gracias a los resultados obtenidos con Caissa, tuvimos la confianza para lanzar nuestro segundo eCommerce junto a ellos. Un equipo experto, estratégico y siempre enfocado en el crecimiento. Altamente recomendados.”</blockquote>
      <div class="tq-w">
        <b>Néstor</b>
        <span>Colchonería Ideal</span>
        <img width="220" height="108" src="<?php echo CAISSA_IMG; ?>/logos/colchoneria_blanco.png" alt="Colchonería Ideal" loading="lazy" decoding="async" />
      </div>
    </div>
    <div class="sec-cta reveal">
      <a href="/reviews/" class="btn btn-ghost-d">Ver todos los testimonios
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<!-- ===================== CTA FINAL ===================== -->
<section class="final bg-grad" id="cta">
  <div class="wrap">
    <div class="cta-ga reveal">
      <h2>Pongamos AEGIS sobre tu cuenta</h2>
      <p>Quince minutos, tu cuenta en pantalla y te mostramos dónde se está yendo el presupuesto. Sin presentación ni propuesta armada de antemano.</p>
      <a href="/reservar-consultoria/" class="btn btn-light">Reservá tu consultoría gratuita
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <div class="rea">15 minutos · Sin contratos de permanencia</div>
    </div>
  </div>
</section>


</main>

<?php
get_footer();