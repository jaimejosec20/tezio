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
                    <li class="active">
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
                    <li>
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
                        <a class="navbar-brand" href="#"> Panel Administrador </a>
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
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Citas Realizadas</p>
                                    <h3 class="title">42/50
                                        
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">done</i>
                                        <a href="#">Mas Detalles...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Registros</p>
                                    <h3 class="title">27
									<small>Afiliados</small>
									</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> Ultimas 24 Horas
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Pendientes</p>
                                    <h3 class="title">8
									<small>Citas</small>
									</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Seguimiento de Citas
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                   <i class="material-icons">forum</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Mensajes</p>
                                    <h3 class="title">+37</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Sin Leer
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="purple">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">AFILIADOS:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#profile" data-toggle="tab">
                                                        <i class="material-icons">favorite_border</i> Hombre
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#messages" data-toggle="tab">
                                                        <i class="material-icons">favorite</i> Mujer
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#settings" data-toggle="tab">
                                                        <i class="material-icons">group</i>  Indistinto
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <i class="material-icons">check_circle</i>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Scarlet Farfan</td>
														<td>España</td>
														<td>38 años</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Ver Detalles" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">search</i>
                                                            </button>

                                                        </td>
                                                    </tr>
                                                    <tr>

                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <i class="material-icons">check_circle</i>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Mariana Guerra </td>
														<td>Italia</td>
														<td>40 años</td>														
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Ver Detalles" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">search</i>
                                                            </button>

                                                        </td>




                                                    </tr>

                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <i class="material-icons">check_circle</i>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Yuri Vargas</td>
														<td>Portugal</td>
														<td>27 años</td>														
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Ver Detalles" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">search</i>
                                                            </button>

                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <i class="material-icons">check_circle</i>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Jesimar Salome</td>
														<td>Mexico</td>
														<td>22 años</td>														
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Ver Detalles" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">search</i>
                                                            </button>

                                                        </td>


                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="messages">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <i class="material-icons">check_circle</i>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Jaime Carrasquero</td>
														<td>Venezuela</td>
														<td>39 años</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Ver Detalles" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">search</i>
                                                            </button>

                                                        </td>
                                                    </tr>
                                                    <tr>

                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <i class="material-icons">check_circle</i>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Luis Fraino </td>
														<td>Colombia</td>
														<td>42 años</td>														
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Ver Detalles" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">search</i>
                                                            </button>

                                                        </td>




                                                    </tr>

                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <i class="material-icons">check_circle</i>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Asdruval Mujica</td>
														<td>Chile</td>
														<td>48 años</td>														
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Ver Detalles" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">search</i>
                                                            </button>

                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <i class="material-icons">check_circle</i>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Dalbin Ramos</td>
														<td>Peru</td>
														<td>31 años</td>														
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Ver Detalles" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">search</i>
                                                            </button>

                                                        </td>


                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="settings">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <i class="material-icons">check_circle</i>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Yore Medina</td>
														<td>Brasil</td>
														<td>18 años</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Ver Detalles" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">search</i>
                                                            </button>

                                                        </td>
                                                    </tr>
                                                    <tr>

                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <i class="material-icons">check_circle</i>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Ernesto Herrera</td>
														<td>Paraguay</td>
														<td>46 años</td>														
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Ver Detalles" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">search</i>
                                                            </button>

                                                        </td>




                                                    </tr>

                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <i class="material-icons">check_circle</i>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Roysmar Guzman</td>
														<td>Argentina</td>
														<td>42 años</td>														
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Ver Detalles" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">search</i>
                                                            </button>

                                                        </td>



                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <i class="material-icons">check_circle</i>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Jesimar Salome</td>
														<td>Mexico</td>
														<td>22 años</td>														
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Ver Detalles" class="btn btn-primary btn-simple btn-xs">
                                                                <i class="material-icons">search</i>
                                                            </button>

                                                        </td>


                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Citas Programadas</h4>
                                    <p class="category">Registros del 04 Octubre, 2017</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>Nro</th>
                                            <th>Nombre</th>
                                            <th>Pais</th>
                                            <th>Ciudad</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Jaime Carrasquero</td>
                                                <td>Venezuela</td>
                                                <td>Valencia</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Nayarith Valderrama</td>
                                                <td>Colombia</td>
                                                <td>Bogota</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Jose Ramirez</td>
                                                <td>Peru</td>
                                                <td>Lima</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Yoleana Lopez</td>
                                                <td>Venezuela</td>
                                                <td>Caracas</td>
                                            </tr>
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