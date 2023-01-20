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
    $("table").prepend("<tr><td>khalil</td><td>ghanmi</td><td>29</td><td>tunis</td></tr>");
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
<table border="2px" width="100%" >
    <tr>
        <td>khalil</td>
        <td>khalil</td>
        <td>khalil</td>
        <td>khalil</td>
    </tr>
    <tr>
        <td>khalil</td>
        <td>khalil</td>
        <td>khalil</td>
        <td>khalil</td>
    </tr>
    <tr>
        <td>khalil</td>
        <td>khalil</td>
        <td>khalil</td>
        <td>khalil</td>
    </tr>
</table>
<button id="btn1">Append text</button>
<button id="btn2">Append list items</button>

</body>
</html>
