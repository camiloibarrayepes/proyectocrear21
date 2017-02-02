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
				
					$qry=mysqli_query($link,"SELECT * FROM categorias");
				
							
				?>		
                
			
			<table id="datatable-buttons" class="table table-striped table-bordered">
					
                      <thead>
                        <tr>
                          <th>Nombre categoria</th>                          
						  <th></th>
                        </tr>
                      </thead>
					<?php
						while($row = mysqli_fetch_array($qry))
						
						{
							echo "<tr>";
							echo "<td>".$row['name']."</td>";
							echo "<td><a href='editar_act.php?id=".$row['id']."'>Actualizar</a><a href='eliminar_act.php?id=".$row['id']."'> Eliminar</a></td>";
						
						}	
							
						?>

                    </table>