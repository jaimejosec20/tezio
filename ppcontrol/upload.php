<?php
   
	$hostname_localhost="localhost";
	$database_localhost="museoagua";
	$username_localhost="root";
	$password_localhost="Tezio159sA";

	$link = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost);
	mysqli_select_db($link,$database_localhost);   
   

   $destination_path = getcwd().DIRECTORY_SEPARATOR;

   $result = 0;
   
   $target_path = $destination_path .'archivos/'. basename($_FILES['myfile']['name']);   

		$nom_archivo = basename($_FILES['myfile']['name']);
		$sproyecto = $_POST['sproyecto'];
		$starchivo = $_POST['starchivo'];
		$fec_uploadarch = date('Y-m-d');
		$est_uploadarch = '1';
		
		$link->query("INSERT INTO uploadarch VALUES('', '$nom_archivo', '$sproyecto', '$starchivo', '$fec_uploadarch', '$est_uploadarch')") or die(mysqli_error());   
   
   if(@move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) {
      $result = 1;
   }
   
   sleep(1);
?>

<script language="javascript" type="text/javascript">window.top.window.stopUpload(<?php echo $result; ?>);</script>   
