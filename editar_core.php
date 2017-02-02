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
						$name = $_POST['name'];
						echo $id;
						echo $name;
						
						
						$sql = ("UPDATE categorias SET name='$name' WHERE id=$id");
						if(mysqli_query($link, $sql)){
						echo "<br>";
						echo " La categoria: $name se Añadió con exito.";
						?> <a href="editar.php">volver</A>
						<?php
						} else{
						echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
						}
			?>
