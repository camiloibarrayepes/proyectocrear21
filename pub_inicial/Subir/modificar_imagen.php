<?php
require_once('../../conexion.php');


$id = $_REQUEST['id'];
$ruta = "Imagenes/";
opendir($ruta);
$destino = $ruta.$_FILES['foto']['name'];
copy($_FILES['foto']['tmp_name'],$destino);
$nombre=$_FILES['foto']['name'];
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
						if(!$link) {
							die('Failed to connect to server: ' . mysql_error());		
							}
						
						//Select database
						$db = mysqli_select_db($link,DB_DATABASE);
						if(!$db) {
							die("Unable to select database");
						}	
	mysqli_query($link, "UPDATE adsinicial SET Imagen='$nombre' WHERE id='$id'");

	header("location:../../adminlogin/ads_inicial_ver_imagenes.php"); 
?>
