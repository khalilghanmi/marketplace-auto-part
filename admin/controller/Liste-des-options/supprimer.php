<?php
include '../connection.php'; 	
		
		$sql = "DELETE FROM options WHERE id_options=$id or id_value_options='$id' ";
		$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
		header('Location: ../../Liste-des-options.php');
	
     
?>