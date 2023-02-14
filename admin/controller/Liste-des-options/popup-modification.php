<?php
include '../connection.php'; 

$userid = $_POST['userid'];

$sql = "select * from options where id_options =".$userid;
$result = mysqli_query($db,$sql);

$response = "";
while( $row = mysqli_fetch_array($result) ){
   
    $response .= '
    <div class="body" style="margin: 30px;">
                                            <div ></div>
                                            <form class="row g-3"   method="post" action="controller/Liste-des-options/ajouter.php"  enctype="multipart/form-data">
                                            <div class="col-md-12">
                                            <label for="inputEmail4" class="form-label">Option Name</label>
                                            <input type="text" name="name_options" value="'.$row['name_options'].'" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputPassword4"  class="form-label ">Type</label>
                                            <select  name="type_options" class="form-control seletors" placeholder="Select a person..." autocomplete="off">
                                            <option value="'.$row['type_options'].'">'.$row['type_options'].'</option>
                                            </select>
                                            ';
                                            
                                           if($row['type_options']=="checkbox" || $row['type_options']=="radio" || $row['type_options']=="select"){
                                            $response .= '<fieldset style="display: block;">
                                            <legend>Option Values</legend>
                                            <table id="tbUser"  class="table dt-table-hover table-bordered addlinetab" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-left required">Option Value Name</th>
                                                    <th class="text-center">Image Options</th>
                                                    <th class="text-center">Sort Order</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
                                            $sql = "select * from options where id_value_options =".$userid;
                                            $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
                                            $res = mysqli_num_rows($req);
                                            if($res!=0){
                                            While ($data = mysqli_fetch_array($req)){
                                                $response .= '<tr>
                                                <td>
                                                    <input type="text" name="name_value_options[]" value="'.$data['name_value_options'].'" class="form-control"></td>
                                                    <td><input class="multiple-file-upload" type="file" name="image_options[]" accept="image/*"  />
                                                </td>
                                                <td><button type="button" id="delateline" class="btn btn-danger btnDelete" >
                                                        <svg style="color: #fff;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></button>
                                                </td>
                                            </tr>
                                                ';
                                            }
                                    
                                            }
                                                $response .= '</tbody>
                                            </table>
                                        </fieldset>
                                            
                                            ';

                                        }
                                            $response .= '  </div>
                                         
                                        <div class="col-md-12">
                                        <div  ></div> 
                                        </div>

                                        <div class="col-2">
                                        <a href="#" class="btn btn-light-dark" data-bs-dismiss="modal">Annuler</a>
                                        </div>
                                        <div class="col-2">          
                                                                       
                                        <a href="#" class="btn btn-primary"  >Enregistrer</a>
                                        </div>
                                    </form>

                                            </div>
     ';

} 
echo $response;
