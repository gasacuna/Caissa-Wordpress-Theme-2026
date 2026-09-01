
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

  var RM = window.matchMedia && matchMedia('(prefers-reduced-motion: reduce)').matches;
  if(RM){ var g = document.querySelector('.grow'); if(g && g.pauseAnimations) g.pauseAnimations(); }

  /* ===== Panel de reasignación de presupuesto en vivo (mismo componente que la landing de
     Google Ads, con campañas de Meta). Solo corre con la sección a la vista. ===== */
  (function(){
    var panel = document.getElementById('rtPanel');
    if(!panel) return;
    var clock = document.getElementById('rtClock');
    var feed  = document.getElementById('rtFeed');
    var kDecs = document.getElementById('rtDecs'), kTerms = document.getElementById('rtTerms');
    var camps = [].slice.call(panel.querySelectorAll('.rt-camp'));
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

    function reasignar(){
      var vals = camps.map(function(c){
        var base = parseFloat(c.getAttribute('data-base'));
        var drift = c.classList.contains('down') ? -(Math.random()*4) : (Math.random()*5 - 1.5);
        return Math.max(4, base + drift);
      });
      var total = vals.reduce(function(a,b){ return a+b; }, 0);
      camps.forEach(function(c, i){
        var pct = Math.round(vals[i]/total*100);
        c.querySelector('.rt-track i').style.width = pct+'%';
        c.querySelector('.rt-share b').textContent = pct+'%';
      });
    }
    reasignar();

    var okIco  = '<svg class="i" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
    var cutIco = '<svg class="i" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg>';
    var msgs = [
      {c:'cut', k:'crea', t:'Creatividad quemada pausada: subió el costo por compra'},
      {c:'ok',  t:'Remarketing 30 días: rendimiento al alza'},
      {c:'cut', t:'Reconocimiento recortado: no alimenta conversión'},
      {c:'ok',  t:'Nueva variante de Reel activada tras ganar el A/B'},
      {c:'ok',  t:'Público similar ampliado al 3%: costo estable'},
      {c:'cut', k:'crea', t:'Anuncio con frecuencia alta rotado antes de saturar'},
      {c:'ok',  t:'Catálogo sincronizado: 42 productos sin stock excluidos'},
      {c:'cut', t:'Ubicación con peor costo por resultado desactivada'}
    ];
    var nDecs = 41, nCrea = 17, mi = 0;
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
        reasignar();
        nDecs++; if(kDecs) kDecs.textContent = nDecs;
        if(m.k === 'crea'){ nCrea++; if(kTerms) kTerms.textContent = nCrea; }
      }, 3800);
    }
  })();
