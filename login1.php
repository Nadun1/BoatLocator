/**
* Created by PhpStorm.
* User: Nadun
* Date: 7/30/2016
*/
<?php
session_start(); // Starting Session

// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "" , "boattracker");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
// Selecting Database

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"SELECT * FROM user where password='$password' AND user_name ='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session

//header("location: maps-vector.html"); // Redirecting To Other Page

//select user
$query1 = mysqli_query($connection,"SELECT user_type FROM user where password='$password' AND user_name ='$username'");
$result=mysqli_fetch_assoc($query1);
$result1= implode(",", $result);
if(strcmp($result1 , "ADOfficer") == 0){
	echo 'ADOfficer';
}else{
	echo "Other";    
}

}
else {

//header("Location: maps-vector.html");

echo "Either Username or Password is invalid"; 
}
mysqli_close($connection); // Closing Connection

?>