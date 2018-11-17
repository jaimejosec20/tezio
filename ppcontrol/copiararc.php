<?php  
function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
      } 
    closedir($dir); 
    } 
	

$ruta = '/Equipo/Xperia E5/Almacenamiento interno/misImagenesApp/misFotos/';
$destino = 'C:/xampp/htdocs/tezio/ppcontrol/images/misFotos/'; 

recurse_copy($ruta, $destino);

echo "
<script> 
alert('ARCHIVOS COPIADOS');
</script>"; 

?> 