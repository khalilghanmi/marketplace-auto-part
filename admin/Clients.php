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
    <title>Ecommerce List | Admin - Piéce Auto Tunisie </title>
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

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="../src/plugins/src/table/datatable/datatables.css">
    
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/light/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="../src/assets/css/light/elements/alert.css">
    <!--  END CUSTOM STYLE FILE  -->

    <style>
        #ecommerce-list img {
            border-radius: 18px;
        }
    </style>
    
</head>
<body class="" data-bs-spy="scroll" data-bs-bs-target="#navSection" data-bs-offset="140">
    
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
                                <li class="breadcrumb-item"><a href="#">App</a></li>
                                <li class="breadcrumb-item"><a href="#">Clients</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Liste</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="modal fade" id="empModal" role="dialog">
                <div class="modal-dialog">
                
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">User Info</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          
                        </div>
                        <div class="modal-body">
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                  
                </div>
            </div>

                     <!-- xtra Large modal -->
                     <button type="button" class="btn btn-primary mb-2 me-4" data-bs-toggle="modal" data-bs-target=".bd-example-modal-xl">Ajouter</button>
                    <!-- Lage modal -->
                    <div class="row">
                 
                    <div class="row layout-top-spacing">
                
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <table id="ecommerce-list" id="html5-extension" class="table dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">id</th>
                                            <th class="text-center">Nom</th>
                                            <th class="text-center">Prénom</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Mobile</th>
                                            <th class="text-center">Statut</th>
                                            <th class="text-center">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if($res!=0)  
                                    {
                                    While ($data = mysqli_fetch_array($req)){
                                    
                                    echo'<tr>
                                    <td class="text-center"> '.$data['id'].'</td>
                                    <td class="text-center"> '.$data['nom'].'</td>
                                    <td class="text-center">'.$data['prenom'].'</td>
                                    <td class="text-center">'.$data['email'].'</td>
                                    <td class="text-center">'.$data['mobile'].'</td>
                                    ';
                                    if($data['Statut'] == 1){
                                        echo'<td class="text-center"><span class="shadow-none badge badge-primary">activé</span></td>';
                                    }
                                    else{
                                        echo'<td class="text-center"><span class="shadow-none badge badge-danger">désactivé</span></td>';
                                    }
                                    echo'<td>
                                    <div class="btn-group text-center">
                                        <button type="button" class="btn btn-dark btn-sm">Ouvrir</button>
                                        <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                            <a class="dropdown-item userinfo"  data-id="'.$data['id'].'" href="#">modifier</a>
                                            
                                            <a class="dropdown-item" href="#">Supprimer</a>
                                            <a class="dropdown-item" href="#">Statut</a>
                                            
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
                                            <div id='alerte'></div>
                                            <form class="row g-3" id='myforme'>
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
                                            <input type="number" name="code_p" class="form-control" id="inputCity">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Mobile</label>
                                            <input type="phone"  name="mobile" class="form-control" id="inputCity">
                                        </div>
                                        <div class="col-md-6">
                                        <label for="inputCivilité" class="form-label">Civilité</label><br>
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input" type="radio" value="homme" name="Civilite" id="form-check-radio-primary" checked="">
                                             <label class="form-check-label" for="form-check-radio-primary">
                                               Homme
                                             </label>
                                        </div>

                                        <div class="form-check form-check-info form-check-inline">
                                         <input class="form-check-input" type="radio" value="femme" name="Civilite" id="form-check-radio-info">
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
                                            <input class="form-check-input" type="checkbox" name="statut" role="switch" id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Statut</label>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                        <button class="btn btn-light-dark" data-bs-dismiss="modal">Annuler</button>
                                        </div>
                                        <div class="col-2">          
                                                                       
                                        <a href="#" class="btn btn-primary" id='gi'>Enregistrer</a>
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
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../src/plugins/src/table/datatable/datatables.js"></script>
    <script src="../src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="../src/plugins/src/table/datatable/button-ext/jszip.min.js"></script>    
    <script src="../src/plugins/src/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="../src/plugins/src/table/datatable/button-ext/buttons.print.min.js"></script>
    <script src="../src/plugins/src/table/datatable/custom_miscellaneous.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->    
    <script>
        ecommerceList = $('#ecommerce-list').DataTable({
            headerCallback:function(e, a, t, n, s) {
                e.getElementsByTagName("th")[0].innerHTML=`
                <div class="form-check form-check-primary d-block new-control">
                    <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                </div>`
            },
            columnDefs:[ {
                targets:0, width:"30px", className:"", orderable:!1, render:function(e, a, t, n) {
                    return `
                    <div class="form-check form-check-primary d-block new-control">
                        <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                    </div>`
                }
            }],
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 10 
        });
        multiCheck(ecommerceList);
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->    

    <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>

	<script type="text/javascript">
	                         $(function(){
							$('#gi').click(function(){
								var da = $('#myforme').serialize();
								$.post('controller/Clients/ajouter.php',da,function(data){
									if(data == ""){
                                        $('#alerte').html('<div class="alert alert-light-success alert-dismissible fade show border-0 mb-4" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> Ajouter clients Avec Succées. </div>');
                                        setTimeout(
                                        window.location.replace("Clients.php"), 10000);;
                                         
									}
								else {
									$('#alerte').html(data);
								}
								});
							});
							});
                                      

    </script>


<script type='text/javascript'>
            $(document).ready(function(){

                $('.userinfo').click(function(){
                   
                    var userid = $(this).data('id');

                    // AJAX request
                    $.ajax({
                        url: 'controller/Clients/ajaxfile.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            // Add response in Modal body
                            $('.modal-body').html(response); 

                            // Display Modal
                            $('#empModal').modal('show'); 
                        }
                    });
                });
            });
            </script>
    <!-- END PAGE LEVEL SCRIPTS -->  
</body>
</html>