<?php
$hostname_localhost="localhost";
$database_localhost="museoagua";
$username_localhost="root";
$password_localhost="Tezio159sA";

$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
mysqli_select_db($link,$database_localhost);

	$link->query("DELETE FROM recurso WHERE id_recurso = '$_REQUEST[book_id]'") or die(mysqli_error());
	header("location: recurso.php");