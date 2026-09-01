# Tema Caissa 2026 · versión 1.09

Actualización del tema de WordPress con el contenido del commit **`20f8ff9`** del repo
`Caissa-Nueva-Web-2026`. El tema que tenías (1.08) venía del commit `3234daf`, o sea justo
una actualización atrás.

## Qué hay en esta carpeta

| | |
|---|---|
| **`caissa-theme.zip`** | **Esto es lo que subís a WordPress.** 1,7 MB, 171 archivos. |
| `caissa-theme/` | El tema descomprimido, por si preferís subirlo por SFTP a `wp-content/themes/`. |
| `SEO-para-Rank-Math.tsv` | Las 21 URLs con su `title`, `meta description`, `robots`, `canonical` y las cuatro `og:`. El tema no emite metas: las pone Rank Math. Se abre con Excel o Google Sheets. |
| `_generador/` | El script que construye el tema desde el repo. No va adentro del ZIP. |

La documentación completa está en **`caissa-theme/LEEME.md`**, y el detalle de versiones en
`caissa-theme/CHANGELOG.md`. Los dos viajan adentro del ZIP.

## Cómo subirlo

1. Apariencia → Temas → Añadir nuevo → Subir tema → `caissa-theme.zip` → Activar.
   Es la misma carpeta (`caissa-theme`), así que **WordPress lo reconoce como una
   actualización del que ya tenés**: las plantillas que ya asignaste a cada página se
   conservan, porque los nombres de archivo no cambiaron.
2. Después hay **cinco cosas que hacer en el panel**. Están explicadas al principio de
   `caissa-theme/LEEME.md`, en la sección "LO PRIMERO". Resumidas:

   | | |
   |---|---|
   | Crear 3 páginas | slugs `aviso-legal`, `reservar-consultoria`, `llamada-confirmada`, y asignarles su plantilla |
   | Poner noindex | en `/llamada-confirmada/`, desde Rank Math |
   | Agregar "Prensa" | al menú **Footer - Caissa**, apuntando a `/#prensa` |
   | Revisar los 3 menús | header, Footer - Servicios, Footer - Caissa |
   | Cargar el SEO | con el TSV de esta carpeta |

## Lo que cambió, en una pantalla

**Tres plantillas nuevas:** `/aviso-legal/`, `/reservar-consultoria/` y
`/llamada-confirmada/`.

**Contenido actualizado en 16 plantillas.** Lo más visible: el método PCO subió de la
posición 13 a la 3 en la home, las 62 FAQ pasaron a acordeón en 10 páginas, la home ganó la
sección de prensa, y la altura del domicilio de Neuquén pasó de 525 a **619**.

**Dos enlaces que en el staging te expulsaban a producción** ahora son de ruta de raíz: el
CTA de consultoría y el Aviso Legal del footer. Antes eran `https://caissa.digital/...`.

**Un archivo de CSS compartido nuevo**, `institucional.css`: el hero `.inst` que antes era
propio de `/equipo/` ahora lo usan cuatro páginas.

## Once correcciones que salieron de revisar el tema

Seis son porque el repo cambió: los dos enlaces absolutos, los títulos del footer de `h2` a
`h3`, el `aria-current` del CTA, los `preconnect` de Typeform y los docblocks desactualizados.

**Las otras cinco son bugs del tema que ya venían de las versiones 1.07 y 1.08**, y no tienen
nada que ver con esta actualización:

| | |
|---|---|
| **El menú mobile no abría en NINGUNA vista del blog** | El handler del botón vive en `tpl-<slug>.js`, que el blog no carga. En el celular, el menú del sitio era inalcanzable en el listado, los archivos, la búsqueda, una nota abierta y el 404 |
| Las notas relacionadas se repetían | El `+` entre arrays de PHP no sobreescribe claves, así que "Seguí leyendo" podía mostrar 5 tarjetas con dos repetidas |
| El tiempo de lectura estaba inflado | `str_word_count()` no entiende UTF-8: cortaba las palabras en cada acento |
| El `<nav>` de paginación salía vacío | Y con `WP_DEBUG_DISPLAY` en on, imprimía avisos de PHP 8.1 debajo de las tarjetas |
| El label del buscador se veía | Faltaba definir `.screen-reader-text`, así que "Buscar:" salía como texto suelto |

Y una cosa que no era un bug pero era un riesgo: **se sacó del contenido publicado la nota
interna del aviso legal**. El HTML del repo trae un párrafo que arranca con *"Nota para
Caissa, no para el visitante. Este párrafo se borra al publicar"* y que después dice, en la
propia página legal, que las bases de datos no están inscriptas en el Registro de la AAIP y
que no hay instrumentos de transferencia internacional firmados. El generador ahora la saca y
aborta si alguna se cuela. **Conviene borrarla también del repo**, porque ahí sigue.

## Dos cosas para mirar antes de publicar en producción

1. **La conversión de Google Ads de `/llamada-confirmada/`** dispara sólo si el host es
   exactamente `caissa.digital`. En `demo.caissa.digital` **no dispara**, que es lo que
   queremos para no ensuciar la cuenta mientras probás. Pero si producción queda en
   `www.caissa.digital`, no va a disparar nunca. Hay que confirmar el host y, si lleva
   `www`, cambiar una línea. Está explicado en el LEEME del tema.
2. **Los campos ocultos del Typeform** (`utm_source`, `utm_medium`, `utm_campaign`,
   `utm_term`, `utm_content`, `origen`) tienen que existir dentro del formulario
   `BGj6BAWL`, en Settings → Hidden fields, con esos nombres exactos. Si no están,
   Typeform los descarta en silencio y la atribución de los leads no se guarda.

## Cómo se verificó

- **20 de 21 plantillas con el texto visible idéntico** al HTML del repo, carácter por
  carácter. La única que difiere es `/aviso-legal/`, y difiere exactamente en las 115
  palabras de la nota interna que se saca a propósito.
- **Los 21 CSS con la cascada idéntica**: concatenar los archivos compartidos en el orden en
  que los encola el tema, más el propio de la plantilla, da el mismo CSS que los bloques
  `<style>` del HTML, en el mismo orden. El navegador recibe lo mismo.
- El generador se validó **reproduciendo el tema 1.08 completo** desde el commit anterior:
  de los 62 archivos que genera, 59 salieron byte a byte iguales, 2 difieren sólo en
  comentarios y el último (`variantes.php`) sólo por los dos campos nuevos. Por eso las
  diferencias del 1.09 son cambios reales del repo, no ruido del build.
- El ZIP se extrajo y se comparó contra la carpeta: idéntico, una sola carpeta raíz, y los
  separadores con barra normal. (El `Compress-Archive` de PowerShell los escribe con
  backslash, que viola la especificación ZIP y puede hacer que WordPress lo rechace: se armó
  con otro método.)
- El snippet de conversión de Google Ads llegó byte a byte igual al del repo.
- Los 43 archivos PHP con las llaves y los tags balanceados, las 21 FAQ en paridad con su
  `FAQPage`, una sola `<h1>` por plantilla, los 86 heredocs bien cerrados y cero assets
  faltantes.

**No hay PHP instalado en esta máquina**, así que no se pudo correr `php -l` ni levantar el
tema en un WordPress real. Todo lo demás está verificado, pero conviene activarlo primero
con una página en borrador.
