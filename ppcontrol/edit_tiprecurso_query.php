<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	if(ISSET($_POST['edit_tiprecurso'])){
		$des_tiprecurso = $_POST['des_tiprecurso'];
		$link->query("UPDATE tiprecurso SET des_tiprecurso = '$des_tiprecurso' WHERE id_tiprecurso = '$_REQUEST[tiprecurso_id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Guardar Cambios");
				window.location = "tipo_recurso.php";
			</script>
		';
	}