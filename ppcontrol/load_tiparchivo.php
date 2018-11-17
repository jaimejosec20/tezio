<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	$q_book = $link->query("SELECT * FROM tiparchivo WHERE id_tiparchivo = '$_REQUEST[book_id]'") or die(mysqli_error());
	$f_book = $q_book->fetch_array();
?>
<div class = "col-lg-3"></div>
<div class = "col-lg-6">


<form method = "POST" action = "edit_tiparchivo_query.php?tiparchivo_id=<?php echo $f_book['id_tiparchivo']?>" enctype = "multipart/form-data">
								<div class = "form-group">
									<label>Descripción Tipo de Archivo:</label>
									<input type = "text" name = "des_tiparchivo" value = "<?php echo $f_book['des_tiparchivo']?>" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<button name = "edit_tiparchivo" class = "btn btn-warning"><span class = "glyphicon glyphicon-save"></span> Guardar Cambios</button>
								</div>
							</form>		


</div>