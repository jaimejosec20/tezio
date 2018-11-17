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

//$fechaa='2018-05-18';
//$horaa=date("h:i:s a");

//??????VERIFICAR TABLA (cicloagua)

$result1 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa1' and desexp='CICLO DEL AGUA LUPA'");

$camp1=mysqli_fetch_array($result1);

//BUSCAR EL ULTIMO REGISTRO***************************

$busreg1=mysqli_query($link, "select idcicloagua, fechareg, intvercli, intvercal, intvercox, intverfun, strobs, strdis from cicloagua where fechareg='$fechaa1' order by idcicloagua desc");
$regbus1=mysqli_fetch_array($busreg1);

$idcicloagua=$regbus1["idcicloagua"];
$fechareg=$regbus1["fechareg"];
$intvercli=$regbus1["intvercli"];
$intvercal=$regbus1["intvercal"];
$intvercox=$regbus1["intvercox"];
$intverfun=$regbus1["intverfun"];
$strobs=$regbus1["strobs"];
$strdis=$regbus1["strdis"];

//****************************************************

//BUSCAR REGISTRO (tabla ckexperiencia)***************

$busregg1=mysqli_query($link, "select idexper, descr1exp, descr2exp, descr3exp, descr4exp, nomexper from ckexperiencia where nomexper='CICLO DEL AGUA LUPA'");
$regbuss1=mysqli_fetch_array($busregg1);

$descr1exp=$regbuss1["descr1exp"];
$descr2exp=$regbuss1["descr2exp"];
$descr3exp=$regbuss1["descr3exp"];
$descr4exp=$regbuss1["descr4exp"];

//****************************************************

//$row_cnt = mysqli_num_rows($result1);

if (mysqli_num_rows($result1)==0 && $idcicloagua != 0){

mysqli_query($link, "insert into expresumen(idtabexp, fecharegexp, tipexp, desexp, check1exp, check2exp, check3exp, check4exp, descr1exp, descr2exp, descr3exp, descr4exp, strobsexp, strdisexp)values('$idcicloagua', '$fechareg', '1', 'CICLO DEL AGUA LUPA', '$intvercli', '$intvercal', '$intvercox', '$intverfun', '$descr1exp', '$descr2exp', '$descr3exp', '$descr4exp', '$strobs', '$strdis')");

}

//??????FIN VERIFICAR TABLA (cicloagua)

$fechaa2=date("Y-m-d");
//$fechaa2='2018-05-18';

//??????VERIFICAR TABLA (cicloherr)

$result2 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa2' and desexp='CICLO DEL AGUA HERRAMIENTAS'");

$camp2=mysqli_fetch_array($result2);

//BUSCAR EL ULTIMO REGISTRO***************************

$busreg2=mysqli_query($link, "select idcicloherr, fechareg2, intverini2, intvercox2, intvercal2, intverpru2, strobs2, strdis2 from cicloherr where fechareg2='$fechaa2' order by idcicloherr desc");
$regbus2=mysqli_fetch_array($busreg2);

$idcicloherr=$regbus2["idcicloherr"];
$fechareg2=$regbus2["fechareg2"];
$intverini2=$regbus2["intverini2"];
$intvercox2=$regbus2["intvercox2"];
$intvercal2=$regbus2["intvercal2"];
$intverpru2=$regbus2["intverpru2"];
$strobs2=$regbus2["strobs2"];
$strdis2=$regbus2["strdis2"];

//****************************************************

//BUSCAR REGISTRO (tabla ckexperiencia)***************

$busregg2=mysqli_query($link, "select idexper, descr1exp, descr2exp, descr3exp, descr4exp, nomexper from ckexperiencia where nomexper='CICLO DEL AGUA HERRAMIENTAS'");
$regbuss2=mysqli_fetch_array($busregg2);

$descr1exp2=$regbuss2["descr1exp"];
$descr2exp2=$regbuss2["descr2exp"];
$descr3exp2=$regbuss2["descr3exp"];
$descr4exp2=$regbuss2["descr4exp"];

//****************************************************

if (mysqli_num_rows($result2)==0 && $idcicloherr != 0){

mysqli_query($link, "insert into expresumen(idtabexp, fecharegexp, tipexp, desexp, check1exp, check2exp, check3exp, check4exp, descr1exp, descr2exp, descr3exp, descr4exp, strobsexp, strdisexp)values('$idcicloherr', '$fechareg2', '2', 'CICLO DEL AGUA HERRAMIENTAS', '$intverini2', '$intvercox2', '$intvercal2', '$intverpru2', '$descr1exp2', '$descr2exp2', '$descr3exp2', '$descr4exp2', '$strobs2', '$strdis2')");

}

//??????FIN VERIFICAR TABLA (cicloherr)

$fechaa3=date("Y-m-d");
//$fechaa3='2018-05-18';

//??????VERIFICAR TABLA (verthidro)

$result3 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa3' and desexp='VERTIENTES HIDROGRAFICAS'");

$camp3=mysqli_fetch_array($result3);

//BUSCAR EL ULTIMO REGISTRO***************************

$busreg3=mysqli_query($link, "select idverthidro, fechareg3, intverini3, intcalpro3, intreapru3, strobs3, strdis3 from verthidro where fechareg3='$fechaa3' order by idverthidro desc");
$regbus3=mysqli_fetch_array($busreg3);

$idverthidro=$regbus3["idverthidro"];
$fechareg3=$regbus3["fechareg3"];
$intverini3=$regbus3["intverini3"];
$intcalpro3=$regbus3["intcalpro3"];
$intreapru3=$regbus3["intreapru3"];
$strobs3=$regbus3["strobs3"];
$strdis3=$regbus3["strdis3"];

//****************************************************

//BUSCAR REGISTRO (tabla ckexperiencia)***************

$busregg3=mysqli_query($link, "select idexper, descr1exp, descr2exp, descr3exp, descr4exp, nomexper from ckexperiencia where nomexper='VERTIENTES HIDROGRAFICAS'");
$regbuss3=mysqli_fetch_array($busregg3);

$descr1exp3=$regbuss3["descr1exp"];
$descr2exp3=$regbuss3["descr2exp"];
$descr3exp3=$regbuss3["descr3exp"];
$descr4exp3=$regbuss3["descr4exp"];

//****************************************************

if (mysqli_num_rows($result3)==0 && $idverthidro != 0){

mysqli_query($link, "insert into expresumen(idtabexp, fecharegexp, tipexp, desexp, check1exp, check2exp, check3exp, check4exp, descr1exp, descr2exp, descr3exp, descr4exp, strobsexp, strdisexp)values('$idverthidro', '$fechareg3',  '3', 'VERTIENTES HIDROGRAFICAS', '$intverini3', '$intcalpro3', '$intreapru3', '2', '$descr1exp3', '$descr2exp3', '$descr3exp3', '$descr4exp3', '$strobs3', '$strdis3')");

}

//??????FIN VERIFICAR TABLA (verthidro)

$fechaa4=date("Y-m-d");
//$fechaa4='2018-05-18';

//??????VERIFICAR TABLA (vertederos)

$result4 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa4' and desexp='VERTEDEROS'");

$camp4=mysqli_fetch_array($result4);

//BUSCAR EL ULTIMO REGISTRO***************************

$busreg4=mysqli_query($link, "select idvertederos, fechareg4, intverini4, intreacal4, intreapru4, strobs4, strdis4 from vertederos where fechareg4='$fechaa4' order by idvertederos desc");
$regbus4=mysqli_fetch_array($busreg4);

$idvertederos=$regbus4["idvertederos"];
$fechareg4=$regbus4["fechareg4"];
$intverini4=$regbus4["intverini4"];
$intreacal4=$regbus4["intreacal4"];
$intreapru4=$regbus4["intreapru4"];
$strobs4=$regbus4["strobs4"];
$strdis4=$regbus4["strdis4"];

//****************************************************

//BUSCAR REGISTRO (tabla ckexperiencia)***************

$busregg4=mysqli_query($link, "select idexper, descr1exp, descr2exp, descr3exp, descr4exp, nomexper from ckexperiencia where nomexper='VERTEDEROS'");
$regbuss4=mysqli_fetch_array($busregg4);

$descr1exp4=$regbuss4["descr1exp"];
$descr2exp4=$regbuss4["descr2exp"];
$descr3exp4=$regbuss4["descr3exp"];
$descr4exp4=$regbuss4["descr4exp"];

//****************************************************

if (mysqli_num_rows($result4)==0 && $idvertederos != 0){

mysqli_query($link, "insert into expresumen(idtabexp, fecharegexp, tipexp, desexp, check1exp, check2exp, check3exp, check4exp, descr1exp, descr2exp, descr3exp, descr4exp, strobsexp, strdisexp)values('$idvertederos', '$fechareg4',  '4', 'VERTEDEROS', '$intverini4', '$intreacal4', '$intreapru4', '2', '$descr1exp4', '$descr2exp4', '$descr3exp4', '$descr4exp4', '$strobs4', '$strdis4')");

}

//??????FIN VERIFICAR TABLA (vertederos)

$fechaa5=date("Y-m-d");
//$fechaa5='2018-05-18';

//??????VERIFICAR TABLA (setnoticias)

$result5 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa5' and desexp='SET DE NOTICIAS'");

$camp5=mysqli_fetch_array($result5);

//BUSCAR EL ULTIMO REGISTRO***************************

$busreg5=mysqli_query($link, "select idsetnoticias, fechareg5, intverini5, intverfun5, intfunfon5, strobs5, strdis5 from setnoticias where fechareg5='$fechaa5' order by idsetnoticias desc");
$regbus5=mysqli_fetch_array($busreg5);

$idsetnoticias=$regbus5["idsetnoticias"];
$fechareg5=$regbus5["fechareg5"];
$intverini5=$regbus5["intverini5"];
$intverfun5=$regbus5["intverfun5"];
$intfunfon5=$regbus5["intfunfon5"];
$strobs5=$regbus5["strobs5"];
$strdis5=$regbus5["strdis5"];

//****************************************************

//BUSCAR REGISTRO (tabla ckexperiencia)***************

$busregg5=mysqli_query($link, "select idexper, descr1exp, descr2exp, descr3exp, descr4exp, nomexper from ckexperiencia where nomexper='SET DE NOTICIAS'");
$regbuss5=mysqli_fetch_array($busregg5);

$descr1exp5=$regbuss5["descr1exp"];
$descr2exp5=$regbuss5["descr2exp"];
$descr3exp5=$regbuss5["descr3exp"];
$descr4exp5=$regbuss5["descr4exp"];

//****************************************************

if (mysqli_num_rows($result5)==0 && $idsetnoticias != 0){

mysqli_query($link, "insert into expresumen(idtabexp, fecharegexp, tipexp, desexp, check1exp, check2exp, check3exp, check4exp, descr1exp, descr2exp, descr3exp, descr4exp, strobsexp, strdisexp)values('$idsetnoticias', '$fechareg5',  '5', 'SET DE NOTICIAS', '$intverini5', '$intverfun5', '$intfunfon5', '2', '$descr1exp5', '$descr2exp5', '$descr3exp5', '$descr4exp5', '$strobs5', '$strdis5')");

}

//??????FIN VERIFICAR TABLA (setnoticias)

$fechaa6=date("Y-m-d");
//$fechaa6='2018-05-18';

//??????VERIFICAR TABLA (pisoagua)

$result6 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa6' and desexp='PISO DEL AGUA'");

$camp6=mysqli_fetch_array($result6);

//BUSCAR EL ULTIMO REGISTRO***************************

$busreg6=mysqli_query($link, "select idpisoagua, fechareg6, intverini6, intverpro6, intreapru6, strobs6, strdis6 from pisoagua where fechareg6='$fechaa6' order by idpisoagua desc");
$regbus6=mysqli_fetch_array($busreg6);

$idpisoagua=$regbus6["idpisoagua"];
$fechareg6=$regbus6["fechareg6"];
$intverini6=$regbus6["intverini6"];
$intverpro6=$regbus6["intverpro6"];
$intreapru6=$regbus6["intreapru6"];
$strobs6=$regbus6["strobs6"];
$strdis6=$regbus6["strdis6"];

//****************************************************

//BUSCAR REGISTRO (tabla ckexperiencia)***************

$busregg6=mysqli_query($link, "select idexper, descr1exp, descr2exp, descr3exp, descr4exp, nomexper from ckexperiencia where nomexper='PISO DEL AGUA'");
$regbuss6=mysqli_fetch_array($busregg6);

$descr1exp6=$regbuss6["descr1exp"];
$descr2exp6=$regbuss6["descr2exp"];
$descr3exp6=$regbuss6["descr3exp"];
$descr4exp6=$regbuss6["descr4exp"];

//****************************************************

if (mysqli_num_rows($result6)==0 && $idpisoagua != 0){

mysqli_query($link, "insert into expresumen(idtabexp, fecharegexp, tipexp, desexp, check1exp, check2exp, check3exp, check4exp, descr1exp, descr2exp, descr3exp, descr4exp, strobsexp, strdisexp)values('$idpisoagua', '$fechareg6',  '6', 'PISO DEL AGUA', '$intverini6', '$intverpro6', '$intreapru6', '2', '$descr1exp6', '$descr2exp6', '$descr3exp6', '$descr4exp6', '$strobs6', '$strdis6')");

}

//??????FIN VERIFICAR TABLA (pisoagua)

$fechaa7=date("Y-m-d");
//$fechaa7='2018-05-18';

//??????VERIFICAR TABLA (huellahid)

$result7 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa7' and desexp='HUELLA HIDRICA'");

$camp7=mysqli_fetch_array($result7);

//BUSCAR EL ULTIMO REGISTRO***************************

$busreg7=mysqli_query($link, "select idhuellahid, fechareg7, intverini7, intvercon7, intreapru7, strobs7, strdis7 from huellahid where fechareg7='$fechaa7' order by idhuellahid desc");
$regbus7=mysqli_fetch_array($busreg7);

$idhuellahid=$regbus7["idhuellahid"];
$fechareg7=$regbus7["fechareg7"];
$intverini7=$regbus7["intverini7"];
$intvercon7=$regbus7["intvercon7"];
$intreapru7=$regbus7["intreapru7"];
$strobs7=$regbus7["strobs7"];
$strdis7=$regbus7["strdis7"];

//****************************************************

//BUSCAR REGISTRO (tabla ckexperiencia)***************

$busregg7=mysqli_query($link, "select idexper, descr1exp, descr2exp, descr3exp, descr4exp, nomexper from ckexperiencia where nomexper='HUELLA HIDRICA'");
$regbuss7=mysqli_fetch_array($busregg7);

$descr1exp7=$regbuss7["descr1exp"];
$descr2exp7=$regbuss7["descr2exp"];
$descr3exp7=$regbuss7["descr3exp"];
$descr4exp7=$regbuss7["descr4exp"];

//****************************************************

if (mysqli_num_rows($result7)==0 && $idhuellahid != 0){

mysqli_query($link, "insert into expresumen(idtabexp, fecharegexp, tipexp, desexp, check1exp, check2exp, check3exp, check4exp, descr1exp, descr2exp, descr3exp, descr4exp, strobsexp, strdisexp)values('$idhuellahid', '$fechareg7',  '7', 'HUELLA HIDRICA', '$intverini7', '$intvercon7', '$intreapru7', '2', '$descr1exp7', '$descr2exp7', '$descr3exp7', '$descr4exp7', '$strobs7', '$strdis7')");

}

//??????FIN VERIFICAR TABLA (huellahid)

$fechaa8=date("Y-m-d");
//$fechaa8='2018-05-18';

//??????VERIFICAR TABLA (bioesfera)

$result8 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa8' and desexp='BIO-ESFERA'");

$camp8=mysqli_fetch_array($result8);

//BUSCAR EL ULTIMO REGISTRO***************************

$busreg8=mysqli_query($link, "select idbioesfera, fechareg8, intverini8, intvercal8, intreapru8, strobs8, strdis8 from bioesfera where fechareg8='$fechaa8' order by idbioesfera desc");
$regbus8=mysqli_fetch_array($busreg8);

$idbioesfera=$regbus8["idbioesfera"];
$fechareg8=$regbus8["fechareg8"];
$intverini8=$regbus8["intverini8"];
$intvercal8=$regbus8["intvercal8"];
$intreapru8=$regbus8["intreapru8"];
$strobs8=$regbus8["strobs8"];
$strdis8=$regbus8["strdis8"];

//****************************************************

//BUSCAR REGISTRO (tabla ckexperiencia)***************

$busregg8=mysqli_query($link, "select idexper, descr1exp, descr2exp, descr3exp, descr4exp, nomexper from ckexperiencia where nomexper='BIO-ESFERA'");
$regbuss8=mysqli_fetch_array($busregg8);

$descr1exp8=$regbuss8["descr1exp"];
$descr2exp8=$regbuss8["descr2exp"];
$descr3exp8=$regbuss8["descr3exp"];
$descr4exp8=$regbuss8["descr4exp"];

//****************************************************

if (mysqli_num_rows($result8)==0 && $idbioesfera != 0){

mysqli_query($link, "insert into expresumen(idtabexp, fecharegexp, tipexp, desexp, check1exp, check2exp, check3exp, check4exp, descr1exp, descr2exp, descr3exp, descr4exp, strobsexp, strdisexp)values('$idbioesfera', '$fechareg8',  '8', 'BIO-ESFERA', '$intverini8', '$intvercal8', '$intreapru8', '2', '$descr1exp8', '$descr2exp8', '$descr3exp8', '$descr4exp8', '$strobs8', '$strdis8')");

}

//??????FIN VERIFICAR TABLA (bioesfera)

$fechaa9=date("Y-m-d");
//$fechaa9='2018-05-18';

//??????VERIFICAR TABLA (objsumer)

$result9 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa9' and desexp='OBJETOS SUMERGIDOS'");

$camp9=mysqli_fetch_array($result9);

//BUSCAR EL ULTIMO REGISTRO***************************

$busreg9=mysqli_query($link, "select idobjsumer, fechareg9, intverini9, intvercal9, intreapru9, strobs9, strdis9 from objsumer where fechareg9='$fechaa9' order by idobjsumer desc");
$regbus9=mysqli_fetch_array($busreg9);

$idobjsumer=$regbus9["idobjsumer"];
$fechareg9=$regbus9["fechareg9"];
$intverini9=$regbus9["intverini9"];
$intvercal9=$regbus9["intvercal9"];
$intreapru9=$regbus9["intreapru9"];
$strobs9=$regbus9["strobs9"];
$strdis9=$regbus9["strdis9"];

//****************************************************

//BUSCAR REGISTRO (tabla ckexperiencia)***************

$busregg9=mysqli_query($link, "select idexper, descr1exp, descr2exp, descr3exp, descr4exp, nomexper from ckexperiencia where nomexper='OBJETOS SUMERGIDOS'");
$regbuss9=mysqli_fetch_array($busregg9);

$descr1exp9=$regbuss9["descr1exp"];
$descr2exp9=$regbuss9["descr2exp"];
$descr3exp9=$regbuss9["descr3exp"];
$descr4exp9=$regbuss9["descr4exp"];

//****************************************************

if (mysqli_num_rows($result9)==0 && $idobjsumer != 0){

mysqli_query($link, "insert into expresumen(idtabexp, fecharegexp, tipexp, desexp, check1exp, check2exp, check3exp, check4exp, descr1exp, descr2exp, descr3exp, descr4exp, strobsexp, strdisexp)values('$idobjsumer', '$fechareg9',  '9', 'OBJETOS SUMERGIDOS', '$intverini9', '$intvercal9', '$intreapru9', '2', '$descr1exp9', '$descr2exp9', '$descr3exp9', '$descr4exp9', '$strobs9', '$strdis9')");

}

//??????FIN VERIFICAR TABLA (objsumer)

$fechaa10=date("Y-m-d");
//$fechaa10='2018-05-18';

//??????VERIFICAR TABLA (mitleyen)

$result10 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa10' and desexp='MITOS Y LEYENDAS'");

$camp10=mysqli_fetch_array($result10);

//BUSCAR EL ULTIMO REGISTRO***************************

$busreg10=mysqli_query($link, "select idmitleyen, fechareg10, intverini10, intvercal10, intreapru10, strobs10, strdis10 from mitleyen where fechareg10='$fechaa10' order by idmitleyen desc");
$regbus10=mysqli_fetch_array($busreg10);

$idmitleyen=$regbus10["idmitleyen"];
$fechareg10=$regbus10["fechareg10"];
$intverini10=$regbus10["intverini10"];
$intvercal10=$regbus10["intvercal10"];
$intreapru10=$regbus10["intreapru10"];
$strobs10=$regbus10["strobs10"];
$strdis10=$regbus10["strdis10"];

//****************************************************

//BUSCAR REGISTRO (tabla ckexperiencia)***************

$busregg10=mysqli_query($link, "select idexper, descr1exp, descr2exp, descr3exp, descr4exp, nomexper from ckexperiencia where nomexper='MITOS Y LEYENDAS'");
$regbuss10=mysqli_fetch_array($busregg10);

$descr1exp10=$regbuss10["descr1exp"];
$descr2exp10=$regbuss10["descr2exp"];
$descr3exp10=$regbuss10["descr3exp"];
$descr4exp10=$regbuss10["descr4exp"];

//****************************************************

if (mysqli_num_rows($result10)==0 && $idmitleyen != 0){

mysqli_query($link, "insert into expresumen(idtabexp, fecharegexp, tipexp, desexp, check1exp, check2exp, check3exp, check4exp, descr1exp, descr2exp, descr3exp, descr4exp, strobsexp, strdisexp)values('$idmitleyen', '$fechareg10',  '10', 'MITOS Y LEYENDAS', '$intverini10', '$intvercal10', '$intreapru10', '2', '$descr1exp10', '$descr2exp10', '$descr3exp10', '$descr4exp10', '$strobs10', '$strdis10')");

}

//??????FIN VERIFICAR TABLA (mitleyen)

$fechaa11=date("Y-m-d");
//$fechaa11='2018-05-18';

//??????VERIFICAR TABLA (accreacc)

$result11 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa11' and desexp='ACCION - REACCION'");

$camp11=mysqli_fetch_array($result11);

//BUSCAR EL ULTIMO REGISTRO***************************

$busreg11=mysqli_query($link, "select idaccreacc, fechareg11, intverini11, intverpro11, intconpro11, intreapru11, strobs11, strdis11 from accreacc where fechareg11='$fechaa11' order by idaccreacc desc");
$regbus11=mysqli_fetch_array($busreg11);

$idaccreacc=$regbus11["idaccreacc"];
$fechareg11=$regbus11["fechareg11"];
$intverini11=$regbus11["intverini11"];
$intverpro11=$regbus11["intverpro11"];
$intconpro11=$regbus11["intconpro11"];
$intreapru11=$regbus11["intreapru11"];
$strobs11=$regbus11["strobs11"];
$strdis11=$regbus11["strdis11"];

//****************************************************

//BUSCAR REGISTRO (tabla ckexperiencia)***************

$busregg11=mysqli_query($link, "select idexper, descr1exp, descr2exp, descr3exp, descr4exp, nomexper from ckexperiencia where nomexper='ACCION - REACCION'");
$regbuss11=mysqli_fetch_array($busregg11);

$descr1exp11=$regbuss11["descr1exp"];
$descr2exp11=$regbuss11["descr2exp"];
$descr3exp11=$regbuss11["descr3exp"];
$descr4exp11=$regbuss11["descr4exp"];

//****************************************************

if (mysqli_num_rows($result11)==0 && $idaccreacc != 0){

mysqli_query($link, "insert into expresumen(idtabexp, fecharegexp, tipexp, desexp, check1exp, check2exp, check3exp, check4exp, descr1exp, descr2exp, descr3exp, descr4exp, strobsexp, strdisexp)values('$idaccreacc', '$fechareg11',  '11', 'ACCION - REACCION', '$intverini11', '$intverpro11', '$intconpro11', '$intreapru11', '$descr1exp11', '$descr2exp11', '$descr3exp11', '$descr4exp11', '$strobs11', '$strdis11')");

}

//??????FIN VERIFICAR TABLA (accreacc)

$fechaa12=date("Y-m-d");
//$fechaa12='2018-05-18';

//??????VERIFICAR TABLA (cambclim)

$result12 = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa12' and desexp='CAMBIO CLIMATICO'");

$camp12=mysqli_fetch_array($result12);

//BUSCAR EL ULTIMO REGISTRO***************************

$busreg12=mysqli_query($link, "select idcambclim, fechareg12, intverini12, intvercal12, intprufun12, strobs12, strdis12 from cambclim where fechareg12='$fechaa12' order by idcambclim desc");
$regbus12=mysqli_fetch_array($busreg12);

$idcambclim=$regbus12["idcambclim"];
$fechareg12=$regbus12["fechareg12"];
$intverini12=$regbus12["intverini12"];
$intvercal12=$regbus12["intvercal12"];
$intprufun12=$regbus12["intprufun12"];
$strobs12=$regbus12["strobs12"];
$strdis12=$regbus12["strdis12"];

//****************************************************

//BUSCAR REGISTRO (tabla ckexperiencia)***************

$busregg12=mysqli_query($link, "select idexper, descr1exp, descr2exp, descr3exp, descr4exp, nomexper from ckexperiencia where nomexper='CAMBIO CLIMATICO'");
$regbuss12=mysqli_fetch_array($busregg12);

$descr1exp12=$regbuss12["descr1exp"];
$descr2exp12=$regbuss12["descr2exp"];
$descr3exp12=$regbuss12["descr3exp"];
$descr4exp12=$regbuss12["descr4exp"];

//****************************************************

if (mysqli_num_rows($result12)==0 && $idcambclim != 0){

mysqli_query($link, "insert into expresumen(idtabexp, fecharegexp, tipexp, desexp, check1exp, check2exp, check3exp, check4exp, descr1exp, descr2exp, descr3exp, descr4exp, strobsexp, strdisexp)values('$idcambclim', '$fechareg12',  '12', 'CAMBIO CLIMATICO', '$intverini12', '$intvercal12', '$intprufun12', '2', '$descr1exp12', '$descr2exp12', '$descr3exp12', '$descr4exp12', '$strobs12', '$strdis12')");

}

//??????FIN VERIFICAR TABLA (cambclim)



$_pagi_sql = mysqli_query($link, "SELECT idexpresumen, idtabexp, fecharegexp, tipexp, desexp, descr1exp, descr2exp, descr3exp, descr4exp, check1exp, check2exp, check3exp, check4exp, strobsexp, strdisexp FROM expresumen where fecharegexp='$fechaa1'");

$_pagi_cuantos = 5; 

$_pagi_nav_num_enlaces = 5;

include("paginatormensaj.inc.php"); 

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
                        <a href="#">
                            <i class="material-icons">person</i>
                            <p>Mi Perfil</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">content_paste</i>
                            <p>Afiliados</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">notifications</i>
                            <p>Mensajes</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">bubble_chart</i>
                            <p>Galería</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">library_books</i>
                            <p>Mis Citas</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons text-gray">mode_edit</i>
                            <p>Editor Notas</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
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
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Procesos Realizados</p>
										<h3 class="title">0/0
                                        
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
                                    <h3 class="title"><? echo $campos[contar]; ?>
									<small>Experiencias</small>
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
                                    <h3 class="title">0
									<small>Proyectos</small>
									</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Seguimiento de Proyectos
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
                                    <img src="images/logo_descarga_pdf.png">
                                </div>
                                
								
								
								<div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Sin Leer
                                    </div>
                                </div>
								
								
								
                            </div>
                        </div>
                    </div>

                    
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header" data-background-color="blue">
								<table width="100%">
								<tr>
								
								<td>
								
								    <h4 class="title">Experiencias Museo del Agua</h4>
                                    <p class="category">Información Detallada</p>
									
								</td>
								
								<td align="right">
								
								
								
								</td>
								
								</tr>
								</table>

									
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>Fecha</th>
                                            <th>Diagnostico</th>
                                            <th>Observación</th>
                                            <th></th>
                                        </thead>
                                        <tbody>

<?PHP while($rsgedit=mysqli_fetch_array($_pagi_result)){ ?>			
						
                                            <tr>
                                                <td><?PHP echo $rsgedit["fecharegexp"]; ?></td>
                                                <td><?PHP echo $rsgedit["strdisexp"]; ?></td>
                                                <td><?PHP echo $rsgedit["strobsexp"]; ?></td>

		                                    <td class="td-actions text-right">
		                                        <button type="button" rel="tooltip" class="btn btn-info btn-simple">
		                                            <i class="material-icons">search</i>
		                                        </button>
		                                        <button type="button" rel="tooltip" class="btn btn-success btn-simple">
		                                            <i class="material-icons">reply</i>
		                                        </button>
		                                        <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
		                                            <i class="material-icons">close</i>
		                                        </button>
		                                    </td>
												
												</td>
                                            </tr>

                                      <?PHP

				} ?>
											
                                            <thead>
                                                <th colspan="4">Páginas <?PHP echo"".$_pagi_navegacion.""; ?></td>
                                            </thead>
                                        </tbody>
                                    </table>
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