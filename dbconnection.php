<?php
$dbhost = 'localhost:3036';
$dbuser = 'guest';
$dbpass = 'guest123';
$db = 'BoatLocator';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if(! $conn )
{
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($conn);
?>