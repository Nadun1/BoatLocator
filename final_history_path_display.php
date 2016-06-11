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
include "final_create_jsonArray__journy_table.inc";
$hello =new path_history();
$par1 = "TEST";
$par2 = "2016-06-4";
$data =  ($hello->history($par1,$par2));
?>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="final_path_genarate_from_journy_table.js"></script>
<script>

    var path = [];
    path = extract_LatLon(<?php echo $data; ?>);
    mymap(path,"bad");



   // google.maps.event.addDomListener(window, 'load', mymap());
</script>


</body>
</html>