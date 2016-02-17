<?php
include('../../../connection.php');
session_start();
include('../../../common-functions.php');
$common_functions->student_login_check();
$StudentID = $_SESSION['StudentID']; // to conform with your coding style -- ghabx


$StudentID = $_SESSION['StudentID'];

if (isset($_GET['School'])) {
    $School = $_GET['School'];
    $Attainment = $_GET['EducAttainment'];
    $Course = $_GET['Course'];
    $txtCourse = $_GET['txtCourse'];
    $GraduatedYearFrom = $_GET['GraduatedYearFrom'];
    $GraduatedYearTo = $_GET['GraduatedYearTo'];
    $Graduation = $GraduatedYearFrom . " - " . $GraduatedYearTo;

    if($Course=="other"){
        $Course = $txtCourse;
    }

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

    GSecureSQL::query(
        "UPDATE progresstbl SET School = 'ok' WHERE StudentID = ?",
        FALSE,
        "s",
        $StudentID
    );

    header("location: ../education.php?id=4");

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

    GSecureSQL::query(
        "UPDATE progresstbl SET Seminar = 'ok' WHERE StudentID = ?",
        FALSE,
        "s",
        $StudentID
    );

    header("location: ../education.php?id=5");

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

    GSecureSQL::query(
        "UPDATE progresstbl SET Certification = 'ok' WHERE StudentID = ?",
        FALSE,
        "s",
        $StudentID
    );

    header("location: ../certifications.php?id=2");

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

    GSecureSQL::query(
        "UPDATE progresstbl SET Achievements = 'ok' WHERE StudentID = ?",
        FALSE,
        "s",
        $StudentID
    );

    header("location: ../achievements.php?id=2");

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

    GSecureSQL::query(
        "UPDATE progresstbl SET _References= 'ok' WHERE StudentID = ?",
        FALSE,
        "s",
        $StudentID
    );

    header("location: ../references.php?id=2");

}
if (isset($_POST['Specialization'])) {
    $Specialization = $_POST['Specialization'];
    $YearsOfExperience = $_POST['YearsOfExperience'];
    $Proficiency = $_POST['rating'];
    $Skill = $_POST['Skill'];

    GSecureSQL::query(
        "INSERT INTO specializationtbl (StudentID, Specialization, YearOfExperience, Proficiency, Skills) values (?,?,?,?,?)",
        FALSE,
        "sssss",
        $StudentID,
        $Specialization,
        $YearsOfExperience,
        $Proficiency,
        $Skill
    );

    GSecureSQL::query(
        "UPDATE progresstbl SET Specialization = 'ok' WHERE StudentID = ?",
        FALSE,
        "s",
        $StudentID
    );

    header("location: ../skills-and-languages.php?id=2");

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

    GSecureSQL::query(
        "UPDATE progresstbl SET Languages = 'ok' WHERE StudentID = ?",
        FALSE,
        "s",
        $StudentID
    );

    header("location: ../skills-and-languages.php?id=5");

}
if (isset($_POST['CompanyName'])) {
    $CompanyName = $_POST['CompanyName'];
    $CompanyWebsite = $_POST['CompanyWebsite'];
    $Industry = $_POST['Industry'];
    $DateFromMonth = $_POST['FromMonth'];
    $DateFromYear = $_POST['FromYear'];
    $DateToMonth = $_POST['ToMonth'];
    $DateToYear = $_POST['ToYear'];
    $PositionLevel = $_POST['PositionLevel'];
    $WorkSpecialization = $_POST['WorkSpecialization'];
    $MonthlySalary = $_POST['MonthlySalary'];
    $NatureOfWork = $_POST['NatureOfWork'];

    if(isset($_POST['Duration'])){
        $Duration = $_POST['Duration'];
        if($Duration == "on"){
            $DateToYear = "Current";
        }
    }
    GSecureSQL::query(
        "INSERT INTO workexperiencetbl (StudentID, CompanyName, CompanyWebsite, Industry, DateFromMonth, DateFromYear, DateToMonth, DateToYear, PositionLevel, Specialization, MonthlySalary, NatureOfWork) value (?,?,?,?,?,?,?,?,?,?,?,?)",
        FALSE,
        "ssssssssssss",
        $StudentID,
        $CompanyName,
        $CompanyWebsite,
        $Industry,
        $DateFromMonth,
        $DateFromYear,
        $DateToMonth,
        $DateToYear,
        $PositionLevel,
        $WorkSpecialization,
        $MonthlySalary,
        $NatureOfWork
    );

    GSecureSQL::query(
        "UPDATE progresstbl SET WorkXP = 'ok' WHERE StudentID = ?",
        FALSE,
        "s",
        $StudentID
    );

    header("location: ../work.php?id=1");

}