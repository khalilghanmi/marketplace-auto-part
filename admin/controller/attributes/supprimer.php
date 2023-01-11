<?php
include '../connection.php'; 	
		
		$sql = "DELETE FROM attributes WHERE id_attributes=$id";
		$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
		header('Location: ../../Liste-des-attribut.php');
	
     
?>