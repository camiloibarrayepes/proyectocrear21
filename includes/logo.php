<div class="grid__item small--one-whole medium--one-whole two-eighths">
						<h1 class="site-header__logo large--left" itemscope="" itemtype="http://schema.org/Organization">
						<a href="index.html" itemprop="url" class="site-header__logo-link">
						 <?php
					         $re=mysqli_query($link,"select * from logo")or die();
					        while ($f=mysqli_fetch_array($re)) {
					     ?>
							<align right><img src="modificar_logo_2/Subir/Imagenes/<?php echo $f['imagen']; ?>" alt="Crear Publicidad" itemprop="logo">
						<?php
							}
						?>
						</a>
						</h1>
					</div>