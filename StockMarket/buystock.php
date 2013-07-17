<?php
require("configure.php");
session_start();
if (isset($_SESSION['inIt'])) {
}
else {
	header("location: index.php");
}
$company = $_POST['Company_Name'];
$symbol = $_POST['Symbol'];
$price = $_POST['Quote'];
$shares = $_POST['number'];
$con=mysql_connect("localhost","admin_1","gator123");
if (!$con){
	die('Unable to connect');
}
$cost = (float) $price * (int) $shares;
$member = $_SESSION['user'];
$mysql = "INSERT into $member values ('$company','$symbol', '$shares','$price','$cost')";
if (!mysql_query($mysql)) {
	print mysql_error();
	die ("Error Connecting to Server");
}
$one = mysql_query("SELECT Total_Value FROM $member WHERE Company_Name = 'Cash'");
$var2 = mysql_result($one,0);
$sum = (float) $var2;
$newtotal = $sum - $cost;
$derp = mysql_query("UPDATE $member SET Total_Value=$newtotal WHERE Company_Name = 'Cash'");
if (!derp) {
	print mysql_error();
	die ("ERROR");
}
mysql_close($con); 
?>
<html>
<body>
<p> Thank you! Your stock has been successfully purchased!</p>
<button type="button" onClick="location.href='home.php'">Click here to go to the Home Screen!</button>



<html>