
<?php
$db = mysqli_connect('localhost', 'root', '','test');             
$sql = "SELECT * FROM clients";
$req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
$res = mysqli_num_rows($req);
echo'<table>';
if($res!=0)  
{
While ($data = mysqli_fetch_array($req)){
// on affiche les résultats
echo' <tr>
<td>'.$data['id'].'</td>
<td> '.$data['name'].'</td>
<td>'.$data['email'].'</td>
<td>'.$data['password'].'</td>
</tr>';
}
}
echo'<table>';
?>