<?php?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Polygon arrays</title>
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
<script>
    // This example requires the Geometry library. Include the libraries=geometry
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=geometry">

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 24.886, lng: -70.269},
            zoom: 5,
        });

        var triangleCoords = [
            {lat: 25.774, lng: -80.19},
            {lat: 18.466, lng: -66.118},
            {lat: 32.321, lng: -64.757}
        ];

        var flightPath = new google.maps.Polygon({
            path: triangleCoords,
            geodesic: true,
            strokeColor: '#04B431',
            strokeOpacity: 1.0,
            strokeWeight: 2
        });
        flightPath.setMap(map);

        var bermudaTriangle = new google.maps.Polygon({paths: triangleCoords});
        var lat =32.321;
        var lng =-64.757;
        var pos =new google.maps.LatLng(lat,lng);


                google.maps.geometry.poly.containsLocation(pos, bermudaTriangle) ?
                    alert('red') :
                    alert('green');


            //console.log(google.maps.geometry.poly.containsLocation(e.latLng, bermudaTriangle));
            new google.maps.Marker({
                position: pos,
                map: map,
                icon: {
                    path: google.maps.SymbolPath.CIRCLE,
                    fillColor: 'ffffff',
                    fillOpacity: .2,
                    strokeColor: 'white',
                    strokeWeight: .5,
                    scale: 30
                }
            });

    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?libraries=geometry&callback=initMap">
</script>
</body>
</html>