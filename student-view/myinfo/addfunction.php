<?php
include('../../connection.php');
session_start();

$StudentID = $_SESSION['StudentID'];

if(isset($_GET['btnSaveInfo'])){
	$FirstName = $_GET['FirstName'];
	$MiddleName = $_GET['MiddleName'];
	$LastName = $_GET['LastName'];
	$Gender = $_GET['Gender'];
	$Birthdate = $_GET['Birthdate'];
	$Nationality = $_GET['Nationality'];
	$CivilStatus = $_GET['CivilStatus'];
	$FBLink = $_GET['FBLink'];
	$TwitterLink = $_GET['TwitterLink'];

	$FBLink = "http://www.facebook.com/" . $FBLink;

	$query = "UPDATE studentinfotbl SET FirstName = '$FirstName', MiddleName ='$MiddleName', LastName = '$LastName', Gender = '$Gender', Birthdate = '$Birthdate', Nationality = '$Nationality', CivilStatus = '$CivilStatus', FBLink = '$FBLink', TwitterLink = '$TwitterLink'";
	$result = mysql_query($query);

	echo "
        <script type='text/javascript'>
        location.href='personal-info.php?id=1';
        </script>
        ";
}


?>