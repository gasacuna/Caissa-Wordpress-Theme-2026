# Transformaciones del markup que NO salen del HTML del repo.
#
# Se aplican al contenido de cada plantilla, despues de reescribir las rutas de
# assets. SLUG dice en que plantilla estamos, asi que cada cambio se limita a
# donde corresponde.
#
# Cada bloque de abajo explica que cambia y por que. Si algo se puede resolver en
# el HTML de Manu, ahi va mejor: el repo es la fuente de verdad.
#
# OJO con la sintaxis de awk: no se puede cortar la linea justo despues del "("
# de una llamada. Por eso los textos van en variables y no como argumentos
# partidos en varias lineas.

BEGIN{ RS = sprintf("%c", 1); cambios = 0 }

# Reemplaza la PRIMERA aparicion de una cadena por otra. Devuelve 1 si cambio algo.
function cambiar(viejo, nuevo,   p) {
  p = index(s, viejo)
  if (p == 0) return 0
  s = substr(s, 1, p - 1) nuevo substr(s, p + length(viejo))
  cambios++
  return 1
}

# Reemplaza desde INICIO hasta el primer FIN que le sigue, los dos incluidos.
#
# Se usa cuando el texto del medio no conviene cablearlo: los avatares sin foto
# llevan adentro un comentario distinto en cada pagina, y hacer coincidir esos
# comentarios palabra por palabra es fragil (ya fallo una vez por un caracter).
# Buscando de "<span class=..>JG" hasta "</span>" el reemplazo no depende de lo
# que digan las notas del equipo.
function cambiar_hasta(inicio, fin, nuevo,   p, r, e) {
  p = index(s, inicio)
  if (p == 0) return 0
  r = substr(s, p)
  e = index(r, fin)
  if (e == 0) return 0
  s = substr(s, 1, p - 1) nuevo substr(r, e + length(fin))
  cambios++
  return 1
}

{
  s = $0

  # -------------------------------------------------------------------------
  # La foto de Juan Gonzalez Truck (Clean It)
  #
  # El HTML lo muestra con las iniciales "JG" y un comentario que dice que falta
  # la foto: es un pendiente que el CLAUDE.md del repo arrastra desde agosto.
  # Gaston paso la foto, asi que aca se reemplazan las iniciales por la imagen,
  # con el mismo markup que los otros cinco avatares de la seccion.
  #
  # La foto NO sale del repo: viaja en _generador/assets-extra/ y el generador la
  # copia a assets/img/. Se renombro a juan-clean-it.webp porque llego con
  # espacios en el nombre, y un espacio en una URL hay que escaparlo.
  #
  # Es 800x800, cuadrada como los otros avatares, asi que el recorte a la cara
  # que hace .rc-av img (scale 1.3, origen center 22%) le sirve igual.
  #
  # ESTO CONVIENE PASARLO AL REPO. Mientras la foto y el <img> no esten en el
  # HTML de Manu, esta transformacion es una divergencia que hay que mantener.
  # -------------------------------------------------------------------------
  # La home y /reviews/ usan clases distintas para el avatar (.rc-av y .rv-av) y
  # el comentario que dejaron en cada una tampoco es igual, asi que van los dos
  # reemplazos. El <img> es el mismo en ambas: las dos reglas de CSS aplican el
  # mismo recorte a la cara.
  if (SLUG == "home" || SLUG == "reviews") {
    img = "<img src=\"<?php echo CAISSA_IMG; ?>/juan-clean-it.webp\""
    img = img " alt=\"Juan Gonzalez Tr\303\274ck, due\303\261o de Clean It\""
    img = img " width=\"800\" height=\"800\" loading=\"lazy\" decoding=\"async\" />"
  }
  if (SLUG == "home") {
    cambiar_hasta("<span class=\"rc-av\">JG", "</span>", "<span class=\"rc-av\">" img "</span>")
  }
  if (SLUG == "reviews") {
    cambiar_hasta("<span class=\"rv-av\">JG", "</span>", "<span class=\"rv-av\">" img "</span>")
  }

  # -------------------------------------------------------------------------
  # El CTA a Axion Lift en la tarjeta "B2B e industria"
  #
  # Pedido de Gaston: sacarlo. Apunta a caissa.digital/caso/axionlift/, una
  # pagina que vive solo en produccion y que no se migro. El texto de la tarjeta
  # queda igual; lo unico que se va es el enlace.
  # -------------------------------------------------------------------------
  if (SLUG == "google-ads") {
    viejo = "\n          <a href=\"https://caissa.digital/caso/axionlift/\">Ver el caso Axion Lift</a>"
    cambiar(viejo, "")
  }

  printf "%s", s
}

END{ if (cambios > 0) printf "     markup: %d cambio(s) en %s\n", cambios, SLUG > "/dev/stderr" }
