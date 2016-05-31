<?php
include "dbconnection.php";
/*below set of codes for catch the data which are send from the device
 * we can catch them using get or post as our wish.
 * below ones are set of test data
 */
$boat_id="10002";
$boat_idd="1";
$latitude=-33.89192157947345;
$longitude=151.13604068756104;
$battery_state="56%";

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
$x=[6.905415,79.731430,6.967155,79.516573,7.157937,79.318679,7.343031,79.041627,7.645745,79.058589,7.993041,79.081206,8.289689,79.052935,8.468690,79.296062,8.268905,78.946161,8.533339,79.138638,8.728633,79.146868,8.364384,78.568391,8.126669,78.549914,7.870512,78.198856,7.403536,78.087996,6.853521,78.097234,5.963008,78.411339,5.976790,79.210457,6.229405,79.737044,6.504846,79.820189];


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



