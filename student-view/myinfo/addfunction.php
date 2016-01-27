<?php
include('../../connection.php');
session_start();

if(isset($_SESSION['StudentID'])){
    $StudentID = $_SESSION['StudentID'];
}else{
    header("location: ../../login-student.php");
}

if (isset($_GET['btnSaveInfo'])) {
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

    GSecureSQL::query(
        "UPDATE studentinfotbl SET FirstName = ?, MiddleName = ?, LastName = ?, Gender = ?, Birthdate = ?, Nationality = ?, CivilStatus = ?, FBLink = ?, TwitterLink = ? WHERE StudentID = ?",
        FALSE,
        "ssssssssss",
        $FirstName,
        $MiddleName,
        $LastName,
        $Gender,
        $Birthdate,
        $Nationality,
        $CivilStatus,
        $FBLink,
        $TwitterLink,
        $StudentID
    );
    echo "
        <script type='text/javascript'>
        location.href='personal-info.php?id=1';
        </script>
        ";
}

if (isset($_GET['btnSaveContactInfo'])) {
    $Email = $_GET['Email'];
    $MobileNumber = $_GET['MobileNumber'];
    $HomeNumber = $_GET['HomeNumber'];
    $WorkNumber = $_GET['WorkNumber'];
    $Address = $_GET['Address'];
    $City = $_GET['City'];
    $PostalCode = $_GET['PostalCode'];

    GSecureSQL::query(
        "UPDATE studcontactstbl SET Email = ?, MobileNumber = ?, HomeNumber = ?, WorkNumber = ?, Address = ?, City = ?, PostalCode = ? WHERE StudentID = ?",
        FALSE,
        "ssssssss",
        $Email,
        $MobileNumber,
        $HomeNumber,
        $WorkNumber,
        $Address,
        $City,
        $PostalCode,
        $StudentID

    );

    echo "
		<script type='text/javascript'>
		location.href='contacts-info.php?id=1';
		</script>
		";
}