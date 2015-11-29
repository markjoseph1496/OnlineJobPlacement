<?php
include('CONNECTION.php');

if(isset($_GET['delete_PositionID'])) {
    $Z = $_GET['delete_PositionID'];

 	$query = "DELETE FROM comppositiontbl WHERE PositionID='$Z'";
    $result = mysql_query($query);

    echo "
            <script type='text/javascript'>
            location.href='Positions.php?id=PositionDelete';
            </script>
            ";
?>