<?php
include '../connection.php';             
$sql = "SELECT * FROM customers";
$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
$res = mysqli_num_rows($req);
echo'<tbody>';
if($res!=0)  
{
While ($data = mysqli_fetch_array($req)){

echo'<tr>
<td class="text-center"> '.$data['nom'].'</td>
<td class="text-center">'.$data['prenom'].'</td>
<td class="text-center">'.$data['email'].'</td>
<td class="text-center">'.$data['civilite'].'</td>
<td class="text-center">'.$data['date_n'].'</td>
<td class="text-center">'.$data['adresse'].'</td>
<td class="text-center">'.$data['code_p'].'</td>
<td class="text-center">'.$data['mobile'].'</td>';
if($data['Statut'] == 1){
    echo'<td class="text-center"><span class="shadow-none badge badge-primary">Approuvé</span></td>';
}
else{
    echo'<td class="text-center"><span class="shadow-none badge badge-danger">Fermer</span></td>';
}
echo'<td>
<div class="btn-group">
    <button type="button" class="btn btn-dark btn-sm">Open</button>
    <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
    </div>
</div>
</td>
                                            </tr>
';
}

}
echo'</tbody>';
?>