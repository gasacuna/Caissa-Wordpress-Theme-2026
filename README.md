# Caissa WordPress Theme 2026

Tema de WordPress con el diseño 2026 de Caissa. **Veintiuna plantillas de página**, header y
footer compartidos, menús nativos y el CSS servido como archivos cacheables. Sin frameworks,
sin jQuery, sin peticiones a terceros.

Se genera a partir de las páginas HTML autónomas del repo
[`Caissa-Nueva-Web-2026`](https://github.com/manuferrini/Caissa-Nueva-Web-2026).

| | |
|---|---|
| **Versión** | 1.09 |
| **Generado desde** | commit `20f8ff9` |
| **Se prueba en** | https://demo.caissa.digital/ |
| **Destino** | caissa.digital |

## Qué hay en este repo

| | |
|---|---|
| **`caissa-theme.zip`** | **Lo que se sube a WordPress.** 1,7 MB, 171 archivos |
| `caissa-theme/` | El tema descomprimido, para subir por SFTP a `wp-content/themes/` |
| `SEO-para-Rank-Math.tsv` | Las 21 URLs con su `title`, `meta description`, `robots`, `canonical` y las cuatro `og:`. El tema no emite metas: las pone Rank Math |
| `_generador/` | El script que construye el tema desde el repo del sitio. No va adentro del ZIP |
| `LEEME-PRIMERO.md` | Resumen de la entrega: qué cambió y qué hay que tocar en el panel |
| `caissa-theme/LEEME.md` | **La documentación completa del tema.** Arquitectura, decisiones, trampas |
| `caissa-theme/CHANGELOG.md` | El detalle de cada versión |

## Instalar

Apariencia → Temas → Añadir nuevo → Subir tema → `caissa-theme.zip` → Activar.

Es siempre la misma carpeta (`caissa-theme`), así que WordPress lo reconoce como una
actualización del que ya esté instalado: **las plantillas asignadas a cada página se
conservan**, porque los nombres de archivo no cambian entre versiones.

Después hay **cinco cosas que hacer en el panel**, explicadas al principio de
[`caissa-theme/LEEME.md`](caissa-theme/LEEME.md): crear las páginas que falten con su slug
exacto, poner `/llamada-confirmada/` en noindex, agregar *Prensa* al menú del footer, revisar
los tres menús y cargar el SEO con el TSV.

## Regenerar el tema

```bash
./_generador/build.sh <dir-repo-del-sitio> <dir-tema-anterior> <dir-salida> <version>
```

Sólo necesita `bash`, `gawk`, `sed` y `sha1sum`. **No** necesita python, node ni php.

El generador original no viajaba con el tema, así que este se reconstruyó por ingeniería
inversa y se validó **reproduciendo el tema 1.08 completo** desde el commit anterior: de los
62 archivos que genera, 59 salieron byte a byte idénticos. No es sólo un conversor: aborta el
build si algo no cierra (assets faltantes, enlaces internos absolutos, llaves desbalanceadas,
FAQ que no coinciden con su `FAQPage`, notas internas que se colaron al contenido publicado).

## Dos cosas a confirmar antes de publicar en producción

1. **La conversión de Google Ads de `/llamada-confirmada/`** dispara sólo si el host es
   exactamente `caissa.digital`. En `demo.caissa.digital` no dispara, que es lo que se quiere
   para no ensuciar la cuenta mientras se prueba. Pero si producción queda en
   `www.caissa.digital`, no va a disparar nunca.
2. **Los campos ocultos del Typeform** (`utm_*` y `origen`) tienen que existir dentro del
   formulario, en Settings → Hidden fields, con esos nombres exactos. Si no están, Typeform
   los descarta en silencio y se pierde la atribución de los leads.

## Nota sobre el ZIP

El ZIP versionado es cómodo (es lo que se sube al panel) pero es un binario de 1,7 MB que
cambia entero en cada versión. Si el historial empieza a pesar, la alternativa es publicarlo
como asset de un **release** de GitHub en vez de commitearlo.
