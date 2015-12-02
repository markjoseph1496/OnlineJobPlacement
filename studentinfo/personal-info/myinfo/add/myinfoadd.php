<?php
include('../../../../connection.php');
session_start();

$StudentID= $_SESSION['StudentID'];

if(isset($_GET['School'])){

	$School = $_GET['School'];
	$Attainment = $_GET['EducAttainment'];
	$Course = $_GET['Course'];
	$GraduatedMonth = $_GET['GraduatedMonth'];
	$GraduatedYear = $_GET['GraduatedYear'];

	$Graduation = $GraduatedMonth ." ". $GraduatedYear;
    $Attainment = mysql_real_escape_string($Attainment); 
    $query = "INSERT INTO schooltbl (StudentID,School,Attainment,Course,Graduated,_Default) values  ('$StudentID','$School','$Attainment','$Course','$Graduation','0')";
    $Result = mysql_query($query);
    echo "
         <script type='text/javascript'>
         location.href='../education.php?id=SchoolAdd';
         </script>
         ";
}
?>