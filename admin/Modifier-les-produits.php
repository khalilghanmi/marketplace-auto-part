<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Ecommerce Edit | CORK - Multipurpose Bootstrap Dashboard Template </title>
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

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link rel="stylesheet" href="../src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="../src/plugins/src/filepond/FilePondPluginImagePreview.min.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/src/tagify/tagify.css">
    
    <link rel="stylesheet" type="text/css" href="../src/assets/css/light/forms/switches.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/light/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/light/tagify/custom-tagify.css">
    <link href="../src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" type="text/css" href="../src/assets/css/dark/forms/switches.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/tagify/custom-tagify.css">
    <link href="../src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" href="../src/assets/css/light/apps/ecommerce-create.css">
    <link rel="stylesheet" href="../src/assets/css/dark/apps/ecommerce-create.css">
    <!--  END CUSTOM STYLE FILE  -->
</head>
<body class="">
    
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
                                <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div class="row mb-4 layout-spacing layout-top-spacing">

                        <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                            <div class="widget-content widget-content-area ecommerce-create-section">

                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Product Name" value="Nike Shoes Red">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label>Description</label>
                                        <div id="product-description">
                                            Perspiciatis maxime facilis velit tenetur, iste expedita in dignissimos iure aut excepturi sapiente eligendi repellat. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut blanditiis assumenda doloremque fugiat minima tempora!
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="product-images">Upload Images</label>
                                        <div class="multiple-file-upload">
                                            <input type="file" 
                                                class="filepond file-upload-multiple"
                                                name="filepond"
                                                id="product-images" 
                                                multiple 
                                                data-allow-reorder="true"
                                                data-instant-upload="false"
                                                data-max-file-size="3MB"
                                                data-max-files="5">
                                        </div>
                                    </div>

                                    <div class="col-md-4 text-center">
                                        <div class="switch form-switch-custom switch-inline form-switch-primary mt-4">
                                            <input class="switch-input" type="checkbox" role="switch" id="showPublicly" checked>
                                            <label class="switch-label" for="showPublicly">Display publicly</label>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                            
                        </div>

                        <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                            <div class="row">
                                <div class="col-xxl-12 col-xl-8 col-lg-8 col-md-7 mt-xxl-0 mt-4">
                                    <div class="widget-content widget-content-area ecommerce-create-section">
                                        <div class="row">
                                            <div class="col-xxl-12 mb-4">
                                                <div class="switch form-switch-custom switch-inline form-switch-secondary">
                                                    <input class="switch-input" type="checkbox" role="switch" id="in-stock" checked>
                                                    <label class="switch-label" for="in-stock">In Stock</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-md-6 mb-4">
                                                <label for="proCode">Product Code</label>
                                                <input type="text" class="form-control" id="proCode" value="79WEL56A">
                                            </div>
                                            <div class="col-xxl-12 col-md-6 mb-4">
                                                <label for="proSKU">Product SKU</label>
                                                <input type="text" class="form-control" id="proSKU" value="QQ69SOP3D/T2">
                                            </div>
                                            <div class="col-xxl-12 col-md-6 mb-4">
                                                <label for="gender">Gender</label>
                                                <select class="form-select" id="gender">
                                                    <option value="">Choose...</option>
                                                    <option value="men" selected>Men</option>
                                                    <option value="women">Women</option>
                                                    <option value="kids">Kids</option>
                                                    <option value="unisex">Unisex</option>
                                                </select>
                                            </div>
                                            <div class="col-xxl-12 col-md-6 mb-4">
                                                <label for="category">Category</label>
                                                <select class="form-select" id="category">
                                                    <option value="">Choose...</option>
                                                    <option value="electronics">Electronics</option>
                                                    <option value="clothing" selected>Clothing</option>
                                                    <option value="organic">Organic</option>
                                                    <option value="apperal">Apperal</option>
                                                    <option value="accessories">Accessories</option>
                                                </select>
                                            </div>
                                            <div class="col-xxl-12 col-lg-6 col-md-12">
                                                <label for="tags">Tags</label>
                                                <input id="tags" class="product-tags" value="shoes, 2021 : Edition">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-4 col-lg-4 col-md-5 mt-4">
                                    <div class="widget-content widget-content-area ecommerce-create-section">
                                        <div class="row">
                                            <div class="col-sm-12 mb-4">
                                                <label for="regular-price">Regular Price</label>
                                                <input type="text" class="form-control" id="regular-price" value="180">
                                            </div>
                                            <div class="col-sm-12 mb-4">
                                                <label for="sale-price">Sale Price</label>
                                                <input type="text" class="form-control" id="sale-price" value="30">
                                            </div>
                                            <div class="col-sm-12 mb-4">
                                                <div class="switch form-switch-custom switch-inline form-switch-danger">
                                                    <input class="switch-input" type="checkbox" role="switch" id="pricing-includes-texes" checked>
                                                    <label class="switch-label" for="pricing-includes-texes">Price includes taxes</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button class="btn btn-success w-100">Save Changes</button>
                                            </div>
                                        </div>                                            
                                    </div>
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
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="../src/plugins/src/global/vendors.min.js"></script>
    <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="../src/plugins/src/waves/waves.min.js"></script>
    <script src="../layouts/semi-dark-menu/app.js"></script>
    
    <script src="../src/plugins/src/highlight/highlight.pack.js"></script>
    <script src="../src/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../src/plugins/src/editors/quill/quill.js"></script>
    <script src="../src/plugins/src/filepond/filepond.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="../src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="../src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>

    <script src="../src/plugins/src/tagify/tagify.min.js"></script>
    <script src="../src/assets/js/apps/ecommerce-create.js"></script>

    <script>
        ecommerce.addFiles('../src/assets/img/product-1.jpg', '../src/assets/img/product-3.jpg', '../src/assets/img/product-5.jpg');
    </script>

    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>