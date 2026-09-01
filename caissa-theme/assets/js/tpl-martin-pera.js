
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
