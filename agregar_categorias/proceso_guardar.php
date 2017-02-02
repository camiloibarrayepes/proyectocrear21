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

$nombre = $_POST['name'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "INSERT INTO ca(`nombre`,`imagen`) VALUES('$nombre','$imagen')";
$resultado = $link->query($query);

if($resultado){
	header("location: ../adminlogin/administrar_categorias.php");
}
else
{ 
echo "no";
}
?>