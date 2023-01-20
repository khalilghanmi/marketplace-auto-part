<?php
include '../connection.php'; 

$userid = $_POST['userid'];

$sql = "select * from customers where id_customers=".$userid;
$result = mysqli_query($db,$sql);

$response = "";
while( $row = mysqli_fetch_array($result) ){
   
    $response .= '
    
    <form class="row g-3" id="myformemodif">
                                            <input type="hidden" name="id" value="'.$row['id_customers'].'" class="form-control">
                                            <div id="alertemodif"></div>
                                            <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Nom</label>
                                            <input type="text" name="nom" value="'.$row['nom'].'" class="form-control">
                                            </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Prénom</label>
                                            <input type="text" name="prenom" value="'.$row['prenom'].'" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" name="email" value="'.$row['email'].'" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Mobile</label>
                                            <input type="phone"  name="mobile" value="'.$row['mobile'].'" class="form-control" id="inputCity">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Addresse</label>
                                            <input type="text" name="adresse" value="'.$row['adresse'].'" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label">Code Postale</label>
                                            <input type="number" name="code_p" value="'.$row['code_p'].'" class="form-control" id="inputCity">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputdatenessance" class="form-label">Date de naissance</label>
                                            <input type="date" name="date_n" value="'.$row['date_n'].'" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                        <label for="inputCivilité" class="form-label">Civilité</label><br>
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input" type="radio"';
                                             if ($row['civilite']=='homme'){$response .= 'checked=""';}  
                                             $response .= ' value="homme" name="civilite" id="form-check-radio-primary" >
                                             <label class="form-check-label" for="form-check-radio-primary">
                                               Homme
                                             </label>
                                        </div>

                                        <div class="form-check form-check-info form-check-inline">
                                         <input class="form-check-input" type="radio"';
                                         if ($row['civilite']=='femme'){$response .= 'checked=""';}
                                         $response .= ' value="femme" name="civilite" id="form-check-radio-info">
                                             <label class="form-check-label" for="form-check-radio-info">
                                                Femme
                                             </label>
                                        </div>
                  
                                        </div>
                                        
                                        
                                        
                                        <div class="col-6">
                                        <label for="inputClients" class="form-label">Statut Client</label><br>
                                            <div class="form-check">
                                            <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input" type="checkbox"';
                                            if ($row['Statut']=='1'){$response .= ' checked';}
                                            $response .= ' name="statut" role="switch" id="flexSwitchCheckChecked" >
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Statut</label>
                                            </div>
                                            </div>
                                        </div>
                                       
                                    
    
    
    ';

}

echo $response;
exit;