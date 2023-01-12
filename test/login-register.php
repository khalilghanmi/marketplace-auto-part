<html dir="ltr" lang="en-US">
<meta charset=utf-8 />
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript">
	                         $(function(){
							$('#go').click(function(){
								var da = $('#myform').serialize();
								$.post('postr.php',da,function(data){
									$('#alert').html(data);
								});
							});
							});

						</script>
						<script type="text/javascript">
	                         $(function(){
							$('#gi').click(function(){
								var da = $('#myforme').serialize();
								$.post('login.php',da,function(data){
									if(data == 1){
									window.location.replace("index_cn.php");
									}
								else {
									$('#alerte').html(data);
								}
								});
							});
							});

						</script>
	

	<!-- Document Title
	============================================= -->
	<title>ABC Business Center</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<?php include "headles/menu.php"?>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Identifiez-Vous Inscrire</h1>
				<ol class="breadcrumb">
					<li><a href="http://localhost/pff%2001/index.php">accueil</a></li>
					<li><a href="http://localhost/pff%2001/login-register.php">Inscription</a></li>
					<li class="active">Reservation</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					

					<div class="col-md-6">

						
							
                                <div class="well well-lg nobottommargin">
								<h3>Connectez-vous à votre compte</h3>
									
									
								<form  id='myforme' class="nobottommargin">
<div class="col_full">
     <span class="input-group-addon"><i class="icon-user"></i></span>
                                        <input  name="email" type="email"  class="sm-form-control required" />
										<span class="input-group-addon"><i class="icon-key"></i></span>
										<input  name="mtp" type="password" class="sm-form-control required" />
</div>

<div class="col_full">
<a href="#" data-toggle="modal" id='gi' data-target="#contactFormModal" class="button button-3d nomargin btn-block button-xlarge hidden-xs center">connecté</a>
						

						<div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">



									     <div id='alerte'></div> 



								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
</div>

   <div class="col_half">

</div>
<div class="col_half col_last">

</div>

							</form>
						    </div>

					</div>
<div class="col-md-6">
<div class="col_full">
<h3>Vous n'avez pas de compte? Inscrire maintenant.</h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing élite. Unde, vel odio non dicta providente sint ex autem mollitia dolorem illum répulsif ipsum aliquid illo similaire sapiente fugiat moins ratione.</p>

</div>
<form  id='myform' class="nobottommargin">
<div class="col_half">

<label for="billing-form-name">Nom *</label>
<input  name="nom" type="text"  class="sm-form-control required" />
</div>
<div class="col_half col_last">
<label for="billing-form-email">Email</label>
<input  name="email" type="email" class="sm-form-control required" />
</div>
<div class="col_half">
<label for="billing-form-name">Mote De Passe:</label>
<input  name="mtp" type="password" class="sm-form-control required" />
</div>
<div class="col_half col_last">
<label for="billing-form-name">Repeter mote De Passe</label>
<input  name="mtpv" type="password" class="sm-form-control required" />
</div>
<div class="col_half">
<label for="billing-form-name">Date De Naissance:</label>
<input  name="daten" type="date" class="sm-form-control required" />
</div>
<div class="col_half col_last">
<label for="billing-form-name">Sexe</label>
<select  name="sexe" class="sm-form-control required">
													<option value="">-- Sélectionnez un --</option>
													<option value="homme">Homme</option>
													<option value="femme">Femme</option>
													
												</select>
</div>
                <div class="col_half">
<label for="billing-form-email">TEL/GSM</label>
<input  name="mobile" type="number"  class="sm-form-control required" />
</div>
<div class="col_half col_last">
<a href="#" data-toggle="modal" id='go' data-target="#contactFormModale" class="button button-3d fright">registre</a>
						 

						<div class="modal fade" id="contactFormModale" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									
												<div id='alert'></div>
											
							</div>
						</div>
						

				</div>
</div>
<!--<div class="col_half col_last">
<input type="button" value="s'inscrire" id='go' class="button button-3d fright" />
</div>-->
   <div class="col_half">
<!--<center><h4><b><div id='alert'></div></b></h4></center></br>-->
</div>

				<!--<div id='alert'></div></br>
				<input type="button" value="send!!" id='go' class="button button-3d fright" /></br>-->
				

				</div>

				</form>
				
				
				</div>
				</div>
				</div>
				
				
				
				
				</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<?php include "headles/footer.php"?>

		</footer><!-- #footer end -->

	<!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>