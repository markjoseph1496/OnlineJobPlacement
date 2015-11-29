<?php


$hostname = "202.150.209.146:3306";
$user = "u987316885_e2edb";
$password = "markjoseph123";
$database ="u987316885_e2edb";


$bd = mysql_connect($hostname,$user,$password) or die ("Could not connect"); //connection of php to navicat
		//sensitive yung spacing... dito lang ^
 mysql_select_db($database,$bd) or die("could not select"); //selection ng DATABASE name w/c is mydatabase;

?>
