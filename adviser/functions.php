<?php
include('../connection.php');

if(isset($_POST['StudentID'])){
    $StudentID = $_POST['StudentID'];
    $CompanyName = $_POST['Company'];
    $CompanyAddress = $_POST['CompanyAddress'];
    $Remarks = $_POST['Remarks'];
    $Hours = $_POST['Hours'];



    if(isset($_POST['Endorsement'])){
        $Endorsement = $_POST['Endorsement'];
    }
    if(isset($_POST['DTR'])){
        $DTR = $_POST['DTR'];
    }
    $Waiver = $_POST['Waiver'];
    $TrainingPlan = $_POST['TrainingPlan'];
    $MOA = $_POST['MOA'];
    $Journal = $_POST['Journal'];
    $Integration = $_POST['Integration'];
    $PAF = $_POST['PAF'];
    $Certification = $_POST['Certification'];


    die();
}