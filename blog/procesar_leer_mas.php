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

	$id = $_GET['id'];
	$usuario = $_POST['usuario'];
	$comentario = $_POST['comentario'];
	$email = $_POST['email_usuario'];

	echo $id, $usuario, $comentario, $email;

	$query = "INSERT INTO comentarios_post(`post_id`,`usuario_comentario`,`email_usuario_comentario`,`comentario`) VALUES('$id', '$usuario', '$email','$comentario')";
	
	$resultado = $link->query($query);

	if($resultado){
		header("location: article.php?id=".$id."");
	}
	else
	{ 
	echo "no";
	}


?>