<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online JPMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="../css/agency.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/ffonts/roboto.css" rel="stylesheet" type="text/css">
</head>

<body id="page-top" class="index bg">
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

    
    <div class="white-holder-3">
        <ul class="nav nav-tabs">
            <li role="presentation" id="myinfo" class="item "><a href="Admin.php">Home</a></li>
            <li role="presentation" id="resumelink" class="item active"><a href="Reports.php">Reports</a></li>
            <li role="presentation" id="applications" class="item"><a href="Account.php">Account</a></li>
            <li role="presentation" id="applications" class="item"><a href="Requested.php">Requested</a></li>
            <li role="presentation" id="applications" class="item "><a href="CompanyList.php">Company List</a></li>
            <li role="presentation" id="applications" class="item "><a href="AdviserList.php">Adviser List</a></li>
            <li role="presentation" id="applications" class="item"><a href="Maintenance.php">Maintenance </a></li>
            
        </ul>
        <div class="space-1"></div>
        <ul class="nav nav-pills" id="nav-submenu">
            <li class="yellow"><a href="reports.php">Reports</a></li>
            <li class="yellow active"><a href="OJT-reports.php">OJT Reports</a></li>
        </ul>
        <div class="space-1"></div>

        <div class="container">
            <div class="col-md-12 box">
                <div class="col-md-6">
                    <h3>REPORTS</h3>
                    <label>TOTAL NUMBER OF STUDENTS: 10</label>
                </div>
                <div class = "container">
                    <div class = "col-md-6"><br>
                        <span class="combodate">
                            <select id="" name="" class="month" style="width:25%; height:34px;">
                                <option value="00">- Month</option>
                                <option value="01">January</option>
                                <option value="02">February</option> 
                                <option value="03">March</option> 
                                <option value="04">April</option> 
                                <option value="05">May</option> 
                                <option value="06">June</option> 
                                <option value="07">July</option> 
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                            <select id="" name="" class="year" style="width:30%; height:34px;">
                                <option value="00">- Year Graduated</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                            </select>
                        </span> 
                    </div>
                </div>
            </div>
            <table class = "Applicants table" width = "100%" cellpadding = "0">
                <thead>
                    <tr></tr>
                    <tr>
                        <th class = "tabletitle">Student ID</th>
                        <th class = "tabletitle">Student Name</th>
                        <th class = "tabletitle">Company</th>
                        <th class = "tabletitle">Company Address</th>
                        <th class = "tabletitle">Contact Number</th>
                        <th class = "tabletitle">Supervisor</th>
                        <th class = "tabletitle">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>008-2012-0805</td>
                        <td><a href=".php">008-2012-0805</td>
                        <td>008-2012-0805</td>
                        <td>008-2012-0805</td>
                        <td>008-2012-0805</td>
                        <td>008-2012-0805</td>
                        <td>008-2012-0805</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>