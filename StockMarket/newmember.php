<?php
require("configure.php");
$first = $_POST['first'];
$last = $_POST['last'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$con=mysql_connect("localhost","admin_1","gator123");
if (!$con){
	die('Unable to connect');
}
$mysql = "INSERT into members values ('$username','$password', '$first','$last','$email')";
$mysql1 = "INSERT into leaderboard values ('$first','$last','$username',100000)";
$hold1 = mysql_query($mysql1);
$herp = mysql_query("CREATE TABLE $username (Company_Name VARCHAR(30),Symbol VARCHAR(30), Number_of_Shares INT, Share_Price DOUBLE, Total_Value DOUBLE)");
if (!mysql_query($mysql)) {
	print mysql_error();
	die ("Error Connecting to Server");
}
if (!herp) {
	print mysql_error();
	die ("ERROR");
}
$derp = mysql_query("INSERT into $username values ('Cash','','','','100000')");
if (!derp) {
	print mysql_error();
	die ("ERROR");
}
mysql_close($con); 
?>
<html>
<body>
<p> Thank you! You have successfully registered! </p>
<button type="button" onClick="location.href='index.php'"> Click Here to Log In! </button>



<html>