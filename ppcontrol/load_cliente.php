<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	$q_book = $link->query("SELECT * FROM cliente WHERE id_cliente = '$_REQUEST[book_id]'") or die(mysqli_error());
	$f_book = $q_book->fetch_array();
?>
<div class = "col-lg-3"></div>
<div class = "col-lg-6">


<form method = "POST" action = "edit_cliente_query.php?cliente_id=<?php echo $f_book['id_cliente']?>" enctype = "multipart/form-data">
								<div class = "form-group">
									<label>Nombre Cliente:</label>
									<input type = "text" name = "nom_cliente" value = "<?php echo $f_book['nom_cliente']?>" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Dirección Cliente:</label>
									<input type = "text" name = "dir_cliente" value = "<?php echo $f_book['dir_cliente']?>" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Correo Cliente:</label>
									<input type = "text" name = "ema_cliente" value = "<?php echo $f_book['ema_cliente']?>" class = "form-control" required = "required"/>
								</div>
								<div class = "form-group">
								
								
								<table width="100%">
								<tr>
								<td>
									<label>Teléfono Cliente:</label>
									<input type = "text" name = "tel_cliente" required = "required" value = "<?php echo $f_book['tel_cliente']?>" class = "form-control" />
								
								</td>
																<td>

&nbsp;
								
								</td>
								<td>
									<label>Celular Cliente:</label>
								<input type = "text" name = "mov_cliente" required = "required" value = "<?php echo $f_book['mov_cliente']?>" class = "form-control" />
								
								</td>
								</tr>
								</table>
								
								
								</div>
								


								

								<div class = "form-group">
									<label>Contacto Cliente:</label>
									<input type = "text" name = "con_cliente" value = "<?php echo $f_book['con_cliente']?>" required = "required" class = "form-control" />
								</div>

								<div class = "form-group">
									<button name = "edit_cliente" class = "btn btn-warning"><span class = "glyphicon glyphicon-save"></span> Guardar Cambios</button>
								</div>
							</form>		


</div>