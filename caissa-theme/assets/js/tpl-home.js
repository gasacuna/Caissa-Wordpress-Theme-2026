
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
  navMobile && navMobile.querySelectorAll('a').forEach(function(a){ a.addEventListener('click', function(){ navMobile.classList.remove('open'); burger.classList.remove('open'); burger.setAttribute('aria-expanded','false'); }); });
  if('IntersectionObserver' in window){
    var io = new IntersectionObserver(function(entries){
      entries.forEach(function(e){ if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target); } });
    }, {threshold:.08, rootMargin:'0px 0px -40px 0px'});
    document.querySelectorAll('.reveal').forEach(function(el){ io.observe(el); });
  } else {
    document.querySelectorAll('.reveal').forEach(function(el){ el.classList.add('in'); });
  }

  /* ===== Tecnología en vivo (AEGIS + velocidad) ===== */
  (function(){
    var rm = window.matchMedia && matchMedia('(prefers-reduced-motion: reduce)').matches;
    if(rm){ var _grow=document.querySelector('.grow'); if(_grow && _grow.pauseAnimations) _grow.pauseAnimations(); }
    /* Los intervalos del panel solo trabajan cuando la sección está a la vista (ahorra CPU/scroll fluido) */
    var liveOn = false, _liveSec = document.getElementById('tecnologia');
    if(_liveSec && 'IntersectionObserver' in window){
      new IntersectionObserver(function(es){ liveOn = es[0].isIntersecting; }, {rootMargin:'200px 0px'}).observe(_liveSec);
    } else { liveOn = true; }
    function pad(n){ return (n<10?'0':'')+n; }
    function hhmm(d){ return pad(d.getHours())+':'+pad(d.getMinutes()); }

    /* Reloj en vivo */
    var clock = document.getElementById('liveClock');
    if(clock){
      var tickClock = function(){ var d=new Date(); clock.textContent = pad(d.getHours())+':'+pad(d.getMinutes())+':'+pad(d.getSeconds()); };
      tickClock(); setInterval(tickClock, 1000);
    }

    /* Curva catmull-rom → bezier para líneas suaves */
    function smoothPath(pts){
      if(pts.length<2) return '';
      var d='M'+pts[0][0].toFixed(1)+','+pts[0][1].toFixed(1);
      for(var i=0;i<pts.length-1;i++){
        var p0=pts[Math.max(0,i-1)], p1=pts[i], p2=pts[i+1], p3=pts[Math.min(pts.length-1,i+2)];
        d+='C'+(p1[0]+(p2[0]-p0[0])/6).toFixed(1)+','+(p1[1]+(p2[1]-p0[1])/6).toFixed(1)+' '
             +(p2[0]-(p3[0]-p1[0])/6).toFixed(1)+','+(p2[1]-(p3[1]-p1[1])/6).toFixed(1)+' '
             +p2[0].toFixed(1)+','+p2[1].toFixed(1);
      }
      return d;
    }

    /* Gráfico de conversiones en vivo */
    var chartSvg = document.getElementById('liveChart');
    if(chartSvg){
      var W=560, H=200, P=12, N=36, step=(W-2*P)/(N-1);
      var actions = [
        'IA: búsqueda sin intención de compra excluida',
        'Presupuesto movido a la campaña con mejor costo por venta',
        'Puja ajustada: la subasta se encareció',
        'Anuncio ganador del test A/B activado',
        'Gasto nocturno sin conversiones recortado'
      ];
      var vals=[], acts=[], base=95;
      for(var i=0;i<N;i++){ base=Math.max(45,Math.min(160, base+(Math.random()*26-12))); vals.push(base); acts.push(null); }
      [9,17,26,32].forEach(function(ix,k){ acts[ix]=actions[k%actions.length]; });
      var yOf = function(v){ return 188-(v/170)*156; };
      var xOf = function(i){ return P+i*step; };
      var line=document.getElementById('liveLine'), area=document.getElementById('liveArea'), marks=document.getElementById('liveMarks');
      function renderChart(){
        var pts=vals.map(function(v,i){ return [xOf(i), yOf(v)]; });
        var d=smoothPath(pts);
        line.setAttribute('d', d);
        area.setAttribute('d', d+'L'+(W-P)+',196 L'+P+',196 Z');
        var mh='';
        for(var i=0;i<N;i++){ if(acts[i]) mh+='<circle cx="'+xOf(i).toFixed(1)+'" cy="'+yOf(vals[i]).toFixed(1)+'" r="4.5" fill="#FF4F40" stroke="#0F1546" stroke-width="2"></circle>'; }
        marks.innerHTML=mh;
      }
      renderChart();
      if(!rm){ setInterval(function(){
        if(!liveOn) return;
        vals.shift(); acts.shift();
        base=Math.max(45,Math.min(160, base+(Math.random()*26-12)));
        vals.push(base);
        acts.push(Math.random()<.15 ? actions[Math.floor(Math.random()*actions.length)] : null);
        renderChart();
      }, 2400); }
      /* Tooltip + cursor */
      var pchart=chartSvg.parentElement, tip=document.getElementById('liveTip'), cursor=document.getElementById('liveCursor');
      chartSvg.addEventListener('mousemove', function(e){
        var r=chartSvg.getBoundingClientRect();
        var vx=(e.clientX-r.left)/r.width*W;
        var i=Math.max(0,Math.min(N-1,Math.round((vx-P)/step)));
        var t=new Date(Date.now()-(N-1-i)*20*60000);
        var conv=Math.round(vals[i]/4);
        tip.innerHTML=hhmm(t)+' · '+conv+' conversiones'+(acts[i]?'<small>⚡ '+acts[i]+'</small>':'');
        var cr=pchart.getBoundingClientRect();
        var px=r.left+xOf(i)/W*r.width-cr.left, py=r.top+yOf(vals[i])/H*r.height-cr.top;
        tip.style.left=Math.min(cr.width-190, Math.max(6, px+14))+'px';
        tip.style.top=Math.max(2, py-40)+'px';
        tip.style.opacity=1;
        cursor.style.display='block';
        cursor.setAttribute('x1', xOf(i)); cursor.setAttribute('x2', xOf(i));
      });
      chartSvg.addEventListener('mouseleave', function(){ tip.style.opacity=0; cursor.style.display='none'; });
    }

    /* Feed de decisiones */
    var feed=document.getElementById('liveFeed');
    if(feed){
      var okIco='<svg class="fi" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6 9 17l-5-5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
      var cutIco='<svg class="fi" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M18 6 6 18M6 6l12 12" stroke-linecap="round"/></svg>';
      var msgs=[
        {c:'cut', k:'term', t:'IA: búsqueda sin intención de compra excluida · Search'},
        {c:'ok', t:'Presupuesto reasignado a la campaña con mejor costo por venta'},
        {c:'cut', t:'Anuncio de bajo rendimiento pausado · test A/B resuelto'},
        {c:'ok', t:'Puja ajustada en 14 keywords: subasta más cara detectada'},
        {c:'ok', t:'Búsqueda ganadora agregada como keyword exacta'},
        {c:'cut', k:'term', t:'Término irrelevante bloqueado antes de gastar un peso'},
        {c:'ok', t:'IA: demanda al alza detectada · presupuesto preparado'},
        {c:'cut', t:'Gasto en horario sin conversiones recortado'}
      ];
      var kDecs=document.getElementById('kDecs'), kTerms=document.getElementById('kTerms');
      var nDecs=38, nTerms=214, mi=0;
      function addRow(m, when){
        var row=document.createElement('div');
        row.className='frow'+(m.c==='cut'?' cut':'');
        row.innerHTML=(m.c==='cut'?cutIco:okIco)+'<span class="ft">'+hhmm(when)+'</span><span>'+m.t+'</span>';
        feed.insertBefore(row, feed.firstChild);
        while(feed.children.length>4) feed.removeChild(feed.lastChild);
      }
      [14,9,5,2].forEach(function(min,ix){ addRow(msgs[ix], new Date(Date.now()-min*60000)); });
      mi=4;
      if(!rm){ setInterval(function(){
        if(!liveOn) return;
        var m=msgs[mi%msgs.length]; mi++;
        addRow(m, new Date());
        nDecs++; if(kDecs) kDecs.textContent=nDecs;
        if(m.k==='term'){ nTerms++; if(kTerms) kTerms.textContent=nTerms; }
      }, 4200); }
    }

    /* Velocidad: valor vivo + mini-curva de 24 h */
    var gv=document.getElementById('gaugeVal');
    if(gv && !rm){ setInterval(function(){
      if(!liveOn) return;
      gv.textContent=(1.8+Math.random()*0.4).toFixed(1).replace('.',',');
    }, 2600); }
    var spark=document.getElementById('sparkSvg');
    if(spark){
      var SW=300, SH=60, SP=6, SN=24, sstep=(SW-2*SP)/(SN-1);
      var sv=[], spike=9;
      for(var si=0;si<SN;si++){
        var night=(si<7||si>21)?-0.25:0;
        sv.push(si===spike?3.4:Math.round((1.75+night+Math.random()*0.35)*100)/100);
      }
      var syOf=function(v){ return SH-8-(v/3.8)*(SH-16); };
      var sxOf=function(i){ return SP+i*sstep; };
      var spts=sv.map(function(v,i){ return [sxOf(i), syOf(v)]; });
      spark.innerHTML='<path d="'+smoothPath(spts)+'" fill="none" stroke="#4254F5" stroke-width="2" stroke-linejoin="round"/>'
        +'<circle cx="'+sxOf(spike).toFixed(1)+'" cy="'+syOf(sv[spike]).toFixed(1)+'" r="4" fill="#F5B301" stroke="#fff" stroke-width="1.5"></circle>'
        +'<line id="sparkCursor" y1="4" y2="'+(SH-4)+'" stroke="rgba(16,20,58,.2)" style="display:none"/>';
      var stip=document.getElementById('sparkTip'), swrap=spark.parentElement;
      spark.addEventListener('mousemove', function(e){
        var r=spark.getBoundingClientRect();
        var i=Math.max(0,Math.min(SN-1,Math.round(((e.clientX-r.left)/r.width*SW-SP)/sstep)));
        stip.textContent=pad(i)+':00 · '+sv[i].toFixed(2).replace('.',',')+' s'+(i===spike?' · pico corregido':'');
        var cr=swrap.getBoundingClientRect();
        var px=r.left+sxOf(i)/SW*r.width-cr.left;
        stip.style.left=Math.max(-30, Math.min(cr.width-130, px-40))+'px';
        stip.style.top='-32px';
        stip.style.opacity=1;
        var sc=document.getElementById('sparkCursor');
        sc.style.display='block'; sc.setAttribute('x1', sxOf(i)); sc.setAttribute('x2', sxOf(i));
      });
      spark.addEventListener('mouseleave', function(){ stip.style.opacity=0; var sc=document.getElementById('sparkCursor'); if(sc) sc.style.display='none'; });
    }
  })();



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

  /* ===== Dolores — conversación con typing (variante 3) ===== */
  (function(){
    var sec=document.getElementById('dolor');if(!sec)return;
    var typeEl=sec.querySelector('.pf3-type'),caret=sec.querySelector('.pf3-caret'),live=sec.querySelector('.pf3-live'),dots=sec.querySelector('.pf3-dots');
    if(!typeEl||!caret||!live)return;
    var quotes=Array.prototype.map.call(sec.querySelectorAll('.pf3-ghost'),function(g){return g.textContent;});
    if(!quotes.length)return;
    var mq=window.matchMedia('(prefers-reduced-motion: reduce)');
    var idx=0,timer=null,pending=null,visible=false,started=false;
    var DOTGAP=550; /* "escribiendo…" (3 puntitos) entre mensaje y mensaje */
    function schedule(fn,ms){pending=fn;timer=setTimeout(function(){timer=null;fn();},ms);}
    function halt(){if(timer){clearTimeout(timer);timer=null;}}
    function showDots(){if(dots)dots.classList.add('on');caret.classList.add('pf3-off');typeEl.textContent='';}
    function hideDots(){if(dots)dots.classList.remove('on');}
    function beginTyping(){showDots();schedule(function(){hideDots();typeQuote(0);},DOTGAP);}
    function typeQuote(pos){
      var q=quotes[idx];
      if(pos<=q.length){
        caret.classList.remove('pf3-off');
        typeEl.textContent=q.slice(0,pos);
        schedule(function(){typeQuote(pos+1);},28); /* escritura +10% (31 -> 28ms) */
      }else{
        caret.classList.add('pf3-off');
        schedule(function(){eraseQuote(q.length);},3100);
      }
    }
    function eraseQuote(pos){
      var q=quotes[idx];
      if(pos>=0){
        caret.classList.remove('pf3-off');
        typeEl.textContent=q.slice(0,pos);
        schedule(function(){eraseQuote(pos-1);},11); /* borrado +10% (12 -> 11ms) */
      }else{
        idx=(idx+1)%quotes.length;
        beginTyping(); /* muestra los puntitos y luego escribe la próxima */
      }
    }
    function swapQuote(){
      live.style.opacity='0';
      schedule(function(){
        idx=(idx+1)%quotes.length;
        typeEl.textContent=quotes[idx];
        live.style.opacity='1';
        schedule(swapQuote,5000);
      },260);
    }
    function start(){
      if(mq.matches){
        caret.classList.add('pf3-off');
        typeEl.textContent=quotes[idx];
        live.style.opacity='1';
        schedule(swapQuote,5000);
      }else{
        beginTyping();
      }
    }
    function restart(){
      halt();idx=0;hideDots();typeEl.textContent='';live.style.opacity='1';caret.classList.add('pf3-off');
      started=true;pending=start;
      if(visible)schedule(start,300);
    }
    if('IntersectionObserver' in window){
      var io=new IntersectionObserver(function(entries){
        var vis=entries.some(function(e){return e.isIntersecting;});
        if(vis&&!visible){
          visible=true;
          if(!started){started=true;schedule(start,250);}
          else if(!timer&&pending){schedule(pending,250);}
        }else if(!vis&&visible){
          visible=false;halt();
        }
      },{threshold:0.2});
      io.observe(sec);
    }else{
      started=true;visible=true;start();
    }
    if(mq.addEventListener)mq.addEventListener('change',restart);
    else if(mq.addListener)mq.addListener(restart);
  })();


