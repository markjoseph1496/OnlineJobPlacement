<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online JPMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/ffonts/roboto.css" rel="stylesheet" type="text/css">
</head>


<body class="login-background">
    <form method = "POST">
    <div class="container">
        <div class="login">
            <div class="login-screen">
                <div class="login-form" id="yellow-text-fields">
                    <div class="login-form">
                        <div class="form-group">
                            <input type="text" class="form-control login-field" value placeholder="Your Student ID" id="txtStudentID" name="txtStudentID" style="height:55px;">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control login-field" value placeholder="Password" id="txtPassword" name="txtPassword" style="height:55px;">
                        </div>
                        <input type ="submit" class="btn btn-primary btn-large btn-block" name = "btnLogin" value = "Login"></input>
                        <a class="login-link" href="">Forgot your password?</a>
                        <a class="login-link" href="registration.php">REGISTER NOW!</a>
                    </div>
                </div>
            </div>
        </div>
   </div>
</form>
</body>

<?php

session_start();


include('connection.php');

if(isset($_POST['btnLogin'])){

    $StudentID = $_POST['txtStudentID'];
    $password = $_POST['txtPassword'];

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

</html>