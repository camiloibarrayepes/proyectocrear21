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
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$contenido = $_POST['contenido'];

	

	$query = "UPDATE post SET autor_post='$autor', fecha_post=NOW(), categoria_post='$categoria', titulo_post='$titulo', descripcion_post='$descripcion', contenido_completo_post='$contenido' WHERE id_post ='$id'";
	$resultado = $link->query($query);
	if($resultado){
	header("location: ../adminlogin/ver_post_blog.php");
	}
	
	

else{
	echo "el archivo no es una imagen <br/>";
	exit();
	echo "<a href='agregar_post.php'>Volver atras</a>";
}




?>