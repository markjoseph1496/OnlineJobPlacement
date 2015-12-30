<?php
include('../../../connection.php');
session_start();

$StudentID = $_SESSION['StudentID'];

if (isset($_GET['School'])) {
    $School = $_GET['School'];
    $Attainment = $_GET['EducAttainment'];
    $Course = $_GET['Course'];
    $GraduatedMonth = $_GET['GraduatedMonth'];
    $GraduatedYear = $_GET['GraduatedYear'];
    $Graduation = $GraduatedMonth . " " . $GraduatedYear;

    GSecureSQL::query(
        "INSERT INTO schooltbl (StudentID,School,Attainment,Course,Graduated,_Default) values  (?,?,?,?,?,?)",
        FALSE,
        "ssssss",
        $StudentID,
        $School,
        $Attainment,
        $Course,
        $Graduation,
        '0'
    );
    echo "
         <script type='text/javascript'>
         location.href='../education.php?id=4';
         </script>
         ";
}

if (isset($_GET['Seminar'])) {

    $Seminar = $_GET['Seminar'];
    $YearAttended = $_GET['YearAttended'];

    GSecureSQL::query(
        "INSERT INTO seminartbl (StudentID,Seminar,YearAttended) values (?,?,?)",
        FALSE,
        "sss",
        $StudentID,
        $Seminar,
        $YearAttended
    );

    echo "
        <script type='text/javascript'>
        location.href='../education.php?id=5';
        </script>
        ";
}


if (isset($_GET['Certification'])) {
    $Certification = $_GET['Certification'];
    $YearTaken = $_GET['YearTaken'];
    GSecureSQL::query(
        "INSERT INTO certificationtbl (StudentID,Certification,YearTaken) values  (?,?,?)",
        FALSE,
        "sss",
        $StudentID,
        $Certification,
        $YearTaken
    );

    echo "
             <script type='text/javascript'>
             location.href = '../certifications.php?id=2';
             </script>
             ";
}


if (isset($_GET['Achievement'])) {
    $Achievement = $_GET['Achievement'];

    GSecureSQL::query(
        "INSERT INTO achievementstbl (StudentID,Achievements) values  (?,?)",
        FALSE,
        "ss",
        $StudentID,
        $Achievement
    );

    echo "
             <script type='text/javascript'>
             location.href='../achievements.php?id=2';
             </script>
             ";
}
if (isset($_GET['Name'])) {
    $Name = $_GET['Name'];
    $Relationship = $_GET['Relationship'];
    $Company = $_GET['Company'];
    $Position = $_GET['Position'];
    $Phone = $_GET['Phone'];
    $Email = $_GET['Email'];

    GSecureSQL::query(
        "INSERT INTO referencetbl(StudentID, Name, Relationship, Company, Position, Phone, Email) values (?,?,?,?,?,?,?)",
        FALSE,
        "sssssss",
        $StudentID,
        $Name,
        $Relationship,
        $Company,
        $Position,
        $Phone,
        $Email
    );
    echo "
             <script type='text/javascript'>
             location.href='../references.php?id=2';
             </script>
             ";
}
if (isset($_POST['Specialization'])) {
    $Specialization = $_POST['Specialization'];
    $YearsOfExperience = $_POST['YearsOfExperience'];

    GSecureSQL::query(
        "INSERT INTO specializationtbl (StudentID, Specialization, YearOfExperience) values (?,?,?)",
        FALSE,
        "sss",
        $StudentID,
        $Specialization,
        $YearsOfExperience
    );
    echo "
             <script type='text/javascript'>
             location.href='../specialization-and-languages.php?id=2';
             </script>
             ";
}

if (isset($_POST['Language'])) {
    $Language = $_POST['Language'];

    GSecureSQL::query(
        "INSERT INTO languagetbl (StudentID, Language) values (?, ?)",
        FALSE,
        "ss",
        $StudentID,
        $Language
    );
    echo "
             <script type='text/javascript'>
             location.href='../specialization-and-languages.php?id=5';
             </script>
             ";
}
?>