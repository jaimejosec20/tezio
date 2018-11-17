<?php

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	$q_book = $link->query("SELECT * FROM recurso WHERE id_recurso = '$_REQUEST[book_id]'") or die(mysqli_error());
	$f_book = $q_book->fetch_array();
?>
<div class = "col-lg-3"></div>
<div class = "col-lg-6">


<form method = "POST" action = "edit_recurso_query.php?recurso_id=<?php echo $f_book['id_recurso']?>" enctype = "multipart/form-data">
								<div class = "form-group">
									<label>Descripción del Recurso:</label>
									<input type = "text" name = "des_recurso" value = "<?php echo $f_book['des_recurso']?>" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Observación del Recurso:</label>
									<input type = "text" name = "obs_recurso" value = "<?php echo $f_book['obs_recurso']?>" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Fecha del Recurso:</label>
									<input type = "date" name = "fec_recurso" value = "<?php echo $f_book['fec_recurso']?>" class = "form-control" required = "required"/>
								</div>
								<div class = "form-group">
									<label>Seleccione Tipo Recurso:</label>
									
					<select class='form-control' name='trecurso' id='trecurso' required>
						<option value="">Seleccione...</option>
							<?php 
							$query_trecurso=mysqli_query($link,"select id_tiprecurso, des_tiprecurso, est_tiprecurso from tiprecurso order by des_tiprecurso");
							while($rw=mysqli_fetch_array($query_trecurso))	{
								?>
							<option value="<?php echo $rw['id_tiprecurso'];?>" <?php if($rw['id_tiprecurso']==$f_book['id_tiprecurso']){ echo "selected";} ?>><?php echo $rw['des_tiprecurso'];?></option>			
								<?php
							}
							?>
					</select>	

								</div>
								<div class = "form-group">
									<button name = "edit_recurso" class = "btn btn-warning"><span class = "glyphicon glyphicon-save"></span> Guardar Cambios</button>
								</div>
							</form>		


</div>