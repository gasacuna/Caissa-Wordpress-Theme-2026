# Reescribe rutas relativas de assets a <?php echo CAISSA_IMG; ?>/<ruta-desde-la-raiz>
# DIR = directorio de la pagina relativo a la raiz del repo ("" para la home)
#
# Trata src, poster y srcset. srcset es el caso especial: su valor NO es una ruta sino
# una lista separada por comas donde cada elemento es "ruta descriptor"
# ("foto-600.webp 600w, foto-800.webp 800w"). Si se reescribe el valor entero como si
# fuera una ruta sola queda un src inservible, y el chequeo de assets del paso 9 reporta
# un archivo con un nombre absurdo. Aparecio con las imagenes responsive de la home.
function norm(dir, rel,   parts, out, i, n, m, seg, res, path) {
  if (dir == "") { path = rel } else { path = dir "/" rel }
  n = split(path, parts, "/"); m = 0
  for (i = 1; i <= n; i++) {
    seg = parts[i]
    if (seg == "" || seg == ".") continue
    if (seg == "..") { if (m > 0) m--; continue }
    out[++m] = seg
  }
  res = ""
  for (i = 1; i <= m; i++) res = res (i > 1 ? "/" : "") out[i]
  return res
}

# Una sola ruta: se deja como esta si es absoluta, externa o ya resuelta.
function una(val,   v) {
  v = val
  if (v ~ /^(https?:)?\/\// || v ~ /^\// || v ~ /^data:/ || v ~ /^#/ || v ~ /^<\?php/) return v
  return "<?php echo CAISSA_IMG; ?>/" norm(DIR, v)
}

# Un srcset entero: se parte por comas y de cada elemento se reescribe SOLO la ruta,
# conservando el descriptor (600w, 2x) y el espaciado tal como estaba.
function lista(val,   partes, k, i, e, ruta, resto, p, res) {
  k = split(val, partes, ",")
  res = ""
  for (i = 1; i <= k; i++) {
    e = partes[i]
    match(e, /^[ \t\n]*/); p = RLENGTH
    resto = substr(e, p + 1)
    if (match(resto, /[ \t\n]/)) {
      ruta  = substr(resto, 1, RSTART - 1)
      resto = substr(resto, RSTART)
    } else {
      ruta  = resto
      resto = ""
    }
    res = res (i > 1 ? "," : "") substr(e, 1, p) una(ruta) resto
  }
  return res
}

{
  s = $0; res = ""
  while (1) {
    best = 0; battr = ""
    for (a = 1; a <= 3; a++) {
      attr = (a == 1 ? "src=\"" : (a == 2 ? "srcset=\"" : "poster=\""))
      p = index(s, attr)
      if (p > 0 && (best == 0 || p < best)) { best = p; battr = attr }
    }
    if (best == 0) { res = res s; break }
    res = res substr(s, 1, best + length(battr) - 1)
    s = substr(s, best + length(battr))
    q = index(s, "\"")
    if (q == 0) { res = res s; break }
    val = substr(s, 1, q - 1)
    s = substr(s, q)      # deja la comilla de cierre para el proximo tramo
    res = res ( (battr == "srcset=\"") ? lista(val) : una(val) )
  }
  printf "%s", res
}
