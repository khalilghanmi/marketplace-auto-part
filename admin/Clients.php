<?php
include 'controller/connection.php';             
$sql = "SELECT * FROM customers";
$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
$res = mysqli_num_rows($req);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Clients | Admin - Piéce Auto Tunisie </title>
    <link rel="icon" type="image/x-icon" href="../src/assets/img/favicon.ico"/>
    <link href="../layouts/semi-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/semi-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="../layouts/semi-dark-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/semi-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/semi-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="../src/plugins/src/table/datatable/datatables.css">

    <link rel="stylesheet" type="text/css" href="../src/plugins/css/light/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/light/table/datatable/custom_dt_custom.css">

    <link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/table/datatable/custom_dt_custom.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/src/table/datatable/datatables.css">

<link rel="stylesheet" type="text/css" href="../src/plugins/css/light/table/datatable/dt-global_style.css">
<link rel="stylesheet" type="text/css" href="../src/plugins/css/light/table/datatable/custom_dt_miscellaneous.css">

<link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/table/datatable/dt-global_style.css">
<link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/table/datatable/custom_dt_miscellaneous.css">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
</head>
<body class="layout-boxed ">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
 <!--  BEGIN NAVBAR  -->
 <?php include 'head/header.php';   ?>
    <!--  END NAVBAR  -->
    <?php include 'head/menu.php';   ?>
    <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Datatables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Custom</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->
                    
                  
    
                    <div class="seperator-header">
                        <h4 class="">Style 2</h4>
                    </div>
                     <!-- xtra Large modal -->
                     <button type="button" class="btn btn-primary mb-2 me-4" data-bs-toggle="modal" data-bs-target=".bd-example-modal-xl">Ajouter</button>
                    <!-- Lage modal -->
                    <div class="row">
                 
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Email</th>
                                            <th>Civilité</th>
                                            <th>Date de naissance</th>
                                            <th>Adresse</th>
                                            <th>Code Postal</th>
                                            <th>Mobile</th>
                                            <th>Statut</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
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
                                    ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                    
                
            </div>

             </div>
            <!--  BEGIN FOOTER  -->
            <?php include 'head/footer.php';   ?>
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
    
    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myExtraLargeModalLabel">Ajouter Client</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                             
                                            <form class="row g-3">
                                            <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Nom</label>
                                            <input type="text" name="nom"class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Prénom</label>
                                            <input type="text" name="prenom" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Mot de passe</label>
                                            <input type="password" name="password" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Addresse</label>
                                            <input type="text" name="adresse" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label">Code Postale</label>
                                            <input type="number" class="form-control" id="inputCity">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Mobile</label>
                                            <input type="phone" class="form-control" id="inputCity">
                                        </div>
                                        <div class="col-md-6">
                                        <label for="inputCivilité" class="form-label">Civilité</label><br>
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="form-check-radio-primary" checked="">
                                             <label class="form-check-label" for="form-check-radio-primary">
                                               Homme
                                             </label>
                                        </div>

                                        <div class="form-check form-check-info form-check-inline">
                                         <input class="form-check-input" type="radio" name="flexRadioDefault" id="form-check-radio-info">
                                             <label class="form-check-label" for="form-check-radio-info">
                                                Femme
                                             </label>
                                        </div>
                  
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputdatenessance" class="form-label">Date de naissance</label>
                                            <input type="date" name="date_n" class="form-control">
                                        </div>
                                        
                                        
                                        <div class="col-8">
                                            <div class="form-check">
                                            <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Statut</label>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                        <button class="btn btn-light-dark" data-bs-dismiss="modal">Annuler</button>
                                        </div>
                                        <div class="col-2">
                                        <button type="button" class="btn btn-primary">Enregistrer</button>
                                        </div>
                                    </form>

                                            </div>
                                            
                                        </div>
                                      </div>
                    </div>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   <script src="../src/plugins/src/global/vendors.min.js"></script>
    <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="../src/plugins/src/waves/waves.min.js"></script>
    <script src="../layouts/semi-dark-menu/app.js"></script>
    
    
    <script src="../src/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../src/plugins/src/table/datatable/datatables.js"></script>
    <script src="../src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="../src/plugins/src/table/datatable/button-ext/jszip.min.js"></script>    
    <script src="../src/plugins/src/table/datatable/button-ext/buttons.php5.min.js"></script>
    <script src="../src/plugins/src/table/datatable/button-ext/buttons.print.min.js"></script>
    <script src="../src/plugins/src/table/datatable/custom_miscellaneous.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->  
    
    <!-- END PAGE LEVEL SCRIPTS -->  
</body>
</html>