# Extrae los bloques <style>...</style> de un HTML a archivos separados.
# Filtra ANTES los comentarios HTML (trampa §16.5 del CLAUDE.md: hay <style>
# escritos DENTRO de comentarios y un findall ingenuo los toma como reales).
BEGIN{ RS="\x01"; n=0 }
{
  h=$0
  # quitar comentarios HTML (no-greedy manual)
  out=""; rest=h
  while (1) {
    p=index(rest,"<!--")
    if (p==0) { out=out rest; break }
    out=out substr(rest,1,p-1)
    rest=substr(rest,p+4)
    q=index(rest,"-->")
    if (q==0) { break }
    rest=substr(rest,q+3)
  }
  h=out
  # extraer bloques
  rest=h
  while (1) {
    p=index(rest,"<style>")
    if (p==0) break
    rest=substr(rest,p+7)
    q=index(rest,"</style>")
    if (q==0) break
    blk=substr(rest,1,q-1)
    n++
    printf "%s", blk > (OUTDIR "/" sprintf("%02d",n) ".css")
    rest=substr(rest,q+8)
  }
  print n > (OUTDIR "/COUNT")
}
