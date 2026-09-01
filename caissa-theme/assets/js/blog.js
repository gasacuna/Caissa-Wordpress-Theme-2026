  /* ===== Reveal on scroll para las vistas del blog.
     base.js solo trae el menu global; el reveal vivia en el JS propio de cada pagina y el
     blog no tiene uno. Es el mismo codigo, con el mismo respeto por prefers-reduced-motion:
     si esta activo, todo aparece de una y no se observa nada. ===== */
  (function () {
    var reduce = window.matchMedia && matchMedia('(prefers-reduced-motion: reduce)').matches;
    var nodos = document.querySelectorAll('.reveal');
    if (reduce || !('IntersectionObserver' in window)) {
      Array.prototype.forEach.call(nodos, function (el) { el.classList.add('in'); });
      return;
    }
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
      });
    }, { threshold: .08, rootMargin: '0px 0px -40px 0px' });
    Array.prototype.forEach.call(nodos, function (el) { io.observe(el); });
  })();

  /* ===== La bio del autor, plegada a dos renglones.
     El control es un <button> de verdad (por teclado y por lectores de pantalla) pero
     esta pintado como texto. Si no hay JS, el CSS lo esconde y la bio se ve entera. ===== */
  (function () {
    var btn = document.querySelector('.bl-autor-mas');
    if (!btn) { return; }
    var bio = document.getElementById(btn.getAttribute('aria-controls'));
    if (!bio) { return; }
    var txt = btn.querySelector('.bl-autor-mas-txt');
    /* Si la bio entra completa en los dos renglones, el control sobra: se saca. */
    if (bio.scrollHeight <= bio.clientHeight + 2) { btn.hidden = true; return; }
    btn.addEventListener('click', function () {
      var abierta = bio.classList.toggle('abierta');
      btn.setAttribute('aria-expanded', abierta ? 'true' : 'false');
      if (txt) { txt.textContent = abierta ? 'Leer menos' : 'Leer más'; }
    });
  })();

  /* ===== El menu mobile en las vistas del blog.
     En las 21 plantillas el handler del burger viaja dentro de tpl-<slug>.js, que en el
     blog no se encola: sin esto, el boton del menu no hace NADA en el listado, en los
     archivos, en la busqueda, en una nota abierta ni en el 404. Es el mismo codigo del
     HTML del repo. No puede engancharse dos veces: blog.js solo se carga en el blog, y
     ahi no hay tpl-*.js. ===== */
  (function () {
    var burger = document.getElementById('burger');
    var navMobile = document.getElementById('navMobile');
    if (!burger || !navMobile) { return; }
    burger.addEventListener('click', function () {
      navMobile.classList.toggle('open');
      burger.classList.toggle('open');
      burger.setAttribute('aria-expanded', navMobile.classList.contains('open'));
    });
    Array.prototype.forEach.call(navMobile.querySelectorAll('a'), function (a) {
      a.addEventListener('click', function () {
        navMobile.classList.remove('open');
        burger.classList.remove('open');
        burger.setAttribute('aria-expanded', 'false');
      });
    });
  })();
