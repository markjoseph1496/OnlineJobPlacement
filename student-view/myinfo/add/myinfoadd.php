<?php
include('../../../connection.php');
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
         location.href='../education.php?id=4';
         </script>
         ";
}

if(isset($_GET['Seminar'])){

    $Seminar = $_GET['Seminar'];
    $YearAttended = $_GET['YearAttended'];

    $query = "INSERT INTO seminartbl (StudentID,Seminar,YearAttended) values ('$StudentID','$Seminar','$YearAttended')";
    $Result = mysql_query($query);
    echo "
        <script type='text/javascript'>
        location.href='../education.php?id=5';
        </script>
        ";
}



if(isset($_GET['Certification'])){
    $Certification = $_GET['Certification'];
    $YearTaken = $_GET['YearTaken'];
    $query = "INSERT INTO certificationtbl (StudentID,Certification,YearTaken) values  ('$StudentID','$Certification','$YearTaken')";
        $Result = mysql_query($query);
        echo "
             <script type='text/javascript'>
             location.href = '../certifications.php?id=2';
             </script>
             ";
}

if(isset($_GET['txtAchievement'])){
    $Achievement = $_GET['txtAchievement'];

    $query = "INSERT INTO achievementstbl (StudentID,Achievements) values  ('$StudentID','$Achievement')";
       $Result = mysql_query($query);
       echo "
             <script type='text/javascript'>
             location.href='../achievements.php?id=AchievementAdd';
             </script>
             ";
}
?>