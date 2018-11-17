<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	if(ISSET($_POST['save_archivo'])){
		$des_archivo = $_POST['des_archivo'];
		$obs_archivo = $_POST['obs_archivo'];
		$fec_archivo = $_POST['fec_archivo'];
		$tarchivo = $_POST['tarchivo'];
		$est_archivo = '1';
		
		$link->query("INSERT INTO archivo VALUES('', '$des_archivo', '$obs_archivo', '$fec_archivo', '$est_archivo', '$tarchivo')") or die(mysqli_error());
		
		echo'
			<script type = "text/javascript">
				alert("Datos Guardados con Exito");
				window.location = "archivo.php";
			</script>
		';
	}