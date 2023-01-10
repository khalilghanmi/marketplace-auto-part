<?php
include '../connection.php'; 

$userid = $_POST['userid'];

$sql = "select * from customers where id=".$userid;
$result = mysqli_query($db,$sql);

$response = "";
while( $row = mysqli_fetch_array($result) ){
   
    $response .= '<div class="alert alert-light-';
    if ($row['Statut']=='1'){$response .= 'danger';}
    else {
        $response .= 'primary';
    }$response .= ' alert-dismissible fade show border-0 mb-4" role="alert" style="margin: 15px;">
                                    Confirmez-vous vouloir ';
                                    if ($row['Statut']=='1'){$response .= 'désactiver ';}
                                    else {
                                        $response .= 'activer';
                                    }$response .= ' statut <span class="shadow-none badge badge-danger">'.$row['nom'].' '.$row['prenom'].'</span> ? </button></div>
                                            <form action="controller/Clients/statut.php" method="post" class="row g-3">
                                            <input type="hidden" name="id" value="'.$row['id'].'" class="form-control">
                                            <input type="hidden" name="statut" value="'.$row['Statut'].'" class="form-control">
                                            </div>
                                            <div class="modal-footer">
                                                        <a href="#" class="btn btn-light-dark" data-bs-dismiss="modal">Annuler</a>
                                                        <input type="submit" class="btn btn-';
                                                        if ($row['Statut']=='1'){$response .= 'danger';}
                                                        else {
                                                            $response .= 'primary';
                                                        }$response .= '" value="';
                                                        if ($row['Statut']=='1'){$response .= ' désactiver';}
                                                        else {
                                                            $response .= 'activer';
                                                        }$response .= '"  />
                                                        </form>
                                                    </div>
                                                    
                                          
    ';

}

echo $response;
exit;