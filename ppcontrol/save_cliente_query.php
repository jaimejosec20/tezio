<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);


	if(ISSET($_POST['save_cliente'])){
		$nom_cliente = $_POST['nom_cliente'];
		$dir_cliente = $_POST['dir_cliente'];
		$ema_cliente = $_POST['ema_cliente'];
		$tel_cliente = $_POST['tel_cliente'];
		$con_cliente = $_POST['con_cliente'];
		$mov_cliente = $_POST['mov_cliente'];
		$est_cliente = '1';
		
		$link->query("INSERT INTO cliente VALUES('', '$nom_cliente', '$dir_cliente', '$ema_cliente', '$tel_cliente', '$con_cliente', '$mov_cliente', '$est_cliente')") or die(mysqli_error());
		
		echo'
			<script type = "text/javascript">
				alert("Datos Guardados con Exito");
				window.location = "cliente.php";
			</script>
		';
	}