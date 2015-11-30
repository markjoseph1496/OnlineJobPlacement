<?php
include('../connection.php');

if(isset($_GET['fn'])) {
    $fn = $_GET['fn'];
    $RequestID = $_GET['ID'];

    if($fn=="Delete"){
    $query = "UPDATE resumerequesttbl SET Status = 'Rejected' WHERE RequestID='$RequestID'";
    $result = mysql_query($query);
    echo "
            <script type='text/javascript'>
            location.href='requested.php?ID=Rejected';
            </script>";
    }
    elseif($fn=="Accept"){
    $query = "UPDATE resumerequesttbl SET Status = 'Accept' WHERE RequestID='$RequestID'";
    $result = mysql_query($query);
    echo "
            <script type='text/javascript'>
            location.href='requested.php?ID=Accepted';
            </script>";
    }
}
?>