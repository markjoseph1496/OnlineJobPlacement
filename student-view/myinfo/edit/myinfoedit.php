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
    $Graduation = $_GET['GraduatedYearFrom'] . " - " . $_GET['GraduatedYearTo'];

    $a = $Attainment == "High School Diploma";
    $a = $a || $Attainment == "Technical Vocational/Certificate";
    $a = $a || $Attainment == "Bachelor's/College Degree";
    $a = $a || $Attainment == "Post Graduate Diploma/Master's Degree";
    $a = $a || $Attainment == "Professional License (Passed Board/Bar/Professional License Exam)";
    $a = $a || $Attainment == "Doctorate Degree";

    if(!$a){
        header("location: edit-school.php?id=" . $_GET['SchoolID']);
        die();
    }

    if($Attainment != "High School Diploma"){
        $course_valid = GSecureSQL::query(
            "SELECT COUNT(*) AS `Count` FROM `coursetbl` WHERE `CourseCode` = ?", TRUE, "s", $Course
        );

        if($course_valid[0][0] == 0){
            header("location: edit-school.php?id=" . $_GET['SchoolID']);
            die();
        }
    }

    $a = FALSE;
    $b = FALSE;
    $date = Date("Y") + 15;
    while ($date != 1935) {
        $date--;
        $a = $a || $_GET['GraduatedYearFrom'] == $date;
        $b = $b || $_GET['GraduatedYearTo'] == $date;
    }

    if(!$a || !$b){
        header("location: edit-school.php?id=" . $_GET['SchoolID'] . "&error");
        die();
    }

    if(strlen($_GET['School']) === 0){
        header("location: edit-school.php?id=" . $_GET['SchoolID'] . "&error");
        die();
    }



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
    header("location: ../education.php?saved");

}

if (isset($_GET['Seminar'])) {
    $SeminarID = $_GET['SeminarID'];
    $Seminar = $_GET['Seminar'];
    $YearAttended = $_GET['YearAttended'];

    if(strlen($Seminar) === 0){
        header("location: edit-seminar.php?id=" . $SeminarID . "&error");
        die();
    }

    $date = Date("Y") + 15;
    $a = FALSE;
    while ($date != 1935) {
        $date--;
        $a = $a || $YearAttended == $date;
    }

    if(!$a){
        header("location: edit-seminar.php?id=" . $SeminarID . "&error");
        die();
    }

    GSecureSQL::query(
        "UPDATE seminartbl SET Seminar = ?, YearAttended = ? WHERE SeminarID = ? AND StudentID = ?",
        FALSE,
        "ssss",
        $Seminar,
        $YearAttended,
        $SeminarID,
        $StudentID
    );

    header("location: ../education.php?saved");
    die();
}

if (isset($_GET['Certification'])) {
    $CertificationID = $_GET['CertificationID'];
    $Certification = $_GET['Certification'];
    $YearTaken = $_GET['YearTaken'];

    if(strlen($Certification) === 0){
        header("Location: edit-certification.php?id=" . $CertificationID . "&error");
        die();
    }

    $date = Date("Y") + 1;
    $a = FALSE;
    while($date != 1935){
        $date--;
        $a = $a || $date == $YearTaken;
    }

    if(!$a){
        header("Location: edit-certification.php?id=" . $CertificationID . "&error");
        die();
    }

    GSecureSQL::query(
        "UPDATE certificationtbl SET Certification = ?, YearTaken = ? WHERE CertificationID = ? AND StudentID = ?",
        FALSE,
        "ssss",
        $Certification,
        $YearTaken,
        $CertificationID,
        $StudentID
    );
    header("location: ../certifications.php?saved");

}

if (isset($_GET['Achievement'])) {
    $AchievementID = $_GET['AchievementID'];
    $Achievement = $_GET['Achievement'];

    if(strlen($Achievement) === 0){
        header('Location: edit-achievement.php?id=' . $AchievementID . '&error');
        die();
    }

    GSecureSQL::query(
        "UPDATE achievementstbl SET Achievements = ? WHERE AchievementID = ? AND StudentID = ?",
        FALSE,
        "sss",
        $Achievement,
        $AchievementID,
        $StudentID
    );
    header("location: ../achievements.php?saved");

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
    header("location: ../references.php?saved");

}

if (isset($_POST['Skills'])) {
    $SID = $_POST['SpecializationID'];
    $YearsOfExperience = $_POST['YearsOfExperience'];
    $Proficiency = $_POST['rating'];
    $Skill = $_POST['Skills'];

    $a = is_numeric($YearsOfExperience) && $YearsOfExperience >= 0;
    if(!$a){
        header('Location: edit-specialization.php?error');
        die();
    }

    if(strlen($Skill) === 0){
        header('Location: edit-specialization.php?error');
        die();
    }

    $a = $Proficiency >= 1 && $Proficiency <= 5;
    if(!$a){
        header('Location: edit-specialization.php?error');
        die();
    }

    GSecureSQL::query(
        "UPDATE specializationtbl SET Skills = ?, YearOfExperience = ?, Proficiency = ? WHERE SID = ? AND StudentID = ?",
        FALSE,
        "sssss",
        $Skill,
        $YearsOfExperience,
        $Proficiency,
        $SID,
        $StudentID
    );
    header("location: ../skills-and-languages.php?saved");
    die();
}

if (isset($_POST['Language'])) {
    $LangID = $_POST['LangID'];
    $Language = $_POST['Language'];
    $WrittenProficiency = $_POST['WrittenProficiency'];
    $SpokenProficiency = $_POST['SpokenProficiency'];

    if(strlen($Language) === 0){
        header('Location: edit-language.php?id=' . $LangID . '&error');
        die();
    }

    $a = $WrittenProficiency >= 1 && $WrittenProficiency <= 5;
    if(!$a){
        header('Location: edit-language.php?id=' . $LangID . '&error');
        die();
    }

    $a = $SpokenProficiency >= 1 && $SpokenProficiency <= 5;
    if(!$a){
        header('Location: edit-language.php?id=' . $LangID . '&error');
        die();
    }

    GSecureSQL::query(
        "UPDATE languagetbl SET `Language` = ?, `WrittenProf` = ?, `SpokenProf` = ? WHERE LangID = ? AND StudentID = ?",
        FALSE,
        "sssss",
        $Language,
        $WrittenProficiency,
        $SpokenProficiency,
        $LangID,
        $StudentID
    );
    header("location: ../skills-and-languages.php?saved");

}