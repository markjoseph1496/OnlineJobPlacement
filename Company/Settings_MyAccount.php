<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Info</title>

     <!-- Bootstrap Core CSS -->
    <link href="../css/admin.bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="../css/admin.agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>

<style type="text/css">

.tabletitle {
    color: #000000;
    padding: 7px;
    border: 1px solid  #E5E4E2;
}

table {
    width: 100%;
    border-collapse: collapse;
}


thead {
    display: table-header-group;
    vertical-align: middle;
    border-color: inherit;
    height:20px;
}

.Applicants tr:nth-of-type(2n+1), .tablelist tr:nth-of-type(2n+1) {
    background: none repeat scroll 0 0 #f3eeee;
}
tr {
    display: table-row;
    vertical-align: inherit;
    border-color: inherit;
}
td, th {
    text-align: left;
    padding: 7px 10px;
}

td, th {
    display: table-cell;
    vertical-align: inherit;
}

.tcenter {
    text-align: center;
}

a {
    color: #5f3333;
}
a {
    text-decoration: none;
}
a:-webkit-any-link {
    cursor: auto;
}
h1,  {
    color: #000000;
}
:-webkit-any(article,aside,nav,section) h1 {
    font-size: 1.5em;
    -webkit-margin-before: 0.83em;
    -webkit-margin-after: 0.83em;
}

.resume_bg{
    height:1000px;
}

 #save
            {
              width: 300px;
              height: 40px;
              background-color: #2F817E;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 500px;
            }
            #save:hover
            {
              background-color: #006681;
            }   
#cancel
            {
              width: 300px;
              height: 40px;
              background-color: #fcdc66;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 500px;
            }
            #cancel:hover
            {
              background-color: #fed136;
            }   
.nav-pills>li>a{
border-radius:2px;

}

.nav>li>a {
padding:5px 10px;


}

.nav>li>a {
position: relative;
display:block;

}

.yellow a {
background-color: #fed136;
border-color: #000;
color: #006681;
}

.yellow :hover {
border-color: #000;
background-color: #006681;
}

::selection {
    text-shadow: none;
    background: #fed136;
}

.space1 {
    margin: 1rem 0rem;
    border-bottom: 0em;
    line-height: 1;
    height: 0em;
}  

#submenu{
    margin-left: 50px;
}  
 #save
            {
              width: 300px;
              height: 40px;
              background-color: #2F817E;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 500px;
            }
            #save:hover
            {
              background-color: #006681;
            }   
#cancel
            {
              width: 300px;
              height: 40px;
              background-color: #fcdc66;
              border: 1px solid #E5E4E2;
              border-radius: 4px 4px 4px 4px;
              margin-left: 500px;
            }
            #cancel:hover
            {
              background-color: #fed136;
            }
.adduser{
    margin-left: 250px;
    width: 600px;
}      
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
  margin-top: 300px;
}

.popup h4 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 50%;

  }
  .popup{
    width: 30%;
  }
}
.update {
    margin-left: 150px;
}
.update1 {
    margin-left: 130px;
}      
</style>

<body id="page-top" class="index resume">
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

     <div class="resume_bg">
       <ul class="nav nav-tabs">
            <li role="presentation" id="company" class="item "><a href="Company.php">Home</a></li>
            <li role="presentation" id="dbase" class="item" ><a href="Positions.php">Positions</a></li>
            <li role="presentation" id="dbase" class="item" ><a href="Database.php">Database</a></li>
            <li role="presentation" id="report" class="item"><a href="Report.php">Reports</a></li>
            <li role="presentation" id="setting" class="item active" ><a href="Settings.php">Settings</a></li>
            <li role="presentation" id="resumelink" class="item"><a href="Resumesearch.php">Resumelink Search</a></li>           
        </ul>

        <div class="space1"></div>
       
         <ul class="nav nav-pills" id = "submenu">
            <li class="yellow"><a href="Settings.php">Company</a></li>
            <li class="yellow"><a href="Settings_Calendar.php">Calendar</a></li>
            <li class="yellow"><a href="Settings_Users.php">User</a></li>
            <li class="yellow active"><a href="Settings_MyAccount.php">My Account</a></li>
        </ul>

        
        <div class = "container">
            <div class = "col-md-12"> 
                <div class = "space1"></div>
            <div class = "adduser">
                <div class = "panel panel-warning">
                <div class = "panel-heading">
                <h3 class = "panel-title">My Account</h3>
                </div>
                 <form method = "POST">
            <div class = "panel-body">
               <table class = "infotable">
                <tbody>
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Email: </label>
                 </td>
                <td> 
                   princetj.21@gmail.com
                </td>
                <div class="box">
                     <a class="btn btn-default" href="#popup1" style=" margin-left: 350px; margin-bottom:-90px;" >Change email</a>
                   </div>
                </tr>
                
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Password: </label>
                 </td>
                <td> 
                   ************
                </td>
                <div class="box">
                     <a class="btn btn-default" href="#popup2" style=" margin-left: 350px; margin-bottom:-135px"  >Change Password</a>
                   </div>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> First Name: </label>
                 </td>
                <td> 
                    <input type = "text" name = "fname" id = "usr" class = "form-control">
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Middle Name: </label>
                 </td>
                <td> 
                    <input type = "text" name = "mname" id = "usr" class = "form-control" >
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Last Name: </label>
                 </td>
                <td> 
                    <input type = "text" name = "lname" id = "usr" class = "form-control">
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Position: </label>
                 </td>
                <td> 
                    <input type = "text" name = "position" id = "usr" class = "form-control">
                </td>
                </tr>

                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Department: </label>
                 </td>
                <td> 
                    <input type = "text" name = "dept" id = "usr" class = "form-control" >
                </td>
                </tr>
                
                <tr>
                <td> 
                    <label = "usr" class = "control-label"> Address: </label>
                 </td>
                <td> 
                   <textarea name = "address" id = "add" rows="3" cols= "55"></textarea>
                </td>
                </tr>

                 <tr>
                <td> 
                    <label = "usr" class = "control-label"> Contact Number: </label>
                 </td>
                <td> 
                    <input type = "text" name = "contact" id = "usr" class = "form-control">
                </td>
                </tr>

                </tbody>
                </table>
            </div>
            </div>
            </div>
            </div>  

         </div>
           <button type = "submit" class = "btn btn-danger " id = "save" href= "#"><b> SAVE </b></button>
            <div class = "space"></div>
             <button type = "submit" class = "btn btn-danger " id = "cancel"><b> CANCEL</b> </button>
         </form>
    </div>

<script>
  $(function(){
            
        $("#state_id").change(function(){
                
            $("#state").val($("#state_id option:selected").text());
                
            get_city_select("city",$(this).val());
                
        });

        formRules();                    
            
        $('#edit_email_btn').click(function(e) {
            changeEmail();
        });

        $('#edit_password_btn').click(function(e) {
            changePassword();
        });
            
        setupSchoolEmailRules();         
        setupSchoolPasswordRules();     
        
        $('#save').click(function(e) {
            $(this).removeClass('ui-state-focus');
            $('#entry_form').submit();
            e.preventDefault(); 
        });

        $('#cancel').click(function(e) {
            $(this).removeClass('ui-state-focus');
            window.location = siteUrl + 'admin';
            e.preventDefault(); 
        });
            
    });
    


</script>


<!--change-->
<div id="popup1" class="overlay">
    <div class="popup">
        <h4>Change Email</h4>
        <a class="close" href="#">&times;</a>
        <div class="content">
            <div class = "col-md-4">
          <label = "usr" class = "control-label"> New Email: </label>
          </div>
           <div class = "col-md-8">
          <input type="text"  class="form-control">
          </div><br><br>
          <div class = "col-md-4">
          <label = "usr" class = "control-label"> Retype Email: </label>
          </div>
           <div class = "col-md-8">
          <input type="text"  class="form-control">
          </div>
          <br><br>
          <div class = "update">
           <button type = "submit" class = "btn btn-danger "> Update Email</button>
            <button type = "submit" class = "btn btn-danger "> Cancel </button>
         </div>
        </div>
    </div>
</div>

<div id="popup2" class="overlay">
    <div class="popup">
        <h4>Change Password</h4>
        <a class="close" href="#">&times;</a>
        <div class="content">
            
            <div class = "col-md-5">
          <label = "usr" class = "control-label"> Old Password: </label>
          </div>
           <div class = "col-md-7">
          <input type="text"  class="form-control">
          </div><br><br>
          <div class = "col-md-5">
          <label = "usr" class = "control-label"> New Password: </label>
          </div>
           <div class = "col-md-7">
          <input type="text"  class="form-control">
          </div><br><br>
          <div class = "col-md-5">
          <label = "usr" class = "control-label"> Retype Password: </label>
          </div>
           <div class = "col-md-7">
          <input type="text"  class="form-control">
          </div>
          <br><br>
          <div class = "update1">
           <button type = "submit" class = "btn btn-danger "> Update Password</button>
            <button type = "submit" class = "btn btn-danger "> Cancel </button>
         </div>
        </div>
    </div>
</div>

</body>
 