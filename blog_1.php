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
				
												
						?>
						
<form name="loginForm" id="loginForm" action="blog_agregar.php"  method="post">
					
                   
                     <br><br>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Ingresa Titulo<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="titulo" class="form-control"  type="text"  id="titulo" required="" />  
                        </div>
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Contenido<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="contenido" class="form-control"  type="text"  id="contenido" required=""></textarea>
                        </div>
                      </div>
                          <button type="submit" name="Submit" value="Aceptar" class="btn btn-primary">Aceptar</button>
                          
						
        
</form>
