<?php
include '../connection.php'; 	
		
		$sql = "DELETE FROM customers WHERE id=$id";
		$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
		header('Location: ../../Clients.php');
	
     
?>