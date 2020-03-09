$(document).ready(function() {
    
    
    
    
        $('#table_id').DataTable({
        stateSave: true,
        "bDestroy": true,
        "serverSide": true,
        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
        
    "ajax": {
        "type": "POST",
        "url": '../../admin/showPuntos',
        "contentType": 'application/json; charset=utf-8',
        'data': function (data) { return data = JSON.stringify(data); }
    },
    
    "columns":[
        {"data":'iduser'},
        {"data":'modelo'},
        {"data":'ubicacion'},
        {"data":'latitud'},
        {"data":'longitud'},
        {"data":'fechaAlta'},
        {"data":'btn'},

     ],
         
        //  "language": {
        //     "search": "Buscar: ",
        //     "lengthMenu": " Show  _MENU_  acces points.",
        //     "zeroRecords": "Nada encontrado - lo sentimos",
        //     "info": "Viendo pagina _PAGE_ de _PAGES_",
        //     "infoEmpty": "No hay registros disponibles.",
        //     "infoFiltered": "(filtrado de _MAX_ registros totales)",
            
        //     "paginate": {
        //     "previous":   "<",
        //     "next":       ">",

        //     },
        // },
       
         });
        
        
     $('.card-header').append(`<button class="btn btn-outline-primary btnAddUser" data-toggle="modal" data-target="#modalCreate" >Add Point Access</button>`);
    
     $('.btnAddUser').css('margin-right','20px');
} );
