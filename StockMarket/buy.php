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
<h2>Buy Stocks!</h2>
<form name = "webForm" action='buy1.php' method='post' accept-charset='UTF-8'>
<select name="stocks[]" size="12" multiple>
<optgroup label="100 Common Stocks">
<option value="MMM/3M Company Common">3M Company Common (MMM)</option>
<option value="AMG/Affiliated Managers Group">Affiliated Managers Group (AMG)</option>
<option value="ACL/Alcon Inc Common Shares">Alcon Inc Common Shares (ACL)</option>
<option value="ALX/Alexander's, Inc.">Alexander's, Inc. (ALX)</option>
<option value="Y/Alleghany Corporation">Alleghany Corporation (Y)</option>
<option value="AMZN/Amazon.com, Inc.">Amazon.com, Inc. (AMZN)</option>
<option value="UHAL/Amerco">Amerco (UHAL)</option>
<option value="APA/Apache">Apache Corporation (APA)</option>
<option value="AAPL/Apple Inc.">Apple Inc. (AAPL)</option>
<option value="ACGL/Arch Capital Group">Arch Capital Group (ACGL)</option>
<option value="ATRI/Atrion Corporation">ATRION Corporation (ATRI)</option>
<option value="AZO/Autozone, Inc. Co">AutoZone, Inc. Co (AZO)</option>
<option value="AVB/AvalonBay Communities">AvalonBay Communities (AVB)</option>
<option value="BRK-A/Berkshire Hathaway">Berkshire Hathaway (BRK-A)</option>
<option value="BHP/Billiton Limited">BHP Billiton Limited (BHP)</option>
<option value="BIIB/Biogen Idec Inc.">Biogen Idec Inc. (BIIB)</option>
<option value="BLK/BlackRock Inc.">BlackRock Inc. (BLK)</option>
<option value="BXP/Boston Properties">Boston Properties (BXP)</option>
<option value="BPT/BP Prudhoe Bay Royalty">BP Prudhoe Bay Royalty (BPT)</option>
<option value="BCR/C.R. Bard, Inc. Co">C.R. Bard, Inc. Co (BCR)</option>
<option value="CSWC/Capital Southwest">Capital Southwest (CSWC)</option>
<option value="CRR/Carbo Ceramics">Carbo Ceramics, Inc. (CRR)</option>
<option value="CAT/Caterpillar, Inc.">Caterpillar, Inc. (CAT)</option>
<option value="CERN/Cerner Corporation">Cerner Corporation (CERN)</option>
<option value="CF/CF Industries Holdings">CF Industries Holdings (CF)</option>
<option value="CVX/Chevron Corporation">Chevron Corporation (CVX)</option>
<option value="SNP/China Petroleum & Chemical">China Petroleum & Chemical (SNP)</option>
<option value="XEC/Cimarex Energy Co.">Cimarex Energy Co. (XEC)</option>
<option value="CLH/Clearn Harbors, Inc.">Clean Harbors, Inc. (CLH)</option>
<option value="CME/CME Group Inc.">CME Group Inc. (CME)</option>
<option value="CEO/CNOOC Limited Company">CNOOC Limited Company (CEO)</option>
<option value="BAP/Credicrop Ltd.">Credicorp Ltd. (BAP)</option>
<option value="CMI/Cummins Inc.">Cummins  Inc. (CMI)</option>
<option value="DNEX/Dionex Corporation">Dionex Corporation</option>
<option value="EMN/Eastman Chemical">Eastman Chemical</option>
<option value="ESGR/Enstar Group Limited">Enstar Group Limited (ESGR)</option>
<option value="EOG/EOG Resources, Inc.">EOG Resources, Inc.</option>
<option value="EQIX/Equinix, Inc.">Equinix, Inc. (EQIX)</option>
<option value="ESS/Essex Property Trust">Essex Property Trust (ESS)</option>
<option value="EL/Estee Lauder Company">Estee Lauder Company (EL)</option>
<option value="FFIV/F5 Networks, Inc.">F5 Networks, Inc. (FFIV)</option>
<option value="FDS/FactSet Research">FactSet Research (FDS)</option>
<option value="ONEQ/Fidelity Nasdaq Comp.">Fidelity Nasdaq Comp. (ONEQ)</option>
<option value="FCNCA/First Citizens Bank">First Citizens Bank (FCNCA)</option>
<option value="FLS/Flowserve Corporation">Flowserve Corporation (FLS)</option>
<option value="BEN/Franklin Resource">Franklin Resource (BEN)</option>
<option value="GS/Goldman Sachs Group">Goldman Sachs Group (GS)</option>
<option value="GOOG/Google Inc.">Google Inc. (GOOG)</option>
<option value="GNI/Great Northern Iron Ore">Great Northern Iron Ore (GNI)</option>
<option value="HDB/HDFC Bank Limited">HDFC Bank Limited (HDB)</option>
<option value="IBM/International Bus. Machines">International Bus. Machines (IBM)</option>
<option value="ISRG/Intuitive Surgical">Intuitive Surgical (ISRG)</option>
<option value="TIP/iShares Barclays">iShares Barclays (TIP)</option>
<option value="JKH/iShares Morningst.">iShares Morningst. (JKH)</option>
<option value="JKJ/iShares Morningst.">iShares Morningst. (JKJ)</option>
<option value="JLL/Jones Lang LaSalle">Jones Lang LaSalle (JLL)</option>
<option value="KYO/Kyocera Corporation">Kyocera Corporation (KYO)</option>
<option value="LH/Laboratory Corporation">Laboratory Corporation (LH)</option>
<option value="LZ/Lubrizol Corporation">Lubrizol Corporation (LZ)</option>
<option value="MKL/Markel Corporation">Markel Corporation (MKL)</option>
<option value="HCH/Merrill Lynch Canada">Merrill Lynch Canada (HCH)</option>
<option value="MTD/Mettler-Toledo Inc.">Mettler-Toledo Inc. (MTD)</option>
<option value="MSTR/MicroStrategy Inc.">MicroStrategy Inc. (MSTR)</option>
<option value="MICC/Millicom International">Millicom International (MICC)</option>
<option value="NC/NACCO Industries">NACCO Industries (NC)</option>
<option value="NPK/National Presto Industries">National Presto Industries (NPK)</option>
<option value="NFLX/Netflix, Inc.">Netflix, Inc. (NFLX)</option>
<option value="NEU/NewMarket Corporation">NewMarket Corporation (NEU)</option>
<option value="NVO/Novo Nordisk AS">Novo Nordisk AS (NVO)</option>
<option value="OXY/Occidental Petroleum">Occidental Petroleum (OXY)</option>
<option value="OYOG/OYO Geospace Corporation">OYO Geospace Corporation (OYOG)</option>
<option value="PNRA/Panera Bread Company">Panera Bread Company (PNRA)</option>
<option value="PTR/PetroChina Company">PetroChina Company (PTR)</option>
<option value="PII/Polaris Industries">Polaris Industries (PII)</option>
<option value="RL/Polo Ralph Lauren">Polo Ralph Lauren (RL)</option>
<option value="PKX/POSCO Common Stock">POSCO Common Stock (PKX)</option>
<option value="PX/Praxair, Inc. Com">Praxair, Inc. Com (PX)</option>
<option value="PCP/Precision Castpar">Precision Castpar (PCP)</option>
<option value="PCLN/priceline.com Inc.">priceline.com Inc. (PCLN)</option>
<option value="PSA/Public Storage">Public Storage (PSA)</option>
<option value="CRM/Salesforce.com Inc.">Salesforce.com Inc. (CRM)</option>
<option value="CKH/SEACOR Holdings Inc.">SEACOR Holdings Inc. (CKH)</option>
<option value="SHG/Shinhan Financial">Shinhan Financial (SHG)</option>
<option value="SI/Siemens AG America">Siemens AG America (SI)</option>
<option value="SPG/Simon Property Gr.">Simon Property Gr. (SPG)</option>
<option value="SINA/Sina Corporation">Sina Corporation (SINA)</option>
<option value="STRA/Strayer Education">Strayer Education (STRA)</option>
<option value="TNH/Terra Nitrogen Company">Terra Nitrogen Company (TNH)</option>
<option value="UNP/Union Pacific Corporation">Union Pacific Corporation (UNP)</option>
<option value="VFC/V.F. Corporation">V.F. Corporation (VFC)</option>
<option value="VMI/Valmont Industries">Valmont Industries (VMI)</option>
<option value="GWW/W.W. Grainger, Inc.">W.W. Grainger, Inc. (GWW)</option>
<option value="WLG/Walter Energy, Inc.">Walter Energy, Inc. (WLG)</option>
<option value="WPO/Washington Post Company">Washington Post Company (WPO)</option>
<option value="WAT/Waters Corporation">Waters Corporation (WAT)</option>
<option value="WBK/Westpac Banking Corporation">Westpac Banking Corporation (WBK)</option>
<option value="WTM/White Mountains Insurance">White Mountains Insurance (WTM)</option>
<option value="WYNN">Wynn Resorts, Limited (WYNN)</option>
</select> 
<br></br>
Or Enter a Stock Symbol...
<br></br>
<input type="text" name="Stock_Symbol"> 
<br></br>
<input type="submit" value="Get Stock Information">
</form>
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

