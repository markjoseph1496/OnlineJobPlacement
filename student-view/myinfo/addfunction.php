<?php
include('../../connection.php');
session_start();
include('../../common-functions.php');
$common_functions->student_login_check();
$StudentID = $_SESSION['StudentID']; // to conform with your coding style -- ghabx
if (isset($_POST['btnSaveInfo'])) {
    $FirstName = $_POST['FirstName'];
    $MiddleName = $_POST['MiddleName'];
    $LastName = $_POST['LastName'];
    $Gender = $_POST['Gender'];
    $Birthdate = $_POST['Birthdate'];
    $Nationality = $_POST['Nationality'];
    $CivilStatus = $_POST['CivilStatus'];
    $FBLink = $_POST['FBLink'];

    $FBLink = "http://www.facebook.com/" . $FBLink;


    $validation_config = array(
        'FirstName' => array(
            'pattern' => '/^([a-zA-Z]+[ ]*)+$/',
            'errorMsg' => 'Invalid First name'
        ),
        'LastName' => array(
            'pattern' => '/^([a-zA-Z]+[ ]*)+$/',
            'errorMsg' => 'Invalid Last name'
        ),
        'Gender' => array(
            'pattern' => '/^(Male|Female)$/',
            'errorMsg' => 'Invalid Gender'
        ),
        'Nationality' => array(
            'pattern' => $common_functions->get_regex_of_nationalities(),
            'errorMsg' => 'Invalid Nationality'
        ),
        'CivilStatus' => array(
            'pattern' => '/^(Single|Married|Separated|Widowed)$/',
            'errorMsg' => 'Invalid Civil Status'
        )
    );


    $validation_return = $common_functions->validate($_POST, $validation_config);
    if($validation_return['hasError']){
        header("location: personal-info.php?error");
        die();
    }

    if(!$common_functions->date_validator($_POST['Birthdate'])){
        header("location: personal-info.php?error");
        die();
    }

    GSecureSQL::query(
        "UPDATE studentinfotbl SET FirstName = ?, MiddleName = ?, LastName = ?, Gender = ?, Birthdate = ?, Nationality = ?, CivilStatus = ?, FBLink = ? WHERE StudentID = ?",
        FALSE,
        "sssssssss",
        $FirstName,
        $MiddleName,
        $LastName,
        $Gender,
        $Birthdate,
        $Nationality,
        $CivilStatus,
        $FBLink,
        $StudentID
    );

    GSecureSQL::query(
        "UPDATE progresstbl SET Pinfo = 'ok' WHERE StudentID = ?",
        FALSE,
        "s",
        $StudentID
    );


    //start upload
    $fileToUpload = basename($_FILES["ProfilePicture"]["name"]);
    $target_dir = "ProfileImages/";
    $target_file = $target_dir . $StudentID . ".jpg";
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, PNG files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";

    } else {
        if (move_uploaded_file($_FILES["ProfilePicture"]["tmp_name"], $target_file)) {

            GSecureSQL::query(
                "UPDATE studentinfotbl SET ProfileImage = ? WHERE StudentID = ?",
                FALSE,
                "ss",
                $target_file,
                $StudentID
            );
            header("location: personal-info.php");

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    // end upload

    header("location: personal-info.php?saved");

}

if (isset($_GET['btnSaveContactInfo'])) {
    $Email = $_GET['Email'];
    $MobileNumber = $_GET['MobileNumber'];
    $HomeNumber = $_GET['HomeNumber'];
    $WorkNumber = $_GET['WorkNumber'];
    $Address = $_GET['Address'];
    $City = $_GET['City'];
    $PostalCode = $_GET['PostalCode'];


    $validation_config = array(
        'Email' => array(
            'pattern' => '/^[a-z0-9\.-_]+@[a-z0-9\.-_]+(\.com|\.org|\.net|\.int|\.edu|\.gov|\.mil|\.[a-z]{2})$/i',
            'errorMsg' => 'Invalid Email'
        ),
        'MobileNumber' => array(
            'pattern' => '/^(0(9(05|06|07|08|09|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|32|33|34|35|36|37|38|39|42|43|46|47|48|49|75|77|89|94|96|97|98)[0-9]{7}|[0-8][0-9]{5})|[1-9][0-9]{6})$/',
            'errorMsg' => 'Invalid Mobile Number'
        ),
        'Address' => array(
            'pattern' => '/^.+$/',
            'errorMsg' => 'Address cannot be empty'
        ),
        'City' => array(
            'pattern' => $common_functions->get_regex_of_cities(),
            'errorMsg' => 'Invalid City'
        )
/*
        'HomeNumber' => array(
            'pattern' => '/(^(0(9(05|06|07|08|09|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|32|33|34|35|36|37|38|39|42|43|46|47|48|49|75|77|89|94|96|97|98)[0-9]{7}|[0-8][0-9]{5})|[1-9][0-9]{6})$|^$)/',
            'errorMsg' => 'Invalid Home Number'
        ),
        'WorkNumber' => array(
            'pattern' => '/(^(0(9(05|06|07|08|09|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|32|33|34|35|36|37|38|39|42|43|46|47|48|49|75|77|89|94|96|97|98)[0-9]{7}|[0-8][0-9]{5})|[1-9][0-9]{6})$|^$)/',
            'errorMsg' => 'Invalid Work Number'
        ),
 */
    );

    $validation_return = $common_functions->validate($_GET, $validation_config);
    if($validation_return['hasError']){
        die();
        header("location: contacts-info.php?error");
    }

    GSecureSQL::query(
        "UPDATE studcontactstbl SET Email = ?, MobileNumber = ?, HomeNumber = ?, WorkNumber = ?, Address = ?, City = ?, PostalCode = ? WHERE StudentID = ?",
        FALSE,
        "ssssssss",
        $Email,
        $MobileNumber,
        $HomeNumber,
        $WorkNumber,
        $Address,
        $City,
        $PostalCode,
        $StudentID

    );

    GSecureSQL::query(
        "UPDATE progresstbl SET Cinfo = 'ok' WHERE StudentID = ?",
        FALSE,
        "s",
        $StudentID
    );

    header("location: contacts-info.php?saved");

}


if(isset($_POST['Objective'])){
    $Objective = $_POST['Objective'];

    GSecureSQL::query(
        "UPDATE studentinfotbl SET Objectives = ? WHERE StudentID = ?",
        FALSE,
        "ss",
        $Objective,
        $StudentID
    );

    GSecureSQL::query(
        "UPDATE progresstbl SET Objective = 'ok' WHERE StudentID = ?",
        FALSE,
        "s",
        $StudentID
    );

    header("location: work.php");
}