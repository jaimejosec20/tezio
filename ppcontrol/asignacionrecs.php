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
				window.location = "asigrecurso.php";
			</script>
		';
	}else{
		if(!ISSET($_POST['selector'])){
			echo '
				<script type = "text/javascript">
					alert("Debe Seleccionar Recursos");
					window.location = "asigrecurso.php";
				</script>
			';
		}else{
			foreach($_POST['selector'] as $key=>$value){
				$recurso_qty = $value;
				$sproyecto = $_POST['sproyecto'];
				$recurso_id = $_POST['recurso_id'][$key];
				
				$link->query("INSERT INTO recproy VALUES('', '$recurso_id', '$sproyecto', '$recurso_qty')") or die(mysqli_error());
				echo '
					<script type = "text/javascript">
						alert("Datos Procesados");
						window.location = "asigrecurso.php";
					</script>
				';
			}
		}	
	}	