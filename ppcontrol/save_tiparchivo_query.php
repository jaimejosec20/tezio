<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);


	if(ISSET($_POST['save_tiparchivo'])){
		$des_tiparchivo = $_POST['des_tiparchivo'];
		$est_tiparchivo = '1';
		
		$link->query("INSERT INTO tiparchivo VALUES('', '$des_tiparchivo', '$est_tiparchivo')") or die(mysqli_error());
		
		echo'
			<script type = "text/javascript">
				alert("Datos Guardados con Exito");
				window.location = "tipo_archivo.php";
			</script>
		';
	}