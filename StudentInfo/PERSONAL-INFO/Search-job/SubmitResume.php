<?php 
include('connection.php');
session_start();

$StudentID = $_SESSION['StudentID'];

if(isset($_GET['PID'])){

	$PositionID = $_GET['PID'];
	$CompanyID = $_GET['CID'];

	$qry1 = "SELECT * FROM requesttocompanytbl WHERE CompanyID = '$CompanyID' AND PositionID = '$PositionID' AND StudentID = '$StudentID'";
	$result1 = mysql_query($qry1);
	if($result1){
        if(mysql_num_rows($result1) == 0){
	        	$qry = "INSERT INTO requesttocompanytbl (CompanyID,StudentID,PositionID,Status) values  ('$CompanyID','$StudentID','$PositionID','Pending')";
				$result = mysql_query($qry);
				echo"
					<script type='text/javascript'>
			            location.href='search-job.php?id=1';
			        </script>
			        ";
        }
        else{
		        echo"
				<script type='text/javascript'>
		            location.href='job.php?PID=$PositionID&id=1';
		        </script>
		        ";
        }
    }

}
?>