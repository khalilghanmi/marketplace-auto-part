<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Créer des produits | Admin - Piéce Auto Tunisie </title>
    <link rel="icon" type="image/x-icon" href="src/assets/img/favicon.ico"/>
    <link href="layouts/semi-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="layouts/semi-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="layouts/semi-dark-menu/loader.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="layouts/semi-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="layouts/semi-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="src/plugins/src/filepond/FilePondPluginImagePreview.min.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/src/tagify/tagify.css">  
    <link rel="stylesheet" type="text/css" href="src/assets/css/light/forms/switches.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/css/light/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/css/light/tagify/custom-tagify.css">
    <link href="src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="src/assets/css/dark/forms/switches.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/css/dark/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/css/dark/tagify/custom-tagify.css">
    <link href="src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="src/assets/css/light/apps/ecommerce-create.css">
    <link rel="stylesheet" href="src/assets/css/dark/apps/ecommerce-create.css">
    <link href="src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css" />
    <link href="src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css" />
</head>
<body class="">
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
                                <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create</li>
                            </ol>
                        </nav>
                    </div>
                    
                    <div class="simple-pill">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills" data-bs-toggle="pill" data-bs-target="#General" type="button" role="tab" aria-controls="pills-home" aria-selected="true">General</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills" data-bs-toggle="pill" data-bs-target="#Data" type="button" role="tab" aria-controls="pills-home" aria-selected="false">Data</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills" data-bs-toggle="pill" data-bs-target="#Links" type="button" role="tab" aria-controls="pills-home" aria-selected="false">Links</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills" data-bs-toggle="pill" data-bs-target="#Attributl" type="button" role="tab" aria-controls="pills-home" aria-selected="false">Attributl</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills" data-bs-toggle="pill" data-bs-target="#Options" type="button" role="tab" aria-controls="pills-home" aria-selected="false">Options</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills" data-bs-toggle="pill" data-bs-target="#Promo" type="button" role="tab" aria-controls="pills-home" aria-selected="false">Promo</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills" data-bs-toggle="pill" data-bs-target="#Fournisseur" type="button" role="tab" aria-controls="pills-home" aria-selected="false">Fournisseur</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="btn btn-success w-100">Ajouter produit</button>
                            </li>    
                        </ul>
                                <div class="tab-content" id="pills-tabContent">  
                                    <?php
                                    include 'controller/Liste-des-produits/les-tabs/General.php';
                                    include 'controller/Liste-des-produits/les-tabs/Data.php';
                                    include 'controller/Liste-des-produits/les-tabs/Links.php';
                                    include 'controller/Liste-des-produits/les-tabs/Attribut.php';
                                    include 'controller/Liste-des-produits/les-tabs/Options.php';
                                    include 'controller/Liste-des-produits/les-tabs/Promo.php';
                                    include 'controller/Liste-des-produits/les-tabs/Fournisseur.php';
                                    ?>
                                </div>
                    </div>
        </div>
                
            </div>

            <?php include 'head/footer.php';   ?>
         
        </div>
        
    </div>
   
    <script src="src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="src/plugins/src/waves/waves.min.js"></script>
    <script src="layouts/semi-dark-menu/app.js"></script>
    <script src="src/plugins/src/highlight/highlight.pack.js"></script>
    <script src="src/plugins/src/editors/quill/quill.js"></script>
    <script src="src/plugins/src/filepond/filepond.min.js"></script>
    <script src="src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
    <script src="src/plugins/src/tagify/tagify.min.js"></script>
    <script src="src/assets/js/apps/ecommerce-create.js"></script>
    <script src="src/plugins/src/highlight/highlight.pack.js"></script>
    <script src="src/assets/js/scrollspyNav.js"></script>
</body>
</html>