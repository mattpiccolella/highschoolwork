<html>
<head>
<link href="homestyle.css" type="text/css" rel="stylesheet" />
<title style="text-align:center"> FBLA Virtual Stock Market </title>
</head>
<?php
session_start();
if (isset($_SESSION['inIt'])) {
}
else {
	header("location: index.php");
}
?>
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

<div id="maincontent"> 
<h2> Welcome <?php echo($_SESSION['first']) . " " . ($_SESSION['last']) . "!";?> </h2>
<h3>The Virtual Stock Market is brought to you by Point Boro FBLA!</h3>
<h3>See the toolbar below for more options.</h3>
</div>

<div id="footer">
	<div class="bar">
        <a href="home.php"><img src="home.gif"></a>
        <a href="portfolio.php"><img src="portfolio.jpg"></a>
        <a href="gallery.php"><img src="gallery.jpg"></a>
        <a href="transactions.php"><img src="buyandsell.jpg"></a>
        <a href="leaderboard.php"><img src="leaderboard.gif"></a>
        <a href="logout.php"><img src="logout.jpg"></a>
    </div>
</div>

