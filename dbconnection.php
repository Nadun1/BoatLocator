<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'BoatLocator';
$connection = mysqli_connect($host,$user,$pass,$db);
if(! $connection )
{
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
//mysqli_close($conn);
?>