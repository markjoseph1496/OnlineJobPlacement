<?php
include('connection.php');
session_start();

$x= $_SESSION['StudentID'];

if(isset($_GET['School'])){
	$SchoolID = $_GET['SchoolID'];
	$School = $_GET['School'];
	$Attainment = $_GET['EducAttainment'];
	$Course = $_GET['Course'];
	$GraduatedMonth = $_GET['GraduatedMonth'];
	$GraduatedYear = $_GET['GraduatedYear'];

	$Graduation = $GraduatedMonth ." ". $GraduatedYear;
    $Attainment = mysql_real_escape_string($Attainment); 

    $query = "UPDATE schooltbl SET School = '$School', Attainment ='$Attainment', Course = '$Course', Graduated = '$Graduation' WHERE SchoolID = '$SchoolID'";
    $Result = mysql_query($query);
    echo "
         <script type='text/javascript'>
         location.href='../education.php?id=SchoolEdited';
         </script>
         ";
}



?>