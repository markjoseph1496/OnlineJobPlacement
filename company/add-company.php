<?php
include('../connection.php');
session_start();
$CompanyID = $_SESSION['CompanyID'];

// Create Calendar Event
  if (isset($_GET['datefrom'])) {

      $datefrom = $_GET['datefrom'];
      $dateto = $_GET['dateto'];
      $eventtitle =  $_GET['eventtitle'];
      $location = $_GET['location'];
      $descrip = $_GET['descrip'];

      $query = ("INSERT INTO compeventtbl (CompanyID,EventTitle,EventDatef,EventDatet,Location,Description) values ('$CompanyID','$eventtitle','$datefrom','$dateto','$location','$descrip')");
      $Result = mysql_query($query);
    echo "
    <script type='text/javascript'>
    location.href='company-calendar.php?id=EventAdd'
    </script>
    ";
  }
// End of Calendar Event


// Create Position
  if (isset($_GET['DateFrom'])) {
        $DateFrom = $_GET['DateFrom'];
        $DateTo = $_GET['DateTo'];
        $PLevel = $_GET['PLevel'];
        $Specialization = $_GET['Specialization'];
        $EType = $_GET['EType'];
        $AvPosition = $_GET['AvPosition'];
        $Salary = $_GET['Salary'];
        $YExperience = $_GET['YExperience'];

        $query1 = ("INSERT INTO comppositiontbl (CompanyID,PostingDateFrom,PostingDateTo,PositionLevel,JSpecialization,EType,AvPosition,MonthlySalary,YExperience) VALUES ('$CompanyID','$DateFrom','$DateTo','$PLevel','$Specialization','$EType','$AvPosition','$Salary','$YExperience')");
        $result1 = mysql_query($query1);
        echo "
          <script type='text/javascript'>
          location.href='company-positionlist.php?id=1'
          </script>
        ";
    }
// End of Create Position
?>