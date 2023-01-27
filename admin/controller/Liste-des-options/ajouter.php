<?php
include '../connection.php'; 
 
  $date_added=date('y-m-d');
 
		
		$sql = "SELECT * FROM customers WHERE email='$email' or mobile='$mobile'";
		$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
		
		$res = mysqli_num_rows($req);
		if($res!=0)  
		{
		echo '<div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
    Désolé, email ou mobile existe déjà dans site web</button>
</div>';
		}
		else  
		{
      $today = date("y-m-d");
      $password = md5($password);
		$sql = "INSERT  INTO customers VALUES ( '', '$nom', '$prenom', '$email', '$Civilite', '$date_n', '$adresse', '$code_p', '$mobile', '$statut', '$password', '' , '$today')";
		$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
		echo "";
		}
 
     
?>