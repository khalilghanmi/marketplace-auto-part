<?php
include '../connection.php'; 
$userid = $_POST['userid'];
$sql = "select * from category where category_id=".$userid;
$result = mysqli_query($db,$sql);
$response = "";
while( $row = mysqli_fetch_array($result) ){
$response .= '
            <input type="hidden" name="id" value="'.$row['category_id'].'" class="form-control">
            <div class="col-12 text-center">
            <label for="inputEmail4" class="form-label">Nom de catégorie</label>
            <input type="text" name="name_category" value="'.$row['name_category'].'" class="form-control" required >
            </div>
            <div class="col-12 text-center">
            <label for="product-images">Parent</label>
            <select id="input-tags" name="parent" class="form-control" placeholder="Select a person..." autocomplete="off">';
            $sql = "SELECT * FROM category";
            $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
            $res = mysqli_num_rows($req);
            if($res!=0)  
            { 
             $sql = "SELECT * FROM category WHERE category_id = '$userid'  ";
                $reqs = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
                $ress = mysqli_num_rows($reqs);
                if($ress!=0)  
            {
                $datas = mysqli_fetch_array($reqs);
                $searchparent=$datas['parent_id'];
            }
            $sql = "SELECT * FROM category WHERE category_id = '$searchparent'  ";
                $reqs = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
                $ress = mysqli_num_rows($reqs);
                if($ress!=0)  
            {
                $datas = mysqli_fetch_array($reqs);
                $response .= ' <option value="'.$datas['category_id'].'">'.$datas['name_category'].'</option>';
            }
            $response .= ' <option value="0">Select a person...</option>';
                While ($data = mysqli_fetch_array($req)){
                    $response .= ' <option value="'.$data['category_id'].'">'.$data['name_category'].'</option>';
            }
            }                                           
                                               
            $response .= '  </select>
                
                </div>
                <div class="col-12 text-center">
            <label for="product-images">Description</label>
                    <textarea class="form-control" name="description_category"  value="'.$row['description_category'].'" aria-label="With textarea"></textarea>
                </div>
                <div class="col-sm-6">
                <label for="inputEmail4" class="form-label">Upload Images</label><br>
                <input class="multiple-file-upload" type="file" name="category_image"  value="'.$row['category_image'].'" accept="image/*"  /> 
                </div>
                <div class="col-12 text-center">
            <label for="inputEmail4" class="form-label">Titre de la balise Meta</label>
            <input type="text" name="meta_title" value="'.$row['meta_title'].'" class="form-control" required>
                </div>
                <div class="col-12 text-center">
            <label for="inputEmail4" class="form-label">Description de la balise méta</label>
            <textarea class="form-control" name="meta_description"  value="'.$row['meta_description'].'" aria-label="With textarea"></textarea>
                </div>
                <div class="col-12 text-center">
            <label for="inputEmail4" class="form-label">Mots-clés des balises méta</label>
            <textarea class="form-control" name="meta_keyword" value="'.$row['meta_keyword'].'" aria-label="With textarea"></textarea>
                </div>
            <div class="col-12 text-center text-center">
            <label for="inputEmail4" class="form-label">Statut category</label>
                <div class="form-check text-center">
                <div class="form-check form-switch form-check-inline">
                <input class="form-check-input" type="checkbox" name="Statut" role="switch" id="flexSwitchCheckChecked"';
                if ($row['Statut']=='1'){$response .= 'checked';}
                else {
                    $response .= '';
                }$response .= '>
                <label class="form-check-label" for="flexSwitchCheckChecked">Statut</label>
                </div> 
                </div>
            </div>
    ';
}
echo $response;
exit;