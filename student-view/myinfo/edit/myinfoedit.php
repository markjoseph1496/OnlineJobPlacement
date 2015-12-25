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

if(isset($_GET['Certification'])){
    $CertificationID = $_GET['CertificationID'];
    $Certification = $_GET['Certification'];
    $YearTaken = $_GET['YearTaken'];

    $query = "UPDATE certificationtbl SET Certification = '$Certification', YearTaken = '$YearTaken' WHERE CertificationID = '$CertificationID' AND StudentID = '$StudentID'";
    $result = mysql_query($query);
    echo "
        <script type='text/javascript'>
        location.href='../certifications.php?id=1';
        </script>
        ";
}

if(isset($_GET['Achievement'])){
    $AchievementID = $_GET['AchievementID'];
    $Achievement = $_GET['Achievement'];

    $query = "UPDATE achievementstbl SET Achievements = '$Achievement' WHERE AchievementID = '$AchievementID' AND StudentID = '$StudentID'";
    $result = mysql_query($query);

    echo "
        <script type='text/javascript'>
        location.href='../achievements.php?id=1';
        </script>
        ";
}   

if(isset($_GET['ReferenceID'])){
   $ReferenceID = $_GET['ReferenceID'];
   $Name = $_GET['Name'];
   $Relationship = $_GET['Relationship'];
   $Company = $_GET['Company'];
   $Position = $_GET['Position'];
   $Phone = $_GET['Phone'];
   $Email = $_GET['Email'];

   $query = "UPDATE referencetbl SET Name = '$Name', Relationship = '$Relationship', Company = '$Company', Position = '$Position', Phone = '$Phone', Email = '$Email' WHERE ReferenceID = '$ReferenceID' AND StudentID = '$StudentID'";
   $result = mysql_query($query);

    echo "
        <script type='text/javascript'>
        location.href='../references.php?id=1';
        </script>
        ";
}

if(isset($_POST['Specialization'])){
    $SID = $_POST['SpecializationID'];
    $Specialization = $_POST['Specialization'];
    $YearOfExperience = $_POST['YearsOfExperience'];

    $query = "UPDATE specializationtbl SET Specialization = '$Specialization', YearOfExperience = '$YearOfExperience' WHERE SID = '$SID' AND StudentID";
    $result = mysql_query($query);
        echo "
        <script type='text/javascript'>
        location.href='../specialization-and-languages.php?id=1';
        </script>
        ";
}

if(isset($_POST['Language'])){
    $LangID = $_POST['LangID'];
    $Language = $_POST['Language'];
}
?>