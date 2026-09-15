# Caissa WordPress Theme 2026

Tema de WordPress con el diseño 2026 de Caissa. **Veinticuatro plantillas de página**
más las cinco vistas del blog, header y footer compartidos, menús nativos y el CSS
servido como archivos cacheables. Sin frameworks, sin jQuery, sin peticiones a
terceros desde el tema.

Se genera a partir de las páginas HTML autónomas del repo
[`Caissa-Nueva-Web-2026`](https://github.com/manuferrini/Caissa-Nueva-Web-2026).

| | |
|---|---|
| **Versión** | 1.22 |
| **Generado desde** | rama `integracion` del repo del sitio |
| **En producción** | ✅ https://caissa.digital/ — ya corre el tema 1.22, indexable |
| **Staging** | https://demo.caissa.digital/ (sigue con `robots.txt` `Disallow: /`) |

⚠️ **La migración a producción ya se hizo.** `PENDIENTES.md` todavía está escrito
como si no, porque es anterior. Lo que quedó abierto —tres redirects que se
perdieron con la base, `/sobre-caissa/` sin crear, y dos tareas de panel— está en
[`CLAUDE.md` §11](CLAUDE.md), con el estado verificado contra producción.

## 👉 Si vas a trabajar acá, empezá por [`CLAUDE.md`](CLAUDE.md)

Explica cómo funciona el proyecto de punta a punta: qué archivo se edita para cada
tipo de cambio, qué se pierde al regenerar, cómo se publica, cómo se verifica, y
las trampas del entorno. Está escrito para que alguien sin contexto pueda trabajar
solo.

**La regla que más plata cuesta ignorar:** el HTML del repo del sitio es la fuente
de verdad y la regeneración borra la carpeta de salida entera. Editar a mano un
archivo generado del tema es trabajo que se pierde, sin aviso y sin error.

## Qué hay en este repo

| | |
|---|---|
| **`caissa-theme.zip`** | **Lo que se sube a WordPress.** 1,5 MB, 194 archivos |
| **`CLAUDE.md`** | **Cómo funciona el proyecto y cómo se hacen los cambios.** Empezá acá |
| **`PENDIENTES.md`** | Lo que falta para lanzar, por momento del deploy, con los bloqueantes marcados 🔴 |
| `caissa-theme/` | El tema descomprimido, para subir por SFTP a `wp-content/themes/` |
| `_generador/` | El script que construye el tema desde el repo del sitio. No va adentro del ZIP |
| `redirects/` | El bloque de 301 de la migración, el mapeo leído de la planilla, y el semáforo que los verifica contra cualquier host |
| `SEO-para-Rank-Math.tsv` | Las URLs con su `title`, `meta description`, `robots`, `canonical` y las cuatro `og:`. El tema no emite metas: las pone Rank Math |
| `LEEME-PRIMERO.md` | Resumen de la entrega ⚠️ *su cuerpo describe la 1.09* |
| `caissa-theme/LEEME.md` | Documentación larga del tema ⚠️ *dice "Actual: 1.13"* |
| `caissa-theme/CHANGELOG.md` | El detalle de cada versión |

⚠️ Los dos archivos marcados quedaron atrás respecto del tema. `CLAUDE.md` §13
lista exactamente qué dicen mal, para que nadie se guíe por eso.

## Instalar

Apariencia → Temas → Añadir nuevo → Subir tema → `caissa-theme.zip` → Activar.

Es siempre la misma carpeta (`caissa-theme`), así que WordPress lo reconoce como
una actualización del que ya esté instalado: **las plantillas asignadas a cada
página se conservan**, porque WordPress guarda la ruta del archivo y no el nombre
visible de la plantilla.

Después hay trabajo en el panel que el tema no puede hacer solo: crear las seis
páginas con su slug exacto, cargar el SEO con el TSV, revisar los cuatro menús e
instalar los bloques de `.htaccess`. Está todo en `PENDIENTES.md`.

## Regenerar el tema

```bash
./_generador/build.sh <dir-repo-del-sitio> <dir-tema-anterior> <dir-salida> <version>
```

Sólo necesita `bash`, `gawk`, `sed` y `sha1sum`. **No** necesita python, node ni php.

Generá siempre a una carpeta nueva y compará (`diff -rq`) antes de instalar:
regenerar el tema sobre sí mismo sin cambios tiene que dar **cero diferencias**
(con el repo del sitio en `integracion`, que es de donde salió 1.22).

El ZIP es un paso aparte, no lo arma `build.sh`:

```powershell
powershell -File _generador/zip.ps1 -Origen .\caissa-theme -Destino <temp>\caissa-theme.zip
```

El generador original no viajaba con el tema, así que éste se reconstruyó por
ingeniería inversa y se validó **reproduciendo el tema 1.08 completo** desde el
commit anterior: de los 62 archivos que genera, 59 salieron byte a byte idénticos.
No es sólo un conversor: **aborta el build** si algo no cierra (assets faltantes,
enlaces internos absolutos, llaves desbalanceadas, funciones `caissa_*` llamadas y
no definidas o declaradas dos veces, FAQ que no coinciden con su `FAQPage`, notas
internas del equipo que se colaron al contenido publicado).

## Dos cosas a confirmar antes de publicar en producción

1. **La conversión de Google Ads de `/llamada-confirmada/`** dispara sólo si el host
   es exactamente `caissa.digital`. En `demo.caissa.digital` no dispara, que es lo
   que se quiere mientras se prueba. Pero si producción queda en
   `www.caissa.digital`, **no va a disparar nunca**.
2. **Los campos ocultos del Typeform** (`utm_*` y `origen`) tienen que existir dentro
   del formulario, en *Settings → Hidden fields*, con esos nombres exactos. Si no
   están, Typeform los descarta en silencio y se pierde la atribución de los leads.

## Nota sobre el ZIP

El ZIP versionado es cómodo (es lo que se sube al panel) pero es un binario de
1,5 MB que cambia entero en cada versión. Si el historial empieza a pesar, la
alternativa es publicarlo como asset de un **release** de GitHub en vez de
commitearlo.
