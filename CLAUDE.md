# Cómo funciona este proyecto

> **Leé esto antes de tocar nada.** Está escrito para que alguien que llega sin
> contexto —una persona nueva, o Claude en otra sesión sin el historial— pueda
> hacer un cambio, regenerarlo, verificarlo y publicarlo **sin romper nada y sin
> perder el trabajo**.
>
> Todo lo que dice acá está verificado contra los archivos, no de memoria.
> Estado: **tema 1.22**, 15/09/2026.

---

## 1. Qué es esto, en treinta segundos

Caissa (agencia argentina de Google Ads / Meta Ads) rediseñó su web. El diseño
vive como **HTML estático autónomo** en un repo, y de ahí se **genera** un tema de
WordPress, que es lo que finalmente se publica.

Son **dos repos** y el flujo va en una sola dirección:

```
   github.com/manuferrini/Caissa-Nueva-Web-2026        ← el diseño, en HTML
   G:\...\Caissa\Web 2026\          (repo git, rama: integracion)
                 │
                 │   _generador/build.sh   (bash + gawk, 9 pasos)
                 ▼
   G:\...\Caissa\Tema WordPress 2026\   ← carpeta de entrega, SIN git (§8)
                 │
                 │   el clon del repo del tema va aparte, rama main:
                 │   github.com/gasacuna/Caissa-Wordpress-Theme-2026
                 ▼
          caissa-theme.zip  →  demo.caissa.digital  →  caissa.digital
```

⚠️ **La asimetría del diagrama es real:** `Web 2026` **es** un repo git;
`Tema WordPress 2026` **no tiene `.git`** — es una carpeta de Google Drive, y el
clon vive aparte. Un `git status` ahí falla con *not a git repository*. Ver §8.

| | |
|---|---|
| **Producción** | `caissa.digital` — **ya corre el tema 1.22** (§11) |
| **Staging** | `demo.caissa.digital` — sigue con `robots.txt` `Disallow: /` |
| **Quién decide diseño y copy** | Manuel Ferrini (CEO). Sus reglas están en el `CLAUDE.md` del repo del sitio |
| **Quién opera la migración** | Gastón Acuña |

---

## 2. LA REGLA DE ORO

> **El HTML del repo del sitio es la fuente de verdad. El tema se regenera desde
> ahí, y la regeneración BORRA la carpeta de salida entera** (`build.sh:34`,
> `rm -rf "$OUT"`).

Por lo tanto: **editar a mano un archivo generado del tema es trabajo que se
pierde en el próximo build, sin aviso y sin error.**

Esto ya pasó y por eso `LEEME.md` y `CHANGELOG.md` viven en `_generador/docs/` y se
copian de vuelta en cada build: la primera vez se perdieron.

---

## 3. Los tres orígenes de un archivo del tema

Cada archivo dentro de `caissa-theme/` viene de un lugar distinto, y **de eso
depende dónde hay que editarlo**. Es lo más importante de todo este documento.

### 3.a GENERADO desde el HTML del repo del sitio → editalo en el repo del sitio

```
assets/css/<chasis>.css      base, base-sin-barra, landing, institucional,
                             industrias, perfiles, vacantes
assets/css/tpl-<slug>.css    uno por plantilla (24)
assets/js/tpl-<slug>.js      uno por plantilla (24)
page-templates/tpl-<slug>.php
inc/variantes.php            lo que varía por plantilla (title, robots, css, js,
                             ubicaciones del footer, bajada…)
inc/fuentes.php              las @font-face autohospedadas
inc/bloques.php              badges, redes y legal del footer — lo IDÉNTICO en las
                             24 páginas. Lo que varía vive en variantes.php
```

⚠️ **`assets/img/` tiene TRES fuentes, y ninguna es "copiar la carpeta del tema
anterior":**

1. **Lo que el HTML referencia** en `src` / `poster` / `srcset` (`build.sh:80-86`).
   Una imagen que el HTML deja de referenciar **desaparece**; una imagen nueva
   viaja sola sin tocar nada.
2. **Lo que el PHP del esqueleto pide** con `CAISSA_IMG . '/…'` y no está en el
   repo: eso **sí** se copia del tema anterior (`build.sh:96-111`). Hoy es un solo
   archivo: **`assets/img/autores/manu-ferrini.webp`**, la foto de la caja de autor
   del blog. **Esa se edita en el tema**, y borrarla creyendo que el build la
   regenera la pierde para siempre.
3. **`_generador/assets-extra/*`** (§3.c).

### 3.b ESQUELETO: se copia del tema anterior → editalo en el tema, sobrevive

```
header.php  footer.php  functions.php  style.css  screenshot.png
index.php  page.php  single.php  home.php  archive.php  search.php  404.php
template-parts/*.php
inc/setup.php  inc/enqueue.php  inc/limpieza.php  inc/nav.php
inc/parts.php  inc/blog.php
assets/css/blog.css   assets/js/base.js   assets/js/blog.js   assets/fonts/*
```

Las líneas que lo deciden son `build.sh:35-42`. **Todo el blog está acá** (§7).

⚠️ **Sobreviven, pero `parches.sh` los reescribe en cada build** (§5). Si tu
cambio cae justo donde un parche ancla, el parche lo pisa o el build muere. Los
más tocados: `header.php`, `footer.php`, `inc/nav.php`, `inc/parts.php`,
`inc/blog.php`, `template-parts/listado.php`, `assets/js/base.js`,
`assets/js/blog.js`, `assets/css/blog.css`. Si tocás uno, **corré el build y mirá
que no aborte.**

### 3.c NI UNO NI OTRO: viven en `_generador/` y se inyectan en cada build

```
_generador/parche-gtm.php       → inc/gtm.php        (parche 16)
_generador/parche-imagenes.php  → inc/imagenes.php   (parche 17)
_generador/overrides/tpl-<slug>.css   → al final de ese CSS
_generador/overrides/todas.css        → al final de TODOS los tpl-*.css (hoy no existe)
_generador/overrides/markup.awk       → transforma el markup por slug
_generador/assets-extra/*             → imágenes que no están en el repo
_generador/docs/{LEEME,CHANGELOG}.md  → se copian a caissa-theme/
```

⚠️ **`inc/gtm.php` e `inc/imagenes.php` se SOBREESCRIBEN en cada build.** Se editan
en `_generador/parche-gtm.php` y `_generador/parche-imagenes.php`. Lo mismo
`caissa-theme/LEEME.md` y `caissa-theme/CHANGELOG.md`: son **copias**; la fuente
está en `_generador/docs/`.

### 3.d La tabla de decisión

| Querés cambiar… | Editá… |
|---|---|
| Copy, markup, estructura o CSS de una de las 24 páginas | el `index.html` de esa página, **en el repo del sitio** |
| El `robots` de una página | el `<meta name="robots">` de su `index.html`, **en el repo del sitio** (`build.sh:499` lo lee de ahí) |
| El `Template Name` o el `lang` de una página | `_generador/paginas.tsv`, columnas 3 y 4 |
| Algo del blog (nota, listado, archivo, búsqueda, 404) | los archivos del blog **en el tema** (§7) |
| El header, el footer o el menú | los archivos del esqueleto **en el tema** |
| GTM o el tratamiento de imágenes del contenido | `_generador/parche-*.php` |
| Algo de una página que **no** se puede arreglar en el repo | `_generador/overrides/` (§6) |

⚠️ **`paginas.tsv` tiene cinco columnas y ninguna es `robots`:** `rel`, `slug`,
`nombre` (el `Template Name`), `lang`, `pre` (la imagen de preload).

⚠️ **Nunca cambies el `slug` a la ligera.** Renombra `page-templates/tpl-<slug>.php`,
y como WordPress guarda la **ruta** del archivo, **desasigna en silencio todas las
páginas que usaban esa plantilla**. El `Template Name` se cambia libre; el slug,
sólo con el reasignado manual planificado.

---

## 4. Cómo regenerar el tema

```bash
cd "G:/Unidades compartidas/01_WEB/Caissa/Tema WordPress 2026"
./_generador/build.sh "G:/Unidades compartidas/01_WEB/Caissa/Web 2026" ./caissa-theme <salida> 1.23
```

Los cuatro argumentos son obligatorios: **repo del sitio**, **tema anterior** (el
esqueleto: es el `caissa-theme/` actual), **carpeta de salida**, **versión**.

Necesita `bash`, `gawk`, `sed` y `sha1sum`. **No** necesita php, python ni node.

**Generá siempre a una carpeta nueva y compará antes de instalar:**

```bash
diff -rq caissa-theme <salida>
cp -r <salida>/. caissa-theme/     # recién ahora
```

Lo esperable es que difieran los archivos que tocaste **más** `style.css` y
`functions.php` si cambiaste la versión, y `CHANGELOG.md`/`LEEME.md` si los
editaste en `_generador/docs/`. Cualquier otro archivo en el diff es una señal:
entendé por qué antes de instalar.

⚠️ **Regenerar sobre sí mismo da cero diferencias sólo con el repo del sitio en
`integracion`** (hoy `1fdd974`), que es de donde salió 1.22. En `main` está 9
commits atrás y vas a leer diferencias reales como "algo se rompió".

### El número de versión no se edita a mano

Es el cuarto argumento. El paso 9 lo escribe con `sed` en `style.css` y en
`functions.php` (`CAISSA_VER`) y **aborta si no puede escribirlo en alguno**.

⚠️ **`CAISSA_VER` NO es el `?ver=` de los assets.** Eso lo da `caissa_ver()`
(`inc/enqueue.php:65-68`), que usa **`filemtime()`** del archivo y sólo cae a
`CAISSA_VER` si el archivo no existe. O sea: la caché de un CSS se invalida sola
al cambiar el archivo, subas o no la versión del tema.

### Los 9 pasos, en una línea cada uno

1. **Esqueleto** — copia del tema anterior lo de §3.b. 1.b: arma `assets/img/` (§3.a).
2. **Extraer** — saca cada bloque `<style>` y `<script>` de las 24 páginas.
3. **Clasificar CSS** — decide qué bloque es chasis compartido y qué es propio.
4. **Escribir CSS** — `<chasis>.css` + `tpl-<slug>.css` (+ blindaje + overrides).
5. **JS** — parte el JS en el prefijo común del nav y lo propio de cada página.
6. **Plantillas** — escribe los 24 `page-templates/tpl-*.php`.
7. **`inc/fuentes.php` + `inc/bloques.php`.**
8. **`inc/variantes.php`** — lo que varía por plantilla.
9. **Versión, enlaces y chequeos** — y acá se sourcea `parches.sh`.

### El build ABORTA si algo no cierra

No es un conversor optimista. Se cae ante assets faltantes, enlaces internos
absolutos, llaves desbalanceadas, funciones `caissa_*` llamadas y no definidas o
declaradas dos veces, **más de un `<h1>` en una plantilla**, FAQ que no coinciden
con su `FAQPage`, y notas internas del equipo que se colaron al contenido
publicado.

**Si el build aborta, leé el mensaje: casi siempre tiene razón.** Y no queda nada
intermedio para inspeccionar, porque el scratch se borra con un `trap`.

### La trampa silenciosa del paso 3

**La pertenencia al chasis se decide por identidad byte a byte del bloque
`<style>` completo.** Si alguien edita el design system dentro de *una* página,
esa página **deja de compartir el chasis, sin error**, y se lleva una copia entera
dentro de su `tpl-*.css`. Ya pasó dos veces: `home` no comparte ningún chasis y
`google-ads` no comparte `landing`.

> **Regla: el CSS nuevo de una página va en su bloque `<style>` propio, nunca
> dentro del bloque compartido.**

---

## 5. `parches.sh`: 17 parches

Se **sourcea** desde `build.sh` en el paso 9 (no se ejecuta suelto; no tiene
shebang a propósito). Arregla lo que no se puede arreglar en el repo del sitio:

- **1-4** — divergencias deliberadas del repo (enlaces a ruta de raíz, los rótulos
  del footer que dejan de ser headings, `aria-current` en el CTA).
- **5-11** — bugs propios del tema heredados de 1.07/1.08 (el menú mobile que no
  abría en ninguna vista del blog, las notas relacionadas repetidas, el tiempo de
  lectura inflado porque `str_word_count()` no entiende UTF-8, el `<nav>` de
  paginación vacío…).
- **12-15** — pedidos posteriores (la fila "Enlaces destacados" del footer como
  cuarto menú, la barra sticky de la home a partir de 100px, el CTA fuera del
  drawer mobile).
- **16-17** — copian `inc/gtm.php` e `inc/imagenes.php` enteros.

### Dos cosas que hay que respetar al agregar un parche

**Todos son idempotentes**, y tienen que seguir siéndolo: sobre un esqueleto ya
parchado, un `append` sin su guarda `if ! grep -q` duplicaría una función y PHP
moriría con *Cannot redeclare*. Hay una red que lo atrapa: `parches.sh` busca
funciones `caissa_*` declaradas más de una vez y aborta. Ojo con su alcance: el
patrón sólo reconoce `[a-z_]`, así que una `caissa_gtm_2()` no la vería.

**Un chequeo que cablea una CANTIDAD envejece mal.** Ya pasó dos veces, de dos
formas distintas: el parche 3 exigía exactamente 2 botones con `aria-current`, el
parche 15 dejó uno y **el build entero abortó**; y el `Description:` de `style.css`
tenía el número de plantillas cableado con un `sed`, que **no rompió nada pero
quedó viejo en silencio** y siguió diciendo "Veintiuna" con 22 plantillas. Los dos
se reescribieron para **contar** en vez de afirmar. Si tenés que contar algo,
contalo.

---

## 6. `_generador/overrides/`: divergir del repo, a la vista

Existe para que las divergencias entre el tema y el repo sean **deliberadas y
visibles**, en vez de ediciones a mano que se pierden. Hoy tiene:

| | |
|---|---|
| `tpl-home.css`, `tpl-reservar-consultoria.css` | CSS que se agrega al final de esa plantilla |
| `markup.awk` | transformaciones de markup por slug (hoy: `home`, `reviews`, `google-ads`) |
| `assets-extra/juan-clean-it.webp` | la foto de Juan (Clean It) que el HTML todavía muestra como iniciales "JG" |

**Cada override es deuda.** Lo ideal es pasarlo al repo del sitio y borrarlo.

⚠️ **`markup.awk` NO aborta el build por sí solo.** Sus funciones `cambiar()` y
`cambiar_hasta()` devuelven 0 si no encuentran el texto y siguen. Sólo **una** de
las transformaciones —la del CTA de Axion Lift en `google-ads`— tiene un `exit 1`
explícito, porque se agregó después de que ese override se rompiera en silencio al
cambiar un `href` en el repo. **Si agregás una transformación, agregale su guarda**,
o el día que el HTML cambie el override deja de aplicarse sin que nada avise.

---

## 7. El blog es la excepción: no viene del repo

El repo del sitio **no tiene blog** —vive en WordPress— así que las vistas del blog
se diseñaron directo en el tema. Son archivos del **esqueleto**:

```
single.php  home.php  archive.php  search.php  404.php
template-parts/{tarjeta-post,listado,cta-blog}.php
inc/blog.php   assets/css/blog.css   assets/js/blog.js
```

**Todo eso sobrevive a una regeneración** (pero ojo con `parches.sh`, §3.b).

- **Rank Math emite el schema; el tema no emite JSON-LD propio** en ninguna vista
  del blog. Lo que sí hace `inc/blog.php` es **enriquecer el grafo de Rank Math**
  por su filtro `rank_math/json_ld` (le agrega `wordCount`, `mainEntityOfPage`,
  `image`, y un `ItemList` opcional que se activa con una casilla en el editor).
  El breadcrumb visible también sale del de Rank Math cuando está disponible, para
  que lo visible y lo declarado no puedan divergir.
- **`caissa_es_blog()`** (`inc/blog.php`) = `is_home() || is_archive() ||
  is_search() || is_404() || is_singular('post')`. Es la única fuente de verdad de
  "esto es una vista del blog" y la usan **cuatro** cosas: el encolado de
  `blog.css`, el de `blog.js`, la clase `caissa-vista-blog` del `<body>` y el
  `caissa_var()` de las vistas del blog. Si cambia el conjunto, cambia en un lugar.

Dos módulos que se usan **en el blog pero no son sólo del blog**:

- **`inc/imagenes.php`** corre en **cualquier** `is_singular()` —entradas y
  páginas—, no sólo en el blog. Saca del HTML las imágenes que el editor pegó como
  data URI (una nota tenía 2.561 KB de base64 en 2.629 KB de HTML), las escribe en
  `uploads/caissa-inline/` con el sha1 como nombre y les pone `width`, `height`,
  `loading` y `decoding`. Se apaga con
  `add_filter('caissa_imagenes_contenido','__return_false')`.
- **`inc/gtm.php` es GLOBAL**, no del blog: carga en las 24 plantillas y en las
  vistas del blog. ⚠️ **Desde 1.21 el modo "solo interacción" está ENCENDIDO por
  defecto**: `gtm.js` no se descarga hasta que el visitante toca algo. Se gana el
  100 de PageSpeed y **se pierde del 10 al 30 % de los pageviews**. Fue un pedido
  explícito de Gastón, repetido después de explicarle el costo. Se revierte con
  `add_filter('caissa_gtm_solo_interaccion','__return_false')`.

---

## 8. Cómo se publica: ZIP, git y push

### ⚠️ La carpeta de entrega NO es un repositorio git

`G:\...\Tema WordPress 2026\` es una carpeta de Google Drive, **sin `.git`**. El
clon vive aparte. Si no existe (máquina nueva, scratchpad limpiado):

```bash
git clone https://github.com/gasacuna/Caissa-Wordpress-Theme-2026.git <clon>
cd <clon>
git config user.name "gasacuna" && git config user.email "g-acuna@caissa.digital"
```

Para publicar un cambio:

```bash
# 1. Vaciá el clon salvo .git y los tres archivos propios del repo.
#    Sin esto los BORRADOS no viajan: cp -r agrega y pisa, nunca borra.
find "<clon>" -mindepth 1 -maxdepth 1 \
  ! -name .git ! -name README.md ! -name .gitignore ! -name .gitattributes \
  -exec rm -rf {} +

# 2. Copiá la carpeta de entrega encima.
cp -r "G:/Unidades compartidas/01_WEB/Caissa/Tema WordPress 2026/." "<clon>/"

# 3. Mirá qué cambió ANTES de commitear. Los borrados que aparezcan tienen que
#    ser los esperados, y NO puede faltar ninguno de los tres archivos propios.
git -C "<clon>" status
git -C "<clon>" checkout -- README.md .gitignore .gitattributes   # si alguno figura borrado

git -C "<clon>" add -A && git -C "<clon>" commit -F <mensaje.txt> && git -C "<clon>" push
```

El paso 1 no es paranoia: el commit `08ef2d0` (1.11) **borró 50 archivos** de
`assets/img/` cuando las fotos pasaron a WebP. Con un `cp -r` a secas, esos 50
habrían sobrevivido en el clon y se habrían vuelto a pushear.

`.gitattributes` normaliza el texto a LF (`* text=auto eol=lf`) porque un `\r` en
el shebang rompe `build.sh` y gawk se come el `\r` dentro de los literales.
⚠️ **Tiene una excepción deliberada: `*.svg -text`.** Cuatro SVG traen CRLF del
repo del sitio y el ZIP se arma con esos bytes; si git los normalizara, la carpeta
versionada dejaría de coincidir con el ZIP. **No la saques.**

### El ZIP

```powershell
powershell -File _generador/zip.ps1 -Origen .\caissa-theme -Destino <temp>\caissa-theme.zip
```

Escribí a una carpeta temporal y copiá después: el guard de PowerShell bloquea
escribir directo sobre la unidad compartida. `build.sh` **no** arma el ZIP.

⚠️ **No uses `Compress-Archive`**: PowerShell 5.1 escribe los nombres con
**backslash**, lo que viola la especificación ZIP y puede hacer que WordPress lo
rechace.

El script verifica tres invariantes **estructurales**: ninguna entrada con barra
invertida, todas bajo `caissa-theme/`, y la cantidad de entradas igual a la de
archivos escritos. **No compara contenido**: un archivo truncado pasaría las tres.
Para eso, el paso aparte:

```bash
unzip -q caissa-theme.zip -d /tmp/z && diff -rq caissa-theme /tmp/z/caissa-theme
```

### Instalar

Apariencia → Temas → Añadir nuevo → Subir tema → `caissa-theme.zip` → Activar.

Siempre es la misma carpeta (`caissa-theme`), así que WordPress lo trata como una
actualización y **las plantillas asignadas se conservan**: el meta
`_wp_page_template` guarda la **ruta** del archivo, no el `Template Name`. (Esto es
comportamiento del núcleo de WordPress, no de estos archivos.) Por eso se puede
renombrar un `Template Name` sin desasignar — y por eso cambiar el **slug**
desasigna en silencio (§3.d).

---

## 9. Cómo se verifica un cambio

No hay tests, ni linter, ni CI. La verificación es **medir en el navegador**, y hay
trampas que cuestan horas (están en §18.g y §25.c del `CLAUDE.md` del repo del sitio):

- **El pane del navegador no scrollea ni compone frames**, así que el
  `IntersectionObserver` nunca dispara y todos los `.reveal` se miden con
  `opacity:0`. Forzalo:
  `document.querySelectorAll('.reveal').forEach(e=>e.classList.add('in'))`.
- **Cualquier medición de geometría va con las animaciones apagadas primero:**
  `*{animation:none!important;transition:none!important}`. Medir con las
  animaciones andando ya produjo un "bug" inexistente que se corrigió y hubo que
  revertir.
- **`loading="lazy"` fuera de pantalla nunca carga**: poné `i.loading='eager'`.
- **Truco que funciona muy bien:** inyectar el CSS nuevo **en la página real** y
  medir antes/después en el mismo documento. Es la prueba más barata y la más
  convincente.
- Server local del repo del sitio: `node .claude/serve.js 8000` (declarado como
  `caissa` en `.claude/launch.json`). Tiene que ser HTTP y no `file://`, porque los
  enlaces internos son de ruta de raíz y las `@font-face` piden `/fonts/*.woff2`.

### La lección más cara: un chequeo sin control no prueba nada

Los scripts de cambio traen sus propias comprobaciones, y **varias veces pasaron
por el motivo equivocado**:

- Un test de la guarda de GTM dio 0 inyecciones en los cuatro casos porque no se
  reseteaba `window.__caissaGtm` entre corridas — **incluido el control, que tenía
  que inyectar y daba 0**. Está contado en `caissa-theme/LEEME.md`, en la sección
  de verificación de GTM.
- Un verificador definía `n` con un parámetro y lo llamaba con dos, así que
  calculaba `s.split(s)` y devolvía **1 siempre**, sin mirar lo que buscaba.

> **Regla: todo chequeo lleva un control que TIENE que fallar si el arnés está
> roto.** Una aguja que debe dar 0 y otra que debe dar 1.

Y ojo con buscar cadenas en un archivo que **documenta en sus comentarios el valor
viejo como advertencia**: contá sobre el código con los comentarios removidos, o da
falsos positivos.

---

## 10. Trampas del entorno

Verificado ejecutándolo el 15/09/2026:

| | |
|---|---|
| `php` | **NO.** El PHP del tema nunca se ejecutó ni pasó por `php -l`. Los chequeos del build son sintácticos a mano. **Activá el tema con una página en borrador primero.** |
| `python` / `python3` | **NO** — resuelven al stub de la Microsoft Store. Por eso el server local es Node. |
| `node` | **SÍ**, v24.19.0 |
| `gawk`, `sed`, `sha1sum`, `curl`, `git`, `unzip`, `tar` | **SÍ** |
| `zip`, `7z`, `gh`, `ffmpeg`, `cwebp` | **NO** |
| `convert` | ⚠️ **existe pero NO es ImageMagick**: es el conversor de sistemas de archivos de Windows. Tampoco están `magick` ni `mogrify`. **Trabajo de imágenes: no hay herramienta hoy.** |

Además:

- **Los heredocs de bash se comen las barras invertidas**, incluso con delimitador
  entrecomillado (`<<'EOF'`). Ya dejaron tres `\1` literales dentro de `index.html`.
  **Regla: los scripts que tocan archivos se escriben con Write a un `.js` y se
  corren con `node`.** Un `node -e "…"` con comillas dobles adentro también se rompe.
- **El repo del sitio es CRLF** (`core.autocrlf=true`, sin `.gitattributes`):
  cualquier ancla de búsqueda que contenga `\n` falla. Normalizá a LF para buscar y
  restaurá al escribir.
- **Google Drive sincroniza la carpeta de entrega.** Un archivo puede desaparecer a
  mitad de trabajo (pasó con `LEEME-PRIMERO.md`, se recuperó de git).

---

## 11. Estado: producción YA está migrada

⚠️ **Esto cambió entre el 10 y el 15/09/2026, y `PENDIENTES.md` todavía está
escrito como si el deploy no hubiera ocurrido.** Verificado hoy contra producción:

- `caissa.digital` sirve `wp-content/themes/caissa-theme` con `Version: 1.22`.
- Su `<meta name="robots">` es **`follow, index`** y su `robots.txt` es el bueno.
  **El riesgo 🔴 2.1 no se materializó**: producción quedó indexable.
- El bloque de `.htaccess` está instalado. El semáforo del proyecto corrido contra
  producción da **`ok: 161  mal: 5`**: pasan los 33 redirects y las 126 identidades.
- `demo.caissa.digital` **sigue con `Disallow: /`**, que es lo correcto.

Lo que quedó abierto, en orden de urgencia:

1. **Tres redirects se perdieron con la base** (era el riesgo 🔴 2.2, y **ya
   ocurrió**): `/?page_id=12865`, `/caso/ecommerce-2/` y `/caso/casinos-online/`
   devuelven **404**. Los ponía el plugin Redirection y no están en el bloque nuevo.
   **Hay que reponerlos.**
2. **`/sobre-caissa/` da 404**: la página nunca se creó. La plantilla existe
   (`tpl-sobre-caissa.php`) y las 24 páginas del repo la enlazan, pero en producción
   el footer sale de menús de WordPress y el ítem nunca se agregó — así que no hay
   enlaces rotos, hay una página faltante.
3. **Los 5 fallos del semáforo** son las reglas "opcionales" que nunca se
   escribieron. ⚠️ `PENDIENTES.md` §2.2, §2.3 y §2.4 dicen que están "comentadas al
   final" del bloque de redirects: **no existen en el archivo**. Hay que escribirlas.
4. **Podar el contenedor de GTM** (🔴 1.6): dispara siete herramientas —las fuentes
   del repo dicen "siete" pero enumeran seis: GA4, Google Ads, Píxel de Meta,
   LinkedIn, Microsoft Clarity y ClickCease— y 15 peticiones de terceros, con un TBT
   de 1.160 ms sobre un presupuesto de 200.
5. **La caché de página sigue apagada** (🔴 1.7): `x-powered-by: PHP` en cada
   respuesta y TTFB de 480-550 ms medidos hoy.

**4 y 5 no son de código:** ningún cambio en el tema los arregla. Son panel de GTM
y panel de Hostinger.

---

## 12. Convenciones

- **Todo en castellano rioplatense, con voseo.** Copy, comentarios, mensajes de
  commit y documentación.
- **Los comentarios del código son el registro de las decisiones.** Explican *por
  qué*, con el número medido y la fecha, y avisan de lo que no hay que volver a
  hacer. No los borres al editar: actualizalos.
- **`CHANGELOG.md` se escribe sin acentos** (ASCII), una entrada por versión, en un
  solo párrafo largo. Se edita en `_generador/docs/`.
- **Nada de emojis en el copy del sitio.**
- Los mensajes de commit son largos y explican el porqué, no el qué.

---

## 13. Lo que está desactualizado (no te guíes por esto)

| Archivo | Problema |
|---|---|
| `_generador/docs/LEEME.md` | dice **"Actual: 1.13"**, y dice que el modo "solo interacción" de GTM está **apagado por defecto**: es **falso desde 1.21**, está encendido. Es el error más peligroso del set. |
| `LEEME-PRIMERO.md` | se titula 1.22 pero **avisa de sí mismo** que su cuerpo describe la 1.09. |
| `PENDIENTES.md` | está escrito **antes del deploy**, que ya ocurrió (§11). Y sus §2.2/2.3/2.4 remiten a un bloque de reglas comentadas que **no existe**. |
| `_generador/docs/CHANGELOG.md` | **faltan seis versiones**: 1.14, 1.15, 1.17, 1.18, 1.19 y 1.20. (1.15 sí está descrita, dentro de `LEEME.md`.) |
| `SEO-para-Rank-Math.tsv` | tiene **22 URLs**: le faltan `/caissa-go/` y `/postulacion-enviada/`. |

Los dos primeros se editan en **`_generador/docs/`**: las copias de `caissa-theme/`
se regeneran en cada build.

**La lista de páginas a crear en WordPress está partida en tres documentos y
ninguno la tiene entera. Son seis slugs:** `aviso-legal`, `reservar-consultoria`,
`llamada-confirmada`, `sobre-caissa`, `caissa-go`, `postulacion-enviada`. Los slugs
no son cosméticos: **116 CTA del repo apuntan a `/reservar-consultoria/`**.

Dos advertencias que no se ven mirando la web:

- **La conversión de Google Ads de `/llamada-confirmada/`** compara con
  `location.hostname !== 'caissa.digital'` exacto. Hoy `www.caissa.digital` redirige
  a `caissa.digital`, así que funciona; **se rompería si alguien invierte esa
  redirección**.
- **Los seis campos ocultos del Typeform** (`utm_*` y `origen`) tienen que existir
  en *Settings → Hidden fields* con esos nombres exactos, o **Typeform los descarta
  en silencio** y se pierde la atribución.

---

## 14. Por dónde empezar

1. Leé el **`CLAUDE.md` del repo del sitio** (2.546 líneas). Tiene las reglas de
   copy innegociables de Manuel —las "tres prohibiciones"—, las de diseño, y las
   trampas del chasis. No lo saltees: varias secciones existen porque algo se rompió.
2. Leé **`PENDIENTES.md`**, con §11 de este documento al lado para saber qué ya pasó.
3. Mirá los últimos commits del tema en el clon (§8) o en
   `github.com/gasacuna/Caissa-Wordpress-Theme-2026`: los mensajes explican el
   porqué de cada decisión. (La carpeta de entrega no tiene `.git`.)
4. Antes de tocar nada: **regenerá el tema sobre sí mismo, con el repo del sitio en
   `integracion`, y confirmá que da cero diferencias.** Si no da cero, entendé qué
   cambió antes de seguir.
