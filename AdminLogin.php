<!doctype html>
<html>
<head>
<body>
<form method="POST">
<b> Admin Login </b> <BR> <BR>
Email: <input type="text" name = "email"> <br> <br>

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

	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT * FROM admintbl WHERE Email='$email' AND Password='$password'";
	$result = mysql_query($query);
	while($query = mysql_fetch_Array($result))
        {       
                $AdminID = $query['AdminID'];
        }

	if($result){

		if(mysql_num_rows($result) == 0){
			echo "
			<script type='text/javasczipt'>
			alert('Incorrect Password. Please try again.');
			</script>
			";
		}
		else{
			$_SESSION['AdminID'] = $AdminID;
			echo "
			<script type='text/javascript'>
			alert('You have successfully loggged in.');
			location.href='Admin/admin.php';
			</script>
			";

		}	
	}
} 
?>