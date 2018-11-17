<!doctype html>
<html lang="es">
<head>

	<meta property="og:title" content="Index - TEZIO ::. Tecnología Interactiva">
	<meta property="og:site_name" content="TEZIO ::. Tecnología Interactiva">
	<meta property="og:url" content="http://www.tezio.com.co">
	<meta property="og:description" content="TEZIO ::. Tecnología Interactiva">
	<meta property="og:type" content="website">
	<meta property="og:image" content="images/l_allnet.png" />
	
	<meta charset="UTF-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>TEZIO ::. Tecnología Interactiva</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
	<link rel="stylesheet" media="all" href="/assets/application-75f34a73c693acc3379782b5c1a27036.css" data-turbolinks-track="true" />

	<!-- CSS -->
	<link href="assets/css/allneat.css" rel="stylesheet" />
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75009044-1', 'auto');
  ga('send', 'pageview');



</script>

<script language="JavaScript" type="text/JavaScript">
function validarafiliado(f){

			var er_email=/(.+\@.+\..+)$/
			var er_contras=/([0-9\s\+\-\_]|[a-z]|[A-Z]|á|é|í|ó|ú|ñ|ü|\.|_)$/									
				
			if(!er_email.test(fcalen.email.value)){
			 alert('Contenido del campo Correo Electrónico no valido')
			 fcalen.email.focus();
			 return false
			}

			if(!er_contras.test(fcalen.contras.value)){
			 alert('Contenido del campo Contraseña no valido')
			 fcalen.contras.focus();
			 return false
			}			

return true
}

</script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	background-color: #232323;
}
.style1 {font-size: 28px}
.style2 {font-size: 16px}
-->
</style></head>

<body class="signup-page">
	<nav class="navbar navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>        		</button>
        		<a href="index.php">
	        	<div class="logo-container">

	                    <img src="images/logoinvertido60.png" alt="Amistad y Amor" data-placement="bottom" data-html="true">				</div>
	      	</a>        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
					<li>
    					<a href="#">
    						<i class="material-icons">person_pin</i> Regístrate    					</a>    				</li>
    				<li>
						<a href="#">
							<i class="material-icons">headset_mic</i> Contactanos						</a>    				</li>
		            <li>
		                <a href="https://twitter.com/" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-twitter"></i>						</a>		            </li>
		            <li>
		                <a href="https://www.facebook.com/" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-facebook-square"></i>						</a>		            </li>
					<li>
		                <a href="https://www.instagram.com/" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-instagram"></i>						</a>		            </li>
        		</ul>
        	</div>
    	</div>
    </nav>



    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('assets/img/citas.jpg'); background-size: cover; background-position: top center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
							<form class="form" method="post" action="pro_usuario.php" name="fcalen" id="fcalen" onSubmit="return validarafiliado(this)">
								<div class="header header-primary text-center">
									<h4>PANEL ADMINISTRADOR</h4>
									<div class="social-line">
										<a href="https://www.facebook.com/" target="_blank" class="btn btn-simple btn-just-icon">
											<i class="fa fa-facebook-square"></i>										</a>
										<a href="https://twitter.com/" target="_blank" class="btn btn-simple btn-just-icon">
											<i class="fa fa-twitter"></i>										</a>
										<a href="https://www.instagram.com/" target="_blank" class="btn btn-simple btn-just-icon">
											<i class="fa fa-instagram"></i>										</a>									</div>
								</div>
								<br>
								<div class="content">



									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>										</span>
										<input name="email" id="email" type="text" class="form-control" placeholder="Ingrese Correo Electrónico...">
									</div>
<p>
								  <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>										</span>
										<input name="contras" id="contras" type="password" placeholder="Ingrese Contraseña..." class="form-control" />
								  </div>

									<!-- If you want to add a checkbox to this form, uncomment this code

									<div class="checkbox">
										<label>
											<input type="checkbox" name="optionsCheckboxes" checked>
											Subscribe to newsletter
										</label>
									</div> -->
								</div>
								<div class="footer text-center">
								<a href="javascript:document.fcalen.submit();" class="btn btn-simple btn-primary btn-lg" onClick="return validarafiliado(this)">ENTRAR</a>
								
							  </div>
							</form>
							
							
						</div>
					</div>
				</div>
			</div>

<br>
<p>
<br>
<p>
<br>
<p>
<br>
<p>
<br>
<p>



			
		</div>

    </div>


<!-- Modal Core -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h9 class="modal-title" id="myModalLabel">QUIENES SOMOS</h9>
	  </div>
	  <div class="modal-body">
		A través de la producción científica y los desarrollos tecnológicos, nos proyectamos hacia la búsqueda del bienestar social mediante la innovación de procesos educativos, culturales y de comunicación más competitivos y eficientes.
		<br>
		<p>
		<br>
		<p>
		
A través de la producción científica y los desarrollos tecnológicos, nos proyectamos hacia la búsqueda del bienestar social mediante la innovación de procesos educativos, culturales y de comunicación más competitivos y eficientes.
		
		<p>
		
		A través de la producción científica y los desarrollos tecnológicos, nos proyectamos hacia la búsqueda del bienestar social mediante la innovación de procesos educativos, culturales y de comunicación más competitivos y eficientes.
	  </div>
	  <div class="modal-footer">
<button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Cerrar</button>
	  </div>
	</div>
  </div>
</div>

<!-- Modal Core 2 -->

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h9 class="modal-title" id="myModalLabel">QUE HACEMOS</h9>
	  </div>
	  <div class="modal-body">
		Somos una empresa de conocimiento proyectado en materia de desarrollo científico, tecnológico y cultural.
En Tezio generamos innovación de alto impacto social.
		<br>
		<p>
		<br>
		<p>
		
Somos una empresa de conocimiento proyectado en materia de desarrollo científico, tecnológico y cultural.
En Tezio generamos innovación de alto impacto social.
		
		<p>
		
		Somos una empresa de conocimiento proyectado en materia de desarrollo científico, tecnológico y cultural.
En Tezio generamos innovación de alto impacto social.
	  </div>
	  <div class="modal-footer">
<button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Cerrar</button>
	  </div>
	</div>
  </div>
</div>


<!-- Modal Core 3 -->

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h9 class="modal-title" id="myModalLabel">POLITICA DE PRIVACIDAD</h9>
	  </div>
	  <div class="modal-body">
		Somos un equipo profesional interdisciplinario experto, talentoso,
apasionado y creativo que diseña soluciones integrales a la medida.
		<br>
		<p>
		<br>
		<p>
		
Somos un equipo profesional interdisciplinario experto, talentoso,
apasionado y creativo que diseña soluciones integrales a la medida.
		
		<p>
		
		Somos un equipo profesional interdisciplinario experto, talentoso,
apasionado y creativo que diseña soluciones integrales a la medida.
	  </div>
	  <div class="modal-footer">
<button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Cerrar</button>
	  </div>
	</div>
  </div>
</div>

<!-- Modal Core 4 -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h9 class="modal-title" id="myModalLabel">CONDICIONES GENERALES</h9>
	  </div>
	  <div class="modal-body">
		Construimos herramientas pedagógicas con características multidimensionales trabajadas desde un modelo de educación abierta para el fomento de la apropiación social.
		<br>
		<p>
		<br>
		<p>
		
Diseñamos e implementamos modelos de transporte eficientes, flexibles y amigables con el medio ambiente.
		
		<p>
		
		En cualquier contexto promovemos y captamos la atención, al ofrecer una herramienta de efectos visuales ideal para combinar contenidos multimediales y objetos reales.
	  </div>
	  <div class="modal-footer">
<button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Cerrar</button>
	  </div>
	</div>
  </div>
</div>


</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ 
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>-->

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

</html>
