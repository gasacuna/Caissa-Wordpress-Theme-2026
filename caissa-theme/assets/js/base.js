
  document.documentElement.classList.add('js');
  /* ===== Menu global: desplegables del header (desktop) + acordeones del drawer (mobile).

     REESCRITO PARA EL TEMA. El HTML original tenia UN solo desplegable ("Servicios") y
     el JS usaba querySelector en singular, asi que enganchaba el primero y nada mas. En
     WordPress el menu lo arma el cliente desde Apariencia > Menus y puede tener varios
     items con hijos, asi que aca se enganchan TODOS.

     Ademas se cierra el resto al abrir uno: dos paneles abiertos a la vez se superponen. */
  (function(){
    var drops = [];
    Array.prototype.forEach.call(document.querySelectorAll('.nav-drop'), function(drop){
      var btn = drop.querySelector('.nav-drop-btn');
      if(!btn) return;
      var set = function(v){
        drop.classList.toggle('open', v);
        btn.setAttribute('aria-expanded', v ? 'true' : 'false');
      };
      drops.push(set);
      var canHover = window.matchMedia && matchMedia('(hover:hover) and (pointer:fine)').matches;
      btn.addEventListener('click', function(e){
        e.preventDefault(); e.stopPropagation();
        var v = !drop.classList.contains('open');
        cerrarTodos();
        set(v);
      });
      if(canHover){
        drop.addEventListener('mouseenter', function(){ cerrarTodos(); set(true); });
        drop.addEventListener('mouseleave', function(){ set(false); });
      }
      drop.addEventListener('focusout', function(e){
        if(!drop.contains(e.relatedTarget)) set(false);
      });
    });
    function cerrarTodos(){
      for(var i = 0; i < drops.length; i++) drops[i](false);
    }
    if(drops.length){
      document.addEventListener('click', function(e){
        var dentro = e.target && e.target.closest && e.target.closest('.nav-drop');
        if(!dentro) cerrarTodos();
      });
      document.addEventListener('keydown', function(e){
        if(e.key === 'Escape' || e.key === 'Esc'){
          cerrarTodos();
          if(document.activeElement && document.activeElement.blur) document.activeElement.blur();
        }
      });
    }
    /* Acordeones del drawer mobile: mismo problema, misma solucion. */
    Array.prototype.forEach.call(document.querySelectorAll('.nav-macc'), function(macc){
      var mbtn = macc.querySelector('.nav-macc-btn');
      if(!mbtn) return;
      mbtn.addEventListener('click', function(){
        var v = !macc.classList.contains('open');
        macc.classList.toggle('open', v);
        mbtn.setAttribute('aria-expanded', v ? 'true' : 'false');
      });
    });
  })();

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
