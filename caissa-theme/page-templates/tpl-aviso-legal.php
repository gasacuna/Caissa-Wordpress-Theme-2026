<?php
/**
 * Template Name: Caissa — Aviso legal y privacidad
 *
 * Migrada desde aviso-legal/index.html del repo Caissa-Nueva-Web-2026.
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
      "@type": "WebPage",
      "@id": "https://caissa.digital/aviso-legal/#webpage",
      "url": "https://caissa.digital/aviso-legal/",
      "name": "Aviso legal y política de privacidad | Caissa",
      "description": "Aviso legal, política de privacidad y política de cookies de Caissa (SYNERGYMEDIA PATAGONIA S.A.S.), conforme a la Ley 25.326 de Protección de los Datos Personales de la República Argentina.",
      "inLanguage": "es-AR",
      "dateModified": "2026-08-31"
    },
    {
      "@type": "Organization",
      "@id": "https://caissa.digital/#organization",
      "name": "Caissa",
      "legalName": "SYNERGYMEDIA PATAGONIA S.A.S.",
      "taxID": "30-71654254-4",
      "url": "https://caissa.digital/",
      "email": "hola@caissa.digital",
      "telephone": "+54 9 299 469-5443",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Teniente de Navío Eliana María Krawczyk 619, Piso 1.º C",
        "addressLocality": "Neuquén Capital",
        "addressRegion": "Neuquén",
        "postalCode": "Q8300",
        "addressCountry": "AR"
      }
    },
    {
      "@type": "BreadcrumbList",
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
          "name": "Aviso legal",
          "item": "https://caissa.digital/aviso-legal/"
        }
      ]
    }
  ]
}
</script>
<?php endif; ?>
<main>

<section class="legal">
  <div class="wrap">
    <div class="legal-wrap">

      <div class="legal-head">
        <h1>Aviso legal y política de privacidad</h1>
        <p>Este documento explica quién es el titular de este sitio, qué datos personales tratamos, para qué, con quién los compartimos y cómo podés ejercer tus derechos. Está redactado conforme al derecho argentino: la <strong>Ley 25.326 de Protección de los Datos Personales</strong> y su Decreto reglamentario 1558/2001.</p>
        <p class="legal-meta">Última actualización: 31 de agosto de 2026.</p>
      </div>

      <nav class="legal-toc" aria-label="Índice del documento">
        <h2>Contenido</h2>
        <ol>
        <li><a href="#titular">1. Titular del sitio</a></li>
        <li><a href="#alcance">2. Alcance</a></li>
        <li><a href="#datos">3. Protección de datos personales</a></li>
        <li><a href="#cookies">4. Cookies y tecnologías de medición</a></li>
        <li><a href="#publicidad">5. Comunicaciones publicitarias</a></li>
        <li><a href="#confidencialidad">6. Confidencialidad</a></li>
        <li><a href="#propiedad">7. Propiedad intelectual</a></li>
        <li><a href="#enlaces">8. Enlaces externos</a></li>
        <li><a href="#credenciales">9. Contenidos del sitio</a></li>
        <li><a href="#responsabilidad">10. Limitación de responsabilidad</a></li>
        <li><a href="#modificaciones">11. Modificaciones</a></li>
        <li><a href="#jurisdiccion">12. Ley aplicable y jurisdicción</a></li>
        </ol>
      </nav>

      <section class="legal-sec" id="titular">
        <h2>1. Titular del sitio</h2>
<p>Este sitio es titularidad de <strong>SYNERGYMEDIA PATAGONIA S.A.S.</strong>, que opera comercialmente bajo el nombre <strong>Caissa</strong>.</p>
<ul>
  <li><strong>Razón social:</strong> SYNERGYMEDIA PATAGONIA S.A.S.</li>
  <li><strong>CUIT:</strong> 30-71654254-4</li>
  <li><strong>Domicilio:</strong> Teniente de Navío Eliana María Krawczyk 619, Piso 1.º C, Neuquén Capital (Q8300), Provincia del Neuquén, República Argentina</li>
  <li><strong>Correo electrónico:</strong> <a href="mailto:hola@caissa.digital">hola@caissa.digital</a></li>
  <li><strong>Teléfono:</strong> <a href="tel:+5492994695443">+54 9 299 469-5443</a></li>
</ul>
<p>El domicilio se consigna porque el artículo 6, inciso b, de la Ley 25.326 exige informar la identidad y el domicilio del responsable de la base de datos.</p>
      </section>

      <section class="legal-sec" id="alcance">
        <h2>2. Alcance</h2>
<p>Este aviso regula el acceso y la utilización del sitio <strong>caissa.digital</strong> y de sus secciones. La navegación por el sitio implica la aceptación de este aviso en la versión vigente al momento del acceso.</p>
<p>Caissa mantiene además perfiles en redes sociales. Respecto de los contenidos que Caissa publica en esos perfiles y de los mensajes que los usuarios le envían por esos canales, Caissa es responsable del tratamiento en los términos de este aviso. El tratamiento que cada plataforma realiza por su cuenta se rige por las políticas de esa plataforma, sobre las que Caissa no tiene control.</p>
      </section>

      <section class="legal-sec" id="datos">
        <h2>3. Protección de datos personales</h2>
<h3>3.1. Responsable</h3>
<p>El responsable de la base de datos es SYNERGYMEDIA PATAGONIA S.A.S., con el domicilio y los datos de contacto indicados en el punto 1. Para cualquier consulta sobre datos personales podés escribir a <a href="mailto:hola@caissa.digital">hola@caissa.digital</a>. Manuel Ferrini es el punto de contacto interno designado por Caissa para estos asuntos.</p>

<h3>3.2. Qué datos recolectamos</h3>
<ul>
  <li><strong>Los que nos das vos.</strong> Cuando completás un formulario para reservar una consultoría o para postularte a una búsqueda laboral, o cuando nos escribís por correo electrónico o por redes sociales. Los formularios del sitio están alojados en Typeform.</li>
  <li><strong>Los que genera tu navegación.</strong> Dirección IP, tipo de dispositivo y navegador, páginas visitadas, origen de la visita e identificadores almacenados en cookies. Ver el punto 4.</li>
</ul>
<p>Caissa no recolecta a través del sitio datos sensibles en los términos del artículo 2 de la Ley 25.326. Te pedimos que no los incluyas en tus mensajes.</p>

<h3>3.3. Para qué los usamos y quiénes son los destinatarios</h3>
<ul>
  <li><strong>Formularios de consultoría:</strong> para contactarte, entender tu negocio y evaluar si podemos ayudarte; y, si avanzamos, para gestionar la relación comercial.</li>
  <li><strong>Postulaciones laborales:</strong> para evaluar tu candidatura en la búsqueda a la que te postulaste.</li>
  <li><strong>Datos de navegación:</strong> para medir el uso del sitio y el resultado de nuestras campañas publicitarias.</li>
</ul>
<p>Los destinatarios son el personal de Caissa afectado a esas tareas y los prestadores enumerados en el punto 3.7. Caissa no comercializa sus bases de datos.</p>

<h3>3.4. Consentimiento, y los casos en que no se requiere</h3>
<p>En el régimen argentino el consentimiento del titular es la regla (artículo 5, inciso 1, de la Ley 25.326). Al enviarnos un formulario o escribirnos, prestás ese consentimiento para las finalidades del punto 3.3.</p>
<p>La ley enumera además supuestos tasados en los que el consentimiento no resulta necesario (artículo 5, inciso 2), entre ellos cuando los datos derivan de una relación contractual y resultan necesarios para su desarrollo o cumplimiento. Caissa no invoca ninguna otra base: el derecho argentino no contempla el «interés legítimo» como fundamento autónomo del tratamiento.</p>
<p>El consentimiento es revocable en cualquier momento, sin efecto retroactivo sobre los tratamientos ya realizados.</p>

<h3>3.5. Qué respuestas son obligatorias</h3>
<p>En los formularios del sitio, los campos señalados como requeridos son los mínimos necesarios para poder responderte; el resto es opcional. Si no completás los campos requeridos no vamos a poder contactarte ni evaluar tu consulta o tu postulación. Si los datos que nos das son inexactos, la respuesta puede no llegarte o la evaluación puede basarse en información equivocada.</p>

<h3>3.6. Tus derechos, y cómo ejercerlos</h3>
<p>La Ley 25.326 te reconoce los siguientes derechos:</p>
<ul>
  <li><strong>Acceso.</strong> Podés pedirnos información sobre los datos tuyos que tengamos. Debemos responder dentro de los <strong>diez (10) días corridos</strong> de recibida tu solicitud (artículo 14). El acceso es gratuito a intervalos no inferiores a seis meses, salvo que acredites un interés legítimo; tratándose de bases con fines publicitarios, es siempre sin cargo (artículo 27, inciso 2).</li>
  <li><strong>Rectificación, actualización y supresión.</strong> Podés pedir que corrijamos, actualicemos o suprimamos datos inexactos, desactualizados o incompletos. El plazo es de <strong>cinco (5) días hábiles</strong> (artículo 16). La supresión no procede cuando pudiera causar perjuicio a derechos de terceros o cuando exista una obligación legal de conservar el dato.</li>
  <li><strong>Retiro o bloqueo de bases publicitarias.</strong> Podés pedir en cualquier momento el retiro o bloqueo, total o parcial, de tu nombre de nuestras bases con fines publicitarios, incluido el bloqueo de un canal determinado y no de otro (artículo 27, inciso 3, de la Ley 25.326 y artículo 27, tercer párrafo, del Anexo I del Decreto 1558/2001). No necesitás dar explicaciones.</li>
</ul>
<p><strong>Cómo ejercerlos:</strong> escribinos a <a href="mailto:hola@caissa.digital">hola@caissa.digital</a> o al domicilio del punto 1, acreditando tu identidad. Podés indicarnos por qué medio preferís recibir la respuesta (artículo 15, inciso 3). Si no respondemos en los plazos indicados, o si la respuesta resulta insuficiente, queda expedita la acción de protección de los datos personales (habeas data).</p>

<h3>3.7. Prestadores y transferencias fuera del país</h3>
<p>Para operar el sitio y nuestras comunicaciones utilizamos prestadores de servicios que pueden acceder a datos personales por nuestra cuenta y siguiendo nuestras instrucciones, en los términos del artículo 25 de la Ley 25.326:</p>
<ul>
  <li><strong>Hostinger</strong>, alojamiento del sitio.</li>
  <li><strong>Typeform</strong>, formularios de consultoría y de postulación.</li>
  <li><strong>Google</strong> y <strong>Meta</strong>, medición y publicidad digital (ver el punto 4).</li>
</ul>
<p>Estos prestadores son empresas extranjeras y sus servidores pueden estar ubicados fuera de la República Argentina, de modo que tus datos pueden almacenarse en el exterior. Al enviarnos un formulario o escribirnos por correo electrónico prestás tu consentimiento para esa transferencia.</p>
<p>Si preferís que tus datos no salgan del país, podés contactarnos por teléfono o en nuestro domicilio, ambos indicados en el punto 1.</p>

<h3>3.8. Datos que tratamos por cuenta de nuestros clientes</h3>
<p>Además de los datos propios, Caissa accede a cuentas publicitarias y a bases de datos de sus clientes para prestarles el servicio. En esos casos <strong>Caissa no es el responsable de la base: lo es el cliente</strong>, y Caissa actúa por su cuenta y siguiendo sus instrucciones (artículo 25 de la Ley 25.326).</p>
<ul>
  <li>Caissa no cede esos datos a terceros ni los usa para finalidades propias.</li>
  <li>Por instrucción y bajo responsabilidad del cliente, Caissa puede cargar datos de su base en plataformas publicitarias, por ejemplo para públicos personalizados o para medición de conversiones. La licitud de esa carga y la obtención del consentimiento correspondiente son responsabilidad del cliente titular de la base.</li>
  <li>Cumplida la prestación contractual, los datos deben ser destruidos, salvo autorización expresa del cliente cuando razonablemente pueda presumirse la posibilidad de encargos posteriores, en cuyo caso pueden almacenarse con las debidas condiciones de seguridad por un plazo máximo de <strong>dos (2) años</strong> (artículo 25, inciso 2).</li>
</ul>

<h3>3.9. Conservación</h3>
<ul>
  <li><strong>Consultas y formularios que no derivan en contratación:</strong> hasta dos años desde el último contacto.</li>
  <li><strong>Clientes:</strong> mientras dure la relación y, luego, por los plazos de conservación contable y fiscal que imponen el artículo 328 del Código Civil y Comercial y la normativa impositiva.</li>
  <li><strong>Postulaciones:</strong> hasta dos años, para considerarte en búsquedas posteriores, salvo que nos pidas lo contrario.</li>
</ul>

<h3>3.10. Seguridad</h3>
<p>Caissa adopta las medidas técnicas y organizativas necesarias para garantizar la seguridad y confidencialidad de los datos, de modo de evitar su adulteración, pérdida, consulta o tratamiento no autorizado (artículo 9 de la Ley 25.326).</p>

<h3>3.11. Órgano de control</h3>
<p class="legal-leyenda">LA AGENCIA DE ACCESO A LA INFORMACIÓN PÚBLICA, en su carácter de Órgano de Control de la Ley N.º 25.326, tiene la atribución de atender las denuncias y reclamos que interpongan quienes resulten afectados en sus derechos por incumplimiento de las normas vigentes en materia de protección de datos personales.</p>

<h3>3.12. Qué derechos no contempla el derecho argentino</h3>
<p>Este aviso se rige por la Ley 25.326. Ese régimen no reconoce los derechos de portabilidad de los datos, de limitación del tratamiento, de oposición general ni frente a decisiones automatizadas, que sí contempla el Reglamento General de Protección de Datos europeo. Lo aclaramos porque muchos avisos legales argentinos los enumeran por copiar plantillas europeas. Si residís en una jurisdicción que te reconoce derechos adicionales, escribinos y lo vemos.</p>
      </section>

      <section class="legal-sec" id="cookies">
        <h2>4. Cookies y tecnologías de medición</h2>
<p>Este sitio utiliza cookies e identificadores propios y de terceros. En la República Argentina no existe una obligación legal de mostrar un banner de consentimiento de cookies equivalente a la europea; por eso este sitio no lo muestra y en cambio te informa acá, de forma completa, qué se usa y cómo desactivarlo.</p>
<p>Las tecnologías de terceros activas en el sitio son:</p>
<ul>
  <li><strong>Google Tag Manager y servicios de medición de Google.</strong> Gestionan las etiquetas de medición del sitio. Podés conocer cómo Google recopila y procesa estos datos en <a href="https://policies.google.com/technologies/partner-sites" target="_blank" rel="noopener">policies.google.com/technologies/partner-sites</a>.</li>
  <li><strong>Píxel de Meta.</strong> Herramienta empresarial de Meta que emplea cookies y tecnologías similares para medir la efectividad de nuestros anuncios y mostrar publicidad en Facebook e Instagram. Podés gestionar o desactivar la segmentación publicitaria de Meta en <a href="https://www.facebook.com/adpreferences/ad_settings" target="_blank" rel="noopener">la configuración de anuncios de tu cuenta</a>.</li>
  <li><strong>LinkedIn Insight Tag.</strong> Mide el resultado de nuestras campañas en LinkedIn. Podés desactivarlo desde la configuración de publicidad de tu cuenta de LinkedIn.</li>
</ul>
<p>Trabajamos con proveedores externos, entre ellos Google, que muestran nuestros anuncios en sitios de Internet. Esos proveedores utilizan cookies o identificadores de dispositivo para mostrar anuncios basados en tus visitas previas a este sitio. Podés desactivar la publicidad personalizada de Google en <a href="https://adssettings.google.com" target="_blank" rel="noopener">adssettings.google.com</a> o excluirte del uso de cookies de terceros en <a href="https://optout.networkadvertising.org" target="_blank" rel="noopener">optout.networkadvertising.org</a>.</p>
<p>Estos datos se tratan para la formación de perfiles que categorizan preferencias y comportamientos similares, identificando a los usuarios únicamente por su pertenencia a grupos genéricos, conforme al artículo 27 del Anexo I del Decreto 1558/2001. No los usamos para identificarte individualmente.</p>
<p><strong>Cómo bloquearlas:</strong> todos los navegadores permiten desactivar o borrar cookies desde su configuración. Si las bloqueás, algunas funciones del sitio pueden dejar de funcionar correctamente.</p>
      </section>

      <section class="legal-sec" id="publicidad">
        <h2>5. Comunicaciones publicitarias</h2>
<p>Si en algún momento Caissa te envía comunicaciones con fines de publicidad, cada envío indicará en forma expresa y destacada la posibilidad de solicitar el retiro o bloqueo, total o parcial, de tu nombre de la base de datos, e incluirá la transcripción del artículo 27, inciso 3, de la Ley 25.326 y del tercer párrafo del artículo 27 del Anexo I del Decreto 1558/2001, conforme lo exige la Disposición DNPDP 4/2009.</p>
<p>Si la comunicación no hubiera sido solicitada por vos, se advertirá de forma destacada que se trata de una publicidad y, en los envíos por correo electrónico, se insertará el término «publicidad» en el encabezado del mensaje.</p>
      </section>

      <section class="legal-sec" id="confidencialidad">
        <h2>6. Confidencialidad</h2>
<p>La información que los clientes comparten con Caissa en el marco de la prestación del servicio tiene carácter confidencial y no se utiliza para fines distintos de los acordados ni se divulga a terceros ajenos a la prestación.</p>
<p>Caissa publica casos, logotipos y testimonios de clientes en este sitio. Ese material se publica con autorización del cliente. Si identificás material propio publicado sin tu autorización, escribinos a <a href="mailto:hola@caissa.digital">hola@caissa.digital</a> y lo retiramos.</p>
      </section>

      <section class="legal-sec" id="propiedad">
        <h2>7. Propiedad intelectual</h2>
<p>&copy; 2026 SYNERGYMEDIA PATAGONIA S.A.S. Todos los derechos reservados. Los contenidos de este sitio (textos, imágenes, diseño y código) están protegidos por la <strong>Ley 11.723 de Propiedad Intelectual</strong>. Queda prohibida su reproducción, distribución o comunicación pública, total o parcial, sin autorización previa y por escrito del titular.</p>
<p>Se admite la publicación de comentarios, críticas o notas con fines didácticos o científicos, incluyendo hasta mil (1.000) palabras, conforme al artículo 10 de la Ley 11.723, siempre que se mencione la fuente.</p>
<p>Las marcas, logotipos y nombres comerciales de terceros que aparecen en el sitio pertenecen a sus respectivos titulares y se utilizan únicamente a título identificatorio.</p>
      </section>

      <section class="legal-sec" id="enlaces">
        <h2>8. Enlaces externos</h2>
<p>Este sitio contiene enlaces a sitios gestionados por terceros. Caissa no responde por sus contenidos ni por su disponibilidad, y la presencia del enlace no implica que Caissa recomiende o apruebe lo que allí se publica.</p>
      </section>

      <section class="legal-sec" id="credenciales">
        <h2>9. Contenidos del sitio</h2>
<p>Los contenidos informativos y los casos publicados describen trabajos efectivamente realizados. Los resultados alcanzados por un cliente dependen de su mercado, su producto, su inversión y su operación, y no constituyen una promesa de resultados para otros.</p>
      </section>

      <section class="legal-sec" id="responsabilidad">
        <h2>10. Limitación de responsabilidad</h2>
<p>Caissa procura que el sitio esté disponible y que su información sea correcta y esté actualizada, pero no garantiza la ausencia de interrupciones, errores u omisiones. Caissa no responde por los daños derivados del uso del sitio ni de la imposibilidad de usarlo, salvo dolo o culpa grave.</p>
      </section>

      <section class="legal-sec" id="modificaciones">
        <h2>11. Modificaciones</h2>
<p>Caissa puede modificar este aviso en cualquier momento. La versión vigente es la publicada en esta dirección, con la fecha de actualización indicada arriba. Se recomienda releerlo periódicamente.</p>
      </section>

      <section class="legal-sec" id="jurisdiccion">
        <h2>12. Ley aplicable y jurisdicción</h2>
<p>Este aviso se rige por la ley de la República Argentina. Para cualquier controversia derivada del uso del sitio, las partes se someten a la jurisdicción de los tribunales ordinarios de la ciudad de Neuquén, Provincia del Neuquén, con renuncia a cualquier otro fuero o jurisdicción.</p>
<p>Esta cláusula de prórroga no es oponible a quien revista el carácter de consumidor en los términos del artículo 1092 del Código Civil y Comercial de la Nación: en ese caso se tiene por no escrita, conforme al artículo 1109 del mismo Código.</p>
      </section>


    </div>
  </div>
</section>

</main>

<?php
get_footer();