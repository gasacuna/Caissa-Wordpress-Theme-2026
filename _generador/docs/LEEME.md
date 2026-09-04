# Tema Caissa 2026

Tema de WordPress con el diseño 2026. **Veintidós plantillas de página**, header y footer
compartidos, menús nativos de WordPress y el CSS servido como archivos cacheables.
Sin frameworks, sin jQuery, sin peticiones a terceros.

Generado desde el repo `Caissa-Nueva-Web-2026`, rama `barra-sticky-fija-y-limpieza-produccion` (commit `8a8b9d8`).

## Versión

**Actual: 1.13.** El número vive en **un solo lugar** (el argumento que recibe el generador)
y de ahí se inyecta en los dos sitios donde tiene que aparecer: la cabecera `Version:` de
`style.css`, que es la que lee WordPress, y la constante `CAISSA_VER` de `functions.php`.
El build falla si no puede escribir en alguno de los dos, así que no se pueden desincronizar.

| | |
|---|---|
| **1.13** | Seis ajustes de mobile y el arreglo del `url()` del CSS. Nace la capa `_generador/overrides/`. |
| **1.12** | "Enlaces destacados": la fila nueva del footer, como cuarto menú de WordPress. |
| **1.11** | Regenerado desde la rama de produccion: 22 plantillas (entra `/sobre-caissa/`), barra sticky siempre visible, assets sincronizados desde el repo (WebP) y `srcset`. |
| **1.10** | Pasada de SEO sobre la nota del blog: headings, entidad autor, breadcrumb visible, categoría primaria de Rank Math y enriquecimiento de su grafo. |
| **1.09** | 21 plantillas: entraron `/aviso-legal/`, `/reservar-consultoria/` y `/llamada-confirmada/`. Contenido actualizado en 16. Once correcciones al chasis. El tema ahora viaja con su generador. |
| **1.08** | Caja de autor de las notas. |
| **1.07** | Blog: listado, archivos, búsqueda, nota abierta y 404. |
| **1.06** | Regenerado desde `3234daf`: 18 plantillas (eran 10). |
| **1.05** | Se repuso `screenshot.png` por decisión del usuario. |
| **1.04** | Versionado en un solo lugar. |
| **1.03** | El favicon del sitio no se veía en el front. |
| **1.02** | El menú solo enganchaba el primer desplegable. |
| **1.01** | Error crítico en el footer: faltaba incluir `inc/bloques.php`. |
| **1.00** | Versión inicial. |

---

## LO PRIMERO: qué hacer en WordPress después de subir el tema

Son cinco cosas. Novedades de esta versión: la página **Sobre Caissa** en el paso 1 y el
**cuarto menú** ("Enlaces destacados") en el paso 4.

### 1. Crear las páginas nuevas y asignarles su plantilla

| Página nueva | Slug (tiene que ser exacto) | Plantilla |
|---|---|---|
| Aviso legal | `aviso-legal` | Caissa — Aviso legal y privacidad |
| Reservar consultoría | `reservar-consultoria` | Caissa — Reservar consultoría |
| Llamada confirmada | `llamada-confirmada` | Caissa — Llamada confirmada |
| **Sobre Caissa** | `sobre-caissa` | **Caissa — Sobre Caissa** |

Los slugs importan: **los CTA del sitio apuntan a `/reservar-consultoria/`** y el
Aviso Legal del footer a `/aviso-legal/`. Si el slug no coincide, el enlace da 404.

⚠️ **`llms.txt` no es una plantilla y no viaja en el tema.** El repo lo agregó en la raíz
del dominio, así que va subido a la raíz de WordPress (al lado de `wp-config.php`), no a
`wp-content/themes/`. Se sirve en `https://caissa.digital/llms.txt`.

### 2. Poner `/llamada-confirmada/` en noindex

El HTML original la declaraba `noindex, follow` con una meta. **El tema no emite metas de
SEO a propósito** (las pone Rank Math), así que ese `noindex` hay que ponerlo a mano:
Rank Math, pestaña Avanzado de esa página, Robots meta, No index.

Es una página de gracias: no tiene que rankear, y si se indexa aparece en resultados gente
que nunca reservó nada.

### 3. Agregar "Prensa" al menú del footer

El repo sumó un enlace **Prensa, a `/#prensa`** en la segunda columna del footer, entre
Tecnología y Equipo. El footer del tema sale de menús de WordPress, así que ese enlace no
viene en el código: hay que agregarlo en Apariencia, Menús, **Footer - Caissa**.

### 4. Revisar los CUATRO menús

| Ubicación | Qué va |
|---|---|
| **Principal (header)** | Servicios (con Google Ads y Meta Ads como hijos) · Testimonios a `/reviews/` · Blog a `https://caissa.digital/blog/` |
| **Footer - Servicios** | Agencia de Google Ads · Agencia de Meta Ads · Marketing en Neuquén · Marketing por industria a `/industrias/` |
| **Footer - Caissa** | Tecnología · Prensa a `/#prensa` · Equipo · **Sobre Caissa a `/sobre-caissa/`** · Valores Core a `/equipo/#valores` · Testimonios a `/reviews/` · Trabajá con nosotros a `/carreras/` · Contacto |
| **Footer - Enlaces destacados** ⬅ nueva | Mejores Agencias de Marketing Digital Argentina a `https://caissa.digital/blog/mejores-agencias-marketing-digital-argentina-2026/` · Agencia Google Ads a `/agencia-google-ads/` · Mejores Agencias de Google Ads Argentina a `https://caissa.digital/blog/las-mejores-agencias-google-ads-argentina/` |

El desplegable del header sale de la **jerarquía del menú**: arrastrá "Google Ads" y
"Meta Ads" debajo de "Servicios". Soporta un solo nivel. Si un menú no está asignado, ese
bloque no se imprime: no hay enlaces de respaldo cableados, para que no aparezca nada que
nadie configuró.

**Sobre "Enlaces destacados".** Es la fila que el repo agregó al pie del mapa del sitio, a
lo ancho de las dos columnas, para SEO/GEO. En el HTML los tres enlaces están cableados; en
el tema salen de un menú porque son justo el tipo de enlace que cambia seguido. Dos apuntan
a notas del blog, que vive en WordPress y no en el repo, así que van con URL absoluta.

⚠️ Un detalle que el propio repo anota: `/agencia-google-ads/` **ya está enlazada arriba, en
la columna Servicios**, y Google sólo cuenta el anchor del **primer** enlace a una misma URL
dentro de una página. O sea que el anchor que pesa es "Agencia de Google Ads" (el de arriba)
y el de esta fila no suma nada para SEO. Está igual porque Manuel lo pidió así; si algún día
se quiere que ese anchor cuente, hay que sacarlo de Servicios.

### 5. Cargar los títulos y descripciones en Rank Math

Están todos en **`SEO-para-Rank-Math.tsv`**, que viaja al lado del tema (no adentro del ZIP):
las **22 URLs** con su `title`, su `meta description`, su `robots`, su `canonical` y las
cuatro `og:`, tal como los declara el HTML del repo. El tema no los escribe.

Los **22 canonical son absolutos**: el de `/reservar-consultoria/` venía relativo y la rama
de producción lo corrigió, así que ya no hay excepciones en el set. La única fila con
`robots` distinto es `/llamada-confirmada/`, que va `noindex, follow` (ver el paso 2).

---

## Qué cambió en 1.13: seis ajustes de mobile

Pedidos de Gastón sobre el comportamiento en teléfono, más un bug del generador que salió
de uno de ellos.

### La capa de overrides (novedad de arquitectura)

Todo lo que hay en el tema sale del HTML del repo. Cuando hace falta un ajuste que **no
está en el repo** —porque es propio de WordPress, o porque el pedido llegó por otro lado—
ahora vive en **`_generador/overrides/`** y el generador lo aplica siempre:

| | |
|---|---|
| `overrides/tpl-<slug>.css` | se agrega al final de `assets/css/tpl-<slug>.css`, **después del blindaje**, así que gana la cascada. Se carga sólo en esa plantilla |
| `overrides/todas.css` | se agrega al final de todas las `tpl-*.css` |
| `overrides/markup.awk` | transformaciones del markup, por slug |
| `assets-extra/` | imágenes que usa el tema y no salen del repo |

**La regla:** si algo se puede resolver en el HTML de Manu, ahí va mejor. El repo es la
fuente de verdad y este directorio es la excepción, no el lugar por defecto. Cada override
lleva un comentario que dice qué cambia, por qué, y si corresponde replicarlo en el repo.

### 1. La barra sticky de la home, a partir de 100px de scroll

El repo la dejó **siempre visible** (Manuel pidió eso) y su visibilidad quedó como puro CSS,
sin JavaScript. Ahora tiene un umbral, pero **sólo en la home**: es la única página donde
tapaba el CTA del hero, o sea el "doble call to action" del ATF que §18.b ya tenía anotado.

- `base.js` pone una clase en el `<body>` pasados los 100px, con listener `passive` y
  throttle por reloj (no por `rAF`, que no corre en una pestaña en segundo plano).
- `inc/parts.php` marca qué plantillas llevan umbral, hoy sólo `home`. Se amplía con el
  filtro `caissa_sticky_con_umbral`.
- El CSS vive en `overrides/tpl-home.css` y anima `transform`, no `display`, que no es
  animable. Respeta `prefers-reduced-motion`.
- **Sin JavaScript la barra se ve de entrada**, que es el comportamiento del repo: vale más
  tener el CTA que esconderlo esperando un scroll que nadie va a medir.

### 2. ⚠️ El logo de la comparativa: era un bug del generador, no del CSS de Manu

En la comparativa apilada en mobile, cada fila "Caissa" muestra el logo azul en vez de un
rótulo de texto. No aparecía, y la causa era mía:

```css
.c-after::before{ background:url(logo-caissa.webp) ... }
```

En el repo el CSS es **inline dentro de la página**, así que `url(logo-caissa.webp)` se
resuelve contra la URL de la página y funciona. Al moverlo a `assets/css/tpl-home.css` se
resuelve contra **la carpeta del CSS**: `assets/css/logo-caissa.webp`, que no existe. Un 404
silencioso, sin error en consola ni nada que se note salvo la imagen faltante.

Ahora **`cssurl.awk` reapunta todas las `url()` relativas a `../img/`**, en los chasis
compartidos y en las `tpl-*.css`. Deja intactas las absolutas, las `data:` y las `http`.

Es una clase de bug que valía la pena cerrar de raíz: **cualquier** `url()` relativa que
Manuel agregue al CSS iba a romperse igual, y no se nota mirando el build. La regla entró
con el commit `3b7d4d3`, así que el tema 1.08 nunca la tuvo y la regresión sigue siendo
válida.

### 3. La foto de Juan Gonzalez Trück (Clean It)

El HTML lo muestra con las iniciales **"JG"** y un comentario que dice que falta la foto: un
pendiente que el `CLAUDE.md` del repo arrastra desde agosto. Gastón pasó la foto, así que se
reemplaza por la imagen en la **home** y en **`/reviews/`**, que usan clases distintas para
el avatar (`.rc-av` y `.rv-av`).

- La foto **no sale del repo**: viaja en `_generador/assets-extra/juan-clean-it.webp`.
- Se **renombró**: llegó como `juan clean it.webp` y un espacio en una URL hay que escaparlo.
- Es 800x800, cuadrada como los otros avatares, así que el recorte a la cara que hace
  `.rc-av img` le sirve igual.

⚠️ **Conviene pasarlo al repo.** Mientras la foto y el `<img>` no estén en el HTML de Manuel,
esto es una divergencia que hay que mantener.

### 4. El CTA del drawer mobile

El nav tenía dos CTA: el de `.nav-cta` (que en mobile ya lo esconde el CSS) y el del drawer.
Se saca **el del drawer**, así que desaparece únicamente en mobile y el de desktop queda
intacto. Con la barra sticky abajo, abrir el menú mostraba el mismo botón dos veces en la
misma pantalla.

### 5. El CTA a Axion Lift en la landing de Google Ads

Se quitó el enlace "Ver el caso Axion Lift" de la tarjeta **B2B e industria**. Apuntaba a
`caissa.digital/caso/axionlift/`, una página que vive sólo en producción y que no se migró.
El texto de la tarjeta queda igual: lo único que se va es el enlace.

### 6. `/reservar-consultoria/`: el formulario a sangre completa

Es la página más desnuda del sitio y su único trabajo es que el formulario se complete, así
que todo lo que no sea el formulario compite.

| | |
|---|---|
| El menú deja de ser sticky | `position:static`. En una página de una sola pantalla, un header pegado se come 73px de alto útil todo el tiempo y no lleva a ningún lado: quien llegó ya decidió |
| El panel va de borde a borde | Se anulan el padding del `.wrap`, el ancho máximo de 900px, el redondeo, los bordes laterales y la sombra. A sangre completa, un borde redondeado queda cortado por la mitad |
| El panel mide 90vh | Con **`min-height:0`**, que es imprescindible: la regla original impone 520px de mínimo y en un celular de costado 520px es *más* que 90vh, así que sin eso el mínimo le ganaba al alto pedido |

El título y la bajada conservan su medida de lectura: son texto y a todo el ancho quedarían
ilegibles. Lo que va a sangre completa es el panel.

Como `tpl-reservar-consultoria.css` se encola **sólo en esa plantilla**, tocar `header.nav`
ahí no afecta al resto del sitio.

---

## Qué cambió en 1.10: la nota del blog

Salió de una auditoría SEO que comparó la nota del blog en la versión nueva contra la de
producción. Lo que sigue es lo que se resolvió **en el tema**; al final está lo que hay que
hacer en el panel, que el código no puede resolver.

### ⚠️ La regla que ordena todo esto: el schema es de Rank Math

**Ninguna plantilla del blog emite JSON-LD.** Verificable: no hay un solo
`application/ld+json` en `single.php`, `home.php`, `archive.php`, `search.php`, `404.php` ni
en los parciales. El `CAISSA_SCHEMA_PROPIO` de `functions.php` sólo afecta a las 21
plantillas de página; el blog nunca lo usó.

O sea que **no hay conflicto de schema en el blog**, y no lo hubo nunca. Todo lo que el tema
agrega al marcado entra por los **filtros propios de Rank Math** y modifica el nodo que él ya
emite. Es la diferencia que importa: dos nodos `BlogPosting` en la misma página compiten y
Google elige uno solo. Ese era el problema del snippet suelto que había en Elementor.

### Headings: seis h2 de chrome que competían con el artículo

Alrededor del cuerpo de la nota había seis `<h2>` que no son estructura del artículo: el
nombre del autor, "Seguí leyendo", los tres títulos de las notas relacionadas y el titular
del CTA de cierre. Los `<h2>` que importan son los del **cuerpo**, que escribe el editor: son
la estructura que Google y los modelos de lenguaje leen para entender de qué habla la nota.

Ahora `single.php` emite **un solo heading, el `<h1>` del título**. Todo lo demás es `<p>` con
clase, y **se ve exactamente igual**: las reglas nuevas de `blog.css` les copian el estilo que
tenían como heading (un `<p>` no hereda el `font-weight:800` ni el `line-height:1.12` de
`h1,h2,h3,h4`, así que van explícitos).

| Antes | Ahora |
|---|---|
| `<h2>` nombre del autor | `<p class="bl-autor-nombre">` |
| `<h2>Seguí leyendo</h2>` | `<p class="bl-rel-t">` |
| `<h2>` de cada nota relacionada | `<p class="bl-card-t">` |
| `<h2>Veamos si te podemos ayudar</h2>` | `<p class="bl-cta-t">` |
| `<h3>` de columna del footer | `<p class="foot-col-t">` |

**La tarjeta del blog tiene el título configurable**, y esto es importante no romperlo: en el
**listado** del blog el título de cada tarjeta **sigue siendo un `<h2>`**, porque ahí sí es la
estructura de ese documento. `single.php` es el único que pide `'titulo' => 'p'`, para el
bloque de relacionadas. Si algún día se reusa la tarjeta en otro lado, el criterio es el
mismo: `h2` si es una sección del documento, `p` si está dentro de un artículo que ya tiene
sus propios `h2`.

⚠️ **Los títulos del footer divergen del HTML del repo**, que sigue usando `<h3>`. Es a
propósito. `footer.php` e `inc/nav.php` son archivos del esqueleto y el parche los convierte
siempre, así que la divergencia se sostiene sola en cada regeneración. Queda decidir si se
replica en el repo.

### La categoría visible ahora la elige Rank Math

La nota tiene tres categorías (Marketing Online, PPC y Ranking). El eyebrow mostraba **PPC**
mientras `article:section` declaraba **Marketing Online**: el rótulo de la pantalla
contradecía al marcado.

`caissa_categoria_principal()` ahora lee primero la **categoría primaria de Rank Math**
(el meta `rank_math_primary_category`), que es la misma que él usa para `article:section` y
para el breadcrumb. Sin Rank Math, o sin primaria elegida, cae en la categoría con más
entradas, que era el comportamiento anterior. También lee el meta de Yoast, por si algún día
se migra.

### Breadcrumb visible

El `BreadcrumbList` estaba en el schema pero no había nada en pantalla que le correspondiera,
y Google pide que el marcado se corresponda con algo visible.

`caissa_breadcrumb()` **usa el breadcrumb de Rank Math cuando está disponible**
(`rank_math_the_breadcrumbs()`), y no uno propio: así lo que se ve y lo que se declara salen
de la **misma fuente** y no pueden divergir. Si el módulo está apagado, arma uno equivalente a
mano, **con el nivel "Blog" incluido** (Inicio › Blog › Categoría › Artículo), que era el que
faltaba en las dos versiones del sitio.

### La entidad autor, en una sola URL

El schema y el contenido apuntaban a `/equipo/manu-ferrini/`, pero el link "por Manu Ferrini"
apuntaba a `/blog/author/manu-ferrini/`. Dos URLs para la misma persona diluyen la entidad
justo donde más rinde: el nodo `Person` es lo que leen Google y los modelos de IA para saber
quién firma.

- `caissa_enlace_autor()` apunta al **perfil del sitio** (`/equipo/<persona>/`), con
  `rel="author me"`, que es lo que tenía la versión anterior. El mapa se amplía sin tocar
  código con el filtro `caissa_perfiles_autor`; si una persona no tiene perfil, cae en el
  archivo de autor de WordPress, como antes.
- **La foto del autor dejó de tener `alt=""`.** Un `alt` vacío declara "esta imagen no aporta
  nada", y acá aporta: es el retrato de quien firma. Ahora lleva "Foto de <nombre>", así que
  el retrato también ancla la entidad.
- **El archivo de autor de WordPress va a `noindex`**, pero **sólo si Rank Math no está
  activo**. Si está, esa decisión es suya (Títulos y Metas → Otros archivos) y el tema no le
  discute.

### Enriquecer el grafo de Rank Math, sin competirle

Rank Math no pone `wordCount`, `mainEntityOfPage` ni `image` en el `BlogPosting`, y los tres
son de los que usan Google y los motores generativos para dimensionar y ubicar el artículo. El
filtro `rank_math/json_ld` los agrega **sobre su nodo**.

**Y para las notas que son un listado** —del tipo "las 10 mejores agencias"— hay una casilla
nueva en la columna lateral del editor: **Caissa · listado → "Esta nota es un listado"**. Al
tildarla, el tema arma un `ItemList` con los `<h2>` del cuerpo (cada uno como `ListItem` con
su `position`, su `name` y, si el `h2` tiene un enlace adentro, su `url`) y lo cuelga del
`BlogPosting` como `mainEntity`. Es el marcado que Google usa para los carruseles de listas y
el que parsean más limpio los modelos para responder "cuáles son las mejores agencias de
Argentina".

**No se hace solo en todas las notas, y es a propósito**: en una nota común los `h2` no son
ítems de nada y el marcado sería falso. Por eso se activa nota por nota.

### Los menores del informe

- **El `title="… 1"` autogenerado de la imagen destacada.** WordPress arrastra el título del
  adjunto al atributo `title`, y los que genera solos no describen nada (además de mostrarse
  como tooltip). Se saca con un filtro; el `alt` se conserva, que es el que importa.
- **`og:locale` decía `es_ES`** (España) mientras el documento declara `lang="es-AR"`. Se
  corrige a **`es_LA`**, que es el español de Latinoamérica: `es_AR` no está en la lista de
  locales que soporta Facebook.
- **El tiempo de lectura ahora es filtrable** (`caissa_minutos_lectura`). La nota mostraba
  "17 min" en pantalla y "16 minutos" en `twitter:data2`: son dos algoritmos distintos y no
  hay forma de que coincidan solos. Con el filtro se puede forzar el del tema al del plugin.

### Lo que el tema NO puede resolver: cuatro cosas del panel

1. **Cargar LinkedIn, X y la foto en el perfil de usuario de WordPress.** Es la forma correcta
   de recuperar lo que hacía el snippet de Elementor: así el nodo `Person` que emite Rank Math
   sale completo, con su `sameAs`. Pegar el snippet de vuelta sería peor, porque metería un
   segundo `BlogPosting` a competir.
2. **Verificar que el autor de la nota sea el usuario correcto.** En el demo el post está
   asignado a otro usuario, y por eso el `Person` de Rank Math apunta a un Gravatar con hash
   distinto. En producción tiene que ser el mismo usuario.
3. **Caché y CDN.** La versión de producción tiene WP Rocket (lazyload, preload de enlaces,
   Speculation Rules) y la nueva no tiene nada. El tema es liviano y compensa bastante, pero
   caché de página y CDN siguen haciendo falta.
4. **El `og:image` de la nota**, si se quiere uno propio distinto de la imagen destacada.

### Antes de cambiar el DNS

Del informe, y no es del tema: search-replace de URLs, desactivar el plugin de "coming soon",
quitar "disuadir a los motores de búsqueda" en Ajustes → Lectura, reimportar la configuración
de Rank Math desde producción, verificar el autor del post y cargar GTM. Al publicar:
`curl -A Googlebot` deslogueado y comparar el `<head>` contra la versión actual, Rich Results
Test, Inspección de URL en Search Console con solicitud de indexación, y monitorear esa URL en
GSC un par de semanas. **El ID del post y el slug son los mismos, así que el artículo no
necesita redirección.**

---

## Qué cambió en 1.09

### Tres plantillas nuevas

- **`tpl-aviso-legal.php`** — el aviso legal argentino reescrito (Ley 25.326). Tipología
  propia: documento legal, medida de lectura angosta, sin bloque de consultoría y sin barra
  sticky. Es la única página del sitio en registro formal.
- **`tpl-reservar-consultoria.php`** — el destino de los 103 CTA. Página desnuda: menú,
  título, el Typeform y el footer. Sin barra sticky (el CTA es el formulario).
- **`tpl-llamada-confirmada.php`** — la página de gracias.

### ⚠️ Se sacaron las notas internas del contenido publicado

El HTML de `/aviso-legal/` traía un párrafo `<p class="legal-nota">` que arranca con
*"Nota para Caissa, no para el visitante. Este párrafo se borra al publicar"* y después
dice, en la propia página legal del sitio, que **las bases de datos no están inscriptas en
el Registro Nacional de la AAIP** (que el artículo 21 de la Ley 25.326 exige) y que **no hay
instrumentos de transferencia internacional firmados** con los prestadores del exterior.

Publicado, eso es una confesión de incumplimiento firmada por la empresa en el documento
donde menos conviene. **El generador ahora saca esos párrafos**, y un chequeo aborta el build
si alguno se cuela. Se saca en el generador y no a mano en el tema para que no pueda volver
en la próxima regeneración aunque siga estando en el HTML del repo.

**Conviene borrarlo también del repo**, porque ahí sigue: es la única página del set con
notas internas, y son 115 palabras que hoy están en `aviso-legal/index.html`.

### Las dos plantillas que llevan un `<script>` inline

`tpl-reservar-consultoria.php` y `tpl-llamada-confirmada.php` son las **únicas dos** que
tienen un `<script>` escrito dentro de la plantilla, justo después de `</main>`. El resto
del JS del tema vive en archivos (`assets/js/`). Es a propósito:

- **La conversión de Google Ads** (en `llamada-confirmada`) es el disparador de toda la
  cuenta. Si se fuera a `tpl-llamada-confirmada.js` quedaría detrás de un archivo externo
  con `defer`, y cualquier plugin de minificado, combinado o caché que rompa ese archivo
  mataría la medición sin que se note mirando la página. Inline no depende de nada.
- **El inyector del Typeform** tiene que setear `data-tf-hidden` **antes** de inyectar
  `embed.js`, porque el widget lee ese atributo al inicializarse. Inline conserva ese orden
  exactamente como estaba en el HTML original.

### La guarda de la conversión compara con `caissa.digital` exacto

```js
if (location.hostname !== 'caissa.digital') return;
```

Eso es lo que queremos en el staging: en `demo.caissa.digital` **no dispara**, así que
probar la página no ensucia los datos de la cuenta real. Pero ojo con producción: si el
sitio se sirve o se redirige a `www.caissa.digital`, la conversión **no va a dispararse
nunca**. Antes de publicar hay que confirmar con qué host queda producción y, si lleva
`www`, cambiar la comparación por `location.hostname.endsWith('caissa.digital')`.

**Al publicar, verificá con el Asistente de etiquetas de Google que la conversión llega.**
Es el único cambio de esta versión que, si sale mal, no se nota mirando la página.

### `institucional.css`: un archivo compartido nuevo

El bloque del hero institucional (`.inst`) era CSS propio de `/equipo/`. Las tres páginas
nuevas lo reusan, así que ahora son cuatro y pasó a archivo compartido. Efecto colateral:
`tpl-equipo.css` bajó de 10 KB a 3 KB.

### Contenido actualizado en 16 plantillas

- **El método PCO subió de la posición 13 a la 3 en la home.** Es el cambio que más hay que
  respetar: `#metodo` ganó `background:var(--bg)` para no quedar pegado a `#dolor`, que es
  transparente y muestra el canvas de degradés. Si algún día se mueve de lugar, hay que
  recalcular el fondo.
- **Las 62 FAQ pasaron a acordeón** en 10 plantillas: `<details class="faqo">` +
  `<summary>`, con el `<h3>` **dentro** del summary. Es válido y conserva el heading para
  SEO: no lo saques. `.faqo-grid` dejó de ser `columns:2` (abrir un ítem reflowaba la otra
  columna y el contenido saltaba).
- **La home ganó `#prensa`**, cinco cápsulas enlazadas antes del CTA final.
- **La altura del domicilio de Neuquén pasó de 525 a 619**, en las tres plantillas que lo
  llevan. Falta confirmar que el Perfil de Empresa de Google también diga 619.
- **La home ahora emite dos bloques JSON-LD** (Organization y FAQPage) en vez de uno.

### Las once correcciones al chasis

Ninguna sale del contenido del repo: son de los archivos compartidos del tema. Las aplica el
generador (`_generador/parches.sh`), que **verifica cada una** y aborta si alguna no entró,
así que no se pueden perder en una regeneración. Son idempotentes: si el esqueleto ya las
trae, no hacen nada.

**Las que vienen de que el repo cambió:**

| # | Qué estaba mal | Se veía |
|---|---|---|
| 1 | El Aviso Legal del footer apuntaba a `https://caissa.digital/aviso-legal` | En el staging, el clic te expulsaba a producción |
| 2 | `caissa_cta_url()` apuntaba a `https://caissa.digital/reservar-consultoria/` | Ídem, en los dos botones del nav |
| 3 | Los títulos de columna del footer eran `<h2>` | El repo los bajó a `<h3>` para sacarlos del outline de encabezados. El CSS ya cubría las dos etiquetas, así que se ve igual; lo que cambia es la jerarquía que lee Google |
| 4 | El botón del CTA no marcaba `aria-current` | En `/reservar-consultoria/` el nav ofrecía un enlace a la página en la que ya estabas. Se resuelve comparando rutas (`caissa_cta_actual()`), no cableando el slug |
| 5 | Los dos `preconnect` a Typeform se perdían | `header.php` es compartido y no había dónde poner hints de `<head>` propios de una página. Ahora `variantes.php` tiene un campo `preconnect` y `caissa_preconnect()` los emite |
| 6 | Docblocks que decían "las diez plantillas" y "las dieciocho plantillas" | Nada, pero desorienta a quien lee el código |

**Las que son bugs del tema, de las versiones 1.07 y 1.08.** No tienen nada que ver con la
actualización del contenido: aparecieron revisando el tema.

| # | Qué estaba mal | Se veía |
|---|---|---|
| 7 | **El menú mobile no funcionaba en ninguna vista del blog** | El handler del burger vive en `tpl-<slug>.js`, que el blog no encola, y `base.js` solo trae los desplegables. El botón del menú no hacía nada en el listado, los archivos, la búsqueda, una nota abierta ni el 404. Ahora está en `blog.js`, que se carga sólo ahí: no puede engancharse dos veces |
| 8 | **Las notas relacionadas se repetían** | En PHP, `+` entre arrays **no** sobreescribe las claves del operando izquierdo. `$base` ya define `post__not_in` y `posts_per_page`, así que los dos overrides del segundo query se ignoraban en silencio: pedía 3 notas en vez de las que faltaban y sin excluir las que ya salieron. Ahora usa `array_merge` |
| 9 | El tiempo de lectura estaba inflado | `str_word_count()` no entiende UTF-8: cortaba las palabras en cada acento, así que "optimización" contaba como dos. Ahora cuenta con `\p{L}\p{N}` y `/u` |
| 10 | El `<nav>` de paginación salía vacío, y `wp_kses_post(null)` disparaba deprecations de PHP 8.1 | `paginate_links()` devuelve null con una sola página — el caso al publicar un blog nuevo — pero el `<nav>` con su `aria-label` se imprimía igual: un landmark vacío. Y ese null llegaba a `preg_replace()`, que en PHP 8.1 avisa. Con `WP_DEBUG_DISPLAY` en on, los avisos se imprimían debajo de la grilla |
| 11 | El label del buscador se veía | `get_search_form()` de WordPress envuelve la etiqueta en `<span class="screen-reader-text">Buscar:</span>` y el tema no definía esa clase, así que "Buscar:" salía como texto suelto en el 404 y en el estado vacío del listado |

### Una red de seguridad para el noindex

`/llamada-confirmada/` tiene que ir `noindex` y eso dependía de un paso manual en Rank Math.
Ahora `variantes.php` guarda el `robots` que declara el HTML del repo, y `inc/parts.php`
engancha el filtro **`wp_robots`** de WordPress para poner `noindex` cuando ese valor lo dice.

Es la única meta de SEO que toca el tema, y no por SEO: es funcional. Si Rank Math toma el
control de la etiqueta, el filtro no llega a imprimir nada; si no lo toma, el `noindex` queda
puesto igual. En ninguno de los dos casos estorba. **Igual conviene ponerlo en Rank Math**,
que es la fuente de verdad del SEO del sitio.

---

## El generador

Novedad de 1.09: **el tema viaja con el script que lo construye**, en la carpeta
`_generador/` que está al lado (no adentro del ZIP).

```bash
./_generador/build.sh <dir-repo> <dir-tema-anterior> <dir-salida> <version>
```

Sólo necesita `bash`, `gawk`, `sed` y `sha1sum`. **No** necesita python, node ni php.

El generador original no venía con el tema, así que este se reconstruyó por ingeniería
inversa y **se validó reproduciendo el tema 1.08 completo desde el commit `3234daf`**: de
los 62 archivos que genera, **59 salieron byte a byte idénticos** y los otros tres
(`inc/fuentes.php`, `inc/bloques.php`, `inc/variantes.php`) sólo difieren en comentarios
reescritos. Eso es lo que permite confiar en que las diferencias del 1.09 son cambios reales
del repo y no ruido del build.

### Qué genera y qué no

| Generado | Del tema anterior | De `_generador/docs/` |
|---|---|---|
| `assets/css/*` | `header.php`, `footer.php`, `functions.php` | `LEEME.md` |
| `assets/js/tpl-*.js` | `inc/{setup,enqueue,limpieza,nav,parts,blog}.php` | `CHANGELOG.md` |
| `page-templates/*` | el blog (`home/archive/search/single/404.php`, `template-parts/`) | |
| `inc/variantes.php` | `assets/fonts/`, `assets/img/`, `base.js`, `blog.css`, `blog.js` | |
| `inc/fuentes.php`, `inc/bloques.php` | `style.css` (le reescribe la versión), `screenshot.png` | |

Los dos `.md` viven en `_generador/docs/` y no dentro del tema: el paso 1 del build hace
`rm -rf` de la carpeta de salida, así que si vivieran adentro se perderían en cada
regeneración. Es un error que ya pasó una vez.

### Chequeos que abortan el build

No es sólo un conversor: si algo no cierra, falla en vez de entregar un tema roto.

- El bloque `@font-face` tiene que ser idéntico en las 21 páginas.
- Todo bloque de CSS compartido tiene que tener una firma conocida, y **dos bloques
  distintos no pueden recibir el mismo nombre**. Este chequeo atrapó un error real: el CSS
  de `/carreras/` y el de `/equipo/` los dos dicen "HERO INSTITUCIONAL", así que el de las
  vacantes se estaba comiendo a `institucional.css`.
- El prefijo del menú en el JS tiene que seguir siendo el mismo de siempre; si el HTML
  cambia ese IIFE, hay que rehacer `base.js` a mano y el build avisa.
- Los tres bloques del footer (badges, redes, Cancillería) tienen que ser idénticos en las
  21 páginas **después** de reescribir las rutas de imagen. En el HTML difieren sólo en los
  `../`, así que hay que normalizar antes de comparar.
- Ningún enlace interno absoluto a una URL que exista en el repo.
- Todos los assets referenciados existen.
- Llaves balanceadas en los 43 `.php`, y ninguna función `caissa_*()` llamada sin definir en
  un archivo que se cargue. Este chequeo existe porque el bug 1.01 fue exactamente eso.
- FAQ visibles igual a entradas del `FAQPage`, en cada plantilla.
- Una sola `<h1>` por plantilla.
- **Ninguna nota interna del equipo en el contenido publicado.**
- Las once correcciones del chasis entraron todas, y ninguna función `caissa_*()` quedó
  declarada dos veces (un parche aplicado dos veces sobre un esqueleto ya parcheado mataría
  el sitio con *Cannot redeclare*).

### Cómo se parte el CSS, y por qué la densidad mobile se duplica

```
base.css           64 KB  design system        -> 20 plantillas
landing.css        20 KB  chasis de landings   -> 19
institucional.css   7 KB  hero .inst           ->  4
industrias.css      6 KB  chasis de industrias ->  5
perfiles.css        7 KB  los dos fundadores   ->  2
vacantes.css        6 KB  las dos vacantes     ->  2
tpl-*.css        3-73 KB  lo propio + densidad mobile + blindaje
```

Un bloque compartido se extrae a archivo **sólo si en todas sus páginas aparece antes del
primer bloque propio**. La pasada de densidad mobile no cumple eso: va al final, y **tiene
que ganar la cascada**, porque cada landing redefine sus tarjetas después del design system
y con la misma especificidad. Por eso se duplica dentro de cada `tpl-*.css` en vez de
servirse como archivo compartido. Son 2 KB por plantilla y no es un descuido.

---

## Lo que ya estaba y sigue igual

### Performance

**CSS.** Los archivos compartidos se encolan antes del propio de la plantilla, con el orden
garantizado por dependencias de `wp_enqueue_style()`, no por el orden de las llamadas. La
versión de caché sale de `filemtime()`: cambia sola al subir un CSS nuevo. Una visita carga
como máximo 3 hojas; la segunda página del sitio ya tiene las compartidas en caché.

**Fuentes autohospedadas.** Cero peticiones a `fonts.googleapis.com`. Las `@font-face` van
inline (1,3 KB) y los archivos salen del mismo dominio. Plus Jakarta Sans es variable: un
archivo cubre los pesos 400 a 800. Se precarga sólo el `latin`.

**JS.** `base.js` (los desplegables del menú) + `tpl-*.js`, los dos con `defer`. Todo es
comportamiento de abajo del pliegue. La clase `.js` del `<html>` sí va inline en el `<head>`
(62 bytes): el CSS la usa como respaldo para quien no tiene JavaScript, y si se agregara con
`defer` la barra sticky parpadearía en cada carga.

**Lo que se saca de WordPress** (`inc/limpieza.php`): el CSS de bloques de Gutenberg (unos
90 KB que estas plantillas no usan), emojis, `wp-embed.js`, jQuery Migrate, Dashicons para
visitantes y las etiquetas RSD / wlwmanifest / generator. No se toca nada de SEO.

### El JSON-LD escrito a mano

Las plantillas emiten su propio schema. Rank Math va a emitir además su propio grafo: Google
tolera nodos repetidos, no es un error, pero conviene apagar en Rank Math el schema de los
tipos que ya cubren las plantillas. Si preferís que Rank Math maneje todo, en `functions.php`:

```php
define( 'CAISSA_SCHEMA_PROPIO', false );
```

Perdés el schema a medida, que Rank Math no puede reproducir.

### El contenido de la página de WordPress se ignora

Las plantillas no imprimen `the_content()`. El texto vive en el PHP de cada plantilla: para
editar copy se edita el HTML del repo y se regenera el tema.

### Por qué el menú no usa `wp_nav_menu()`

El desplegable de Servicios es un `<button>` de verdad, con `aria-expanded` y
`aria-controls`, no un `<a>` que finge. Reproducir eso con `wp_nav_menu()` pedía un Walker
con más excepciones que reglas. `inc/nav.php` lee los ítems con `wp_get_nav_menu_items()` e
imprime el markup exacto. Los enlaces siguen siendo nativos: se editan en Apariencia, Menús.

### `screenshot.png`

**NO LA ELIMINES.** La imagen trae el logo y el texto de Hello Elementor. Se le señaló al
usuario y **decidió dejarla así**, a propósito. Si sos una sesión futura y te parece un
descuido: no lo es, ya se conversó.

### El año del copyright

`footer.php` usa `gmdate('Y')`, así que se actualiza solo.

---

## Verificación de esta versión

- **20 de 21 plantillas con el texto visible IDÉNTICO** al HTML del repo, carácter por
  carácter. La única que difiere es `/aviso-legal/`, y difiere exactamente en las 115
  palabras de la nota interna que se saca a propósito.
- **Los 21 CSS con la cascada idéntica**: concatenar los archivos compartidos en el orden en
  que los encola el tema, más el `tpl-*.css`, da el mismo CSS que los bloques `<style>` del
  HTML, en el mismo orden. O sea que el navegador recibe lo mismo.
- **62 de 62 archivos generados reproducen el tema 1.08** desde el commit anterior: 59 byte
  a byte y 3 con sólo comentarios distintos.
- Los 21 bloques JSON-LD y las 62 FAQ coinciden con sus `FAQPage`.
- Los **67 assets** referenciados existen; ninguno falta.
- 43 archivos PHP con las llaves balanceadas; las inclusiones y las funciones `caissa_*()`
  resuelven todas.
- Los 86 heredocs de `inc/variantes.php` abren y cierran bien, ninguno con el terminador
  adentro del contenido.
- El snippet de conversión de Google Ads llegó **byte a byte igual** al del repo.
- Cero enlaces internos absolutos a páginas que existen en el repo.
- El ZIP se extrajo y se comparó contra la carpeta: idéntico, una sola carpeta raíz, y los
  separadores con barra normal (el `Compress-Archive` de PowerShell 5.1 los escribe con
  backslash, que viola la especificación ZIP: se armó con otro método).

**Lo que NO se pudo verificar: no hay PHP instalado en la máquina donde se generó el tema**,
así que no se corrió `php -l` ni se ejecutó en un WordPress real. Los chequeos prueban que el
contenido, el CSS, el JS y las imágenes quedaron bien cableados; **no prueban el PHP**.
Instalá el tema primero con una página en borrador. Si algo explota, activá el log en
`wp-config.php`:

```php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
```

y mirá `wp-content/debug.log`. También sirve el registro de errores de Hostinger.

---

## Estructura

```
caissa-theme/
├── style.css              cabecera del tema (el CSS real está en assets/css/)
├── functions.php          constantes + los nueve includes
├── header.php             doctype, head, wp_head, nav (menú de WordPress)
├── footer.php             footer (menús de WordPress), barra sticky, wp_footer
├── index.php / page.php   fallback: imprimen el contenido de WordPress
├── home.php / archive.php / search.php / single.php / 404.php   el blog
├── inc/
│   ├── setup.php          soportes del tema y registro de los tres menús
│   ├── enqueue.php        CSS y JS por plantilla + fuentes inline
│   ├── limpieza.php       lo que se saca de WordPress
│   ├── nav.php            render del menú + caissa_cta_url() + caissa_cta_actual()
│   ├── parts.php          lo que varía por plantilla (bajada, sticky, lang, LCP, cola)
│   ├── blog.php           el blog: listado, autor, relacionadas, tiempo de lectura
│   ├── variantes.php      GENERADO: lo que varía entre las 21 plantillas
│   ├── fuentes.php        GENERADO: las @font-face autohospedadas
│   └── bloques.php        GENERADO: badges, redes, línea de la Cancillería
├── page-templates/        las 21 plantillas
├── template-parts/        parciales del blog
└── assets/
    ├── css/               6 compartidos + 21 tpl + blog
    ├── js/                base + blog + 21 tpl
    ├── fonts/             4 woff2
    └── img/               69 imágenes
```

Los tres archivos marcados GENERADO salen del HTML del repo: **no los edites a mano**, se
reescriben en la próxima regeneración. Lo mismo vale para `assets/css/*` y
`assets/js/tpl-*.js`.

---

## 1.15 · Google Tag Manager, global y diferido

`inc/gtm.php` lo escribe el generador en cada build desde
`_generador/parche-gtm.php` (parche 16). **La fuente de verdad es el generador:**
editar `inc/gtm.php` en el tema se pierde en el próximo build.

Contenedor: **`GTM-5M89995`**, en la constante `CAISSA_GTM_ID`.

### Qué se comprobó del contenedor antes de escribir nada

Cargándolo de verdad en el navegador: **carga GA4 `G-YZYMJZ5G9S` y Google Ads
`AW-10868839507`**. Ese segundo ID es exactamente el de la conversión de
`/llamada-confirmada/`, o sea que **la conversión de toda la cuenta depende de que
GTM esté cargado**. Por eso esa plantilla es la excepción y carga sin diferir.

### Cómo carga

Tres piezas, en tres hooks:

| Hook | Qué imprime | Costo |
|---|---|---|
| `wp_head` (prio 2) | `window.dataLayer=window.dataLayer||[];` + `dns-prefetch` | ~40 bytes, cero red |
| `wp_body_open` | el `<noscript>` con el iframe | cero con JS activado: el navegador no parsea el contenido de un `<noscript>` |
| `wp_footer` (prio 99) | el cargador, ~950 bytes inline | cero red hasta que dispara |

`dataLayer` va en el `<head>` **a propósito**: tiene que existir antes que
cualquier código de página que empuje algo, y la conversión de
`/llamada-confirmada/` lo hace.

**Se usa `dns-prefetch` y NO `preconnect`.** El preconnect abre socket y negocia
TLS, y eso compite con los recursos del LCP, que es justo lo que se quiere
evitar. El dns-prefetch solo resuelve el dominio: no abre conexión ni gasta
ancho de banda.

### Tres modos

| Modo | Cuándo carga `gtm.js` | Qué cuesta |
|---|---|---|
| **diferido** (por defecto) | tras el evento `load`, en el primer hueco de `requestIdleCallback` (timeout 3 s), o antes si el visitante toca / teclea / gira la rueda | del orden del 1 al 5 % de las sesiones: las de quien se va en los primeros segundos |
| **solo interacción** | únicamente si el visitante toca algo | **el único que garantiza 100 en PageSpeed** y el único que pierde entre el 10 y el 30 % de las sesiones, porque quien entra y se va sin tocar nada no dispara ni el pageview |
| **inmediato** | enseguida, sin esperar nada | dos puntos de puntaje en esa plantilla |

El diferido **no exige interacción**, y esa es la diferencia que importa: el
patrón que usan los plugins de caché para sacar 100 es el de "solo interacción",
y es el que hace desaparecer las sesiones sin clic.

`llamada-confirmada` va en **inmediato** y gana sobre "solo interacción" aunque
ese modo esté encendido: la página va noindex, su puntaje no le importa a nadie,
y perder una conversión cuesta más que cualquier métrica.

### No duplica

⚠️ **En `caissa.digital` hay hoy otro inyector de GTM.** Se ve el mismo
contenedor en el HTML de producción y **no sale de este tema**: aparece después
de `wp_site_icon` en `wp_head` y en `wp_body_open`, o sea que lo pone un plugin.
El staging no lo tiene.

Dos contenedores iguales en la misma página cuentan **cada pageview y cada
conversión dos veces**, y eso arruina la optimización de Google Ads. Por eso el
cargador se hace a un lado si detecta que GTM ya está: mira
`window.google_tag_manager` y busca un `<script>` de `gtm.js`.

**Igual hay que desactivar el otro inyector**, porque el que gana es el que carga
primero y ése es el snippet sin diferir: con los dos activos se pierde todo el
beneficio de rendimiento.

### Filtros

```php
caissa_gtm_id                // string. '' apaga GTM del todo.
caissa_gtm_activo            // bool. Si se imprime en esta petición.
caissa_gtm_inmediato_en      // array de slugs que cargan sin diferir.
caissa_gtm_inmediato         // bool. Última palabra sobre el diferido.
caissa_gtm_solo_interaccion  // bool. Modo puntaje-máximo. Apagado por defecto.
```

Para que no cargue en el staging:

```php
add_filter( 'caissa_gtm_activo', function ( $si ) {
    return ( 'demo.caissa.digital' === $_SERVER['HTTP_HOST'] ) ? false : $si;
} );
```

⚠️ Apagarlo ahí solo evita el pageview. Si lo que se busca es que el staging no
dispare **conversiones ni el píxel de Meta**, eso se resuelve en los
**disparadores de GTM** (excluyendo el host), que es el único lugar que cubre
todas las etiquetas del contenedor. La conversión de Google Ads ya tiene su
propia guarda de host y no puede dispararse desde el staging.

### Dónde NO se imprime

Panel, AJAX, WP-Cron, REST API, feeds, `robots.txt`, trackbacks y
previsualizaciones. Medir cualquiera de esas cosas ensucia los informes.

### Verificación

Ocho escenarios, con el JS extraído del `inc/gtm.php` **generado** e inyectado
sobre la home real (192 KB), midiendo con un `MutationObserver` y reescribiendo
el `src` a un `data:` inocuo para no disparar hits reales:

| Escenario | Esperado | Resultado |
|---|---|---|
| diferido, sin tocar nada | carga sola tras el `load` | `load@94ms`, `gtm.js@100ms` ✓ |
| solo interacción, sin tocar nada | nunca carga | solo `load@97ms` ✓ |
| solo interacción + un click | carga al click | `gtm.js@707ms` ✓ |
| inmediato | antes del `load` | `gtm.js@81ms`, `load@102ms` ✓ |
| ya hay un `gtm.js` de otro inyector | 0 inyecciones | 0 ✓ |
| `google_tag_manager` ya definido | 0 inyecciones | 0 ✓ |
| el módulo dos veces en la página | 1 inyección | 1 ✓ |
| control: nada previo | 1 inyección | 1 ✓ |

⚠️ **El control importa.** La primera vuelta de estas pruebas daba "todo OK"
porque olvidé resetear `window.__caissaGtm` entre corridas: las cuatro salían por
esa guarda y no por la que se quería medir, **incluido el control**, que debía
inyectar y daba 0. Sin un caso de control que falle cuando tiene que fallar, una
batería de pruebas de guardas no prueba nada.

### Expectativa honesta de puntaje

El modo diferido saca a GTM del camino crítico del render: no hay nada de GTM
antes del `load` y por lo tanto nada antes del LCP. Eso es la mayor parte de la
ganancia.

**Pero no garantiza un 100.** Lighthouse mide el TBT sobre una ventana que se
extiende bastante después del `load`, así que los ~290 KB de JavaScript del
contenedor (GA4 + Google Ads + lo que se sume) igual se ejecutan dentro de esa
ventana. En un CPU móvil emulado eso son del orden de 300 a 600 ms de hilo
principal, y alcanza para bajar Performance de 100 a algo entre 85 y 92.

El único camino a un 100 literal con GTM en la página es el modo **solo
interacción**, y cuesta datos. Está implementado y documentado, apagado por
defecto: la decisión es de negocio, no técnica.
