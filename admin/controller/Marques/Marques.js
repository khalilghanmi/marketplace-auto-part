$(document).ready(function(){
    $('.userinfo').click(function(){
        var userid = $(this).data('id');
        $.ajax({
            url: 'controller/Marques/popup-modification.php',
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
         url: 'controller/Marques/popup-suprimer.php',
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
    url: 'controller/Marques/popup-statut.php',
    type: 'post',
    data: {userid: userid},
    success: function(response){ 
        $('.modal-body-statut').html(response); 
        $('#empModalestatut').modal('show'); 
}
});
});
});
 