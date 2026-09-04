
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

  if(window.matchMedia && matchMedia('(prefers-reduced-motion: reduce)').matches){
    var g = document.querySelector('.grow'); if(g && g.pauseAnimations) g.pauseAnimations();
  }

  /* Mapa con carga diferida: el iframe de Google Maps (y sus cookies de terceros) recién se
     pide cuando el usuario toca el botón. Sin esto, la página arrastra ~800 KB que casi nadie
     mira. Las coordenadas son las mismas del JSON-LD y de los meta geo. */
  (function(){
    var btn = document.getElementById('napMapBtn');
    var slot = document.getElementById('napMapFrame');
    if(!btn || !slot) return;
    btn.addEventListener('click', function(){
      var f = document.createElement('iframe');
      f.title = 'Mapa con la ubicación de la oficina de Caissa en Neuquén Capital';
      f.src = 'https://www.google.com/maps?q=-38.977812,-68.050062&hl=es&z=16&output=embed';
      f.loading = 'lazy';
      f.setAttribute('referrerpolicy','no-referrer-when-downgrade');
      f.setAttribute('allowfullscreen','');
      slot.appendChild(f);
      btn.setAttribute('aria-expanded','true');
      btn.remove();
    }, {once:true});
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
