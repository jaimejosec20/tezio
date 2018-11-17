<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	if(ISSET($_POST['edit_tiparchivo'])){
		$des_tiparchivo = $_POST['des_tiparchivo'];
		$link->query("UPDATE tiparchivo SET des_tiparchivo = '$des_tiparchivo' WHERE id_tiparchivo = '$_REQUEST[tiparchivo_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Guardar Cambios");
				window.location = "tipo_archivo.php";
			</script>
		';
	}