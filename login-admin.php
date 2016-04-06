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
    <script type="text/javascript" src="js/loginadmin.js"></script>
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
<!-- Modal -->
<div class="modal fade" id="Login" role="dialog">
    <div class="modal-dialog" style="padding:100px">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login in Success</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-15">
                    <label = "usr" class = "control-label">You have successfully logged in.</label>
                    <div class="form-group">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="LoginFailed" role="dialog">
    <div class="modal-dialog" style="padding:100px">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login Failed</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-15">
                    <label = "usr" class = "control-label">Incorrect Student ID or Password.</label>
                    <div class="form-group">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Try Again</button>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="box-top effect3" style="margin-top:5%;">
        <a href="index.php"><img src="images/logo/ojpms-logo.png" title="OJPMS - Home" style="width:70%;height:70%;"></a>
    </div>
    <div class="box-bottom effect3" style="margin-top:1%;">
        <h2>Good day, Admin!</h2>
        <h4>Sign In</h4>
        <form id="myForm" method="POST" autocomplete="off">
            <div id="message" style="color:#d95c5c;font-weight:600;"></div>
            <fieldset class="register-fieldset">
                <input type="text" class="form-control register-input" placeholder="Username" id="AdminEmail" name="AdminEmail" />
            </fieldset>
            <fieldset class="register-fieldset">
                <input type="password" class="form-control register-input" placeholder="Password" id="password" name="password">
            </fieldset>
        </form>
            <button class="btn btn--green register-submit text-center" id="btnLogin"><center>Sign In</center></button>

    </div>
</body>
</html>