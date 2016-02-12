<!DOCTYPE html>
<html>
<head>

    <title>OJPMS | Login Student</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- BootstrapValidator CSS -->
    <link rel="stylesheet" href="css/bootstrapValidator.min.css" />

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="fonts/ffonts/montserrat.css">
    <link rel="stylesheet" type="text/css" href="fonts/ffonts/open-sans.css">

    <!-- BootstrapValidator -->
    <script type="text/javascript" src="js/bootstrapValidator.min.js" ></script>

    <!-- CSS-->
    <link href="css/login-style.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">

</head>
<body class="login-background">
    <div class="box effect2">
        <h2 style="font-size:1.8rem;">Sign In</h2>
        <form class="" method = "POST" autocomplete="off">
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
        </form>
        <div class="text-center">
            <p class="register-terms"><a href="" target="_blank">Forgot your password?</a></p>
        </div>
        
        <button class="btn btn--green register-submit text-center">Login</button>
        
        <p class="register-terms">Don't have an account? Get started <a href="registration.php">here</a>.</p>
    </div>
</body>
</html>
<script type="text/javascript">
    $("button#button").click(function () {

        $.post($("#myForm").attr("action"),
            $("#myForm :input").serializeArray(),
            function (data) {
                $("div#message").html(data);
            });

        $("#myForm").submit(function () {
            return false;
        });
    });
</script>