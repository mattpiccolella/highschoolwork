<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
session_start();
if (isset($_SESSION['inIt'])) {
	}
else {
		header("location: index.html");
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Edited Current Site Template to add style to it and did some rearranging, let me konw what you guys think : Anthony-->
<head><link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Current Points</title>
<link href="homestyle.css" rel="stylesheet" />
</head>

<body>
<div id="header">
<h1> <a href="home.php"> <img src="nhslogo.png" class="logo" /></a></h1>
</div>
<div class="container">
<div id="navtab">
<h2> Navigation </h2>
	<p><button type="button" onclick="location.href='about.php'" style="background-color:transparent;"> About NHS </button></p>
    <p><button type="button" onclick="location.href='events.php'" style="background-color:transparent;"> Events </button></p>
    <p><button type="button" onclick="location.href='become.php'" style="background-color:transparent;"> Becoming an Officer</button></p>
    <p><button type="button" onclick="location.href='officers.php'" style="background-color:transparent;"> Officers </button></p>
    <p><button type="button" onclick="location.href='members.php'" style="background-color:transparent;"> Members </button></p>
	<p><button type="button" onclick="location.href='addpoints.php'" style="background-color:transparent;"> <?php if ($_SESSION['admin']==1) : ?> Manage Points <?php else : ?> Add Points <?php endif; ?> </button></p>
	<p><button type="button" onclick="location.href='currentpoints.php'" style="background-color:transparent;"> View Points</button></p>
</div>
<div id="login1">
<form  action='login.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Your Account</legend>
<p> <b>Username:  </b> <?php echo($_SESSION['user']); ?> </p>
<p> <b>Student ID: </b> <?php echo($_SESSION['id']); ?> </p>
<input type='button' name='Log Out' value='Log-Out' onclick="location.href='logout.php'"/>
<input type='button' name='Change Password' value='Change Password' onclick="location.href='forgotpassword.php'"/>
</fieldset>
</form>
</div>
<div id="upevents">
	<h2> Upcoming Events </h2>
		<?php 
		require("config.php");
		$con=mysql_connect("localhost","admin_","gator123");
		$sql = "SELECT date FROM events"; 
		$sql1 = "SELECT name FROM events";
		$sql2 = "SELECT description FROM events";
		$sql3 = "SELECT * FROM events";
		$res = mysql_query($sql);
		$res1 = mysql_query($sql1);
		$res2 = mysql_query($sql2);
		$res3 = mysql_query($sql3);
		for ($x = 0; $x < mysql_num_rows($res3); $x = $x + 1) {
		$herp = mysql_result($res,$x);
		$derp = mysql_result($res1,$x);
		$merp = mysql_result($res2,$x);
		echo ("<b style='padding:5px'>" . $derp . "</b> <br>");
		echo ("<b style='padding:5px'>Date: </b>" . $herp . "<br>");
		echo ("<br>");
		}
?>
</div>
	<div id="maincontent">
		<h3>Current Points</h3>
		<?php
		$conf['server'] = 'localhost'; //the db resied on the local host -- the server we are using....
	$conf['db'] = 'NHS'; //add the nhs database name here
	$conf['user'] = 'admin_'; //add the nhs db admin login here admin_
	$conf['pass'] = 'gator123'; //add the nhs password here - gator123
	$dbh = mysql_connect($conf['server'],$conf['user'],$conf['pass']);
	if (!$dbh) {
    	die('Not connected : ' . mysql_error()); //can not connect -- error message back to browser and leave php 
	}
	$db=mysql_select_db($conf['db'],$dbh);
	if (!$db) {
    	die ('Can\'t use pnp : ' . mysql_error()); //can not select -- dbh is the handle from above -- error message back to browser and leave php 
	}
	$id = $_SESSION['id'];
	$sql = "SELECT date FROM points WHERE id = '$id' AND approved = '1'"; 
	$sql1 = "SELECT points FROM points WHERE id ='$id' AND approved = '1'";
	$sql2 = "SELECT description FROM points WHERE id ='$id' AND approved = '1'";
	$res = mysql_query($sql);
	$res1 = mysql_query($sql1);
	$res2 = mysql_query($sql2);
	if (mysql_num_rows($res) > 0) {
		$_SESSION['herp'] = "yes";
	}
	else {
		$_SESSION['herp'] = "Sorry. You have not yet earned any points.";
	}
	$y = 0;
	for ($x = 0; $x < mysql_num_rows($res); $x = $x + 1) {
	$herp = mysql_result($res,$x);
	$derp = mysql_result($res1,$x);
	$merp = mysql_result($res2,$x);
	$y = $y + $derp;
	echo ("<b>Date: </b>" . $herp . "<br>");
	echo ("<b>Number of Points: </b>" . $derp . "<br>");
	echo ("<b>Description: </b>" . $merp);
	echo ("<br> </br>");
	}
	echo ("<b>Total Number of Points: </b>" . $y. "<br>");
	
	if ($y >= 30) {
	echo("<b>Remaining Points Required: </b>" . "0");
	}
	else {
		$z = (30-$y);
		echo("<b>Remaining Points Required: </b>" . $z);
	} 
	echo"<br></br>";
	?>
</div>
    
</div>
<div id="footer">
    	<h4>National Honor Society Information</h4>
        <ul>
        	<li style="align:center">Officers: Matthew Piccolella President, Nick Fecci Vice President, RJ Curcio Secretary, Allison  Moran Treasurer</li>
            <li style="align:center">Advisers: Mr. Gattuso, Mrs. Joyce</li>
            <li style="align:center">Webmasters: Cory Brzycki, Anthony Perello, Matthew Piccolella</li>
        </ul>
</div>
</body>

</html>
