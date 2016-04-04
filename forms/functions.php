<?php
include('../connection.php');

if(isset($_POST['FormSubmit'])){
    $CompanyName = $_POST['CompanyName'];
    $CompanyAddress = $_POST['CompanyAddress'];
    $City = $_POST['City'];
    $Website = $_POST['Website'];
    $ContactPerson = $_POST['ContactPerson'];
    $Designation = $_POST['Designation'];
    $Email = $_POST['Email'];
    $Phone1 = $_POST['Phone1'];
    $Phone2 = $_POST['Phone2'];
    $Phone3 = $_POST['Phone3'];
    $MobileNumber = $_POST['MobileNumber'];
    $FaxNumber = $_POST['FaxNumber'];
    $Industry = $_POST['Industry'];
    $Representative1 = $_POST['Representative1'];
    $Representative2 = $_POST['Representative2'];
    $MarketingMaterials = $_POST['MarketingMaterials'];
    $Others = $_POST['Others'];
    $Extras = $_POST['OthersExtra'];
    $RoomForExam = $_POST['RoomForExam'];
    $DoorPrizes = $_POST['DoorPrizes'];
    $ItemDescription = $_POST['ItemDescription'];
    $Participate = $_POST['Participate'];
    $Requirements = $_POST['Requirements'];

    $MarketingMaterials = implode(", ", $MarketingMaterials);
    $Requirements = implode(", ", $Requirements);





    echo "CompanyName " . $CompanyName . "<br>";
    echo "CompanyAddress " . $CompanyAddress . "<br>";
    echo "City " . $City . "<br>";
    echo "Website " . $Website . "<br>";
    echo "ContactPerson " . $ContactPerson . "<br>";
    echo "Designation " . $Designation . "<br>";
    echo "Email " . $Email . "<br>";
    echo "Phone1 " . $Phone1 . "<br>";
    echo "Phone2 " . $Phone2 . "<br>";
    echo "Phone3 " . $Phone3 . "<br>";
    echo "MobileNumber " . $MobileNumber . "<br>";
    echo "FaxNumber " . $FaxNumber . "<br>";
    echo "Industry " . $Industry . "<br>";
    echo "Representative1 " . $Representative1 . "<br>";
    echo "Representative2 " . $Representative2 . "<br>";
    echo "MarketingMaterials " . $MarketingMaterials . "<br>";
    echo "Others " . "$Others" . "<br>";
    echo "Extras " . $Extras . "<br>";
    echo "RoomForExam " . $RoomForExam . "<br>";
    echo "DoorPrizes " . $DoorPrizes . "<br>";
    echo "ItemDescription " . $ItemDescription . "<br>";
    echo "Participate " . $Participate . "<br>";
    echo "Requirements " . $Requirements . "<br>";

}