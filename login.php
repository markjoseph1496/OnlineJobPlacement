<?php
include('connection.php');

$StudentID = mysql_real_escape_string($_POST['StudentID']);
$_Password = mysql_real_escape_string($_POST['_Password']);

$LoginQuery = "SELECT COUNT(*) FROM studentinfotbl WHERE (StudentID = '$StudentID' AND Password = '$_Password')";
$LoginResult = mysql_query($LoginQuery);
$Row = mysql_fetch_array($LoginResult);

if($Row[0] > 0)
	echo "Login Successful";
else
	echo "Failed to Login";

?>
