<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	if(ISSET($_POST['edit_archivo'])){
		$des_archivo = $_POST['des_archivo'];
		$obs_archivo = $_POST['obs_archivo'];
		$fec_archivo = $_POST['fec_archivo'];
		$tarchivo = $_POST['tarchivo'];
		$link->query("UPDATE archivo SET des_archivo = '$des_archivo', obs_archivo = '$obs_archivo', fec_archivo = '$fec_archivo', id_tiparchivo = '$tarchivo' WHERE archivo_id = '$_REQUEST[archivo_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Guardar Cambios");
				window.location = "archivo.php";
			</script>
		';
	}