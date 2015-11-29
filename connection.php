<?php


$hostname = "mysql.hostinger.ph";
$user = "u987316885_e2edb";
$password = "o2ehQX3wqO";
$database ="u987316885_e2edb";

$bd = mysql_connect($hostname,$user,$password) or die ("Could not connect"); //connection of php to navicat
		//sensitive yung spacing... dito lang ^
 mysql_select_db($database,$bd) or die("could not select"); //selection ng DATABASE name w/c is mydatabase;

?>
