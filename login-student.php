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
                location.href='student-view/search-job/jobs.php';
                </script>
                ";

            }   
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
                                <input type="text" class="<?php echo $StudentID_class;?> form-control register-input js-password js-input" placeholder="Your Student ID" id="txtStudentID" name="txtStudentID" value="<?php echo htmlspecialchars($server_StudentID)?>">
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
                    <label class="register-terms">Connect with your friends -- and other fascinating people. Get in-the-moment updates on the things that interest you. And watch events unfold, in real time, from every angle. <a href="" target="_blank">Sign Up.</a></label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>