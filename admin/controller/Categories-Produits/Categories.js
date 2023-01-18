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
    