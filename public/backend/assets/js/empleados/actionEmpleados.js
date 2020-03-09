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

//CREACION USUARIO  
  
    let createForm = document.getElementById("createForm");
    createForm.addEventListener("submit", function ( event ) {
    event.preventDefault();
    const createFo = new FormData(createForm);
    
    formAjax('../../createEmpleados', createFo, 'post', function (ajax) {
        
        if(ajax.success){
            
            $(".modalCreate").hide(200);
            $(".modal-backdrop").css({"position": "initial", "width": "0px"});
            
            
            $('#table_id').DataTable().ajax.reload();
            
            $.alert({
            title: 'Congratulations!',
            content: 'The Access Point has been created successfully',
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
            content: 'Can´t insert the Acces Point' ,
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
  
  
//FIN CREACION USUARIO 


// CONSEGUIR DATOS DEL USUARIO AL EDITARLO

$(document).on("click",".btnEdit",function(evento){
    evento.preventDefault();
    

    $.ajax({
        url: '../../showEmple/' + $(this).attr('data-id'),
        type: "GET",
        dataType: 'json',
        success:function(ajax){

        $('#editForm input[name="name"]').val(ajax.name);
        
        $('#editForm input[name="email"]').val(ajax.email);
        
        $('#editForm button[type="submit"]').attr('data-id', ajax.id);

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

//EDITAR USARIO  

let editForm = document.getElementById("editForm");
editForm.addEventListener("submit", function ( event ) {
    event.preventDefault();
    
    iduser = $('#editForm button[type="submit"]').attr('data-id');

    
    const editFo = new FormData(editForm);
    console.log(editFo);
    
    formAjax('../../showEmple/' + iduser, editFo, 'post', function (ajax) {
        
        if(ajax.success){
            
            $(".modalEdit").hide(200);
            $(".modal-backdrop").css({"position": "initial", "width": "0px"});
            
            
            $('#table_id').DataTable().ajax.reload();
            
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


//FIN EDITAR USUARIO 

//ELIMINAR USUARIO  

$(document).on("click",".btnDelete",function(evento){
    evento.preventDefault();
    
        id = $(this).attr('data-id');
    
        $.confirm({
            title: 'Delete User?',
            content: 'This action will be canceled in 6 seconds if you do not respond',
            autoClose: 'cancelAction|8000',
            type: 'red',
            buttons: {
                deleteUser: {
                    text: 'Delete Employee',
                    action: function () {
                        
                    var token = $("meta[name='csrf-token']").attr("content");
                    
                    $.ajax({
                    
                        url: "../../EmpleadosDestroy/"+id,
                        type: 'DELETE',
                        data: {
                        "id": id,
                        "_token": token,
                        },
                        
                    });
                        
                    $('#table_id').DataTable().ajax.reload();
                    
                    $.alert('Employee Delete!');
                        
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

