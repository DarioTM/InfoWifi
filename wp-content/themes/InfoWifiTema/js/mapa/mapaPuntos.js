
function iniciaMapa()
{
    //creo el mapa y lo cargo con una direccion por defecto
    var myLatlng = new google.maps.LatLng(37.16185,-3.591497);
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: myLatlng
    });
    
    //peticion ajax que me recoge todos los puntos de acceso
    $.ajax({
        url:'http://informatica.ieszaidinvergeles.org:9038/infowifi/puntosMapa',
        type: 'GET',
        dataType: 'json',
    }).done(function(ajax){
        
        var puntos = ajax.puntos;
        for (var i = 0 ; i < puntos.length; i++) 
        {
            //contenido que va a tener el cuadro infowindow
             var content = "<span>"+puntos[i].ubicacion+"</span>";
            //ventana que muestra la informacion del punto de acceso
            var infowindow = new google.maps.InfoWindow({
                content: content,
            });
            //creo una latitud y una longitud para cada mark
            myLatlng = new google.maps.LatLng(puntos[i].latitud,puntos[i].longitud);
            //creacion de la marca
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title:"Punto acceso",
                
            });
            //añado el evento click para que muestre un cuadro de dialogo
            google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
                return function() {
                    infowindow.setContent(content);
                    infowindow.open(map,marker);
                };
            })(marker,content,infowindow));
                    
        }
        
    })
    
}

