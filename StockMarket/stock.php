<?php
/**
 * Class to fetch stock data from Yahoo! Finance
 *
 */
 
class YahooStock {   
    private $symbol;
    function __construct($b) {
    	$this->symbol = $b;
    }

    public function getStock() {           
    	$letters = $this->symbol;
        $s = file_get_contents("http://finance.yahoo.com/d/quotes.csv?s=$letters&f=s&e=.csv");
        $good = str_replace('"',"",$s);
        return $good;
    }
    
    public function getQuote() {
    	$letter = $this->symbol;
    	$p = file_get_contents("http://finance.yahoo.com/d/quotes.csv?s=$letter&f=l1&e=.csv");
    	return $p;
    }
    
    public function getCompanyName() {
    	$r = $this->symbol;
    	$y = file_get_contents("http://finance.yahoo.com/d/quotes.csv?s=$r&f=n&e=.csv");
    	$u = str_replace('"',"",$y);
    	return $u;
    }

    public function check() {
    	return $this->stock;
    }
    
    public function homePage() {
    	$start = $this->symbol;
    	$get = file_get_contents("http://finance.yahoo.com/d/quotes.csv?s=$start&f=nsl1&e=.csv");
    	$good = explode(',',$get);
    	if (sizeof($good) == 4) {
    		$butt = $good[0] . $good[1];
    		$a = 2;
    		$b = 3;
    	}
    	else {
    		$butt = $good[0];
    		$a = 1;
    		$b = 2;
    	}
    	
    	return "<b>" . str_replace('"',"",$butt) . " (" . str_replace('"',"",$good[$a]) . "): </b>" . str_replace('"',"",$good[$b]) . "<b>      </b>";
    }
}
?>