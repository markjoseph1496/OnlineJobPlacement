<?php
include('../../connection.php');
session_start();
$StudentID = $_SESSION['StudentID'];

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