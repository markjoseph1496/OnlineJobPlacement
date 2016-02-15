<?php
include('../../connection.php');
session_start();
include('../../common-functions.php');
$common_functions->student_login_check();
$StudentID = $_SESSION['StudentID']; // to conform with your coding style -- ghabx

if (isset($_GET['id'])) {
    $PositionID = $_GET['id'];
    $CompanyID = $_GET['cid'];
    GSecureSQL::query(
        "INSERT INTO requesttocompanytbl (CompanyID, StudentID, PositionID, Status) values (?,?,?,'Pending')",
        FALSE,
        "sss",
        $CompanyID,
        $StudentID,
        $PositionID
    );
    echo "
            <script type='text/javascript'>
            location.href='jobs.php?id=1';
            </script>";
}
?>