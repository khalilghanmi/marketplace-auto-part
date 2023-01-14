<?php
$idcat=$data['category_id'];
$sql = "SELECT * FROM category";
$reqs = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
$reso = mysqli_num_rows($reqs);
if($reso!=0)  // l'url existe déjà, on affiche un message d'erreur
{
    
}                             
$sql = "SELECT * FROM category,category_description WHERE parent_id = '$idcat' and category.category_id = category_description.category_id";
$reqs = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
$reso = mysqli_num_rows($reqs);
if($reso!=0)  // l'url existe déjà, on affiche un message d'erreur
{
$datas = mysqli_fetch_array($reqs);
echo'<tr>
<td class="text-center"> '.$datas['category.category_id'].'</td>
<td class="text-center"> 
                <div class="avatar  me-3">
                    <img src="../'.$datas['category_image'].'" alt="Avatar" width="64" height="64">
                </div>
            </td>';
             if($datas['parent_id']==0){
                echo'<td class="text-center"> '.$datas['name_category'].'</td>';
                
             }
              
      
if($data['Statut'] == 1){
    echo'<td class="text-center"><span class="shadow-none badge badge-primary">activé</span></td>';
}
else{
    echo'<td class="text-center"><span class="shadow-none badge badge-danger">désactivé</span></td>';
}
echo'<td class="text-center">
<div class="btn-group">
    <a class="btn btn-dark btn-sm userinfo " data-bs-target=".bd-example-modal-lg" data-id="'.$data['category_id'].'" href="#">Modifier</a>
    <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
        <a class="dropdown-item userinfos" data-bs-target=".bd-example-modal-lg" data-id="'.$data['category_id'].'" href="#">Supprimer</a>
        <a class="dropdown-item userinfosstatut" data-id="'.$data['category_id'].'" href="#">Statut</a>
        
    </div>
</div>
</td>
  </tr>
';

}

?>