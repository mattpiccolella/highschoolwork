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

function verifyID($id) {
	$id_numbers = array(/*Removed ID numbers for Privacy*/);
	for ($x = 0; $x < sizeof($id_numbers); $x++) {
		if ($id_numbers[$x] == $id) {
			return true;
		}
	}
	return false;
}
function getFirstName($id) {
	$firstname = array(
	/*Removed names of members for Privacy*/
	);
	$x = $firstname[$id];
	return $x;	
}

function getLastName($id) {
	$lastname = array(
	/*Removed names of members for Privacy*/
	);
	return $lastname[$id];
}
function getAdmin($id) {
	$admin = array(/*Removed numbers for Privacy */);
	for ($x = 0; $x < sizeof($admin); $x++) {
		if ($admin[$x] == $id) {
			return 1;
		}
	}
	return 0;
}
?>
<html>
<body>
<p> Thank you! You have successfully registered! </p>
<button type="button" onClick="location.href='index.html'"> Click Here to Log In! </button>
<html>