<!DOCTYPE html>

<?php 
session_start();
include('connection.php');

$StudentID_validator = '';
$Password_validator = '';

$StudentID_class = '';
$Password_class = '';

$server_StudentID = isset($_POST['txtStudentID']) ? $_POST['txtStudentID'] : '';
$server_Password = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : '';

$a = isset($_POST['txtStudentID']);
$a = $a && isset($_POST['txtPassword']);

if($a){
    unset($a);
    $StudentIDValid = (bool) preg_match('/^[0-9]+$/i', $server_StudentID);
    $PasswordValid = 1;

    if(is_null($server_StudentID) || $server_StudentID == ''){
        $StudentID_validator = 'Student ID cannot be empty.';
        $StudentID_class = 'error';
    }
    elseif(!$StudentIDValid){
        $StudentID_validator = 'Invalid Student ID';
        $StudentID_class = 'error';
    }
    elseif(strlen($server_StudentID) < 11 ){
        $StudentID_validator = 'Student ID must be 11 Characters.';
        $StudentID_class = 'error';
        $StudentIDValid = 0;
    }
    else{
        $StudentID_class='';
    }

    if(is_null($server_Password) || $server_Password == ''){
        $Password_validator = 'Password cannot be empty.';
        $Password_class = 'error';
    }

    $a = $StudentIDValid;
    $a = $a && $PasswordValid;


    if($a){
        unset($a);
        $query = "SELECT * FROM studentinfotbl WHERE StudentID='$server_StudentID' AND Password='$server_Password'";
        $result = mysql_query($query);

        if($result){

            if(mysql_num_rows($result) == 0){
                echo "
                <script type='text/javascript'>
                alert('Incorrect Password. Please try again.');
                </script>
                ";
                $StudentID_class='error';
                $Password_class='error';
            }
            else{
                $_SESSION['StudentID'] = $server_StudentID;
                echo "
                <script type='text/javascript'>
                alert('You have successfully loggged in.');
                location.href='StudentInfo/personal-info/myinfo/personal_info.php';
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
                            <div class="form-group">
                                <input type="text" class="<?php echo $StudentID_class;?> form-control login-field" placeholder="Your Student ID" id="txtStudentID" name="txtStudentID" style="height:55px;" value="<?php echo htmlspecialchars($server_StudentID)?>">
                                <div align="left" style="color: red"><?php echo $StudentID_validator?></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="<?php echo $Password_class;?>  form-control login-field" placeholder="Password" id="txtPassword" name="txtPassword" style="height:55px;">
                                <div align="left" style="color: red"><?php echo $Password_validator?></div>
                            </div>
                            <input type ="submit" class="btn btn-primary btn-large btn-block" name = "btnLogin" value = "Login"></input>
                            <a class="login-link btn" href="">Forgot password?</a>
                            <div>&nbsp;</div>
                            <a class="btn btn-bordered" href="REGISTRATION.php">REGISTER NOW!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="login-footer"></div>
</body>
</html>