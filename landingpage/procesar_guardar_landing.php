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

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$contenido = $_POST['contenido'];

	

	$query = "UPDATE landing SET titulo='$titulo', descripcion='$descripcion', contenido='$contenido'";
	$resultado = $link->query($query);
	if($resultado){
	header("location: ../landingpage/landing.php");
	}
	else
	{ 
	echo "no";
	}





?>