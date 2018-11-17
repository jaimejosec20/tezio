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

	if(!ISSET($_POST['scliente'])){	
		echo '
			<script type = "text/javascript">
				alert("Debe Seleccionar un Cliente");
				window.location = "asigproyecto.php";
			</script>
		';
	}else{
		if(!ISSET($_POST['selector'])){
			echo '
				<script type = "text/javascript">
					alert("Debe Seleccionar Proyectos");
					window.location = "asigproyecto.php";
				</script>
			';
		}else{
			foreach($_POST['selector'] as $key=>$value){
				$proyecto_qty = $value;
				$scliente = $_POST['scliente'];
				$proyecto_id = $_POST['proyecto_id'][$key];
				
				$link->query("INSERT INTO proyclien VALUES('', '$proyecto_id', '$scliente', '$proyecto_qty')") or die(mysqli_error());
				echo '
					<script type = "text/javascript">
						alert("Datos Procesados");
						window.location = "asigproyecto.php";
					</script>
				';
			}
		}	
	}	