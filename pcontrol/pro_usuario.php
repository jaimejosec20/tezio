<?PHP
error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();

$_SESSION[idusu];
$_SESSION[usuar];
$_SESSION[ema_usu];
$_SESSION[tipusuar];

$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

//$var = (string)file_get_contents("visordata.php");
//$porc = explode(" ", $var);
$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
//mysqli_select_db($link,$database_localhost);
//$tildes = $link->query("SET NAMES 'utf8'");

$email=$_POST['email'];
$contras=$_POST['contras'];

$resultacc = mysqli_query($link, "select id_usuario,nom_usuario,cla_usuario,est_usuario,email_usuario,tipo_usuario from usuario where email_usuario='$email' and cla_usuario='$contras' and est_usuario='1'");

$camp=mysqli_fetch_array($resultacc);
$_SESSION["idusu"]=$camp["id_usuario"];
$_SESSION["usuar"]=$camp["nom_usuario"];
$_SESSION["ema_usu"]=$camp["email_usuario"];
$_SESSION["tipusuar"]=$camp["tipo_usuario"];

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