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
    <link rel="icon" type="image/x-icon" href="../../../src/assets/img/favicon.ico"/>
    <link href="../../../layouts/semi-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="../../../layouts/semi-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="../../../layouts/semi-dark-menu/loader.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../../../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../../layouts/semi-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../../../layouts/semi-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../../../src/plugins/src/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="../../../src/plugins/css/light/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="../../../src/plugins/css/dark/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="../../../src/assets/css/light/elements/alert.css">
    
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

 <?php include '../../head/header.php';   ?>
 <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div class="sidebar-wrapper sidebar-theme">
            <nav id="sidebar">
                <div class="navbar-nav theme-brand flex-row  text-center">
                    <div class="nav-logo">
                        <div class="nav-item theme-logo">
                        <a href="../../index.php">
                                <img src="http://localhost/marketplace-auto-part/src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="nav-item sidebar-toggle">
                        <div class="btn-toggle sidebarCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                        </div>
                    </div>
                </div>
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu active">
                        <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Tableau de bord</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-bs-parent="#accordionExample">
                            <li class="active">
                                <a href="../../Analytics.php"> Analyses </a>
                            </li>
                            <li>
                                <a href="../../Ventes.php"> Ventes </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>Ecommerce</span></div>
                    </li>
                    <li class="menu">
                        <a href="../../Boite-de-courriel.php" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <span>Boite de courriel</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="#invoice" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                <span>Ventes</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="invoice" data-bs-parent="#accordionExample">
                            <li>
                                <a href="../../Liste-des-ventes.php"> Liste des ventes </a>
                            </li>
                            <li>
                                <a href="../../Aperçu-des-ventes.php"> Aperçu des ventes </a>
                            </li>
                            <li>
                                <a href="../../Ajouter-des-ventes.php"> Ajouter des ventes </a>
                            </li>
                            <li>
                                <a href="../../Editeur-de-ventes.php"> Editeur de ventes </a>
                            </li>                            
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#Produits" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                <span>Produits</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="Produits" data-bs-parent="#accordionExample">
                            <li>
                                <a href="../../Liste-des-produits.php"> Liste des produits </a>
                            </li>
                            <li>
                                <a href="../../Créer-des-produits.php"> Créer des produits </a>
                            </li> 
                            
                            <li>
                                <a href="../../Liste-des-options.php"> Liste des options </a>
                            </li>
                            <li>
                                <a href="../../Liste-des-dategories-produits.php"> Liste des dategories </a>
                            </li> 
                            <li>
                                <a href="../../Liste-des-attribut.php"> Liste des attribut </a>
                            </li>
                            <li>
                                <a href="../../Liste-des-Marques.php"> Liste des Marques </a>
                            </li>                           
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#blog" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                                <span>Blog</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="blog" data-bs-parent="#accordionExample">
                            
                            <li>
                                <a href="../../listes-de-blogs.php"> listes de blogs </a>
                            </li>
                            <li>
                                <a href="../../Créer-un-blog.php"> Créer un blog </a>
                            </li>                            
                            <li>
                                <a href="../../Blog-Modifier.php"> Blog Modifier </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>Multi-vendeur</span></div>
                    </li>
                    <li class="menu">
                        <a href="#Magazine" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                            <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Multi-vendeur</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="Magazine" data-bs-parent="#accordionExample"> 
                            <li>
                                <a href="../../Vendors.php"> Vendors </a>
                            </li>
                            <li>
                                <a href="../../Créer-un-Vendors.php"> Créer un Vendors </a>
                            </li>                            
                            <li>
                                <a href="../../Vendors-Modifier.php"> Vendors Modifier </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>UTILISATEUR</span></div>
                    </li>   
                    <li class="menu">
                        <a href="#Clients" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Clients</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="Clients" data-bs-parent="#accordionExample">
                            <li>
                                <a href="../../Clients.php"> Clients </a>
                            </li>
                             
                        </ul>
                    </li>
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>Utilisateurs</span></div>
                    </li>

                    <li class="menu">
                        <a href="#user-profile" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>profil</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="user-profile" data-bs-parent="#accordionExample">
                            <li>
                                <a href="../../profil-de-utilisateur.php"> profil de l'utilisateur </a>
                            </li>
                            <li>
                                <a href="../../paramètres-du-compte.php"> paramètres du compte </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#administration" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                            <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                              <span>gestion administration</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="administration" data-bs-parent="#accordionExample">
                            <li>
                                <a href="../../administration.php"> gestion administration </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
     

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
    <script src="../../../src/plugins/src/global/vendors.min.js"></script>
    <script src="../../../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../../../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="../../../src/plugins/src/waves/waves.min.js"></script>
    <script src="../../../layouts/semi-dark-menu/app.js"></script>
    <script src="../../../src/assets/js/custom.js"></script>
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
      $(".addlinetab").prepend('<tr><td><input type="text" name="name_value_options[]"class="form-control"></td><td><input class="multiple-file-upload" type="file" name="image_options[]" accept="image/*"  /></td><td><button type="button" id="delateline" class="btn btn-danger btnDelete" ><svg style="color: #fff;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></button></td></tr>');
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