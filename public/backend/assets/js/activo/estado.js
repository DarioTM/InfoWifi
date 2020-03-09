$(document).ready(function() {
//COMPROBAR EL ESTADO DEL CONTROL DE ACCESO

$.ajax({
    url: '../../admin/estado/',
    type: "GET",
    dataType: 'json',
    success:function(ajax){
        

        
        var fechaActual = new Date();
        var fechaInicial = new Date(ajax.estado['fechaInicial']+' '+ajax.estado['horainicial']);
        var fechaFinal = new Date(ajax.estado['fechaFinal']+' '+ajax.estado['horafinal']);
        
       
            
        if(fechaActual >= fechaInicial && fechaActual <= fechaFinal){
            
            $('.card-header button').remove();
            $('.estado button').remove();
            
            $('.card-header').append(`<button class="btn btn-danger btnStop"><i class="far fa-stop-circle"></i>&nbspStop all connections</button>`);
            $('.btnStop').css('margin-right','20px');
            
            $('.estado').append(`<button class="btn btn-success btnDisable">Enabled</button>`);
            $('.estado').css('margin','0px');
            $('.estado').css('margin-left','10px');
            
            $('.estadoNav').removeClass('btn-danger');
            $('.estadoNav').addClass('btn-success');
            
            $('.estadoNav a i').removeClass('fa-stop-circle');
            $('.estadoNav a i').addClass('fa-play-circle');
            
            $('.estadoNavPa').text('Connections Enableds');
            
        }else{
            
            $('.card-header button').remove();
            $('.estado button').remove();
            
            $('.card-header').append(`<button class="btn btn-success btnActivate"><i class="far fa-play-circle"></i>&nbspActivate all connections</button>`);
            $('.btnStop').css('margin-right','20px');
            
            $('.estado').append(`<button class="btn btn-danger btnDisable">Disabled</button>`);
            $('.estado').css('margin','0px');
            $('.estado').css('margin-left','10px');
            
            $('.estadoNav').removeClass('btn-success');
            $('.estadoNav').addClass('btn-danger');
            
            $('.estadoNav a i').removeClass('fa-play-circle');
            $('.estadoNav a i').addClass('fa-stop-circle');
            
            $('.estadoNavPa').text('Connections disableds');
            
        }   
        
            
        
    },error:function(){
    
        alert('ERROR');
    }
});    

//FIN COMPROBAR EL ESTADO DEL CONTROL DE ACCESO


            
function update_enable(){            
            
    $.ajax({
        url: '../../admin/estado/',
        type: "GET",
        dataType: 'json',
        success:function(ajax){
            
    
            
            var fechaActual = new Date();
            var fechaInicial = new Date(ajax.estado['fechaInicial']+' '+ajax.estado['horainicial']);
            var fechaFinal = new Date(ajax.estado['fechaFinal']+' '+ajax.estado['horafinal']);
            
           
                
            if(fechaActual >= fechaInicial && fechaActual <= fechaFinal){
                
                $('.card-header button').remove();
                $('.estado button').remove();
                
                $('.card-header').append(`<button class="btn btn-danger btnStop"><i class="far fa-stop-circle"></i>&nbspStop all connections</button>`);
                $('.btnStop').css('margin-right','20px');
                
                $('.estado').append(`<button class="btn btn-success btnDisable">Enabled</button>`);
                $('.estado').css('margin','0px');
                $('.estado').css('margin-left','10px');
                
                $('.estadoNav').removeClass('btn-danger');
                $('.estadoNav').addClass('btn-success');
                
                $('.estadoNav a i').removeClass('fa-stop-circle');
                $('.estadoNav a i').addClass('fa-play-circle');
                
                $('.estadoNavPa').text('Connections Enableds');
                
            }else{
                
                $('.card-header button').remove();
                $('.estado button').remove();
                
                $('.card-header').append(`<button class="btn btn-success btnActivate"><i class="far fa-play-circle"></i>&nbspActivate all connections</button>`);
                $('.btnStop').css('margin-right','20px');
                
                $('.estado').append(`<button class="btn btn-danger btnDisable">Disabled</button>`);
                $('.estado').css('margin','0px');
                $('.estado').css('margin-left','10px');
                
                $('.estadoNav').removeClass('btn-success');
                $('.estadoNav').addClass('btn-danger');
                
                $('.estadoNav a i').removeClass('fa-play-circle');
                $('.estadoNav a i').addClass('fa-stop-circle');
                
                $('.estadoNavPa').text('Connections disableds');
                
            }   
            
                
            
        },error:function(){
        
            alert('ERROR');
        }
    });

};

 
// CONSEGUIR DATOS PARA EDITAR

$(document).on("click",".btnEdit",function(evento){
    evento.preventDefault();
    

    $.ajax({
    url: '../../admin/estado/',
    type: "GET",
    dataType: 'json',
    success:function(ajax){
        

        $('#editForm input[name="fechaInicial"]').val(ajax.estado.fechaInicial);
        
        $('#editForm input[name="fechaFinal"]').val(ajax.estado.fechaFinal);
        
        $('#editForm input[name="horainicial"]').val(ajax.estado.horainicial);
        
        $('#editForm input[name="horafinal"]').val(ajax.estado.horafinal);
        
        $('#editForm input[name="periodominimo"]').val(ajax.estado.periodominimo);

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


// FIN CONSEGUIR DATOS PARA EDITAR
    
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


//EDITAR   

let editForm = document.getElementById("editForm");
editForm.addEventListener("submit", function ( event ) {
    event.preventDefault();

    const editFo = new FormData(editForm);

    formAjax('../../admin/updateActivo', editFo, 'post', function (ajax) {
        
        if(ajax.success){
            
            $(".modalEdit").hide(200);
            $(".modal-backdrop").css({"position": "initial", "width": "0px"});
            
            
            $('#table_id').DataTable().ajax.reload();
            
            $.alert({
            title: 'Congratulations!',
            content: 'The Control Access has been correctly updated',
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
            

          update_enable();              
                        
            
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


//FIN EDITAR 


//ACTIVAR TODAS LAS CONEXIONES 

$(document).on("click",".btnActivate",function(evento){
    event.preventDefault();
    
$.post( "../../admin/updateActivo", {
        'fechaInicial':'2020-01-01',
        'fechaFinal':'2020-12-31',
        'horainicial':'00:00:00',
        'horafinal':'23:59:59',
        'periodominimo':'00:00:10',
        
    }, null, "json" )
    
    .done(function() {
        
        $('#table_id').DataTable().ajax.reload();
        update_enable(); 
        
        $.alert({
            title: 'Congratulations!',
            content: 'Enabled Unlimited Connections',
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
        })
    })
    .fail(function() {
        
        $('#table_id').DataTable().ajax.reload();
        update_enable(); 
        
        $.alert({
            title: 'Sorry!',
            content: 'Error in the conexion',
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
    })



    
    
});



//FIN ACTIVAR TODAS LAS CONEXIONES   


//PARAR TODAS LAS CONEXIONES 

$(document).on("click",".btnStop",function(evento){
    event.preventDefault();
    
   $.post( "../../admin/updateActivo", {
        'fechaInicial':'2020-01-01',
        'fechaFinal':'2020-01-01',
        'horainicial':'00:00:00',
        'horafinal':'00:00:01',
        'periodominimo':'00:00:10',
        
    }, null, "json" )
    
    .done(function() {
        
        $('#table_id').DataTable().ajax.reload();
        update_enable(); 
        
        $.alert({
            title: 'Attention!',
            content: 'All connections have been stopped',
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
        })
    })
    .fail(function() {
        
        $('#table_id').DataTable().ajax.reload();
        update_enable(); 
        
        $.alert({
            title: 'Sorry!',
            content: 'Error in the conexion',
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
    })

 
    
    
    
});

//FIN PARAR TODAS LAS CONEXIONES 


});