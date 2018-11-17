<?
session_start();

$_SESSION["idusu"];
$_SESSION["usuar"];
$_SESSION["ema_usu"];
$_SESSION["tipusuar"];

$var = (string)file_get_contents("visordata.php");
$porc = explode(" ", $var);
$link = mysqli_connect($porc['0'],$porc['1'],$porc['2']);
mysqli_select_db($link,$porc[3]);
$tildes = $link->query("SET NAMES 'utf8'");

date_default_timezone_set("America/Caracas"); 

$_pagi_sql = mysqli_query($link, "select afiliados.id_afiliados, afiliados.nombre_afiliados, afiliados.contras_afiliados, afiliados.sexo_afiliados, afiliados.fechanac_afiliados, afiliados.codigoar_afiliados, afiliados.telefono_afiliados, afiliados.correo_afiliados, afiliados.buscarp_afiliados, afiliados.idpais, afiliados.providencia_afiliados, afiliados.ciudad_afiliados, afiliados.codigopos_afiliados, afiliados.distancia_afiliados, afiliados.fot_afiliados, afiliados.fech_reg, afiliados.hora_reg, afiliados.est_afiliados, afiliados.estadociv_afiliados, afiliados.prefieres_afiliados, afiliados.religion_afiliados, afiliados.estudio_afiliados, afiliados.fumador_afiliados, afiliados.fisico_afiliados, afiliados.deportista_afiliados, afiliados.amistad_afiliados, afiliados.amistad_est, afiliados.compania_afiliados, afiliados.compania_est, afiliados.negocios_afiliados, afiliados.negocios_est, afiliados.trabajo_afiliados, afiliados.trabajo_est, afiliados.aficiones_afiliados, afiliados.aficiones_est, afiliados.amor_afiliados, afiliados.amor_est, afiliados.sexok_afiliados, afiliados.sexok_est, afiliados.parejaideal_afiliados, afiliados.definete_afiliados, paises.pais FROM afiliados Inner Join paises ON paises.idpais = afiliados.idpais order by afiliados.id_afiliados desc");

$_pagi_cuantos = 4; 

$_pagi_nav_num_enlaces = 5;

include("paginatorafil.inc.php"); 

$busreg=mysqli_query($link, "select afiliados.id_afiliados, afiliados.nombre_afiliados, afiliados.contras_afiliados, afiliados.sexo_afiliados, afiliados.fechanac_afiliados, afiliados.codigoar_afiliados, afiliados.telefono_afiliados, afiliados.correo_afiliados, afiliados.buscarp_afiliados, afiliados.idpais, afiliados.providencia_afiliados, afiliados.ciudad_afiliados, afiliados.codigopos_afiliados, afiliados.distancia_afiliados, afiliados.fot_afiliados, afiliados.fech_reg, afiliados.hora_reg, afiliados.est_afiliados, afiliados.estadociv_afiliados, afiliados.prefieres_afiliados, afiliados.religion_afiliados, afiliados.estudio_afiliados, afiliados.fumador_afiliados, afiliados.fisico_afiliados, afiliados.deportista_afiliados, afiliados.amistad_afiliados, afiliados.amistad_est, afiliados.compania_afiliados, afiliados.compania_est, afiliados.negocios_afiliados, afiliados.negocios_est, afiliados.trabajo_afiliados, afiliados.trabajo_est, afiliados.aficiones_afiliados, afiliados.aficiones_est, afiliados.amor_afiliados, afiliados.amor_est, afiliados.sexok_afiliados, afiliados.sexok_est, afiliados.parejaideal_afiliados, afiliados.definete_afiliados, paises.pais FROM afiliados Inner Join paises ON paises.idpais = afiliados.idpais");
$campos=mysqli_fetch_array($busreg);

?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Citas &amp; Citas, c.a ::. Amistad y Amor</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
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
                            <i class="material-icons">dashboard</i>
                            <p>Administrador</p>
                        </a>
                    </li>
                    <li>
                        <a href="profile.php">
                            <i class="material-icons">person</i>
                            <p>Mi Perfil</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="afiliados.php">
                            <i class="material-icons">content_paste</i>
                            <p>Afiliados</p>
                        </a>
                    </li>
                    <li>
                        <a href="mensajes.php">
                            <i class="material-icons">notifications</i>
                            <p>Mensajes Afiliados</p>
                        </a>
                    </li>
                    <li>
                        <a href="galeria.php">
                            <i class="material-icons">bubble_chart</i>
                            <p>Galería</p>
                        </a>
                    </li>
                    <li>
                        <a href="citas.php">
                            <i class="material-icons">library_books</i>
                            <p>Mis Citas</p>
                        </a>
                    </li>
                    <li>
                        <a href="notas.php">
                            <i class="material-icons text-gray">mode_edit</i>
                            <p>Editor Notas</p>
                        </a>
                    </li>
                    <li>
                        <a href="gestion.php">
                            <i class="material-icons">today</i>
                            <p>Gestión</p>
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
                        <a class="navbar-brand" href="#"> Panel Administrador  - <? echo $_SESSION["usuar"]; ?></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
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
                                        <a href="#">Jaime Tienes Mensajes Sin Leer</a>
                                    </li>
                                    <li>
                                        <a href="#">Tienes 5 Nuevas Citas</a>
                                    </li>
                                    <li>
                                        <a href="#">Ultimo Registro: Julian Gil</a>
                                    </li>
                                    <li>
                                        <a href="#">Otras Notificaciones</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
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
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Registros de Afiliados</h4>
                                    <p class="category">Información Detallada de Afiliados</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Teléfono</th>
                                            <th>Pais</th>
                                            <th></th>
                                        </thead>
                                        <tbody>

<? while($rsgedit=mysqli_fetch_array($_pagi_result)){ ?>										
                                            <tr>
                                                <td><? echo $rsgedit[nombre_afiliados]; ?></td>
                                                <td><? echo $rsgedit[correo_afiliados]; ?></td>
                                                <td>+(<? echo $rsgedit[codigoar_afiliados]; ?>) <? echo $rsgedit[telefono_afiliados]; ?></td>
                                                <td><? echo $rsgedit[pais]; ?></td>                                                <td>

		                                    <td class="td-actions text-right">
		                                        <button type="button" rel="tooltip" class="btn btn-info btn-simple">
		                                            <i class="material-icons">person</i>
		                                        </button>
		                                        <button type="button" rel="tooltip" class="btn btn-success btn-simple">
		                                            <i class="material-icons">edit</i>
		                                        </button>
		                                        <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
		                                            <i class="material-icons">close</i>
		                                        </button>
		                                    </td>
												
												</td>
                                            </tr>

                                      <? 

				} ?>
											
                                            <thead>
                                                <th colspan="4">Páginas <? echo"".$_pagi_navegacion.""; ?></td>
                                            </thead>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
		            <nav class="pull-left">
						<ul>
							<li>
								<a href="index.php">
									 Inicio								</a>							</li>
							<li>
								<a href="index.php">
								   Quienes Somos								</a>							</li>
							<li>
								<a href="index.php">
								   Qué Hacemos								</a>							</li>
							<li>
								<a href="index.php">
									Política de Privacidad								</a>							</li>
							<li>
								<a href="index.php">
									Condiciones Generales								</a>							</li>							
						</ul>
		            </nav>
		            <div class="copyright pull-right">
		                &copy; 2017, Todos Los Derechos Reservados <i class="fa fa-heart heart"></i> <a href="index.php" target="_blank">citasycitas.com</a>
		            </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>