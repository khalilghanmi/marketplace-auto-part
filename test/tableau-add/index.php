<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#btn1").click(function(){
    $("p").append(" <b>Appended text</b>.");
  });

  $("#btn2").click(function(){
    $(".testing").prepend("<tr><td>khalil</td><td>ghanmi</td><td>29</td><td><button id='delateline'>delate text</button></td></tr>");
  });
});
$(document).ready(function(){ 
  $("#delateline").click(function(){
    $("tr").remove();
  });
});
$(document).ready(function(){ 
  $("#insert").click(function(){
    $('#myformemodif').submit();
  });
});


$(function(){
        $('#modif').click(function(){
            var da = $('#myformemodif').serialize();
            $.post('affichage.php',da,function(data){
                
                $('#alertemodif').html(data);
           
            });
        });
        });

</script>
</head>
<body>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

<ol>
  <li>List item 1</li>
  <li>List item 2</li>
  <li>List item 3</li>
</ol>
<!-- <form action="third.php" method="get">
    
    Red     <input type="checkbox" name="color[]" id="color" value="Red">
    Green   <input type="checkbox" name="color[]" id="color" value="Green">
    Blue    <input type="checkbox" name="color[]" id="color" value="Blue">
    Cyan    <input type="checkbox" name="color[]" id="color" value="Cyan">
    Magenta <input type="checkbox" name="color[]" id="color" value="Magenta">
    Yellow  <input type="checkbox" name="color[]" id="color" value="Yellow">
    Black   <input type="checkbox" name="color[]" id="color" value="Black">
     
    <input type="submit" value="submit">
</form> -->
 
<form action="third.php" method="get">
<table class="testing" border="2px" width="100%" >
    <tr>
    <td><input type="text" name="nom[]"></td>
    </form>
    </tr>
    <tr>
     
    <td><input type="text" name="nom[]"></td>
    </tr>
     
    <tr>
     
    <td><input type="text" name="nom[]"></td>
   
    </tr>
</table>
<input type="submit"   value="test"> 
</form>
  

</body>
</html>
