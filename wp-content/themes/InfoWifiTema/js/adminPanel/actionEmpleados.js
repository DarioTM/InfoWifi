
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
    
    $.ajax({
    url : "http://informatica.ieszaidinvergeles.org:9038/wordpress/wp-json/wp/v2/users/register",
    type : "POST",
    dataType: 'json',
    contentType: 'application/json',
    data :  JSON.stringify({
	            "username":$("#createForm input[name='name']").val(),
	            "email":$("#createForm input[name='email']").val(),
	            "password":$("#createForm input[name='password']").val(),
	
                }),
    
    });
            
    

    
    const createFo = new FormData(createForm);
    console.log(createFo);
    
    formAjax('http://informatica.ieszaidinvergeles.org:9038/wordpress/infowifi/api/auth/register', createFo, 'post', function (ajax) {
        
        if(ajax.success){
            
            $(".modalCreate").hide(200);
            $(".modal-backdrop").css({"position": "initial", "width": "0px"});
            
            
            $('#table_id').DataTable().ajax.reload();
            
        
            
            $.alert({
            title: '¡ Enhorabuena !',
            content: 'El Usuario se ha creado correctamente',
            type: 'green',
            typeAnimated: true,
            buttons: {
                close: {
                    text: 'Cerrar',
                    btnClass: 'btn-green',
                    action: function(){
                    }
                },

            }
            });
 
         
            
        }else{
        
            $.alert({
            title: '¡ Lo sentimos !',
            content: 'Parece que Skynet se ha colado en nuestro sistema',
            type: 'red',
            typeAnimated: true,
            buttons: {
                close: {
                    text: 'Cerrar',
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

$(document).on("click",".clickEdit",function(evento){
    evento.preventDefault();
    
    
    
    var formulario = $(this).attr('href');
    $.ajax({
        url: formulario,
        type: "GET",
        dataType: 'json',
        success:function(ajax){

        $('#editForm input[name="name"]').val(ajax.name);
        
        $('#editForm input[name="email"]').val(ajax.email);
        
        $('#editForm input[name="company"]').val(ajax.company);

        $('#editForm input[name="name"]').attr('data-id', ajax.id);
        


        },error:function(){
            alert("error");
        }
    });    
});
  
//FIN CONSEGUIR DATOS DEL USUARIO AL EDITARLO
  
  
//EDITAR USARIO  

let editForm = document.getElementById("editForm");
editForm.addEventListener("submit", function ( event ) {
    event.preventDefault();
    
    iduser = $('#editForm input[name="name"]').attr('data-id');
    
    const editFo = new FormData(editForm);
    console.log(editFo);
    
    formAjax('/api/empleadosEdit/'+iduser , editFo, 'post', function (ajax) {
        
        if(ajax.success){
            
            $('#table_id').DataTable().ajax.reload();
            
        }
        
    });  

});
  
  
//FIN EDITAR USUARIO  



//ELIMINAR USUARIO  

 
 $(document).on("click",".btnDestroyUsuario",function(evento){
    evento.preventDefault();
    
        id = $(this).attr('data-id');
    
        $.confirm({
            title: '¿Eliminar Usuario?',
            content: 'Esta acción se cancelara en 6 segundos si tu no respondes',
            autoClose: 'cancelAction|8000',
            type: 'red',
            buttons: {
                deleteUser: {
                    text: 'Eliminar Usuario',
                    action: function () {
                        
                    
                    $.ajax({
                    
                        url: "api/empleadosDestroy/"+id,
                        type: 'DELETE',
                        data: {
                            "id": id,
                        },
                    
                    });
                        
                    $('#table_id').DataTable().ajax.reload();
                    
                    $.alert('¡ Usuario Eliminado!');
                        
                    }
                },
                cancelAction:{
                    text: 'Cancelar',
                    action: function () {
                    $.alert('¡ Acción Cancelada !');
                }
                    
                }
            }
        });
  
});

  
 //FIN ELIMNAR UN USUARIO
 
 


   
} );
    
