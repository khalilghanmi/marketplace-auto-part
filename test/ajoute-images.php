<?php

$db = mysqli_connect('localhost', 'root', '','test');
if(isset($_POST['btnsave']))
	{
		
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		$dossier_ans=date('Y');
		$dossier_moins=date('F');
		if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		}
		else
		{ $upload_dir = 'user_images/';
			if (is_dir($upload_dir.'/'.$dossier_ans)) {  
				$upload_dir = 'user_images/'.$dossier_ans.'/';
				}
			else { 
				mkdir($upload_dir.'/'.$dossier_ans);
				$upload_dir = 'user_images/'.$dossier_ans.'/';
				}	
			if (is_dir($upload_dir.'/'.$dossier_moins)) { 
				$upload_dir = 'user_images/'.$dossier_ans.'/'.$dossier_moins.'/';
				}
			else { 
				mkdir($upload_dir.'/'.$dossier_moins);
				$upload_dir = 'user_images/'.$dossier_ans.'/'.$dossier_moins.'/';
				}
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		 
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'webp', 'svg'); // valid extensions
		    $khalilovic='khalilovic';
			// // rename uploading image
			//  $userpic = $khalilovic.rand(1,10000).".".$imgExt;
			 $userpic = $khalilovic.'_'.uniqid().".".$imgExt;
				
			// allow valid image file formats
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
		}
		$donnees_binaires='';
        $taille_fichier='';
        $type_fichier='';
		$name_images='';		
		$name_images.=$upload_dir;
		$name_images.=$userpic;
		if(!isset($errMSG))
		{
			$sql = "INSERT  INTO prod_images VALUES ( '', '$donnees_binaires', '$name_images', '$taille_fichier', '$type_fichier')";
			$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
			$successMSG = "new record succesfully inserted ...";
			header("refresh:5;index.php");  
		 
		}
	} 


?>