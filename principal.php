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
					

						while($row = mysqli_fetch_array($qry))
						
						{
							echo "<tr>";
							echo "<td>".$row['name']."</td>";
							echo "<br>";		
							
						}	
							
						?>
						
<form name="loginForm" id="loginForm" action="agregar_categoria.php"  method="post">
					
                   
                     <br><br>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Ingresa categoria<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="name" class="form-control" placeholder="Direccion IP" type="text"  id="name" required="" />  
                        </div>
                      </div>
                          <button type="submit" name="Submit" value="Aceptar" class="btn btn-primary">Aceptar</button>
                          <button id="send" type="reset" class="btn btn-success">Reset</button><h5><a href="tables_dynamic.php">Mi equipo ya esta registrado?</a><h5>
						
        
</form>
<a href="editar.php">Editar/Eliminar</a>