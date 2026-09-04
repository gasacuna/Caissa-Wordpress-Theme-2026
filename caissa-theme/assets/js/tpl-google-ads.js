
  /* ===== Barra sticky mobile: queda SIEMPRE visible (pedido de Manuel, 04/09/2026).
     Antes se ocultaba cuando habia otro CTA de reserva en pantalla y reaparecia al salir
     de vista: en la home eso daba 11 cambios de estado en un scroll completo y 7 en cada
     landing. Se elimino el IIFE que alternaba la clase .show junto con sus listeners de
     scroll/resize; ahora la visibilidad es puro CSS. Esto REVIERTE el comportamiento que
     documenta CLAUDE.md 18.b. ===== */
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

  /* SMIL no se apaga con CSS: la flecha del claim se pausa por JS si el usuario pide menos movimiento. */
  var RM = window.matchMedia && matchMedia('(prefers-reduced-motion: reduce)').matches;
  if(RM){
    var g = document.querySelector('.grow');
    if(g && g.pauseAnimations) g.pauseAnimations();
  }

  /* ===== Panel AEGIS: vigilancia en vivo =====
     REGLA (Manuel, 24/08/2026, la misma de /tecnologia/): el panel solo muestra lo que el
     software hace DE VERDAD. AEGIS no reasigna presupuesto solo; vigila que la inversión
     vaya a términos calificados, la velocidad de carga y el ROI real. Por eso el feed
     detecta/avisa/informa y nunca "mueve plata". Solo corre con la sección a la vista.
     Números ilustrativos (aclarado al pie del panel). */
  (function(){
    var panel = document.getElementById('rtPanel');
    if(!panel) return;
    var clock = document.getElementById('rtClock');
    var feed  = document.getElementById('rtFeed');
    var kTerms = document.getElementById('rtTerms');
    var rows = [].slice.call(panel.querySelectorAll('.rt-camp'));
    function pad(n){ return (n<10?'0':'')+n; }
    function hhmm(d){ return pad(d.getHours())+':'+pad(d.getMinutes()); }

    if(clock){
      var tick = function(){ var d=new Date(); clock.textContent = pad(d.getHours())+':'+pad(d.getMinutes())+':'+pad(d.getSeconds()); };
      tick(); setInterval(tick, 1000);
    }

    var on = false;
    if('IntersectionObserver' in window){
      new IntersectionObserver(function(es){ on = es[0].isIntersecting; }, {rootMargin:'200px 0px'}).observe(panel);
    } else { on = true; }

    /* Latido suave de los tres indicadores alrededor de su nivel: son medidores, no barras
       de presupuesto. */
    function latir(){
      rows.forEach(function(r){
        var base = parseFloat(r.getAttribute('data-osc'));
        var v = Math.max(4, Math.min(100, base + (Math.random()*4 - 2)));
        r.querySelector('.rt-track i').style.width = v + '%';
      });
    }
    latir();

    var okIco  = '<svg class="i" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
    var cutIco = '<svg class="i" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg>';
    var msgs = [
      {c:'cut', k:'term', t:'Término sin intención de compra negativado'},
      {c:'ok',  t:'Velocidad verificada: la landing cargó en 1,9 s'},
      {c:'ok',  t:'Búsqueda ganadora propuesta como keyword exacta'},
      {c:'cut', k:'term', t:'Término irrelevante bloqueado antes de gastar'},
      {c:'ok',  t:'ROI del día calculado sobre ventas reales: 4,8x'},
      {c:'cut', t:'LCP subió a 3,1 s: alerta enviada al equipo'},
      {c:'ok',  t:'Los tres controles en verde: informe al especialista'}
    ];
    var nTerms = 214, mi = 0;
    function addRow(m, when){
      var row = document.createElement('div');
      row.className = 'rt-row' + (m.c==='cut' ? ' cut' : '');
      row.innerHTML = (m.c==='cut'?cutIco:okIco) + '<span class="t">'+hhmm(when)+'</span><span>'+m.t+'</span>';
      feed.insertBefore(row, feed.firstChild);
      while(feed.children.length > 3) feed.removeChild(feed.lastChild);
    }
    [11,6,2].forEach(function(min, ix){ addRow(msgs[ix], new Date(Date.now()-min*60000)); });
    mi = 3;

    if(!RM){
      setInterval(function(){
        if(!on) return;
        var m = msgs[mi % msgs.length]; mi++;
        addRow(m, new Date());
        latir();
        if(m.k === 'term'){ nTerms++; if(kTerms) kTerms.textContent = nTerms; }
      }, 3800);
    }
  })();

  /* ===== Flecha SMIL del hero: se pausa fuera del viewport (main thread en reposo) ===== */
  (function(){
    if(!('IntersectionObserver' in window)) return;
    var rm = window.matchMedia && matchMedia('(prefers-reduced-motion: reduce)').matches;
    var grow = document.querySelector('svg.grow');
    if(!grow || !grow.pauseAnimations || rm) return;
    new IntersectionObserver(function(es){
      var e = es[es.length-1];
      if(e.isIntersecting) grow.unpauseAnimations(); else grow.pauseAnimations();
    }, {rootMargin:'150px 0px'}).observe(grow);
  })();
