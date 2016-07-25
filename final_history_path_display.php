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
        height: 100%;
    }
</style>
</head>
<body>

<br><br>
<div id="map"></div>


<?php
    include "final_create_jsonArray__journy_table.inc";
    $hello =new path_history();
    $par1 = "test1";
    $par2 = "2016-06-4";
    $data =  ($hello->history($par1,$par2));
?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2eBCG0HVHPpbpiuOzU2JVxB_tt85l9_c "></script>
<script src="final_path_genarate_from_journy_table.js"></script>
<script>

    var path = [];
    path = extract_LatLon(<?php echo $data; ?>);
    mymap(path,"bad");



    // google.maps.event.addDomListener(window, 'load', mymap());
</script>


</body>
</html>