<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	$q_book = $link->query("SELECT * FROM programa WHERE id_programa = '$_REQUEST[book_id]'") or die(mysqli_error());
	$f_book = $q_book->fetch_array();
?>
<div class = "col-lg-3"></div>
<div class = "col-lg-6">


<form method = "POST" action = "edit_programa_query.php?programa_id=<?php echo $f_book['id_programa']?>" enctype = "multipart/form-data">
								<div class = "form-group">
									<label>Descripción del Programa:</label>
									<input type = "text" name = "des_programa" value = "<?php echo $f_book['des_programa']?>" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Versión del Programa:</label>
									<input type = "text" name = "ver_programa" value = "<?php echo $f_book['ver_programa']?>" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Pagina Web del Programa:</label>
									<input type = "text" name = "pag_programa" value = "<?php echo $f_book['pag_programa']?>" class = "form-control" required = "required"/>
								</div>
								<div class = "form-group">
									<label>Observación del Programa:</label>
									<input type = "text" name = "obs_programa" value = "<?php echo $f_book['obs_programa']?>" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<button name = "edit_programa" class = "btn btn-warning"><span class = "glyphicon glyphicon-save"></span> Guardar Cambios</button>
								</div>
							</form>		


</div>