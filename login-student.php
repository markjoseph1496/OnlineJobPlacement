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

<body class="login-background">
    <div class="js-register-form">
        <a name="register"></a>
        <div class="grid-container">
            <div class="span_h1"></div>
            <div class="grid-row">
                <div class="grid-col w5 half_on_tablet full_on_mobile">
                    <form id="myForm" action="login.php" method="POST" autocomplete="off">
                        <h2 class="register-title"><span class="break_on_desktop"></span>&nbsp;</h2> 
                        <fieldset class="register-fieldset">
                            <div class="form-group">
                                <div id="message" ></div><br>
                                <input type="text" class="form-control register-input js-password js-input" placeholder="Your Student ID" id="StudentID" name="StudentID" value="">
                            </div>
                        </fieldset>
                        <fieldset class="register-fieldset">
                            <div class="form-group">
                                <input type="password" class="<form-control register-input js-password js-input" placeholder="Password" id="password" name="password">
                            </div>
                        </fieldset>
                        <fieldset class="register-fieldset">
                            <button class="btn btn--green register-submit btn--icon" id="submit" type="submit">Login              
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