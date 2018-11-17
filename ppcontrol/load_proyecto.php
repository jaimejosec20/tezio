<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	$q_book = $link->query("SELECT * FROM proyecto WHERE id_proyecto = '$_REQUEST[book_id]'") or die(mysqli_error());
	$f_book = $q_book->fetch_array();
?>
<div class = "col-lg-3"></div>
<div class = "col-lg-6">


<form method = "POST" action = "edit_proyecto_query.php?proyecto_id=<?php echo $f_book['id_proyecto']?>" enctype = "multipart/form-data">
								<div class = "form-group">
									<label>Titulo del Proyecto:</label>
									<input type = "text" name = "tit_proyecto" value = "<?php echo $f_book['tit_proyecto']?>" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Descripción:</label>
									<input type = "text" name = "des_proyecto" value = "<?php echo $f_book['des_proyecto']?>" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Observación:</label>
									<input type = "text" name = "obs_proyecto" value = "<?php echo $f_book['obs_proyecto']?>" class = "form-control" required = "required"/>
								</div>
								<div class = "form-group">
									<label>Fecha Inicio Proyecto:</label>
									<input type = "date" name = "feci_proyecto" value = "<?php echo $f_book['feci_proyecto']?>" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Fecha Culminación Proyecto:</label>
									<input type = "date" name = "fecc_proyecto" value = "<?php echo $f_book['fecc_proyecto']?>" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<button name = "edit_proyecto" class = "btn btn-warning"><span class = "glyphicon glyphicon-save"></span> Guardar Cambios</button>
								</div>
							</form>		


</div>