<?php
include '../connection.php'; 

$userid = $_POST['userid'];

$sql = "select * from options where id_options=".$userid;
$result = mysqli_query($db,$sql);

$response = "";
while( $row = mysqli_fetch_array($result) ){
   
    $response .= '
    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" style="margin: 15px;">
                                    Confirmez-vous vouloir supprimer <span class="shadow-none badge badge-danger">'.$row['name_options'].' et '.$row['type_options'].'</span> et ses données ? </button></div>
                                            <form action="controller/Liste-des-options/supprimer.php" method="post" class="row g-3" id="myformemodif">
                                            <input type="hidden" name="id" value="'.$row['id_options'].'" class="form-control">
                                            </div>
                                            <div class="modal-footer">
                                                        <a href="#" class="btn btn-light-dark" data-bs-dismiss="modal">Annuler</a>
                                                        <input type="submit" class="btn btn-danger" value="Supprimer"  />
                                                        </form>
                                                    </div>
                                          
    ';

}

echo $response;
exit;