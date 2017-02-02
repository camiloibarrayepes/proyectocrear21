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
$id = $_REQUEST['id'];
$titulo = $_POST['titulo'];


$query = "UPDATE menu_header SET titulo='$titulo' WHERE id ='$id'";
$resultado = $link->query($query);

if($resultado){
	header("location: mostrar_menu.php");
	echo "modificacion exitosa";
}
else
{ 
echo "no";
}
?>