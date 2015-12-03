<!DOCTYPE html>
<?php
session_start();
include('connection.php');

if(isset($_GET['id'])){
    if(isset($_POST['btnLogin'])){

    }
    else{
        $id = $_GET['id'];
        if($id == 1){
            session_destroy();
        }
    }
}

$Email_validator = '';
$Password_validator = '';

$Email_class = '';
$Password_class = '';

$server_Email = isset($_POST['Email']) ? $_POST['Email'] : '';
$server_Password = isset($_POST['Password']) ? $_POST['Password'] : '';

$a = isset($_POST['Email']);
$a = $a && isset($_POST['Password']);

if($a){
    unset($a);
    $EmailValid = 1;
    $PasswordValid = 1;

    if(is_null($server_Email) || $server_Email == ''){
        $Email_validator = 'Email cannot be empty.';
        $Email_class = 'error';
    }

    if(is_null($server_Password) || $server_Password == ''){
        $Password_validator = 'Password cannot be empty.';
        $Password_class = 'error';
    }

    $a = $EmailValid;
    $a = $a && $PasswordValid;


    if($a){
        unset($a);
        $query = "SELECT * FROM admintbl WHERE Email='$server_Email' AND Password='$server_Password'";
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
                location.href='admin/admin.php';
                </script>
                ";

            }   
        }
    }
}
?>

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
    <form method = "POST" autocomplete="off">
        <div class="container">
            <div class="login">
                <div class="login-screen">
                    <div class="login-form" id="yellow-text-fields">
                        <div class="login-form">
                            <?php
                            if(isset($_GET['id'])){
                                $id = $_GET['id'];
                                if($id == 1){
                                    echo '
                                    <div class="alert alert-success">
                                        <span class="glyphicon glyphicon-info-sign"></span> 
                                        You have been successfully signed out.
                                    </div>
                                    ';
                                }
                                
                            }
                            ?>
                            <div class="form-group">
                                <input type="text" class="form-control login-field" placeholder="Email" id="" name="Email" style="height:55px;">
                                <div style="color: red"><?php echo $Email_validator?></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control login-field" placeholder="Password" id="" name="Password" style="height:55px;">
                                <div style="color: red"><?php echo $Password_validator?></div>
                            </div>
                            <input type ="submit" class="btn btn-primary btn-large btn-block" name = "btnLogin" value = "Login"></input>
                            <a class="login-link btn" href="">Forgot password?</a>
                            <div>&nbsp;</div>
                            <a class="btn btn-bordered" href="registration.php">REGISTER NOW!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="login-footer"></div>
</body>
</html>