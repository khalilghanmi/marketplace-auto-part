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
       

        $(document).ready(function(){
      $("select.seletors").change(function(){
        var liste, texte;
        liste = document.getElementById("liste");
        texte = liste.options[liste.selectedIndex].text;
        alert("Vous avez sélectionné le langage : " + texte);
      });
    });

    

</script>
</head>
<body>
  
<form>
<select   name="parent" id="liste" class="form-control seletors"  autocomplete="off">
                                            <optgroup label="Choose">
                                            <option value="select">Select</option>
                                            <option value="radio">Radio</option>
                                            <option value="checkbox">Checkbox</option>
                                            </optgroup>
                                            <optgroup label="Input">
                                            <option value="text">Text</option>
                                            <option value="textarea">Textarea</option>
                                            </optgroup>
                                            <optgroup label="File">
                                            <option value="file">File</option>
                                            </optgroup>
                                            <optgroup label="Date">
                                            <option value="date">Date</option>
                                            <option value="time">Time</option>
                                            <option value="datetime">Date &amp; Time</option>
                                            </optgroup>
                                            </select> 

  </form>
    <div id='affich'></div>                                        
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
