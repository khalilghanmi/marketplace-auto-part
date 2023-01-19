<?php
$db = mysqli_connect('localhost', 'root', '','pieces-auto-tunisie');

        if(isset($_POST['statut'])) {
			$statut=1; }
			else{
            $statut=0;
			}  
                 $id=$_POST['id'];
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
    $sql = "SELECT * FROM category WHERE meta_title='$meta_titles' AND category_id <> '$id' ";
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
                 $imgFile = $_FILES['category_image']['name'];
                 $tmp_dir = $_FILES['category_image']['tmp_name'];
                 $imgSize = $_FILES['category_image']['size'];
                if(empty($imgFile)){
                    $sql = "UPDATE category SET 
                    name_category='$name_category',
                    parent_id = '$parent',
                    description_category='$description_category',
                    meta_title = '$meta_title',
                    meta_description='$meta_description',
                    meta_keyword = '$meta_keyword',
                    Statut='$statut'
                    where category_id='$id'";
                   $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
                    $successMSG = "new record succesfully inserted ...";
                    header("refresh:0;../../Liste-des-dategories-produits.php");  
                }
                else
                { $upload_dir = '../../../image/categories/';
                    $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
                    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'webp', 'svg');
                    //  $userpic = $khalilovic.rand(1,10000).".".$imgExt;
                     $userpic = $name_category.'_'.uniqid().".".$imgExt;
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
                    $sql = "UPDATE category SET 
                    name_category='$name_category',
                    parent_id = '$parent',
                    category_image = '$name_images',
                    description_category='$description_category',
                    meta_title = '$meta_title',
                    meta_description='$meta_description',
                    meta_keyword = '$meta_keyword',
                    Statut='$statut'
                    where category_id='$id'";
                   $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
                    $successMSG = "new record succesfully inserted ...";
                    header("refresh:5;../../Liste-des-dategories-produits.php");  
                 
                }
                }
                
            
     
?>