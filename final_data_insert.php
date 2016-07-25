<?php
include "final_dbconnection.php";
/*below set of codes for catch the data which are send from the device
 * we can catch them using get or post as our wish.
 * below ones are set of test data
 */
$boat_id="10005";
$boat_idd="1";
$latitude=-33.89192167947346;
$longitude=161.13704078767104;
$battery_state="67%";

/* insert the data set into the database. if there is temp data with the name of perticular
 boat we insert that data normally
 * if there is no table with that name we create it and insert the data.
 */

$query_crt_tble ="CREATE TABLE IF NOT EXISTS `$boat_id` (
boat_id INT NOT NULL PRIMARY KEY,
    latitude VARCHAR(10) NOT NULL,
    longitude VARCHAR(10) NOT NULL,
    battery_state VARCHAR(10) NOT NULL
)";

if($connection ->query($query_crt_tble)=== TRUE){
    echo "Table create successfully";
}
//$x=[7.906416,79.731430,7.977166,79.617673,7.167937,79.318779,7.343031,79.041727,7.746746,79.068689,7.993041,79.081207,8.289789,79.062936,8.478790,79.297072,8.278906,78.947171,8.633339,79.138738,8.728733,79.147878,8.374384,78.678391,8.127779,78.649914,7.870612,78.198867,7.403637,78.087997,7.863621,78.097234,6.973008,78.411339,6.977790,79.210467,7.229406,79.737044,7.604847,79.820189];
//$x=[8.471720,81.212705,8.486232,81.232239,8.518829,81.235672,8.537842,81.255585,8.582656,81.261764,8.623391,81.276184,8.679055,81.283737,8.740050,81.240403,8.807032,81.234687,8.874808,81.219989,8.922471,81.209671,8.964199,81.258225,8.996810,81.289299,9.052434,81.286385,9.044763,81.361157,8.985780,81.381064,8.931105,81.364556,8.862989,81.340279,8.791501,81.302894,8.735837,81.256282,8.641765,81.283472,8.527503,81.309205];
$x=[6.060741,80.947113,5.656371,80.507660,5.617604,80.491180,4.933387,80.406901,4.896569,80.748720,4.749279,81.187542,5.085238,81.201400,5.370435,80.947345,5.457808,81.298403,5.545168,80.873438,5.894478,80.600906];
for($i=0;$i<20;$i+1){

    $y=intval($i)+1;
    echo $i."<br>";
    echo $y."<br>";

    $boat_idd=$boat_idd+1;
    $query_data_insert= "INSERT INTO `$boat_id` (`boat_id`,`latitude`,`longitude`,`battery_state`) VALUES ('$boat_idd','$x[$i]','$x[$y]',' $battery_state')";
    //$result = mysqli_query($connection,$query_data_insert);
    $connection->query($query_data_insert);
    $i=intval($y)+1;
}



