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

    $a = $Attainment == "High School Diploma";
    $a = $a || $Attainment == "Technical Vocational/Certificate";
    $a = $a || $Attainment == "Bachelor's/College Degree";
    $a = $a || $Attainment == "Post Graduate Diploma/Master's Degree";
    $a = $a || $Attainment == "Professional License (Passed Board/Bar/Professional License Exam)";
    $a = $a || $Attainment == "Doctorate Degree";

    if(!$a){
        header("location: add-school.php?error");
        die();
    }

    if($Attainment != "High School Diploma"){
        $course_valid = GSecureSQL::query(
            "SELECT COUNT(*) AS `Count` FROM `coursetbl` WHERE `CourseCode` = ?", TRUE, "s", $Course
        );

        if($course_valid[0][0] == 0 && $Course != "other"){
            header("location: add-school.php?error");
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
        header("location: add-school.php?error");
        die();
    }

    if(strlen($_GET['School']) === 0){
        header("location: add-school.php?error");
        die();
    }

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

    if(strlen($Seminar) === 0){
        header("location: add-seminar.php?error");
        die();
    }

    $date = Date("Y") + 15;
    $a = FALSE;
    while ($date != 1935) {
        $date--;
        $a = $a || $YearAttended == $date;
    }

    if(!$a){
        header("location: add-seminar.php?error");
        die();
    }

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

    if(strlen($Certification) === 0){
        header("Location: add-certification.php?error");
        die();
    }

    $date = Date("Y") + 1;
    $a = FALSE;
    while($date != 1935){
        $date--;
        $a = $a || $date == $YearTaken;
    }

    if(!$a){
        header("Location: add-certification.php?error");
        die();
    }

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

    if(strlen($Achievement) === 0){
        header('Location: add-achievement.php?error');
        die();
    }

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

    $validation_config = array(
        'Email' => array(
            'pattern' => '/^[a-z0-9\.-_]+@[a-z0-9\.-_]+(\.com|\.org|\.net|\.int|\.edu|\.gov|\.mil|\.[a-z]{2})$/i',
            'errorMsg' => 'Invalid Email'
        ),
        'MobileNumber' => array(
            'pattern' => '/^(0(9(05|06|07|08|09|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|32|33|34|35|36|37|38|39|42|43|46|47|48|49|75|77|89|94|96|97|98)[0-9]{7}|[0-8][0-9]{5})|[1-9][0-9]{6})$/',
            'errorMsg' => 'Invalid Mobile Number'
        ),
        'HomeNumber' => array(
            'pattern' => '/(^(0(9(05|06|07|08|09|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|32|33|34|35|36|37|38|39|42|43|46|47|48|49|75|77|89|94|96|97|98)[0-9]{7}|[0-8][0-9]{5})|[1-9][0-9]{6})$|^$)/',
            'errorMsg' => 'Invalid Home Number'
        ),
        'WorkNumber' => array(
            'pattern' => '/(^(0(9(05|06|07|08|09|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|32|33|34|35|36|37|38|39|42|43|46|47|48|49|75|77|89|94|96|97|98)[0-9]{7}|[0-8][0-9]{5})|[1-9][0-9]{6})$|^$)/',
            'errorMsg' => 'Invalid Work Number'
        ),
        'Address' => array(
            'pattern' => '/^.+$/',
            'errorMsg' => 'Address cannot be empty'
        ),
        'City' => array(
            'pattern' => $common_functions->get_regex_of_cities(),
            'errorMsg' => 'Invalid City'
        ),

        'PostalCode' => array(
            'pattern' => '/^[0-9]+$/',
            'errorMsg' => 'Invalid Postal Code'
        )

    );

    $validation_return = $common_functions->validate($_GET, $validation_config);
    if($validation_return['hasError']){
        header("location: add-reference.php?error");
        die();
    }

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
if (isset($_POST['Skill'])) {
    $YearsOfExperience = $_POST['YearsOfExperience'];
    $Proficiency = $_POST['rating'];
    $Skill = $_POST['Skill'];

    $a = is_numeric($YearsOfExperience) && $YearsOfExperience >= 0;
    if(!$a){
        header('Location: add-specialization.php?error');
        die();
    }

    if(strlen($Skill) === 0){
        header('Location: add-specialization.php?error');
        die();
    }

    $a = $Proficiency >= 1 && $Proficiency <= 5;
    if(!$a){
        header('Location: add-specialization.php?error');
        die();
    }

    GSecureSQL::query(
        "INSERT INTO specializationtbl (StudentID, YearOfExperience, Proficiency, Skills) values (?,?,?,?)",
        FALSE,
        "ssss",
        $StudentID,
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
    $WrittenProficiency = $_POST['WrittenProficiency'];
    $SpokenProficiency = $_POST['SpokenProficiency'];

    if(strlen($Language) === 0){
        header('Location: add-language.php?error');
        die();
    }

    $a = $WrittenProficiency >= 1 && $WrittenProficiency <= 5;
    if(!$a){
        header('Location: add-language.php?error');
        die();
    }

    $a = $SpokenProficiency >= 1 && $SpokenProficiency <= 5;
    if(!$a){
        header('Location: add-language.php?error');
        die();
    }

    GSecureSQL::query(
        "INSERT INTO languagetbl (StudentID, `Language`, WrittenProf, SpokenProf) values (?,?,?,?)",
        FALSE,
        "ssss",
        $StudentID,
        $Language,
        $WrittenProficiency,
        $SpokenProficiency
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
    $CompanyAddress = $_POST['CompanyAddress'];
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

    $validation_config = array(
        'CompanyName' => array(
            'pattern' => '/^.+$/',
            'errorMsg' => 'Company name is required'
        ),
        'CompanyAddress' => array(
            'pattern' => '/(^$|^(http|https):\/\/.+\..+$)/i',
            'errorMsg' => 'Company address is required'
        ),
        'MonthlySalary' => array(
            'pattern' => $common_functions->get_regex_of_monthly_salary(),
            'errorMsg' => 'Invalid Money Salary'
        ),
        'FromMonth' => array(
            'pattern' => '/^(0[1-9]|1[0-2])$/',
            'errorMsg' => 'Invalid Month'
        ),
        'FromYear' => array(
            'pattern' => '/^(19(3[5-9]|[4-9][0-9])|2[0-9][0-9][0-9])$/',
            'errorMsg' => 'Invalid Year'
        ),
        'ToMonth' => array(
            'pattern' => '/^(0[1-9]|1[0-2])$/',
            'errorMsg' => 'Invalid Month'
        ),
        'ToYear' => array(
            'pattern' => '/^(19(3[5-9]|[4-9][0-9])|2[0-9][0-9][0-9])$/',
            'errorMsg' => 'Invalid Year'
        )
    );

    $validation_return = $common_functions->validate($_POST, $validation_config);
    if($validation_return['hasError']){
        
    }

    if($DateToYear !== 'Current'){
        if($_POST['ToYear'] === $_POST['FromYear']){
            if($_POST['FromMonth'] > $_POST['ToMonth']){
                die('Invalid month.');
            }
        }
    }

    GSecureSQL::query(
        "INSERT INTO workexperiencetbl (StudentID, CompanyName, CompanyAddress, Industry, DateFromMonth, DateFromYear, DateToMonth, DateToYear, PositionLevel, Specialization, MonthlySalary, NatureOfWork) value (?,?,?,?,?,?,?,?,?,?,?,?)",
        FALSE,
        "ssssssssssss",
        $StudentID,
        $CompanyName,
        $CompanyAddress,
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