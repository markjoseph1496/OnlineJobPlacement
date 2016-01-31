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
    /*$StudentID = $_POST['StudentID'];*/
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

    $Password = "1";

    $FirstName = ucwords(strtolower($FirstName));
    $LastName = ucwords(strtolower($LastName));

    $salt = hash('sha512', mt_rand(0, PHP_INT_MAX) . mt_rand(0, PHP_INT_MAX) . mt_rand(0, PHP_INT_MAX));
    $Password = hash('sha512', $Password . $salt);

    $yeargraduated = $GraduatedMonth . " " . $GraduatedYear;
    $EducAttain = mysql_real_escape_string($EducAttain);

    GSecureSQL::query(
        "INSERT INTO studentinfotbl (FirstName,LastName,Birthday,Password,SaltedPassword,MajorCourse) values (?,?,?,?,?,?)",
        FALSE,
        "ssssss",
        $FirstName,
        $LastName,
        $Birthday,
        $Password,
        $salt,
        $Course

        );

    $getstudid =
        GSecureSQL::query(
            "SELECT StudentID FROM studentinfotbl ORDER BY StudentID DESC LIMIT 1",
            TRUE
        );
    $StudentID = $getstudid[0][0] + 1;

    GSecureSQL::query(
        "INSERT INTO schooltbl (StudentID,School,Attainment,Course,Graduated) values (?,?,?,?,?)",
        FALSE,
        "sssss",
        $StudentID,
        $School,
        $Attainment,
        $Course,
        $Graduated

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