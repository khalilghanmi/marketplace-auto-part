<?php
include '../connection.php'; 

$userid = $_POST['userid'];

$sql = "select * from customers where id=".$userid;
$result = mysqli_query($db,$sql);

$response = "";
while( $row = mysqli_fetch_array($result) ){
   
    $response .= '
    
                                            <form class="row g-3" id="myformemodif">
                                            <input type="hidden" name="id" value="'.$row['id'].'" class="form-control">
                                            <div id="alertemodif"></div>
                                          
    ';

}

echo $response;
exit;