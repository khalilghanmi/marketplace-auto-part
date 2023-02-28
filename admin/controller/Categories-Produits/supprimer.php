<?php
include '../connection.php'; 	
		$sql = "DELETE FROM category WHERE category_id=$id";
		$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
		header('Location: ../../Liste-des-categories-produits.php');  
?>