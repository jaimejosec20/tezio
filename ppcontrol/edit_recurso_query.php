<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	if(ISSET($_POST['edit_recurso'])){
		$des_recurso = $_POST['des_recurso'];
		$obs_recurso = $_POST['obs_recurso'];
		$fec_recurso = $_POST['fec_recurso'];
		$trecurso = $_POST['trecurso'];
		$link->query("UPDATE recurso SET des_recurso = '$des_recurso', obs_recurso = '$obs_recurso', fec_recurso = '$fec_recurso', id_tiprecurso = '$trecurso' WHERE id_recurso = '$_REQUEST[recurso_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Guardar Cambios");
				window.location = "recurso.php";
			</script>
		';
	}