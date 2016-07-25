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
<?php
include "data_retrive_tmptable.inc";
$hello =new data_retrive_tmptable();
if(isset($_POST['submit'])) {
    $tbl = $_POST['tmp_table'];
    $data = $hello->get_data($tbl);
}
else{
    $data = null;
}
?>

<form action="#" method="post">
    <label>Select Boat - </label>
    <select name = "tmp_table">
        <option value="null">null</option>
        <option value="10001">10001</option>
        <option value="10002">10002</option>
        <option value="10004">10004</option>
        <option value="10005">10005</option>

    </select>

    <input type="submit" name="submit" value="Show Path" />
</form>



<br><br>

<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2eBCG0HVHPpbpiuOzU2JVxB_tt85l9_c "></script>
<script src="final_path_genarate_from_temp_table.js"></script>


<script>

    var path = ('<?php echo $data; ?>') ;

    genarate_current_path(path,"bad");


</script>


</body>

</html>