<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	if(ISSET($_POST['save_programa'])){
		$des_programa = $_POST['des_programa'];
		$ver_programa = $_POST['ver_programa'];
		$pag_programa = $_POST['pag_programa'];
		$obs_programa = $_POST['obs_programa'];
		$est_programa = '1';
		
		$link->query("INSERT INTO programa VALUES('', '$des_programa', '$ver_programa', '$pag_programa', '$obs_programa', '$est_programa')") or die(mysqli_error());
		
		echo'
			<script type = "text/javascript">
				alert("Datos Guardados con Exito");
				window.location = "programa.php";
			</script>
		';
	}