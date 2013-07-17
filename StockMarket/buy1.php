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
<div id="maincontent1"> 
<h2>Search Results</h2>
<table border="1" style="margin:0 auto;">
<tr>
<th>Company Name</th>
<th>Symbol</th>
<th>Current Price</th>
<th># of Shares</th>
</tr>
<?php
require("configure.php");
$con=mysql_connect("localhost","admin_1","gator123");
if (!$con){
	die('Unable to connect');
}
$username = $_SESSION['user'];
$one = mysql_query("SELECT Total_Value FROM $username WHERE Company_Name = 'Cash'");
$var2 = mysql_result($one,0);
$stocks = $_POST['stocks'];
foreach ($stocks as $company) {
$array = explode("/",$company);
$butt = $array[0];
$herp = new YahooStock("$butt");
$holder = $herp-> getQuote();
$sum1 = (float) $var2;
$sum2 = (float) $holder;
$limit = (int) ($sum1/$sum2);
echo "<tr> <td>" . $array[1] . "</td><td>" . $array[0] . "</td> <td> $" . $holder . "</td><td>";
echo "<form name = 'webForm' action='buystock.php' method='post' accept-charset='UTF-8'>";
echo "<select name='number'>";
for ($x = 1; $x <= $limit; $x++) {
echo "<option value='$x'>$x</option>";
}
echo "</select>";
echo "<input type='hidden' value='$array[0]' name='Symbol'>";
echo "<input type='hidden' value='$array[1]' name='Company_Name'> <input type='hidden' value='$holder' name = 'Quote'><input type='submit' value='Buy Stock'> </td> </tr>";
echo "</form>";
}
if ($_POST['Stock_Symbol'] != "") {
echo "<form name = 'webForm' action='buystock.php' method='post' accept-charset='UTF-8'>";
	$r = $_POST['Stock_Symbol'];
	$stuff = new YahooStock("$r");
	$company_name = $stuff-> getCompanyName();
	$quote1 = $stuff-> getQuote();
	$username1 = $_SESSION['user'];
	$one1 = mysql_query("SELECT Total_Value FROM $username1 WHERE Company_Name = 'Cash'");
	$var6= mysql_result($one1,0);
	$sum3 = (float) $var6;
	$sum4 = (float) $quote1;
	$limit = (int) ($sum3/$sum4);
	echo "<tr><td>" . $company_name . "</td><td>" . $r . "</td><td> $" . $quote1 . "</td><td>";
	echo "<select name='number'>";
	for ($x = 1; $x <= $limit; $x++) {
	echo "<option value='$x'>$x</option>";
	}
	echo "</select>";
	echo "<input type='hidden' value='$r' name='Symbol'>";
	echo "<input type='hidden' value='$company_name' name='Company_Name'> <input type='hidden' value='$quote1' name = 'Quote'><input type='submit' value='Buy Stock'> </td> </tr>";
	echo "</form>";
}
	echo "</table>";
?>
<br></br>
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

