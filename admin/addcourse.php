<?php
include('../connection.php');

if(isset($_GET['coursetitle'])) {
	$CourseTitle = $_GET['coursetitle'];
    $CourseCode = $_GET['coursecode'];
    $CourseDesc = $_GET['coursedesc'];

    $query = "INSERT INTO coursetbl (CourseTitle,CourseCode,CourseDescription) values ('$CourseTitle','$CourseCode','$CourseDesc')";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='maintenance_addcourse.php?ID';
            </script>";
}


?>