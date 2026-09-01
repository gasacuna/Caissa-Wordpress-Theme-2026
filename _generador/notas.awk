BEGIN{ RS = sprintf("%c",1); quitadas = 0 }
# Saca del contenido los parrafos <p class="legal-nota">, que son notas internas
# para el equipo y NO tienen que salir publicadas. El propio texto lo dice:
# "Nota para Caissa, no para el visitante. Este parrafo se borra al publicar."
#
# Importa: la de /aviso-legal/ admite por escrito que las bases no estan
# inscriptas en el Registro Nacional de la AAIP y que no hay instrumentos de
# transferencia internacional firmados. Publicado en la propia pagina legal, eso
# es una confesion de incumplimiento firmada por la empresa.
#
# Se saca aca, en el generador, y no a mano en el tema: asi no puede volver a
# colarse en la proxima regeneracion aunque siga estando en el HTML del repo.
{
  s = $0
  while (1) {
    p = index(s, "<p class=\"legal-nota\"")
    if (p == 0) break
    tail = substr(s, p)
    e = index(tail, "</p>")
    if (e == 0) break
    s = substr(s, 1, p - 1) substr(tail, e + 4)
    quitadas++
  }
  # El hueco se limpia SOLO si de verdad se saco algo. Si el gsub corriera
  # siempre, tocaria el espaciado de las 21 paginas sin necesidad y rompe la
  # comparacion byte a byte contra el HTML de origen.
  if (quitadas > 0) {
    gsub(/\n[ \t]*\n[ \t]*\n/, "\n\n", s)
  }
  printf "%s", s
}
END{ if (quitadas > 0) printf "notas internas quitadas: %d\n", quitadas > "/dev/stderr" }
