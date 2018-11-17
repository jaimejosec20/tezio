<?
session_start();

$_SESSION["idusu"];
$_SESSION["usuar"];
$_SESSION["ema_usu"];
$_SESSION["tipusuar"];

$var = (string)file_get_contents("visordata.php");
$porc = explode(" ", $var);
$link = mysqli_connect($porc['0'],$porc['1'],$porc['2']);
//mysqli_set_charset('utf8',$link);
//$tildes = mysqli_query($comm,"SET NAMES 'utf8'"); 
mysqli_select_db($link,$porc[3]);
$tildes = $link->query("SET NAMES 'utf8'");

//$link=mysqli_connect("localhost","serprara_web","Ser789PreF");
//mysqli_select_db($link, "serprefa");
//$tildes = $link->query("SET NAMES 'utf8'");

$resultacc = mysqli_query($link, "select id_usuario,nom_usuario,cla_usuario,est_usuario,email_usuario,tipo_usuario from usuario where email_usuario='$_POST[email]' and cla_usuario='$_POST[contras]' and est_usuario='1'");

$camp=mysqli_fetch_array($resultacc);
$_SESSION["idusu"]=$camp[id_usuario];
$_SESSION["usuar"]=$camp[nom_usuario];
$_SESSION["ema_usu"]=$camp[email_usuario];
$_SESSION["tipusuar"]=$camp[tipo_usuario];

if (mysqli_num_rows($resultacc)!=0){
header("location:../ppcontrol/");

}else{
echo "
<script> 
alert('DATOS INCORRECTOS INTENTE NUEVAMENTE');
location.href='index.php?email=$_POST[email]'
</script>";
}
?>