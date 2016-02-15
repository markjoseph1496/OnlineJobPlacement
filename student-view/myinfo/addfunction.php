<?php
include('../../connection.php');
session_start();
include('../../common-functions.php');
$common_functions->student_login_check();
$StudentID = $_SESSION['StudentID']; // to conform with your coding style -- ghabx
if (isset($_GET['btnSaveInfo'])) {
    $FirstName = $_GET['FirstName'];
    $MiddleName = $_GET['MiddleName'];
    $LastName = $_GET['LastName'];
    $Gender = $_GET['Gender'];
    $Birthdate = $_GET['Birthdate'];
    $Nationality = $_GET['Nationality'];
    $CivilStatus = $_GET['CivilStatus'];
    $FBLink = $_GET['FBLink'];

    $FBLink = "http://www.facebook.com/" . $FBLink;

    $validation_config = array(
        'FirstName' => array(
            'pattern' => '/^([a-zA-Z]+[ ]*)+$/',
            'errorMsg' => 'Invalid First name'
        ),
        'MiddleName' => array(
            'pattern' => '/^([a-zA-Z]+[ ]*)*$/',
            'errorMsg' => 'Invalid Middle name'
        ),
        'LastName' => array(
            'pattern' => '/^([a-zA-Z]+[ ]*)+$/',
            'errorMsg' => 'Invalid Last name'
        ),
        'Gender' => array(
            'pattern' => '/^(Male|Female)$/',
            'errorMsg' => 'Invalid Gender'
        ),
        'Nationality' => array(
            'pattern' => $common_functions->get_regex_of_nationalities(),
            'errorMsg' => 'Invalid Nationality'
        ),
        'CivilStatus' => array(
            'pattern' => '/^(Single|Married|Separated|Widowed)$/',
            'errorMsg' => 'Invalid Civil Status'
        ),
        'FBLink' => array(
            'pattern' => '/^([a-z0-9]+[.]*)+$/i',
            'errorMsg' => 'Invalid FB Link'
        )
    );

    $validation_return = $common_functions->validate($_GET, $validation_config);
    if($validation_return['hasError']){
        print_r($validation_return);die();
    }

    if(!$common_functions->date_validator($_GET['Birthdate'])){
        die('Birthdate supplied is an invalid date.');
    }

    GSecureSQL::query(
        "UPDATE studentinfotbl SET FirstName = ?, MiddleName = ?, LastName = ?, Gender = ?, Birthdate = ?, Nationality = ?, CivilStatus = ?, FBLink = ? WHERE StudentID = ?",
        FALSE,
        "sssssssss",
        $FirstName,
        $MiddleName,
        $LastName,
        $Gender,
        $Birthdate,
        $Nationality,
        $CivilStatus,
        $FBLink,
        $StudentID
    );

    GSecureSQL::query(
        "UPDATE progresstbl SET Pinfo = 'ok' WHERE StudentID = ?",
        FALSE,
        "s",
        $StudentID
    );

    header("location: personal-info.php?id=1");

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

    GSecureSQL::query(
        "UPDATE progresstbl SET Cinfo = 'ok' WHERE StudentID = ?",
        FALSE,
        "s",
        $StudentID
    );

    header("location: contacts-info.php?id=1");

}
if(isset($_POST['Objective'])){
    $Objective = $_POST['Objective'];

    GSecureSQL::query(
        "UPDATE studentinfotbl SET Objectives = ? WHERE StudentID = ?",
        FALSE,
        "ss",
        $Objective,
        $StudentID
    );

    GSecureSQL::query(
        "UPDATE progresstbl SET Objective = 'ok' WHERE StudentID = ?",
        FALSE,
        "s",
        $StudentID
    );

    header("location: work.php");
}