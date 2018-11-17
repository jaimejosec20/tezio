<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>FTP</title>
</head>

<body>


<ul>

<?php

$dir = './respaldo';
$archivos=scandir($dir);
for($i=0;$i<count($archivos);$i++) {

echo '<li>'.$archivos[$i].'</li>';

}

?>


</ul>

</body>
</html>


