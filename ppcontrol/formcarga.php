<?php
	$ftp_server="192.210.150.19";
	$ftp_usuario="jailsoft";
	$ftp_pass="k+XlxcyvOyRX%DA{";
	
	$con_id=ftp_connect($ftp_server);
	$lr=ftp_login($con_id,$ftp_usuario,$ftp_pass);
	
	if((!$con_id) || (!$lr)) {
	
	echo 'No se Pudo Conectar';
	exit;
	} else {
	
	echo 'Conectado Correctamente';
	
	$temp=explode(".",$_FILES['archivo']['name']);
	$source_file=$_FILES['archivo']['tmp_name'];
	$destino="respaldo";
	$nombre=$_FILES['archivo']['name'];
	
	$subio=ftp_put($con_id,$destino.'/'.$nombre,$source_file,FTP_BINARY);
	
	if($subio){
	
	echo "ARCHIVO SUBIDO CORRECTAMENTE";
	//header("Location: ver_archivos.php");
	
	} else {
	
	echo "ERROR EN SUBIDA DEL ARCHIVO";
	
	}

	}
	
?>