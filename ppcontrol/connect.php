<?php
	$conn = new mysqli('localhost', 'root', '', 'organizacion') or die(mysqli_error());
	if(!$conn){
		die("Error fatal: error de conexión!");
	}