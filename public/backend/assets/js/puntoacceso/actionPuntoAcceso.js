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

//CREACION Punto de acceso
  
    let createForm = document.getElementById("createForm");
    createForm.addEventListener("submit", function ( event ) {
    event.preventDefault();
    
    const createFo = new FormData(createForm);

    formAjax('../../createPoint', createFo, 'post', function (ajax) {
        
        if(ajax.success){
            
            $(".modalCreate").hide(200);
            $(".modal-backdrop").css({"position": "initial", "width": "0px"});
            
            
            $('#table_id').DataTable().ajax.reload();
            
            $.alert({
            title: 'Congratulations!',
            content: 'The Acces Point has been created successfully',
            type: 'green',
            typeAnimated: true,
            buttons: {
                close: {
                    text: 'Close',
                    btnClass: 'btn-green',
                    action: function(){
                    }
                },

            }
            });
            
        }if(ajax.fail){
        
            $.alert({
            title: 'Sorry!',
            content: 'This email is already in use',
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
 
        
        }if(ajax.error){
        
            $.alert({
            title: 'Sorry!',
            content: 'Name and e-mail are required',
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
  
  
//FIN CREACION Punto de acceso


//CONSEGUIR DATOS DEL Punto de acceso AL EDITARLO

$(document).on("click",".btnEdit",function(evento){
    evento.preventDefault();

    $.ajax({
        url: '../../showPunto/' + $(this).attr('data-id'),
        type: "GET",
        dataType: 'json',
        success:function(ajax){
            
            for(var i = 0; i < ajax.empleados.length; i++)
            {
                $('#editForm select[name="idempleado"]').append('<option value="'+ajax.empleados[i].id+'">'+ajax.empleados[i].name+'</option>');
            }

            $('#editForm select[name="idempleado"] option[value="'+ajax.punto.iduser+'"]').attr("selected", true);
            
            $('#editForm input[name="modelo"] select').val(ajax.punto.modelo);
            
            $('#editForm input[name="ubicacion"]').val(ajax.punto.ubicacion);
            
            $('#editForm input[name="latitud"]').val(ajax.punto.latitud);
            
            $('#editForm input[name="longitud"]').val(ajax.punto.longitud);
            
            $('#editForm input[name="fechaAlta"]').val(ajax.punto.fechaAlta);
            
            $('#editForm button[type="submit"]').attr('data-id', ajax.punto.id);
            
            initMap();
            

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
  
//FIN CONSEGUIR DATOS DEL USUARIO AL EDITARLO

//EDITAR Punto de acceso  

let editForm = document.getElementById("editForm");
    editForm.addEventListener("submit", function ( event ) {
    event.preventDefault();
    
    idpunto = $('#editForm button[type="submit"]').attr('data-id');

    
    const editFo = new FormData(editForm);

    
    formAjax('../../showPunto/' + idpunto, editFo, 'post', function (ajax) {
        
        if(ajax.success){
            
            $(".modalEdit").hide(200);
            $(".modal-backdrop").css({"position": "initial", "width": "0px"});
            
            
            $('#table_id').DataTable().ajax.reload();
            
        }if(ajax.fail){
        
            $.alert({
            title: 'Sorry!',
            content: 'Something was wrong!!!',
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
 
        
        }if(ajax.error){
        
            $.alert({
            title: 'Sorry!',
            content: 'Name and e-mail are required',
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


//FIN EDITAR Punto de acceso 

//ELIMINAR Punto de acceso  

$(document).on("click",".btnDelete",function(evento){
    evento.preventDefault();
    
        id = $(this).attr('data-id');
    
        $.confirm({
            title: 'Delete Access Point?',
            content: 'This action will be canceled in 6 seconds if you do not respond',
            autoClose: 'cancelAction|8000',
            type: 'red',
            buttons: {
                deletePoint: {
                    text: 'Delete Access Point',
                    action: function () {
                        
                    var token = $("meta[name='csrf-token']").attr("content");
                    
                    $.ajax({
                    
                        url: "../../puntoAccesoBorrar/"+id,
                        type: 'DELETE',
                        data: 
                        {
                            "id": id,
                            "_token": token,
                        },
                        
                    });
                        
                    $('#table_id').DataTable().ajax.reload();
                    
                    $.alert('Access point Delete!');
                    
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
  
 //FIN ELIMNAR punto de acceso

} );

