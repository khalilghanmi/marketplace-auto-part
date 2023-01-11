<?php
include '../connection.php'; 	
if($_POST['statut']==1) {
	$statut=0; }
	else{
	$statut=1;
	}
	$sql = "UPDATE customers SET 
	Statut='$statut'
	where id_attributes='$id'";
	
   $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
		header('Location: ../../Clients.php');
	
     
?>