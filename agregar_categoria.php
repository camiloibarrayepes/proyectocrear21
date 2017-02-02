
<?php
					require_once('conexion.php');
				
							
						$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
						if(!$link) {
							die('Failed to connect to server: ' . mysql_error());		
							}
						
						//Select database
						$db = mysqli_select_db($link,DB_DATABASE);
						if(!$db) {
							die("Unable to select database");
						}
					
							
					
		$name = $_POST['name'];
		$time = time() + 7200*0.01; 
		$fecha_hora = date('Y-m-d H:i:s', $time); 
		
		
		
		$sql = "INSERT INTO categorias (`name`, `time_up`) VALUES ('$name','$fecha_hora')";
if(mysqli_query($link, $sql)){
    echo "<br>";
	echo " La categoria: <b>$name</b> se Añadió con exito. <br>";
	echo "<a href='principal.php'>Volver</a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

	
	?>