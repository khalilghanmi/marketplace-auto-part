<?php
$db = mysqli_connect('localhost', 'root', '','pieces-auto-tunisie');

        if(isset($_POST['statut'])) {
			$statut=1; }
			else{
            $statut=0;
			}  
                $id=$_POST['id'];
                 $name_marques=$_POST['name_marques'];
                 $imgFile = $_FILES['image_marques']['name'];
                 $tmp_dir = $_FILES['image_marques']['tmp_name'];
                $imgSize = $_FILES['image_marques']['size'];
                if(empty($imgFile)){
                    $sql = "UPDATE marques SET 
                    name_marques='$name_marques',
                    Statut='$statut'
                    where id_marques='$id'";
                   $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
                    $successMSG = "new record succesfully inserted ...";
                    header("refresh:0;../../Liste-des-Marques.php");  
                }
                else
                { $upload_dir = '../../../image/Marques/';
                    $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
                    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'webp', 'svg');
                    //  $userpic = $khalilovic.rand(1,10000).".".$imgExt;
                     $userpic = $name_marques.'_'.uniqid().".".$imgExt;
                    if(in_array($imgExt, $valid_extensions)){			
                        // Check file size '5MB'
                        if($imgSize < 500000000000000)				{
                            move_uploaded_file($tmp_dir,$upload_dir.$userpic);
                        }
                        else{
                            $errMSG = "Sorry, your file is too large.";
                        }
                    }
                    else{
                        $errMSG = "Sorry, only JPG, JPEG, PNG , webp & GIF files are allowed.";		
                    }
                    $name_images='';		
                $name_images.='image/Marques/';
                $name_images.=$userpic;
                if(!isset($errMSG))
                {
                    $sql = "UPDATE marques SET 
                    name_marques='$name_marques',
                    image_marques = '$name_images',
                    Statut='$statut'
                    where id_marques='$id'";
                   $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
                    $successMSG = "new record succesfully inserted ...";
                    header("refresh:0;../../Liste-des-Marques.php");  
                 
                }
                }
                
            
     
?>