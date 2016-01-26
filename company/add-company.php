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
    $PLevel = $_GET['PLevel'];
    $JobDesc = $_GET['JobDesc'];
    $Specialization = $_GET['Specialization'];
    $EType = $_GET['EType'];
    $AvPosition = $_GET['AvPosition'];
    $Salary = $_GET['Salary'];
    $YExperience = $_GET['YExperience'];

    GSecureSQL::query(
        "INSERT INTO comppositiontbl (CompanyID,PostingDateFrom,PostingDateTo,PositionLevel,JobDescription,JSpecialization,EType,AvPosition,MonthlySalary,YExperience) VALUES (?,?,?,?,?,?,?,?,?,?)",
        FALSE,
        "ssssssssss",
        $CompanyID,
        $DateFrom,
        $DateTo,
        $PLevel,
        $JobDesc,
        $Specialization,
        $EType,
        $AvPosition,
        $Salary,
        $YExperience
    );

    $position_tbl =
        GSecureSQL::query(
            "SELECT MAX(PositionID) AS `index` FROM comppositiontbl",
            TRUE
        );
    $PositionID = $position_tbl[0][0];

    foreach ($_GET['training'] as $training) {

        GSecureSQL::query(
            "INSERT INTO comptrainingtbl (CompanyID,PositionID,Training) VALUES (?,?,?)",
            FALSE,
            "sss",
            $CompanyID,
            $PositionID,
            $training
        );
    }
    foreach ($_GET['knowledge'] as $knowledge) {

        GSecureSQL::query(
            "INSERT INTO comprequirementtbl (CompanyID,PositionID,Knowledge) VALUES (?,?,?)",
            FALSE,
            "sss",
            $CompanyID,
            $PositionID,
            $knowledge
        );
    }
    foreach ($_GET['language'] as $language) {

        GSecureSQL::query(
            "INSERT INTO complanguagetbl (PositionID,Language) VALUES (?,?)",
            FALSE,
            "ss",
            $PositionID,
            $language
        );
    }

    header("location: company-positionlist.php?id=1");

}
// End of Create Position
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $RID = $_GET['rid'];

    if($id == 1){
        GSecureSQL::query(
        "UPDATE requesttocompanytbl SET Status = 'Accepted' WHERE RID = ?",
        FALSE,
        "s",
        $RID
        );
        header("location: company-pendingapplicants.php?id=1");

    }
    elseif($id == 2){
        GSecureSQL::query(
        "UPDATE requesttocompanytbl SET Status = 'Rejected' WHERE RID = ?",
        FALSE,
        "s",
        $RID
        );
        header("location: company-pendingapplicants.php?id=2");
    }

}
if(isset($_POST['CourseCheckbox'])){
    $Course = $_POST['CourseCheckbox'];
    $Course = implode(", ",$Course);

    GSecureSQL::query(
        "INSERT INTO logrequesttbl (CompanyID,Course,Status) values (?,?,'Pending')",
        FALSE,
        "ss",
        $CompanyID,
        $Course
    );
    header("location: company.php?id=2");

}