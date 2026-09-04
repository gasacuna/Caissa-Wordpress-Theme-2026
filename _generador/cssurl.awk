BEGIN{ RS = sprintf("%c", 1) }
# Reescribe las url() RELATIVAS del CSS extraido.
#
# EL BUG QUE ARREGLA: en el repo el CSS es inline dentro de cada pagina, asi que
# un url(logo-caissa.webp) se resuelve contra la URL de la pagina y funciona. Al
# moverlo a assets/css/tpl-*.css se resuelve contra la carpeta del CSS, o sea
# assets/css/logo-caissa.webp, que no existe. Resultado: la imagen no aparece y
# no hay ningun error visible mas que el 404.
#
# Paso de verdad con el logo de Caissa que va en cada tilde de la tabla
# comparativa cuando se apila en mobile (.c-after::before de la home).
#
# Desde assets/css/ hasta assets/img/ el camino es ../img/, y eso no depende de
# donde este instalado el tema.
{
  s = $0; res = ""
  while (1) {
    p = index(s, "url(")
    if (p == 0) { res = res s; break }
    res = res substr(s, 1, p + 3)
    s = substr(s, p + 4)
    e = index(s, ")")
    if (e == 0) { res = res s; break }
    val = substr(s, 1, e - 1)
    s = substr(s, e)
    # limpiar comillas para decidir, y reponerlas igual que estaban
    q = ""
    v = val
    if (v ~ /^["']/) { q = substr(v, 1, 1); v = substr(v, 2, length(v) - 2) }
    if (v ~ /^(https?:)?\/\// || v ~ /^\// || v ~ /^data:/ || v ~ /^#/ || v == "") {
      res = res val
    } else {
      res = res q "../img/" v q
      reescritas++
    }
  }
  printf "%s", res
}
END{ if (reescritas > 0) printf "     %d url() del CSS reapuntadas a ../img/\n", reescritas > "/dev/stderr" }
