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
	$id_numbers = array("13055007","13000057","13055005","13000006","13055078","2215","13000123","13000027","13000030","13000045"
	,"13055117","13000094","13055150","13055029","13000089","13055030","13055031","13000052","13055093","13055068","13055036",			"13055040","13055039","13055047","13055049","13055069","1","2");
	for ($x = 0; $x < sizeof($id_numbers); $x++) {
		if ($id_numbers[$x] == $id) {
			return true;
		}
	}
	return false;
}
function getFirstName($id) {
	$firstname = array(
	"13055007"   => "Cory",
	"13000057"   => "Anthony",
	"13055005"	 => "Claudia",
	"13000006"	 => "Sydney",
	"13055078"	 => "RJ",
	"2215"		 => "Brian",
	"13000123"	 => "Nicholas",
	"13000027"	 => "Ryan",
	"13000030"	 => "Amy",
	"13000045"	 => "Amy",
	"13055117"	 => "Nicole",
	"13000094"	 => "Chris",
	"13055150"	 => "Jess",
	"13055029"	 => "Andre",
	"13000089"	 => "Abigail",
	"13055030"	 => "Andrew",
	"13055031"	 => "Allison",
	"13000052"	 => "Erica",
	"13055093"	 => "Sarah",
	"13055068"	 => "Matthew",
	"13055036"	 => "Dana",
	"13055040"	 => "Jennifer",
	"13055039"	 => "Carly",
	"13055047"	 => "Carly",
	"13055049"	 => "Kurt",
	"13055069"	 => "Matthew",
	"1" => "Mr.",
	"2" => "Ms.",
	);
	$x = $firstname[$id];
	return $x;	
}

function getLastName($id) {
	$lastname = array(
	"13055007"   => "Brzycki",
	"13000057"   => "Perello",
	"13055005"	 => "Bennett",
	"13000006"	 => "Brannick",
	"13055078"	 => "Curcio",
	"2215"		 => "Cuthbert",
	"13000123"	 => "Fecci",
	"13000027"	 => "Gerrity",
	"13000030"	 => "Hochheiser",
	"13000045"	 => "Liantonio",
	"13055117"	 => "Luis",
	"13000094"	 => "Lyons",
	"13055150"	 => "Macchi",
	"13055029"	 => "Menzel",
	"13000089"	 => "Miller",
	"13055030"	 => "Moore",
	"13055031"	 => "Moran",
	"13000052"	 => "Mullen",
	"13055093"	 => "Mulvaney",
	"13055068"	 => "Peled",
	"13055036"	 => "Petrillo",
	"13055040"	 => "Rice",
	"13055039"	 => "Riehl",
	"13055047"	 => "Roncin",
	"13055049"	 => "Benschoten",
	"13055069"	 => "Piccolella",
	"1" => "Gattuso",
	"2" => "Joyce",
	);
	return $lastname[$id];
}
function getAdmin($id) {
	$admin = array("13000057","13055078","1","2");
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