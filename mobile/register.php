
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
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/ratchet/ratchet.css" rel="stylesheet">
	
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
			<a class="btn btn-link btn-nav pull-left" href="#" onclick="history.go(-1); return false;">
				<span class="icon icon-left-nav"></span>
			</a>
			<a class="btn btn-link btn-nav pull-right toggle-panel" href="#panel-menu">
				<span class="icon icon-bars"></span>
			</a>
			<h1 class="title">Register Account</h1>
		</header>
		<!-- //End Bar Nav -->
		
		<div class="content account-register">
			<!-- //Begin Main Content -->
			<div class="container page-sitemap">
				<div class="row">
				
					<div id="content" class="col-xs-12">
						<h1>Register Account</h1>
						<p>If you already have an account with us, please login at the <a href="login.php">login page</a>.</p>
						<form action="register.php" method="post" enctype="multipart/form-data" class="form-horizontal">
							<fieldset id="account">
								<legend>Your Personal Details</legend>
								<div class="form-group required" style="display: none;">
									<label class="col-sm-2 control-label">Customer Group</label>
									<div class="col-sm-10">
										<div class="radio">
											<label>
												<input type="radio" name="customer_group_id" value="1" checked="checked"> Default
											</label>
										</div>
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-firstname">First Name</label>
									<div class="col-sm-10">
										<input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control">
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
									<div class="col-sm-10">
										<input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control">
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
									<div class="col-sm-10">
										<input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
									<div class="col-sm-10">
										<input type="tel" name="telephone" value="" placeholder="Telephone" id="input-telephone" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="input-fax">Fax</label>
									<div class="col-sm-10">
										<input type="text" name="fax" value="" placeholder="Fax" id="input-fax" class="form-control">
									</div>
								</div>
							</fieldset>
							<fieldset id="address">
								<legend>Your Address</legend>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="input-company">Company</label>
									<div class="col-sm-10">
										<input type="text" name="company" value="" placeholder="Company" id="input-company" class="form-control">
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-address-1">Address 1</label>
									<div class="col-sm-10">
										<input type="text" name="address_1" value="" placeholder="Address 1" id="input-address-1" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="input-address-2">Address 2</label>
									<div class="col-sm-10">
										<input type="text" name="address_2" value="" placeholder="Address 2" id="input-address-2" class="form-control">
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-city">City</label>
									<div class="col-sm-10">
										<input type="text" name="city" value="" placeholder="City" id="input-city" class="form-control">
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-postcode">Post Code</label>
									<div class="col-sm-10">
										<input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control">
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-country">Country</label>
									<div class="col-sm-10">
										<select name="country_id" id="input-country" class="form-control">
											<option value=""> --- Please Select --- </option>
											<option value="244">Aaland Islands</option>
											<option value="1">Afghanistan</option>
											<option value="2">Albania</option>
											<option value="3">Algeria</option>
											<option value="4">American Samoa</option>
											<option value="5">Andorra</option>
											<option value="6">Angola</option>
											<option value="7">Anguilla</option>
											<option value="234">Western Sahara</option>
											<option value="235">Yemen</option>
											<option value="238">Zambia</option>
											<option value="239">Zimbabwe</option>
										</select>
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-zone">Region / State</label>
									<div class="col-sm-10">
										<select name="zone_id" id="input-zone" class="form-control">
											<option value=""> --- Please Select --- </option>
											<option value="3513">Aberdeen</option>
											<option value="3514">Aberdeenshire</option>
											<option value="3515">Anglesey</option>
											<option value="3516">Angus</option>
											<option value="3517">Argyll and Bute</option>
											<option value="3612">Wrexham</option>
										</select>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend>Your Password</legend>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-password">Password</label>
									<div class="col-sm-10">
										<input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
									<div class="col-sm-10">
										<input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend>Newsletter</legend>
								<div class="form-group">
									<label class="col-sm-2 control-label">Subscribe</label>
									<div class="col-sm-10">
										<label class="radio-inline">
											<input type="radio" name="newsletter" value="1"> Yes
										</label>
										<label class="radio-inline">
											<input type="radio" name="newsletter" value="0" checked="checked"> No
										</label>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend class="hidden">Captcha</legend>
								<div class="form-group required">
									<div class="col-sm-12">
										<input type="text" name="captcha" id="input-captcha" class="form-control" placeholder="Enter the code in the box below*">
										<img src="../image/demo/content/captcha.jpg" alt="">
									</div>
								</div>
							</fieldset>
							<div class="buttons">
								<div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Terms And Conditions</b></a>
									<input type="checkbox" name="agree" value="1"> &nbsp;
									<input type="submit" value="Continue" class="btn btn-primary">
								</div>
							</div>
						</form>
					</div>
					<aside class="col-xs-12 content-aside right_column">
						<div class="module">
							<h3 class="modtitle"><span>Account</span></h3>
							<div class="module-content custom-border">
								<ul class="list-box">
									<li><a href="#">Login</a> / <a href="#">Register</a>
									</li>
									<li><a href="#">Forgotten Password</a>
									</li>
									<li><a href="#">My Account</a>
									</li>
									<li><a href="#">Address Book</a>
									</li>
									<li><a href="#">Wish List</a>
									</li>
									<li><a href="#">Order History</a>
									</li>
									<li><a href="#">Downloads</a>
									</li>
									<li><a href="#">Recurring payments</a>
									</li>
									<li><a href="#">Reward Points</a>
									</li>
									<li><a href="#">Returns</a>
									</li>
									<li><a href="#">Transactions</a>
									</li>
									<li><a href="#">Newsletter</a>
									</li>
								</ul>
							</div>
						</div>
					</aside>
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

<!-- Theme files
============================================ -->

</body>
</html>		