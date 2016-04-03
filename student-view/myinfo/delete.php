<?php
include('../../connection.php');
session_start();
include('../../common-functions.php');
$common_functions->student_login_check();
$StudentID = $_SESSION['StudentID']; // to conform with your coding style -- ghabx

if (isset($_GET['delete_URLID'])) {
    $Z = $_GET['delete_URLID'];

    GSecureSQL::query(
        "DELETE FROM urltbl WHERE URLID=?",
        FALSE,
        "s",
        $Z
    );
    header("location: portfolio.php?id=URLDeleted");

}

if (isset($_GET['delete_SchoolID'])) {
    $Z = $_GET['delete_SchoolID'];

    GSecureSQL::query(
        "DELETE FROM schooltbl WHERE SchoolID=?",
        FALSE,
        "s",
        $Z
    );
    header("location: education.php?id=3");

}

if (isset($_GET['delete_SeminarID'])) {
    $Z = $_GET['delete_SeminarID'];


    GSecureSQL::query(
        "DELETE FROM seminartbl WHERE SeminarID=?",
        FALSE,
        "s",
        $Z
    );
    header("location: education.php?id=6");

}
if (isset($_GET['delete_CertificationID'])) {
    $Z = $_GET['delete_CertificationID'];

    GSecureSQL::query(
        "DELETE FROM certificationtbl WHERE CertificationID=?",
        FALSE,
        "s",
        $Z
    );
    header("location: certifications.php?id=3");

}

if (isset($_GET['delete_AchievementID'])) {
    $Z = $_GET['delete_AchievementID'];

    GSecureSQL::query(
        "DELETE FROM achievementstbl WHERE AchievementID=?",
        FALSE,
        "s",
        $Z
    );
    header("location: achievements.php?id=3");

}

if (isset($_GET['delete_ReferenceID'])) {
    $Z = $_GET['delete_ReferenceID'];

    GSecureSQL::query(
        "DELETE FROM referencetbl WHERE ReferenceID=?",
        FALSE,
        "s",
        $Z
    );
    header("location: references.php?id=3");

}

if (isset($_GET['delete_SID'])) {
    $id = $_GET['delete_SID'];

    GSecureSQL::query(
        "DELETE FROM specializationtbl WHERE SID = ?",
        FALSE,
        "s",
        $id
    );
    header("location: skills-and-languages.php?id=3");

}

if (isset($_GET['delete_LangID'])) {
    $id = $_GET['delete_LangID'];

    GSecureSQL::query(
        "DELETE FROM languagetbl WHERE LangID = ?",
        FALSE,
        "s",
        $id
    );
    header("location: skills-and-languages.php?id=6");

}
if (isset($_GET['Delete_DocID'])){
    $id = $_GET['Delete_DocID'];

    GSecureSQL::query(
        "DELETE FROM documentstbl WHERE id = ?",
        FALSE,
        "s",
        $id
    );
}

//Delete Work
if (isset($_GET['Delete_WorkID'])) {
    $Z = $_GET['Delete_WorkID'];

    GSecureSQL::query(
        "DELETE FROM workexperiencetbl WHERE WorkID=?",
        FALSE,
        "s",
        $Z
    );
    header("location: company-positionlist.php?id=3");

}
//end