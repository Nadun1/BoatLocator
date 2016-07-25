

<?php

include "final_dbconnection.php";

    //fetch table rows from mysql db
    $sql = " SELECT * FROM `10004` ";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

//create an array
$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}
$rr=json_encode($emparray);

//close the db connection




$query_data_insert= "INSERT INTO `journy` (`path_id`,`boat_id`,`full_path_details`,`started_location`,`end_location`,`started_date`,`end_date`,`error`) VALUES ('test1','test1','$rr','425','452','2016-06-04','2016-06-04','no')";
$result = mysqli_query($connection,$query_data_insert);
//$connection->query($query_data_insert);
echo "ok";
mysqli_close($connection);
?>