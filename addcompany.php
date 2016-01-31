<?php
include('connection.php');

if (isset($_POST['type'])) {
    $isAvailable = true;
    $CompanyName = $_POST['CompanyName'];
    $Result =
        GSecureSQL::query(
            "SELECT CompanyName FROM companyinfotbl WHERE CompanyName = ?",
            TRUE,
            "s",
            $CompanyName
        );

    if (count($Result) == 0) {
        $isAvailable = true;
    } else {
        $isAvailable = false;
    }
    echo json_encode(array(
        'valid' => $isAvailable,
    ));
}

if(isset($_GET['FirstName'])){

   $CompanyName = $_GET['CompanyName'];
   $Industry = $_GET['Industry'];
   $City = $_GET['City'];
   $Email = $_GET['Email'];
   $Password = $_GET['cPassword'];
   $FirstName = $_GET['FirstName'];
   $MiddleName = $_GET['MiddleName'];
   $LastName = $_GET['LastName'];
   $Position = $_GET['Position'];
   $Department = $_GET['Department'];


    $FirstName = ucwords(strtolower($FirstName));
    $MiddleName = ucwords(strtolower($MiddleName));
    $LastName = ucwords(strtolower($LastName));

    $salt = hash('sha512', mt_rand(0, PHP_INT_MAX) . mt_rand(0, PHP_INT_MAX) . mt_rand(0, PHP_INT_MAX));
    $Password = hash('sha512', $Password . $salt);

    GSecureSQL::query(
        "INSERT INTO companyinfotbl (CompanyName,Industry,City,Email,Password,SaltedPassword,FirstName,MiddleName,LastName,Position,Department) values (?,?,?,?,?,?,?,?,?,?,?)",
        FALSE,
        "sssssssssss",
        $CompanyName,
        $Industry,
        $City,
        $Email,
        $Password,
        $salt,
        $FirstName,
        $MiddleName,
        $LastName,
        $Position,
        $Department

    );
   
   header("location: registration-company.php?id=1");
}
?>