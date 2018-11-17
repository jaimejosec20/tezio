<?php
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

/*
 * Verificación de los parámetros obligatorios y opcionales.
 *------------------------------------------------------------------------
 */
 if(empty($_pagi_sql)){
	// Si no se definió $_pagi_sql... grave error!
	// Este error se muestra sí o sí (ya que no es un error de mysql)
	die("<b>Error Paginator : </b>No se ha definido la variable \$_pagi_sql");
 }
 
 if(empty($_pagi_cuantos)){
	// Si no se ha especificado la cantidad de registros por página
	// $_pagi_cuantos será por defecto 20
	$_pagi_cuantos = 20;
 }
 
 if(!isset($_pagi_mostrar_errores)){
	// Si no se ha elegido si se mostrará o no errores
	// $_pagi_errores será por defecto true. (se muestran los errores)
	$_pagi_mostrar_errores = true;
 }

 if(!isset($_pagi_conteo_alternativo)){
	// Si no se ha elegido el tipo de conteo
	// Se realiza el conteo dese mySQL con COUNT(*)
	$_pagi_conteo_alternativo = false;
 }
 
 if(!isset($_pagi_separador)){
	// Si no se ha elegido un separador
	// Se toma el separador por defecto.
	$_pagi_separador = " | ";
 }
 
  if(isset($_pagi_nav_estilo)){
	// Si se ha definido un estilo para los enlaces, se genera el atributo "class" para el enlace
	$_pagi_nav_estilo_mod = "class=\"$_pagi_nav_estilo\"";
 }else{
 	// Si no, se utiliza una cadena vacía.
 	$_pagi_nav_estilo_mod = "";
 }
 
 if(!isset($_pagi_nav_anterior)){
	// Si no se ha elegido una cadena para el enlace "siguiente"
	// Se toma la cadena por defecto.
	$_pagi_nav_anterior = "&laquo; Anterior";
 } 
 
 if(!isset($_pagi_nav_siguiente)){
	// Si no se ha elegido una cadena para el enlace "siguiente"
	// Se toma la cadena por defecto.
	$_pagi_nav_siguiente = "Siguiente &raquo;";
 } 

 if(!isset($_pagi_nav_primera)){
	// Si no se ha elegido una cadena para el enlace "primera"
	// Se toma la cadena por defecto.
	$_pagi_nav_primera = "&laquo;&laquo; Primera";
 } 
 
 if(!isset($_pagi_nav_ultima)){
	// Si no se ha elegido una cadena para el enlace "siguiente"
	// Se toma la cadena por defecto.
	$_pagi_nav_ultima = "&Uacute;ltima &raquo;&raquo;";
 } 
 
//------------------------------------------------------------------------


/*
 * Establecimiento de la página actual.
 *------------------------------------------------------------------------
 */
 if (empty($_GET['_pagi_pg'])){
	// Si no se ha hecho click a ninguna página específica
	// O sea si es la primera vez que se ejecuta el script
    	// $_pagi_actual es la pagina actual-->será por defecto la primera.
	$_pagi_actual = 1;
 }else{
	// Si se "pidió" una página específica:
	// La página actual será la que se pidió.
    	$_pagi_actual = $_GET['_pagi_pg'];
 }
//------------------------------------------------------------------------


/*
 * Establecimiento del número de páginas y del total de registros.
 *------------------------------------------------------------------------
 */
 // Contamos el total de registros en la BD (para saber cuántas páginas serán)
 // La forma de hacer ese conteo dependerá de la variable $_pagi_conteo_alternativo
 if($_pagi_conteo_alternativo == false){//1.- ESTA ORIGINAL
 	//$_pagi_sqlConta = eregi_replace("select[[:space:]](.*)[[:space:]]from", "SELECT COUNT(*) FROM", $_pagi_sql);
	//$_pagi_sqlConta = preg_replace("select[[:space:]](.*)[[:space:]]from", "SELECT COUNT(*) FROM", $_pagi_sql);
	$_pagi_sqlConta = "select COUNT(*) from fotafiliados order by id_afiliados desc";//2.- ESTA FUE CAMBIADA	
	$_pagi_result2 = mysqli_query($link, $_pagi_sqlConta);//2.- ESTA FUE CAMBIADA PERO MANTENIENDO LA FUNCION
	//$_pagi_result2 = mysqli_query($_pagi_sqlConta);
	// Si ocurrió error y mostrar errores está activado
 	if($_pagi_result2 == false && $_pagi_mostrar_errores == true){
		die (" Error en la consulta de conteo de registros: $_pagi_sqlConta. Mysql dijo: <b>".mysqli_error()."</b>");
 	}
 	//$_pagi_totalReg = mysql_result($_pagi_result2,0,0);//total de registros

function mysqli_result($res,$row=0,$col=0){ 
    $numrows = mysqli_num_rows($res); 
    if ($numrows && $row <= ($numrows-1) && $row >=0){
        mysqli_data_seek($res,$row);
        $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
        if (isset($resrow[$col])){
            return $resrow[$col];
        }
    }
    return false;
}
	
    $_pagi_totalReg = mysqli_result($_pagi_result2,0,0);//total de registros
	
	
 }else{
    $_pagi_result3 = mysqli_query($link, $_pagi_sql);
	//$_pagi_result3 = mysql_query($_pagi_sql);
	// Si ocurrió error y mostrar errores está activado
 	if($_pagi_result3 == false && $_pagi_mostrar_errores == true){
		die (" Error en la consulta de conteo alternativo de registros: $_pagi_sql. Mysql dijo: <b>".mysqli_error()."</b>");
 	}
	$_pagi_totalReg = mysqli_num_rows($_pagi_result3);
 }
 // Calculamos el número de páginas (saldrá un decimal)
 // con ceil() redondeamos y $_pagi_totalPags será el número total (entero) de páginas que tendremos
 $_pagi_totalPags = ceil($_pagi_totalReg / $_pagi_cuantos);

//------------------------------------------------------------------------


/*
 * Propagación de variables por el URL.
 *------------------------------------------------------------------------
 */
 // La idea es pasar también en los enlaces las variables hayan llegado por url.
 $_pagi_enlace = $_SERVER['PHP_SELF'];
 $_pagi_query_string = "?";
 
 if(!isset($_pagi_propagar)){
 	//Si no se definió qué variables propagar, se propagará todo el $_GET (por compatibilidad con versiones anteriores)
	//Perdón... no todo el $_GET. Todo menos la variable _pagi_pg
	if (isset($_GET['_pagi_pg'])) unset($_GET['_pagi_pg']); // Eliminamos esa variable del $_GET
	$_pagi_propagar = array_keys($_GET);
 }elseif(!is_array($_pagi_propagar)){
	// si $_pagi_propagar no es un array... grave error!
	die("<b>Error Paginator : </b>La variable \$_pagi_propagar debe ser un array");
 }
 // Este foreach está tomado de la Clase Paginado de webstudio
 // (http://www.forosdelweb.com/showthread.php?t=65528)
 foreach($_pagi_propagar as $var){
 	if(isset($GLOBALS[$var])){
		// Si la variable es global al script
		$_pagi_query_string.= $var."=".$GLOBALS[$var]."&";
	}elseif(isset($_REQUEST[$var])){
		// Si no es global (o register globals está en OFF)
		$_pagi_query_string.= $var."=".$_REQUEST[$var]."&";
	}
 }

 // Añadimos el query string a la url.
 $_pagi_enlace .= $_pagi_query_string;
 
//------------------------------------------------------------------------


/*
 * Generación de los enlaces de paginación.
 *------------------------------------------------------------------------
 */
 // La variable $_pagi_navegacion contendrá los enlaces a las páginas.
 $_pagi_navegacion_temporal = array();
 if ($_pagi_actual != 1){
	// Si no estamos en la página 1. Ponemos el enlace "primera"
	$_pagi_url = 1; //será el número de página al que enlazamos
	$_pagi_navegacion_temporal[] = "<a ".$_pagi_nav_estilo_mod." href='".$_pagi_enlace."_pagi_pg=".$_pagi_url."'>$_pagi_nav_primera</a>";

	// Si no estamos en la página 1. Ponemos el enlace "anterior"
	$_pagi_url = $_pagi_actual - 1; //será el número de página al que enlazamos
	$_pagi_navegacion_temporal[] = "<a ".$_pagi_nav_estilo_mod." href='".$_pagi_enlace."_pagi_pg=".$_pagi_url."'>$_pagi_nav_anterior</a>";
 }
 
 // La variable $_pagi_nav_num_enlaces sirve para definir cuántos enlaces con 
 // números de página se mostrarán como máximo.
 // Ojo: siempre se mostrará un número impar de enlaces. Más info en la documentación.
 
 if(!isset($_pagi_nav_num_enlaces)){
	// Si no se definió la variable $_pagi_nav_num_enlaces
	// Se asume que se mostrarán todos los números de página en los enlaces.
	$_pagi_nav_desde = 1;//Desde la primera
	$_pagi_nav_hasta = $_pagi_totalPags;//hasta la última
 }else{
	// Si se definió la variable $_pagi_nav_num_enlaces
	// Calculamos el intervalo para restar y sumar a partir de la página actual
	$_pagi_nav_intervalo = ceil($_pagi_nav_num_enlaces/2) - 1;
	
	// Calculamos desde qué número de página se mostrará
	$_pagi_nav_desde = $_pagi_actual - $_pagi_nav_intervalo;
	// Calculamos hasta qué número de página se mostrará
	$_pagi_nav_hasta = $_pagi_actual + $_pagi_nav_intervalo;
	
	// Ajustamos los valores anteriores en caso sean resultados no válidos
	
	// Si $_pagi_nav_desde es un número negativo
	if($_pagi_nav_desde < 1){
		// Le sumamos la cantidad sobrante al final para mantener el número de enlaces que se quiere mostrar. 
		$_pagi_nav_hasta -= ($_pagi_nav_desde - 1);
		// Establecemos $_pagi_nav_desde como 1.
		$_pagi_nav_desde = 1;
	}
	// Si $_pagi_nav_hasta es un número mayor que el total de páginas
	if($_pagi_nav_hasta > $_pagi_totalPags){
		// Le restamos la cantidad excedida al comienzo para mantener el número de enlaces que se quiere mostrar.
		$_pagi_nav_desde -= ($_pagi_nav_hasta - $_pagi_totalPags);
		// Establecemos $_pagi_nav_hasta como el total de páginas.
		$_pagi_nav_hasta = $_pagi_totalPags;
		// Hacemos el último ajuste verificando que al cambiar $_pagi_nav_desde no haya quedado con un valor no válido.
		if($_pagi_nav_desde < 1){
			$_pagi_nav_desde = 1;
		}
	}
 }

 for ($_pagi_i = $_pagi_nav_desde; $_pagi_i<=$_pagi_nav_hasta; $_pagi_i++){//Desde página 1 hasta última página ($_pagi_totalPags)
	if ($_pagi_i == $_pagi_actual) {
		// Si el número de página es la actual ($_pagi_actual). Se escribe el número, pero sin enlace y en negrita.
		$_pagi_navegacion_temporal[] = "<span ".$_pagi_nav_estilo_mod.">$_pagi_i</span>";
	}else{
		// Si es cualquier otro. Se escibe el enlace a dicho número de página.
		$_pagi_navegacion_temporal[] = "<a ".$_pagi_nav_estilo_mod." href='".$_pagi_enlace."_pagi_pg=".$_pagi_i."'>".$_pagi_i."</a>";
	}
 }

 if ($_pagi_actual < $_pagi_totalPags){
	// Si no estamos en la última página. Ponemos el enlace "Siguiente"
	$_pagi_url = $_pagi_actual + 1; //será el número de página al que enlazamos
	$_pagi_navegacion_temporal[] = "<a ".$_pagi_nav_estilo_mod." href='".$_pagi_enlace."_pagi_pg=".$_pagi_url."'>$_pagi_nav_siguiente</a>";

	// Si no estamos en la última página. Ponemos el enlace "Última"
	$_pagi_url = $_pagi_totalPags; //será el número de página al que enlazamos
	$_pagi_navegacion_temporal[] = "<a ".$_pagi_nav_estilo_mod." href='".$_pagi_enlace."_pagi_pg=".$_pagi_url."'>$_pagi_nav_ultima</a>";
 }
 $_pagi_navegacion = implode($_pagi_separador, $_pagi_navegacion_temporal);

//------------------------------------------------------------------------


/*
 * Obtención de los registros que se mostrarán en la página actual.
 *------------------------------------------------------------------------
 */
 // Calculamos desde qué registro se mostrará en esta página
 // Recordemos que el conteo empieza desde CERO.
 $_pagi_inicial = ($_pagi_actual-1) * $_pagi_cuantos;
 
 // Consulta SQL. Devuelve $cantidad registros empezando desde $_pagi_inicial
 //$_pagi_sqlLim = $_pagi_sql." LIMIT $_pagi_inicial,$_pagi_cuantos";
 $_pagi_sqlLim = "select afiliados.nombre_afiliados, afiliados.codigoar_afiliados, afiliados.telefono_afiliados, afiliados.correo_afiliados, paises.pais FROM fotafiliados Inner Join afiliados ON afiliados.id_afiliados = fotafiliados.id_afiliados Inner Join paises ON paises.idpais = afiliados.idpais GROUP BY fotafiliados.id_afiliados order by fotafiliados.id_afiliados desc LIMIT $_pagi_inicial,$_pagi_cuantos";
 
 //$_pagi_sqlLim = "select siniestro.id_siniestro, siniestro.num_siniestro, siniestro.fec_siniestro, siniestro.ced_afiliado, siniestro.nom_familiar, siniestro.id_funeraria, siniestro.mont_siniestro, siniestro.cid_siniestro, siniestro.des_siniestro, siniestro.cksnc, siniestro.ckfosa, siniestro.montsnc, siniestro.montfosa, siniestro.obs_siniestro, siniestro.act_afiliado, siniestro.est_crem, siniestro.montcrem, siniestro.num_factura, siniestro.id_asesor, siniestro.tel_titular, siniestro.enc_servicio, siniestro.lug_servicio, siniestro.lla_servicio, siniestro.hor_servicio, siniestro.inh_servicio, siniestro.cre_servicio, siniestro.rec_servicio, siniestro.por_servicio, siniestro.can_servicio, siniestro.id_cmuerte, siniestro.id_estado, siniestro.id_ciudad, siniestro.numsin, siniestro.messin, siniestro.anosin, siniestro.cemsin, siniestro.modsin from siniestro order by siniestro.num_siniestro desc LIMIT $_pagi_inicial,$_pagi_cuantos";
  
 $_pagi_result = mysqli_query($link, $_pagi_sqlLim);
 // Si ocurrió error y mostrar errores está activado
 if($_pagi_result == false && $_pagi_mostrar_errores == true){
 	die ("Error en la consulta limitada: $_pagi_sqlLim. Mysql dijo: <b>".mysql_error()."</b>");
 }

//------------------------------------------------------------------------


/*
 * Generación de la información sobre los registros mostrados.
 *------------------------------------------------------------------------
 */
 // Número del primer registro de la página actual
 $_pagi_desde = $_pagi_inicial + 1;
 
 // Número del último registro de la página actual
 $_pagi_hasta = $_pagi_inicial + $_pagi_cuantos;
 if($_pagi_hasta > $_pagi_totalReg){
 	// Si estamos en la última página
	// El ultimo registro de la página actual será igual al número de registros.
 	$_pagi_hasta = $_pagi_totalReg;
 }
 
 $_pagi_info = "desde el $_pagi_desde hasta el $_pagi_hasta de un total de $_pagi_totalReg";

//------------------------------------------------------------------------


/**
 * Variables que quedan disponibles después de incluir el script vía include():
 * ------------------------------------------------------------------------
 
 * $_pagi_result		Identificador del resultado de la consulta a la BD para los registros de la página actual. 
 				Listo para ser "pasado" por una función como mysql_fetch_row(), mysql_fetch_array(), 
				mysql_fetch_assoc(), etc.
							
 * $_pagi_navegacion		Cadena que contiene la barra de navegación con los enlaces a las diferentes páginas.
 				Ejemplo: "<<primera | <anterior | 1 | 2 | 3 | 4 | siguiente> | última>>".
							
 * $_pagi_info			Cadena que contiene información sobre los registros de la página actual.
 				Ejemplo: "desde el 16 hasta el 30 de un total de 123";				

*/
?>