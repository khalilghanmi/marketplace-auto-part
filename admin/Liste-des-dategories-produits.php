<?php
function dbconnect(){
	$host = "localhost";
	$connuser = "root";
	$connpass = "";
	$connname = "pieces-auto-tunisie";

	$conn = new mysqli($host, $connuser, $connpass, $connname);

	if($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}
	
	return $conn;
}
?>
<?php

function categories()
{
	$conn = dbconnect();
	$sql = "SELECT * FROM category WHERE parent_id=0";
	$result = $conn->query($sql);
	
	$categories = array();
	
	while($row = $result->fetch_assoc())
	{
		$categories[] = array(
			'category_id' => $row['category_id'],
			'parent_id' => $row['parent_id'],
			'name_category' => $row['name_category'],
            'category_image' => $row['category_image'],
            'description_category' => $row['description_category'],
            'meta_title' => $row['meta_title'],
            'meta_description' => $row['meta_description'],
            'meta_keyword' => $row['meta_keyword'],
            'Statut' => $row['Statut'],
            'created_at' => $row['created_at'],
			'subcategory' => sub_categories($row['category_id']),
		);
	}
	
	return $categories;
}

function sub_categories($id)
{	
	
	$conn = dbconnect();
	$sql = "SELECT * FROM category WHERE parent_id=$id";
	$result = $conn->query($sql);
	
	$categories = array();
	
	while($row = $result->fetch_assoc())
	{
		$categories[] = array(
			'category_id' => $row['category_id'],
			'parent_id' => $row['parent_id'],
			'name_category' => $row['name_category'],
            'category_image' => $row['category_image'],
            'description_category' => $row['description_category'],
            'meta_title' => $row['meta_title'],
            'meta_description' => $row['meta_description'],
            'meta_keyword' => $row['meta_keyword'],
            'Statut' => $row['Statut'],
            'created_at' => $row['created_at'],
			'subcategory' => sub_categories($row['category_id']),
		);
	}
	return $categories;
}

?>
 <?php
function viewsubcat($categories)
{
	$html = '<tr>';
	foreach($categories as $category){

		$html .= '<td>'.$category['name_category'].'</td>';
		
		if( ! empty($category['subcategory'])){
			$html .= viewsubcat($category['subcategory']);
		}
	}
	$html .= '</tr>';
	
	return $html;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Liste des dategories | Admin - Piéce Auto Tunisie </title>
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
    <link rel="stylesheet" type="text/css" href="../src/plugins/src/tomSelect/tom-select.default.min.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/light/tomSelect/custom-tomSelect.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/tomSelect/custom-tomSelect.css">
    
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
                                <li class="breadcrumb-item active" aria-current="page">Liste des dategories</li>
                            </ol>
                        </nav>
                    </div>
                    <?php include 'controller/Categories-Produits/Categories.php';   ?>
                     <button type="button" class="btn mb-2 me-4" data-bs-toggle="modal" data-bs-target=".bd-example-modal-xl">Ajouter</button>
                    <div class="row">
                    <div class="row layout-top-spacing">
                
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="widget-content widget-content-area br-8">
                                <table id="ecommerce-list"  class="table dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Image marque</th>
                                            <th class="text-center">Nom marques</th>
                                            <th class="text-center">Statut</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $categories = categories(); ?>
                                    <?php foreach($categories as $category){ ?>
                                       <?php
                                       echo'<td class="text-center"> '.$category['category_id'].'</td>
                                            <td class="text-center"> '.$category['category_image'].'</td>';
                                       ?> 
                                    
                                    
		                            <tr>
			                        <td><?php echo $category['name_category'] ?></td>
                                    </tr>
                                    <?php echo'<td class="text-center">'.$category['Statut'].'</td>';?>
		                            <?php 
			                        if( ! empty($category['subcategory'])){
                                    echo'<tr><td>';
				                    echo viewsubcat($category['subcategory']);
                                    echo '</tr> </th>';
			                        } 
		                            ?>
	                                
                                    <?php } ?>
                                      
 
                                 </tbody>
                                </table>
                            </div>
                        </div>
    
                    </div>

                </div>
                                </div>
            <?php include 'head/footer.php'; 
            include 'controller/Categories-Produits/popup-ajouter.php';
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
    <script src="../src/plugins/src/table/datatable/custom_miscellaneous.js"></script>   
    <script src="../src/plugins/src/tomSelect/tom-select.base.js"></script>
    <script src="../src/plugins/src/tomSelect/custom-tom-select.js"></script> 
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
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="controller/Categories-Produits/Categories.js"></script>
<script>
   
    </script>
</body>
</html>