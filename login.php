<?php
include('connection.php');
session_start();
if (isset($_POST['StudentID'])) {
    $StudentID = $_POST['StudentID'];
    $_Password = $_POST['password'];

    $student_tbl =
        GSecureSQL::query(
            "SELECT * FROM studentinfotbl WHERE StudentID = ?",
            TRUE,
            "s",
            $StudentID
        );

    if (count($student_tbl)) {
        if (hash('sha512', $_Password . $student_tbl[0]->SaltedPassword) == $student_tbl[0]->Password) {
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
?>