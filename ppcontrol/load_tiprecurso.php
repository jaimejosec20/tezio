<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	$q_book = $link->query("SELECT * FROM tiprecurso WHERE id_tiprecurso = '$_REQUEST[book_id]'") or die(mysqli_error());
	$f_book = $q_book->fetch_array();
?>
<div class = "col-lg-3"></div>
<div class = "col-lg-6">


<form method = "POST" action = "edit_tiprecurso_query.php?tiprecurso_id=<?php echo $f_book['id_tiprecurso']?>" enctype = "multipart/form-data">
								<div class = "form-group">
									<label>Descripción Tipo de Recurso:</label>
									<input type = "text" name = "des_tiprecurso" value = "<?php echo $f_book['des_tiprecurso']?>" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<button name = "edit_tiprecurso" class = "btn btn-warning"><span class = "glyphicon glyphicon-save"></span> Guardar Cambios</button>
								</div>
							</form>		


</div>