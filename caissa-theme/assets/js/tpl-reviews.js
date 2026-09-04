
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
  /* ===== Lightbox de testimonios en video (YouTube) ===== */
  (function(){
    var lb=document.getElementById('ytlb'), frame=document.getElementById('ytlbFrame');
    if(!lb||!frame) return;
    var lastFocus=null;
    function open(id, trigger){
      lastFocus=trigger||null;
      frame.innerHTML='<iframe src="https://www.youtube-nocookie.com/embed/'+id+'?autoplay=1&rel=0&modestbranding=1&playsinline=1" title="Testimonio en video de un cliente de Caissa" allow="autoplay; encrypted-media; picture-in-picture; fullscreen" allowfullscreen></iframe>';
      lb.classList.add('open'); lb.setAttribute('aria-hidden','false'); document.body.style.overflow='hidden';
      var c=lb.querySelector('.ytlb-close'); if(c) c.focus();
    }
    function close(){
      lb.classList.remove('open'); lb.setAttribute('aria-hidden','true'); frame.innerHTML=''; document.body.style.overflow='';
      if(lastFocus&&lastFocus.focus){ lastFocus.focus(); }
    }
    document.querySelectorAll('.vidmarquee').forEach(function(m){
      m.addEventListener('click', function(e){
        var card=e.target.closest('.vidcard[data-yt]');
        if(card){ e.preventDefault(); open(card.getAttribute('data-yt'), card); }
      });
    });
    lb.addEventListener('click', function(e){ if(e.target.hasAttribute('data-close')||e.target.closest('[data-close]')) close(); });
    document.addEventListener('keydown', function(e){ if(e.key==='Escape'&&lb.classList.contains('open')) close(); });
  })();
