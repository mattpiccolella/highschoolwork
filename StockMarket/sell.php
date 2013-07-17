<html>
<head>
<link href="homestyle.css" type="text/css" rel="stylesheet" />
<title style="text-align:center"> FBLA Virtual Stock Market </title>
</head>
<?php
session_start();
include('stock.php');
require('configure.php');
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
<h2>Sell Stocks!</h2>
<?php
$con=mysql_connect("localhost","admin_1","gator123");
if (!$con){
	die('Unable to connect');
}
$username = $_SESSION['user'];
$one = mysql_query("SELECT * FROM $username");
$butt = mysql_num_rows($one);
if ($butt > 1) {
echo "<table border='1' style='margin:0 auto;'><tr><th>Company Name</th><th>Symbol</th><th>Purchase Price</th><th>Current Price</th><th>Sell Shares</th></tr>";
}
else {
echo "<p> Sorry, you have no stocks to sell!</p>";
}
while ($row = mysql_fetch_array($one)) {
	if ($row['Company_Name'] != "Cash") {
	$hold = $row['Symbol'];
	$comp = $row['Company_Name'];
	$hold1 = $row['Share_Price'];
	$share = new YahooStock("$hold");
	$quote = $share->getQuote();
	$holder = (float) $quote;
	$balls = $row['Number_of_Shares'];
	echo ("<tr><td>" . $row['Company_Name'] . "</td>");
	echo ("<td>" . $row['Symbol'] . "</td>");
	echo ("<td>" . $hold1 . "</td>");
	echo ("<td>" . "$". $quote . "</td><td>");
	echo "<form name = 'webForm' action='sellstock.php' method='post' accept-charset='UTF-8'>";
	echo "<select name='number'>";
	for ($x = 1; $x <= $balls; $x++) {
		echo "<option value='$x'>$x</option>";
	}
	echo "</select>";
	echo "<input type='hidden' value='$hold' name='Symbol'>";
	echo "<input type='hidden' value='$comp' name='Company_Name'> <input type='hidden' value='$holder' name = 'Quote'> <input type='hidden' value='$hold1' name='Share_Price'>";
	echo "<input type='hidden' value='$balls' name='Max'><input type='submit' value='Sell Stock'> </td> </tr>";
	echo "</form>";
	}
}
if (mysql_num_rows($one) > 1) {
echo "</table>";
echo "<br></br>";
}
?>	
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

