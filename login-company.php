<!DOCTYPE html>
<html lang="en">
<!--testing ng edit sa github -->
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
                                <input type="text" class="form-control login-field" value placeholder="Company ID" id="" name="username" style="height:55px;">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control login-field" value placeholder="Password" id="" name="password" style="height:55px;">
                            </div>
                            <input type ="submit" class="btn btn-primary btn-large btn-block" name = "btnlogin" value = "Login"></input>
                            <a class="login-link btn" href="">Forgot password?</a>
                            <div>&nbsp;</div>
                            <a class="btn btn-bordered" href="registration-company.php">REGISTER NOW!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="login-footer"></div>
</body>

<?php
session_start();
include ("connection.php");
if(isset($_POST['btnlogin'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = ("SELECT * FROM companyinfotbl WHERE Email = '$username' AND Password = '$password' ");
    $Result = mysql_query($query);
    while($query = mysql_fetch_array($Result)){
        $CompanyID = $query['CompanyID'];
    }

    if($Result){

        if(mysql_num_rows($Result) == 0){

            echo "
            <script type='text/javascript'>
            alert('Incorrect Password. Please try again.');
            </script>
            ";

        }
        else{

            $_SESSION['CompanyID'] = $CompanyID;
            echo "
            <script type='text/javascript'>
            alert('You have successfully loggged in.');
            location.href='company/company.php';
            </script>
            ";
        }
    }
}
?>

</html>