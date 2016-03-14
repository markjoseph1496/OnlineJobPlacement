<!DOCTYPE html>
<html>
<head>

    <title>OJPMS | Administrator Sign In</title>

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
    <link rel="shortcut icon" href="images/logo/favicon.ico">
</head>

<body class="login-admin">
    <div class="box-top effect3" style="margin-top:5%;">
        <a href="index.php"><img src="images/logo/ojpms-logo.png" title="OJPMS - Home" style="width:70%;height:70%;"></a>
    </div>
    <div class="box-bottom effect3" style="margin-top:1%;">
        <h2>Good day, Admin!</h2>
        <h4>Sign In</h4>
        <form id="myForm" action="login.php" method="POST" autocomplete="off">
            <div id="message" style="color:#d95c5c;font-weight:600;"></div>
            <fieldset class="register-fieldset">
                <input type="text" class="form-control register-input" placeholder="Username" id="AdminEmail" name="AdminEmail" />
            </fieldset>
            <fieldset class="register-fieldset">
                <input type="password" class="form-control register-input" placeholder="Password" id="password" name="password">
            </fieldset>

            <button type="submit" class="btn btn--green register-submit text-center" id="button"><center>Sign In</center></button>
        </form>
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