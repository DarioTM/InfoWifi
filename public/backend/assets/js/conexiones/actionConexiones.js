$(document).ready(function() {
    
// MODELO AJAX  
 
var formAjax = function (url, data, type, callBack) {
    $.ajax({
        url: url,
        data: data,
        type: type,
        processData: false,
        contentType: false,
    })
    .done(function( json ) {
        console.log('ajax done');
        console.log(json);
        callBack(json);
    })
    .fail(function( xhr, status, errorThrown ) {
        console.log('ajax fail');
    })
    .always(function( xhr, status ) {
        console.log('ajax always');
    });
};



// FIN MODELO AJAX  



//ELIMINAR CONEXION

$(document).on("click",".btnDelete",function(evento){
    evento.preventDefault();
    
        id = $(this).attr('data-id');
    
        $.confirm({
            title: 'Delete Conection?',
            content: 'This action will be canceled in 6 seconds if you do not respond',
            autoClose: 'cancelAction|8000',
            type: 'red',
            buttons: {
                deleteUser: {
                    text: 'Delete Conection',
                    action: function () {
                        
                    var token = $("meta[name='csrf-token']").attr("content");
                    
                    $.ajax({
                    
                        url: "../../ConexionDestroy/"+id,
                        type: 'DELETE',
                        data: {
                        "id": id,
                        "_token": token,
                        },
                        
                    });
                        
                    $('#table_id').DataTable().ajax.reload();
                    
                    $.alert('Conection Delete!');
                        
                    }
                },
                cancelAction:{
                    text: 'Cancell',
                    action: function () {
                    $.alert('Action Canceled!');
                }
                    
                }
            }
        });
  
});


  
 //FIN ELIMNAR UN USUARIO
 
 
 
 
 
 
 
 
 

} );

