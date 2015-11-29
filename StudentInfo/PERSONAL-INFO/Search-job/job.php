<?php 
include('connection.php');
session_start();

$PositionID = $_GET['PID'];

$qry1 = "SELECT * FROM comppositiontbl WHERE PositionID ='$PositionID'";
$result1 = mysql_query($qry1);

    while($qry1 = mysql_fetch_Array($result1)) {

        $CompanyID = $qry1['CompanyID'];
        $PositionLevel = $qry1['PositionLevel'];
    }

$qry2 = "SELECT * FROM companyinfotbl WHERE CompanyID ='$CompanyID'";
$result2 = mysql_query($qry2);

    while($qry2 = mysql_fetch_Array($result2)) {

        $CompanyName = $qry2['CompanyName'];
    }

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online JPMS</title>

     <!-- JQuery -->
    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/bootbox.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="../../css/agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../../font-awesome/ffonts/roboto.css" rel="stylesheet" type="text/css">
</head>
<script>
    $(document).on("click", ".btnSubmit", function(result) {
        bootbox.confirm({
          title: 'Submit Resume',
          message: 'Are you sure you want to submit your Resume to this company?',
          buttons: {
              'cancel': {
                  label: 'Cancel',
                  
              },
              'confirm': {
                  label: 'Ok',
                  className: 'btn-primary pull-right'
              }
          },
          callback: function(result) {
              if (result) {
                   window.location = $("a[data-bb='confirmSubmitResume']").attr('href');
              }
          }
      });
    });
</script>
<body id="page-top" class="index bg">
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
        <div class="container">
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll">Online Job Placement Management</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="../../../index.php?id=SignOut">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>

    <div class="white-holder">
        <?php
        if(isset($_GET['id'])){
            echo '
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-info-sign"></span> 
                    You have already submitted your Resume to this Company and this position.
                </div>


            ';
        }
        ?>
        <div class="row field">
            <div class="col-md-2">
                &nbsp;
            </div>
            <div class="col-md-8">
                <div class="row field">
                    <div class="col-md-12">
                        <img src="../../img/logos/wordpress.jpg">
                    </div>
                    <div class="col-md-12">
                        <h1><?php echo $CompanyName ?></h1>
                    </div>
                    <div class="divider-2"></div>
                    <div class="col-md-12">
                        <h3><?php echo $PositionLevel ?></h3>
                    </div>
                    <div class="col-md-12">
                        <label>Responsibilities</label>
                    </div>
                    <div class="col-md-12">
                        Handles projects, systems upgrade and development independently and error-free.
                    </div>
                </div>
                <div class="row field">
                    <div class="col-md-12">
                        <label>Requirements</label>
                    </div>
                    <div class="col-md-12">
                        <ul>
                            <li>Candidate must be female</li>
                            <li>19-26 years old</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                &nbsp;
            </div><div class="row field">
            <a data-bb="confirmSubmitResume" class="bb-alert alert alert-info" style="display: none;" href="SubmitResume.php?PID=<?php echo $PositionID?>&CID=<?php echo $CompanyID?>">
            <a href=# class="btn btn-lg btn-hg btn-primary btnSubmit" style="float:right;"><i class="fa fa-paper-plane"></i> Submit Resumelink</a>
            </div><div class="row field">
            <a href="search-job.php" class="btn btn-lg btn-hg btn-primary" style="float:right;"><i class="fa fa-arrow-left"></i> Back</a>
        </div></div>
        </div></div>
    </div>
</body>