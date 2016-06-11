<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'BoatLocator';
$connection = new mysqli($host,$user,$pass,$db);

if($connection->connect_error )
{
    die('Could not connect: ' . mysqli_error());
}
else {
    echo 'Connected successfully';
}//mysqli_close($conn);
?>