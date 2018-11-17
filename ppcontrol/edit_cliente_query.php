<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	if(ISSET($_POST['edit_cliente'])){
		$nom_cliente = $_POST['nom_cliente'];
		$dir_cliente = $_POST['dir_cliente'];
		$ema_cliente = $_POST['ema_cliente'];
		$tel_cliente = $_POST['tel_cliente'];
		$con_cliente = $_POST['con_cliente'];
		$mov_cliente = $_POST['mov_cliente'];
		$link->query("UPDATE cliente SET nom_cliente = '$nom_cliente', dir_cliente = '$dir_cliente', ema_cliente = '$ema_cliente', tel_cliente = '$tel_cliente', con_cliente = '$con_cliente', mov_cliente = '$mov_cliente' WHERE id_cliente = '$_REQUEST[cliente_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Guardar Cambios");
				window.location = "cliente.php";
			</script>
		';
	}