<?php
include "final_dbconnection.php";
/*below set of codes for catch the data which are send from the device
 * we can catch them using get or post as our wish.
 * below ones are set of test data
 */
$boat_id="10002";
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
$x=[7.906416,79.731430,7.977166,79.617673,7.167937,79.318779,7.343031,79.041727,7.746746,79.068689,7.993041,79.081207,8.289789,79.062936,8.478790,79.297072,8.278906,78.947171,8.633339,79.138738,8.728733,79.147878,8.374384,78.678391,8.127779,78.649914,7.870612,78.198867,7.403637,78.087997,7.863621,78.097234,6.973008,78.411339,6.977790,79.210467,7.229406,79.737044,7.604847,79.820189];


for($i=0;$i<39;$i+1){

    $y=intval($i)+1;
    echo $i."<br>";
    echo $y."<br>";

    $boat_idd=$boat_idd+1;
    $query_data_insert= "INSERT INTO `$boat_id` (`boat_id`,`latitude`,`longitude`,`battery_state`) VALUES ('$boat_idd','$x[$i]','$x[$y]',' $battery_state')";
    //$result = mysqli_query($connection,$query_data_insert);
    $connection->query($query_data_insert);
    $i=intval($y)+1;
}



