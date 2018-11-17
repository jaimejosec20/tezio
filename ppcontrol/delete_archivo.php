<?php
$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	$link->query("DELETE FROM archivo WHERE archivo_id = '$_REQUEST[book_id]'") or die(mysqli_error());
	header("location: archivo.php");