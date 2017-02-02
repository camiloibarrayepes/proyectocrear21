<div class="grid__item footer_newsletter">
				<div class="wrapper">
					<h3><i class="fa fa-envelope"></i> Subscribete a nuestro boletín de noticias</h3>
					<form action="emails/guardaremails.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" class="input-group">
						<input type="email" value="" placeholder="Ingresa tu Email aquí ..." name="email" id="mail" class="input-group-field" aria-label="email@example.com">
						<span class="input-group-btn">
						<input type="submit" class="btn" name="subscribe" id="subscribe" value="Enviar">
						</span>
					</form>
				</div>
			</div>
<div class="grid__item footer_information">
				<div class="wrapper">
					<div class="grid-uniform">
						<div class="fi-about-block grid__item one-quarter small--one-whole medium--one-whole">
							<div class="fi-title">
								Contacto
							</div>
							<?php 
								
								$queryimagen2 = "SELECT * FROM informacion";
				                $resultado = $link->query($queryimagen2);
				                while($row12 = $resultado->fetch_assoc())
								{
							?>
							<div class="fi-content">
								<ul class="group_information">
									<li><i class="fa fa-map-marker"></i><?php echo $row12['direccion']; ?></li>
									<li><i class="fa fa-phone"></i><?php echo $row12['telefono']; ?></li>
									<li><i class="fa fa-envelope"></i><?php echo $row12['email']; ?></li>
								</ul>
							</div>
							
							
						</div>

						<div class="fi-links grid__item one-quarter small--one-whole medium--one-whole">
							<div class="fi-title">
								Redes sociales
							</div>
							<div class="fi-content inline-list social-icons">
								<a href="<?php echo "http://".$row12['twitter'].""; ?>" title="Twitter" class="icon-social twitter" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter-square"></i></a>
								<a href="<?php echo "http://".$row12['facebook'].""; ?>" title="Facebook" class="icon-social facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook-square"></i></a>	
								<a href="<?php echo "http://".$row12['pinterest'].""; ?>" title="Pinterest" class="icon-social pinterest" data-toggle="tooltip" data-placement="top"><i class="fa fa-pinterest-square"></i></a>
							</div>
							<!-- archivo cotizacion -->
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
							                        
							    $query = "SELECT * FROM tbl_documentos";
							    $resultado = $link->query($query);
							    while($row = $resultado->fetch_assoc()){

							?>
							<br><br>
							 <a href="archivo/archivos/<?php echo $row['nombre_archivo']; ?>">Descargar Formato de Cotización</a>﻿
							<?php
							}
							?>

						</div>

						<?php
								}
							?>	
						<div class="fi-tags grid__item one-quarter small--one-whole medium--one-whole">
							<div class="fi-title">
								Productos Tags
							</div>
							<div class="fi-content">
								<ul>
								<?php 
									
								$qry=mysqli_query($link,"SELECT * FROM ca");
					

								while($row = mysqli_fetch_array($qry))
								
								{
									
										
								print '
									<li><a href="collection.php?categoria='.$row["nombre"].'">'.$row["nombre"].'</a></li>
									';}?>
								</ul>
							</div>
						</div>

						<div class="fi-block grid__item one-quarter small--one-whole medium--one-whole">
							<div class="fi-title">
								Ultimos Post
							</div>
								<?php 
									
						$qry=mysqli_query($link,"SELECT * FROM post ORDER BY id_post DESC limit 2");
						while($row = mysqli_fetch_array($qry))
								
						{
							?>
							<ul class="fi-content post-element">
								<li>
								<div class="post-title">
									<a href="blog/article.php?id=<?php echo $row['id_post']; ?>"><?php echo $row['titulo_post']; ?></a>
								</div>
								<div class="post-author">
									by <span class="author"><?php echo $row['autor_post']; ?></span>
								</div>
								</li>
							</ul>
							<?php
						}
                    ?>
					<!-- si ya inicio sesión no se muestra opción de ingresar -->		
					<?php 

                  if(isset($_SESSION['SESS_LOGIN']))
                    {
                      echo '';
                    } 
                    else
                    {

                   
					?>
                <li class="header-account">
								<a href="#loginBox" id="login_link">
									<i class="fa fa-user"></i>
									<span class="name">Administrador</span>
								</a>
								<div id="loginBox" class="loginLightbox" style="display:none;">
									<div id="lightboxlogin">
										<form method="post" action="login-exec.php" id="customer_login" accept-charset="UTF-8">
											<input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="✓">
											<div id="bodyBox">
												<h3>Login</h3>
												<label for="CustomerEmail" class="hidden-label">Email</label>
												<input type="text" name="login" id="login" class="input-full" placeholder="Username">
												<label for="CustomerPassword" class="hidden-label">Password</label>
												<input type="password" value="" name="password" id="password" class="input-full" placeholder="Password">
												<input type="submit" class="btn btn2 btn--full" value="Sign In">
												<div>
													<p class="forgot">
														<a href="#recover" onclick="showRecoverPasswordForm();return false;" id="RecoverPassword">Forgot your password?</a>
													</p>
													<p class="create">
														<a href="#create_accountBox" onclick="showCreateAccountForm();return false;" id="CreateAccountPassword">Create New Account</a>
													</p>
												</div>
												<p>
													<a href="#" onclick="$.fancybox.close();">Close</a>
												</p>
											</div>
										</form>
									</div>
									<div id="recover-password" style="display:none;">
										<h3>Reset your password</h3>
										<p class="note">
											We will send you an email to reset your password.
										</p>
										<form method="post" action="http://demo.tadathemes.com/HTML_Homemarket/demo/recover.html" accept-charset="UTF-8">
											<input type="hidden" value="recover_customer_password" name="form_type"><input type="hidden" name="utf8" value="✓">
											<p>
												<label for="recover-email" class="label">Email</label>
											</p>
											<input type="email" value="" size="30" name="email" id="recover-email" class="text">
											<div class="action_bottom">
												<input class="btn btn2" type="submit" value="Submit">
												<a class="btn back" href="#" onclick="hideRecoverPasswordForm();return false;">Back to Login</a>
											</div>
											<p class="close">
												<a href="#" onclick="$.fancybox.close();">Close</a>
											</p>
										</form>
									</div>
									<div id="create_accountBox" style="display:none;">
										<h3>Create Account</h3>
										<div class="form-vertical">
											<form method="post" action="http://demo.tadathemes.com/HTML_Homemarket/demo/account.html" id="create_customer" accept-charset="UTF-8">
												<input type="hidden" value="create_customer" name="form_type"><input type="hidden" name="utf8" value="✓">
												<label for="FirstName" class="hidden-label">First Name</label>
												<input type="text" name="customer[first_name]" id="FirstName" class="input-full" placeholder="First Name">
												<label for="LastName" class="hidden-label">Last Name</label>
												<input type="text" name="customer[last_name]" id="LastName" class="input-full" placeholder="Last Name">
												<label for="Email" class="hidden-label">Email</label>
												<input type="email" name="customer[email]" id="Email" class="input-full" placeholder="Email">
												<label for="CreatePassword" class="hidden-label">Password</label>
												<input type="password" name="customer[password]" id="CreatePassword" class="input-full" placeholder="Password">
												<p>
													<input type="submit" value="Create" class="btn btn2 btn--full">
												</p>
												<p>
													<span><a class="btn" href="#" onclick="hideRecoverPasswordForm();return false;">Back to Login</a></span>
												</p>
												<p class="close">
													<a href="#" onclick="$.fancybox.close();">Close</a>
												</p>
											</form>
										</div>
									</div>
									<script>
											function showRecoverPasswordForm() {
											  $('#recover-password').css("display",'block');
											  $('#lightboxlogin').css("display",'none');
											  $('#create_accountBox').css("display",'none');
											}
											function hideRecoverPasswordForm() {
											  $('#recover-password').css("display",'none');
											  $('#lightboxlogin').css("display",'block');
											  $('#create_accountBox').css("display",'none');
											}
											function showCreateAccountForm(){
											  $('#recover-password').css("display",'none');
											  $('#lightboxlogin').css("display",'none');
											  $('#create_accountBox').css("display",'block');
											}
										  </script>
								</div>
							</li> 
							

						</div>
						<?php
					}
					?>

					</div>
				</div>
			</div>

			<div class="grid__item footer_copyright">
				<div class="wrapper">
					<div class="grid">
						<div class="grid__item footer-copyright one-half small--one-whole medium--one-whole small--text-center">
							<p>
								© 2017 Crear Publicidad - Todos los derechos reservados - Desarrollado por
							</p>
						</div>						
					</div>
				</div>
			</div>