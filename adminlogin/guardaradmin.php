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

$nombre = $_POST['tags'];


$query = "INSERT INTO prueba(`tags`) VALUES('$nombre')";
$resultado = $link->query($query);

if($resultado){
	header("location: mostrar.php");
}
else
{ 
echo "no";
}
?>