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

<div id="maincontent"> 
<h2>Leaderboard</h2>
<?php
$one = mysql_query("SELECT * FROM members");
$merp = mysql_num_rows($one);
$total = 0;
while ($row = mysql_fetch_array($one)) {
	$hold = $row['first'];
	$hold1 = $row['last'];
	$hold2 = $row['username'];
	$one2 = mysql_query("SELECT * FROM $hold2");
	while ($row = mysql_fetch_array($one2)) {
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
	$total = $total + $totalvalue;
	}
	}
	$holder1 = round($holder,2);
	$total1 = round($total,2);
	$st = (float) $holder + (float) $total1;
	$sr = round($st,2);
	echo ("<b>Total Portfolio Value: $</b>" . $sr. "<b> " . $hold . " " . $hold1);
}

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

