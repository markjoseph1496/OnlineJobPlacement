<!DOCTYPE html>
<html>
<head>

    <title>OJPMS | Login Company</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- BootstrapValidator CSS -->
    <link rel="stylesheet" href="css/bootstrapValidator.min.css"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="fonts/ffonts/montserrat.css">
    <link rel="stylesheet" type="text/css" href="fonts/ffonts/open-sans.css">

    <!-- BootstrapValidator -->
    <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>

    <!-- CSS-->
    <link href="css/login-style.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">

</head>
<body class="company-login">
<div class="container">
    <div class="card">
        <h1 class="title">OJPMS</h1><br>
        <form id="myForm" action="login.php" method="POST" autocomplete="off">
            <div class="login-block">
                <div id="message"></div>
                <input type="text" value="" placeholder="Username" id="CompanyEmail" name="CompanyEmail"/>
                <input type="password" value="" placeholder="Password" id="password" name="password"/>
                &nbsp;
                <button type="submit" id="button">Submit</button>
            </div>

            <div class="footer"><a href="#">Forgot your password?</a></div>
        </form>
    </div>
    <div class="register-screenshot not_mobile">
        <div class="browser-chrome">
            <h1 class="register-title">&nbsp;<span class="break_on_desktop"></span>Welcome to <span class="yellow-title">O</span><span class="blue-title">J</span>PMS</h1>
            <div class="space"></div>
            <label class="register-terms" style="color:#000;">Connect with your friends -- and other fascinating people. Get in-the-moment
                updates on the things that interest you. And watch events unfold, in real time, from every angle. Are you not a member yet? <a
                    href="registration-company.php" target="_blank"><b>Sign Up.</b></a></label>
        </div>
    </div>
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