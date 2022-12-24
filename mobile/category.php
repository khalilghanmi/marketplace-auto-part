
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
	============================================ -->
	<title>Autoparts - Multipurpose Responsive HTML5 Template</title>
	<meta charset="utf-8">
  <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
<meta name="description" content="Autoparts is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png"/>
	
	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/ratchet/ratchet.css" rel="stylesheet">
	<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="css/themecss/lib.css" rel="stylesheet">

	
	<!-- Theme CSS
	============================================ -->
	<link href="css/mobile.css" rel="stylesheet">
	
	

</head>

<body class="ltr mobilelayout-0">
	<!-- Begin Main wrapper -->
    <div id="wrapper" >
		
		<!-- Begin Bar Tab -->
		<nav class="bar bar-tab">
			<a class="tab-item " href="index.php" data-transition="slide-in">
				<span class="icon icon-home"></span>
				<span class="tab-label">Home</span>
			</a>
			<a class="tab-item" href="#" data-transition="slide-in">
				<span class="icon icon-search"></span>
				<span class="tab-label">Search</span>
			</a>
			<a class="tab-item item-cart" href="checkout.php" data-transition="slide-in">
				<span class="icon icon-download"></span>
				<div id="cart" class="btn-shopping-cart">
					<span class="total-shopping-cart cart-total-full">
						 <span class="items_cart">0 </span>			</span>
				</div>
				
				<span class="tab-label">View Cart</span>
			</a>
			<a class="tab-item" href="login.php" data-transition="slide-in">
				<span class="icon icon-person"></span>
				<span class="tab-label">My Account</span>
			</a>
			<a class="tab-item tab-item--more tooltip-popovers" href="#popover">
				<span class="icon icon-more"></span>
				<span class="tab-label">More</span>
			</a>
		</nav>
		<div id="popover" class="popover fade bottom in right">
			
			<ul class="table-view">
				<li class="table-view-cell"><a class="tab-item" href="index.php"> Home </a></li>
				<li class="table-view-cell"><a class="tab-item" href="home2.php"> Home 2 </a></li>
				<li class="table-view-cell"><a class="tab-item" href="home3.php"> Home 3 </a></li>
			</ul>
		</div>
		<!-- //End Bar Tab -->
		
		<!-- Begin Bar Nav -->
		<header class="bar bar-nav ">
			<a class="btn btn-link btn-nav pull-left" href="#" >
				<span class="icon icon-left-nav"></span>
			</a>
			<a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
				<span class="icon icon-bars"></span>
			</a>
			<h1 class="title">Jewelry</h1>
		</header>
		<!-- //End Bar Nav -->
		
		<div class="content">
			<!-- //Begin Main Content -->
			<div class="container page-category">
				<div class="row">
					<aside class="col-xs-12 content-aside left_column sidebar-offcanvas">
						<span id="close-sidebar" class="btn btn-default"><i class="fa fa-times"></i></span>
						<div class="module ">
							<div class="modcontent ">
								<form class="type_2">

									<div class="table_layout filter-shopby">
										<div class="table_row">
											<!-- - - - - - - - - - - - - - Category filter - - - - - - - - - - - - - - - - -->
											<div class="table_cell" style="z-index: 103;">
												<legend>Search</legend>
												<input class="form-control no-margin" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
											</div>
											<!--/ .table_cell -->
											<!-- - - - - - - - - - - - - - End of category filter - - - - - - - - - - - - - - - - -->
											<!-- - - - - - - - - - - - - - SUB CATEGORY - - - - - - - - - - - - - - - - -->
											<div class="table_cell">
												<fieldset>
													<legend>Sub Category</legend>
													<ul class="checkboxes_list">
														<li>
															<input type="checkbox" checked="" name="category" id="category_1">
															<label for="category_1">Smartphone &amp; Tablets</label>
														</li>
														<li>
															<input type="checkbox" name="category" id="category_2">
															<label for="category_2">Electronics</label>
														</li>
														<li>
															<input type="checkbox" name="category" id="category_3">
															<label for="category_3">Shoes</label>
														</li>
														<li>
															<input type="checkbox" name="category" id="category_4">
															<label for="category_4">Watches</label>
														</li>

													</ul>

												</fieldset>

											</div>
											<!--/ .table_cell -->
											<!-- - - - - - - - - - - - - - End SUB CATEGORY - - - - - - - - - - - - - - - - -->
											<!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->
											<div class="table_cell">
												<fieldset>
													<legend>Manufacturer</legend>
													<ul class="checkboxes_list">
														<li>
															<input type="checkbox" checked="" name="manufacturer" id="manufacturer_1">
															<label for="manufacturer_1">Manufacturer 1</label>
														</li>
														<li>
															<input type="checkbox" name="manufacturer" id="manufacturer_2">
															<label for="manufacturer_2">Manufacturer 2</label>
														</li>
														<li>
															<input type="checkbox" name="manufacturer" id="manufacturer_3">
															<label for="manufacturer_3">Manufacturer 3</label>
														</li>

													</ul>

												</fieldset>

											</div>
											<!--/ .table_cell -->
											<!-- - - - - - - - - - - - - - End manufacturer - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
											<div class="table_cell">
												<fieldset>
													<legend>Price</legend>
													<div class="range">
														Range :
														<span class="min_val">$10.00</span> -
														<span class="max_val">$383.00</span>
														<input type="hidden" name="" class="min_value" value="10.00">
														<input type="hidden" name="" class="max_value" value="383.00">
													</div>
													<div id="slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
														<div class="ui-slider-range ui-widget-header ui-corner-all"></div>
														<span class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></span>
														<span class="ui-slider-handle ui-state-default ui-corner-all" style="left: 65.4397%;"></span>
														<div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 65.4397%;"></div>
													</div>
												</fieldset>
											</div>
											<!--/ .table_cell -->

											<!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

											<div class="table_cell">

												<fieldset>

													<legend>Color</legend>

													<div class="row">

														<div class="col-sm-6">

															<ul class="simple_vertical_list">

																<li>

																	<input type="checkbox" name="" id="color_btn_1">
																	<label for="color_btn_1" class="color_btn green">Green</label>

																</li>

																<li>

																	<input type="checkbox" name="" id="color_btn_2">
																	<label for="color_btn_2" class="color_btn yellow">Yellow</label>

																</li>

																<li>
																	<input type="checkbox" name="" id="color_btn_3">
																	<label for="color_btn_3" class="color_btn red">Red</label>

																</li>

															</ul>

														</div>

														<div class="col-sm-6">

															<ul class="simple_vertical_list">

																<li>
																	<input type="checkbox" name="" id="color_btn_4">
																	<label for="color_btn_4" class="color_btn blue">Blue</label>
																</li>

																<li>
																	<input type="checkbox" name="" id="color_btn_5">
																	<label for="color_btn_5" class="color_btn grey">Grey</label>
																</li>

																<li>
																	<input type="checkbox" name="" id="color_btn_6">
																	<label for="color_btn_6" class="color_btn orange">Orange</label>
																</li>

															</ul>

														</div>

													</div>

												</fieldset>

											</div>
											<!--/ .table_cell -->

											<!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

										</div>
										<!--/ .table_row -->
										<footer class="bottom_box">
											<div class="buttons_row">
												<button type="submit" class="button_grey button_submit">Search</button>
												<button type="reset" class="button_grey filter_reset">Reset</button>
											</div>
										        <!--Back To Top-->
        <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
    </footer>
									</div>
									<!--/ .table_layout -->



								</form>
							</div>
						</div>
					</aside>
					
					<div id="content" class="col-xs-12">
						<div class="sidebar-overlay"></div>
						
						<div class="products-category">
							<a class="btn btn-block btn-outlined btn-collapse collapsed" role="button" data-toggle="collapse" href="#collapseCategory" aria-expanded="false"> More Category </a>

							<div id="collapseCategory" class="product-catalog__mode collapse" aria-expanded="false" style="height: 0px;">
								<div class="form-group">
									<p><span style="line-height: 17.1428px;">Shop Laptop feature only the best laptop deals on the market. By comparing laptop deals from the likes of PC World, Comet, Dixons,<br> The Link and Carphone Warehouse, Shop Laptop has the most comprehensive selection of laptops on the internet. At Shop Laptop, we pride ourselves on offering customers the very best laptop deals.</span>
										
									</p>

								</div>

								<div class="refine-search form-group">
									<h3 class="title-category">Refine Search</h3>
									<ul class="row refine-search__list">
										<li class="col-xs-6">
											<a href="#" class="thumbnail"><img src="http://opencart.opencartworks.com/themes/so_revo/image/cache/placeholder-133x75.png" alt="Necklaces"> </a>
											<a href="#">Necklaces</a>
										</li>
										<li class="col-xs-6">
											<a href="#" class="thumbnail"><img src="http://opencart.opencartworks.com/themes/so_revo/image/cache/placeholder-133x75.png" alt="Pearl Jewelry"> </a>
											<a href="#">Pearl Jewelry</a>

										</li>
										<li class="col-xs-6">
											<a href="#" class="thumbnail"><img src="http://opencart.opencartworks.com/themes/so_revo/image/cache/placeholder-133x75.png" alt="Slider 925"> </a>
											<a href="#">Slider 925</a>

										</li>
									</ul>

								</div>
							</div>


							<!--// Begin Select Category Simple -->
							<!-- Filters -->
							<div class="product-filter filters-panel clearfix">
								<div class="col-xs-4 view-mode ">
									
									<div class="list-view">
										<button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
										<button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
									</div>
									
								</div>


								<div class="col-xs-4 ">
									<a class="btn btn-primary open-sidebar" href="javascript:void(0)"><i class="fa fa-filter"></i> Refine </a>
								</div>

								<div class="short-by-show col-xs-4">

									<div class="form-group short-by">
										<i class="fa fa-sort-amount-asc"></i>
										<select id="input-sort" class="form-control" onchange="location = this.value;">
											<option value="http://opencart.opencartworks.com/themes/so_revo/index.php?route=product/category&amp;path=20&amp;sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
											<option value="http://opencart.opencartworks.com/themes/so_revo/index.php?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=ASC">Name (A - Z)</option>
											<option value="http://opencart.opencartworks.com/themes/so_revo/index.php?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=DESC">Name (Z - A)</option>
											<option value="http://opencart.opencartworks.com/themes/so_revo/index.php?route=product/category&amp;path=20&amp;sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
											<option value="http://opencart.opencartworks.com/themes/so_revo/index.php?route=product/category&amp;path=20&amp;sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
											<option value="http://opencart.opencartworks.com/themes/so_revo/index.php?route=product/category&amp;path=20&amp;sort=rating&amp;order=DESC">Rating (Highest)</option>
											<option value="http://opencart.opencartworks.com/themes/so_revo/index.php?route=product/category&amp;path=20&amp;sort=rating&amp;order=ASC">Rating (Lowest)</option>
											<option value="http://opencart.opencartworks.com/themes/so_revo/index.php?route=product/category&amp;path=20&amp;sort=p.model&amp;order=ASC">Model (A - Z)</option>
											<option value="http://opencart.opencartworks.com/themes/so_revo/index.php?route=product/category&amp;path=20&amp;sort=p.model&amp;order=DESC">Model (Z - A)</option>
										</select>
									</div>

								</div>


							</div>
							<!-- //end Filters -->

							<!--Changed Listings-->
							<div class="products-list row nopadding-xs grid so-filter-gird">
								<div class="product-layout col-xs-6">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container ">
												<a href="#" title="amper modi dolores">
													<img src="../image/demo-mobile/product/18.jpg" title="amper modi dolores" class="img-responsive">
												</a>
											</div>

										</div>
										<div class="box-label">
											<!--Sale Label-->
											<span class="label-product label-sale">
												-28% 
											</span>

										</div>

										<div class="right-block">
											<div class="caption">
												<h4><a href="product.php">amper modi dolores</a></h4>
												<div class="ratings">
													<div class="rating-box">
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													</div>
												</div>
												<div class="description ">
													<p>rem ipsum dolor sit amet, consetetursadipscing elitr, sed diam no...</p>
												</div>
												<div class="price">
													<span class="price-new">$85.00</span> <span class="price-old">$118.00</span>
												</div>
												<div class="button-group">
													<button class="addToCart font-sn" type="button" title="Add to Cart" onclick="cart.add('175', '1');"> <i class="fa fa-shopping-cart"></i><span><span>Add to Cart</span></span></button>
													<button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('175');"><i class="fa fa-heart-o"></i></button>
													<button class="compare btn-button" type="button" title="Compare this Product" onclick="compare.add('175');"><i class="fa fa-retweet"></i></button>
												</div>
												
											</div>

										</div>
									</div>
								</div>


								<div class="product-layout col-xs-6">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container ">
												<a href="#" title="Eius modi tempor">
													<img src="../image/demo-mobile/product/19.jpg" title="Eius modi tempor" class="img-responsive">
												</a>
											</div>

										</div>
										<div class="box-label">
											<!--Sale Label-->
											<span class="label-product label-sale">
												-21% 
											</span>

										</div>

										<div class="right-block">
											<div class="caption">
												<h4><a href="product.php">Eius modi tempor</a></h4>
												<div class="ratings">
													<div class="rating-box">
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													</div>
												</div>
												<div class="description  ">
													<p>rem ipsum dolor sit amet, consetetursadipscing elitr, sed diam no...</p>
												</div>	
												<div class="price">
													<span class="price-new">$30.00</span> <span class="price-old">$38.00</span>
												</div>
												<div class="button-group">
													<button class="addToCart font-sn" type="button" title="Add to Cart" onclick="cart.add('175', '1');"> <i class="fa fa-shopping-cart"></i><span><span>Add to Cart</span></span></button>
													<button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('175');"><i class="fa fa-heart-o"></i></button>
													<button class="compare btn-button" type="button" title="Compare this Product" onclick="compare.add('175');"><i class="fa fa-retweet"></i></button>
												</div>
												
											</div>

										</div>
									</div>
								</div>
								<div class="clearfix visible-xs-block"></div>

								<div class="product-layout col-xs-6">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container ">
												<a href="#" title="Magni Dolores">
													<img src="../image/demo-mobile/product/10.jpg" title="Magni Dolores" class="img-responsive">
												</a>
											</div>

										</div>
										<div class="box-label">
											<!--Sale Label-->

										</div>

										<div class="right-block">
											<div class="caption">
												<h4><a href="product.php">Magni Dolores</a></h4>
												<div class="ratings">
													<div class="rating-box">
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													</div>
												</div>
												<div class="description  ">
													<p>rem ipsum dolor sit amet, consetetursadipscing elitr, sed diam no...</p>
												</div>	
												<div class="price">
													<span class="price-new">$68.00</span>
												</div>
												<div class="button-group">
													<button class="addToCart font-sn" type="button" title="Add to Cart" onclick="cart.add('175', '1');"> <i class="fa fa-shopping-cart"></i><span><span>Add to Cart</span></span></button>
													<button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('175');"><i class="fa fa-heart-o"></i></button>
													<button class="compare btn-button" type="button" title="Compare this Product" onclick="compare.add('175');"><i class="fa fa-retweet"></i></button>
												</div>
												
											</div>

										</div>
									</div>
								</div>


								<div class="product-layout col-xs-6">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container ">
												<a href="#" title="Neque Porro Qui">
													<img src="../image/demo-mobile/product/9.jpg" title="Neque Porro Qui" class="img-responsive">
												</a>
											</div>

										</div>
										<div class="box-label">
											<!--Sale Label-->

										</div>

										<div class="right-block">
											<div class="caption">
												<h4><a href="product.php">Neque Porro Qui</a></h4>
												<div class="ratings">
													<div class="rating-box">
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													</div>
												</div>
												<div class="description  ">
													<p>rem ipsum dolor sit amet, consetetursadipscing elitr, sed diam no...</p>
												</div>
												<div class="price">
													<span class="price-new">$96.00</span>
												</div>
												<div class="button-group">
													<button class="addToCart font-sn" type="button" title="Add to Cart" onclick="cart.add('175', '1');"> <i class="fa fa-shopping-cart"></i><span><span>Add to Cart</span></span></button>
													<button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('175');"><i class="fa fa-heart-o"></i></button>
													<button class="compare btn-button" type="button" title="Compare this Product" onclick="compare.add('175');"><i class="fa fa-retweet"></i></button>
												</div>
												
											</div>

										</div>
									</div>
								</div>
								<div class="clearfix visible-xs-block"></div>

								<div class="product-layout col-xs-6">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container ">
												<a href="#" title="normal modi sokale">
													<img src="../image/demo-mobile/product/18.jpg" title="normal modi sokale" class="img-responsive">
												</a>
											</div>

										</div>
										<div class="box-label">
											<!--Sale Label-->

										</div>

										<div class="right-block">
											<div class="caption">
												<h4><a href="product.php">normal modi sokale</a></h4>
												<div class="ratings">
													<div class="rating-box">
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													</div>
												</div>
												<div class="description  ">
													<p>rem ipsum dolor sit amet, consetetursadipscing elitr, sed diam no...</p>
												</div>
												<div class="price">
													<span class="price-new">$88.00</span>
												</div>
												<div class="button-group">
													<button class="addToCart font-sn" type="button" title="Add to Cart" onclick="cart.add('175', '1');"> <i class="fa fa-shopping-cart"></i><span><span>Add to Cart</span></span></button>
													<button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('175');"><i class="fa fa-heart-o"></i></button>
													<button class="compare btn-button" type="button" title="Compare this Product" onclick="compare.add('175');"><i class="fa fa-retweet"></i></button>
												</div>
												
											</div>

										</div>
									</div>
								</div>

								<div class="product-layout col-xs-6">
									<div class="product-item-container">
										<div class="left-block">
											<div class="product-image-container ">
												<a href="#" title="normal modi sokale">
													<img src="../image/demo-mobile/product/E2.jpg" title="normal modi sokale" class="img-responsive">
												</a>
											</div>

										</div>
										<div class="box-label">
											<!--Sale Label-->

										</div>

										<div class="right-block">
											<div class="caption">
												<h4><a href="product.php">normal modi sokale</a></h4>
												<div class="ratings">
													<div class="rating-box">
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
														<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
													</div>
												</div>
												<div class="description  ">
													<p>rem ipsum dolor sit amet, consetetursadipscing elitr, sed diam no...</p>
												</div>
												<div class="price">
													<span class="price-new">$88.00</span>
												</div>
												<div class="button-group">
													<button class="addToCart font-sn" type="button" title="Add to Cart" onclick="cart.add('175', '1');"> <i class="fa fa-shopping-cart"></i><span><span>Add to Cart</span></span></button>
													<button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('175');"><i class="fa fa-heart-o"></i></button>
													<button class="compare btn-button" type="button" title="Compare this Product" onclick="compare.add('175');"><i class="fa fa-retweet"></i></button>
												</div>
												
											</div>

										</div>
									</div>
								</div>
							</div>
							<!--// End Changed listings-->

							<!-- Filters -->
							<div class="product-filter text-center clearfix filters-panel">
								<div class="short-by-show text-center">
									<div class="form-group" style="margin:0px">Showing 1 to 6 of 6 (1 Pages)</div>
								</div>
							</div>
							<!-- //end Filters -->

							<!--End content-->


						</div>
						
					</div>
					
				</div>
			</div>
			

			<!-- //End Main Content -->
			
			<!-- //Begin Footer Content -->
			<div class="container footer-content">
				<div class="footernav-top">
					<div class="need-help">
						<p>Need Help</p>
						<div class="nh-contact">
							<a href="tel:12345678"><i class="fa fa-phone"></i>12345678</a> <a class="need-help-padding" href="mailto:Support@revo.com" target="_top"><i class="fa fa-envelope-o"></i> Email Us</a> </div>
					</div>
				</div>

				<div class="footernav-social">
					<p><a href="javascript:void(0);">FIND US ON</a>
					</p>
					<ul class="list-inline">
						<li>
							<a href="https://www.facebook.com/MagenTech/" target="_blank"> <i class="fa fa-facebook social-icon"></i>
							</a>
						</li>
						<li>
							<a href="https://twitter.com/magentech" target="_blank"> <i class="fa fa-twitter social-icon"></i>
							</a>
						</li>
						<li>
							<a href="https://plus.google.com/+Magentech-responsive-magento-theme" target="_blank"> <i class="fa fa-google-plus social-icon"></i>
							</a>
						</li>
					</ul>
				</div>

				<div class="footernav-midde">
					<ul class="footer-link-list row">
						<li class="col-xs-6"><a href="about-us.php"> About us </a></li>
						<li class="col-xs-6"><a href="sitemap.php"> Sitemap </a></li>
						<li class="col-xs-6"><a href="blog-detail.php"> Blog Detail </a></li>
						<li class="col-xs-6"><a href="category.php"> Category  </a></li>
						
						<li class="col-xs-6"><a href="blogs.php"> Blog </a></li>
						<li class="col-xs-6"><a href="product.php"> Product </a></li>
						<li class="col-xs-6"><a href="login.php"> Login </a></li>
						<li class="col-xs-6"><a href="checkout.php"> Checkout </a></li>
						<li class="col-xs-6"><a href="register.php"> Register </a></li>
						<li class="col-xs-6"><a href="contact.php"> Contact </a></li>
											
					</ul>
				</div>

				<div class="footernav-bottom">
					<div class="text-center">
						<p class="nomargin"><img alt="Footer Image" class="form-group" src="../image/demo/payment/payment_method_mob.png">
						</p>
						Copyright © 2017 by Market. All Rights Reserved.
					</div>
				</div>
			</div>
			<!-- //End Footer Content -->
		</div>

    </div>
	
	<div id="panel-menu" class="side-menu panel panel-left">
		<div class="content">
			<div class="panel-left__top clearfix text-center">
				<div class="panel-logo">
					<a href="index.php"><img src="../image/demo-mobile/logo.png" title="Your Store" alt="Your Store"></a>
				</div>
				<div class="panel-search">
					<div id="search" class="input-group">
						<input type="text" name="search" value="" placeholder="Search" class="form-control input-lg">
						<span class="input-group-btn">
							<button type="button" class="btn btn-default btn-link"><i class="fa fa-search"></i></button>
						  </span>
					</div>
				</div>
			</div>
			
			<div class="panel-left__midde">
				<div class="panel-group" id="panel-category" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab">
							<a href="#">Jewelry</a>
							<span class="head"><a class="pull-right accordion-toggle" data-toggle="collapse" data-parent="#panel-category" href="#panel-category1" aria-expanded="true"></a></span>
						</div>
						<div id="panel-category1" class="panel-collapse collapse " role="tabpanel">
							<ul>
								<li>
									<a href="#">Necklaces</a>
								</li>
								<li>
									<a href="#">Pearl Jewelry</a>
								</li>
								<li>
									<a href="#">Slider 925</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab">
							<a href="#">Womens</a>
							<span class="head"><a class="pull-right accordion-toggle" data-toggle="collapse" data-parent="#panel-category" href="#panel-category2" aria-expanded="true"></a></span>
						</div>
						<div id="panel-category2" class="panel-collapse collapse " role="tabpanel">
							<ul>
								<li>
									<a href="#">necklaces</a>
								</li>
								<li>
									<a href="#">Pearl mens</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab">
							<a href="#">Fashion</a>
							<span class="head"><a class="pull-right accordion-toggle" data-toggle="collapse" data-parent="#panel-category" href="#panel-category3" aria-expanded="true"></a></span>
						</div>

						<div id="panel-category3" class="panel-collapse collapse " role="tabpanel">
							<ul>
								<li>
									<a href="#">Gadgets &amp; Auto Parts</a>
								</li>
								<li>
									<a href="#">More Car Accessories</a>
								</li>
								<li>
									<a href="#">Alarms</a>
								</li>
								<li>
									<a href="#">Printers</a>
								</li>
								<li>
									<a href="#">Scanners</a>
								</li>
								<li>
									<a href="#">Speakers</a>
								</li>
								<li>
									<a href="#">Web Cameras</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab">
							<a href="#">Shop Collection</a>
							<span class="head"><a class="pull-right accordion-toggle" data-toggle="collapse" data-parent="#panel-category" href="#panel-category4" aria-expanded="true"></a></span>

						</div>

						<div id="panel-category4" class="panel-collapse collapse " role="tabpanel">
							<ul>
								<li>
									<a href="#">Hanet magente</a>
								</li>
								<li>
									<a href="#">Knage unget</a>
								</li>
								<li>
									<a href="#">Latenge mange</a>
								</li>
								<li>
									<a href="#">Punge nenune</a>
								</li>
								<li>
									<a href="#">Qunge genga</a>
								</li>
								<li>
									<a href="#">Tange manue</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab">
							<a href="#">Electronics </a>
							<span class="head"><a class="pull-right accordion-toggle" data-toggle="collapse" data-parent="#panel-category" href="#panel-category5" aria-expanded="true"></a></span>

						</div>

						<div id="panel-category5" class="panel-collapse collapse " role="tabpanel">
							<ul>
								<li>
									<a href="#">Angene mafin</a>
								</li>
								<li>
									<a href="#">Body Chains</a>
								</li>
								<li>
									<a href="#">DIY Beads</a>
								</li>
								<li>
									<a href="#">Egante mangetes</a>
								</li>
								<li>
									<a href="#">Necklaces</a>
								</li>
								<li>
									<a href="#">Rengae manges</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab">
							<a href="#">Sports 2</a>
							<span class="head"><a class="pull-right accordion-toggle" data-toggle="collapse" data-parent="#panel-category" href="#panel-category6" aria-expanded="true"></a></span>

						</div>

						<div id="panel-category6" class="panel-collapse collapse " role="tabpanel">
							<ul>
								<li>
									<a href="#">Accessories</a>
								</li>
								<li>
									<a href="#">Boys News</a>
								</li>
								<li>
									<a href="#">Computers</a>
								</li>
								<li>
									<a href="#">Electronics</a>
								</li>
								<li>
									<a href="#">Fashion</a>
								</li>
								<li>
									<a href="#">Girls New</a>
								</li>
								<li>
									<a href="#">Men</a>
								</li>
								<li>
									<a href="#">Mobiles</a>
								</li>
								<li>
									<a href="#">Sports</a>
								</li>
								<li>
									<a href="#">Women</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab">
							<a href="#">Sports</a>
							<span class="head"><a class="pull-right accordion-toggle" data-toggle="collapse" data-parent="#panel-category" href="#panel-category7" aria-expanded="true"></a></span>

						</div>

						<div id="panel-category7" class="panel-collapse collapse " role="tabpanel">
							<ul>
								<li>
									<a href="#">Camping &amp; Hiking</a>
								</li>
								<li>
									<a href="#">Cusen mariot</a>
								</li>
								<li>
									<a href="#">Denta magela</a>
								</li>
								<li>
									<a href="#">Engite nanet</a>
								</li>
								<li>
									<a href="#">Theid cupensg</a>
								</li>
								<li>
									<a href="#">Verture agoent</a>
								</li>
							</ul>
						</div>
					</div>
				</div>


			</div>

			<div class="panel-left__bottom clearfix text-center">
				<div class="col-xs-6">
					<i class="fa fa-check-square-o" aria-hidden="true"></i>
					<div class="bot-inner">
						<a href="compare.php">Compare</a>
					</div>
				</div>
				<div class="col-xs-6">
					<i class="fa fa-heart" aria-hidden="true"></i>
					<div class="bot-inner">
						<a href="wishlist.php">Wish List</a>
					</div>
				</div>

				<div class="col-xs-6 panel-left__language">
					<div class="btn-group languages-block">
						<form action="#" method="post" enctype="multipart/form-data" id="form-language">
							<div class="btn-group">
								<button class="btn-link dropdown-toggle" data-toggle="dropdown">
									<img src="../image/demo/flags/gb.png" alt="English" title="English">
									<span class="hidden-xs">English</span>
									<i class="fa fa-angle-down"></i>
								</button>

								<ul class="dropdown-menu">
									<li>
										<button class="btn-block language-select" type="button" name="en-gb"><img src="../image/demo/flags/gb.png" alt="English" title="English"> English</button>
									</li>
									<li>
										<button class="btn-block language-select" type="button" name="ar"><img src="../image/demo/flags/lb.png" alt="Arabic" title="Arabic"> Arabic</button>
									</li>
								</ul>
							</div>
							<input type="hidden" name="code" value="">
							<input type="hidden" name="redirect" value="#">
						</form>
					</div>
					<h4>Language</h4>
				</div>
				<div class="col-xs-6 panel-left__currency">
					<div class="btn-group currencies-block">
						<form action="#" method="post" enctype="multipart/form-data" id="form-currency">
							<div class="btn-group">
								<button class="btn-link dropdown-toggle" data-toggle="dropdown">
									$ USD
									<i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu">
									<li>
										<button class="currency-select btn-block" type="button" name="EUR">€ Euro</button>
									</li>
									<li>
										<button class="currency-select btn-block" type="button" name="USD">$ USD</button>
									</li>
								</ul>
							</div>
							<input type="hidden" name="code" value="">
							<input type="hidden" name="redirect" value="index.php">
						</form>
					</div>

					<h4>Currency</h4>

				</div>
			</div>
		</div>
	</div>
  
<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="js/slick-slider/slick.js"></script>
<script type="text/javascript" src="js/ratchet/ratchet.js"></script>
<script type="text/javascript" src="js/slick/slick.min.js"></script>
<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/themejs/libs.js"></script>
<!-- Theme files
============================================ -->
<script type="text/javascript" src="js/mobile.js"></script>
<script type="text/javascript" src="js/themejs/addtocart.js"></script>

<script type="text/javascript"><!--
	
	$(document).ready(function () {
		// Click Button
		$('.list-view .btn').each(function() {
			var ua = navigator.userAgent,
			event = (ua.match(/iPad/i)) ? 'touchstart' : 'click';
			$(this).bind(event, function() {
				$(this).addClass(function() {
					if($(this).hasClass('active')) return ''; 
					return 'active';
				});
				$(this).siblings('.btn').removeClass('active');
				$catalog_mode = $(this).data('view');
				display($catalog_mode);
			});
			
		});
	});
	
	// Check if Cookie exists
	if ($.cookie('display')) { view = $.cookie('display');}
	else {view = 'grid';}
	
	if(view) display(view);
	
	function display(view) {
		$('.products-list').removeClass('list grid').addClass(view);
		$('.list-view .btn').removeClass('active');
		if(view == 'list') {
			$('.products-list .product-layout').removeClass('col-xs-6').addClass('col-xs-12');
			$('.list-view .' + view).addClass('active');
			$.cookie('display', 'list'); 
		}else{
			$('.products-list .product-layout').removeClass('col-xs-12').addClass('col-xs-6');
			$('.list-view .' + view).addClass('active');
			$.cookie('display', 'grid');
		}
	}
	
		
//--></script>

</body>
</html>		