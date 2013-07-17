<html>
<head>
<link href="homestyle.css" type="text/css" rel="stylesheet" />
<title style="text-align:center"> FBLA Virtual Stock Market </title>
<script type="text/javascript">
function validateForm(myForm) {
	var x;
	x=1;
	if (myForm.first.value == "") {
	alert("Please enter your First Name");
	myForm.first.focus();
	x=0;
	return false;
	}
	if (myForm.last.value == "") {
	alert("Please enter your Last Name");
	myForm.last.focus();
	x=0;
	return false;
	}
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
	if (myForm.confirm.value == "") {
	alert("Please confirm your Password");
	myForm.confirmed.focus();
	x=0;
	return false;
	}
	if (myForm.confirm.value != myForm.password.value) {
	alert("Passwords do not match");
	myForm.password.value = "";
	myForm.confirmed.value = "";
	myForm.password.focus();
	x=0;
	return false;
	}
	if (myForm.email.value == "") {
	alert("Please enter your E-Mail");
	myForm.email.focus();
	x=0;
	return false;
	}
	if (myForm.email.value.indexOf("@")<0){
		alert("Please enter a valid E-Mail");
		myForm.email.value="";
		myForm.email.focus();
		return false;
	}
	return true;
	
}		
</script>
</head>
<body>
<h1> Point Pleasant Boro High School FBLA</h1>
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
<div id="registermain"> 
<h2>New Member Registration</h2>
<form onSubmit="return validateForm(webForm);" name = "webForm" action='newmember.php' id="slick-login" method='post' accept-charset='UTF-8'>
	<input type='hidden' name='submitted' id='submitted' value='1'/>
	<input type = "text" name = "first" id = "first" placeholder="First Name">
	<label for="first">First Name</label>
	<input type = "text" name = "last" id = "last" placeholder="Last Name">
	<label for="last">Last Name</label>
	<input type = "text" name = "username" id = "username" placeholder="Choose Username">
	<label for="username">Choose Username</label>
	<input type = "password" name = "password" id = "password" placeholder="Choose Password">
	<label for="password">Choose Password</label>
	<input type = "password" name = "confirm" id = "confirm" placeholder="Confirm Password">
	<label for="confirm">Confirm Password</label>
	<input type = "text" name = "email" id = "email" placeholder="E-Mail">
	<label for="email">E-Mail</label>
	<input type= "submit" value = "Register">
</form>
</div>
</body>
</html>