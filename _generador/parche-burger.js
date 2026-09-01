
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
