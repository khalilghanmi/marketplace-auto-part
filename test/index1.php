
<?php
$today = date("m-d-y");
echo $today;
?>
<html>

<head>
<div class="alert alert-light-success alert-dismissible fade show border-0 mb-4" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Success!</strong> Lorem Ipsum is simply dummy text of the printing. </div>
setTimeout(, 5000);
</head>
<body>
<form id='myforme' >
<div id='alerte'></div>

<input class="form-check-input" type="checkbox" name="statut" role="switch" value="1">
<div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input" value="homme" type="radio" name="Civilite" id="form-check-radio-primary" checked="">
                                             <label class="form-check-label" for="form-check-radio-primary">
                                               Homme
                                             </label>
                                        </div>

                                        <div class="form-check form-check-info form-check-inline">
                                         <input class="form-check-input" value="femme" type="radio" name="Civilite" id="form-check-radio-info">
                                             <label class="form-check-label" for="form-check-radio-info">
                                                Femme
                                             </label>
                                        </div>
   <input type="text" name="name"/>
   <input type="email" name="email"/>
   <input type="password" name="password"/>
   <a href="#" id='gi'>connection </a>
   
</form>
<div id='yaffichi'></div>
</body>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript">
	                         $(function(){
							$('#gi').click(function(){
								var da = $('#myforme').serialize();
								$.post('login.php',da,function(data){
									if(data == ""){
									window.location.replace("index.php");
									}
								else {
									$('#alerte').html(data);
								}
								});
							});
							});

    </script>
    <script type="text/javascript">
	                         $(function(){							
								$.post('affichage.php',function(data){
									$('#yaffichi').html(data);
								});
							});

						</script>
	
 
</html>

