<?php
include '../connection.php';             
$sql = "SELECT * FROM customers";
$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
$res = mysqli_num_rows($req);
if($res!=0)  
{
While ($data = mysqli_fetch_array($req)){

echo'<tr>
<td> '.$data['nom'].'</td>
<td>'.$data['prenom'].'</td>
<td>'.$data['email'].'</td>
<td>'.$data['civilite'].'</td>
<td>'.$data['date_n'].'</td>
<td>'.$data['adresse'].'</td>
<td>'.$data['code_p'].'</td>
<td>'.$data['mobile'].'</td>';
if($data['Statut'] == 1){
    echo'<td><span class="shadow-none badge badge-primary">Approuvé</span></td>';
}
else{
    echo'<td><span class="shadow-none badge badge-danger">Fermer</span></td>';
}
echo'<td>
                                            <div class="dropdown">
                                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                        </a>
    
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                            <a class="dropdown-item" href="javascript:void(0);">Voir</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Modifier</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Supprimer</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">statut</a>
                                                        </div>
                                                    </div>
                                            </td>
                                            </tr>
';
}
}

?>