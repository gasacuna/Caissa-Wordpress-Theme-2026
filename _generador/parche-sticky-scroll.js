
  /* ===== La barra sticky, a partir de los primeros 100px de scroll.
     Solo corre donde el body trae la clase caissa-sticky-scroll, que hoy pone
     inc/parts.php nada mas que en la home: es la unica pagina donde la barra
     tapaba el CTA del hero. En el resto del sitio la barra es puro CSS y se ve
     siempre, como pidio Manuel.

     Se usa una clase en el BODY y no en la barra porque el CSS del umbral vive en
     el override de tpl-home.css, y asi la regla se escribe una sola vez.

     El listener es passive y con throttle por reloj (no por rAF: rAF no corre en
     una pestaña en segundo plano y la barra se quedaba pegada en el estado con el
     que cargo la pagina). Solo escribe la clase cuando el estado cambia de verdad,
     asi no toca el DOM en cada evento. ===== */
  (function () {
    var body = document.body;
    if (!body.classList.contains('caissa-sticky-scroll')) { return; }
    if (!document.querySelector('.sticky-cta')) { return; }

    var UMBRAL = 100;
    var visible = null;

    var evaluar = function () {
      var pasado = (window.pageYOffset || document.documentElement.scrollTop || 0) > UMBRAL;
      if (pasado === visible) { return; }
      visible = pasado;
      body.classList.toggle('sticky-visible', pasado);
    };

    var ultimo = 0, timer = null;
    var alScrollear = function () {
      var ahora = +new Date();
      if (ahora - ultimo > 100) { ultimo = ahora; evaluar(); return; }
      clearTimeout(timer);
      timer = setTimeout(function () { ultimo = +new Date(); evaluar(); }, 100);
    };

    window.addEventListener('scroll', alScrollear, { passive: true });
    /* Al recargar en mitad de la pagina el navegador restaura el scroll: hay que
       evaluar de entrada o la barra no aparece hasta el primer movimiento. */
    evaluar();
  })();
