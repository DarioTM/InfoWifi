$(document).ready(function() {
    
    
        $('#table_id').DataTable({
        stateSave: true,
        "bDestroy": true,
        "serverSide": true,
        "lengthMenu": false,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false,
        
    "ajax": {
        "type": "POST",
        "url": '../../admin/showActivo',
        "contentType": 'application/json; charset=utf-8',
        'data': function (data) { return data = JSON.stringify(data); }
    },
    

    "columns":[
        {"data":'fechaInicial'},
        {"data":'fechaFinal'},
        {"data":'horainicial'},
        {"data":'horafinal'},
        {"data":'periodominimo'},

     ],
         
         "language": {
            // "search": "Buscar: ",
            // "lengthMenu": " Mostrar  _MENU_  usuarios.",
            // "zeroRecords": "Nada encontrado - lo sentimos",
            // "info": "Viendo pagina _PAGE_ de _PAGES_",
            // "infoEmpty": "No hay registros disponibles.",
            // "infoFiltered": "(filtrado de _MAX_ registros totales)",
            
            "paginate": {
            "previous":   "<",
            "next":       ">",

            },
        },
         
       
        });
        
        

    $('.card-body').append(`<button class="btn btnEdit" data-toggle="modal" data-target="#modalEdit" style="margin-top:20px; position:absolute; outline:none!important; top:-15px; right:15px; color: #1ea8d2;"><i class="far fa-edit"></i></button>`);

    
    

setInterval(function(){
    var d = new Date();
    $('#hora').text(d.getHours()+':'+d.getMinutes()+':'+d.getSeconds());
    $('#fecha').text(d.getDate()+'-'+[d.getMonth()+1]+'-'+d.getFullYear());
}, 1000);



    
} );