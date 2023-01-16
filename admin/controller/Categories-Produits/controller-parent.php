<?php
include '../connection.php'; 
if(empty($name_category)  OR empty($meta_title))
    {
    echo '<div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
    Attention, seul le champs peut rester vide ! gggggggggggg </button>
</div> 
   ';
    }
elseif(!empty($parent)){
                $sql = "SELECT * FROM category WHERE category_id='$parent'";
                $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
                $res = mysqli_num_rows($req);
                if($res==0)  // l'url existe déjà, on affiche un message d'erreur
                {
                    echo '<div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                    Attention,le champs parent n\'éxiste pas ! </button>
                </div> 
                   ';
                }
                else{
                echo"";  
                }
}     
  
?>