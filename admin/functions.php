<?php
include('../connection.php');
session_start();
$AdminID = $_SESSION['AdminID'];

if (isset($_GET['coursetitle'])) {
    $CourseTitle = $_GET['coursetitle'];
    $CourseCode = $_GET['coursecode'];
    $CourseDesc = $_GET['coursedesc'];


    GSecureSQL::query(
        "INSERT INTO coursetbl (CourseTitle,CourseCode,CourseDescription) values (?,?,?)",
        FALSE,
        "sss",
        $CourseTitle,
        $CourseCode,
        $CourseDesc
    );

    echo "
        <script type='text/javascript'>
        location.href='admin-maintenance.php?id=1';
        </script>";
}

if (isset($_POST['CourseID'])) {
    $CourseID = $_POST['CourseID'];
    $CourseTitle = $_POST['coursetitle'];
    $CourseCode = $_POST['coursecode'];
    $CourseDesc = $_POST['coursedesc'];


    GSecureSQL::query(
        "UPDATE coursetbl SET CourseTitle = ?, CourseCode = ?, CourseDescription = ? WHERE CourseID = ?",
        FALSE,
        "ssss",
        $CourseTitle,
        $CourseCode,
        $CourseDesc,
        $CourseID
    );

    echo "
        <script type='text/javascript'>
        location.href='admin-maintenance.php?id=2';
        </script>";
}

if (isset($_POST['ModalNewEmail'])) {
    $Email = $_POST['ModalNewEmail'];

    GSecureSQL::query(
        "UPDATE admintbl SET Email = ? WHERE AdminID = ?",
        FALSE,
        "ss",
        $Email,
        $AdminID
    );

    echo "
        <script type='text/javascript'>
        location.href='admin-account.php?id=1';
        </script>";
}

if (isset($_POST['ModalNewPassword'])) {
    $OldPassword = $_POST['ModalOldPassword'];
    $NewPassword = $_POST['ModalNewPassword'];

    $admin_tbl =
        GSecureSQL::query(
            "SELECT
                `Password`,
                `SaltedPassword`
            FROM `admintbl` WHERE `AdminID` = ?",
            TRUE,
            "s",
            $AdminID
        );

    if (count($admin_tbl)) {
        if (hash('sha512', $OldPassword . $admin_tbl[0][1]) == $admin_tbl[0][0]) {

            $salt = hash('sha512', mt_rand(0, PHP_INT_MAX) . mt_rand(0, PHP_INT_MAX) . mt_rand(0, PHP_INT_MAX));
            $NewPassword = hash('sha512', $NewPassword . $salt);

            GSecureSQL::query(
                "UPDATE admintbl SET Password = ? , SaltedPassword = ? WHERE AdminID = ?",
                FALSE,
                "sss",
                $NewPassword,
                $salt,
                $AdminID
            );
            echo "
        <script type='text/javascript'>
        location.href='admin-account.php?id=2';
        </script>";

        } else {
            echo "Username or Password";
        }
    } else {
        echo "Username ID or Password";
    }
}

if (isset($_POST['FirstName'])) {
    $FirstName = $_POST['FirstName'];
    $MiddleName = $_POST['MiddleName'];
    $LastName = $_POST['LastName'];
    $Position = $_POST['Position'];
    $Department = $_POST['Department'];
    $Address = $_POST['Address'];
    $ContactNumber = $_POST['ContactNumber'];


    GSecureSQL::query(
        "UPDATE admintbl SET FirstName = ?, MiddleName = ?, LastName = ?, Position = ?, Department = ?, Address = ?, ContactNumber = ? WHERE AdminID = ?",
        FALSE,
        "ssssssss",
        $FirstName,
        $MiddleName,
        $LastName,
        $Position,
        $Department,
        $Address,
        $ContactNumber,
        $AdminID

    );

    echo "
        <script type='text/javascript'>
        location.href='admin-account.php?id=3';
        </script>";
}

if (isset($_GET['DeleteID'])) {
    $DeleteID = $_GET['DeleteID'];

    GSecureSQL::query(
        "DELETE FROM coursetbl WHERE CourseID = ?",
        FALSE,
        "s",
        $DeleteID
    );
    echo "
            <script type='text/javascript'>
            location.href='admin-maintenance.php?id=3';
            </script>";
}

if(isset($_GET['id']) && isset($_GET['cid'])){
    $id = $_GET['id'];
    $cid = $_GET['cid'];

    if($id == 1){
        GSecureSQL::query(
            "UPDATE companyinfotbl SET Status = 'Active' WHERE CompanyID = ?",
            FALSE,
            "i",
            $cid
        );
        echo "
            <script type='text/javascript'>
            location.href='admin-company_pending.php?id=1';
            </script>";
    }elseif($id == 2){
        GSecureSQL::query(
            "DELETE FROM companyinfotbl WHERE CompanyID = ?",
            FALSE,
            "i",
            $cid
        );
        echo "
            <script type='text/javascript'>
            location.href='admin-company_pending.php?id=2';
            </script>";
    }
}
if(isset($_POST['lid'])){
    $LID = $_POST['lid'];
    $DateFrom = date("Y-m-d");
    $DateTo = $_POST['DateTo'];

    GSecureSQL::query(
        "UPDATE logrequesttbl SET DateFrom = ?, DateTo = ?, Status = 'Accepted' WHERE LID = ?",
        FALSE,
        "sss",
        $DateFrom,
        $DateTo,
        $LID
    );
    echo "
            <script type='text/javascript'>
            location.href='admin-requested.php?id=1';
            </script>";
}