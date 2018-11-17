<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	$q_book = $link->query("SELECT * FROM archivo WHERE archivo_id = '$_REQUEST[book_id]'") or die(mysqli_error());
	$f_book = $q_book->fetch_array();
?>
<div class = "col-lg-3"></div>
<div class = "col-lg-6">


<form method = "POST" action = "edit_archivo_query.php?archivo_id=<?php echo $f_book['archivo_id']?>" enctype = "multipart/form-data">
								<div class = "form-group">
									<label>Descripción del Archivo:</label>
									<input type = "text" name = "des_archivo" value = "<?php echo $f_book['des_archivo']?>" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Observación del Archivo:</label>
									<input type = "text" name = "obs_archivo" value = "<?php echo $f_book['obs_archivo']?>" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Fecha del Archivo:</label>
									<input type = "date" name = "fec_archivo" value = "<?php echo $f_book['fec_archivo']?>" class = "form-control" required = "required"/>
								</div>
								<div class = "form-group">
									<label>Seleccione Tipo Archivo:</label>
									
									
					<select class='form-control' name='tarchivo' id='tarchivo' required>
						<option value="">Seleccione...</option>
							<?php 
							$query_tarchivo=mysqli_query($link,"select id_tiparchivo, des_tiparchivo, est_tiparchivo from tiparchivo order by des_tiparchivo");
							while($rw=mysqli_fetch_array($query_tarchivo))	{
								?>
							<option value="<?php echo $rw['id_tiparchivo'];?>" <?php if($rw['id_tiparchivo']==$f_book['id_tiparchivo']){ echo "selected";} ?>><?php echo $rw['des_tiparchivo'];?></option>			
								<?php
							}
							?>
					</select>									
									
									
								</div>
								<div class = "form-group">
									<button name = "edit_archivo" class = "btn btn-warning"><span class = "glyphicon glyphicon-save"></span> Guardar Cambios</button>
								</div>
							</form>		


</div>