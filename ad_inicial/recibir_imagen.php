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

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal, $rutaDestino);

$desc=$_POST['descripcion'];
$titulo=$_POST['titulo'];
$sql="INSERT INTO adsinicial (ruta,descripcion,titulo) values('".$rutaDestino."','".$desc."','".$titulo."')";
$res = $link->query($sql);

if($res){
	header('location: mostrar_imagen.php');
}
else{
	echo 'no';
}
?>