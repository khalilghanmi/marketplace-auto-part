$(document).ready(function(){ 
    $("#addline").click(function(){
      $(".addlinetab").prepend('<tr><td><input type="text" name="nom"class="form-control"></td><td><input class="multiple-file-upload" type="file" name="category_image" accept="image/*"  /></td><td><button type="button" id="delateline" class="btn btn-danger btnDelete" ><svg style="color: #fff;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></button></td></tr>');
    });
  });
  
  $(document).ready(function(){
  
  $("#tbUser").on('click','.btnDelete',function(){
        $(this).closest('tr').remove();
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
            <fieldset style="display: block;">
                                              <legend>Option Values</legend>
                                              <table id="tbUser"  class="table dt-table-hover table-bordered addlinetab" style="width:100%">
                                              <thead>
                                                  <tr>
                                                      <th class="text-left required">Option Value Name</th>
                                                      <th class="text-center">Image Options</th>
                                                      <th class="text-center">Sort Order</th>
                                                  </tr>
                                              </thead>
                                              <tbody> 
                                                  <tr>
                                                  <td colspan="2"></td>
                                                  <td class="text-center"><button type="button" id="addline"  class="btn btn-primary">
                                                  +
                                                  </button></td>
                                                  </tr>
                                              </tbody>
                                              </table>
                                          </fieldset>
  
            `);
          }
          else{
            $('#affich').html('');
          }
          
        });
      });
$(function(){
    $('#gi').click(function(){
        var da = $('#myforme').serialize();
        $.post('controller/Categories-Produits/controller-parent.php',da,function(data){
            if(data == ""){
                $('#myforme').submit();
            }
        else {
            $('#alerte').html(data);
        }
        });
    });
    });
    $(function(){
        $('#modif').click(function(){
            var da = $('#myformemodif').serialize();
            $.post('controller/Categories-Produits/controller-parent.php',da,function(data){
                if(data == ""){
                    $('#myformemodif').submit();
                }
            else {
                $('#alertemodif').html(data);
            }
            });
        });
        });
$(document).ready(function(){
    $('.userinfo').click(function(){
        var userid = $(this).data('id');
        $.ajax({
            url: 'controller/Categories-Produits/popup-modification.php',
            type: 'post',
            data: {userid: userid},
            success: function(response){ 
                $('.modal-body').html(response); 
                $('#empModal').modal('show'); 
            }
        });
    });
});
$(document).ready(function(){
$('.userinfos').click(function(){
var userid = $(this).data('id');
    $.ajax({
         url: 'controller/Categories-Produits/popup-suprimer.php',
         type: 'post',
        data: {userid: userid},
        success: function(response){ 
            $('.modal-body-suprimer').html(response); 
            $('#empModale').modal('show'); 
        }
    });
});
});
$(document).ready(function(){
$('.userinfosstatut').click(function(){
var userid = $(this).data('id');
$.ajax({
    url: 'controller/Categories-Produits/popup-statut.php',
    type: 'post',
    data: {userid: userid},
    success: function(response){ 
        $('.modal-body-statut').html(response); 
        $('#empModalestatut').modal('show'); 
}
});
});
});
new TomSelect("#input-tags",{
    persist: false,
    createOnBlur: true,
    create: true
});
    