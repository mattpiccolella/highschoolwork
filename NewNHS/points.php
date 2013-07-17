<?php
session_start();
require("config.php");
$date = $_POST["date"];
$number = $_POST['number'];
$description = $_POST['description'];
$id = $_SESSION['id'];
$first = $_SESSION['first'];
$last = $_SESSION['last'];
$ter = 0;
$con=mysql_connect("localhost","admin_","gator123");
if (!$con) {
	die('Unable to Connect');
}

$mysql = "INSERT into points values ('$date','$number', '$description','$id','$first','$last','$ter')";
if (!mysql_query($mysql)) {
	print mysql_error();
	die('Error Connecting to Server');
}

mysql_close($con);

print("Thank you! Your points have been added successfully!");
?>

<html>
<body>
<br></br>
<button type="button" onClick="location.href='home.php'"> Click Here to Return to Previous Page </button>
</body>
</html>
