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
	$query = "SELECT * FROM ca WHERE id='$id'";
	$resultado = $link->query($query);
	$row = $resultado->fetch_assoc();
?>
	<center>					
<form action="proceso_modificar.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
<input type="text" REQUIRED name="name" placeholder="escribe categoria" value="<?php echo $row['nombre'];?>"/><br><br>
<img width="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"/><br><br>
<input type="file"  name="imagen" value=""/><br><br>
<input type="submit" value="aceptar">

</form></center>