<?php
include('../connection.php');


if(isset($_GET['EID'])) {
    $Z = $_GET['EID'];

	$query = "UPDATE admintbl SET Email = '$NewEmail' WHERE AdminID = '$Z'";
    $Result = mysql_query($query);
    echo "
	    <script type='text/javascript'>
	    location.href='account.php';
	    alert('Email Changed!');
	    </script>
    ";
}
?>