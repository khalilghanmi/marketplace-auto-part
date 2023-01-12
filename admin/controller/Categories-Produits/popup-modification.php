<?php
include '../connection.php'; 

$userid = $_POST['userid'];

$sql = "select * from marques where id_marques=".$userid;
$result = mysqli_query($db,$sql);

$response = "";
while( $row = mysqli_fetch_array($result) ){
   
    $response .= '
                                            <input type="hidden" name="id" value="'.$row['id_marques'].'" class="form-control">
                                            <div id="alertemodif"></div>
                                            <div class="col-6">
                                            <label for="inputEmail4" class="form-label">Image marque</label><br>
                                            <input class="multiple-file-upload" type="file" name="image_marques" accept="image/*"  required="required"/> 
                                            </div>
                                            <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Nom marques*</label>
                                            <input type="text" name="name_marques" value="'.$row['name_marques'].'" required="required" class="form-control">
                                        </div>
                                        <div class="col-2">
                                        <label for="inputEmail4" class="form-label">Statut attributes</label>
                                            <div class="form-check">
                                            <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="statut" role="switch" id="flexSwitchCheckChecked" ';
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