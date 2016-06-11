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
$tbl="10002";
include "data_retrive_tmptable.inc";
$hello =new data_retrive_tmptable();
$data = $hello->get_data($tbl);
?>



<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="final_path_genarate_from_temp_table.js"></script>
<script>

    var path = ('<?php echo $data; ?>') ;

    genarate_current_path(path,"bad");


</script>


</body>
</html>