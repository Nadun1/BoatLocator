<?php
include "dbconnection.php";
/*below set of codes for catch the data which are send from the device
 * we can catch them using get or post as our wish.
 * below ones are set of test data
 */
$boat_id="10008";
$boat_idd="10084";
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
$query_data_insert= "INSERT INTO `$boat_id` (`boat_id`,`latitude`,`longitude`,`battery_state`) VALUES ('$boat_idd','$latitude','$longitude','$battery_state')";

if($connection->query($query_data_insert)=== TRUE){
    echo "successfully inserted data";
}



