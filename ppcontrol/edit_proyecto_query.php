<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	if(ISSET($_POST['edit_proyecto'])){
		$tit_proyecto = $_POST['tit_proyecto'];
		$des_proyecto = $_POST['des_proyecto'];
		$obs_proyecto = $_POST['obs_proyecto'];
		$feci_proyecto = $_POST['feci_proyecto'];
		$fecc_proyecto = $_POST['fecc_proyecto'];
		$link->query("UPDATE proyecto SET tit_proyecto = '$tit_proyecto', des_proyecto = '$des_proyecto', feci_proyecto = '$feci_proyecto', fecc_proyecto = '$fecc_proyecto', obs_proyecto = '$obs_proyecto' WHERE id_proyecto = '$_REQUEST[proyecto_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Guardar Cambios");
				window.location = "proyecto.php";
			</script>
		';
	}