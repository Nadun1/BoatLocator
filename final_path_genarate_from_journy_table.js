//<script src="http://maps.googleapis.com/maps/api/js"></script>

function extract_LatLon(json_array){

    var path = [];
    var item={};
    var size = (json_array.length);

    for(i=0;i<size;i++) {
        var item = json_array[i];
        path.push({
            "lat" : parseFloat(item.latitude),
            "lon" : parseFloat(item.longitude)
        });


    }
    return path ;
}

    function mymap(path,state) {
        var google_path = [];
        /*
        path - path eka display karanna one JSON array eka
        state - path eke error ekak tiynwada nadda kiyana eka.
                error ekak tiynwa nam path eka red color, natnam green color,

         path kiyana json array eka goole maps walata inport karata wada karanne na.
         so ekata hariyana widiyata LatLan object tiyena array ekak widiyata path kiyana
         array eka convert kara gatta
         */

        if(state == "good"){
            var path_color = "#088A08";
        }
        else{
            var path_color = "#DF013A";
        }

        for(i=0;i<path.length;i++) {
            var pointt = new google.maps.LatLng(path[i].lat,path[i].lon);
            google_path.push(pointt);
        }

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 20,
            center:google_path[1],//new google.maps.LatLng(lat, lng),//{lat:8.728633,lng:79.146868}, //pointt,
            mapTypeId: google.maps.MapTypeId.MAP
        });

        var path_display = new google.maps.Polyline({
            path: google_path,
            geodesic: true,
            strokeColor:path_color,
            strokeOpacity: 1.0,
            strokeWeight: 2
        });

        var kmlLayer = new google.maps.KmlLayer();
        //var kmlUrl = 'https://sites.google.com/site/boatlocator1234/xyz-kml/regions_new.kml';
        //var kmlUrl ='https://sites.google.com/site/boatlocator1234/xyz-kml/Maritime_boundaries_v3.kml';
        var kmlUrl ='https://sites.google.com/site/boatlocator1234/xyz-kml/new2.kml';
        var kmlOptions = {
            suppressInfoWindows: true,
            preserveViewport: false,
            map:map
        };

        var kmlLayer = new google.maps.KmlLayer(kmlUrl, kmlOptions);
        path_display.setMap(map);

        for (var i = 0; i < google_path.length; i++) {
         /*   if(i==0 || i==google_path.length -1) {
                new google.maps.Marker({
                    map: map,
                    position: google_path[i],
                    strokeWeight: 1,
                    strokeColor: '#000000',
                    title: "Point "
                });
            }*/
            if(i==0 || i==google_path.length -1) {
                var strokeColor = "#0101DF";
                var fillOpacity = 1;
            }
            else{
                var strokeColor = "#ffffff";
                var fillOpacity = 0.3;
            }
            new google.maps.Marker({
                position: google_path[i],
                map: map,
                icon: {
                    path: google.maps.SymbolPath.CIRCLE,
                    fillColor:strokeColor,
                    fillOpacity: fillOpacity,
                    strokeColor: 'white',
                    strokeWeight: .5,
                    scale: 5
                }
            });
        }

    }

/*
 json array eka dunnama lat and lon tika witharak aran array json array ekak hadnwa

 */



   // google.maps.event.addDomListener(window, 'load', function(){mymap(path,'bad');});


