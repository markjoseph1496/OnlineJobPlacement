<?php
include('../connection.php');
session_start();
$AdminID = $_SESSION['AdminID'];

if(isset($_GET['coursetitle'])) {
	$CourseTitle = $_GET['coursetitle'];
    $CourseCode = $_GET['coursecode'];
    $CourseDesc = $_GET['coursedesc'];

    $query = "INSERT INTO coursetbl (CourseTitle,CourseCode,CourseDescription) values ('$CourseTitle','$CourseCode','$CourseDesc')";
    $result = mysql_query($query);

    echo "
        <script type='text/javascript'>
        location.href='admin-addcourse.php?ID';
        </script>";
}

if(isset($_POST['ModalEmail'])){
	$Email = $_POST['ModalEmail'];

	$query = "UPDATE admintbl SET Email = '$Email' WHERE AdminID = '$AdminID'";
	$result = mysql_query($query);

	echo "
        <script type='text/javascript'>
        location.href='admin-account.php?id=1';
        </script>";
}

?>