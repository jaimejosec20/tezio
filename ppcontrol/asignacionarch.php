<?php
session_start();

$_SESSION["idusu"];
$_SESSION["usuar"];
$_SESSION["ema_usu"];
$_SESSION["tipusuar"];

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	if(!ISSET($_POST['sproyecto'])){	
		echo '
			<script type = "text/javascript">
				alert("Debe Seleccionar un Proyecto");
				window.location = "asigarchivo.php";
			</script>
		';
	}else{
		if(!ISSET($_POST['selector'])){
			echo '
				<script type = "text/javascript">
					alert("Debe Seleccionar Archivos");
					window.location = "asigarchivo.php";
				</script>
			';
		}else{
			foreach($_POST['selector'] as $key=>$value){
				$archivo_qty = $value;
				$sproyecto = $_POST['sproyecto'];
				$archivo_id = $_POST['archivo_id'][$key];
				
				$link->query("INSERT INTO archproy VALUES('', '$archivo_id', '$sproyecto', '$archivo_qty')") or die(mysqli_error());
				echo '
					<script type = "text/javascript">
						alert("Datos Procesados");
						window.location = "asigarchivo.php";
					</script>
				';
			}
		}	
	}	