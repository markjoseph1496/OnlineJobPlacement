<?php
include('../connection.php');
session_start();
$AdminID = $_SESSION['AdminID'];

if(isset($_GET['coursetitle'])) {
	$CourseTitle = $_GET['coursetitle'];
    $CourseCode = $_GET['coursecode'];
    $CourseDesc = $_GET['coursedesc'];

    $query = "INSERT INTO coursetbl (CourseTitle,CourseCode,CourseDescription) values ('$CourseTitle','$CourseCode','$CourseDesc')";
    $result = mysql_query($query);

    echo "
        <script type='text/javascript'>
        location.href='admin-addcourse.php?ID';
        </script>";
}

if(isset($_POST['ModalNewEmail'])){
	$Email = $_POST['ModalNewEmail'];

	$query = "UPDATE admintbl SET Email = '$Email' WHERE AdminID = '$AdminID'";
	$result = mysql_query($query);

	echo "
        <script type='text/javascript'>
        location.href='admin-account.php?id=1';
        </script>";
}

if(isset($_POST['ModalNewPassword'])){
    $OldPassword = $_POST['ModalOldPassword'];
    $NewPassword = $_POST['ModalNewPassword'];
    $query = "SELECT COUNT(*) FROM admintbl WHERE (AdminID = '$AdminID' AND Password = '$OldPassword')";
    $result = mysql_query($query);
    $Row = mysql_fetch_array($result);

    if($Row[0] > 0){
        $ChangePassQuery = "UPDATE admintbl SET Password = '$NewPassword' WHERE AdminID = '$AdminID'";
        $ChangePassResult = mysql_query($ChangePassQuery);
        echo "
        <script type='text/javascript'>
        location.href='admin-account.php?id=2';
        </script>";
    }
    else{
        echo "Wrong Password";
    }

}

if(isset($_POST['FirstName'])){
    $FirstName = $_POST['FirstName'];
    $MiddleName = $_POST['MiddleName'];
    $LastName = $_POST['LastName'];
    $Position = $_POST['Position'];
    $Department = $_POST['Department'];
    $Address = $_POST['Address'];
    $ContactNumber = $_POST['ContactNumber']; 

    $query = "UPDATE admintbl SET FirstName = '$FirstName', MiddleName = '$MiddleName', LastName = '$LastName', Position = '$Position', Department = '$Department', Address = '$Address', ContactNumber = '$ContactNumber' WHERE AdminID = '$AdminID'";
    $result = mysql_query($query);
    echo "
        <script type='text/javascript'>
        location.href='admin-account.php?id=3';
        </script>";
}

if(isset($_GET['id'])) {
    $fn = $_GET['id'];
    $RequestID = $_GET['rid'];

    if($fn=="2"){
    $query = "UPDATE resumerequesttbl SET Status = 'Rejected' WHERE RequestID='$RequestID'";
    $result = mysql_query($query);
    echo "
            <script type='text/javascript'>
            location.href='admin-requested.php?id=2';
            </script>";
    }
    elseif($fn=="1"){
    $query = "UPDATE resumerequesttbl SET Status = 'Accept' WHERE RequestID='$RequestID'";
    $result = mysql_query($query);
    echo "
            <script type='text/javascript'>
            location.href='admin-requested.php?id=1';
            </script>";
    }
}

?>