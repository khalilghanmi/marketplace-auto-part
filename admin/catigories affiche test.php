<?php
function dbconnect(){
	$host = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "test";

	$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

	if($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}
	
	return $conn;
}
?>

<?php 

?>

<?php
function viewsubcat($categories)
{
	$html = '<ul class="sub-category">';
	foreach($categories as $category){

		$html .= '<li>'.$category['category_name'].'</li>';
		
		if( ! empty($category['subcategory'])){
			$html .= viewsubcat($category['subcategory']);
		}
	}
	$html .= '</ul>';
	
	return $html;
}
?>

<?php $categories = categories(); ?>
<?php foreach($categories as $category){ ?>
		<ul class="category">
			<li><?php echo $category['category_name'] ?></li>
		<?php 
			if( ! empty($category['subcategory'])){
				echo viewsubcat($category['subcategory']);
			} 
		?>
	</ul>
<?php } ?>
