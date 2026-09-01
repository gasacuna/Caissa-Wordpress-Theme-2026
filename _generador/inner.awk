# imprime lo que hay ENTRE A y B (exclusivo)
{ s=index($0,A); if(s==0)exit; r=substr($0,s+length(A)); e=index(r,B); if(e==0){printf "%s",r;exit}
  printf "%s", substr(r,1,e-1) }
