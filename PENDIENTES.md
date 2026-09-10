# Pendientes — migración a la web 2026

Estado al **10/09/2026**, tema **1.21**.

Lo que queda del trabajo de redirects, de las dos páginas nuevas y de GTM.
Ordenado **por momento**, no por tema: lo que importa de cada uno es cuándo hay
que hacerlo. Los marcados 🔴 **bloquean el deploy**.

Los números entre paréntesis (tarea 34, 36…) son las del checklist de la planilla
*Migración SEO | Caissa*, para no duplicar trabajo con el equipo de SEO.

---

## 1 · Al subir el tema 1.21 al staging

### 1.1 Crear las dos páginas nuevas y asignarles la plantilla
El tema trae las plantillas, pero las páginas no existen solas.

| Slug exacto | Plantilla a elegir en *Atributos de página* |
|---|---|
| `caissa-go` | Caissa — Caissa Go (hub de enlaces) |
| `postulacion-enviada` | Caissa — Postulación enviada |

Las dos URLs ya existen en producción, así que es reemplazar contenido, no crear
URLs nuevas: **no necesitan 301**.

### 1.2 🔴 Desactivar el otro inyector de GTM
**Producción ya inyecta `GTM-5M89995` por su cuenta**, desde un plugin (aparece
después de `wp_site_icon` en `wp_head` y en `wp_body_open`; el staging no lo
tiene). Ahora el tema también lo pone.

El cargador del tema se hace a un lado si detecta que GTM ya está, así que **no
va a haber doble conteo**. Pero el que gana es el que carga primero, y ése es el
snippet sin diferir: con los dos activos se pierde todo el beneficio de
rendimiento.

Buscar en *Plugins* los del tipo *Insert Headers and Footers*, *WPCode* o
*Site Kit*. **Comprobación:** ver el código fuente de la home y buscar
`GTM-5M89995`. Tiene que aparecer **dos veces** (el script y el `noscript`), no
cuatro.

### 1.3 Verificar GTM con el Asistente de etiquetas
Que lleguen el pageview y, sobre todo, la conversión de Google Ads en
`/llamada-confirmada/`.

⚠️ **El pageview ahora llega uno o dos segundos más tarde. Eso es lo esperado,
no un error**: `gtm.js` se carga después del evento `load`. La única página que
carga sin diferir es `/llamada-confirmada/`, justamente por la conversión.

### 1.4 Correr el semáforo de redirects
```bash
./redirects/verificar-redirects.sh https://demo.caissa.digital
```
Prueba las 159 filas de la hoja. Sale con código 0 sólo si no falló ninguna, así
que sirve tal cual de go / no-go (tarea 34).

**Antes de instalar el `.htaccess` tiene que fallar en casi todos los 33
redirects**: hoy 31 devuelven 404 y `/agencia-marketing-digital-argentina/`
devuelve 200. Si marca pocos fallos, alguien ya tocó algo. Lo que importa no es
el número exacto: es que falle antes y pase después.

### 1.5 Despublicar `/agencia-marketing-digital-argentina/`
En el staging todavía devuelve 200: la página vieja sigue publicada. Con el
redirect puesto no se ve, pero conviene despublicarla igual.

---

### 1.6 🔴 Podar el contenedor de GTM (es el lever más grande que queda)
Medido el **10/09/2026** en una nota del blog sin defectos de contenido: el
contenedor `GTM-5M89995` dispara **siete herramientas y 15 peticiones de
terceros**. El JavaScript propio del tema en esa misma página son **7 KB**.

| Herramienta | Qué carga | ¿Alimenta una decisión? |
|---|---|---|
| GA4 `G-YZYMJZ5G9S` | `gtag/js` | **sí** |
| Google Ads `AW-10868839507` | `gtag/js` + 2 `viewthroughconversion` | **sí**, es la conversión |
| Píxel de Meta | `fbevents.js`, **410 KB descomprimido** | sí, si hay campañas de Meta corriendo |
| LinkedIn | `insight.min.js` **y** `insight.old.min.js` + `px.ads.linkedin.com` | el script viejo **está duplicado**: sobra |
| **Microsoft Clarity** | `clarity.js` + 4 peticiones, una de **1.862 ms** | graba sesión. Nadie lo está mirando |
| **ClickCease** | `monitor/stat.js` | protección de clics. Preguntar si el contrato sigue |

Eso es un **TBT de 1.160 ms** sobre un presupuesto de 200 ms, o sea 7 de los 30
puntos que vale el TBT, más los 8 del FCP y 7 del Speed Index. **Clarity,
ClickCease y el LinkedIn duplicado solos son la mitad**, y ninguno de los tres
alimenta una decisión de campaña.

Sacarlos del contenedor da el puntaje **sin** perder las sesiones que cuesta el
modo "solo interacción" de 5.3. Es trabajo de panel de GTM, no de código: se
pausan los disparadores y se publica una versión nueva del contenedor.

### 1.7 🔴 La caché de página está apagada
`x-powered-by: PHP` viene en **cada** respuesta de HTML y el TTFB medido va de
**288 a 677 ms**: no hay caché de página. El único plugin visible es
`caissa-meta-tracking-1.1` (ni WP Rocket ni LiteSpeed).

Se activa desde el panel de Hostinger. No se puede resolver desde el `.htaccess`
ni desde el tema. Con la caché encendida el TTFB baja a decenas de ms y eso entra
directo en el FCP y el LCP de **todas** las páginas.

### 1.8 Las siete imágenes de una nota están pegadas en base64
En `/blog/las-mejores-agencias-google-ads-argentina/` hay **siete PNG pegados
como data URI** dentro del contenido: **2.561 KB de los 2.629 KB de HTML de la
nota (97 %)**. Por eso puntuaba **25** contra **48** de otra nota de la misma
plantilla.

**El tema 1.21 lo mitiga solo** (`inc/imagenes.php`): en la primera visita
escribe cada imagen en `uploads/caissa-inline/`, le apunta el `src` y le pone
`width`, `height`, `loading="lazy"` y `decoding="async"`. Verificado contra el
HTML real: **el contenido baja de 2.629 KB a 68 KB**.

Lo que el tema **no** puede hacer es generar los tamaños intermedios: la imagen
sigue siendo un PNG de 1.330 px que el teléfono muestra a 327 px. Para eso hay
que **subirlas por la biblioteca de medios y volver a insertarlas** desde el
editor, y entonces WordPress les arma el `srcset`. Mientras no se haga, el
módulo del tema las deja cacheables y sin salto de layout, que es la parte que
puntúa.

⚠️ Y de paso: esa nota tiene un **salto de encabezado H1 → H3** (la secuencia es
`1 3 3 3 3 3 3 3 2`). Es lo que le baja Accesibilidad a 94. Se arregla en el
editor, no en el tema.

## 2 · Antes del deploy a producción

### 2.1 🔴 Guardar el `robots.txt` de producción
**Es el riesgo más grande de toda la migración y no se ve mirando la web.**

| | staging | producción |
|---|---|---|
| `robots.txt` | **archivo físico** con `User-agent: *` / `Disallow: /` | **virtual** (WP Rocket), 629 bytes, lista curada con reglas anti-scraper y la línea `Sitemap:` |
| meta robots | `noindex` en todas las páginas (lo pone Rank Math) | `index, follow` |

Si el push copia archivos **y** base de datos, viajan las dos cosas: el archivo
físico le gana al virtual, y el `noindex` viaja en la base. Resultado:
**producción bloqueada para Google, con los 301 funcionando perfecto y nadie
pudiendo leerlos**, y encima se pierde el `robots.txt` curado.

Qué hacer:
1. Guardar los 629 bytes de `https://caissa.digital/robots.txt` **antes** del push.
2. Borrar el archivo físico `robots.txt` de la raíz después del push.
3. Quitar el `noindex`. ⚠️ **Sale de Rank Math** (*Titles & Meta › Global Meta ›
   Robots Meta*), no sólo de *Ajustes › Lectura*: destildar "visibilidad en los
   motores de búsqueda" puede no limpiar nada. Verificar con `curl` las dos cosas.

Cubre las tareas 36, 37, 48 y 49 del checklist, que ya están marcadas críticas.

### 2.2 🔴 Los 9 redirects que ya tiene producción viven en la base de datos
Los pone el plugin **Redirection** (`X-Redirect-By: redirection`), no el
`.htaccess`. **Si el push reemplaza la base de datos, se pierden.**

Seis quedan cubiertos —y mejorados, porque el bloque nuevo va al destino final en
un solo salto en vez de encadenar:

| Hoy | Con el bloque nuevo |
|---|---|
| `/sumate/` → `/careers/` | → `/carreras/` directo |
| `/caso/constructoras/` → `/caso/generacion-de-leads/constructoras/` | → `/industrias/constructoras/` |
| `/caso/rubro-salud/` → `/caso/generacion-de-leads/rubro-salud/` | → `/industrias/salud/` |
| `/caso/casinos-online/` → `/caso/generacion-de-leads/casinos-online/` | → `/industrias/` (con la regla opcional) |
| `/caso/ecommerce-2/` → `/caso/ecommerce/` | → `/industrias/ecommerce/` |
| `/equipo/juan-fornero` → `/equipo/juan-fornero/` | → `/equipo/` |

Los tres restantes: `/?page_id=12865` y la URL que termina en paréntesis están en
el bloque de reglas comentadas del `.htaccess`.
`/blog/mejores-agencias-google-ads-new-york/` **no necesita regla**: WordPress lo
resuelve solo con su redirección de slug viejo, y en el staging ya lo hace mejor
que producción (un salto en vez de dos).

### 2.3 Decidir dos destinos (12 clics en juego)
Están escritas y **comentadas** al final de `redirects/htaccess-redirects.txt`:
sólo hay que sacarles el `#`.

| URL vieja | Clics 12 m | Propuesta | Falta |
|---|---|---|---|
| `/precios/` | 6 | `/agencia-google-ads/` (ahí vive la sección de precios) | confirmar |
| `/agencia-performance-marketing-madrid/` | 6 | `/` | confirmar |

### 2.4 Decidir el comodín de `/caso/` (155 clics en juego)
`/caso/casinos-online/` tiene **97 clics** en 12 meses y
`/caso/generacion-de-leads/casinos-online/` **58**. **No están en la hoja**, así
que con el bloque tal cual dan 404.

Los levanta la regla opcional `^caso/.+$ → /industrias/`, que está en el archivo
en su propio bloque marcado. **No sale de la hoja**, por eso se deja a decisión:
si no se quiere, se borra el bloque entero y las reglas de la hoja siguen
funcionando igual.

⚠️ No hay caso de casinos en el sitio nuevo, por eso van al hub. Si algún día se
publica `/industrias/casinos/`, esas dos URLs merecen su propia regla.

---

## 3 · En el deploy

### 3.1 Instalar el bloque de redirects
`redirects/htaccess-redirects.txt` va en el `.htaccess` de la raíz, **arriba de
la línea `# BEGIN WordPress`** (WordPress y los plugins sólo reescriben lo que hay
*entre* sus marcadores).

Es relativo por construcción: ninguna regla nombra el dominio, así que el mismo
bloque sirve en staging y en producción sin editar nada.

### 3.2 Purgar la caché
Hostinger tiene CDN delante (`Server: hcdn`). Una URL cacheada con su respuesta
vieja no muestra el 301 hasta que expire. Purgar la del panel y la de LiteSpeed
Cache / WP Rocket si están activos.

### 3.3 Volver a correr el semáforo, ahora contra producción
```bash
./redirects/verificar-redirects.sh https://caissa.digital
```
Tiene que dar **0 fallos**.

### 3.4 Sitemap
El nuevo a Search Console, el viejo eliminado (tarea 53).

---

## 4 · Después del deploy

- **Días 1 a 7:** Cobertura en Search Console, aparición de 404 y caídas bruscas
  (tarea 56).
- **Canonicals de Rank Math** en las páginas nuevas: un canonical apuntando a una
  URL vieja anula el 301.
- **Enlaces internos del contenido**: los posts del blog pueden tener enlaces a
  `/caso/…` y `/careers/…` escritos a mano en el cuerpo. El 301 los salva, pero un
  enlace interno que pasa por un redirect es un enlace peor.

---

## 5 · Decisiones que no bloquean

Ninguna impide lanzar. Todas necesitan que alguien elija.

### 5.1 ¿`/caissa-go/` va con nav y footer, o sin nada?
En producción es un Elementor Canvas **sin nav ni footer**, que es lo que hace un
link-in-bio. La versión nueva **sí los lleva**, porque el generador exige que el
chasis sea idéntico entre páginas (compara el hash del bloque `@font-face` y el
prefijo del IIFE del menú) y una página sin nav necesitaría una variante de
chasis propia.

Si se prefiere sin chrome, **hay que tocar el generador, no la página**.

### 5.2 ¿Se alinean los `robots` de las dos páginas nuevas?
Hoy `/caissa-go/` es `noindex, nofollow` y `/postulacion-enviada/` es
`noindex, follow`. Están distintos **a propósito**: se replicó lo que decía
producción. Si se quieren iguales, `noindex, follow` es el que corresponde a las
dos.

Se cambia en el `<meta name="robots">` del HTML, en el repo del sitio. El
generador lo lee de ahí y lo lleva solo a `inc/variantes.php`; **no editar
`variantes.php`**, que es generado.

### 5.3 El modo "solo interacción" de GTM quedó ENCENDIDO (decisión tomada)
Estaba apagado y anotado acá como decisión abierta. **Gastón pidió el 100 dos
veces**, después de que se le explicara el costo, así que desde **1.21 viene
encendido por defecto**.

Qué significa: **gtm.js no se descarga hasta que el visitante hace algo**
(pointerdown, keydown, touchstart o wheel). Lighthouse no interactúa con la
página, así que durante la medición el contenedor no se ejecuta y lo que se mide
es el sitio, no las siete herramientas de terceros.

Qué cuesta: quien entra, lee y se va **sin tocar ni scrollear** no dispara ni el
pageview. Del orden del **10 al 30 % de las sesiones**. Scrollear ya cuenta, y
las **conversiones no se pierden** porque un clic es interacción. Tag Assistant
sigue funcionando (el cargador detecta `?gtm_debug=` y la cookie de Tag
Assistant y en ese caso carga de una).

Para volver al diferido de siempre, en un plugin o en el `functions.php` de un
tema hijo:

```php
add_filter( 'caissa_gtm_solo_interaccion', '__return_false' );
```

⚠️ **La forma de tener el puntaje Y el dato completo no es este filtro: es
podar el contenedor.** Ver 1.6.

### 5.4 ¿GTM mide en el staging?
Hoy sí. Para que no:
```php
add_filter( 'caissa_gtm_activo', function ( $si ) {
    return ( 'demo.caissa.digital' === $_SERVER['HTTP_HOST'] ) ? false : $si;
} );
```
⚠️ Eso sólo evita el pageview. Para que el staging tampoco dispare **conversiones
ni el píxel de Meta**, hay que excluir el host en los **disparadores de GTM**, que
es el único lugar que cubre todas las etiquetas del contenedor. La conversión de
Google Ads ya tiene su propia guarda de host y no puede dispararse desde staging.

### 5.5 La guarda de la conversión no cubre `www`
`page-templates/tpl-llamada-confirmada.php` compara con
`location.hostname !== 'caissa.digital'` exacto. **Si alguien llega por
`www.caissa.digital`, la conversión no se dispara.** Hoy `www` redirige a sin
`www`, así que en la práctica no pasa — pero depende de que ese redirect siga.

### 5.6 Pasar la foto de Juan al repo del sitio
`_generador/assets-extra/juan-clean-it.webp` se inyecta en la home y en
`/reviews/` con una transformación del generador (`overrides/markup.awk`), porque
el HTML de Manu todavía muestra las iniciales "JG". Mientras la foto y el `<img>`
no estén en el repo, es una divergencia que hay que mantener a mano.

---

## Dónde está cada cosa

| | |
|---|---|
| `caissa-theme.zip` | el tema para subir a WordPress (1.21, 194 archivos) |
| `redirects/htaccess-redirects.txt` | el bloque de 301 |
| `redirects/verificar-redirects.sh` | el semáforo |
| `redirects/mapeo-final.tsv` | la hoja como se leyó, para auditar |
| `_generador/` | el build del tema. **La fuente de verdad**: el tema se regenera desde acá |
| `_generador/docs/LEEME.md` | cómo funciona el generador y qué hace cada parche |
| `SEO-para-Rank-Math.tsv` | title / description / robots / canonical / OG de las 22 páginas |

**El HTML vive en el otro repo** (`manuferrini/Caissa-Nueva-Web-2026`) y es la
fuente de verdad del contenido. El tema se genera desde ahí; editar las
plantillas PHP a mano se pierde en la próxima regeneración.
