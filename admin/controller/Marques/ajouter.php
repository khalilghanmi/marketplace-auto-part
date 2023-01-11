<?php
include '../connection.php'; 

        if(isset($_POST['statut'])) {
			$statut=1; }
			else{
            $statut=0;
			}

  
if(empty($nom_attributes))
    {
    echo '<div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
    Attention, seul le champs peut rester vide !</button>
</div> 
   ';
    }
else
    {
	
		$sql = "INSERT  INTO attributes VALUES ( '', '$nom_attributes','$statut')";
		$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
		echo "";
	}
	 
     
?>