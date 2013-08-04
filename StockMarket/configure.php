<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
$conf['server'] = '//taken out';
$conf['db'] = '//taken out';
$conf['user'] = '//taken out';
$conf['password'] = '//taken out';

$dbh = mysql_connect($conf['server'],$conf['user'],$conf['password']);

$x=mysql_query("use {$conf['db']}",$dbh);
if (!$x) {
		die ("Error Connecting To server");
}
?>
