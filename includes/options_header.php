<div class="grid__item small--one-whole two-eighths medium-down--hide">
						<ul class="link-list">
						<?php 
						if(isset($_SESSION['SESS_LOGIN']))
                    		{
                    	?>
						<li class="header-account">
								<a href="logout.php"" id="login_link">
									<i class="fa fa-user"></i>
									<span class="name">Cerrar Sesión</span>
								</a>
								
						</li>
						<?php
							}
						?>
					
						
				<li class="track-order">
					<a href="store-location.html">
				<i class="fa fa-phone"></i>
					<span class="name">Contactanos</span>
					</a>
				</li>
							
				<li class="header-cart">
				<a href=".cart.html" class="site-header__cart-toggle js-drawer-open-right" aria-controls="CartDrawer" aria-expanded="false">
				<i class="fa fa-shopping-basket"></i>
				<span id="CartCount">3</span>
				<span class="name">Shopping Cart</span>
			</a>
		</li>
	</ul>
</div>