<?php

    include "final_dbconnection.php";
    $sql = " SELECT * FROM `10001` ";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    $full_path = json_encode($emparray);
    echo $full_path;

    $sql2="INSERT INTO `journy` (`path_id`,`boat_id`,`full_path_details`,`started_location`,`end_location`,`error`) VALUES ('TEST','TEST','$full_path','111','111','no')";

        $result2 = mysqli_query($connection, $sql2);
if($result2){
    echo"good";
}
    /*if($connection->query($sql2)){
        echo "Successfull";
    }
    else
        echo "problem";
    */
    //close the db connection
    mysqli_close($connection);