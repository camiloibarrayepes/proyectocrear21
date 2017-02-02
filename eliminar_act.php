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
						
						$id = $_GET['id'];
						
						echo $id;
						
						
						
						$sql = ("DELETE FROM categorias WHERE id=$id");
						if(mysqli_query($link, $sql)){
						echo "<br>";
						echo " La categoria se eliminó con exito.";
						?> <a href="editar.php">volver</A>
						<?php
						} else{
						echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
						}
			?>
