<?php
include '../connection.php';             
$sql = "SELECT * FROM options WHERE id_options='$id_options'";
$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
$data = mysqli_fetch_array($req);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Modifications des options | Admin - Piéce Auto Tunisie </title>
    <link rel="icon" type="image/x-icon" href="../../src/assets/img/favicon.ico"/>
    <link href="../../layouts/semi-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="../../layouts/semi-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="../../layouts/semi-dark-menu/loader.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../layouts/semi-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../../layouts/semi-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../../src/plugins/src/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="../../src/plugins/css/light/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="../../src/plugins/css/dark/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="../../src/assets/css/light/elements/alert.css">
    
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

 <?php include '../../head/header-options.php';   ?>
 <div class="main-container" id="container">
        
 <?php include '../../head/menu-options.php';   ?>

        <div id="content" class="main-content">
        
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">
 
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">App</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Modificartions des options</li>
                            </ol>
                        </nav>
                    </div>
                  <div class="row">
                    <div class="row layout-top-spacing">
                
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                            <div class="body" style="margin: 30px;">
                                            <div id='alertemodif'></div>
                                            <form class="row g-3" id='mymodif'  method="post" action="modifications.php"  enctype="multipart/form-data">
                                            <input type="hidden" name="id_options" value="<?php echo $data['id_options']?>"\>
                                            <div class="col-md-12">
                                            <label for="inputEmail4" class="form-label">Option Name</label>
                                            <input type="text" name="name_options" value="<?php echo $data['name_options']?>" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputPassword4"  class="form-label ">Type</label>
                                            <select id="liste" name="type_options" class="form-control seletors" placeholder="Select a person..." autocomplete="off">
                                            <option value="<?php echo $data['type_options']?>"><?php echo $data['type_options']?></option>
                                            <optgroup label="Choose">
                                            <option value="select">Select</option>
                                            <option value="radio">Radio</option>
                                            <option value="checkbox">Checkbox</option>
                                            </optgroup>
                                            <optgroup label="Input">
                                            <option value="text">Text</option>
                                            <option value="textarea">Textarea</option>
                                            </optgroup>
                                            <optgroup label="File">
                                            <option value="file">File</option>
                                            </optgroup>
                                            <optgroup label="Date">
                                            <option value="date">Date</option>
                                            <option value="time">Time</option>
                                            <option value="datetime">Date &amp; Time</option>
                                            </optgroup>
                                            </select>        
                                        </div>
                                         
                                        <div class="col-md-12">
                                         <?php
                                         $selection=$data['type_options'];
                                         if($selection=="select" || $selection=="radio" || $selection=="checkbox"){
                                            $sql = "SELECT * FROM options WHERE id_value_options='$id_options'";
                                            $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
                                            $res = mysqli_num_rows($req);
                                            echo'
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
                                            <tbody> ';
                                            if($res!=0)  
                                            {
                                            While ($dataselct = mysqli_fetch_array($req)){ 
                                            echo'
                                            <tr>
                                            <td>
                                            <input type="text" name="name_value_options[]" value="'.$dataselct['name_value_options'].'" class="form-control">
                                            </td>
                                            <td>
                                            <input class="multiple-file-upload" type="file" name="image_options[]" accept="image/*"  />
                                            </td>
                                            <td>
                                            <button type="button" id="delateline" class="btn btn-danger btnDelete" >
                                            <svg style="color: #fff;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></button>
                                            </td>
                                            </tr>
                                               ';
                                         }
                                         }
                                         echo' <tr>
                                         <td colspan="2"></td>
                                         <td class="text-center"><button type="button" id="addline"  class="btn btn-primary">
                                         +
                                         </button></td>
                                         </tr>
                                     </tbody>
                                     </table>
                                 </fieldset>
                                     ';
                                         }
                                         ?>   
                                        <div id='affich'></div> 
                                        </div>
                                        <div class="col-6">
                                        <label for="inputEmail4" class="form-label">Statut attributes</label>
                                            <div class="form-check">
                                            <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="Statut" role="switch" id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Statut</label>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="col-2">
                                        <a href="../../Liste-des-options.php" class="btn btn-light-dark">Retour</a>
                                        </div>
                                        <div class="col-3">          
                                                                       
                                        <a href="#" class="btn btn-primary" id='gimodif'>Enregistrer Modification</a>
                                        </div>
                                    </form>

                                            </div>
                                            
                            
                            </div>
                        </div>
    
                    </div>

                </div>
                                </div>
            <?php include '../../head/footer.php';
            ?>
        </div>
    </div>
    <script src="../../src/plugins/src/global/vendors.min.js"></script>
    <script src="../../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="../../src/plugins/src/waves/waves.min.js"></script>
    <script src="../../layouts/semi-dark-menu/app.js"></script>
    <script src="../../src/assets/js/custom.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap.bundle.min.js"></script>
<!-- <script type="text/javascript" src="options.js"></script> -->
<script>
    $(function(){
                    $('#gimodif').click(function(){
                        var da = $('#mymodif').serialize();
                        $.post('controller-modification.php',da,function(data){
                            if(data == ""){
                                $('#alertemodif').html('<div class="alert alert-light-success alert-dismissible fade show border-0 mb-4" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> Ajouter clients Avec Succées. </div>');
                                $('#mymodif').submit();
                            }
                        else {
                            $('#alertemodif').html(data);
                        }
                        });
                    });
                    });
$(document).ready(function(){ 
    $("#addline").click(function(){
      $(".addlinetab").prepend('<tr><td><input type="text" name="name_value_options[]"class="form-control"></td><td><input class="multiple-file-upload" type="file" name="image_options[]" accept="image/*" required="required" /></td><td><button type="button" id="delateline" class="btn btn-danger btnDelete" ><svg style="color: #fff;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></button></td></tr>');
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
            $("fieldset").remove();
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
      $(".addlinetab").prepend('<tr><td><input type="text" name="name_value_options[]"class="form-control"></td><td><input class="multiple-file-upload" type="file" name="image_options[]" accept="image/*" required="required"  /></td><td><button type="button" id="delateline" class="btn btn-danger btnDelete" ><svg style="color: #fff;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></button></td></tr>');
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