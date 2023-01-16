<?php
include('multcatcat-script.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<title>Multilevel Category in PHP</title>
<style type="text/css"> 
.right-col table, td, th {
 border: 1px solid #ddd;
 text-align: left;} 
.right-col table { 
border-collapse: collapse; 
max-width: 100%; width:90%;} .
right-col{ width: 75%;
 float: right;}
 .right-col th, td { 
padding: 15px;} 
.left-col form { 
height: 100vh; 
border: 2px solid #f1f1f1; 
padding: 16px;
 background-color: white;} 
.left-col{ 
width: 20%; 
float: left;
 background: #f1f1f1;
 height: 100vh;
} 
.left-col a{ text-decoration: none;
 font-size: 20px; 
 color: orangered; 
 line-height: 30px} 
.left-col ul{
 list-style-type:none;} 
.form input, .form select{
 width: 100%; 
padding: 15px; 
margin: 5px 0 22px 0; 
display: inline-block; 
border: none; background: #f1f1f1;}
 .form select{ 
width:109%;}
.form input[type=text]:focus, input[type=password]:focus {
 background-color: #ddd; 
 outline: none;} 
.form button[type=submit] { 
background-color: #434140; 
color: #ffffff; 
padding: 10px 20px;
margin: 8px 0; 
border: none; 
cursor: pointer; 
width: 111%; 
opacity: 0.9; 
font-size: 20px;
} 
.form label{ 
font-size: 18px;
} 
.form button[type=submit]:hover { 
background-color:#3d3c3c;} 
.form-title a, .form-title h2{ 
display: inline-block;} 
.form-title a{ 
text-decoration: none;
 font-size: 20px;
 background-color: green;
 color: honeydew;
 padding: 2px 10px;}
 .form{ width:30%;}
 </style>
</head>
<body>
<!--====form section start====-->
<div class="left-col">
<ul>
  <li><a href="user-form.php?add=add-category">Add Multilevel Category</a></li>
  <li><a href="user-form.php">View Multilevel Category</a></li>
</ul>      
</div>
<!--====form section start====-->
<div class="right-col">
<div class="form">
    
<p style="color:red"><?php if(!empty($msg)){echo $msg; }?></p> <?php
    $add=$_GET['add']??'';
      switch ($add) {
      case 'add-category':
              
?>
       <!--==== category form=====-->
        <div class="form-title">
       <h2>Create Nested Category</h2>
       </div>
       <form method="post" action="">
          <label> category</label>
          <select name="parent_id">
           
<?php
             foreach ($catData as $cat) {
                 
?> <option value="<?php echo $cat['id']; ?>"><?php echo $cat['category_name']; ?></option> <?php
         if( ! empty($cat['nested_categories'])){
            echo display_option($cat['nested_categories'], $mark.'&nbsp;&nbsp;&nbsp;');
          } 
       }
              
?>
       </select>
          <label>Subcategory Category</label>
          <input type="text" placeholder="Enter Full Name" name="category_name" required>
          <button type="submit" name="addcat">Add Nested category</button>
    </form>
    <!--=======subcategory form====-->
                  
<?php
      break;
      default:
              
?>
<!--=====category subcategory list=====-->
                  
<?php
foreach($catData as $cat){ ?>
    <ul>
      <li>
<?php echo $cat['category_name']; ?>
</li>
<?php
      if( ! empty($cat['nested_categories'])){
        echo display_list($cat['nested_categories']);
      } 
                                        
?>
  </ul>
<!--======category subcategory list=====-->
                                            
<?php
      }
        break;}
    
?>
    
    </div>
  </div>
</body>
</html>