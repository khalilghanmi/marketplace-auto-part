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
<form action="affichage.php" method="post">
<table class="testing" border="2px" width="100%" >
    <tr>
    <td><input type="text" name="nom"></td>
    <td><input type="text" name="nom"></td>
    <td><input type="text" name="nom"></td>
    <td><input type="text" name="nom"></td>
    </tr>
    <tr>
    <td><input type="text" name="nom"></td>
    <td><input type="text" name="nom"></td>
    <td><input type="text" name="nom"></td>
    <td><input type="text" name="nom"></td>
    </tr>
    <tr>
    <td><input type="text" name="nom"></td>
    <td><input type="text" name="nom"></td>
    <td><input type="text" name="nom"></td>
    <td><input type="text" name="nom"></td>
    </tr>
</table>
<button id="delateline">delate text</button>
<button id="btn2">Append list items</button>
<input type="submit" value="test">
</form>
</body>
</html>
