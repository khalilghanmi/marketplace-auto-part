$upload_dir = '../../../image/options/';
                
                $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
             
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'webp', 'svg'); // valid extensions
                 
                 $userpic = $name_value_options.'_'.uniqid().".".$imgExt;
                    
                if(in_array($imgExt, $valid_extensions)){			
                    
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
                $name_images.='image/options/';
                $name_images.=$userpic;
                
                if(!isset($errMSG))
                {
                $sql = "INSERT  INTO category VALUES ( '', '0', '$name_category','$description_category','$name_images','$meta_title','$meta_description','$meta_keyword','$statut','$date_added')";
                $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
                
                header("refresh:0;../../Liste-des-dategories-produits.php");  
             
                }