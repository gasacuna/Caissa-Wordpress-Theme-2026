
  /* ===== Barra sticky mobile: queda SIEMPRE visible (pedido de Manuel, 04/09/2026).
     Antes se ocultaba cuando habia otro CTA de reserva en pantalla y reaparecia al salir
     de vista: en la home eso daba 11 cambios de estado en un scroll completo y 7 en cada
     landing. Se elimino el IIFE que alternaba la clase .show junto con sus listeners de
     scroll/resize; ahora la visibilidad es puro CSS. Esto REVIERTE el comportamiento que
     documenta CLAUDE.md 18.b. ===== */
  var RM = window.matchMedia && matchMedia('(prefers-reduced-motion: reduce)').matches;

  var burger = document.getElementById('burger');
  var navMobile = document.getElementById('navMobile');
  if(burger){ burger.addEventListener('click', function(){
    navMobile.classList.toggle('open');
    burger.classList.toggle('open');
    burger.setAttribute('aria-expanded', navMobile.classList.contains('open'));
  }); }
  navMobile && navMobile.querySelectorAll('a').forEach(function(a){ a.addEventListener('click', function(){
    navMobile.classList.remove('open'); burger.classList.remove('open'); burger.setAttribute('aria-expanded','false');
  }); });

  if('IntersectionObserver' in window){
    var io = new IntersectionObserver(function(entries){
      entries.forEach(function(e){ if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target); } });
    }, {threshold:.08, rootMargin:'0px 0px -40px 0px'});
    document.querySelectorAll('.reveal').forEach(function(el){ io.observe(el); });
  } else {
    document.querySelectorAll('.reveal').forEach(function(el){ el.classList.add('in'); });
  }

  /* ===== Contadores =====
     Cuentan una sola vez al entrar en pantalla. Con reduced-motion saltan al valor final.
     Los cinco números son los que ya publica la página; el data-final manda siempre. */
  (function(){
    var nodes = [].slice.call(document.querySelectorAll('[data-count]'));
    if(!nodes.length) return;
    function render(v, fmt){
      switch(fmt){
        case 'musd': return '+$' + (v/1000000).toFixed(1).replace('.', ',') + 'M';
        case 'int':  return Math.round(v).toLocaleString('es-AR');
        case 'pct':  return Math.round(v) + '%';
        case 'x':    return '+' + Math.round(v) + 'X';
        case 'plus': return '+' + Math.round(v);
        default:     return Math.round(v);
      }
    }
    function run(el){
      var target = parseFloat(el.getAttribute('data-count'));
      var fmt = el.getAttribute('data-fmt');
      var fin = el.getAttribute('data-final');
      if(RM){ el.textContent = fin; return; }
      var dur = 1500, t0 = null;
      function step(ts){
        if(t0 === null) t0 = ts;
        var p = Math.min(1, (ts - t0) / dur);
        var e = 1 - Math.pow(1 - p, 3);
        el.textContent = render(target * e, fmt);
        if(p < 1) requestAnimationFrame(step); else el.textContent = fin;
      }
      el.textContent = render(0, fmt);
      requestAnimationFrame(step);
    }
    if('IntersectionObserver' in window){
      var co = new IntersectionObserver(function(es){
        es.forEach(function(e){ if(e.isIntersecting){ run(e.target); co.unobserve(e.target); } });
      }, {threshold:.4});
      nodes.forEach(function(n){ co.observe(n); });
    } else {
      nodes.forEach(function(n){ n.textContent = n.getAttribute('data-final'); });
    }
  })();

  /* ===== Dibujado de los tildes de la tabla comparativa ===== */
  (function(){
    var t = document.getElementById('cmp');
    if(!t) return;
    if(!('IntersectionObserver' in window)){ t.classList.add('in'); return; }
    var o = new IntersectionObserver(function(es){
      if(es[0].isIntersecting){ t.classList.add('in'); o.disconnect(); }
    }, {threshold:.2});
    o.observe(t);
  })();

  /* ===================== RUNTIME DE LOS PANELES =====================
     Los cuatro paneles corren con UN SOLO setInterval de 500 ms. Cada uno se registra con
     su cadencia (en ticks) y con una condición de visibilidad: si su sección no está en
     pantalla, no se ejecuta. Es lo que evita que la página quede moviendo cuatro widgets
     a la vez y trabando el scroll.
     Con prefers-reduced-motion cada panel se pinta UNA vez y se queda quieto.

     TODOS los datos de estos paneles son ILUSTRATIVOS y está aclarado al pie de cada uno:
     términos genéricos, URLs genéricas y competidores sin nombre. Nada sale de una cuenta real. */
  (function(){
    var jobs = [], n = 0;

    function watch(el){
      var s = {v:true};
      if('IntersectionObserver' in window){
        s.v = false;
        new IntersectionObserver(function(es){ s.v = es[0].isIntersecting; }, {rootMargin:'220px 0px'}).observe(el);
      }
      return s;
    }
    /* every(elemento, cada cuántos ticks, función). Pinta una vez al registrarse. */
    function every(el, ticks, fn){
      fn();
      if(RM || !el) return;
      var s = watch(el);
      jobs.push({t:ticks, s:s, fn:fn});
    }
    setInterval(function(){
      n++;
      for(var i = 0; i < jobs.length; i++){
        var j = jobs[i];
        if(j.s.v && n % j.t === 0) j.fn();
      }
    }, 500);

    function pad(x){ return (x < 10 ? '0' : '') + x; }
    function reloj(){ var d = new Date(); return pad(d.getHours())+':'+pad(d.getMinutes())+':'+pad(d.getSeconds()); }
    function coma(v, dec){ return v.toFixed(dec).replace('.', ','); }

    /* ---------- 1. Términos de búsqueda ---------- */
    (function(){
      var panel = document.getElementById('agPanel');
      if(!panel) return;
      var feed = document.getElementById('agFeed');
      var clock = document.getElementById('agClock');
      var kT = document.getElementById('agTerms'), kN = document.getElementById('agNeg');

      var ok  = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
      var cut = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg>';
      var up  = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M12 19V5M6 11l6-6 6 6" stroke-linecap="round" stroke-linejoin="round"/></svg>';

      var terms = [
        {t:'comprar zapatillas running online', c:'ok',  l:'Convierte'},
        {t:'zapatillas running gratis',         c:'cut', l:'Negativo'},
        {t:'mejores zapatillas para maratón',   c:'up',  l:'Subir puja'},
        {t:'cómo limpiar zapatillas de tela',   c:'cut', l:'Negativo'},
        {t:'zapatillas running mujer talle 38', c:'ok',  l:'Convierte'},
        {t:'zapatillas running segunda mano',   c:'cut', l:'Negativo'},
        {t:'zapatillas pronación precio',       c:'up',  l:'Subir puja'},
        {t:'trabajo en fábrica de calzado',     c:'cut', l:'Negativo'},
        {t:'tienda de running envío 24 h',      c:'ok',  l:'Convierte'}
      ];
      function fila(m){
        var d = document.createElement('div');
        d.className = 'ag-row ' + m.c;
        d.innerHTML = '<span class="i">' + (m.c === 'ok' ? ok : m.c === 'cut' ? cut : up) + '</span>' +
                      '<span class="ag-term">' + m.t + '</span>' +
                      '<span class="ag-verd">' + m.l + '</span>';
        feed.insertBefore(d, feed.firstChild);
        while(feed.children.length > 5) feed.removeChild(feed.lastChild);
      }
      [4,3,2,1,0].forEach(function(i){ fila(terms[i]); });

      var i = 5, nT = 4812, nN = 137;
      every(panel, 2, function(){ if(clock) clock.textContent = reloj(); });
      every(panel, 5, function(){
        var m = terms[i % terms.length]; i++;
        fila(m);
        nT += Math.floor(Math.random() * 7) + 2;
        if(kT) kT.textContent = nT.toLocaleString('es-AR');
        if(m.c === 'cut'){ nN++; if(kN) kN.textContent = nN; }
      });
    })();

    /* ---------- 2. Velocidad de carga (Core Web Vitals) ----------
       Los umbrales son los públicos de Google: LCP 2,5 s · INP 200 ms · CLS 0,1.
       Los valores oscilan dentro de rangos verosímiles, no son de una cuenta. */
    (function(){
      var panel = document.getElementById('cwvPanel');
      if(!panel) return;
      var filas = [].slice.call(panel.querySelectorAll('.cwv-r'));
      var score = document.getElementById('cwvScore');
      var when  = document.getElementById('cwvWhen');
      /* Cada paso de la demo es UNA medición programada, no un segundo. El pie muestra la
         hora de esa medición y avanza de a 30 minutos: así el panel se lee como lo que es,
         un chequeo periódico comprimido, y no como un medidor en vivo. */
      var t0 = new Date(); t0.setHours(8, 0, 0, 0);
      var paso = 0;

      /* Los rangos son anchos a propósito: si los tres indicadores dieran siempre verde, el
         panel diría que no hace falta monitorear nada. Acá a veces se pone amarillo, que es
         lo que pasa en cualquier sitio real y es justamente el argumento de la sección. */
      var defs = {
        lcp: {base:2.15, jit:.95, max:4.5, good:2.5, warn:4,   fmt:function(v){ return coma(v,1) + ' s'; }},
        inp: {base:158,  jit:115, max:520, good:200, warn:500, fmt:function(v){ return Math.round(v) + ' ms'; }},
        cls: {base:.062, jit:.075,max:.26, good:.1,  warn:.25, fmt:function(v){ return coma(v,3); }}
      };

      every(panel, 6, function(){
        var pts = 0;
        filas.forEach(function(r){
          var d = defs[r.getAttribute('data-k')];
          var v = Math.max(0, d.base + (Math.random() * 2 - 1) * d.jit);
          var estado = v <= d.good ? 'good' : (v <= d.warn ? 'warn' : 'bad');
          r.className = 'cwv-r ' + estado;
          r.querySelector('.cwv-track i').style.width = Math.min(100, v / d.max * 100).toFixed(0) + '%';
          r.querySelector('.cwv-v').textContent = d.fmt(v);
          pts += estado === 'good' ? 33 : estado === 'warn' ? 21 : 11;
        });
        if(score) score.textContent = Math.min(100, pts + 1);
        var d = new Date(t0.getTime() + paso * 30 * 60000); paso = (paso + 1) % 20;
        if(when) when.textContent = 'medición de las ' + pad(d.getHours()) + ':' + pad(d.getMinutes());
      });
    })();

    /* ---------- 3. Monitoreo de landing pages ----------
       Cuenta una historia en seis pasos: todo bien, se cae el formulario, salta la alerta,
       se resuelve. Las direcciones son genéricas. */
    (function(){
      var panel = document.getElementById('lpPanel');
      if(!panel) return;
      var lista = document.getElementById('lpList');
      var alerta = document.getElementById('lpAlert');
      var txt = document.getElementById('lpAlertTxt');

      var pages = [
        {u:'/promocion-verano/',      m:'formulario + conversión'},
        {u:'/servicios/consultoria/', m:'formulario + conversión'},
        {u:'/contacto/',              m:'formulario + conversión'},
        {u:'/catalogo/',              m:'carrito + conversión'},
        {u:'/gracias/',               m:'registro de conversión'}
      ];
      var paso = -1;
      var ROTA = 1;   /* la fila que falla en el ciclo */

      every(panel, 4, function(){
        paso = (paso + 1) % 6;
        var enFalla = paso >= 1 && paso <= 3;
        lista.innerHTML = pages.map(function(p, i){
          var err = enFalla && i === ROTA;
          return '<div class="lp-r ' + (err ? 'err' : 'ok') + '">' +
                   '<span class="lp-u"><b>' + p.u + '</b><span>' + (err ? 'el envío no devuelve respuesta' : p.m) + '</span></span>' +
                   '<span class="lp-s">' + (err ? 'Error' : 'OK') + '</span>' +
                 '</div>';
        }).join('');
        if(paso === 4 && txt) txt.textContent = 'Resuelto. La página volvió a registrar conversiones.';
        if(paso === 2 && txt) txt.textContent = 'Aviso enviado al equipo. Hay campañas activas apuntando a esa página.';
        alerta.classList.toggle('on', paso >= 2 && paso <= 4);
      });
    })();

  })();
