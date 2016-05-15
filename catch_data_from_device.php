<?php
include "dbconnection.php";

$boat_id=1000;
$latitude=34.9876;
$longitudes=8.9876;
$battery_state="56%";


$query_crt_tble =" CREATE TABLE IF NOT EXISTS `$boat_id` (
`boat_id` INT NOT NULL PRIMARY KEY,
    `latitude` VARCHAR(10) NOT NULL,
    `longitude` VARCHAR(10) NOT NULL,
    `battery_state` VARCHAR(10) NOT NULL
)";

$result=mysqli_query($connection,$query_crt_tble);

$query_data_insert= "INSERT INTO `$boat_id` (`boat_id`,`latitude`,`longitude`,`battery_state`) VALUES ('$boat_id','$latitude','$longitude','$battery_state')";

$result=mysqli_query($connection,$query_data_insert);


