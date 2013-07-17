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
$purchaseprice = $_POST['Share_Price'];
$purchaseprice1 = (float) $purchaseprice;
$max = $_POST['Max'];
$max1 = (int) $max;
$shares1 = (int) $shares;
$con=mysql_connect("localhost","admin_1","gator123");
if (!$con){
	die('Unable to connect');
}
$price1 = (float) $price;
$shares1 = (int) $shares;
$money = ($price1 * $shares1);
$member = $_SESSION['user'];
$herp = mysql_query("SELECT Number_of_Shares FROM $member WHERE Symbol = '$symbol' AND Share_Price = $purchaseprice1");
$var2 = mysql_result($herp,0);
$sum = (int) $var2;
if ($max1 == $shares1) {
$one = mysql_query("DELETE FROM $member WHERE Company_Name = '$company' AND Share_Price = $purchaseprice1");
}
else {
$newtotal = $sum - $shares1;
$derp = mysql_query("UPDATE $member SET Number_of_Shares = $newtotal WHERE Company_Name = '$company' AND Share_Price = $purchaseprice1");
}
$one = mysql_query("SELECT Total_Value FROM $member WHERE Company_Name = 'Cash'");
$var2 = mysql_result($one,0);
$sum4 = (float) $var2;
$new1 = $sum4 + $money;
$buttz = mysql_query("UPDATE $member SET Total_Value = $new1 WHERE Company_Name = 'Cash'");
if (!buttz) {
	print mysql_error();
	die ("ERROR");
}
mysql_close($con); 
?>
<html>
<body>
<p> Thank you! Your stock has been successfully sold!</p>
<button type="button" onClick="location.href='home.php'">Click here to go to the Home Screen!</button>



<html>