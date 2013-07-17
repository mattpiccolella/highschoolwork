<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Edited Current Site Template to add style to it and did some rearranging, let me konw what you guys think : Anthony-->
<head><link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Points</title>
<link href="homestyle.css" rel="stylesheet" />
</head>
<?php 
session_start();
if (isset($_SESSION['inIt'])) {
}
else {
	header("location: members.html");
}
?>
<script type="text/javascript">
function validateForm1(myForm) {
	var x;
	x=1;
	if (myForm.date.value == "") {
	alert("Please enter the date.");
	myForm.date.focus();
	x=0;
	return false;
	}
	if (myForm.number.value == "") {
	alert("Please enter the number of points.");
	myForm.number.focus();
	x=0;
	return false;
	}
	if (myForm.description.value == "") {
	alert("Please enter a valid description.");
	myForm.description.focus();
	x=0;
	return false;
	}

	return true;
	
}
function validateForm2(myForm) {
	var x;
	x=1;
	if (myForm.date.value == "") {
	alert("Please enter the date.");
	myForm.date.focus();
	x=0;
	return false;
	}
	if (myForm.title.value == "") {
	alert("Please enter the number of points.");
	myForm.number.focus();
	x=0;
	return false;
	}
	if (myForm.description.value == "") {
	alert("Please enter a valid description.");
	myForm.description.focus();
	x=0;
	return false;
	}

	return true;
	
}
		
</script>
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
	<p><button type="button" onclick="location.href='addpoints.php'" style="background-color:transparent;">
	<?php if ($_SESSION['admin']==1) : ?> Manage Points <?php else : ?> Add Points <?php endif; ?> </button></p>
	<p><button type="button" onclick="location.href='currentpoints.php'" style="background-color:transparent;"> View Points </button></p>
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
		<?php if ($_SESSION['admin'] == 0) : ?>
		<h3>Add Points to your Account</h3>
		<form onSubmit="return validateForm1(webForm);" name="webForm" method="post" action="points.php">
		<input type='hidden' name='submitted' id='submitted' value='1'/>
		<label for='date' >Date (M-D-Y)*:</label>
		<input type='text' name='date' id='date' maxlength="50" />
		<br> </br>
		<label for='number' >Number of Points*:</label>
		<input type='text' name='number' id='number' maxlength="50" />
		<p>Description*:</p>
		<TEXTAREA NAME='description' ROWS=5 COLS=30> </TEXTAREA>
		<br></br>
		<input type='submit' name='Submit' value='Submit'/>
		<br></br>
        </form>
        
        <?php else : ?>
        <h3>Add Points to your Account</h3>
        <form onSubmit="return validateForm1(webForm);" name="webForm" method="post" action="points.php">
		<input type='hidden' name='submitted' id='submitted' value='1'/>
		<label for='date' >Date (M-D-Y)*:</label>
		<input type='text' name='date' id='date' maxlength="50" />
		<br> </br>
		<label for='number' >Number of Points*:</label>
		<input type='text' name='number' id='number' maxlength="50" />
		<p>Description*:</p>
		<TEXTAREA NAME='description' ROWS=5 COLS=30> </TEXTAREA>
		<br></br>
		<input type='submit' name='Submit' value='Submit'/>
        </form>
        
        <h3>Add an Event</h3>
        <form onSubmit="return validateForm2(webForm);" name="webForm" method="post" action="addevent.php">
		<input type='hidden' name='submitted' id='submitted' value='1'/>
		<label for='title' >Name of the Event*:</label>
		<input type='text' name='title' id='title' maxlength="50" />
		<br> </br>
		<label for='date' >Date (M-D-Y)*:</label>
		<input type='text' name='date' id='date' maxlength="50" />
		<p>Description*:</p>
		<TEXTAREA NAME='description' ROWS=5 COLS=30> </TEXTAREA>
		<br></br>
		<input type='submit' name='Submit' value='Submit'/>
        </form>
        
        <h3>Approve Points</h3>
        <?php endif; ?>
        
        <?php 
        if ($_SESSION['admin'] == 1) { 
        $id = $_SESSION['id'];
        require("config.php");
		$date = $_POST["date"];
		$number = $_POST['number'];
		$description = $_POST['description'];
		$id = $_SESSION['id'];
		$first = $_SESSION['first'];
		$last = $_SESSION['last'];
		$ter = 0;
		$con=mysql_connect("localhost","admin_","gator123");
        $z = 0;
		$sql = "SELECT date FROM points WHERE approved = '$z'"; 
		$sql1 = "SELECT points FROM points WHERE approved = '$z'";
		$sql2 = "SELECT description FROM points WHERE approved = '$z'";
		$sql3 = "SELECT first FROM points WHERE approved = '$z'";
		$sql4 = "SELECT last FROM points WHERE approved = '$z'";
		$res = mysql_query($sql);
		$res1 = mysql_query($sql1);
		$res2 = mysql_query($sql2);
		$res3 = mysql_query($sql3);
		$res4 = mysql_query($sql4);
		$her = mysql_result($res,0);
		for ($x = 0; $x < mysql_num_rows($res); $x = $x + 1) {
		$herp = mysql_result($res,$x);
		$derp = mysql_result($res1,$x);
		$merp = mysql_result($res2,$x);
		$ferp = mysql_result($res3,$x);
		$yerp = mysql_result($res4,$x);
		echo ("<form method='post' name='approve'>");
		echo ("<b>Name: </b>" . $ferp . " " . $yerp . "<br>");
		echo ("<b>Date: </b>" . $herp . "<br>");
		echo ("<b>Number of Points: </b>" . $derp . "<br>");
		echo ("<b>Description: </b>" . $merp);
		echo ("<input type='submit' name='Approve' value='Approve'>");
		echo ("     ");
		echo ("<input type='submit' name='Reject' value='Reject'>");
		echo ("<br> </br>");
		}
		if (mysql_num_rows($res) < 1) {
			echo "There are currently no points that need approval";
		}
		}
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
