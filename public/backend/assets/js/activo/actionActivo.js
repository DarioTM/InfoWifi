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
            
            $('.estadoNav').removeClass('btn-danger');
            $('.estadoNav').addClass('btn-success');
            
            $('.estadoNav a i').removeClass('fa-stop-circle');
            $('.estadoNav a i').addClass('fa-play-circle');
            
            $('.estadoNavPa').text('Connections Enableds');
            
        }else{
            
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

});