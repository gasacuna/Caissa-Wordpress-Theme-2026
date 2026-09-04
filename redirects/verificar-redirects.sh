#!/usr/bin/env bash
#
# Verifica las 159 filas de "MAPEO REDIRECTS FINAL" contra el host que le pases.
#
#   ./verificar-redirects.sh https://demo.caissa.digital
#   ./verificar-redirects.sh https://caissa.digital
#
# Espera: los 33 redirects devuelven 301 al destino de la hoja en UN solo
# salto, y las 126 URLs que no cambian devuelven 200.
#
# Es lo que llenan las columnas "Implementado", "Testeado" y "Codigo obtenido"
# de la hoja, sin abrir 159 pestañas a mano.
#
# Sale con codigo 0 solo si no hubo ni un fallo, asi que sirve tal cual como
# semaforo go / no-go de la tarea 34 del checklist.

set -uo pipefail
BASE="${1:-}"
if [ -z "$BASE" ]; then echo "uso: $0 https://host" >&2; exit 2; fi
BASE="${BASE%/}"

ok=0; mal=0

# $1 = ruta vieja · $2 = destino esperado, o "=" si NO debe redirigir.
probar() {
  local de="$1" esp="$2" code loc locrel
  # --max-redirs 0 a proposito: interesa el PRIMER salto. Una cadena de dos 301
  # es un defecto, y seguir la redireccion lo esconderia.
  read -r code loc < <(curl -sS -o /dev/null --max-redirs 0 \
      -w '%{http_code} %{redirect_url}' "$BASE$de" 2>/dev/null; echo)
  locrel="${loc#"$BASE"}"
  locrel="${locrel%%\?*}"

  if [ "$esp" = "=" ]; then
    if [ "$code" = "200" ]; then ok=$((ok+1)); return; fi
    mal=$((mal+1)); printf '  MAL  %-72s espera 200, dio %s %s\n' "$de" "$code" "$locrel"
  else
    if [ "$code" = "301" ] && [ "$locrel" = "$esp" ]; then ok=$((ok+1)); return; fi
    mal=$((mal+1)); printf '  MAL  %-72s espera 301 a %s, dio %s a %s\n' "$de" "$esp" "$code" "$locrel"
  fi
}

echo "== 33 redirects: 301 a su destino =="
probar '/agencia-instagram-ads/' '/agencia-meta-ads/'
probar '/agencia-facebook-ads/' '/agencia-meta-ads/'
probar '/agencia-growth-marketing/' '/blog/contratar-agencia-growth-marketing/'
probar '/agencia-marketing-digital-argentina/' '/'
probar '/llamada' '/reservar-consultoria/'
probar '/llamada/' '/reservar-consultoria/'
probar '/plantilla-optimizar-google-ads/' '/blog/como-por-que-crear-landing-pages-google-ads/'
probar '/valores/' '/equipo/'
probar '/sumate/' '/carreras/'
probar '/equipo/candela-ivon-pesiney/' '/equipo/'
probar '/equipo/liana-valdebenito/' '/equipo/'
probar '/equipo/gaston-acuna/' '/equipo/'
probar '/equipo/lucas-accoce' '/equipo/'
probar '/equipo/lucas-accoce/' '/equipo/'
probar '/equipo/juan-fornero' '/equipo/'
probar '/equipo/juan-fornero/' '/equipo/'
probar '/equipo/facundo-alvarez/' '/equipo/'
probar '/equipo/jose-salinas/' '/equipo/'
probar '/equipo/alejandra-blanco/' '/equipo/'
probar '/equipo/raquel-galeano/' '/equipo/'
probar '/careers/' '/carreras/'
probar '/careers/especialista-performance-marketing-neuquen/' '/carreras/especialista-performance-marketing-neuquen/'
probar '/careers/especialista-en-performance-marketing/' '/carreras/especialista-en-performance-marketing/'
probar '/caso/' '/industrias/'
probar '/caso/ecommerce/' '/industrias/ecommerce/'
probar '/caso/ecommerce/padel/' '/industrias/ecommerce/'
probar '/caso/generacion-de-leads/juridico/' '/industrias/abogados/'
probar '/caso/rubro-salud/' '/industrias/salud/'
probar '/caso/generacion-de-leads/rubro-salud/' '/industrias/salud/'
probar '/caso/generacion-de-leads/constructoras/' '/industrias/constructoras/'
probar '/caso/constructoras/' '/industrias/constructoras/'
probar '/caso/generacion-de-leads/turismo/' '/industrias/turismo/'
probar '/caso/generacion-de-leads/' '/industrias/'

echo "== 126 URLs que no cambian: 200 =="
probar '/' '='
probar '/agencia-google-ads/' '='
probar '/agencia-meta-ads/' '='
probar '/agencia-marketing-neuquen/' '='
probar '/reservar-consultoria/' '='
probar '/reviews/' '='
probar '/tecnologia/' '='
probar '/equipo/' '='
probar '/equipo/manu-ferrini/' '='
probar '/equipo/martin-pera/' '='
probar '/blog/' '='
probar '/blog/page/2/' '='
probar '/blog/page/3/' '='
probar '/blog/page/4/' '='
probar '/blog/page/5/' '='
probar '/blog/page/6/' '='
probar '/blog/page/7/' '='
probar '/blog/page/8/' '='
probar '/blog/page/9/' '='
probar '/blog/page/10/' '='
probar '/blog/page/11/' '='
probar '/blog/page/12/' '='
probar '/blog/mejores-agencias-marketing-digital-argentina-2026/' '='
probar '/blog/la-evolucion-del-talento-por-que-en-caissa-formamos-consultores-de-negocio-y-por-que-los-buscamos-en-neuquen/' '='
probar '/blog/ai-max-text-guidelines-google-ads/' '='
probar '/blog/la-gestion-de-cuentas-de-google-ads-en-la-era-de-la-ia/' '='
probar '/blog/gestores-de-catalogo-para-e%E2%80%91commerce-como-te-ayudan-a-vender-mas-con-google-ads/' '='
probar '/blog/que-es-geo-como-afectara-sem/' '='
probar '/blog/las-ventas-crecen-pero-la-rentabilidad-no-el-problema-que-nadie-quiere-mirar/' '='
probar '/blog/cambiar-de-agencia-no-siempre-arregla-tu-negocio-el-problema-suele-estar-en-otro-lado/' '='
probar '/blog/anuncios-de-competencia-google-ads/' '='
probar '/blog/potencia-tus-ingresos-con-la-estrategia-de-upselling-en-ecommerce/' '='
probar '/blog/como-la-recurrencia-afecta-ecommerce/' '='
probar '/blog/best-google-ads-agencies-new-york/' '='
probar '/blog/ranking-en-google-ads/' '='
probar '/blog/es-importante-el-diseno-de-una-landing-page-de-venta-en-campanas-de-google-ads-o-meta-ads/' '='
probar '/blog/contratar-especialistas-en-marketing-digital/' '='
probar '/blog/variantes-de-anuncios-de-google-ads/' '='
probar '/blog/medir-roi-google-ads/' '='
probar '/blog/estrategias-growth-marketing-para-ecommerce/' '='
probar '/blog/growth-marketing-estrategias-locales/' '='
probar '/blog/palabras-clave-negativas/' '='
probar '/blog/genera-y-usa-lead-magnets/' '='
probar '/blog/como-crear-landing-pages-que-convierten/' '='
probar '/blog/tecnica-avanzada-para-ofertar-en-goolge-ads-parte-2/' '='
probar '/blog/anuncios-de-busqueda-google-ads/' '='
probar '/blog/heatmaps-como-integrarlos-y-mejorar-ventas-en-ecommerce/' '='
probar '/blog/estadisticas-de-subasta/' '='
probar '/blog/conseguir-clientes-para-casino-online/' '='
probar '/blog/como-determinar-mi-presupuesto-en-instagram-ads/' '='
probar '/blog/crear-campana-remarketing-google-ads/' '='
probar '/blog/google-analytics-informes-ecommerce/' '='
probar '/blog/5-errores-performance-max-google-ads/' '='
probar '/blog/optimizar-rsa-google-ads/' '='
probar '/blog/cuando-un-rendimiento-pobre-en-google-ads-es-un-problema-de-posicionamiento-y-no-de-segmentacion/' '='
probar '/blog/como-aumentar-las-ventas-en-una-tienda-de-muebles/' '='
probar '/blog/como-redactar-anuncios-de-google-ads-que-capten-clics-y-conviertan/' '='
probar '/blog/elegir-publico-campanas-instagram-ads/' '='
probar '/blog/tipos-agencias-publicidad-aumentar-ventas/' '='
probar '/blog/crear-campana-google-ads/' '='
probar '/blog/como-ver-los-anuncios-de-mi-competencia/' '='
probar '/blog/duplicar-ventas-ecommerce/' '='
probar '/blog/actualizacion-discovery-nuevas-camapanas-de-generacion-de-demanda/' '='
probar '/blog/ofertas-iniciales-google-ads/' '='
probar '/blog/growth-marketing-estrategias-empresas/' '='
probar '/blog/medir-rendimiento-kpis-para-campanas-de-google-ads/' '='
probar '/blog/curvas-de-crecimiento-startups/' '='
probar '/blog/5-aspectos-clave-para-el-exito-en-google-ads/' '='
probar '/blog/7-filtros-clave-en-google-ads-para-eliminar-gasto-innecesario/' '='
probar '/blog/19-reglas-para-dominar-la-publicidad-en-meta-en-2025-y-mas-alla/' '='
probar '/blog/aumentar-ventas-hot-sale/' '='
probar '/blog/por-que-los-anuncios-dinamicos-en-facebook-ads-son-tan-utiles/' '='
probar '/blog/aumenta-tus-ventas-con-cross-selling-en-ecommerce-guia-paso-a-paso/' '='
probar '/blog/mejores-agencias-de-google-ads-en-espana/' '='
probar '/blog/martin-pera-speaker-meta-ads-ia/' '='
probar '/blog/cuanto-invertir-para-posicionar-en-google/' '='
probar '/blog/las-mejores-agencias-google-ads-argentina/' '='
probar '/blog/beneficios-de-trabajar-junto-a-una-agencia-de-google-ads-en-lugar-de-gestionarlo-internamente/' '='
probar '/blog/intuicion-analisis-google-ads/' '='
probar '/blog/optimizar-anuncios-performance-max-google-ads/' '='
probar '/blog/como-determinar-mi-presupuesto-en-google-ads/' '='
probar '/blog/como-elegir-una-agencia-de-marketing-digital/' '='
probar '/blog/contratar-agencia-growth-marketing/' '='
probar '/blog/ventajas-contratar-agencia-google-partner/' '='
probar '/blog/como-preparar-ecommerce-eventos-digitales/' '='
probar '/blog/recomendaciones-automaticas-google-ads/' '='
probar '/blog/guia-definitiva-para-crear-audiencias-similares-en-facebook-ads/' '='
probar '/blog/como-mejorar-los-resultados-de-tus-anuncios-de-busqueda/' '='
probar '/blog/manuel-ferrini-speaker-marketing-ia/' '='
probar '/blog/guia-para-vender-mas-en-tu-ecommerce-con-google-shopping/' '='
probar '/blog/marcas-con-proposito/' '='
probar '/blog/segmentacion-de-audiencias-en-facebook-ads-e-instagram-ads-de-forma-eficaz-la-guia-definitiva/' '='
probar '/blog/tendencias-comercio-electronico-publico-espanol/' '='
probar '/blog/caissa-agencia-ideal-performance-marketing-para-pyme/' '='
probar '/blog/cuales-son-las-mejores-practicas-para-optimizar-los-call-to-action-cta/' '='
probar '/blog/como-crear-optimizar-anuncios-de-busqueda-dinamicos-dsa/' '='
probar '/blog/vale-la-pena-invertir-en-publicidad-en-instagram/' '='
probar '/blog/performance-max-roba-trafico-a-tus-campanas-de-busqueda-en-google-ads/' '='
probar '/blog/google-partner-que-significa/' '='
probar '/blog/como-redactar-textos-eficaces-para-tus-anuncios-de-busqueda-en-google-ads/' '='
probar '/blog/caissa-es-una-de-las-mejores-agencias-de-marketing-digital-para-trabajar/' '='
probar '/blog/facebook-pixel-que-es-y-por-que-es-tan-importante/' '='
probar '/blog/ab-testing-herramientas/' '='
probar '/blog/por-que-mis-campanas-google-ads-no-tienen-buena-performance/' '='
probar '/blog/como-por-que-auditar-tu-cuenta-google-ads/' '='
probar '/blog/remarketing-que-es-y-como-utilizarlo-para-generar-mas-conversiones/' '='
probar '/blog/google-ads-para-casinos-online-la-guia-infalible/' '='
probar '/blog/diferencias-entre-google-analytics-universal-y-google-analytics-4-ga4/' '='
probar '/blog/google-consent-mode-v2-implementacion-paso-a-paso/' '='
probar '/blog/reglas-automatizadas-en-google-ads/' '='
probar '/blog/growth-marketing-para-sobrevivir-una-recesion/' '='
probar '/blog/presupuesto-en-google-ads-cuando-incrementarlo/' '='
probar '/blog/crear-anuncios-google-ads-ia-chatgpt/' '='
probar '/blog/ab-testing/' '='
probar '/blog/por-que-mis-campanas-de-meta-ads-no-convierten/' '='
probar '/blog/merchant-center-por-que-es-tan-importante-para-un-ecommerce/' '='
probar '/blog/roi-meta-ads/' '='
probar '/blog/growth-marketing-estrategias-generar-ventas-ecommerce/' '='
probar '/blog/como-por-que-crear-landing-pages-google-ads/' '='
probar '/blog/como-estructurar-campanas-en-google-ads-para-maximizar-su-eficacia/' '='
probar '/blog/palabras-clave-redundantes-google-ads/' '='
probar '/blog/funnel-de-conversion-potencia-tus-ventas-con-estrategias-eficaces/' '='
probar '/blog/expandiendo-tu-cuenta-de-google-ads-descubriendo-nuevas-oportunidades-con-palabras-clave/' '='
probar '/blog/estrategias-aumentar-ventas-ecommerce-google-ads/' '='
probar '/blog/que-es-growth-marketing/' '='
probar '/blog/ab-testing-ecommerce/' '='

echo
echo "== opcionales (no salen de la hoja) =="
probar '/caso/casinos-online/' '/industrias/'
probar '/caso/generacion-de-leads/casinos-online/' '/industrias/'
probar '/caso/generacion-de-leads/real-estate/' '/industrias/'
probar '/equipo/ivon-pronotti/' '/equipo/'
probar '/equipo/axel-nuin/' '/equipo/'

echo
echo "== control: estas NO se tienen que redirigir =="
probar '/equipo/manu-ferrini/' '='
probar '/equipo/martin-pera/' '='

echo
echo "ok: $ok   mal: $mal"
[ "$mal" -eq 0 ]
