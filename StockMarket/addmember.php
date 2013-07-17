<?php
require("config.php");
$id = $_POST["studentid"];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$gradelevel = $_POST['gradelevel'];
$con=mysql_connect("localhost","admin_","gator123");
$verify = verifyID($id);
if (!$verify) {
	die("We're sorry. The ID you have entered is not valid. Please try again to register.");
}
$first = getFirstName($id);
$last = getLastName($id);
$admin = getAdmin($id);
if (!$con){
	die('Unable to connect');
}
$mysql = "INSERT into members values ('$id','$first', '$last','$email','$username','$password','$gradelevel','$admin')";
if (!mysql_query($mysql)) {
	print mysql_error();
	die ("Error Connecting to Server");
}
mysql_close($con); 
?>
<html>
<body>
<p> Thank you! You have successfully registered! </p>
<button type="button" onClick="location.href='index.html'"> Click Here to Log In! </button>



<html>
