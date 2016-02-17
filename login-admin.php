<!DOCTYPE html>
<html>
<head>

    <title>OJPMS | Login Administrator</title>

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

<body class="admin-login">
    <div class="box effect3" style="margin-top:5%;">
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