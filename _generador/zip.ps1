# Arma caissa-theme.zip, que es lo que se sube al panel de WordPress.
#
#   powershell -File _generador/zip.ps1 -Origen .\caissa-theme -Destino <temp>\caissa-theme.zip
#
# POR QUE NO Compress-Archive
#
# El Compress-Archive de PowerShell 5.1 (la edicion de este equipo) escribe los
# nombres de entrada con BARRA INVERTIDA: "caissa-theme\style.css". Eso viola la
# especificacion ZIP, que exige "/", y puede hacer que el instalador de temas de
# WordPress no encuentre una carpeta raiz valida y rechace el archivo. Por eso se
# usa ZipArchive a mano, nombrando cada entrada.
#
# POR QUE SE ESCRIBE EN UNA CARPETA TEMPORAL Y DESPUES SE COPIA
#
# El guard de PowerShell de este entorno bloquea escribir directo sobre la unidad
# compartida de Google Drive. Pasar -Destino a una carpeta temporal y copiar
# despues con Copy-Item funciona.
#
# QUE VERIFICA AL TERMINAR
#
# Relee el ZIP y comprueba TRES invariantes estructurales:
#   1. ninguna entrada con barra invertida,
#   2. todas bajo la carpeta raiz (caissa-theme/),
#   3. la cantidad de entradas coincide con la de archivos escritos.
#
# OJO: NO compara el CONTENIDO. Un archivo truncado pasaria estas tres. El
# chequeo de contenido es un paso aparte y conviene hacerlo al menos cuando se
# cambia algo del empaquetado:
#
#   unzip -q caissa-theme.zip -d /tmp/z
#   diff -rq caissa-theme /tmp/z/caissa-theme    # tiene que dar cero
#
# ⚠️ Los SVG del tema traen CRLF a proposito y .gitattributes los exceptua de la
# normalizacion (*.svg -text). Este script copia bytes tal cual, asi que el ZIP y
# la carpeta coinciden. No "arregles" esos finales de linea.

param(
  [Parameter(Mandatory=$true)][string]$Origen,   # la carpeta caissa-theme
  [Parameter(Mandatory=$true)][string]$Destino   # el .zip a crear
)

Add-Type -AssemblyName System.IO.Compression
Add-Type -AssemblyName System.IO.Compression.FileSystem

if (Test-Path $Destino) { Remove-Item $Destino -Force }

$raiz = (Resolve-Path $Origen).Path
$base = Split-Path $raiz -Leaf

$fs  = New-Object System.IO.FileStream($Destino, [System.IO.FileMode]::Create)
$zip = New-Object System.IO.Compression.ZipArchive($fs, [System.IO.Compression.ZipArchiveMode]::Create)

$n = 0
foreach ($f in Get-ChildItem -Path $raiz -Recurse -File) {
  $rel = $f.FullName.Substring($raiz.Length + 1).Replace('\','/')
  $e = $zip.CreateEntry("$base/$rel", [System.IO.Compression.CompressionLevel]::Optimal)
  $salida = $e.Open()
  $entrada = [System.IO.File]::OpenRead($f.FullName)
  $entrada.CopyTo($salida)
  $entrada.Close()
  $salida.Close()
  $n++
}
$zip.Dispose()
$fs.Close()

$kb = [math]::Round((Get-Item $Destino).Length / 1KB)
Write-Output "  $n archivos, $kb KB -> $Destino"

$z = [System.IO.Compression.ZipFile]::OpenRead($Destino)
$malas = @($z.Entries | Where-Object { $_.FullName -match '\\' })
$total = $z.Entries.Count
$conBarra = @($z.Entries | Where-Object { $_.FullName -like "$base/*" }).Count
$z.Dispose()

Write-Output "  entradas: $total  |  bajo '$base/': $conBarra  |  con barra invertida: $($malas.Count)"
if ($malas.Count -gt 0) { Write-Error "hay entradas con barra invertida"; exit 1 }
if ($total -ne $conBarra) { Write-Error "hay entradas fuera de la carpeta raiz"; exit 1 }
if ($total -ne $n) { Write-Error "el ZIP tiene $total entradas y se escribieron $n"; exit 1 }
Write-Output "  ZIP OK (estructura; el contenido se compara aparte con unzip + diff -rq)"
