<!DOCTYPE html>

<?php 
include('connection.php');
session_start();

$x = $_SESSION['StudentID'];

$qry = "SELECT * FROM studentinfotbl WHERE StudentID ='$x'";
$result = mysql_query($qry);
        while($qry = mysql_fetch_Array($result))
        {       
                $Email = $qry['Email'];
                $Address = $qry['Address'];
                $MobileNumber = $qry['MobileNumber'];
                $Region = $qry['StateRegion'];
                $HomeNumber = $qry['HomeNumber'];
                $City = $qry['City'];
                $WorkNumber = $qry['WorkNumber'];
                $PostalCode = $qry['PostalCode'];
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


<body id="page-top" class="index bg">
    <form method="POST">
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Online Job Placement Management</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>

    <div id="yellow-text-fields">
        <div class="container">
            <div class="white-holder">
                <ul class="nav nav-tabs">
                <li role="presentation" id="myinfo" class="item active"><a href="personal_info.php"><B>My Info</B></a></li>
                <li role="presentation" id="resumelink" class="item"><a href="../Resumelink/resumelink.php">Resumé Link</a></li>
                <li role="presentation" id="applications" class="item"><a href="../Applications/applications.php">Applications</a></li>
                <li role="presentation" id="settings" class="item"><a href="../Settings/settings.php">Settings</a></li>
            </ul>
            <div class="space"></div>
            <ul class="nav nav-pills nav-stacked col-md-2 col-sm-3">
                <li class="yellow"><a href="personal_info.php">Personal Info</a></li>
                <li class="yellow active"><a href="contacts_info.php">Contacts Info</a></li>
                <li class="yellow"><a href="work.php">Work</a></li>
                <li class="yellow"><a href="education.php">Education</a></li>
                <li class="yellow"><a href="certifications.php">Certifications</a></li>
                <li class="yellow"><a href="achievements.php">Achievements</a></li>
                <li class="yellow"><a href="skills_languages.php">Skills & Languages</a></li>
                <li class="yellow"><a href="references.php">References</a></li>
                <li class="yellow"><a href="portfolio.php">Portfolio</a></li>
            </ul>

            <div class"row">
                <div class="col-md-10 col-md-9">
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Email</label>
                            <input type="text" class="form-control" id="Email" name="txtEmail" value = "<?php echo $Email; ?>">
                        </div>
                        <div class="col-md-6 fieldcol">
                            <label>Address</label>
                            <input type="text" class="form-control" id="Address" name="txtAddress" value = "<?php echo $Address; ?>">
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Mobile Number <span>(*)</span></label>
                            <input type="text" class="form-control" id="MobileNumber" name="txtMobileNumber" value = "<?php echo $MobileNumber; ?>">
                        </div>
                        <div class="col-md-6 fieldcol">
                            <label>Region <span>(*)</span></label>
                            <select id="Region" name="txtRegion" class="Region" style="width:100%; height:34px;" value = "<?php echo $Region; ?>">
                                <option value>- Please select one -</option>
                                <option value="NCR" <?php if($Region=="NCR") echo 'selected="selected"'; ?>>NCR</option>
                            </select>
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Home Number</label>
                            <input type="text" class="form-control" id="HomeNumber" name="txtHomeNumber" value = "<?php echo $HomeNumber; ?>">
                        </div>
                        <div class="col-md-6 fieldcol">
                            <label>City <span>(*)</span></label>
                            <select id="City" name="txtCity" class="City" style="width:100%; height:34px;" value = "<?php echo $City; ?>">
                                <option value>- Please select one -</option>
                                <option value="Caloocan City" <?php if($City=="Caloocan City") echo 'selected="selected"'; ?>>Caloocan City</option>
                                <option value="Las Pińas City" <?php if($City=="Las Pińas City") echo 'selected="selected"'; ?>>Las Pińas City</option>
                                <option value="Makati City" <?php if($City=="Makati City") echo 'selected="selected"'; ?>>Makati City</option>
                                <option value="Malabon City" <?php if($City=="Malabon City") echo 'selected="selected"'; ?>>Malabon City</option>
                                <option value="Mandaluyong City" <?php if($City=="Mandaluyong City") echo 'selected="selected"'; ?>>Mandaluyong City</option>
                                <option value="Manila" <?php if($City=="Manila") echo 'selected="selected"'; ?>>Manila</option>
                                <option value="Marikina City" <?php if($City=="Marikina City") echo 'selected="selected"'; ?>>Marikina City</option>
                                <option value="Muntinlupa City" <?php if($City=="Muntinlupa City") echo 'selected="selected"'; ?>>Muntinlupa City</option>
                                <option value="Navotas City" <?php if($City=="Navotas City") echo 'selected="selected"'; ?>>Navotas City</option>
                                <option value="Parańaque City" <?php if($City=="Parańaque City") echo 'selected="selected"'; ?>>Parańaque City</option>
                                <option value="Pasay City" <?php if($City=="Pasay City") echo 'selected="selected"'; ?>>Pasay City</option>
                                <option value="Pasig City" <?php if($City=="Pasig City") echo 'selected="selected"'; ?>>Pasig City</option>
                                <option value="Pateros City" <?php if($City=="Pateros City") echo 'selected="selected"'; ?>>Pateros City</option>
                                <option value="Quezon City" <?php if($City=="Quezon City") echo 'selected="selected"'; ?>>Quezon City</option>
                                <option value="San Juan City" <?php if($City=="San Juan City") echo 'selected="selected"'; ?>>San Juan City</option>
                                <option value="Taguig City" <?php if($City=="Taguig City") echo 'selected="selected"'; ?>>Taguig City</option>
                                <option value="Valenzuela City" <?php if($City=="Valenzuela City") echo 'selected="selected"'; ?>>Valenzuela City</option>
                            </select>
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <label>Work Number</label>
                            <input type="text" class="form-control" id="WorkNumber" name="txtWorkNumber" value = "<?php echo $WorkNumber; ?>">
                        </div>
                        <div class="col-md-6 fieldcol">
                            <label>Postal Code</label>
                            <input type="text" class="form-control" id="PostalCode" name="txtPostalCode" value = "<?php echo $PostalCode; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="field">
                <div class="profile_divider"></div>
                <div class"row field">
                    <div class="col-md-12">
                        <button class="btn btn-lg btn-hg btn-primary" style="float:right;" name ="btnSave">Save</button>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
</div>
</form>
</body>

<?php
include('connection.php');

if(isset($_POST['btnSave'])){

   $txtEmail = $_POST['txtEmail'];
   $txtAddress = $_POST['txtAddress'];
   $txtMobileNumber = $_POST['txtMobileNumber'];
   $txtRegion = $_POST['txtRegion'];
   $txtHomeNumber = $_POST['txtHomeNumber'];
   $txtCity = $_POST['txtCity'];
   $txtWorkNumber = $_POST['txtWorkNumber'];
   $txtPostalCode = $_POST['txtPostalCode'];

   $query = "UPDATE studentinfotbl SET Email = '$txtEmail', Address = '$txtAddress', MobileNumber = '$txtMobileNumber', StateRegion = '$txtRegion', HomeNumber = '$txtHomeNumber', City = '$txtCity', WorkNumber = '$txtWorkNumber', PostalCode = '$txtPostalCode' WHERE StudentID = '$x'";
   $Result = mysql_query($query);
   echo "
         <script type='text/javascript'>
         </script>
         ";
}
?>
</html>