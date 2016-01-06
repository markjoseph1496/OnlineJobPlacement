<!DOCTYPE html>
<?php 
session_start();
include('connection.php');
/*
$query = "SELECT * FROM studentinfotbl WHERE StudentID='" . mysql_real_escape_string($server_StudentID) . "' AND Password='" . mysql_real_escape_string($server_Password) . "'";
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
*/
?>


<html>
<head>

    <title>Online JPMS</title>

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- BootstrapValidator CSS -->
    <link rel="stylesheet" href="css/bootstrapValidator.min.css" />

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>

    <!-- BootstrapValidator -->
    <script type="text/javascript" src="js/bootstrapValidator.min.js" ></script>

    <!-- CSS-->
    <link href="css/login-style.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet"> 

</head>
<body class="company-login">
<div class="container">
  <div class="card">
    <h1 class="title">OJPMS</h1><br>
    <form autocomplete="off">
      <div class="input-container">
        <input type="text" id="Username" required="required" autocomplete="off" /> 
        <label class="label-edit">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" required="required" autocomplete="off" />
        <label class="label-edit">Password</label>
        <div class="bar"></div>
      </div>
         <input type="submit" class="btn btn-primary btn-large btn-block" id = "login" name="btnLogin" value="Login">
          <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>
  </div>
          <div class="register-screenshot not_mobile">
                <div class="browser-chrome">
                    <label class="register-title">&nbsp;<span class="break_on_desktop"></span>Welcome to OJPMS.</label>
                    <div class="space"></div>
                    <label class="register-terms">Connect with your friends -- and other fascinating people. Get in-the-moment updates on the things that interest you. And watch events unfold, in real time, from every angle. <a href="registration.php" target="_blank"><b>Sign Up.</b></a></label>
                </div>
            </div>
</div>
        <script src="js/script.js"></script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
            var validator = $("#myForm").bootstrapValidator({
                feedbackIcons:{
                    valid: "glyphicon glyphicon-ok",
                    invalid: "glyphicon glyphicon-remove",
                    validating: "glyphicon glyphicon-refresh"
                },
                fields: {
                    StudentID: {
                        validators: {
                            notEmpty: {
                                message: "Student ID cannot be empty."
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "Password cannot be empty."
                            }
                        }
                    },
                }
            });
    });

    $("button#submit").click( function() {
     
        $.post( $("#myForm").attr("action"),
                $("#myForm :input").serializeArray(),
                function(data) {
                  $("div#message").html(data);
                });
     
        $("#myForm").submit( function() {
           return false;    
        });
    });
</script>