<?php
include('../../connection.php');
include('../../common-functions.php');
include('../../encryption.php');
session_start();
$common_functions->student_login_check();
$StudentID = $_SESSION['StudentID'];

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

if (isset($_POST['EditCertification'])) {
    $CertificationID = $_POST['EditCertificationID'];
    $Certification = $_POST['EditCertification'];
    $YearTaken = $_POST['EditYearTaken'];

    $CertificationID = encrypt_decrypt("decrypt", $CertificationID);

    if(strlen($Certification) === 0){
        header("Location: certification.php?error");
        die();
    }

    $date = Date("Y") + 1;
    $a = FALSE;
    while($date != 1935){
        $date--;
        $a = $a || $date == $YearTaken;
    }

    if(!$a){
        header("Location: certification.php?error");
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
    header("location: certifications.php?saved");

}

if (isset($_POST['EditAchievementID'])) {
    $AchievementID = $_POST['EditAchievementID'];
    $Achievement = $_POST['EditAchievement'];

    $AchievementID = encrypt_decrypt("decrypt", $AchievementID);
    if(strlen($Achievement) === 0){
        header('Location: achievements.php?error');
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
    header("location: achievements.php?saved");

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

if (isset($_POST['EditCompanyName'])) {
    $CompanyName = $_POST['EditCompanyName'];
    $CompanyAddress = $_POST['EditCompanyAddress'];
    $Industry = $_POST['EditIndustry'];
    $DateFromMonth = $_POST['EditFromMonth'];
    $DateFromYear = $_POST['EditFromYear'];
    $DateToMonth = $_POST['EditToMonth'];
    $DateToYear = $_POST['EditToYear'];
    $PositionLevel = $_POST['EditPositionLevel'];
    $WorkSpecialization = $_POST['EditWorkSpecialization'];
    $MonthlySalary = $_POST['EditMonthlySalary'];
    $NatureOfWork = $_POST['EditNatureOfWork'];

    if (isset($_POST['EditDuration'])) {
        $Duration = $_POST['EditDuration'];
        if ($Duration == "on") {
            $DateToYear = "Current";
        }
    }

    $validation_config = array(
        'EditCompanyName' => array(
            'pattern' => '/^.+$/',
            'errorMsg' => 'Company name is required'
        ),
        'EditCompanyAddress' => array(
            'pattern' => '/(^$|^(http|https):\/\/.+\..+$)/i',
            'errorMsg' => 'Company address is required'
        ),
        'EditMonthlySalary' => array(
            'pattern' => $common_functions->get_regex_of_monthly_salary(),
            'errorMsg' => 'Invalid Money Salary'
        ),
        'EditFromMonth' => array(
            'pattern' => '/^(0[1-9]|1[0-2])$/',
            'errorMsg' => 'Invalid Month'
        ),
        'EditFromYear' => array(
            'pattern' => '/^(19(3[5-9]|[4-9][0-9])|2[0-9][0-9][0-9])$/',
            'errorMsg' => 'Invalid Year'
        ),
        'EditToMonth' => array(
            'pattern' => '/^(0[1-9]|1[0-2])$/',
            'errorMsg' => 'Invalid Month'
        ),
        'EditToYear' => array(
            'pattern' => '/^(19(3[5-9]|[4-9][0-9])|2[0-9][0-9][0-9])$/',
            'errorMsg' => 'Invalid Year'
        )
    );

    $validation_return = $common_functions->validate($_POST, $validation_config);
    if ($validation_return['hasError']) {

    }

    if ($DateToYear !== 'Current') {
        if ($_POST['EditToYear'] === $_POST['EditFromYear']) {
            if ($_POST['EditFromMonth'] > $_POST['EditToMonth']) {
                die('Invalid month.');
            }
        }
    }

    GSecureSQL::query(
        "UPDATE workexperiencetbl SET StudentID = ?, CompanyName = ?, CompanyAddress = ?, Industry = ?, DateFromMonth = ?, DateFromYear = ?, DateToMonth = ?, DateToYear = ?, PositionLevel = ?, Specialization = ?, MonthlySalary = ?, NatureOfWork = ? WHERE StudentID = ?",
        FALSE,
        "sssssssssssss",
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
        $NatureOfWork,
        $StudentID
    );

    GSecureSQL::query(
        "UPDATE progresstbl SET WorkXP = 'ok' WHERE StudentID = ?",
        FALSE,
        "s",
        $StudentID
    );

    header("location: work.php?saved");
}