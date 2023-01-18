<?php
include '../connection.php'; 	
if($_POST['statut']==1) {
	$statut=0; }
	else{
	$statut=1;
	}
	$sql = "UPDATE category SET 
	Statut='$statut'
	where category_id='$id'";
	
   $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
		header('Location: ../../Liste-des-dategories-produits.php');
	
     
?>