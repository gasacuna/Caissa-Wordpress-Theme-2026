
  /* ===== Barra sticky mobile: aparece solo cuando NO hay otro CTA grande en pantalla.
     Evita el "doble call to action" del ATF y el del cierre. ===== */
  (function(){
    var bar = document.querySelector('.sticky-cta');
    if(!bar) return;
    /* Todos los botones de reserva de la pagina, no solo el del hero y el del cierre:
       cualquiera de ellos en pantalla ya es el CTA visible y la barra sobra. */
    var big = [].slice.call(document.querySelectorAll('a.btn[href*="reservar-consultoria"]'))
      .filter(function(a){ return !a.closest('.sticky-cta') && !a.closest('header.nav'); });
    if(!big.length){ bar.classList.add('show'); return; }
    /* Barato: seis getBoundingClientRect y un toggle de clase, como mucho una vez por frame.
       Se lee todo primero y recién después se escribe la clase, para no forzar reflow. */
    var evaluate = function(){
      var solo = true;
      for(var i = 0; i < big.length; i++){
        var r = big[i].getBoundingClientRect();
        if(r.bottom > 0 && r.top < (window.innerHeight || 0) - 76){ solo = false; break; }
      }
      bar.classList.toggle('show', solo);
    };
    /* Throttle por reloj, no por rAF: rAF no corre en una pestaña en segundo plano
       y la barra se quedaba pegada en el estado con el que cargó la página. */
    var last = 0, timer = null;
    var onScroll = function(){
      var now = +new Date();
      if(now - last > 110){ last = now; evaluate(); return; }
      clearTimeout(timer);
      timer = setTimeout(function(){ last = +new Date(); evaluate(); }, 110);
    };
    /* la primera pasada corre en el load listener: fuera del critical path (forced-reflow) */
    window.addEventListener('scroll', onScroll, {passive: true});
    window.addEventListener('resize', onScroll);
    window.addEventListener('load', evaluate);
  })();
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
