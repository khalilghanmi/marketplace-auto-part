<?php
include '../connection.php'; 
if(isset($_POST['Statut'])) {
    $statut=1; }
    else{
    $statut=0;
    }  

$date_added=date('y-m-d');
$name_options=$_POST['name_options'];
$type_options=$_POST['type_options'];


$date_added=date('y-m-d');
  			$sql = "INSERT  INTO options VALUES ( '', '0', '$name_options','$type_options','','','$statut')";
  			$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());			 
		    if($type_options=='select' || $type_options=='radio' || $type_options=='checkbox'){
				$sql = "SELECT * FROM options WHERE name_options='$name_options'";
				$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
				$data = mysqli_fetch_array($req);
				$name_value_options=$_POST['name_value_options'];
				$id_values = $data['id_options'];
                $imgFile = $_FILES['image_options']['name'];
                $tmp_dir = $_FILES['image_options']['tmp_name'];
                $imgSize = $_FILES['image_options']['size'];
                $len = sizeof($name_value_options);
                // foreach ($name_value_options as $name_values_options,$imgFile as $imgFiles)
                for($i=0;$i<$len;++$i)
                {
                    $name_vp = $name_value_options[$i];
                    $file_op = $imgFile[$i] ?? '';
                    $tmp_dir_op = $tmp_dir[$i] ?? '';
                    $imgSize_op = $imgSize[$i] ?? '';
                    if(empty($file_op) && empty($name_vp)){
                      
                    } 
                    elseif(empty($file_op)){
                    
                    $name_image_finales='image/options/defaults.png';
                    $sql = "INSERT  INTO options VALUES ( '', '$id_values', '$name_options','$type_options','$name_vp','$name_image_finales','$statut')";
                    $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
                    }
                    else
                    { 
                        $upload_dir = '../../../image/options/';
                    
                        $imgExt = strtolower(pathinfo($file_op,PATHINFO_EXTENSION)); // get image extension
                
                        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'webp', 'svg'); // valid extensions
                    
                        //  $userpic = $khalilovic.rand(1,10000).".".$imgExt;
                        $userpic = $name_vp.'_'.uniqid().".".$imgExt;
                            
                        // allow valid image file formats
                        if(in_array($imgExt, $valid_extensions)){			
                            // Check file size '5MB'
                            if($imgSize_op < 500000000000000)				{
                                move_uploaded_file($tmp_dir_op,$upload_dir.$userpic);
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
                        $sql = "INSERT  INTO options VALUES ( '', '$id_values', '$name_options','$type_options','$name_vp','$name_images','$statut')";
                        $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
                        
                        }
                    }

			    }


                }
                header("refresh:0;../../Liste-des-options.php");
                
?>