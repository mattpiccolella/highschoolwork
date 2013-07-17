<html>
<head>
<link href="homestyle.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
function validateForm(myForm) {
	var x;
	x=1;
	if (myForm.password.value == "") {
	alert("Please enter your Password");
	myForm.password.focus();
	x=0;
	return false;
	}
	if (myForm.username.value == "") {
	alert("Please enter your User Name");
	myForm.username.focus();
	x=0;
	return false;
	}
	return true;
	
}		
</script>
<title style="text-align:center"> FBLA Virtual Stock Market </title>
</head>
<?php
session_start();
if (isset($_SESSION['inIt'])) {
	header("location: home.php");
}
else {
}
?>
<body>
<h1>Point Pleasant Boro High School FBLA</h1>
<?php
	include_once('stock.php');
	$staples = new YahooStock("SPLS");
	$apple = new YahooStock("AAPl");
	$google = new YahooStock("GOOG");
	$micro = new YahooStock("MSFT");
	$goldman = new YahooStock("GS");
	$amazon = new YahooStock("AMZN");
?>
<marquee style="font-family: Courier" behavior="scroll" direction="left"> 
<?php
	echo $apple-> homePage();
	echo $google-> homePage();
	echo $micro -> homePage();
	echo $amazon-> homePage();
?>
</marquee>
<br></br>
<div id="maincontent"> 
<h2> Welcome to the Virtual Stock Market! </h2>
<form onSubmit="return validateForm(webForm);" id="slick-login" method ="post" name="webForm" action="login.php" accept-charset='UTF-8'> 
	<input type='hidden' name='submitted' id='submitted' value='1'/>
	<input type = "text" name = "username" id = "username" placeholder="Username">
	<label for="username">username</label>
	<input type = "password" name = "password" id = "password" placeholder="Password">
	<label for="password">password</label>
	<input type = "submit" value = "Log In" action="login.php">
	<input type= "button" value = "New Member? Register" onclick="location.href='register.php'">
</form>
</div>
</body>
</html>