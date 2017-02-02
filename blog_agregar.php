
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
					
							
					
		//$name = $_POST['name'];
		//$time = time() + 7200*0.01; 
		//$fecha_hora = date('Y-m-d H:i:s', $time); 
		$titulo = $_POST['titulo'];
		$contenido = $_POST['contenido'];
		
		
		$sql = "INSERT INTO blog (`titulo`, `contenido`) VALUES ('$titulo','$contenido')";
if(mysqli_query($link, $sql)){
    echo "<br>";
	echo " se añadió el contenido con exito. <br>";
	echo "<a href='blog_1.php'>Volver</a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

	
	?>