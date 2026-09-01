# Extrae bloques <script>...</script> SIN atributos (los inline del tema),
# filtrando primero los comentarios HTML.
{
  h=$0; out=""; rest=h
  while (1) { p=index(rest,"<!--"); if(p==0){out=out rest;break}
    out=out substr(rest,1,p-1); rest=substr(rest,p+4)
    q=index(rest,"-->"); if(q==0)break; rest=substr(rest,q+3) }
  h=out; rest=h; n=0
  while (1) {
    p=index(rest,"<script")
    if (p==0) break
    rest=substr(rest,p+7)
    gt=index(rest,">")
    if (gt==0) break
    attrs=substr(rest,1,gt-1)
    rest=substr(rest,gt+1)
    q=index(rest,"</script>")
    if (q==0) break
    body=substr(rest,1,q-1)
    n++
    printf "%s", body > (OUTDIR "/" sprintf("%02d",n) ".js")
    printf "%d\t%s\n", n, attrs > (OUTDIR "/ATTRS")
    rest=substr(rest,q+9)
  }
  print n > (OUTDIR "/COUNT")
}
