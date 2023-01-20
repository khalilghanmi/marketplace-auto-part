$(document).ready(function(){
    $('.userinfo').click(function(){
        var userid = $(this).data('id');
        $.ajax({
            url: 'controller/Clients/popup-modification.php',
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
         url: 'controller/Clients/popup-suprimer.php',
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
    url: 'controller/Clients/popup-statut.php',
    type: 'post',
    data: {userid: userid},
    success: function(response){ 
        $('.modal-body-statut').html(response); 
        $('#empModalestatut').modal('show'); 
}
});
});
});
$(function(){
                $('#gi').click(function(){
                    var da = $('#myforme').serialize();
                    $.post('controller/Clients/ajouter.php',da,function(data){
                        if(data == ""){
                            $('#alerte').html('<div class="alert alert-light-success alert-dismissible fade show border-0 mb-4" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> Ajouter clients Avec Succées. </div>');
                            setTimeout(
                            window.location.replace("Clients.php"), 10000);;  
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
                    $.post('controller/Clients/modifications.php',da,function(data){
                        if(data == ""){
                            $('#alertemodif').html('<div class="alert alert-light-success alert-dismissible fade show border-0 mb-4" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> Ajouter clients Avec Succées. </div>');
                            setTimeout(
                            window.location.replace("Clients.php"), 10000);;                             
                        }
                    else {
                        $('#alertemodif').html(data);
                    }
                    });
                });
                });
