<?php
include('connection.php');
session_start();
if (isset($_POST['StudentID'])) {
    $StudentID = $_POST['StudentID'];
    $_Password = $_POST['password'];

    $student_tbl =
        GSecureSQL::query(
            "SELECT
                `Password`,
                `SaltedPassword`
            FROM `studentinfotbl` WHERE `StudentID` = ?",
            TRUE,
            "s",
            $StudentID
        );

    if (count($student_tbl)) {
        if (hash('sha512', $_Password . $student_tbl[0][1]) == $student_tbl[0][0]) {
            $_SESSION['StudentID'] = $StudentID;
            echo "
		        <script type='text/javascript'>
		        alert('You have successfully loggged in.');
		        location.href='student-view/search-job/jobs.php';
		        </script>";
        } else {
            echo "Incorrect Student ID or Password";
        }
    } else {
        echo "Incorrect Student ID or Password";
    }
} elseif (isset($_POST['CompanyEmail'])) {
    $CompanyEmail = $_POST['CompanyEmail'];
    $_Password = $_POST['password'];

    $companyinfo_tbl =
        GSecureSQL::query(
            "SELECT
                `CompanyID`,
                `Password`,
                `SaltedPassword`
            FROM `companyinfotbl` WHERE `Email` = ? AND Status = 'Active'",
            TRUE,
            "s",
            $CompanyEmail
        );

    if (count($companyinfo_tbl)) {
        if (hash('sha512', $_Password . $companyinfo_tbl[0][2]) == $companyinfo_tbl[0][1]) {
            $_SESSION['CompanyID'] = $companyinfo_tbl[0][0];
            echo "
		        <script type='text/javascript'>
		        alert('You have successfully loggged in.');
		        location.href='company/company.php';
		        </script>";
        } else {
            echo "Incorrect Company email or Password";
        }
    } else {
        echo "Incorrect Company email or Password";
    }
} elseif (isset($_POST['AdminEmail'])) {
    $AdminEmail = $_POST['AdminEmail'];
    $_Password = $_POST['password'];

    $admin_tbl =
        GSecureSQL::query(
            "SELECT
                `AdminID`,
                `Password`,
                `SaltedPassword`
            FROM `admintbl` WHERE `Username` = ?",
            TRUE,
            "s",
            $AdminEmail
        );

    if (count($admin_tbl)) {
        if (hash('sha512', $_Password . $admin_tbl[0][2]) == $admin_tbl[0][1]) {
            $_SESSION['AdminID'] = $admin_tbl[0][0];
            echo "
		        <script type='text/javascript'>
		        alert('You have successfully loggged in.');
		        location.href='admin/admin.php';
		        </script>";
        } else {
            echo "Incorrect email or Password";
        }
    } else {
        echo "Incorrect email or Password";
    }
}
?>