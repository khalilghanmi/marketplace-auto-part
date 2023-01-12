<?php
include '../connection.php'; 	
		$sql = "DELETE FROM marques WHERE id_marques=$id";
		$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
		header('Location: ../../Liste-des-Marques.php');
	
     
?>