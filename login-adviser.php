<!DOCTYPE html>
<html>
<head>
    <title>OJPMS | Login Adviser</title>

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
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="login-adviser">
    <div class="box effect3" style="margin-top:5%;">
        <h2 class="register-title">Sign In</h2>
        <form id="myForm" action="login.php" method="POST" autocomplete="off">
            <div id="message" style="color:#d95c5c;font-weight:600;"></div>
            <fieldset class="register-fieldset">
                <input type="text" value="" class="form-control register-input" placeholder="Username" id="AdviserUsername" name="AdviserUsername"/>
            </fieldset>
            <fieldset class="register-fieldset">
                <input type="password" value="" class="form-control register-input" placeholder="Password" id="password" name="_password"/>
            </fieldset>
            
            <button type="submit" class="btn btn--green register-submit text-center" id="button"><center>Sign In</center></button>
        </form>
        </div>
        <div class="register-screenshot not_mobile">
            <div class="browser-chrome">
                <h1 class="register-title">&nbsp;<span class="break_on_desktop"></span>Welcome to <span class="yellow-title">O</span><span class="blue-title">J</span>PMS</h1>
                <div class="space"></div>
                <label class="register-terms" style="color:#666;">Connect with your friends -- and other fascinating people. Get in-the-moment
                    updates on the things that interest you. And watch events unfold, in real time, from every angle. <a
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