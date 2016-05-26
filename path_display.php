<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple Polylines</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #map {
            height: 80%;
        }
    </style>
</head>
<body>
<div id="map"></div>
<?php

include "data_retrive_tmptable.inc";
$hello =new data_retrive_tmptable();

?>

<script>
        var x ='<?php echo($hello->get_data());?>';//
        var xx = JSON.parse(x);
        console.log(xx);
    // This example creates a 2-pixel-wide red polyline showing the path of William
    // Kingsford Smith's first trans-Pacific flight between Oakland, CA, and
    // Brisbane, Australia.

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 5,
            center: {lat:8.728633,lng:79.146868},
            mapTypeId: google.maps.MapTypeId.TERRAIN
        });

        var flightPlanCoordinates = xx;
        var flightPath = new google.maps.Polyline({
            path: flightPlanCoordinates,
            geodesic: true,
            strokeColor: '#04B431',
            strokeOpacity: 1.0,
            strokeWeight: 2
        });
        flightPath.setMap(map);

        var te =1;
        if(te ==1) {
            for (var i = 0; i < xx.length; i++) {
                if(i==0 || i==xx.length-1) {
                    new google.maps.Marker({
                        map: map,

                        position: xx[i],
                        strokeWeight: 1,
                        strokeColor: '#000000',
                        title: "Point "
                    });
                }
            }
        }
    }

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?callback=initMap">
</script>
</body>
</html>