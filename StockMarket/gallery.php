<html>
<head>
<link href="hoverbox.css" type="text/css" rel="stylesheet" />
<title style="text-align:center"> FBLA Virtual Stock Market </title>
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
<div id="gallery">
<ul class="hoverbox">
<li>
<a href="http://finance.yahoo.com/q?s=AAPL" target="_blank"><img src="apple.jpeg" alt="description"/><img src="apple.jpeg" alt="description" class="preview"/></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=DIS" target="_blank"><img src="disney.jpg" alt="description" /><img src="disney.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=ibm&ql=1" target="_blank"><img src="ibm.jpg" alt="description" /><img src="ibm.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=HD" target="_blank"><img src="homedepot.png" target="_blank" alt="description" /><img src="homedepot.png" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=CSCO" target="_blank"><img src="cisco.gif" alt="description" /><img src="cisco.gif" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=HPQ&ql=0" target="_blank"><img src="hp1.jpg" alt="description" /><img src="hp1.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=PFE&ql=0" target="_blank"><img src="pfizer.jpg" alt="description" /><img src="pfizer.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=T" target="_blank"><img src="att.jpg" alt="description" /><img src="att.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=WMT" target="_blank"><img src="walmart.jpg" alt="description" /><img src="walmart.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=KO&ql=0" target="_blank"><img src="coke.jpg" alt="description" /><img src="coke.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=MCD&ql=0" target="_blank"><img src="mcdonalds.png" alt="description" /><img src="mcdonalds.png" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=JNJ&ql=0" target="_blank"><img src="jj1.jpg" alt="description"/><img src="jj1.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=goog&ql=1" target="_blank"><img src="google.jpg" alt="description" /><img src="google.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=BAC&ql=0" target="_blank"><img src="bankofamerica.jpg" alt="description" /><img src="bankofamerica.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=GS-PC" target="_blank"><img src="goldman.gif" alt="description" /><img src="goldman.gif" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=SPLS" target="_blank"><img src="staples.jpg" alt="description" /><img src="staples.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=GM&ql=0" target="_blank"><img src="gm.jpg" alt="description" /><img src="gm.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=ge&ql=1" target="_blank"><img src="ge.gif" alt="description" /><img src="ge.gif" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=NFLX&ql=0" target="_blank"><img src="netflix.jpg" alt="description" /><img src="netflix.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=msft&ql=1" target="_blank"><img src="microsoft.jpg" alt="description" /><img src="microsoft.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=JPM" target="_blank"><img src="jpmorgan.jpg" alt="description" /><img src="jpmorgan.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=BA&ql=0" target="_blank"><img src="boeing.jpg" alt="description"/><img src="boeing.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=XOM&ql=0" target="_blank"><img src="exxon.jpg" alt="description" /><img src="exxon.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=AXP&ql=0" target="_blank"><img src="amex1.jpg" alt="description" /><img src="amex1.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=pg&ql=1" target="_blank"><img src="pg.gif" alt="description" /><img src="pg.gif" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=VZ" target="_blank"><img src="verizon.jpg" alt="description" /><img src="verizon.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=fb&ql=1" target="_blank"><img src="fb.jpg" alt="description" /><img src="fb.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=CVX&ql=0" target="_blank"><img src="chevron.jpg" alt="description" /><img src="chevron.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=CAT" target="_blank"><img src="cat.jpg" alt="description" /><img src="cat.jpg" alt="description" class="preview" /></a>
</li>
<li>
<a href="http://finance.yahoo.com/q?s=SBUX&ql=0" target="_blank"><img src="star.jpg" alt="description" /><img src="star.jpg" alt="description" class="preview" /></a>
</li>
</ul>
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
</body>
</html>