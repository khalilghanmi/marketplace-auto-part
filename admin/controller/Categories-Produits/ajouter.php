<?php
include '../connection.php'; 
if(isset($_POST['Statut'])) {
    $statut=1; }
    else{
    $statut=0;
    }  
$date_added=date('y-m-d');
$name_category=$_POST['name_category'];
$parent=$_POST['parent'];
$description_category=$_POST['description_category'];
$meta_title=$_POST['meta_title'];
$meta_description=$_POST['meta_description'];
$meta_keyword=$_POST['meta_keyword'];
$test=false;
$s=1;
$meta_titles =$meta_title;
While ($test == false){
    $sql = "SELECT * FROM category WHERE meta_title='$meta_titles'";
    $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
    $res = mysqli_num_rows($req);
    if($res!=0)   
    {
     $meta_titles =$meta_title;
     $meta_titles=$meta_titles.'-'.$s;
     $s=$s+1;
    }
    else{
        $meta_title=$meta_titles;
        $test=true;
    }
}
if(empty($parent)){
    
             $imgFile = $_FILES['category_image']['name'];
             $tmp_dir = $_FILES['category_image']['tmp_name'];
             $imgSize = $_FILES['category_image']['size'];
            if(empty($imgFile)){
                
                $name_image_finales='image/categories/defaults.png';
                $sql = "INSERT  INTO category VALUES ( '', '0', '$name_category','$description_category','$name_image_finales','$meta_title','$meta_description','$meta_keyword','$statut','$date_added')";
                $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
                
                header("refresh:0;../../Liste-des-categories-produits.php");
            }
            else
            { $upload_dir = '../../../image/categories/';
                
                $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
             
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'webp', 'svg'); // valid extensions
                
                //  $userpic = $khalilovic.rand(1,10000).".".$imgExt;
                 $userpic = $name_category.'_'.uniqid().".".$imgExt;
                    
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
                $name_images='';		
                $name_images.='image/categories/';
                $name_images.=$userpic;
                
                if(!isset($errMSG))
                {
                $sql = "INSERT  INTO category VALUES ( '', '0', '$name_category','$description_category','$name_images','$meta_title','$meta_description','$meta_keyword','$statut','$date_added')";
                $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
                
                header("refresh:0;../../Liste-des-categories-produits.php");  
             
                }
            }
            
            
        
  }    
else{
    $imgFile = $_FILES['category_image']['name'];
    $tmp_dir = $_FILES['category_image']['tmp_name'];
    $imgSize = $_FILES['category_image']['size'];
   if(empty($imgFile)){
    
    $name_image_finales='image/categories/defaults.png';
    $sql = "INSERT  INTO category VALUES ( '', '$parent', '$name_category','$description_category','$name_image_finales','$meta_title','$meta_description','$meta_keyword','$statut','$date_added')";
    $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
    
    header("refresh:0;../../Liste-des-categories-produits.php");
   }
   else
   { $upload_dir = '../../../image/categories/';
       
       $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
    
       $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'webp', 'svg'); // valid extensions
       
       //  $userpic = $khalilovic.rand(1,10000).".".$imgExt;
        $userpic = $name_category.'_'.uniqid().".".$imgExt;
           
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
            $name_images='';		
            $name_images.='image/categories/';
            $name_images.=$userpic;
            
            if(!isset($errMSG))
            {
                $sql = "INSERT  INTO category VALUES ( '', '$parent', '$name_category','$description_category','$name_images','$meta_title','$meta_description','$meta_keyword','$statut','$date_added')";
                $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
                    
                header("refresh:0;../../Liste-des-categories-produits.php");  
        
            }
   }
   
  
}    
?>