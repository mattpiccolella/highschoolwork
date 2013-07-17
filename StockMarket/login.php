<?php 
session_start();  //need this since we will use sessions... will explain .. goes at top of all the php we will code...
$conf['server'] = 'localhost'; //the db resied on the local host -- the server we are using....
$conf['db'] = 'FBLA'; //add the nhs database name here
$conf['user'] = 'admin_1'; //add the nhs db admin login here admin_
$conf['pass'] = 'gator123'; //add the nhs password here - gator123
// Connect To DB server
$dbh = mysql_connect($conf['server'],$conf['user'],$conf['pass']);
if (!$dbh) {
    die('Not connected : ' . mysql_error()); //can not connect -- error message back to browser and leave php 
}

$db=mysql_select_db($conf['db'],$dbh);
if (!$db) {
    die ('Can\'t use pnp : ' . mysql_error()); //can not select -- dbh is the handle from above -- error message back to browser and leave php 
}

$id = $_POST['username'];	//must accept the form args from the html form calling
$password= $_POST['password'];//must accept the form args from the html form calling

//check to see if there....
$sql = "SELECT * FROM members WHERE username = '$id' and password='$password'";  //this is sql command to check your login table
$res = mysql_query($sql);
$sql1 = "SELECT username FROM members WHERE username = '$id' and password='$password'";
$sql2 = "SELECT first FROM members WHERE username = '$id' and password='$password'";
$sql3 = "SELECT last FROM members WHERE username = '$id' and password='$password'";
$res1 = mysql_query($sql1);
$res2 = mysql_query($sql2);
$res3 = mysql_query($sql3);
$var2 = mysql_result($res1,0);
$var3 = mysql_result($res2,0);
$var4 = mysql_result($res3,0);
	
if(mysql_num_rows($res)>0){	//we got a hit.... set security session logic below

$_SESSION['inIt']='1';
$_SESSION['user'] = $id;
$_SESSION['id'] = $var2;
$_SESSION['first'] = $var3;
$_SESSION['last'] = $var4;

session_start();

//start a secure session var .. will explain... -- next page members.php must check for inIt session var...
	//by doing this: 
	/*
	if (isset($_SESSION['inIt'])) {
		echo("in");
	}
	else {
		die ('invalid attempt to access page....');
	}
	*/
 
header("location: home.php"); //will explain this -- going to this page if found login... in a secure fashion


}
else{

	die ('Invalid Login - Password'); //not found .. no go....

}


?>