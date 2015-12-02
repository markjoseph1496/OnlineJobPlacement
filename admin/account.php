<!DOCTYPE html>

<?php 
/*
include('../connection.php');
session_start();


$x = $_SESSION['AdminID'];

$qry = "SELECT * FROM admintbl WHERE AdminID ='$x'";
$result = mysql_query($qry);
        while($qry = mysql_fetch_Array($result))
        {       
                $Email = $qry['Email'];
                $Password = $qry['Password'];
                $FirstName = $qry['FirstName'];
                $MiddleName = $qry['MiddleName'];
                $LastName = $qry['LastName'];
                $Position = $qry['Position'];
                $Department = $qry['Department'];
                $Address = $qry['Address'];
                $ContactNumber = $qry['ContactNumber'];
        }


$server_Email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '';
$server_NewEmail = isset($_POST['txtNewEmail']) ? $_POST['txtNewEmail'] : '';
$server_ConfirmEmail = isset($_POST['txtConfirmEmail']) ? $_POST['txtConfirmEmail'] : '';

*/
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Info</title>

     <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/basic-template.css" rel="stylesheet" />


    <!-- BootstrapValidator CSS -->
    <link href="../css/bootstrapValidator.min.css" rel="stylesheet"/>
  
    <!-- jQuery and Bootstrap JS -->
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
      
    <!-- BootstrapValidator -->
    <script src="../js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- CSS -->
    <link href="../css/agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/roboto.css" rel="stylesheet" type="text/css">
</head>

<style = "text/css">
input.form-control{
  height: 5px;
}
</style>

<form id="userForm" method="post" style="display: none;">
    <div class="row"> 
        <div class="col-md-12"> 
            <form class="form-horizontal"> 
                <div class="form-group"> 
                    <label class="col-md-4 control-label" for="name">Email</label>  
                        <div class="col-md-6"> 
                            <input name="txtEmail" type="text" class="form-control input-md" placeholder="Your email"> 
                        </div> 
                </div> 
                <div class="form-group"> 
                    <label class="col-md-4 control-label" for="name">New Email</label>  
                        <div class="col-md-6"> 
                            <input name="txtNewEmail" type="text" placeholder="Your new email" class="form-control input-md"> 
                        </div> 
                </div> 
                <div class="form-group"> 
                    <label class="col-md-4 control-label" for="name">Confirm Email</label>  
                        <div class="col-md-6"> 
                            <input name="txtConfirmEmail" type="text" placeholder="Your new email" class="form-control input-md"> 
                    </div> 
                </div> 
            </form> 
        </div> 
    </div>
</form>
<body id="page-top" class="index bg">
    <script>

            $(document).on("click", ".EmailPopup", function(result) {

                bootbox.dialog({
                   
                    message:  $('#userForm'),
              });
            });
    </script>
  <form id="Account">
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
                        <a class="page-scroll" href="../login-admin.php?id=1">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>

    <div class="white-holder-3" id = "yellow-text-fields">
        <ul class="nav nav-tabs">
            <li role="presentation" id="myinfo" class="item"><a href="admin.php">Home</a></li>
            <li role="presentation" id="resumelink" class="item" ><a href="reports.php">Reports</a></li>
            <li role="presentation" id="applications" class="item active"><a href="account.php"><B>Account</B></a></li>
            <li role="presentation" id="applications" class="item"><a href="requested.php">Requested</a></li>
            <li role="presentation" id="applications" class="item"><a href="companylist.php">Company List</a></li>
            <li role="presentation" id="applications" class="item"><a href="adviserlist.php">Adviser List</a></li>
            <li role="presentation" id="applications" class="item"><a href="maintenance.php">Maintenance </a></li>
            
        </ul>
        <div class="space"></div>
        <div class = "container">
            <div class = "col-md-12 fieldcol">
                <a href="records.php" class=" btn btn-default adduser" style="float:right;">Add User</a>
            </div>
                <div>&nbsp;</div>
                <form method = "POST">
                    <div class = "col-md-12"> 
                        <div class = "panel panel-warning" id = "panel">
                            <div class = "panel-heading">
                                    <h3 class = "panel-title">Personal Information</h3>
                                </div>
                                <div class = "panel-body">
                                    <div class="row field">
                                        <div class = "col-md-4 fieldcol">
                                            <label>Email:</label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <a data-bb="ChangeEmail" class="bb-alert alert alert-info" style="display: none;" href=#>
                                            <a href=# class="btn btn-default EmailPopup">Change Email</a>
                                        </div>
                                    </div>
                                    <div class="row field">
                                        <div class = "col-md-4 fieldcol">
                                            <label>Password:</label>
                                        </div>
                                        <div class = "col-md-8 fieldcol popbox">
                                            <a href="#popup2" class="btn btn-default" id="" name="">Change Password</a>
                                        </div>
                                    </div>
                                    <div class="row field">
                                        <div class = "col-md-4 fieldcol">
                                            <label>First Name:</label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="FirstName" name="FirstName" style = "height:34px;" value = "<?php echo $FirstName; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row field">
                                        <div class = "col-md-4 fieldcol">
                                            <label>Middle Name:</label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class = "form-group">
                                                <input type="text" class="form-control" id="MiddleName" name="MiddleName" style = "height:34px;" value="<?php echo $MiddleName; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row field">
                                        <div class = "col-md-4 fieldcol">
                                            <label>Last Name:</label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class = "form-group">
                                            <input type="text" class="form-control" id="LastName" name="LastName" style = "height:34px;" value="<?php echo $LastName; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row field">
                                        <div class = "col-md-4 fieldcol">
                                            <label>Position:</label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class = "form-group">
                                            <input type="text" class="form-control" id="Position" name="Position" style = "height:34px;" value="<?php echo $Position; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row field">
                                        <div class = "col-md-4 fieldcol">
                                            <label>Department:</label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class = "form=group">
                                            <input type="text" class="form-control" id="Department" name="Department" style = "height:34px;" value="<?php echo $Department; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row field">
                                        <div class = "col-md-4 fieldcol">
                                            <div class = "form-group">
                                            <label>Address:  <?php echo $server_Email ?> </label>
                                            </div>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class = "form-group">
                                            <textarea name = "Address" id = "Address" rows="5" cols= "91"><?php echo $Address; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row field">
                                        <div class = "col-md-4 fieldcol">
                                            <label>Contact Number:</label>
                                        </div>
                                        <div class = "col-md-8 fieldcol">
                                            <div class = "form-group">
                                            <input type="text" class="form-control" id="ContactNumber" name="ContactNumber" style = "height:34px;" value=" <?php echo $ContactNumber; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type = "submit" class = "btn btn-danger " id = "save" name = "btnSave"><B> SAVE </B></button>
                        <div class = "space-1"></div>
                        <button type = "submit" class = "btn btn-danger " id = "cancel" name = "btnCancel"><B>CANCEL</B> </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php

/*
include('../connection.php');

if(isset($_POST['btnSave'])){

   $fname = $_POST['FirstName'];
   $mname = $_POST['MiddleName'];
   $lname = $_POST['LastName'];
   $position = $_POST['Position'];
   $dept = $_POST['Department'];
   $address = htmlspecialchars($_POST['Address']);
   $contact = $_POST['ContactNumber'];

  

   $query = "UPDATE admintbl SET FirstName = '$fname', MiddleName = '$mname', LastName = '$lname', Position = '$position', Department = '$dept', Address = '$address', ContactNumber = '$contact' WHERE AdminID  = '$x'";
   $Result = mysql_query($query);
   echo "
         <script type='text/javascript'>
         location.href='./account.php';
         </script>
         ";
}

if(isset($_POST['btnUpdatePass'])){

  $qry1 = "SELECT * FROM admintbl WHERE AdminID ='$x'";
  $result1 = mysql_query($qry1);
        while($qry1 = mysql_fetch_Array($result1))
        {       
                $Password1 = $qry1['Password'];
        }

  $OldPass = $_POST['txtOldPass'];
  $NewPass = $_POST['txtNewPass'];
  $RePass = $_POST['txtRePass'];

  if($OldPass <> $Password1){
            echo "
            <script type='text/javascript'>
            alert('Incorrect Password. Please try again.');
            </script>
            ";
        }
        else {
            if ($NewPass <> $RePass) {
                echo "
                <script type='text/javascript'>
                alert('Password mismatch. Please try again.');
                </script>
                ";
            }
            else{
                $query = "UPDATE admintbl SET Password = '$NewPass' WHERE AdminID = '$x'";
                $Result = mysql_query($query);
                echo "
                <script type='text/javascript'>
                location.href='./Account.php';
                alert('Password Changed!');
                </script>
                ";
            }
        }
}

if(isset($_POST['btnUpdateEmail'])){

  $qry1 = "SELECT * FROM admintbl WHERE AdminID ='$x'";
  $result1 = mysql_query($qry1);
        while($qry1 = mysql_fetch_Array($result1))
        {       
                $NewEmail = $qry1['Email'];
        }

  $NewEmail = $_POST['txtEmail'];
  $RetypeEmail = $_POST['txtRetypeEmail'];

  if($NewEmail <> $RetypeEmail){
            echo "
            <script type='text/javascript'>
            alert('Email mismatch. Please try again.');
            </script>
            ";
        }
        else {
            $query = "UPDATE admintbl SET Email = '$NewEmail' WHERE AdminID = '$x'";
            $Result = mysql_query($query);
            echo "
            <script type='text/javascript'>
            location.href='./Account.php';
            alert('Email Changed!');
            </script>
            ";
        }
}
*/
?>

<script type="text/javascript">
    $(document).ready(function (){
        var validator = $("#Account").bootstrapValidator({
              feedbackIcons: {
                    valid: "glyphicon glyphicon-ok",
                    invalid: "glyphicon glyphicon-remove",
                    validating: "glyphicon glyphicon-refresh"
              },
              fields: {
                    FirstName: {
                        validators: {
                            notEmpty: {
                                message: "First Name is required"
                            },
                            stringLength: {
                                min: 2,
                                max: 15,
                                message: "First Name must be 3-15 characters long"
                            }
                        }
                    },
                    MiddleName: {
                        validators: {
                            notEmpty: {
                                message: ""
                            },
                            stringLength: {
                                min: 2,
                                max: 15,
                                message: ""
                            }
                        }
                    },
                    LastName: {
                        validators: {
                            notEmpty: {
                                message: "Last Name is required"
                            },
                            stringLength: {
                                min: 2,
                                max: 15,
                                message: "Last Name must be 2-15 characters long"

                            }
                        }
                    },
                    Position: {
                        validators: {
                            notEmpty: {
                                message: "Position is required"
                            },
                            stringLength: {
                                min: 10,
                                max: 150,
                                message: "Position must be 10-150 characters long"

                            }
                        }
                    },
                    Department: {
                        validators: {
                            notEmpty: {
                                message: "Department is required"
                            },
                            stringLength: {
                                min: 10,
                                max: 150,
                                message: "Department must be 10-150 characters long"

                            }
                        }
                    },
                    Address: {
                        validators: {
                            notEmpty: {
                                message: "Address is required"
                            },
                            stringLength: {
                                min: 10,
                                max: 150,
                                message: "Address must be 10-150 characters long"

                            }
                        }
                    },
                    ContactNumber: {
                        validators: {
                            notEmpty: {
                                message: "Contact Number is required"
                            },
                            stringLength: {
                                min: 11,
                                max: 11,
                                message: "Contact Number must be 11 characters long"

                            }
                        }
                    }
              }
        });
    });
</script>
</body>
</html>