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


        $(document).ready(function(){
      $("select.seletors").change(function(){
        var liste, texte;
        liste = document.getElementById("liste");
        texte = liste.options[liste.selectedIndex].text;
        alert("Vous avez sélectionné le langage : " + texte);
        if(texte=='Select' || texte=='Radio' || texte=='Checkbox' ){
          $('#affich').html(`
          <form action="third.php" method="get">
          <table class="testing" border="2px" width="100%" >
          <tr>
          <td><input type="text" name="nom[]"></td>
          
          </tr>
          <tr>
          <td><input type="text" name="nom[]"></td>
          </tr>
          <tr>
          <td><input type="text" name="nom[]"></td>
          </tr>
          </table>
          <input type="submit"   value="test"></form><button id="btn2">ajout</button>`);
        }
        else{
          $('#affich').html('');
        }
        
      });
    });

    

</script>
</head>
<body>
<div id='affich'></div> 
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
<!--  
<form action="third.php" method="get"><table class="testing" border="2px" width="100%" ><tr><td><input type="text" name="nom[]"></td></form></tr><tr><td><input type="text" name="nom[]"></td></tr><tr><td><input type="text" name="nom[]"></td></tr></table><input type="submit"   value="test"></form><button id="btn2">ajout</button> -->

</body>
</html>
