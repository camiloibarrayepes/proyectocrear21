<ul class="mobile-nav">
			<li class="mobile-nav__item mobile-nav__item--active">
				<a href="index.php" class="mobile-nav__link">Home</a>
			</li>

			<?php 
									
								$qry=mysqli_query($link,"SELECT * FROM menu_header");
					

								while($row = mysqli_fetch_array($qry))
								
								{
									print '
			
			<li class="mobile-nav__item">
			<a href="register.html" id="customer_register_link">'.$row["titulo"].'</a>
			</li>

			';}?>

		</ul>