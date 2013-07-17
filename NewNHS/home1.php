<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Edited Current Site Template to add style to it and did some rearranging, let me konw what you guys think : Anthony-->
<head><link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Point Pleasant Borough National Honor Society</title>
<link href="homestyle.css" rel="stylesheet" />
</head>
<?php 
session_start();
if (isset($_SESSION['inIt'])) {
}
else {
	header("location: home.html");
}
?>
<body>
<div id="header">
<h1> <a href="MembersIndex.html"> <img src="nhslogo.png" class="logo" /></a></h1>
</div>
<div class="container">
<div id="navtab">
<h2> Navigation </h2>
	<p><button type="button" onclick="location.href='members.html'" style="background-color:transparent;"> Home </button></p>
    <p><button type="button" onclick="location.href='events.html'" style="background-color:transparent;"> Events </button></p>
    <p><button type="button" onclick="location.href='become.html'" style="background-color:transparent;"> Becoming an Officer</button></p>
    <p><button type="button" onclick="location.href='officers.html'" style="background-color:transparent;"> Officers </button></p>
    <p><button type="button" onclick="location.href='members.html'" style="background-color:transparent;"> Members </button></p>
	<p><button type="button" onclick="location.href='addpoints.html'" style="background-color:transparent;"> Update Your Points </button></p>
	<p><button type="button" onclick="location.href='currentpoints.html'" style="background-color:transparent;"> View Points </button></p>
</div>
<div id="login1">
<form  action='login.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Your Account</legend>
<p> <b>Username:  </b> <?php echo($_SESSION['user']); ?> </p>
<p> <b>Student ID: </b> <?php echo($_SESSION['id']); ?> </p>
<input type='button' name='Log Out' value='Log-Out' onclick="location.href='index.html'"/>
<input type='button' name='Change Password' value='Change Password' onclick="location.href='forgotpassword.html'"/>
</fieldset>
</form>
</div>
<div id="upevents1">
	<h2> Upcoming Events </h2>
	<ul> 
	<li> Nomination of Students </li>
	<li> Induction Ceremony </li>
	</ul>
</div>
	<div id="maincontent">
		<h1>Welcome to the Members' Page</h1>
		<h3>News</h3>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p align="center">&nbsp;</p>
		<p align="center">&nbsp;</p>
	</div>
    
</div>
<div id="footer">
    	<h4>National Honor Society Information</h4>
        <ul>
        	<li style="align:center">Officers: Matthew Piccolella President, Nick Fecci Vice President, RJ Curcio Treasurer, Allison  Moran Secretary</li>
            <li style="align:center">Advisers: Mr. Gattuso, Mrs. Joyce</li>
            <li style="align:center">Webmasters: Cory Brzycki, Anthony Perello, Matthew Piccolella, Aaron Rappleyea</li>
        </ul>
    </div>
</body>

</html>
