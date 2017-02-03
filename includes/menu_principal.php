<ul class="site-nav" id="AccessibleNav">
						<li class="site-nav--active">
							<a href="index.php" class="site-nav__link">
								<span>Home</span>
							</a>
						</li>
						<?php 									
							$qry=mysqli_query($link,"SELECT * FROM menu_header");					
							while($row = mysqli_fetch_array($qry))								
							{									
								print '
								<li>
									<a href="'.$row["url"].'" class="site-nav__link">
										<span>'.$row["titulo"].'</span>
									</a>
								</li>';
							}

						?>
					</ul>