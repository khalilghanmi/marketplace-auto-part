
<html>

<head>
	
</head>
<body>
    <?php
    $date_added=date('F');
    echo $date_added;
    ?>
<form method="post" action="ajoute-images.php" enctype="multipart/form-data" class="form-horizontal">

    	<td><label class="control-label">Profile Img.</label></td>
        <td><input class="input-group" type="file" name="user_image" accept="image/*" /></td>
    
        <button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; save
        </button>
        
</form>

</body> 
</html>

