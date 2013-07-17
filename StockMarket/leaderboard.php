<html>
<head>
<link href="homestyle.css" type="text/css" rel="stylesheet" />
<title style="text-align:center"> FBLA Virtual Stock Market </title>
</head>
<?php
require('configure.php');
include('stock.php');
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

<div id="maincontent1"> 
<h2>Leaderboard</h2>
<?php
$con=mysql_connect("localhost","admin_1","gator123");
$hold = mysql_query("SELECT * FROM leaderboard ORDER BY Total_Value DESC");
$count = 1;
while ($row = mysql_fetch_array($hold)) {
$first = $row['First_Name'];
$last = $row['Last_Name'];
$total = $row['Total_Value'];
echo ("$count" . ".) " . $first . " " . "$last" . ": $" . "$total");
$count = $count + 1;
echo "<br></br>";
}
echo "<br></br>";
echo "<br></br>";
echo "<br></br>";
echo "<br></br>";
?>
</div>

<div id="footer">
	<div class="bar">
        <a href="home.php"><img src="home.gif"></a>
        <a href="portfolio.php"><img src="portfolio.jpg"></a>
        <a href="gallery.php"><img src="gallery.jpg"></a>
        <a href="buy.php"><img src="buyandsell.jpg"></a>
        <a href="leaderboard.php"><img src="leaderboard.gif"></a>
        <a href="logout.php"><img src="logout.jpg"></a>
    </div>
</div>

