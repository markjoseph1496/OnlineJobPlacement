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
        }
        else{
            echo "Incorrect Student ID or Password";
        }
    } else {
        echo "Incorrect Student ID or Password";
    }
}

if (isset($_POST['CompanyEmail'])) {
    $CompanyEmail = $_POST['CompanyEmail'];
    $_Password = $_POST['password'];

    $companyinfo_tbl =
        GSecureSQL::query(
            "SELECT * FROM companyinfotbl WHERE Email = ?",
            TRUE,
            "s",
            $CompanyEmail
        );

    if (count($companyinfo_tbl)) {
        if (hash('sha512', $_Password . $companyinfo_tbl[0]->SaltedPassword) == $companyinfo_tbl[0]->Password) {
            $_SESSION['CompanyID'] = $CompanyEmail;
            echo "
		        <script type='text/javascript'>
		        alert('You have successfully loggged in.');
		        location.href='company/company.php';
		        </script>";
        }
        else{
            echo "Incorrect Company email or Password";
        }
    } else {
        echo "Incorrect Company email or Password";
    }
}
?>