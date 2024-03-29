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
	$res = mysqli_num_rows($result);
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
function viewsubcat($categories,$concatsubcatigory)
{
	$html = '';
    $concatsubcatigorys =$concatsubcatigory;
	foreach($categories as $category){
        
		$html .= '<tr><td class="text-center">'.$category['category_id'].'</td>
                  <td class="text-center"><div class="avatar  me-3">
                  <img src="../'.$category['category_image'].'" alt="Avatar" width="64" height="64">
                  </div></td>
                  <td class="text-center">'.$concatsubcatigorys.' > '.$category['name_category'].'</td>
                  <td class="text-center">'.$category['meta_title'].'</td>';
                  
                if($category['Statut'] == 1){
                    $html .='<td class="text-center"><span class="shadow-none badge badge-primary">activé</span></td>';
                }
                else{
                    $html .='<td class="text-center"><span class="shadow-none badge badge-danger">désactivé</span></td>';
                }
                $html .='<td class="text-center">
                <div class="btn-group text-center">
                <a class=" btn btn-dark btn-sm userinfo " data-bs-target=".bd-example-modal-lg" data-id="'.$category['category_id'].'" href="#">Modifier</a>
                <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                <a class="dropdown-item userinfos" data-bs-target=".bd-example-modal-lg" data-id="'.$category['category_id'].'" href="#">Supprimer</a>
                <a class="dropdown-item userinfosstatut" data-id="'.$category['category_id'].'" href="#">Statut</a>
                </div>
                </div>
                </td>
                </tr>
        ';
		
		if( ! empty($category['subcategory'])){
            $concatsubcatigory = $concatsubcatigorys.' > '.$category['name_category'].'';
			$html .= viewsubcat($category['subcategory'],$concatsubcatigory);

		}
	}
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
    <?php include 'head/library-header.php';   ?>
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
                                            <th class="text-center">Image catégories</th>
                                            <th class="text-center">Nom catégories</th>
                                            <th class="text-center">Meta title</th>
                                            <th class="text-center">Statut</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $categories = categories(); ?>
<?php foreach($categories as $category){ ?>
		<tr>
			<td class="text-center"><?php echo $category['category_id'] ?></td>
           <?php
           echo'<td class="text-center"><div class="avatar  me-3">
           <img src="../'.$category['category_image'].'" alt="Avatar" width="64" height="64">
           </div></td>
           <td class="text-center">'.$category['name_category'].'</td>
           <td class="text-center">'.$category['meta_title'].'</td>';
           $concatsubcatigory=$category['name_category'];
           if($category['Statut'] == 1){
               echo'<td class="text-center"><span class="shadow-none badge badge-primary">activé</span></td>';
           }
           else{
               echo'<td class="text-center"><span class="shadow-none badge badge-danger">désactivé</span></td>';
           }
           echo'<td class="text-center">
   <div class="btn-group text-center">
      
       <a class=" btn btn-dark btn-sm userinfo " data-bs-target=".bd-example-modal-lg" data-id="'.$category['category_id'].'" href="#">Modifier</a>
       <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
       </button>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
           
           
           <a class="dropdown-item userinfos" data-bs-target=".bd-example-modal-lg" data-id="'.$category['category_id'].'" href="#">Supprimer</a>
           <a class="dropdown-item userinfosstatut" data-id="'.$category['category_id'].'" href="#">Statut</a>
           
       </div>
   </div>
   </td>';
           ?> </tr>
		<?php 
			if( ! empty($category['subcategory'])){
				echo viewsubcat($category['subcategory'],$concatsubcatigory);
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
    <?php include 'head/library-footer.php';   ?>
    <script type="text/javascript" src="controller/Categories-Produits/Categories.js"></script>
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
  
</body>
</html>