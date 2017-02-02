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
	$query = "SELECT * FROM menu_header WHERE id='$id'";
	$resultado = $link->query($query);
	$row = $resultado->fetch_assoc();
?>
	<center>					
<form action="modificar_menu.php?id=<?php echo $row['id'];?>" method="POST">
<input type="text" REQUIRED name="titulo" placeholder="escribe titulo" value="<?php echo $row['titulo'];?>"/><br><br>


<input type="submit" value="aceptar">

</form></center>