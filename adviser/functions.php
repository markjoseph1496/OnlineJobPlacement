<?php
include('../connection.php');

if (isset($_POST['StudentID'])) {
    $StudentID = $_POST['StudentID'];
    $CompanyName = $_POST['Company'];
    $CompanyAddress = $_POST['CompanyAddress'];
    $Position = $_POST['Position'];
    $Supervisor = $_POST['Supervisor'];
    $Remarks = $_POST['Remarks'];
    $Hours = $_POST['Hours'];

    if(isset($_POST['Endorsement'])){
        $Endorsement = $_POST['Endorsement'];
    }else{
        $Endorsement = $_POST['EndorsementHidden'];
    }

    if(isset($_POST['DTR'])){
        $DTR = $_POST['DTR'];
    }else{
        $DTR = $_POST['DTRHidden'];
    }

    if(isset($_POST['Waiver'])){
        $Waiver = $_POST['Waiver'];
    }else{
        $Waiver = $_POST['WaiverHidden'];
    }

    if(isset($_POST['TrainingPlan'])){
        $TrainingPlan = $_POST['TrainingPlan'];
    }else{
        $TrainingPlan = $_POST['TrainingPlanHidden'];
    }

    if(isset($_POST['MOA'])){
        $MOA = $_POST['MOA'];
    }else{
        $MOA = $_POST['MOAHidden'];
    }

    if(isset($_POST['Journal'])){
        $Journal = $_POST['Journal'];
    }else{
        $Journal = $_POST['JournalHidden'];
    }

    if(isset($_POST['Integration'])){
        $Integration = $_POST['Integration'];
    }else{
        $Integration = $_POST['IntegrationHidden'];
    }

    if(isset($_POST['PAF'])){
        $PAF = $_POST['PAF'];
    }else{
        $PAF = $_POST['PAFHidden'];
    }

    if(isset($_POST['Certification'])){
        $Certification = $_POST['Certification'];
    }else{
        $Certification = $_POST['CertificationHidden'];
    }

    GSecureSQL::query(
        "UPDATE ojttbl SET
        CompanyName = ?,
        CompanyAddress = ?,
        Supervisor = ?,
        Position = ?,
        Remarks = ?,
        Hours = ?,
        Endorsement = ?,
        DTR = ?,
        Waiver = ?,
        TrainingPlan = ?,
        MOA = ?,
        Journal = ?,
        Integration = ?,
        PAF = ?,
        Certificate = ?
        WHERE StudentID = ?",
        FALSE,
        "ssssssssssssssss",
        $CompanyName,
        $CompanyAddress,
        $Supervisor,
        $Position,
        $Remarks,
        $Hours,
        $Endorsement,
        $DTR,
        $Waiver,
        $TrainingPlan,
        $MOA,
        $Journal,
        $Integration,
        $PAF,
        $Certification,
        $StudentID
    );

    header('location: ojt-adviser.php');

}