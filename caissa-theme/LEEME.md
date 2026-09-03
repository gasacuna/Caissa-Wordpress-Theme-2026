# Tema Caissa 2026

Tema de WordPress con el diseño 2026. **Veintiuna plantillas de página**, header y footer
compartidos, menús nativos de WordPress y el CSS servido como archivos cacheables.
Sin frameworks, sin jQuery, sin peticiones a terceros.

Generado desde el repo `Caissa-Nueva-Web-2026`, commit `20f8ff9`.

## Versión

**Actual: 1.09.** El número vive en **un solo lugar** (el argumento que recibe el generador)
y de ahí se inyecta en los dos sitios donde tiene que aparecer: la cabecera `Version:` de
`style.css`, que es la que lee WordPress, y la constante `CAISSA_VER` de `functions.php`.
El build falla si no puede escribir en alguno de los dos, así que no se pueden desincronizar.

| | |
|---|---|
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

Son cinco cosas, y tres son nuevas de esta versión.

### 1. Crear las tres páginas nuevas y asignarles su plantilla

| Página nueva | Slug (tiene que ser exacto) | Plantilla |
|---|---|---|
| Aviso legal | `aviso-legal` | Caissa — Aviso legal y privacidad |
| Reservar consultoría | `reservar-consultoria` | Caissa — Reservar consultoría |
| Llamada confirmada | `llamada-confirmada` | Caissa — Llamada confirmada |

Los slugs importan: **los 103 CTA del sitio apuntan a `/reservar-consultoria/`** y el
Aviso Legal del footer a `/aviso-legal/`. Si el slug no coincide, el enlace da 404.

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

### 4. Revisar los tres menús

| Ubicación | Qué va |
|---|---|
| **Principal (header)** | Servicios (con Google Ads y Meta Ads como hijos) · Testimonios a `/reviews/` · Blog a `https://caissa.digital/blog/` |
| **Footer - Servicios** | Agencia de Google Ads · Agencia de Meta Ads · Marketing en Neuquén · Marketing por industria a `/industrias/` |
| **Footer - Caissa** | Tecnología · **Prensa a `/#prensa`** · Equipo · Valores Core a `/equipo/#valores` · Testimonios a `/reviews/` · Trabajá con nosotros a `/carreras/` · Contacto |

El desplegable del header sale de la **jerarquía del menú**: arrastrá "Google Ads" y
"Meta Ads" debajo de "Servicios". Soporta un solo nivel. Si un menú no está asignado, ese
bloque no se imprime: no hay enlaces de respaldo cableados, para que no aparezca nada que
nadie configuró.

### 5. Cargar los títulos y descripciones en Rank Math

Están todos en **`SEO-para-Rank-Math.tsv`**, que viaja al lado del tema (no adentro del ZIP):
las 21 URLs con su `title`, su `meta description`, su `robots` y su `canonical`, tal como los
declara el HTML del repo. El tema no los escribe.

⚠️ Una de las 21 filas tiene el canonical **relativo**: `/reservar-consultoria/`. Viene así
del HTML del repo, donde las otras 20 lo declaran absoluto. Un canonical relativo es válido
para Google pero es la excepción del set: conviene cargarlo en Rank Math como
`https://caissa.digital/reservar-consultoria/` y corregirlo también en el repo.

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
