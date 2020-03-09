
$(document).ready(function() {
 
 
  

$.ajax({
    url: '../../datos/',
    type: "GET",
    dataType: 'json',
    success:function(ajax){

        
        $('#conexionesField').html(ajax.conexiones);
        $('#usuariosField').html(ajax.usuarios);
        $('#puntosField').html(ajax.puntos);
        

    },error:function(){
        $.alert({
        title: 'Sorry!',
        content: 'Parece que Skynet ha tomado el control de esta web',
        type: 'red',
        typeAnimated: true,
        buttons: {
            close: {
                text: 'Close',
                btnClass: 'btn-red',
                action: function(){
                }
            },

        }
        });
    }
});    




$(document).on("click",".btnReloadConec",function(evento){
  
    $.ajax({
        url: '../../datos/',
        type: "GET",
        dataType: 'json',
        success:function(ajax){
    
            
            $('#conexionesField').html(ajax.conexiones);
            $('#usuariosField').html(ajax.usuarios);
            $('#puntosField').html(ajax.puntos);
            
    
        },error:function(){
            $.alert({
            title: 'Sorry!',
            content: 'Parece que Skynet ha tomado el control de esta web',
            type: 'red',
            typeAnimated: true,
            buttons: {
                close: {
                    text: 'Close',
                    btnClass: 'btn-red',
                    action: function(){
                    }
                },
    
            }
            });
        }
    });  
  
  
});





});