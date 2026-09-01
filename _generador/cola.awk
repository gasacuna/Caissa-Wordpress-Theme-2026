BEGIN{ RS = sprintf("%c", 1) }   # todo el archivo en un solo registro
# Deja lo que en el HTML iba despues de </footer> y antes del primer <script>,
# quitando dos cosas: los comentarios HTML y el bloque .sticky-cta, que el tema
# emite por separado con caissa_sticky_cta() desde inc/variantes.php.
# Hoy lo unico que sobrevive es el lightbox de los testimonios en video.
{
  s=$0
  out=""; rest=s
  while (1) { p=index(rest,"<!--"); if(p==0){out=out rest;break}
    out=out substr(rest,1,p-1); rest=substr(rest,p+4)
    q=index(rest,"-->"); if(q==0)break; rest=substr(rest,q+3) }
  s=out
  p=index(s,"<div class=\"sticky-cta\">")
  if (p>0) {
    tail=substr(s,p); e=index(tail,"</div>")     # no tiene divs anidados
    if (e>0) s = substr(s,1,p-1) substr(tail,e+6)
  }
  gsub(/^[ \n\t]+|[ \n\t]+$/,"",s)
  printf "%s", s
}
