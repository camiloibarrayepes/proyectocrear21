

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
		$query = "SELECT * FROM comentarios_post WHERE post_id = '$id' ORDER BY id_comentario DESC LIMIT 6 ";
			$resultado = $link->query($query);
			while($row = $resultado->fetch_assoc()){

				echo "<article>";
				echo "<img src='user.png' width='20px' height='20px'>";
				echo "<h3>".$row['usuario_comentario']."</h3>";
				echo "<p>". $row['comentario']."</p>";
				echo "</article>";
			}
?>