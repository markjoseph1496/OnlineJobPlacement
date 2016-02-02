<?php
include('../connection.php');
session_start();
$CompanyID = $_SESSION['CompanyID'];

// Create Calendar Event
if (isset($_GET['BtnCalendarsave'])) {

    $datefrom = $_GET['datefrom'];
    $dateto = $_GET['dateto'];
    $eventtitle = $_GET['eventtitle'];
    $location = $_GET['location'];
    $descrip = $_GET['descrip'];

    GSecureSQL::query(
        "INSERT INTO compeventtbl (CompanyID,EventTitle,EventDatef,EventDatet,Location,Description) values (?,?,?,?,?,?)",
        FALSE,
        "ssssss",
        $CompanyID,
        $eventtitle,
        $datefrom,
        $dateto,
        $location,
        $descrip
    );
    header("location: company-calendar.php?id=EventAdd");

}
// End of Calendar Event


// Create Position
if (isset($_GET['btnsave'])) {
    $DateFrom = $_GET['DateFrom'];
    $DateTo = $_GET['DateTo'];
    $PTitle = $_GET['PTitle'];
    $PLevel = $_GET['PLevel'];
    $JobDesc = $_GET['JobDesc'];
    $Specialization = $_GET['Specialization'];
    $EType = $_GET['EType'];
    $AvPosition = $_GET['AvPosition'];
    $Salary = $_GET['Salary'];
    $YExperience = $_GET['YExperience'];
    $RelatedCourses = $_GET['RelatedCourses'];
    $DegreeLevel = $_GET['DegreeLevel'];
    $RequiredSkills = $_GET['knowledge'];
    $Language = $_GET['language'];

    $RelatedCourses = implode(", ", $RelatedCourses);
    $DegreeLevel = implode(", ", $DegreeLevel);
    $RequiredSkills = implode(", ", $RequiredSkills);
    $Language = implode(", ", $Language);

    GSecureSQL::query(
        "INSERT INTO comppositiontbl (CompanyID,PostingDateFrom,PostingDateTo,PositionTitle,PositionLevel,JobDescription,JSpecialization,EType,AvPosition,MonthlySalary,YExperience,RelatedCourses,DegreeLevel,Reqskills,Languages) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
        FALSE,
        "sssssssssssssss",
        $CompanyID,
        $DateFrom,
        $DateTo,
        $PTitle,
        $PLevel,
        $JobDesc,
        $Specialization,
        $EType,
        $AvPosition,
        $Salary,
        $YExperience,
        $RelatedCourses,
        $DegreeLevel,
        $RequiredSkills,
        $Language
    );

    header("location: company-positionlist.php?id=1");

}
// End of Create Position


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $RID = $_GET['rid'];

    if ($id == 1) {
        GSecureSQL::query(
            "UPDATE requesttocompanytbl SET Status = 'Accepted' WHERE RID = ?",
            FALSE,
            "s",
            $RID
        );
        header("location: company-pendingapplicants.php?id=1");

    } elseif ($id == 2) {
        GSecureSQL::query(
            "UPDATE requesttocompanytbl SET Status = 'Rejected' WHERE RID = ?",
            FALSE,
            "s",
            $RID
        );
        header("location: company-pendingapplicants.php?id=2");
    }

}
if (isset($_POST['CourseCheckbox'])) {
    $Course = $_POST['CourseCheckbox'];
    $Course = implode(", ", $Course);
    $DateRequested = date("Y-m-d");

    GSecureSQL::query(
        "INSERT INTO logrequesttbl (CompanyID,Course,Status,DateRequested) values (?,?,'Pending',?)",
        FALSE,
        "sss",
        $CompanyID,
        $Course,
        $DateRequested
    );
    header("location: company.php?id=2");

}

// Update ng Info ng Company
if (isset($_GET['btnSaveSetting'])) {
    $CompanyName = $_GET['CompanyName'];
    $Description = $_GET['Description'];
    $Industry = $_GET['industry'];
    $Address = $_GET['Address'];
    $City = $_GET['City'];
    $Postal = $_GET['Postal'];
    $MobileNum = $_GET['MobileNum'];
    $PhoneNum = $_GET['PhoneNum'];
    $Fax = $_GET['Fax'];

    GSecureSQL::query(
        "UPDATE companyinfotbl SET CompanyName = ?, Description = ?, Industry = ?, Address = ?, City = ?, Postal = ?, MobileNum = ?, PhoneNum = ?, Fax = ? WHERE CompanyID = ?",
        FALSE,
        "ssssssssss",
        $CompanyName,
        $Description,
        $Industry,
        $Address,
        $City,
        $Postal,
        $MobileNum,
        $PhoneNum,
        $CompanyID
    );
    header("location: company-settings.php?id=1");
}

//Update ng info ng User ni Company
if (isset($_GET['btnsaveuser'])) {
    $FirstName = $_GET['FirstName'];
    $MiddleName = $_GET['MiddleName'];
    $LastName = $_GET['LastName'];
    $Position = $_GET['Position'];
    $Department = $_GET['Department'];

    GSecureSQL::query(
        "UPDATE companyinfotbl SET FirstName = ?, MiddleName = ?, LastName = ?, Position = ?, Department = ? WHERE CompanyID = ?",
        FALSE,
        "ssssss",
        $FirstName,
        $MiddleName,
        $LastName,
        $Position,
        $Department,
        $CompanyID
        );
        header("location: company-settingsaccount.php?id=AccountEdit");
}