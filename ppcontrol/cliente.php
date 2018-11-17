<?PHP
header('Content-Type: text/html; charset=UTF-8');
session_start();

$_SESSION["idusu"];
$_SESSION["usuar"];
$_SESSION["ema_usu"];
$_SESSION["tipusuar"];

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

$fechaa1=date("Y-m-d");

?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>TEZIO ::. Tecnología Interactiva</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
	
	
	<!--  Nuevo Jaime Carrasquero  -->
	<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
	
	
	
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>


<script language="JavaScript" type="text/JavaScript">
function validarafiliado(f){

			var er_fecha1=/([0-9\s\+\-\_]|[a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|\.|_)$/
				
			if(!er_fecha1.test(fcalen.dc.value)){
			 alert('Contenido del campo Fecha no valido')
			 fcalen.dc.focus();
			 return false
			}			

return true
}

</script>	
	
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
				<img src="images/logoinvertido60.png" alt="Amistad y Amor" data-placement="bottom" data-html="true">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="index.php">
                            
							<img src="images/administradorg.png" width="30" height="30">
                            &nbsp;&nbsp;&nbsp;Informe Experiencias                      </a>                  </li>
                    <li>
                        <a href="proyecto.php">
                            <img src="images/proyectosg.png" width="30" height="30">
                            &nbsp;&nbsp;&nbsp;Proyectos
                        </a>
                    </li>
                    <li class="active">
                        <a href="cliente.php">
                            <img src="images/clientesb.png" width="30" height="30">
                            &nbsp;&nbsp;&nbsp;Clientes
                        </a>
                    </li>
                    <li>
                        <a href="programa.php">
                            <img src="images/programasg.png" width="30" height="30">
                            &nbsp;&nbsp;&nbsp;Programas
                        </a>
                    </li>
                    <li>
                        <a href="archivo.php">
                            <img src="images/archivosg.png" width="30" height="30">
                            &nbsp;&nbsp;&nbsp;Archivos
                        </a>
                    </li>
                    <li>
                        <a href="recurso.php">
                            <img src="images/recursosg.png" width="30" height="30">
                            &nbsp;&nbsp;&nbsp;Recursos
                        </a>
                    </li>
                    <li>
                        <a href="tipo_archivo.php">
                            <img src="images/tipo_archivog.png" width="30" height="30">
                            &nbsp;&nbsp;&nbsp;Tipo de Archivos
                        </a>
                    </li>
                    <li>
                        <a href="tipo_recurso.php">
                            <img src="images/tipo_recursog.png" width="30" height="30">
                            &nbsp;&nbsp;&nbsp;Tipo de Recursos
                        </a>
                    </li>
					
					
					

                    <li>
                        <a href="asigproyecto.php">
                            <img src="images/proyectosg.png" width="30" height="30">
                            &nbsp;&nbsp;&nbsp;Asignación Proyectos
                        </a>
                    </li>
					
                    <li>
                        <a href="asigprograma.php">
                            <img src="images/programasg.png" width="30" height="30">
                            &nbsp;&nbsp;&nbsp;Asignación Programas
                        </a>
                    </li>					

                    <li>
                        <a href="asigarchivo.php">
                            <img src="images/archivosg.png" width="30" height="30">
                            &nbsp;&nbsp;&nbsp;Asignación Archivos
                        </a>
                    </li>

                    <li>
                        <a href="asigrecurso.php">
                            <img src="images/recursosg.png" width="30" height="30">
                            &nbsp;&nbsp;&nbsp;Asignación Recursos
                        </a>
                    </li>
					
					
					

					
                </ul>
            </div>
        </div>
        <div class="main-panel">
		
		
		
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Panel Administrador - <?PHP echo $_SESSION["usuar"]; ?></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Tienes Mensajes Sin Leer</a>
                                    </li>
                                    <li>
                                        <a href="#">Ultimo Registro: Museo Agua</a>
                                    </li>
                                    <li>
                                        <a href="#">Otras Notificaciones</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Busqueda">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
			
			
			
            <div class="content">
                <div class="container-fluid">
                    <div class="row">


						

						

						
						
						
						


                    
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header" data-background-color="blue">
								<table width="100%">
								<tr>
								
								<td>
								


								<table width="100%" border="0">
								<tr>
								<td width="6%">
								<table width="70%">
								<tr>
								<td>
								<img src="images/clienteb1.png">
								</td>
								</tr>
								</table>
								

									
								</td>		
								<td width="94%">
								
								    <h4 class="title">Clientes Museo del Agua</h4>
                                    <p class="category">Información Detallada</p>
									
								</td>
								
								<td align="right">
								
								
								
								</td>
								
								</tr>
								</table>								
								
									
								</td>
								
								<td align="right">
								
								
								
								</td>
								
								</tr>
								</table>

									
                                </div>
                                
								
								
<div class = "col-lg-12 well" style = "margin-top:10px;">
				
					<button id = "add_book" type = "button" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Agregar nuevo</button>
					<button id = "show_book" type = "button" style = "display:none;" class = "btn btn-success"><span class = "glyphicon glyphicon-circle-arrow-left"></span> Volver</button>
					
					
					<div id = "book_table">
						<table id = "table" class = "table table-bordered table-hover">
							<thead>
								<tr>
									<th>Nombre Cliente</th>
									<th>Dirección Cliente</th>
									<th>Correo Cliente</th>
									<th>Teléfono Cliente</th>
									<th>Celular Cliente</th>
									<th>Contacto Cliente</th>
									<th>Acción</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$qbook = $link->query("SELECT id_cliente, nom_cliente, dir_cliente, ema_cliente, tel_cliente, con_cliente, mov_cliente, est_cliente FROM cliente") or die(mysqli_error());
									while($fbook = $qbook->fetch_array()){
										
								?>
								<tr>
									<td><?php echo $fbook['nom_cliente']?></td>
									<td><?php echo $fbook['dir_cliente']?></td>
									<td><?php echo $fbook['ema_cliente']?></td>
									<td><?php echo $fbook['tel_cliente']?></td>
									<td><?php echo $fbook['mov_cliente']?></td>
									<td><?php echo $fbook['con_cliente']?></td>
									<td><a class = "btn btn-danger delbook_id" value = "<?php echo $fbook['id_cliente']?>"><span class = "glyphicon glyphicon-remove"></span> Eliminar</a> <a value = "<?php echo $fbook['id_cliente']?>" class = "btn btn-warning ebook_id"><span class = "glyphicon glyphicon-edit"></span> Editar</a></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
					<div id = "edit_form"></div>
					<div id = "book_form" style = "display:none;">
						<div class = "col-lg-3"></div>
						<div class = "col-lg-6">
							<form method = "POST" action = "save_cliente_query.php" enctype = "multipart/form-data">
								<div class = "form-group">
									<label>Nombre Cliente:</label>
									<input type = "text" name = "nom_cliente" required = "required" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Dirección Cliente:</label>
									<input type = "text" name = "dir_cliente" class = "form-control" />
								</div>
								<div class = "form-group">
									<label>Correo Cliente:</label>
									<input type = "text" name = "ema_cliente" class = "form-control" required = "required"/>
								</div>
								<div class = "form-group">
								
								<table width="100%">
								<tr>
								<td>
									<label>Teléfono Cliente:</label>
									<input type = "text" name = "tel_cliente" required = "required" class = "form-control" />
								
								</td>
																<td>&nbsp;


								
								</td>
								<td>
									<label>Celular Cliente:</label>
								<input type = "text" name = "mov_cliente" required = "required" class = "form-control" />
								
								</td>
								</tr>
								</table>
								
								</div>
								<div class = "form-group">
									<label>Contacto Cliente:</label>
								<input type = "text" name = "con_cliente" required = "required" class = "form-control" />
								</div>

								<div class = "form-group">
									<button name = "save_cliente" class = "btn btn-primary"><span class = "glyphicon glyphicon-save"></span> Enviar</button>
								</div>
							</form>		
						</div>	
					</div>
			</div>								
								
								
								
                            </div>
                        </div>
                    </div>
                </div>
            </div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">

		            <div class="copyright pull-right">
		                &copy; 2018, Todos Los Derechos Reservados <a href="index.php" target="_blank">tezio.com.co</a>
		            </div>
                </div>
            </footer>
        </div>
    </div>
</body>

<!--   Nuevo Jaime Carrasquero   -->



	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
	<script src = "js/sidebar.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#add_book').click(function(){
				$(this).hide();
				$('#show_book').show();
				$('#book_table').slideUp();
				$('#book_form').slideDown();
				$('#show_book').click(function(){
					$(this).hide();
					$('#add_book').show();
					$('#book_table').slideDown();
					$('#book_form').slideUp();
				});
			});
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$result = $('<center><label>Eliminando...</label></center>');
			$('.delbook_id').click(function(){
				$book_id = $(this).attr('value');
				$(this).parents('td').empty().append($result);
				$('.delbook_id').attr('disabled', 'disabled');
				$('.ebook_id').attr('disabled', 'disabled');
				setTimeout(function(){
					window.location = 'delete_cliente.php?book_id=' + $book_id;
				}, 1000);
			});
			$('.ebook_id').click(function(){
				$book_id = $(this).attr('value');
				$('#show_book').show();
				$('#show_book').click(function(){
					$(this).hide();
					$('#edit_form').empty();
					$('#book_table').show();
					$('#book_admin').show();
				});
				$('#book_table').fadeOut();
				$('#add_book').hide();
				$('#edit_form').load('load_cliente.php?book_id=' + $book_id);
			});
		});
	</script>
	
	




</html>