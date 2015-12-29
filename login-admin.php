<!DOCTYPE html>
<?php
session_start();
include('connection.php');

if (isset($_GET['id'])) {
    if (isset($_POST['btnLogin'])) {

    } else {
        $id = $_GET['id'];
        if ($id == 1) {
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

if ($a) {
    unset($a);
    $EmailValid = 1;
    $PasswordValid = 1;

    if (is_null($server_Email) || $server_Email == '') {
        $Email_validator = 'Email cannot be empty.';
        $Email_class = 'error';
    }

    if (is_null($server_Password) || $server_Password == '') {
        $Password_validator = 'Password cannot be empty.';
        $Password_class = 'error';
    }

    $a = $EmailValid;
    $a = $a && $PasswordValid;


    if ($a) {
        unset($a);


        $admin_tbl = GSecureSQL::query(
            "SELECT * FROM admintbl WHERE Email = ? AND Password = ? ",
            TRUE,
            "ss",
            $server_Email,
            $server_Password
        );

        if (!count($admin_tbl)) {
            echo "
                <script type='text/javascript'>
                alert('Incorrect Password. Please try again.');
                </script>
                ";
        } else {
            $_SESSION['AdminID'] = $admin_tbl[0]->AdminID;
            echo "
                <script type='text/javascript'>
                alert('You have successfully loggged in.');
                location.href='admin/admin.php';
                </script>
                ";

        }
    }
}
?>

<html>
<head>

    <title>Online JPMS</title>

    <!-- CSS-->
    <link href="css/login-style.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/ffonts/roboto.css" rel="stylesheet" type="text/css">
</head>

<body class="login-background">
    <div class="js-register-form">
        <a name="register"></a>
        <div class="grid-container">
            <div class="span_h1"></div>
            <div class="grid-row">
                <div class="grid-col w5 half_on_tablet full_on_mobile">
                    <form class="" method = "POST" autocomplete="off">
                        <h2 class="register-title"><span class="break_on_desktop"></span>&nbsp;</h2> 
                        <fieldset class="register-fieldset">
                            <div class="form-group">
                                <input type="text" class="<?php echo $StudentID_class;?> form-control register-input js-password js-input" placeholder="Email" id="" name="" value="<?php echo htmlspecialchars($server_StudentID)?>">
                            </div>
                        </fieldset>
                        <fieldset class="register-fieldset">
                            <div class="form-group">
                                <input type="password" class="<?php echo $Password_class;?>  form-control register-input js-password js-input" placeholder="Password" id="txtPassword" name="txtPassword">
                            </div>
                        </fieldset>
                        <fieldset class="register-fieldset">
                            <button class="btn btn--green register-submit btn--icon">Login              
                                <span class="btn-icon btn-icon--right"></span>
                            </button>
                        </fieldset>
                    </form>
                    <div class="text-center">
                        <p class="register-terms" style="float:right;"><a href="" target="_blank">Lost your password?</a></p>
                    </div>
                </div>
            </div>
            <div class="register-screenshot not_mobile">
                <div class="browser-chrome">
                    <label class="register-title">&nbsp;<span class="break_on_desktop"></span>Welcome to OJPMS.</label>
                    <div class="space"></div>
                    <label class="register-terms">Connect with your friends -- and other fascinating people. Get in-the-moment updates on the things that interest you. And watch events unfold, in real time, from every angle. <a href="registration.php" target="_blank">Sign Up.</a></label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>