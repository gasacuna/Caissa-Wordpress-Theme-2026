
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
