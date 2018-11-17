<?php
header("Content-Type: text/html;charset=utf-8");
require('../fpdf.php');


$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);



//******************MES Y AÑO********************************************

$originalDate = $_GET["fechaa1"];
$mes2 = date("m", strtotime($originalDate));

if ($mes2=="01") {
$mes1="ENERO";
}
if ($mes2=="02") {
$mes1="FEBRERO";
}
if ($mes2=="03") {
$mes1="MARZO";
}
if ($mes2=="04") {
$mes1="ABRIL";
}
if ($mes2=="05") {
$mes1="MAYO";
}
if ($mes2=="06") {
$mes1="JUNIO";
}
if ($mes2=="07") {
$mes1="JULIO";
}
if ($mes2=="08") {
$mes1="AGOSTO";
}
if ($mes2=="09") {
$mes1="SEPTIEMBRE";
}
if ($mes2=="10") {
$mes1="OCTUBRE";
}
if ($mes2=="11") {
$mes1="NOVIEMBRE";
}
if ($mes2=="12") {
$mes1="DICIEMBRE";
}

$ano1 = date("Y", strtotime($originalDate));

//***********************************************************************


//$fechaa='2018-06-18';
$fechaa=$_GET["fechaa1"];

//CICLO DEL AGUA LUPA****************************************************

$result1 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa' and desexp='CICLO DEL AGUA LUPA'");
$camp1=mysqli_fetch_array($result1);

$desexp1=$camp1["desexp"];
$descr1exp1=$camp1["descr1exp"];
$descr2exp1=$camp1["descr2exp"];
$descr3exp1=$camp1["descr3exp"];
$descr4exp1=$camp1["descr4exp"];
$check1exp1=$camp1["check1exp"];
$check2exp1=$camp1["check2exp"];
$check3exp1=$camp1["check3exp"];
$check4exp1=$camp1["check4exp"];
$strobsexp1=$camp1["strobsexp"];
$strdisexp1=$camp1["strdisexp"];

$originalDate = $_GET["fechaa1"];
$fechafot1 = date("Ymd", strtotime($originalDate));

//$fechafot1=date("Ymd");

//BUSCAR IMAGENES ANTES - Después EN EL DIRECTORIO*********************

$ruta1='..\\..\\images\\misFotos\\';
$dir1=dir($ruta1);      
$buscar1 = "/".$fechafot1."011/"; 

while ($elemento1 = $dir1->read()) {

    if (($elemento1 != '.') && ($elemento1 != '..')) { 
        if (preg_match($buscar1, $elemento1) && is_file($ruta1.$elemento1)) { 
            $archivo1 = $elemento1;
        } 
		} else {	 
		    $archivo1 = "no_imagen.jpg";
    }       
}    

$ruta12='..\\..\\images\\misFotos\\'; 
$dir12=dir($ruta12);      
$buscar12 = "/".$fechafot1."012/"; 

while ($elemento12 = $dir12->read()) {

    if (($elemento12 != '.') && ($elemento12 != '..')) { 
        if (preg_match($buscar12, $elemento12) && is_file($ruta12.$elemento12)) { 
            $archivo12 = $elemento12; 
        }
		} else {	 
		 $archivo12 = "no_imagen.jpg";	 
    }       
}    


//*********************************************************************


//CICLO DEL AGUA HERRAMIENTAS******************************************

$result2 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa' and desexp='CICLO DEL AGUA HERRAMIENTAS'");
$camp2=mysqli_fetch_array($result2);

$desexp2=$camp2["desexp"];
$descr1exp2=$camp2["descr1exp"];
$descr2exp2=$camp2["descr2exp"];
$descr3exp2=$camp2["descr3exp"];
$descr4exp2=$camp2["descr4exp"];
$check1exp2=$camp2["check1exp"];
$check2exp2=$camp2["check2exp"];
$check3exp2=$camp2["check3exp"];
$check4exp2=$camp2["check4exp"];
$strobsexp2=$camp2["strobsexp"];
$strdisexp2=$camp2["strdisexp"];

$originalDate = $_GET["fechaa1"];
$fechafot2 = date("Ymd", strtotime($originalDate));

//$fechafot2=date("Ymd");

//BUSCAR IMAGENES ANTES - Después EN EL DIRECTORIO*********************

$ruta2='..\\..\\images\\misFotos\\';
$dir2=dir($ruta2);      
$buscar2 = "/".$fechafot2."021/"; 

while ($elemento2 = $dir2->read()) {

    if (($elemento2 != '.') && ($elemento2 != '..')) { 
        if (preg_match($buscar2, $elemento2) && is_file($ruta2.$elemento2)) { 
            $archivo2 = $elemento2;
        } 
		} else {	 
		    $archivo2 = "no_imagen.jpg";
    }       
}    

$ruta22='..\\..\\images\\misFotos\\'; 
$dir22=dir($ruta22);      
$buscar22 = "/".$fechafot2."022/"; 

while ($elemento22 = $dir22->read()) {

    if (($elemento22 != '.') && ($elemento22 != '..')) { 
        if (preg_match($buscar22, $elemento22) && is_file($ruta22.$elemento22)) { 
            $archivo22 = $elemento22; 
        }
		} else {	 
		 $archivo22 = "no_imagen.jpg";	 
    }       
}    


//*********************************************************************



//VERTIENTES HIDROGRAFICAS******************************************

$result3 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa' and desexp='VERTIENTES HIDROGRAFICAS'");
$camp3=mysqli_fetch_array($result3);

$desexp3=$camp3["desexp"];
$descr1exp3=$camp3["descr1exp"];
$descr2exp3=$camp3["descr2exp"];
$descr3exp3=$camp3["descr3exp"];
$descr4exp3=$camp3["descr4exp"];
$check1exp3=$camp3["check1exp"];
$check2exp3=$camp3["check2exp"];
$check3exp3=$camp3["check3exp"];
$check4exp3=$camp3["check4exp"];
$strobsexp3=$camp3["strobsexp"];
$strdisexp3=$camp3["strdisexp"];

$originalDate = $_GET["fechaa1"];
$fechafot3 = date("Ymd", strtotime($originalDate));
//$fechafot3=date("Ymd");

//BUSCAR IMAGENES ANTES - Después EN EL DIRECTORIO*********************

$ruta3='..\\..\\images\\misFotos\\';
$dir3=dir($ruta3);      
$buscar3 = "/".$fechafot3."031/"; 

while ($elemento3 = $dir3->read()) {

    if (($elemento3 != '.') && ($elemento3 != '..')) { 
        if (preg_match($buscar3, $elemento3) && is_file($ruta3.$elemento3)) { 
            $archivo3 = $elemento3;
        } 
		} else {	 
		    $archivo3 = "no_imagen.jpg";
    }       
}    

$ruta32='..\\..\\images\\misFotos\\'; 
$dir32=dir($ruta32);      
$buscar32 = "/".$fechafot3."032/"; 

while ($elemento32 = $dir32->read()) {

    if (($elemento32 != '.') && ($elemento32 != '..')) { 
        if (preg_match($buscar32, $elemento32) && is_file($ruta32.$elemento32)) { 
            $archivo32 = $elemento32; 
        }
		} else {	 
		 $archivo32 = "no_imagen.jpg";	 
    }       
}    


//*********************************************************************



//VERTEDEROS***********************************************************

$result4 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa' and desexp='VERTEDEROS'");
$camp4=mysqli_fetch_array($result4);

$desexp4=$camp4["desexp"];
$descr1exp4=$camp4["descr1exp"];
$descr2exp4=$camp4["descr2exp"];
$descr3exp4=$camp4["descr3exp"];
$descr4exp4=$camp4["descr4exp"];
$check1exp4=$camp4["check1exp"];
$check2exp4=$camp4["check2exp"];
$check3exp4=$camp4["check3exp"];
$check4exp4=$camp4["check4exp"];
$strobsexp4=$camp4["strobsexp"];
$strdisexp4=$camp4["strdisexp"];

$originalDate = $_GET["fechaa1"];
$fechafot4 = date("Ymd", strtotime($originalDate));
//$fechafot4=date("Ymd");

//BUSCAR IMAGENES ANTES - Después EN EL DIRECTORIO*********************

$ruta4='..\\..\\images\\misFotos\\';
$dir4=dir($ruta4);      
$buscar4 = "/".$fechafot4."041/"; 

while ($elemento4 = $dir4->read()) {

    if (($elemento4 != '.') && ($elemento4 != '..')) { 
        if (preg_match($buscar4, $elemento4) && is_file($ruta4.$elemento4)) { 
            $archivo4 = $elemento4;
        } 
		} else {	 
		    $archivo4 = "no_imagen.jpg";
    }       
}    

$ruta42='..\\..\\images\\misFotos\\'; 
$dir42=dir($ruta42);      
$buscar42 = "/".$fechafot4."042/"; 

while ($elemento42 = $dir42->read()) {

    if (($elemento42 != '.') && ($elemento42 != '..')) { 
        if (preg_match($buscar42, $elemento42) && is_file($ruta42.$elemento42)) { 
            $archivo42 = $elemento42; 
        }
		} else {	 
		 $archivo42 = "no_imagen.jpg";	 
    }       
}    


//*********************************************************************



//SET DE NOTICIAS******************************************************

$result5 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa' and desexp='SET DE NOTICIAS'");
$camp5=mysqli_fetch_array($result5);

$desexp5=$camp5["desexp"];
$descr1exp5=$camp5["descr1exp"];
$descr2exp5=$camp5["descr2exp"];
$descr3exp5=$camp5["descr3exp"];
$descr4exp5=$camp5["descr4exp"];
$check1exp5=$camp5["check1exp"];
$check2exp5=$camp5["check2exp"];
$check3exp5=$camp5["check3exp"];
$check4exp5=$camp5["check4exp"];
$strobsexp5=$camp5["strobsexp"];
$strdisexp5=$camp5["strdisexp"];

$originalDate = $_GET["fechaa1"];
$fechafot5 = date("Ymd", strtotime($originalDate));
//$fechafot5=date("Ymd");

//BUSCAR IMAGENES ANTES - Después EN EL DIRECTORIO*********************

$ruta5='..\\..\\images\\misFotos\\';
$dir5=dir($ruta5);      
$buscar5 = "/".$fechafot5."051/"; 

while ($elemento5 = $dir5->read()) {

    if (($elemento5 != '.') && ($elemento5 != '..')) { 
        if (preg_match($buscar5, $elemento5) && is_file($ruta5.$elemento5)) { 
            $archivo5 = $elemento5;
        } 
		} else {	 
		    $archivo5 = "no_imagen.jpg";
    }       
}    

$ruta52='..\\..\\images\\misFotos\\'; 
$dir52=dir($ruta52);      
$buscar52 = "/".$fechafot5."052/"; 

while ($elemento52 = $dir52->read()) {

    if (($elemento52 != '.') && ($elemento52 != '..')) { 
        if (preg_match($buscar52, $elemento52) && is_file($ruta52.$elemento52)) { 
            $archivo52 = $elemento52; 
        }
		} else {	 
		 $archivo52 = "no_imagen.jpg";	 
    }       
}    


//*********************************************************************


//PISO DEL AGUA********************************************************

$result6 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa' and desexp='PISO DEL AGUA'");
$camp6=mysqli_fetch_array($result6);

$desexp6=$camp6["desexp"];
$descr1exp6=$camp6["descr1exp"];
$descr2exp6=$camp6["descr2exp"];
$descr3exp6=$camp6["descr3exp"];
$descr4exp6=$camp6["descr4exp"];
$check1exp6=$camp6["check1exp"];
$check2exp6=$camp6["check2exp"];
$check3exp6=$camp6["check3exp"];
$check4exp6=$camp6["check4exp"];
$strobsexp6=$camp6["strobsexp"];
$strdisexp6=$camp6["strdisexp"];

$originalDate = $_GET["fechaa1"];
$fechafot6 = date("Ymd", strtotime($originalDate));
//$fechafot6=date("Ymd");

//BUSCAR IMAGENES ANTES - Después EN EL DIRECTORIO*********************

$ruta6='..\\..\\images\\misFotos\\';
$dir6=dir($ruta6);      
$buscar6 = "/".$fechafot6."061/"; 

while ($elemento6 = $dir6->read()) {

    if (($elemento6 != '.') && ($elemento6 != '..')) { 
        if (preg_match($buscar6, $elemento6) && is_file($ruta6.$elemento6)) { 
            $archivo6 = $elemento6;
        } 
		} else {	 
		    $archivo6 = "no_imagen.jpg";
    }       
}    

$ruta62='..\\..\\images\\misFotos\\'; 
$dir62=dir($ruta62);      
$buscar62 = "/".$fechafot6."062/"; 

while ($elemento62 = $dir62->read()) {

    if (($elemento62 != '.') && ($elemento62 != '..')) { 
        if (preg_match($buscar62, $elemento62) && is_file($ruta62.$elemento62)) { 
            $archivo62 = $elemento62; 
        }
		} else {	 
		 $archivo62 = "no_imagen.jpg";	 
    }       
}    


//*********************************************************************


//HUELLA HIDRICA*******************************************************

$result7 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa' and desexp='HUELLA HIDRICA'");
$camp7=mysqli_fetch_array($result7);

$desexp7=$camp7["desexp"];
$descr1exp7=$camp7["descr1exp"];
$descr2exp7=$camp7["descr2exp"];
$descr3exp7=$camp7["descr3exp"];
$descr4exp7=$camp7["descr4exp"];
$check1exp7=$camp7["check1exp"];
$check2exp7=$camp7["check2exp"];
$check3exp7=$camp7["check3exp"];
$check4exp7=$camp7["check4exp"];
$strobsexp7=$camp7["strobsexp"];
$strdisexp7=$camp7["strdisexp"];

$originalDate = $_GET["fechaa1"];
$fechafot7 = date("Ymd", strtotime($originalDate));
//$fechafot7=date("Ymd");

//BUSCAR IMAGENES ANTES - Después EN EL DIRECTORIO*********************

$ruta7='..\\..\\images\\misFotos\\';
$dir7=dir($ruta7);      
$buscar7 = "/".$fechafot7."071/"; 

while ($elemento7 = $dir7->read()) {

    if (($elemento7 != '.') && ($elemento7 != '..')) { 
        if (preg_match($buscar7, $elemento7) && is_file($ruta7.$elemento7)) { 
            $archivo7 = $elemento7;
        } 
		} else {	 
		    $archivo7 = "no_imagen.jpg";
    }       
}    

$ruta72='..\\..\\images\\misFotos\\'; 
$dir72=dir($ruta72);      
$buscar72 = "/".$fechafot7."072/"; 

while ($elemento72 = $dir72->read()) {

    if (($elemento72 != '.') && ($elemento72 != '..')) { 
        if (preg_match($buscar72, $elemento72) && is_file($ruta72.$elemento72)) { 
            $archivo72 = $elemento72; 
        }
		} else {	 
		 $archivo72 = "no_imagen.jpg";	 
    }       
}    


//*********************************************************************



//BIO-ESFERA*******************************************************

$result8 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa' and desexp='BIO-ESFERA'");
$camp8=mysqli_fetch_array($result8);

$desexp8=$camp8["desexp"];
$descr1exp8=$camp8["descr1exp"];
$descr2exp8=$camp8["descr2exp"];
$descr3exp8=$camp8["descr3exp"];
$descr4exp8=$camp8["descr4exp"];
$check1exp8=$camp8["check1exp"];
$check2exp8=$camp8["check2exp"];
$check3exp8=$camp8["check3exp"];
$check4exp8=$camp8["check4exp"];
$strobsexp8=$camp8["strobsexp"];
$strdisexp8=$camp8["strdisexp"];

$originalDate = $_GET["fechaa1"];
$fechafot8 = date("Ymd", strtotime($originalDate));
//$fechafot8=date("Ymd");

//BUSCAR IMAGENES ANTES - Después EN EL DIRECTORIO*********************

$ruta8='..\\..\\images\\misFotos\\';
$dir8=dir($ruta8);      
$buscar8 = "/".$fechafot8."081/"; 

while ($elemento8 = $dir8->read()) {

    if (($elemento8 != '.') && ($elemento8 != '..')) { 
        if (preg_match($buscar8, $elemento8) && is_file($ruta8.$elemento8)) { 
            $archivo8 = $elemento8;
        } 
		} else {	 
		    $archivo8 = "no_imagen.jpg";
    }       
}    

$ruta82='..\\..\\images\\misFotos\\'; 
$dir82=dir($ruta82);      
$buscar82 = "/".$fechafot8."082/"; 

while ($elemento82 = $dir82->read()) {

    if (($elemento82 != '.') && ($elemento82 != '..')) { 
        if (preg_match($buscar82, $elemento82) && is_file($ruta82.$elemento82)) { 
            $archivo82 = $elemento82; 
        }
		} else {	 
		 $archivo82 = "no_imagen.jpg";	 
    }       
}    


//*********************************************************************



//OBJETOS SUMERGIDOS***************************************************

$result9 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa' and desexp='OBJETOS SUMERGIDOS'");
$camp9=mysqli_fetch_array($result9);

$desexp9=$camp9["desexp"];
$descr1exp9=$camp9["descr1exp"];
$descr2exp9=$camp9["descr2exp"];
$descr3exp9=$camp9["descr3exp"];
$descr4exp9=$camp9["descr4exp"];
$check1exp9=$camp9["check1exp"];
$check2exp9=$camp9["check2exp"];
$check3exp9=$camp9["check3exp"];
$check4exp9=$camp9["check4exp"];
$strobsexp9=$camp9["strobsexp"];
$strdisexp9=$camp9["strdisexp"];

$originalDate = $_GET["fechaa1"];
$fechafot9 = date("Ymd", strtotime($originalDate));
//$fechafot9=date("Ymd");

//BUSCAR IMAGENES ANTES - Después EN EL DIRECTORIO*********************

$ruta9='..\\..\\images\\misFotos\\';
$dir9=dir($ruta9);      
$buscar9 = "/".$fechafot9."091/"; 

while ($elemento9 = $dir9->read()) {

    if (($elemento9 != '.') && ($elemento9 != '..')) { 
        if (preg_match($buscar9, $elemento9) && is_file($ruta9.$elemento9)) { 
            $archivo9 = $elemento9;
        } 
		} else {	 
		    $archivo9 = "no_imagen.jpg";
    }       
}    

$ruta92='..\\..\\images\\misFotos\\'; 
$dir92=dir($ruta92);      
$buscar92 = "/".$fechafot9."092/"; 

while ($elemento92 = $dir92->read()) {

    if (($elemento92 != '.') && ($elemento92 != '..')) { 
        if (preg_match($buscar92, $elemento92) && is_file($ruta92.$elemento92)) { 
            $archivo92 = $elemento92; 
        }
		} else {	 
		 $archivo92 = "no_imagen.jpg";	 
    }       
}    


//*********************************************************************



//MITOS Y LEYENDAS*****************************************************

$result10 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa' and desexp='MITOS Y LEYENDAS'");
$camp10=mysqli_fetch_array($result10);

$desexp10=$camp10["desexp"];
$descr1exp10=$camp10["descr1exp"];
$descr2exp10=$camp10["descr2exp"];
$descr3exp10=$camp10["descr3exp"];
$descr4exp10=$camp10["descr4exp"];
$check1exp10=$camp10["check1exp"];
$check2exp10=$camp10["check2exp"];
$check3exp10=$camp10["check3exp"];
$check4exp10=$camp10["check4exp"];
$strobsexp10=$camp10["strobsexp"];
$strdisexp10=$camp10["strdisexp"];

$originalDate = $_GET["fechaa1"];
$fechafot10 = date("Ymd", strtotime($originalDate));
//$fechafot10=date("Ymd");

//BUSCAR IMAGENES ANTES - Después EN EL DIRECTORIO*********************

$ruta10='..\\..\\images\\misFotos\\';
$dir10=dir($ruta10);      
$buscar10 = "/".$fechafot10."101/"; 

while ($elemento10 = $dir10->read()) {

    if (($elemento10 != '.') && ($elemento10 != '..')) { 
        if (preg_match($buscar10, $elemento10) && is_file($ruta10.$elemento10)) { 
            $archivo10 = $elemento10;
        } 
		} else {	 
		    $archivo10 = "no_imagen.jpg";
    }       
}    

$ruta102='..\\..\\images\\misFotos\\'; 
$dir102=dir($ruta102);      
$buscar102 = "/".$fechafot10."102/"; 

while ($elemento102 = $dir102->read()) {

    if (($elemento102 != '.') && ($elemento102 != '..')) { 
        if (preg_match($buscar102, $elemento102) && is_file($ruta102.$elemento102)) { 
            $archivo102 = $elemento102; 
        }
		} else {	 
		 $archivo102 = "no_imagen.jpg";	 
    }       
}    


//*********************************************************************




//ACCION - REACCION*****************************************************

$result11 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strdisexp, strobsexp FROM expresumen where fecharegexp='$fechaa' and desexp='ACCION - REACCION'");
$camp11=mysqli_fetch_array($result11);

$desexp11=$camp11["desexp"];
$descr1exp11=$camp11["descr1exp"];
$descr2exp11=$camp11["descr2exp"];
$descr3exp11=$camp11["descr3exp"];
$descr4exp11=$camp11["descr4exp"];
$check1exp11=$camp11["check1exp"];
$check2exp11=$camp11["check2exp"];
$check3exp11=$camp11["check3exp"];
$check4exp11=$camp11["check4exp"];
$strobsexp11=$camp11["strobsexp"];
$strdisexp11=$camp11["strdisexp"];

$originalDate = $_GET["fechaa1"];
$fechafot11 = date("Ymd", strtotime($originalDate));
//$fechafot11=date("Ymd");

//BUSCAR IMAGENES ANTES - Después EN EL DIRECTORIO*********************

$ruta11='..\\..\\images\\misFotos\\';
$dir11=dir($ruta11);      
$buscar11 = "/".$fechafot11."111/"; 

while ($elemento11 = $dir11->read()) {

    if (($elemento11 != '.') && ($elemento11 != '..')) { 
        if (preg_match($buscar11, $elemento11) && is_file($ruta11.$elemento11)) { 
            $archivo11 = $elemento11;
        } 
		} else {	 
		    $archivo11 = "no_imagen.jpg";
    }       
}    

$ruta112='..\\..\\images\\misFotos\\'; 
$dir112=dir($ruta112);      
$buscar112 = "/".$fechafot11."112/"; 

while ($elemento112 = $dir112->read()) {

    if (($elemento112 != '.') && ($elemento112 != '..')) { 
        if (preg_match($buscar112, $elemento112) && is_file($ruta112.$elemento112)) { 
            $archivo112 = $elemento112; 
        }
		} else {	 
		 $archivo112 = "no_imagen.jpg";	 
    }       
}    


//*********************************************************************




//CAMBIO CLIMATICO*****************************************************

$result12 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa' and desexp='CAMBIO CLIMATICO'");
$camp12=mysqli_fetch_array($result12);

$desexp12=$camp12["desexp"];
$descr1exp12=$camp12["descr1exp"];
$descr2exp12=$camp12["descr2exp"];
$descr3exp12=$camp12["descr3exp"];
$descr4exp12=$camp12["descr4exp"];
$check1exp12=$camp12["check1exp"];
$check2exp12=$camp12["check2exp"];
$check3exp12=$camp12["check3exp"];
$check4exp12=$camp12["check4exp"];
$strobsexp12=$camp12["strobsexp"];
$strdisexp12=$camp12["strdisexp"];

$originalDate = $_GET["fechaa1"];
$fechafot12 = date("Ymd", strtotime($originalDate));
//$fechafot12=date("Ymd");

//BUSCAR IMAGENES ANTES - Después EN EL DIRECTORIO*********************

$ruta129='..\\..\\images\\misFotos\\';
$dir129=dir($ruta129);      
$buscar129 = "/".$fechafot12."121/"; 

while ($elemento129 = $dir129->read()) {

    if (($elemento129 != '.') && ($elemento129 != '..')) { 
        if (preg_match($buscar129, $elemento129) && is_file($ruta129.$elemento129)) { 
            $archivo129 = $elemento129;
        } 
		} else {	 
		    $archivo129 = "no_imagen.jpg";
    }       
}    

$ruta122='..\\..\\images\\misFotos\\'; 
$dir122=dir($ruta122);      
$buscar122 = "/".$fechafot12."122/"; 

while ($elemento122 = $dir122->read()) {

    if (($elemento122 != '.') && ($elemento122 != '..')) { 
        if (preg_match($buscar122, $elemento122) && is_file($ruta122.$elemento122)) { 
            $archivo122 = $elemento122; 
        }
		} else {	 
		 $archivo122 = "no_imagen.jpg";	 
    }       
}    


//*********************************************************************


class PDF extends FPDF
{
// Cargar los datos
function LoadData($file)
{
	// Leer las líneas del fichero
	$lines = file($file);
	$data = array();
	foreach($lines as $line)
		$data[] = explode(';',trim($line));
	return $data;
}

// Pagina 1 Titulos Informe
function BasicTable($data1)
{
	// Cabecera
	//foreach($header as $col)
	//	$this->Cell(40,7,$col,1);
	//$this->Ln();
	// Datos
	foreach($data1 as $row)
	{
		foreach($row as $col)
			$this->Cell(40,6,$col,1);
		$this->Ln();
	}
}

// Una tabla más completa
function ImprovedTable($header, $data)
{
	// Anchuras de las columnas
	$w = array(40, 35, 45, 40);
	// Cabeceras
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C');
	$this->Ln();
	// Datos
	foreach($data as $row)
	{
		$this->Cell($w[0],6,$row[0],'LR');
		$this->Cell($w[1],6,$row[1],'LR');
		$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
		$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
		$this->Ln();
	}
	// Línea de cierre
	$this->Cell(array_sum($w),0,'','T');
}

// Tabla coloreada
function FancyTable($header, $data)
{
	// Colores, ancho de línea y fuente en negrita
	$this->SetFillColor(255,0,0);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.3);
	$this->SetFont('','B');
	// Cabecera
	$w = array(40, 35, 45, 40);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	$this->Ln();
	// Restauración de colores y fuentes
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('');
	// Datos
	$fill = false;
	foreach($data as $row)
	{
		$this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
		$this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
		$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
		$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;
	}
	// Línea de cierre
	$this->Cell(array_sum($w),0,'','T');
}


function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('courier','I',8);
	// Número de página
	$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$pdf = new PDF();
$pdf->AliasNbPages();

$pdf->SetFont('courier','B',14);
$pdf->SetTextColor(10,69,77);

$pdf->AddPage();
$pdf->Image('../../images/portada.png',0,0,210);
$pdf->Cell(100,39,"",0);
$pdf->Ln();
$pdf->Cell(98,11,"".$mes1." DE ".$ano1,'',0,'C',0);
$pdf->Ln();
$pdf->Ln();
//$pdf->Cell(4,190,".",1);
$pdf->Cell(4,156," ",' ',1,'C',0);
$pdf->SetFont('courier','B',34);
$pdf->Cell(350,10,"09",'',0,'C',0);
$pdf->Ln();

//CICLO DEL AGUA LUPA************************************************

$pdf->AddPage();
$pdf->Image('../../images/epm.png',10,8,33);
//$pdf->Ln();
$pdf->SetFont('courier','B',14);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(190,10,utf8_decode("HOJAS DE INSPECCIÓN DE MANTENIMIENTO"),'',0,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"FECHA:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,$mes1." ".$ano1,'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"SEDE:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Museo del Agua",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("INSTALACIÓN:"),'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Parque Pies Descalzos",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NIVEL:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Tercero",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"APLICATIVO:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,utf8_decode($desexp1),'',0,'L',0);

$pdf->Ln(12);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"PROCEDIMIENTOS REALIZADOS:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);

if ($check1exp1==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr1exp1),'',0,'L',0);
$pdf->Ln(4);
}

if ($check2exp1==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr2exp1),'',0,'L',0);
$pdf->Ln(4);
}

if ($check3exp1==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr3exp1),'',0,'L',0);
$pdf->Ln(4);
}

if ($check4exp1==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr4exp1),'',0,'L',0);
}

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("DIAGNÓSTICO Y PROBLEMAS DETECTADOS:"),'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->MultiCell(180,5,utf8_decode($strdisexp1));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"OBSERVACIONES:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$prb=strlen(utf8_decode($strobsexp1));
$pdf->MultiCell(180,5,utf8_decode($strobsexp1));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NOMBRE DEL RESPONSABLE:",'',0,'L',0);
$pdf->Ln(6);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode("Rodrigo Gómez Alvis"),'',0,'L',0);

//*******************************************************************

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(78,10,utf8_decode("Fotografía Antes de Mantenimiento"),'',0,'C',0);

$pdf->SetFont('courier','B',11);
$pdf->Cell(140,10,utf8_decode("Fotografía Después de Mantenimiento"),'',0,'C',0);

$pdf->Ln(8);

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo1,14,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo1,14,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo1,14,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo1,14,158,70);
}

//*******************************************************************

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo12,124,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo12,124,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo12,124,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo12,124,158,70);
}

//CICLO DEL AGUA HERRAMIENTAS*****************************************

$pdf->AddPage();
$pdf->Image('../../images/epm.png',10,8,33);
//$pdf->Ln();
$pdf->SetFont('courier','B',14);
$pdf->Cell(190,10,utf8_decode("HOJAS DE INSPECCIÓN DE MANTENIMIENTO"),'',0,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"FECHA:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,$mes1." ".$ano1,'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"SEDE:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Museo del Agua",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("INSTALACIÓN:"),'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Parque Pies Descalzos",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NIVEL:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Tercero",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"APLICATIVO:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,utf8_decode($desexp2),'',0,'L',0);

$pdf->Ln(12);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"PROCEDIMIENTOS REALIZADOS:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);

if ($check1exp2==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr1exp2),'',0,'L',0);
$pdf->Ln(4);
}

if ($check2exp2==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr2exp2),'',0,'L',0);
$pdf->Ln(4);
}

if ($check3exp2==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr3exp2),'',0,'L',0);
$pdf->Ln(4);
}

if ($check4exp2==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr4exp2),'',0,'L',0);
}

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("DIAGNÓSTICO Y PROBLEMAS DETECTADOS:"),'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->MultiCell(180,5,utf8_decode($strdisexp2));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"OBSERVACIONES:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$prb=strlen(utf8_decode($strobsexp2));
$pdf->MultiCell(180,5,utf8_decode($strobsexp2));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NOMBRE DEL RESPONSABLE:",'',0,'L',0);
$pdf->Ln(6);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode("Rodrigo Gómez Alvis"),'',0,'L',0);

//*******************************************************************

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(78,10,utf8_decode("Fotografía Antes de Mantenimiento"),'',0,'C',0);

$pdf->SetFont('courier','B',11);
$pdf->Cell(140,10,utf8_decode("Fotografía Después de Mantenimiento"),'',0,'C',0);

$pdf->Ln(8);

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo2,14,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo2,14,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo2,14,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo2,14,158,70);
}

//*******************************************************************

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo22,124,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo22,124,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo22,124,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo22,124,158,70);
}


//VERTIENTES HIDROGRÁFICAS*****************************************

$pdf->AddPage();
$pdf->Image('../../images/epm.png',10,8,33);
//$pdf->Ln();
$pdf->SetFont('courier','B',14);
$pdf->Cell(190,10,utf8_decode("HOJAS DE INSPECCIÓN DE MANTENIMIENTO"),'',0,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"FECHA:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,$mes1." ".$ano1,'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"SEDE:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Museo del Agua",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("INSTALACIÓN:"),'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Parque Pies Descalzos",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NIVEL:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Tercero",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"APLICATIVO:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,utf8_decode($desexp3),'',0,'L',0);

$pdf->Ln(12);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"PROCEDIMIENTOS REALIZADOS:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);

if ($check1exp3==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr1exp3),'',0,'L',0);
$pdf->Ln(4);
}

if ($check2exp3==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr2exp3),'',0,'L',0);
$pdf->Ln(4);
}

if ($check3exp3==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr3exp3),'',0,'L',0);
$pdf->Ln(4);
}

if ($check4exp3==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr4exp3),'',0,'L',0);
}

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("DIAGNÓSTICO Y PROBLEMAS DETECTADOS:"),'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->MultiCell(180,5,utf8_decode($strdisexp3));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"OBSERVACIONES:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$prb=strlen(utf8_decode($strobsexp3));
$pdf->MultiCell(180,5,utf8_decode($strobsexp3));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NOMBRE DEL RESPONSABLE:",'',0,'L',0);
$pdf->Ln(6);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode("Rodrigo Gómez Alvis"),'',0,'L',0);


//*******************************************************************

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(78,10,utf8_decode("Fotografía Antes de Mantenimiento"),'',0,'C',0);

$pdf->SetFont('courier','B',11);
$pdf->Cell(140,10,utf8_decode("Fotografía Después de Mantenimiento"),'',0,'C',0);

$pdf->Ln(8);

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo3,14,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo3,14,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo3,14,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo3,14,158,70);
}

//*******************************************************************

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo32,124,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo32,124,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo32,124,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo32,124,158,70);
}


//VERTEDEROS********************************************************

$pdf->AddPage();
$pdf->Image('../../images/epm.png',10,8,33);
//$pdf->Ln();
$pdf->SetFont('courier','B',14);
$pdf->Cell(190,10,utf8_decode("HOJAS DE INSPECCIÓN DE MANTENIMIENTO"),'',0,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"FECHA:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,$mes1." ".$ano1,'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"SEDE:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Museo del Agua",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("INSTALACIÓN:"),'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Parque Pies Descalzos",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NIVEL:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Segundo",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"APLICATIVO:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,utf8_decode($desexp4),'',0,'L',0);

$pdf->Ln(12);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"PROCEDIMIENTOS REALIZADOS:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);

if ($check1exp4==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr1exp4),'',0,'L',0);
$pdf->Ln(4);
}

if ($check2exp4==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr2exp4),'',0,'L',0);
$pdf->Ln(4);
}

if ($check3exp4==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr3exp4),'',0,'L',0);
$pdf->Ln(4);
}

if ($check4exp4==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr4exp4),'',0,'L',0);
}

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("DIAGNÓSTICO Y PROBLEMAS DETECTADOS:"),'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->MultiCell(180,5,utf8_decode($strdisexp4));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"OBSERVACIONES:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$prb=strlen(utf8_decode($strobsexp4));
$pdf->MultiCell(180,5,utf8_decode($strobsexp4));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NOMBRE DEL RESPONSABLE:",'',0,'L',0);
$pdf->Ln(6);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode("Rodrigo Gómez Alvis"),'',0,'L',0);

//*******************************************************************

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(78,10,utf8_decode("Fotografía Antes de Mantenimiento"),'',0,'C',0);

$pdf->SetFont('courier','B',11);
$pdf->Cell(140,10,utf8_decode("Fotografía Después de Mantenimiento"),'',0,'C',0);

$pdf->Ln(8);

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo4,14,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo4,14,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo4,14,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo4,14,158,70);
}

//*******************************************************************

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo42,124,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo42,124,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo42,124,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo42,124,158,70);
}

//SET DE NOTICIAS*****************************************************

$pdf->AddPage();
$pdf->Image('../../images/epm.png',10,8,33);
//$pdf->Ln();
$pdf->SetFont('courier','B',14);
$pdf->Cell(190,10,utf8_decode("HOJAS DE INSPECCIÓN DE MANTENIMIENTO"),'',0,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"FECHA:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,$mes1." ".$ano1,'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"SEDE:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Museo del Agua",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("INSTALACIÓN:"),'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Parque Pies Descalzos",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NIVEL:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Segundo",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"APLICATIVO:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,utf8_decode($desexp5),'',0,'L',0);

$pdf->Ln(12);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"PROCEDIMIENTOS REALIZADOS:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);

if ($check1exp5==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr1exp5),'',0,'L',0);
$pdf->Ln(4);
}

if ($check2exp5==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr2exp5),'',0,'L',0);
$pdf->Ln(4);
}

if ($check3exp5==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr3exp5),'',0,'L',0);
$pdf->Ln(4);
}

if ($check4exp5==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr4exp5),'',0,'L',0);
}

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("DIAGNÓSTICO Y PROBLEMAS DETECTADOS:"),'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->MultiCell(180,5,utf8_decode($strdisexp5));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"OBSERVACIONES:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$prb=strlen(utf8_decode($strobsexp5));
$pdf->MultiCell(180,5,utf8_decode($strobsexp5));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NOMBRE DEL RESPONSABLE:",'',0,'L',0);
$pdf->Ln(6);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode("Rodrigo Gómez Alvis"),'',0,'L',0);

//*******************************************************************

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(78,10,utf8_decode("Fotografía Antes de Mantenimiento"),'',0,'C',0);

$pdf->SetFont('courier','B',11);
$pdf->Cell(140,10,utf8_decode("Fotografía Después de Mantenimiento"),'',0,'C',0);

$pdf->Ln(8);

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo5,14,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo5,14,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo5,14,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo5,14,158,70);
}

//*******************************************************************

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo52,124,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo52,124,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo52,124,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo52,124,158,70);
}


//PISO DEL AGUA*****************************************************

$pdf->AddPage();
$pdf->Image('../../images/epm.png',10,8,33);
//$pdf->Ln();
$pdf->SetFont('courier','B',14);
$pdf->Cell(190,10,utf8_decode("HOJAS DE INSPECCIÓN DE MANTENIMIENTO"),'',0,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"FECHA:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,$mes1." ".$ano1,'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"SEDE:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Museo del Agua",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("INSTALACIÓN:"),'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Parque Pies Descalzos",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NIVEL:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Segundo",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"APLICATIVO:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,utf8_decode($desexp6),'',0,'L',0);

$pdf->Ln(12);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"PROCEDIMIENTOS REALIZADOS:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);

if ($check1exp6==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr1exp6),'',0,'L',0);
$pdf->Ln(4);
}

if ($check2exp6==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr2exp6),'',0,'L',0);
$pdf->Ln(4);
}

if ($check3exp6==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr3exp6),'',0,'L',0);
$pdf->Ln(4);
}

if ($check4exp6==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr4exp6),'',0,'L',0);
}

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("DIAGNÓSTICO Y PROBLEMAS DETECTADOS:"),'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->MultiCell(180,5,utf8_decode($strdisexp6));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"OBSERVACIONES:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$prb=strlen(utf8_decode($strobsexp6));
$pdf->MultiCell(180,5,utf8_decode($strobsexp6));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NOMBRE DEL RESPONSABLE:",'',0,'L',0);
$pdf->Ln(6);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode("Rodrigo Gómez Alvis"),'',0,'L',0);


//*******************************************************************

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(78,10,utf8_decode("Fotografía Antes de Mantenimiento"),'',0,'C',0);

$pdf->SetFont('courier','B',11);
$pdf->Cell(140,10,utf8_decode("Fotografía Después de Mantenimiento"),'',0,'C',0);

$pdf->Ln(8);

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo6,14,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo6,14,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo6,14,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo6,14,158,70);
}

//*******************************************************************

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo62,124,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo62,124,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo62,124,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo62,124,158,70);
}

//HUELLA HIDRICA*****************************************************

$pdf->AddPage();
$pdf->Image('../../images/epm.png',10,8,33);
//$pdf->Ln();
$pdf->SetFont('courier','B',14);
$pdf->Cell(190,10,utf8_decode("HOJAS DE INSPECCIÓN DE MANTENIMIENTO"),'',0,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"FECHA:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,$mes1." ".$ano1,'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"SEDE:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Museo del Agua",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("INSTALACIÓN:"),'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Parque Pies Descalzos",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NIVEL:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Segundo",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"APLICATIVO:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,$desexp7,'',0,'L',0);

$pdf->Ln(12);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"PROCEDIMIENTOS REALIZADOS:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);

if ($check1exp7==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr1exp7),'',0,'L',0);
$pdf->Ln(4);
}

if ($check2exp7==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr2exp7),'',0,'L',0);
$pdf->Ln(4);
}

if ($check3exp7==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr3exp7),'',0,'L',0);
$pdf->Ln(4);
}

if ($check4exp7==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr4exp7),'',0,'L',0);
}

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("DIAGNÓSTICO Y PROBLEMAS DETECTADOS:"),'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->MultiCell(180,5,utf8_decode($strdisexp7));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"OBSERVACIONES:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$prb=strlen(utf8_decode($strobsexp7));
$pdf->MultiCell(180,5,utf8_decode($strobsexp7));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NOMBRE DEL RESPONSABLE:",'',0,'L',0);
$pdf->Ln(6);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode("Rodrigo Gómez Alvis"),'',0,'L',0);

//*******************************************************************

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(78,10,utf8_decode("Fotografía Antes de Mantenimiento"),'',0,'C',0);

$pdf->SetFont('courier','B',11);
$pdf->Cell(140,10,utf8_decode("Fotografía Después de Mantenimiento"),'',0,'C',0);

$pdf->Ln(8);

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo7,14,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo7,14,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo7,14,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo7,14,158,70);
}

//*******************************************************************

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo72,124,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo72,124,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo72,124,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo72,124,158,70);
}

//BIO-ESFERA*****************************************************

$pdf->AddPage();
$pdf->Image('../../images/epm.png',10,8,33);
//$pdf->Ln();
$pdf->SetFont('courier','B',14);
$pdf->Cell(190,10,utf8_decode("HOJAS DE INSPECCIÓN DE MANTENIMIENTO"),'',0,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"FECHA:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,$mes1." ".$ano1,'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"SEDE:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Museo del Agua",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("INSTALACIÓN:"),'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Parque Pies Descalzos",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NIVEL:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Tercero",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"APLICATIVO:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,utf8_decode($desexp8),'',0,'L',0);

$pdf->Ln(12);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"PROCEDIMIENTOS REALIZADOS:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);

if ($check1exp8==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr1exp8),'',0,'L',0);
$pdf->Ln(4);
}

if ($check2exp8==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr2exp8),'',0,'L',0);
$pdf->Ln(4);
}

if ($check3exp8==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr3exp8),'',0,'L',0);
$pdf->Ln(4);
}

if ($check4exp8==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr4exp8),'',0,'L',0);
}

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("DIAGNÓSTICO Y PROBLEMAS DETECTADOS:"),'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->MultiCell(180,5,utf8_decode($strdisexp8));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"OBSERVACIONES:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$prb=strlen(utf8_decode($strobsexp8));
$pdf->MultiCell(180,5,utf8_decode($strobsexp8));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NOMBRE DEL RESPONSABLE:",'',0,'L',0);
$pdf->Ln(6);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode("Rodrigo Gómez Alvis"),'',0,'L',0);
//*******************************************************************

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(78,10,utf8_decode("Fotografía Antes de Mantenimiento"),'',0,'C',0);

$pdf->SetFont('courier','B',11);
$pdf->Cell(140,10,utf8_decode("Fotografía Después de Mantenimiento"),'',0,'C',0);

$pdf->Ln(8);

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo8,14,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo8,14,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo8,14,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo8,14,158,70);
}

//*******************************************************************

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo82,124,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo82,124,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo82,124,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo82,124,158,70);
}
//OBJETOS SUMERGIDOS*****************************************************

$pdf->AddPage();
$pdf->Image('../../images/epm.png',10,8,33);
//$pdf->Ln();
$pdf->SetFont('courier','B',14);
$pdf->Cell(190,10,utf8_decode("HOJAS DE INSPECCIÓN DE MANTENIMIENTO"),'',0,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"FECHA:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,$mes1." ".$ano1,'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"SEDE:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Museo del Agua",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("INSTALACIÓN:"),'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Parque Pies Descalzos",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NIVEL:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Segundo",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"APLICATIVO:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,utf8_decode($desexp9),'',0,'L',0);

$pdf->Ln(12);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"PROCEDIMIENTOS REALIZADOS:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);

if ($check1exp9==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr1exp9),'',0,'L',0);
$pdf->Ln(4);
}

if ($check2exp9==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr2exp9),'',0,'L',0);
$pdf->Ln(4);
}

if ($check3exp9==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr3exp9),'',0,'L',0);
$pdf->Ln(4);
}

if ($check4exp9==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr4exp9),'',0,'L',0);
}

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("DIAGNÓSTICO Y PROBLEMAS DETECTADOS:"),'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->MultiCell(180,5,utf8_decode($strdisexp9));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"OBSERVACIONES:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$prb=strlen(utf8_decode($strobsexp9));
$pdf->MultiCell(180,5,utf8_decode($strobsexp9));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NOMBRE DEL RESPONSABLE:",'',0,'L',0);
$pdf->Ln(6);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode("Rodrigo Gómez Alvis"),'',0,'L',0);


//*******************************************************************

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(78,10,utf8_decode("Fotografía Antes de Mantenimiento"),'',0,'C',0);

$pdf->SetFont('courier','B',11);
$pdf->Cell(140,10,utf8_decode("Fotografía Después de Mantenimiento"),'',0,'C',0);

$pdf->Ln(8);

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo9,14,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo9,14,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo9,14,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo9,14,158,70);
}

//*******************************************************************

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo92,124,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo92,124,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo92,124,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo92,124,158,70);
}


//MITOS Y LEYENDAS*****************************************************

$pdf->AddPage();
$pdf->Image('../../images/epm.png',10,8,33);
//$pdf->Ln();
$pdf->SetFont('courier','B',14);
$pdf->Cell(190,10,utf8_decode("HOJAS DE INSPECCIÓN DE MANTENIMIENTO"),'',0,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"FECHA:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,$mes1." ".$ano1,'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"SEDE:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Museo del Agua",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("INSTALACIÓN:"),'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Parque Pies Descalzos",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NIVEL:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Segundo",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"APLICATIVO:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,utf8_decode($desexp10),'',0,'L',0);

$pdf->Ln(12);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"PROCEDIMIENTOS REALIZADOS:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);

if ($check1exp10==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr1exp10),'',0,'L',0);
$pdf->Ln(4);
}

if ($check2exp10==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr2exp10),'',0,'L',0);
$pdf->Ln(4);
}

if ($check3exp10==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr3exp10),'',0,'L',0);
$pdf->Ln(4);
}

if ($check4exp10==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr4exp10),'',0,'L',0);
}

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("DIAGNÓSTICO Y PROBLEMAS DETECTADOS:"),'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->MultiCell(180,5,utf8_decode($strdisexp10));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"OBSERVACIONES:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$prb=strlen(utf8_decode($strobsexp10));
$pdf->MultiCell(180,5,utf8_decode($strobsexp10));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NOMBRE DEL RESPONSABLE:",'',0,'L',0);
$pdf->Ln(6);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode("Rodrigo Gómez Alvis"),'',0,'L',0);


//*******************************************************************

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(78,10,utf8_decode("Fotografía Antes de Mantenimiento"),'',0,'C',0);

$pdf->SetFont('courier','B',11);
$pdf->Cell(140,10,utf8_decode("Fotografía Después de Mantenimiento"),'',0,'C',0);

$pdf->Ln(8);

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo10,14,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo10,14,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo10,14,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo10,14,158,70);
}

//*******************************************************************

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo102,124,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo102,124,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo102,124,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo102,124,158,70);
}



//ACCION - REACCION*****************************************************

$pdf->AddPage();
$pdf->Image('../../images/epm.png',10,8,33);
//$pdf->Ln();
$pdf->SetFont('courier','B',14);
$pdf->Cell(190,10,utf8_decode("HOJAS DE INSPECCIÓN DE MANTENIMIENTO"),'',0,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"FECHA:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,$mes1." ".$ano1,'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"SEDE:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Museo del Agua",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("INSTALACIÓN:"),'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Parque Pies Descalzos",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NIVEL:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Segundo",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"APLICATIVO:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,utf8_decode($desexp11),'',0,'L',0);

$pdf->Ln(12);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"PROCEDIMIENTOS REALIZADOS:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);

if ($check1exp11==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr1exp11),'',0,'L',0);
$pdf->Ln(4);
}

if ($check2exp11==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr2exp11),'',0,'L',0);
$pdf->Ln(4);
}

if ($check3exp11==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr3exp11),'',0,'L',0);
$pdf->Ln(4);
}

if ($check4exp11==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr4exp11),'',0,'L',0);
}

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("DIAGNÓSTICO Y PROBLEMAS DETECTADOS:"),'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->MultiCell(180,5,utf8_decode($strdisexp11));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"OBSERVACIONES:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$prb=strlen(utf8_decode($strobsexp11));
$pdf->MultiCell(180,5,utf8_decode($strobsexp11));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NOMBRE DEL RESPONSABLE:",'',0,'L',0);
$pdf->Ln(6);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode("Rodrigo Gómez Alvis"),'',0,'L',0);

//*******************************************************************

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(78,10,utf8_decode("Fotografía Antes de Mantenimiento"),'',0,'C',0);

$pdf->SetFont('courier','B',11);
$pdf->Cell(140,10,utf8_decode("Fotografía Después de Mantenimiento"),'',0,'C',0);

$pdf->Ln(8);

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo11,14,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo11,14,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo11,14,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo11,14,158,70);
}

//*******************************************************************

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo112,124,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo112,124,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo112,124,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo112,124,158,70);
}




//CAMBIO CLIMATICO*****************************************************

$pdf->AddPage();
$pdf->Image('../../images/epm.png',10,8,33);
//$pdf->Ln();
$pdf->SetFont('courier','B',14);
$pdf->Cell(190,10,utf8_decode("HOJAS DE INSPECCIÓN DE MANTENIMIENTO"),'',0,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"FECHA:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,$mes1." ".$ano1,'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"SEDE:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Museo del Agua",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("INSTALACIÓN:"),'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Parque Pies Descalzos",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NIVEL:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,"Tercero",'',0,'L',0);
$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"APLICATIVO:",'',0,'L',0);
$pdf->SetFont('courier','',11);
$pdf->Cell(36,10,utf8_decode($desexp12),'',0,'L',0);

$pdf->Ln(12);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"PROCEDIMIENTOS REALIZADOS:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);

if ($check1exp12==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr1exp12),'',0,'L',0);
$pdf->Ln(4);
}

if ($check2exp12==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr2exp12),'',0,'L',0);
$pdf->Ln(4);
}

if ($check3exp12==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr3exp12),'',0,'L',0);
$pdf->Ln(4);
}

if ($check4exp12==1) {
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode($descr4exp12),'',0,'L',0);
}

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,utf8_decode("DIAGNÓSTICO Y PROBLEMAS DETECTADOS:"),'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->MultiCell(180,5,utf8_decode($strdisexp12));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"OBSERVACIONES:",'',0,'L',0);
$pdf->Ln(8);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$prb=strlen(utf8_decode($strobsexp12));
$pdf->MultiCell(180,5,utf8_decode($strobsexp12));

$pdf->Ln(4);
$pdf->SetFont('courier','B',11);
$pdf->Cell(30,10,"NOMBRE DEL RESPONSABLE:",'',0,'L',0);
$pdf->Ln(6);
$pdf->SetFont('courier','',11);
$pdf->Cell(6,10,"",'',0,'L',0);
$pdf->Cell(36,10,utf8_decode("Rodrigo Gómez Alvis"),'',0,'L',0);

//*******************************************************************

$pdf->Ln(8);
$pdf->SetFont('courier','B',11);
$pdf->Cell(78,10,utf8_decode("Fotografía Antes de Mantenimiento"),'',0,'C',0);

$pdf->SetFont('courier','B',11);
$pdf->Cell(140,10,utf8_decode("Fotografía Después de Mantenimiento"),'',0,'C',0);

$pdf->Ln(8);

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo129,14,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo129,14,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo129,14,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo129,14,158,70);
}

//*******************************************************************

if ($prb<77){
$pdf->Image('../../images/misFotos/'.$archivo122,124,158,70);
}
if ($prb>76 && $prb<154){
$pdf->Image('../../images/misFotos/'.$archivo122,124,158,70);
}
if ($prb>153 && $prb<231){
$pdf->Image('../../images/misFotos/'.$archivo122,124,158,70);
}
if ($prb>230 && $prb<308){
$pdf->Image('../../images/misFotos/'.$archivo122,124,158,70);
}



$pdf->Output();
?>
