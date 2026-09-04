# Pendientes — migración a la web 2026

Estado al **04/09/2026**, tema **1.15**.

Lo que queda del trabajo de redirects, de las dos páginas nuevas y de GTM.
Ordenado **por momento**, no por tema: lo que importa de cada uno es cuándo hay
que hacerlo. Los marcados 🔴 **bloquean el deploy**.

Los números entre paréntesis (tarea 34, 36…) son las del checklist de la planilla
*Migración SEO | Caissa*, para no duplicar trabajo con el equipo de SEO.

---

## 1 · Al subir el tema 1.15 al staging

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

### 5.3 ¿Se activa el modo "solo interacción" de GTM?
Es el **único** modo que garantiza un 100 en PageSpeed, porque Lighthouse no
interactúa con la página y entonces nunca ve el JavaScript de GTM.

Cuesta **entre el 10 y el 30 % de las sesiones**: quien entra, mira y se va sin
tocar nada no dispara ni el pageview.

```php
add_filter( 'caissa_gtm_solo_interaccion', '__return_true' );
```

Hoy está apagado. El modo por defecto (diferido) pierde del orden del 1 al 5 % y
saca a GTM del camino crítico igual. **Es una decisión de negocio, no técnica.**

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
| `caissa-theme.zip` | el tema para subir a WordPress (1.15, 191 archivos) |
| `redirects/htaccess-redirects.txt` | el bloque de 301 |
| `redirects/verificar-redirects.sh` | el semáforo |
| `redirects/mapeo-final.tsv` | la hoja como se leyó, para auditar |
| `_generador/` | el build del tema. **La fuente de verdad**: el tema se regenera desde acá |
| `_generador/docs/LEEME.md` | cómo funciona el generador y qué hace cada parche |
| `SEO-para-Rank-Math.tsv` | title / description / robots / canonical / OG de las 22 páginas |

**El HTML vive en el otro repo** (`manuferrini/Caissa-Nueva-Web-2026`) y es la
fuente de verdad del contenido. El tema se genera desde ahí; editar las
plantillas PHP a mano se pierde en la próxima regeneración.
