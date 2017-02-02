<?php 

include_once("collectionLogic.php");
$idsel=$_GET["id"];
				
?>
<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface">

<!-- Mirrored from demo.tadathemes.com/HTML_Homemarket/demo/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Nov 2016 17:20:13 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Product Detail Page - Home Market Red</title>
	<!-- Font ================================================== -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700"> 
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,500,600,700">
	<!-- Helpers ================================================== -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="Home Market - Responsive HTML5 theme">
	<meta property="og:image" content="../../assets/images/logo.html">
	<meta property="og:image:secure_url" content="../../assets/images/logo.html">
	<meta property="og:url" content="#">
	<meta property="og:site_name" content="Home Market Red">
	<meta name="twitter:site" content="@">
	<meta name="twitter:card" content="summary">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- CSS ================================================== -->
	<link href="assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/swatch.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/flexslider.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/timber.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/home_market.global.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/home_market.style.scss.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/tada.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/spr.css" rel="stylesheet" type="text/css" media="all">
	<link href="assets/css/social-buttons.scss.css" rel="stylesheet" type="text/css" media="all">
	<!-- JS ================================================== -->
	
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>	
	<script src="assets/js/jquery.fancybox.min.js" type="text/javascript"></script>
	<script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.tweet.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.optionSelect.js" type="text/javascript"></script>
	<script src="assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.easytabs.min.js" type="text/javascript"></script>
	<script src="assets/js/itemscarro.js" type="text/javascript"></script>
	<script src="assets/js/products.js" type="text/javascript"></script>

</head>

<body id="products" class="template-collection">
	<div id="NavDrawer" class="drawer drawer--left">
		<div class="drawer__header">
			<div class="drawer__title h3">
				Browse
			</div>
			<div class="drawer__close js-drawer-close">
				<button type="button" class="icon-fallback-text">
				<span class="icon icon-x" aria-hidden="true"></span>
				<span class="fallback-text">Close menu</span>
				</button>
			</div>
		</div>
		<!-- begin mobile-nav -->
		<?php include('includes/menu_movil.php'); ?>
	</div>
	
	<div id="CartDrawer" class="drawer drawer--right fancybox-margin">
		<div class="drawer__header">
			<div class="drawer__title h3">
				Shopping Cart
			</div>
			<div class="drawer__close js-drawer-close">
				<button type="button" class="icon-fallback-text">
				<span class="icon icon-x" aria-hidden="true"></span>
				<span class="fallback-text">"Close Cart"</span>
				</button>
			</div>
		</div>
		<div id="CartContainer">
			<form action="http://demo.tadathemes.com/HTML_Homemarket/demo/cart.html" method="post" novalidate="" class="cart ajaxcart">
				<div class="ajaxcart__inner">
					<div class="ajaxcart__product">
						<div class="ajaxcart__row" data-line="1">
							<div class="grid">
						
									<div id="datos"></div>
								
							</div>
						</div>
					</div>
				
					</div>
					
				</div>
				<div class="ajaxcart__footer">
					<div class="grid--full">
						<div class="grid__item title-total">
							<p>
								Subtotal
							</p>
						</div>
						<div class="grid__item price-total">
							<p>
								<span class="money" data-currency-usd="$223.00 USD" data-currency="USD">$223.00 USD</span>
							</p>
						</div>
					</div>
					<p class="text-center">
						Shipping &amp; taxes calculated at checkout
					</p>
					<button type="button" class="btn btn--full cart__shoppingcart" name="shoppingCart" onclick="location.href='cart.php'">
					VER COTIZACIÓN COMPLETA </button>
					<button type="submit" class="btn btn2 btn--full cart__checkout" name="checkout">
					Check Out ? </button>
				</div>
			</form>
		</div>
	</div>
	
	<div id="PageContainer" class="is-moved-by-drawer">
		<!-- Ads Banner -->
		<div id="adv-banner">
			<div id="ads-banner" class="grid--full grid--table">
				<div class="ads-banner-slider owl-carousel">
					<div class="ads-item">
						<img src="assets/images/ads1.png" alt="ads banner 1">
					</div>						
					<div class="ads-item">
						<img src="assets/images/ads2.png" alt="ads banner 2">
					</div>
					<div class="ads-item">
						<img src="assets/images/ads3.png" alt="ads banner 3">
					</div>
				</div>
			</div>
		</div>
	
		<!-- Top Other -->
		<?php include('includes/top_info.php'); ?>

		<!-- Main Header -->
		<header class="site-header">
			<div class="wrapper">
				<div id="main-header" class="grid--full grid--table">
					<?php include('includes/logo.php'); ?>
					<div class="grid__item small--one-whole medium--one-whole four-eighths mobile-bottom">
						<div class="large--hide medium-down--show navigation-icon">
							<div class="grid">
								<div class="grid__item one-half">
									<div class="site-nav--mobile">
										<button type="button" class="icon-fallback-text site-nav__link js-drawer-open-left" aria-controls="NavDrawer" aria-expanded="false">
										<span class="icon icon-hamburger" aria-hidden="true"></span>
										<span class="fallback-text">Menu</span>
										</button>
									</div>
								</div>
							</div>
						</div>
						<?php include('includes/busqueda.php'); ?>
						<div class="large--hide medium-down--show navigation-cart">
							<div class="grid__item text-right">
								<div class="site-nav--mobile">
									<a href="cart.html" class="js-drawer-open-right site-nav__link" aria-controls="CartDrawer" aria-expanded="false">
									<span class="icon-fallback-text">
									<span class="icon icon-cart" aria-hidden="true"></span>
									<span class="fallback-text">Shopping Cart</span>
									</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php include('includes/options_header.php'); ?>
				</div>       
			</div>
		</header>

		<!-- Navigation Bar -->
		<nav class="nav-bar">
			<div class="wrapper">
				<div class="medium-down--hide">
					<!-- begin site-nav -->
					<?php include('includes/menu_principal.php');?>
					<script>
						  $(window).ready(function($) {
							//$('.megamenu__dropdown').css("width",$('#main-header').innerWidth());
						  });
						  $( window ).resize(function() {
							//$('.megamenu__dropdown').css("width",$('#main-header').innerWidth());
						  });
					</script>
				</div>
			</div>
		</nav>    <!-- Main Content -->
    
		<main class="main-content">
			<div class="breadcrumb-wrapper">
				<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
					<a href="index2.php" title="Back to the frontpage">Home</a>
					<span aria-hidden="true">&rsaquo;</span>
					<span>Detalles del producto</span>
				</nav>
				<h1 class="section-header__title">Detalles del producto</h1>
			</div>
			<div class="wrapper">
				<div class="grid--rev">
					<div class="grid__item">
						<div itemscope="" itemtype="http://schema.org/Product">
							<div class="product-single">
								<div class="grid__item large--one-half text-center">
									<div class="product-single__photos" id="ProductPhoto">
									<img src="" alt="Corporis suscipit laboriosam" id="ProductPhotoImg" data-image-id="7500291971">
									
									</div>
									<ul class="product-single__thumbnails grid-uniform" id="ProductThumbs">
									
									<?php


									$sqlprod= "SELECT * FROM producto WHERE idproducto ='$idsel'";
									$result2= array();
									$result2= $link->query($sqlprod);
									while($prodsel=$result2->fetch_assoc()){
										$ar[]=$prodsel;

									if($result2->num_rows>0){
								
										if($prodsel["imagen2"]==Null && $prodsel["imagen3"]==Null ){
											$cantidadImg=0;
										}
										if($prodsel["imagen2"]!=Null || $prodsel["imagen3"]!=Null ){
											$cantidadImg=2;
										}
										if($prodsel["imagen2"]!=Null && $prodsel["imagen3"]!=Null ){
											$cantidadImg=3;
										}
										for ($i=0; $i < $cantidadImg ; $i++) { 																	
											
									?>	
									
										<li class="thumb__element">
											<?php 
											$n=$i+1;
											$numimg= "imagen".$n;
											
											print '<a id="'.$idsel.'" nombre="" href="'.$prodsel[$numimg].'" onclick="return mostrarDescripcion(this.id);" class="product-single__thumbnail">
												 <img width=175px; height=175px; src="'.$prodsel[$numimg].'" alt="Corporis suscipit laboriosam">
												  		</a>';
												  ?>
																						 
										</li>



									<?php 
										}}}

								
									?>
										<script type="text/javascript">
	
										var arrayJS=<?php echo json_encode($ar);?>;
										
										var idselected=<?php echo json_encode($idsel);?>;
										
									</script>
									 </ul>
									 			
								</div>
								<div class="grid__item large--one-half">
									<div class="product-info-left grid__item five-eighths">
									
											<div class="product-description" itemprop="description">
											<h2><label id="labelnombre" ></label></h2>
											<label id="labeldescripcion"></label> 
										</div>
										<div class="product-vendor">
											Colores: <b><label id="labelcolores"></label></b>											
										</div>
										<div class="product-type">
											Técnica de Marca: <b><label id="labeltecnica"></label></b>
										</div>
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
											<meta itemprop="priceCurrency" content="USD">
											<link itemprop="availability" href="http://schema.org/InStock">
											<div class="product-action ">
												<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">
													<div class="selector-wrapper">
													Medidas:	<h6><label id="labelMedidas" for="productSelect-option-0"></label></h6>
													</div>
													
													
													<hr>
													<span class="visually-hidden">Regular price</span>
													<span id="ProductPrice" class="" itemprop="price"><span class="money" data-currency-usd="$89.00 USD" data-currency="USD">Precio: <label id="labelPrecio"></label></span></span>
													<div class="qty_select">
														<label for="Quantity" class="quantity-selector">Quantity</label>
														<div class="js-qty">
															<button type="button" onclick='return restar();' class="js-qty__adjust js-qty__adjust--minus icon-fallback-text" data-id="" data-qty="0">
															<span class="icon icon-minus" aria-hidden="true"></span>
															<span class="fallback-text">−</span>
															</button>
															<input id="cantidad" type="text" class="js-qty__num" value="1" min="1" data-id="" aria-label="quantity" pattern="[0-9]*" name="quantity" >
															<button onclick='return sumar();' type="button" class="js-qty__adjust js-qty__adjust--plus icon-fallback-text" data-id="" data-qty="11">
															<span class="icon icon-plus" aria-hidden="true"></span>
															<span class="fallback-text">+</span>
															</button>
														</div>
													</div>
													<?php print '
													<button type="button" name="add" id="AddToCart" onclick="addToCart('.$idsel.');"class="btn">
														<span id="AddToCartText">Añadir al Carrito</span>
													</button> ';?>
												</form>
												
											</div>
										</div>
										<div class="detail-social">
											<div class="social-sharing">
												<a target="_blank" href="#" class="share-facebook">
												<span class="icon icon-facebook" aria-hidden="true"></span>
												<span class="share-title">Share</span>
												<span class="share-count">0</span>
												</a>
												<a target="_blank" href="#" class="share-twitter">
												<span class="icon icon-twitter" aria-hidden="true"></span>
												<span class="share-title">Tweet</span>
												<span class="share-count">0</span>
												</a>
												<a target="_blank" href="#" class="share-pinterest">
												<span class="icon icon-pinterest" aria-hidden="true"></span>
												<span class="share-title">Pin it</span>
												<span class="share-count">0</span>
												</a>
												<a target="_blank" href="#" class="share-fancy">
												<span class="icon icon-fancy" aria-hidden="true"></span>
												<span class="share-title">Fancy</span>
												</a>
												<a target="_blank" href="#" class="share-google">
												<!-- Cannot get Google+ share count with JS yet -->
												<span class="icon icon-google" aria-hidden="true"></span>
												<span class="share-count">+1</span>
												</a>
												<a target="_blank" href="#" class="share-email">
												<i class="fa fa-envelope"></i>
												</a>
											</div>
										</div>
									</div>
									
									<div class="next-prev-button">
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer class="site-footer">       
			
			<?php
				include('includes/info_footer.php');
			?>			
			<div class="grid__item footer_product_categories">
				<div class="wrapper">
					<div class="fi-title">
						Product Categories
					</div>
					<div class="fi-content">
						<ul class="product_categories_list">
							<li class="pc-items">
							<a href="collection.html">Beauty &amp; Health</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Book</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Camera - Camcorder</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Clothing</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Home Appliances</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Homelife</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Kids &amp; Baby</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Smartphones &amp; Cell Phones</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Sport &amp; Outdoor</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Stationery</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
			
			
			<script type="text/javascript">
			  $(function () {
				$(".fi-title").click(function(){
				  $(this).toggleClass('opentab');
				});
			  });
			</script>         
		</footer>
	</div>

	<div id="scroll-to-top" title="Scroll to Top" class="off">
		<i class="fa fa-caret-up"></i>
	</div>
    
    <script>
		var tada_index,tada_autosearchcomplete,tada_swiftype,tada_ads,tada_adsspeed,tada_slideshowtime,tada_block1gallery=false,tada_block1product=false, tada_newsletter=false;
		  tada_index=1;
		  tada_ads=1;
		  tada_adsspeed=5000;
		  tada_slideshowtime = 30000;
		  tada_block1gallery = true;
		  tada_block1product = true;
		  tada_newsletter = true;
    </script>
  
	<script src="assets/js/modernizr.min.js" type="text/javascript"></script>
	<script src="assets/js/timber.js" type="text/javascript"></script>
  
	<div id="quick-shop-modal" class="modal quick-shop" style="display:none;">
		<div class="modal-dialog fadeIn">
			<div class="modal-content">
				<div class="modal-body">
					<div class="quick-shop-modal-bg">
					</div>
					<div class="grid__item one-half qs-product-image">
						<div id="quick-shop-image" class="product-image-wrapper">
							<div id="featuted-image" class="main-image featured">
								<img class="img-zoom img-responsive image-fly" src="assets/images/demo1_qs_480x480.jpg" data-zoom-image="assets/images/demo1_qs_480x480.jpg" alt="">
							</div>
							<div id="gallery_main_qs" class="product-image-thumb scroll scroll-mini">
								<div class="qs-vertical-slider product-single__thumbnails">
										<a class="image-thumb active thumb__element"><img src="assets/images/demo1_qs1_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="assets/images/demo1_qs2_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="assets/images/demo1_qs3_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="assets/images/demo1_qs4_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="assets/images/demo1_qs5_100x100.jpg" alt="" /></a>										
								</div>
							</div>
							<div class="vertical-slider product-single__thumbnails" style="opacity: 0;">
							</div>
						</div>
					</div>
					<div class="grid__item one-half qs-product-information">
						<div id="quick-shop-container">
							<h3 id="quick-shop-title"><a href="product.html">Corporis suscipit laboriosam</a></h3>
							<div class="rating-star">
								<span class="shopify-product-reviews-badge" data-id="3008529923"></span>
							</div>
							<div class="description">
								<div id="quick-shop-description" class="text-left">
									<p>
										Quisque vel enim quis purus ultrices consequat, sed tincidunt massa blandit ipsum interdum tristique cras dictum, lacus eu molestie elementum nulla est auctor. Etiam dan lorem quis ligula elementum porttitor quisem. Duis eget purus urna fusce sed scelerisque ante. Lorem ipsum dolor sit amet conse...
									</p>
								</div>
							</div>
							<form action="#" method="post" class="variants" id="AddToCartForm" enctype="multipart/form-data">
								<div id="quick-shop-price-container" class="detail-price">
									<span class="price"><span class="money">$89.00</span></span>
								</div>
								<div class="quantity-wrapper clearfix">
									<label class="wrapper-title">Quantity</label>
									<div class="wrapper">
										<span class="qty-down" title="Decrease" data-src="#qs-quantity">
										<i class="fa fa-minus"></i>
										</span>
										<input type="text" id="qs-quantity" size="5" class="item-quantity" name="quantity" value="1">
										<span class="qty-up" title="Increase" data-src="#qs-quantity">
										<i class="fa fa-plus"></i>
										</span>
									</div>
								</div>
								<div id="quick-shop-variants-container" class="variants-wrapper" style="display: block;">
									<div class="selector-wrapper">
										<label for="#quick-shop-variants-3008529731-option-0">Size</label>
										<select class="single-option-selector" data-option="option1" id="#quick-shop-variants-3008529731-option-0">
											<option value="XS">XS</option>
											<option value="S">S</option>
											<option value="M">M</option>
											<option value="L">L</option>
											<option value="XL">XL</option>
										</select>
									</div>
									<div class="selector-wrapper">
										<label for="#quick-shop-variants-3008529731-option-1">Color</label>
										<select class="single-option-selector" data-option="option2" id="#quick-shop-variants-3008529731-option-1">
											<option value="Black">Black</option>
											<option value="Red">Red</option>
											<option value="Green">Green</option>
											<option value="Blue">Blue</option>
											<option value="White">White</option>
										</select>
									</div>
								</div>
								<div class="others-bottom">
									<input id="AddToCart" class="btn btn-1 small add-to-cart" type="submit" name="add" value="Buy Now">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">	  
	  jQuery(document).ready(function($) {  
		if($('.quantity-wrapper').length){
		  $('.quantity-wrapper').on('click', '.qty-up', function() {
			var $this = $(this);
			var qty = $this.data('src');
			$(qty).val(parseInt($(qty).val()) + 1);
		  });
		  $('.quantity-wrapper').on('click', '.qty-down', function() {
			var $this = $(this);
			var qty = $this.data('src');
			if(parseInt($(qty).val()) > 1)
			  $(qty).val(parseInt($(qty).val()) - 1);
		  });
		}	 			 
	  });
	</script>
	
</body>