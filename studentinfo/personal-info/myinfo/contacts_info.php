<!DOCTYPE html>

<?php 
include('../../../connection.php');
session_start();

if(isset($_SESSION['StudentID'])){
    $StudentID = $_SESSION['StudentID'];
}
else{
    $StudentID = '';
    echo "
        <script type='text/javascript'>
        location.href='../../../login-student.php?id=2';
        </script>
        ";
}

$qry = "SELECT * FROM studcontactstbl WHERE StudentID ='$StudentID'";
$result = mysql_query($qry);
        while($qry = mysql_fetch_Array($result))
        {       
                $Email = $qry['Email'];
                $Address = $qry['Address'];
                $MobileNumber = $qry['MobileNumber'];
                $Region = $qry['Region'];
                $HomeNumber = $qry['HomeNumber'];
                $City = $qry['City'];
                $WorkNumber = $qry['WorkNumber'];
                $PostalCode = $qry['PostalCode'];
        }

/* Validation Starts Here */
$b = 1;
$txtEmail_Validator = '';
$txtAddress_Validator = '';
$txtMobileNumber_Validator = '';
$txtRegion_Validator = '';
$txtHomeNumber_Validator = '';
$txtCity_Validator = '';
$txtWorkNumber_Validator = '';
$txtPostalCode_Validator = '';

$server_txtEmail = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '';
$server_txtAddress = isset($_POST['txtAddress']) ? $_POST['txtAddress'] : '';
$server_txtMobileNumber = isset($_POST['txtMobileNumber']) ? $_POST['txtMobileNumber'] : '';
$server_txtRegion = isset($_POST['txtRegion']) ? $_POST['txtRegion'] : '';
$server_txtHomeNumber = isset($_POST['txtHomeNumber']) ? $_POST['txtHomeNumber'] : '';
$server_txtCity = isset($_POST['txtCity']) ? $_POST['txtCity'] : '';
$server_txtWorkNumber = isset($_POST['txtWorkNumber']) ? $_POST['txtWorkNumber'] : '';
$server_txtPostalCode = isset($_POST['txtPostalCode']) ? $_POST['txtPostalCode'] : '';

$server_txtAddress = ucwords(strtolower($server_txtAddress));

$a = isset($_POST['txtEmail']);
$a = $a && isset($_POST['txtAddress']);
$a = $a && isset($_POST['txtMobileNumber']);
$a = $a && isset($_POST['txtRegion']);
$a = $a && isset($_POST['txtHomeNumber']);
$a = $a && isset($_POST['txtCity']);
$a = $a && isset($_POST['txtWorkNumber']);
$a = $a && isset($_POST['txtPostalCode']);

if($a){
    unset($a);
    $txtEmail_Valid = (bool) preg_match('/^[A-Za-z0-9@!#$%&*+-=?^_`{|}~]+$/i', $server_txtEmail);
    $txtAddress_Valid = (bool) preg_match('/^[A-Za-z0-9 . , -]+$/i', $server_txtAddress);
    $txtMobileNumber_Valid = (bool) preg_match('/^[0-9]+$/i', $server_txtMobileNumber);
    $txtHomeNumber_Valid = (bool) preg_match('/^[0-9]+$/i', $server_txtHomeNumber);
    $txtWorkNumber_Valid = (bool) preg_match('/^[0-9]+$/i', $server_txtWorkNumber);
    $txtPostalCode_Valid = (bool) preg_match('/^[0-9]+$/i', $server_txtPostalCode);
    $txtRegion_Valid = 1;
    $txtCity_Valid = 1;

    // 0 for required field not to be empty.
    if(is_null($server_txtEmail) || $server_txtEmail == ''){
        $txtEmail_Validator = 'Email cannot be empty.';
        $txtEmail_Valid = 0;
    }
    elseif(!$txtEmail_Valid){
        $txtEmail_Validator = 'Email is not valid.';
    }


    if(is_null($server_txtAddress) || $server_txtAddress == ''){
        $txtAddress_Validator = '';
        $txtAddress_Valid = 1;
    }
    elseif(!$txtAddress_Valid){
        $txtAddress_Validator = 'Address is not valid.';
    }

    if(is_null($server_txtMobileNumber) || $server_txtMobileNumber == ''){
        $txtMobileNumber_Validator = 'Mobile Number cannot be empty.';
        $txtMobileNumber_Valid = 0;
    }
    elseif(!$txtMobileNumber_Valid){
        $txtMobileNumber_Validator = 'Mobile Number is not valid.';
    }    

    if(is_null($server_txtRegion) || $server_txtRegion == ''){
        $txtRegion_Validator = 'Please Select one.';
        $txtRegion_Valid = 0;
    }

    if(is_null($server_txtHomeNumber) || $server_txtHomeNumber == ''){
        $txtHomeNumber_Validator = '';
        $txtHomeNumber_Valid = 1;
    }
    elseif(!$txtHomeNumber_Valid){
        $txtHomeNumber_Validator = 'Home Number is not valid.';
    }

    if(is_null($server_txtCity) || $server_txtCity == ''){
        $txtCity_Validator = 'Please Select one.';
        $txtCity_Valid = 0;
    }

    if(is_null($server_txtWorkNumber) || $server_txtWorkNumber == ''){
        $txtWorkNumber_Validator = '';
        $txtWorkNumber_Valid = 1;
    }
    elseif(!$txtWorkNumber_Valid){
        $txtWorkNumber_Validator = 'Work Number is not valid.';
    }

    if(is_null($server_txtPostalCode) || $server_txtPostalCode == ''){
        $txtPostalCode_Validator = '';
        $txtPostalCode_Valid = 1;
    }
    elseif(!$txtPostalCode_Valid){
        $txtPostalCode_Validator = 'Postal Code is not vaid.';
    }


    $b=0;


    $a = $txtEmail_Valid;
    $a = $a && $txtAddress_Valid;
    $a = $a && $txtMobileNumber_Valid;
    $a = $a && $txtRegion_Valid;
    $a = $a && $txtHomeNumber_Valid;
    $a = $a && $txtCity_Valid;
    $a = $a && $txtWorkNumber_Valid;
    $a = $a && $txtPostalCode_Valid;

    if($a){
        unset($a);

        $query = "UPDATE studcontactstbl SET Email = '$server_txtEmail', Address = '$server_txtAddress', MobileNumber = '$server_txtMobileNumber', Region = '$server_txtRegion', HomeNumber = '$server_txtHomeNumber', City = '$server_txtCity', WorkNumber = '$server_txtWorkNumber', PostalCode = '$server_txtPostalCode' WHERE StudentID = '$StudentID'";
        $Result = mysql_query($query);
        echo "
             <script type='text/javascript'>
             </script>
             ";
        $b=2;
        }

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
                <a class="navbar-brand page-scroll" href="#page-top">Online Job Placement Management</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="../../../login-student.php?id=1">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>

    <div id="yellow-text-fields">
        <div class="white-holder">       
            <div class="row field">
                <div class="col-md-10">
                    <ul class="nav nav-tabs">
                        <li role="presentation" id="myinfo" class="item active"><a href="personal_info.php"><B>My Info</B></a></li>
                        <li role="presentation" id="resumelink" class="item"><a href="../resumelink/resumelink.php">Resumé Link</a></li>
                        <li role="presentation" id="applications" class="item"><a href="../applications/applications.php">Applications</a></li>
                        <li role="presentation" id="search-job" class="item"><a href="../search-job/search-job.php">Jobs</a></li>
                        <li role="presentation" id="settings" class="item"><a href="../settings/settings.php">Settings</a></li>
                    </ul>
                 </div>
                <div class="col-md-2 text-center">
                    <label>Your Student ID<h4>008-2012-0805</h4></label>
                </div>
            </div>
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
            <div class="space-1"></div>

            <div class"row">
                <div class="col-md-10 col-md-9">
                <?php
                if($b==2){
                    echo '<div class="alert alert-success">
                        <span class="glyphicon glyphicon-info-sign"></span> 
                        Contacts Information successfully updated.
                        </div>';
                    }
                ?>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <div class="form-group">
                                <label>Email <span>(*)</span></label>
                                <input type="text" class="form-control" id="Email" name="txtEmail" value="<?php if($b==1){ echo $Email; } else{ echo $server_txtEmail; } ?>">
                            </div>
                        </div>
                        <div class="col-md-6 fieldcol">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" id="Address" name="txtAddress" value="<?php if($b==1){ echo $Address; } else{ echo $server_txtAddress; } ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <div class="form-group">
                                <label>Mobile Number <span>(*)</span></label>
                                <input type="text" class="form-control" id="MobileNumber" name="txtMobileNumber" value="<?php if($b==1){ echo $MobileNumber; } else{ echo $server_txtMobileNumber; } ?>">
                            </div>
                        </div>
                        <div class="col-md-6 fieldcol">
                            <div class="form-group">
                                <label>City <span>(*)</span></label>
                                <select id="City" name="txtCity" class="form-control" style="width:100%; height:34px;" value = "<?php echo $City; ?>">
                                    <option value>- Please select one -</option>
                                    <option value="Caloocan City" 
                                    <?php 
                                    if($b==1){
                                    if($City=="Caloocan City") echo 'selected="selected"'; 
                                    }
                                    else{
                                     if($server_txtCity=="Caloocan City") echo 'selected="selected"';
                                    }
                                    ?>>
                                    Caloocan City
                                    </option>

                                    <option value="Las Pińas City" 
                                    <?php 
                                    if($b==1){
                                    if($City=="Las Pińas City") echo 'selected="selected"';
                                    }
                                    else{
                                    if($server_txtCity=="Las Pińas City") echo 'selected="selected"';
                                    }
                                    
                                    ?>>
                                    Las Pińas City
                                    </option>

                                    <option value="Makati City" 
                                    <?php
                                    if($b==1){
                                    if($City=="Makati City") echo 'selected="selected"';
                                    }
                                    else{
                                    if($server_txtCity=="Makati City") echo 'selected="selected"';
                                    } 
                                    ?>>
                                    Makati City
                                    </option>
                                    <option value="Malabon City" 
                                    <?php
                                    if($b==1){
                                    if($City=="Malabon City") echo 'selected="selected"'; 
                                    }
                                    else{
                                    if($server_txtCity=="Malabon City") echo 'selected="selected"'; 
                                    }
                                    ?>>
                                    Malabon City
                                    </option>

                                    <option value="Mandaluyong City" 
                                    <?php 
                                    if($b==1){
                                        if($City=="Mandaluyong City") echo 'selected="selected"'; 
                                    }
                                    else{
                                        if($server_txtCity=="Mandaluyong City") echo 'selected="selected"'; 
                                    }
                                    ?>>
                                    Mandaluyong City
                                    </option>

                                    <option value="Manila" 
                                    <?php 
                                    if($b==1){
                                     if($City=="Manila") echo 'selected="selected"';
                                    }
                                    else{
                                        if($server_txtCity=="Manila") echo 'selected="selected"';
                                    }
                                    ?>>
                                    Manila
                                    </option>

                                    <option value="Marikina City" 
                                    <?php 
                                    if($b==1){
                                    if($City=="Marikina City") echo 'selected="selected"'; 
                                    }
                                    else{
                                    if($server_txtCity=="Marikina City") echo 'selected="selected"'; 
                                    }
                                ?>>
                                Marikina City
                                </option>

                                <option value="Muntinlupa City"
                                <?php 
                                if($b==1){
                                    if($City=="Muntinlupa City") echo 'selected="selected"';
                                }
                                else{
                                    if($server_txtCity=="Muntinlupa City") echo 'selected="selected"';
                                }
                                ?>>
                                Muntinlupa City
                                </option>

                                <option value="Navotas City" 
                                <?php 
                                if($b==1){
                                    if($City=="Navotas City") echo 'selected="selected"'; 
                                }
                                else{
                                    if($server_txtCity=="Navotas City") echo 'selected="selected"'; 
                                }
                                ?>>
                                Navotas City
                                </option>

                                <option value="Parańaque City"
                                <?php 
                                if($b==1){
                                    if($City=="Parańaque City") echo 'selected="selected"';     
                                }
                                else{
                                    if($server_txtCity=="Parańaque City") echo 'selected="selected"'; 
                                }
                                
                                ?>>
                                Parańaque City
                                </option>


                                <option value="Pasay City" 
                                <?php 
                                if($b==1){
                                    if($City=="Pasay City") echo 'selected="selected"'; 
                                }
                                else{
                                    if($server_txtCity=="Pasay City") echo 'selected="selected"'; 
                                }
                                
                                ?>>
                                Pasay City
                                </option>

                                <option value="Pasig City" 
                                <?php 
                                if($b==1){
                                    if($City=="Pasig City") echo 'selected="selected"'; 
                                }
                                else{
                                    if($server_txtCity=="Pasig City") echo 'selected="selected"'; 
                                }
                                
                                ?>>
                                Pasig City
                                </option>

                                <option value="Pateros City" 
                                <?php 
                                if($b==1){
                                    if($City=="Pateros City") echo 'selected="selected"'; 
                                }
                                
                                else{
                                    if($server_txtCity=="Pateros City") echo 'selected="selected"'; 
                                }
                                ?>>
                                Pateros City
                                </option>

                                <option value="Quezon City" 
                                <?php
                                if($b==1){
                                    if($City=="Quezon City") echo 'selected="selected"'; 
                                } 
                                else{
                                    if($server_txtCity=="Quezon City") echo 'selected="selected"';
                                }
                                
                                ?>>
                                Quezon City
                                </option>

                                <option value="San Juan City" 
                                <?php 
                                if($b==1){
                                    if($City=="San Juan City") echo 'selected="selected"'; 
                                }
                                else{
                                    if($server_txtCity=="San Juan City") echo 'selected="selected"'; 
                                }

                                ?>>
                                San Juan City
                                </option>

                                <option value="Taguig City" 
                                <?php 
                                if($b==1){
                                    if($City=="Taguig City") echo 'selected="selected"'; 
                                }
                                else{
                                    if($server_txtCity=="Taguig City") echo 'selected="selected"';
                                }
                                
                                ?>>
                                Taguig City
                                </option>

                                <option value="Valenzuela City" 
                                <?php 
                                if($b==1){
                                    if($City=="Valenzuela City") echo 'selected="selected"'; 
                                }
                                else{
                                    if($server_txtCity=="Valenzuela City") echo 'selected="selected"'; 
                                }
                                
                                ?>>
                                Valenzuela City
                                </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <div class="form-group">
                                <label>Home Number</label>
                                <input type="text" class="form-control" id="HomeNumber" name="txtHomeNumber" value="<?php if($b==1){ echo $HomeNumber; } else{ echo $server_txtHomeNumber; } ?>">
                            </div>
                        </div>
                         <div class="col-md-6 fieldcol">
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input type="text" class="form-control" id="PostalCode" name="txtPostalCode" value="<?php if($b==1){ echo $PostalCode; } else{ echo $server_txtPostalCode; } ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row field">
                        <div class="col-md-6 fieldcol">
                            <div class="form-group">
                                <label>Work Number</label>
                                <input type="text" class="form-control" id="WorkNumber" name="txtWorkNumber" value="<?php if($b==1){ echo $WorkNumber; } else{ echo $server_txtWorkNumber; } ?>">
                            </div>
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
</html>