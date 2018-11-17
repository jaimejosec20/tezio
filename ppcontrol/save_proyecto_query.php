<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);


	if(ISSET($_POST['save_proyecto'])){
		$tit_proyecto = $_POST['tit_proyecto'];
		$des_proyecto = $_POST['des_proyecto'];
		$obs_proyecto = $_POST['obs_proyecto'];
		$feci_proyecto = $_POST['feci_proyecto'];
		$fecc_proyecto = $_POST['fecc_proyecto'];
		$est_proyecto = '1';
		
		$link->query("INSERT INTO proyecto VALUES('', '$tit_proyecto', '$des_proyecto', '$feci_proyecto', '$fecc_proyecto', '$obs_proyecto', '$est_proyecto')") or die(mysqli_error());
		
		echo'
			<script type = "text/javascript">
				alert("Datos Guardados con Exito");
				window.location = "proyecto.php";
			</script>
		';
	}