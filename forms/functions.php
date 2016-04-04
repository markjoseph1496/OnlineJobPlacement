<?php
include('../connection.php');

if(isset($_POST['FormSubmit'])){
    $CompanyName = ucwords($_POST['CompanyName']);
    $CompanyAddress = $_POST['CompanyAddress'];
    $City = $_POST['City'];
    $Website = $_POST['Website'];
    $ContactPerson = ucwords($_POST['ContactPerson']);
    $Designation = ucwords($_POST['Designation']);
    $Email = $_POST['Email'];
    $Phone1 = $_POST['Phone1'];
    $Phone2 = $_POST['Phone2'];
    $Phone3 = $_POST['Phone3'];
    $Phone3 = $_POST['Phone3'];
    $MobileNumber = $_POST['MobileNumber'];
    $FaxNumber = $_POST['FaxNumber'];
    $Industry = $_POST['Industry'];
    $Representative1 = ucwords($_POST['Representative1']);
    $Representative2 = ucwords($_POST['Representative2']);
    $MarketingMaterials = $_POST['MarketingMaterials'];


    $Others = "";
    $Extras = "";
    $RoomForExam = "";
    $DoorPrizes = "";

    if(isset($_POST['OthersCB'])){
        $Others = ucwords($_POST['Others']);
    }

    if(isset($_POST['OthersExtraCB'])){
        $Extras = ucwords($_POST['OthersExtra']);
    }

    if(isset($_POST['RoomForExam'])){
        $RoomForExam = $_POST['RoomForExam'];
    }

    if(isset($_POST['DoorPrizes'])){
        $DoorPrizes = $_POST['DoorPrizes'];
    }

    $ItemDescription = ucwords($_POST['ItemDescription']);

    $Participate = $_POST['Participate'];
    $Requirements = $_POST['Requirements'];

    $MarketingMaterials = implode(", ", $MarketingMaterials);
    $Requirements = implode(", ", $Requirements);
    $Requirements = htmlentities($Requirements);


    GSecureSQL::query(
        "INSERT INTO jobfairtbl
        (CompanyName,
        CompanyAddress,
        City,
        Website,
        ContactPerson,
        Designation,
        Email,
        Phone1,
        Phone2,
        Phone3,
        MobileNumber,
        FaxNumber,
        Industry,
        Representative1,
        Representative2,
        MarketingMaterials,
        Others,
        Extras,
        RoomForExam,
        DoorPrizes,
        ItemDescription,
        Participate,
        Requirements)
        VALUES
        (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
        FALSE,
        "sssssssssssssssssssssss",
        $CompanyName,
        $CompanyAddress,
        $City,
        $Website,
        $ContactPerson,
        $Designation,
        $Email,
        $Phone1,
        $Phone2,
        $Phone3,
        $MobileNumber,
        $FaxNumber,
        $Industry,
        $Representative1,
        $Representative2,
        $MarketingMaterials,
        $Others,
        $Extras,
        $RoomForExam,
        $DoorPrizes,
        $ItemDescription,
        $Participate,
        $Requirements

    );


}