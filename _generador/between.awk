{ s=index($0,A); if(s==0){exit} r=substr($0,s); e=index(r,B); if(e==0){printf "%s",r; exit}
  printf "%s", substr(r,1,e+length(B)-1) }
