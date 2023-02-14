<?php
include 'controller/connection.php';             
$sql = "SELECT * FROM options WHERE id_value_options='0'";
$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
$res = mysqli_num_rows($req);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Liste des options | Admin - Piéce Auto Tunisie </title>
    <link rel="icon" type="image/x-icon" href="../src/assets/img/favicon.ico"/>
    <link href="../layouts/semi-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/semi-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="../layouts/semi-dark-menu/loader.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/semi-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../layouts/semi-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../src/plugins/src/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/light/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="../src/assets/css/light/elements/alert.css">
    
    <style>
        #ecommerce-list img {
            border-radius: 18px;
        }
    </style>
</head>
<body class="" data-bs-spy="scroll" data-bs-bs-target="#navSection" data-bs-offset="140">
 
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>

 <?php include 'head/header.php';   ?>

    <?php include 'head/menu.php';   ?>

        <div id="content" class="main-content">

            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">
 
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">App</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Liste des options</li>
                            </ol>
                        </nav>
                    </div>
                    <?php include 'controller/Liste-des-options/options.php';   ?>
                     <button type="button" class="btn mb-2 me-4" data-bs-toggle="modal" data-bs-target=".bd-example-modal-xl">Ajouter</button>
                    <div class="row">
                    <div class="row layout-top-spacing">
                
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <table id="ecommerce-list"  class="table dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Nom options</th>
                                            <th class="text-center">Type Options</th>
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
                                    <td class="text-center"> '.$data['id_options'].'</td>
                                    <td class="text-center"> '.$data['name_options'].'</td>
                                    <td class="text-center"> '.$data['type_options'].'</td>
                                    ';
                                    if($data['Statut'] == 1){
                                        echo'<td class="text-center"><span class="shadow-none badge badge-primary">activé</span></td>';
                                    }
                                    else{
                                        echo'<td class="text-center"><span class="shadow-none badge badge-danger">désactivé</span></td>';
                                    }
                                    echo'<td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-dark btn-sm userinfo " data-bs-target=".bd-example-modal-lg" data-id="'.$data['id_options'].'" >Modifier</button>
                                        <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                            <a class="dropdown-item userinfos" data-bs-target=".bd-example-modal-lg" data-id="'.$data['id_options'].'" href="#">Supprimer</a>
                                            <a class="dropdown-item userinfosstatut" data-id="'.$data['id_options'].'" href="#">Statut</a>
                                            
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
            <?php include 'head/footer.php'; 
            include 'controller/Liste-des-options/popup-ajouter.php';
            ?>
        </div>
    </div>
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
<script type="text/javascript" src="js/jquery.js"></script>
<!-- <script type="text/javascript" src="js/plugins.js"></script> -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="controller/Liste-des-options/options.js"></script>
<script>
$(document).ready(function(){ 
    $("#addline").click(function(){
      $(".addlinetab").prepend('<tr><td><input type="text" name="nom"class="form-control"></td><td><input class="multiple-file-upload" type="file" name="image_options" accept="image/*"  /></td><td><button type="button" id="delateline" class="btn btn-danger btnDelete" ><svg style="color: #fff;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></button></td></tr>');
    });
  });
  
  $(document).ready(function(){
  
  $("#tbUser").on('click','.btnDelete',function(){
        $(this).closest('tr').remove();
      });
  
  });    
$(document).ready(function(){
      $("select.seletors").change(function(){
        var liste, texte;
        liste = document.getElementById("liste");
        texte = liste.options[liste.selectedIndex].text;
        // alert("Vous avez sélectionné le langage : " + texte);
        if(texte=='Select' || texte=='Radio' || texte=='Checkbox' ){
          $('#affich').html(`
          <fieldset style="display: block;">
                                            <legend>Option Values</legend>
                                            <table id="tbUser"  class="table dt-table-hover table-bordered addlinetab" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-left required">Option Value Name</th>
                                                    <th class="text-center">Image Options</th>
                                                    <th class="text-center">Sort Order</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
                                                <tr>
                                                <td colspan="2"></td>
                                                <td class="text-center"><button type="button" id="addline"  class="btn btn-primary">
                                                +
                                                </button></td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </fieldset>

          `);
          $(document).ready(function(){ 
    $("#addline").click(function(){
      $(".addlinetab").prepend('<tr><td><input type="text" name="name_value_options[]"class="form-control"></td><td><input class="multiple-file-upload" type="file" name="image_options[]" accept="image/*"  /></td><td><button type="button" id="delateline" class="btn btn-danger btnDelete" ><svg style="color: #fff;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></button></td></tr>');
    });
  });
  
  $(document).ready(function(){
  
  $("#tbUser").on('click','.btnDelete',function(){
        $(this).closest('tr').remove();
      });
  
  });    
        }
        else{
          $('#affich').html('');
        }
        
      });
     
});
 
</script>
</body>
</html>