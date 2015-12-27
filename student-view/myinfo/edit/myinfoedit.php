<?php
include('../../../connection.php');
session_start();

$StudentID = $_SESSION['StudentID'];

if (isset($_GET['School'])) {
    $SchoolID = $_GET['SchoolID'];
    $School = $_GET['School'];
    $Attainment = $_GET['EducAttainment'];
    $Course = $_GET['Course'];
    $GraduatedMonth = $_GET['GraduatedMonth'];
    $GraduatedYear = $_GET['GraduatedYear'];
    $Graduation = $GraduatedMonth . " " . $GraduatedYear;


    GSecureSQL::query(
        "UPDATE schooltbl SET School = ?, Attainment =?, Course = ?, Graduated = ? WHERE SchoolID = ? AND StudentID = ?",
        FALSE,
        "ssssss",
        $School,
        $Attainment,
        $Course,
        $Graduation,
        $SchoolID,
        $StudentID
    );
    echo "
         <script type='text/javascript'>
         location.href='../education.php?id=1';
         </script>
         ";
}

if (isset($_GET['Seminar'])) {
    $SeminarID = $_GET['SeminarID'];
    $Seminar = $_GET['Seminar'];
    $YearAttended = $_GET['YearAttended'];

    GSecureSQL::query(
        "UPDATE seminartbl SET Seminar = ?, YearAttended = ? WHERE SeminarID = ? AND StudentID = ?",
        FALSE,
        "ssss",
        $Seminar,
        $YearAttended,
        $Seminar,
        $StudentID
    );
    echo "
         <script type='text/javascript'>
         location.href='../education.php?id=2';
         </script>
         ";
}

if (isset($_GET['Certification'])) {
    $CertificationID = $_GET['CertificationID'];
    $Certification = $_GET['Certification'];
    $YearTaken = $_GET['YearTaken'];

    GSecureSQL::query(
        "UPDATE certificationtbl SET Certification = ?, YearTaken = ? WHERE CertificationID = ? AND StudentID = ?",
        FALSE,
        "ssss",
        $Certification,
        $YearTaken,
        $CertificationID,
        $StudentID
    );
    echo "
        <script type='text/javascript'>
        location.href='../certifications.php?id=1';
        </script>
        ";
}

if (isset($_GET['Achievement'])) {
    $AchievementID = $_GET['AchievementID'];
    $Achievement = $_GET['Achievement'];

    GSecureSQL::query(
        "UPDATE achievementstbl SET Achievements = ? WHERE AchievementID = ? AND StudentID = ?",
        FALSE,
        "sss",
        $Achievement,
        $AchievementID,
        $StudentID
    );
    echo "
        <script type='text/javascript'>
        location.href='../achievements.php?id=1';
        </script>
        ";
}

if (isset($_GET['ReferenceID'])) {
    $ReferenceID = $_GET['ReferenceID'];
    $Name = $_GET['Name'];
    $Relationship = $_GET['Relationship'];
    $Company = $_GET['Company'];
    $Position = $_GET['Position'];
    $Phone = $_GET['Phone'];
    $Email = $_GET['Email'];

    GSecureSQL::query(
        "UPDATE referencetbl SET Name = ?, Relationship = ?, Company = ?, Position = ?, Phone = ?, Email = ? WHERE ReferenceID = ? AND StudentID = ?",
        FALSE,
        "ssssssss",
        $Name,
        $Relationship,
        $Company,
        $Position,
        $Phone,
        $Email,
        $ReferenceID,
        $StudentID
    );
    echo "
        <script type='text/javascript'>
        location.href='../references.php?id=1';
        </script>
        ";
}

if (isset($_POST['Specialization'])) {
    $SID = $_POST['SpecializationID'];
    $Specialization = $_POST['Specialization'];
    $YearOfExperience = $_POST['YearsOfExperience'];

    GSecureSQL::query(
        "UPDATE specializationtbl SET Specialization = ?, YearOfExperience = ? WHERE SID = ? AND StudentID = ?",
        FALSE,
        "ssss",
        $Specialization,
        $YearOfExperience,
        $SID,
        $StudentID
    );
    echo "
            <script type='text/javascript'>
            location.href='../specialization-and-languages.php?id=1';
            </script>
            ";
}

if (isset($_POST['Language'])) {
    $LangID = $_POST['LangID'];
    $Language = $_POST['Language'];

    GSecureSQL::query(
        "UPDATE languagetbl SET Language = ? WHERE LangID = ? AND StudentID = ?",
        FALSE,
        "sss",
        $Language,
        $LangID,
        $StudentID
    );
    echo "
            <script type='text/javascript'>
            location.href='../specialization-and-languages.php?id=4';
            </script>
            ";

}
?>