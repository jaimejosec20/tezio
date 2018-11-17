<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);


	if(ISSET($_POST['save_recurso'])){
		$des_recurso = $_POST['des_recurso'];
		$obs_recurso = $_POST['obs_recurso'];
		$fec_recurso = $_POST['fec_recurso'];
		$trecurso = $_POST['trecurso'];
		$est_recurso = '1';
		
		$link->query("INSERT INTO recurso VALUES('', '$des_recurso', '$obs_recurso', '$fec_recurso', '$trecurso', '$est_recurso')") or die(mysqli_error());
		
		echo'
			<script type = "text/javascript">
				alert("Datos Guardados con Exito");
				window.location = "recurso.php";
			</script>
		';
	}