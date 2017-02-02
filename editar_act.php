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
						//echo $id;
						
						$qry=mysqli_query($link,"SELECT * FROM categorias WHERE id='$id'");
						$row = mysqli_fetch_array($qry);
						echo $id;
						
						
						
							
			?>
						<form action="editar_core.php?id=<?php echo $id ?>"  method="post">	
						<input type="text" name="name" id=name value="<?php echo $row['name'];?>">
						<br>
						
						<button type="submit" name="accion" value="Aceptar" class="btn btn-primary">Aceptar</button>
						</form>						 
							
			
						
				
					
						<br><br><a href="editar.php">Volver</a>