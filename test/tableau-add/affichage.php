<?php
$db = mysqli_connect('localhost', 'root', '','test');
$nom=$_POST['nom'];
$sql = "INSERT  INTO test_name VALUES ( '', '$nom')";
$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
echo'insertions succées';
?>