<?php
include '../connection.php'; 

$userid = $_POST['userid'];

$sql = "select * from attributes where id_attributes=".$userid;
$result = mysqli_query($db,$sql);

$response = "";
while( $row = mysqli_fetch_array($result) ){
   
    $response .= '
    
    <form class="row g-3" id="myformemodif">
                                            <input type="hidden" name="id" value="'.$row['id_attributes'].'" class="form-control">
                                            <div id="alertemodif"></div>
                                            
                                            <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Nom attributes*</label>
                                            <input type="text" name="nom_attributes" value="'.$row['nom_attributes'].'" class="form-control">
                                        </div>
                                        <div class="col-6">
                                        <label for="inputEmail4" class="form-label">Statut attributes</label>
                                            <div class="form-check">
                                            <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="statut" role="switch" id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Statut</label>
                                            </div>
                                            </div>
                                        </div>
                                       
                                    
    
    
    ';

}

echo $response;
exit;