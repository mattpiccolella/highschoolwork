<?php
session_start();
require("config.php");
$date = $_POST["date"];
$title = $_POST['title'];
$description = $_POST['description'];
$id = $_SESSION['id'];
$con=mysql_connect("localhost","admin_","gator123");
if (!$con) {
	die('Unable to Connect');
}

$mysql = "INSERT into events values ('$title','$date', '$description')";
if (!mysql_query($mysql)) {
	print mysql_error();
	die('Error Connecting to Server');
}

mysql_close($con);

print("Thank you! Your event has been added successfully.");
?>

<html>
<body>
<br></br>
<button type="button" onClick="location.href='home.php'"> Click Here to Return to Previous Page </button>
</body>
</html>
