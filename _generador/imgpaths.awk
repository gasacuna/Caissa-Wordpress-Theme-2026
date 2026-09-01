# Reescribe rutas relativas de assets a <?php echo CAISSA_IMG; ?>/<ruta-desde-la-raiz>
# DIR = directorio de la pagina relativo a la raiz del repo ("" para la home)
function norm(dir, rel,   parts, out, i, n, m, seg, res) {
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
{
  s = $0; res = ""
  while (1) {
    # buscar el proximo atributo de asset
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
    if (val ~ /^(https?:)?\/\// || val ~ /^\// || val ~ /^data:/ || val ~ /^#/ || val ~ /^<\?php/) {
      res = res val
    } else {
      res = res "<?php echo CAISSA_IMG; ?>/" norm(DIR, val)
    }
  }
  printf "%s", res
}
