<?php
$db = mysqli_connect('localhost', 'root', '','test');
 $name = $_GET['nom'];

 // optional
 // echo "You chose the following color(s): <br>";
 
 foreach ($name as $color){ 
     $sql = "INSERT  INTO test_name VALUES ( '', '$color')";
$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
echo'insertions succées';
 }
 
?>