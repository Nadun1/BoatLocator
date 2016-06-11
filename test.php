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



<!--include "final_create_jsonArray__journy_table.php";

$hello =new path_history();
$par1 = "TEST";
$par2 = "2016-06-4";
$data =  ($hello->history($par1,$par2));-->

<?php
$tbl="10001";
include "data_retrive_tmptable.inc";
$hello =new data_retrive_tmptable();
$data = $hello->get_data($tbl);
?>


//var_dump(json_decode($data));
//json(json_decode($data, true));
//echo($data);
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="final_path_genarate_from_temp_table.js"></script>
<script>

 var path = ('<?php echo $data; ?>') ;
 console.log(path);
 document.write(path);
 document.write(path[1].lat);
 genarate_current_path(path,"bad");



 // google.maps.event.addDomListener(window, 'load', mymap());
</script>


</body>
</html>