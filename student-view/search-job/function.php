<?php
include('../../connection.php');
session_start();
include('../../common-functions.php');
$common_functions->student_login_check();
$StudentID = $_SESSION['StudentID']; // to conform with your coding style -- ghabx

if (isset($_GET['id'])) {
    $PositionID = $_GET['id'];
    $CompanyID = $_GET['cid'];
    $DateSubmitted = date("Y-m-d");
    GSecureSQL::query(
        "INSERT INTO requesttocompanytbl (CompanyID, StudentID, PositionID, Status, DateSubmitted) values (?,?,?,'Pending',?)",
        FALSE,
        "ssss",
        $CompanyID,
        $StudentID,
        $PositionID,
        $DateSubmitted
    );

    header('location: jobs.php?id=1');
}
?>