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
<h2>Your Stock Portfolio</h2>
<?php
$username = $_SESSION['user'];
$one = mysql_query("SELECT * FROM $username");
if (mysql_num_rows($one) > 1) {
echo "<table border='1' style='margin:0 auto;'><tr><th>Company Name</th><th>Symbol</th><th>Purchase Price</th><th>Current Price</th><th># of Shares</th><th>Total Value</th></tr>";
}
else {
echo "<p> Sorry, you have not purchased any stocks yet!</p>";
}
while ($row = mysql_fetch_array($one)) {
	if ($row['Company_Name'] == "Cash") {
	$holder = $row['Total_Value'];
	}
	else {
	$hold = $row['Symbol'];
	$hold1 = $row['Share_Price'];
	$share = new YahooStock("$hold");
	$quote = $share->getQuote();
	$balls = $row['Number_of_Shares'];
	$totalvalue = (float) $quote * (int) $row['Number_of_Shares'];
	echo ("<tr><td>" . $row['Company_Name'] . "</td>");
	echo ("<td>" . $row['Symbol'] . "</td>");
	echo ("<td>" . $hold1 . "</td>");
	echo ("<td>" . "$". $quote . "</td>");
	echo ("<td>" . $balls . "</td>");
	echo ("<td>" . "$" .  $totalvalue . "</td></tr>");
	$total = $total + $totalvalue;
	}
}
if (mysql_num_rows($one) > 1) {
echo "</table>";
echo "<br></br>";
}
$holder1 = round($holder,2);
echo ("<b>Money Available: $" . $holder1);
echo "<br></br>";
$total1 = round($total,2);
$st = (float) $holder + (float) $total1;
$sr = round($st,2);
echo ("<b>Total Portfolio Value: $</b>" . $sr. "<br>");
echo "<br></br>";


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

