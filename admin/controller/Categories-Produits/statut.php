<?php
include '../connection.php'; 	
if($_POST['statut']==1) {
	$statut=0; }
	else{
	$statut=1;
	}
	$sql = "UPDATE marques SET 
	Statut='$statut'
	where id_marques='$id'";
	
   $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
		header('Location: ../../Liste-des-Marques.php');
	
     
?>