<?php
include('../../../connection.php');
session_start();

$StudentID=$_SESSION['StudentID'];

if(isset($_GET['School'])){
	$SchoolID = $_GET['SchoolID'];
	$School = $_GET['School'];
	$Attainment = $_GET['EducAttainment'];
	$Course = $_GET['Course'];
	$GraduatedMonth = $_GET['GraduatedMonth'];
	$GraduatedYear = $_GET['GraduatedYear'];

	$Graduation = $GraduatedMonth ." ". $GraduatedYear;
    $Attainment = mysql_real_escape_string($Attainment); 

    $query = "UPDATE schooltbl SET School = '$School', Attainment ='$Attainment', Course = '$Course', Graduated = '$Graduation' WHERE SchoolID = '$SchoolID' AND StudentID = '$StudentID'";
    $result = mysql_query($query);
    echo "
         <script type='text/javascript'>
         location.href='../education.php?id=1';
         </script>
         ";
}

if(isset($_GET['Seminar'])){
    $SeminarID = $_GET['SeminarID'];
    $Seminar = $_GET['Seminar'];
    $YearAttended = $_GET['YearAttended'];

    $query = "UPDATE seminartbl SET Seminar = '$Seminar', YearAttended = '$YearAttended' WHERE SeminarID = '$SeminarID' AND StudentID = '$StudentID'";
    $result = mysql_query($query);
    echo "
         <script type='text/javascript'>
         location.href='../education.php?id=2';
         </script>
         ";
}
?>