<?php
include('connection.php');

if (isset($_POST['type'])) {
    $isAvailable = true;
    $StudentID = $_POST['StudentID'];
    $Result =
        GSecureSQL::query(
            "SELECT StudentID FROM studentinfotbl WHERE StudentID = ?",
            TRUE,
            "s",
            $StudentID
        );

    if (count($Result) == 0) {
        $isAvailable = true;
    } else {
        $isAvailable = false;
    }
    echo json_encode(array(
        'valid' => $isAvailable,
    ));
}

if (isset($_POST['resumelink'])) {
    $StudentID = $_POST['StudentID'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Birthday = $_POST['Birthday'];
    $MobileNumber = $_POST['MobileNumber'];
    $Email = $_POST['Email'];
    $Password = $_POST['_Password'];
    $City = $_POST['City'];
    $EducAttain = $_POST['EducAttain'];
    $Course = $_POST['Course'];
    $GraduatedMonth = $_POST['GraduatedMonth'];
    $GraduatedYear = $_POST['GraduatedYear'];

    $FirstName = ucwords(strtolower($FirstName));
    $LastName = ucwords(strtolower($LastName));

    $salt = hash('sha512', mt_rand(0, PHP_INT_MAX) . mt_rand(0, PHP_INT_MAX) . mt_rand(0, PHP_INT_MAX));
    $Password = hash('sha512', $Password . $salt);

    $yeargraduated = $GraduatedMonth . " " . $GraduatedYear;

    GSecureSQL::query(
        "INSERT INTO studentinfotbl (StudentID,FirstName,LastName,Birthdate,Password,SaltedPassword,MajorCourse) values (?,?,?,?,?,?,?)",
        FALSE,
        "sssssss",
        $StudentID,
        $FirstName,
        $LastName,
        $Birthday,
        $Password,
        $salt,
        $Course
        );

    GSecureSQL::query(
        "INSERT INTO schooltbl (StudentID,School,Attainment,Course,Graduated,_Default) values (?,'STI College Caloocan',?,?,?,'1')",
        FALSE,
        "ssss",
        $StudentID,
        $EducAttain,
        $Course,
        $yeargraduated
        );

    GSecureSQL::query(
        "INSERT INTO studcontactstbl (StudentID,Email,MobileNumber,City) values (?,?,?,?)",
        FALSE,
        "ssss",
        $StudentID,
        $Email,
        $MobileNumber,
        $City
        );

    header("location: registration.php");

    }
?>