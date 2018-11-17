<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	if(ISSET($_POST['edit_programa'])){
		$des_programa = $_POST['des_programa'];
		$ver_programa = $_POST['ver_programa'];
		$pag_programa = $_POST['pag_programa'];
		$obs_programa = $_POST['obs_programa'];
		$link->query("UPDATE programa SET des_programa = '$des_programa', ver_programa = '$ver_programa', pag_programa = '$pag_programa', obs_programa = '$obs_programa' WHERE id_programa = '$_REQUEST[programa_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Guardar Cambios");
				window.location = "programa.php";
			</script>
		';
	}