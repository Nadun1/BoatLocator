

//<script src="http://maps.googleapis.com/maps/api/js"></script>


// This example creates a 2-pixel-wide red polyline showing the path of William
// Kingsford Smith's first trans-Pacific flight between Oakland, CA, and
// Brisbane, Australia.

function genarate_current_path(path,state) {

    var google_path = JSON.parse(path); // convert path array to jason array

    if(state == "good"){
        var path_color = "#088A08";
    }
    else{
        var path_color = "#DF013A";
    }

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 7,
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
//google.maps.event.addDomListener(window, 'load', test());



