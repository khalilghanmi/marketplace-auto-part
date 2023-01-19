<?php
$db = mysqli_connect('localhost', 'root', '','pieces-auto-tunisie');    
 
        $sql = "SELECT COUNT(parent_id)FROM category";
        $req = mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
        $rst=mysqli_fetch_row($req);
        $nembres= $rst[0] ;
        echo $nembres;
         
        
?>