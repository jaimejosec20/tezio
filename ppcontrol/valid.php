<?php
	require_once 'connect.php';
	session_start();
	if(!ISSET($_SESSION['idusu'])){
		header('location: index.php');
	}