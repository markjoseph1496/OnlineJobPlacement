<?php
include('connection.php');
session_start();
if(isset($_POST['StudentID'])){
$StudentID = mysql_real_escape_string($_POST['StudentID']);
$_Password = mysql_real_escape_string($_POST['password']);

		$LoginQuery = "SELECT COUNT(*) FROM studentinfotbl WHERE (StudentID = '$StudentID' AND Password = '$_Password')";
		$LoginResult = mysql_query($LoginQuery);
		$Row = mysql_fetch_array($LoginResult);

		if($Row[0] > 0){
				$_SESSION['StudentID'] = $StudentID;
		        echo "
		        <script type='text/javascript'>
		        alert('You have successfully loggged in.');
		        location.href='student-view/search-job/jobs.php';
		        </script>";
		        }
		else{
			echo "Incorrect Student ID or Password";
			}
}
?>
