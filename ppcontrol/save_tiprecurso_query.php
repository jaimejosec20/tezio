<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);


	if(ISSET($_POST['save_tiprecurso'])){
		$des_tiprecurso = $_POST['des_tiprecurso'];
		$est_tiprecurso = '1';
		
		$link->query("INSERT INTO tiprecurso VALUES('', '$des_tiprecurso', '$est_tiprecurso')") or die(mysqli_error());
		
		echo'
			<script type = "text/javascript">
				alert("Datos Guardados con Exito");
				window.location = "tipo_recurso.php";
			</script>
		';
	}