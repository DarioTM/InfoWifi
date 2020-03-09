
    var date= new Date();
    $('#fechaAlta').val(date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate());
    
    var map, myLatlnge, marker, geocoder;

    var ubicacion=$('#editForm #ubicacion');
    var latitud=$('#editForm #latitud');
    var longitud=$('#editForm #longitud');
    
   
    
    function initMap() 
    {
        
        myLatlnge = new google.maps.LatLng(latitud.val(),longitud.val());
        map = new google.maps.Map(document.getElementById('emap'), {
            zoom: 15,
            center: myLatlnge
        });


        
        geocoder = new google.maps.Geocoder();
        //pone la marca en un sitio ya definido
        localizacionLatLang(geocoder,myLatlnge);
        
        //creacion de la marca
        marker = new google.maps.Marker({
            position: myLatlnge,
            map: map,
            draggable: true,
            title:"Punto de Acceso"
          });
          
        //evento en el mapa de arrastrar
        google.maps.event.addListener(marker,'dragend',function (e){
              
              latitud.val(e.latLng.lat());
              longitud.val(e.latLng.lng());
              
              localizacionLatLang(geocoder,e.latLng);
            });
        //Asignacion de los eventos de actualizar al cambiar el foco    
        ubicacion.blur(function(){
            actualizar($(this).val(),null,null);
            
        });
        latitud.blur(function(){
             actualizar(null,$(this).val(),longitud.val());
        });
        longitud.blur(function(){
             actualizar(null,latitud.val(),$(this).val());
        });
    }
    
    //actualiza la direccion de la ubicacion atraves de la latitud o la longitud
    function localizacionLatLang(geocoder,myLatlng)
    {
          geocoder.geocode({'location': myLatlng}, function(results, status) 
          {
            if (status === 'OK') {
              ubicacion.val(results[0].formatted_address+'');
            } else {
              
            }
          });
    }
    //actualiza la LatLng atraves de la ubicacion escrita
    function localizacionDireccion(geocoder,location)
    {
         geocoder.geocode({'address': location}, function(results, status) 
         {
            if (status === 'OK') {
              latitud.val(results[0].geometry.location.lat());
              longitud.val(results[0].geometry.location.lng());
              return new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng());
            } else {
              
            }
          });
    }
    
    //funcion que mueve la marca y el mapa al punto
    function actualizar(ubi,lati,longi)
    {
        
        if(ubi !== null)
        {
            myLatlnge = localizacionDireccion(geocoder,ubi);
        }else{
            myLatlnge = new google.maps.LatLng(lati, longi);
            localizacionLatLang(geocoder,myLatlnge);
        }
        marker.setPosition(myLatlnge);
        map.setCenter(myLatlnge);
    }

    