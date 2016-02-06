<?php
include('../connection.php');

if(isset($_POST['StudentID'])){
    $StudentID = $_POST['StudentID'];
    $Company = $_POST['txtCompany'];
    $CompanyAddress = $_POST['txtCompanyAddress'];
    $ContactNumber = $_POST['txtContactNumber'];
    $Supervisor = $_POST['txtSupervisor'];
    $DTR = $_POST['DTR'];
    $iPaper = $_POST['iPaper'];
    $PracJournal = $_POST['PracJournal'];
    $TrainingPlan = $_POST['TrainingPlan'];
    $Resume = $_POST['Resume'];
    $MOA = $_POST['MOA'];
    $AppLetter = $_POST['AppLetter'];
    $Waiver = $_POST['Waiver'];
    $Status = $_POST['Status'];

    GSecureSQL::query(
        "UPDATE ojttbl
        SET
        CompanyName = ?,
        CompanyAddress = ?,
        ContactNumber = ?,
        Supervisor = ?,
        DailyTimeRecord = ?,
        IntegrationPaper = ?,
        PracJournal = ?,
        TrainingPlan = ?,
        Resume = ?,
        MOA = ?,
        ApplicationLetter = ?,
        Waiver = ?,
        aStatus = ?
        WHERE
        StudentID = ?",
        FALSE,
        "sssssssssssss",
        $Company,
        $CompanyAddress,
        $ContactNumber,
        $Supervisor,
        $DTR,
        $iPaper,
        $PracJournal,
        $TrainingPlan,
        $Resume,
        $MOA,
        $AppLetter,
        $Waiver,
        $Status,
        $StudentID
    );

    header("location: ojt-adviser.php");
}