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
				
					$qry=mysqli_query($link,"SELECT * FROM blog");
					

						while($row = mysqli_fetch_array($qry))
						
						{
							echo "<tr>";
							echo "<td><b>".$row['titulo']."</b></td>";
							echo "<br>";
							echo "<td>".$row['contenido']."</td><br><br>";
							echo "<br>";		
							
						}	
							
						?>
						

<a href="blog_editar.php">Editar/Eliminar</a>