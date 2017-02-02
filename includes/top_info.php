<div id="top-header" class="grid--full grid--table">
			<div class="wrapper">
				<div id="topother-header" class="grid--full grid--table">
					<div class="grid__item one-half top-header-left">
						 Crear Publicidad 2016  
						<?php 

                  if(isset($_SESSION['SESS_LOGIN']))
                    {
                      echo ' - Bienvenido   <b>'.htmlentities($_SESSION['SESS_LOGIN'], ENT_QUOTES, 'UTF-8');
                      echo '<a href="adminlogin/administrar_categorias.php"> - Ir al panel de Admin</a>';
                    } 
                    ?>
					
					</div>
					<div class="grid__item one-half top-header-right">
						<div class="currency-picker">
							<!--<label class="currency-picker__wrapper">
							<span class="currency-picker__label">Currency</span>
							<select class="currency-picker" name="currencies" style="display: inline; width: auto; vertical-align: inherit;">
								<option value="USD" selected="selected">USD</option>
								<option value="INR">INR</option>
								<option value="GBP">GBP</option>
								<option value="CAD">CAD</option>
								<option value="AUD">AUD</option>
								<option value="EUR">EUR</option>
								<option value="JPY">JPY</option>
							</select>
							</label>-->
						</div>
						<?php 
								
								$queryimagen2 = "SELECT * FROM informacion";
				                $resultado = $link->query($queryimagen2);
				                while($row12 = $resultado->fetch_assoc())
								{
							?>
						<div class="fi-content inline-list social-icons">
							<a href="<?php echo "http://".$row12['twitter'].""; ?>" title="Twitter" class="icon-social twitter" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter-square"></i></a>
							<a href="<?php echo "http://".$row12['facebook'].""; ?>" title="Facebook" class="icon-social facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook-square"></i></a>						
							<a href="<?php echo "http://".$row12['pinterest'].""; ?>" title="Pinterest" class="icon-social pinterest" data-toggle="tooltip" data-placement="top"><i class="fa fa-pinterest-square"></i></a>
							

						</div>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>