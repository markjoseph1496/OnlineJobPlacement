<!doctype html>
<html>
<head>
<body>
<form method="POST">

Student ID: <input type="text" name = "Studid"> <br> <br>

Password: <input type="password" name = "password"> <br><br>

<input type="submit" name="btnLogin" value="login" id="Button1">

</form>
</body>
</head>
</html>


<?php

session_start();


include('connection.php');

if(isset($_POST['btnLogin'])){

	$StudentID = $_POST['Studid'];
	$password = $_POST['password'];

	$query = "SELECT * FROM studentinfotbl WHERE StudentID='$StudentID' AND Password='$password'";
	$result = mysql_query($query);

	if($result){

		if(mysql_num_rows($result) == 0){
			echo "
			<script type='text/javasczipt'>
			alert('Incorrect Password. Please try again.');
			</script>
			";
		}
		else{
			$_SESSION['StudentID'] = $StudentID;
			echo "
			<script type='text/javascript'>
			alert('You have successfully loggged in.');
			location.href='StudentInfo/personal-info/myinfo/personal_info.php';
			</script>
			";

		}	
	}
} 
?>