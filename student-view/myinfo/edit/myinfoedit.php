<?php
include('../../../connection.php');
session_start();
include('../../../common-functions.php');
$common_functions->student_login_check();
$StudentID = $_SESSION['StudentID']; // to conform with your coding style -- ghabx

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
    header("location: ../education.php?id=1");

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
    header("location: ../education.php?id=2");

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
    header("location: ../certifications.php?id=1");

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
    header("location: ../achievements.php?id=1");

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
    header("location: ../references.php?id=1");

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
    header("location: ../skills-and-languages.php?id=1");

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
    header("location: ../skills-and-languages.php?id=4");

}