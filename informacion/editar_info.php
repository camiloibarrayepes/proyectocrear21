<?php

require_once('../conexion.php');
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
						if(!$link) {
							die('Failed to connect to server: ' . mysql_error());		
							}

						//Select database
						$db = mysqli_select_db($link,DB_DATABASE);
						if(!$db) {
							die("Unable to select database");
						}
$direccion = $_REQUEST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$facebook = $_POST['facebook'];
$pinterest = $_POST['pinterest'];
$twitter = $_POST['twitter'];

	

	$query = "UPDATE informacion SET direccion='$direccion', telefono='$telefono', email='$email', facebook='$facebook', pinterest='$pinterest', twitter='$twitter'";
	$resultado = $link->query($query);

	if($resultado){
	header("location: ../adminlogin/editar_info.php");
	}
	
	

else{
	echo "el archivo no es una imagen <br/>";
	exit();
	echo "<a href='agregar_post.php'>Volver atras</a>";
}




?>