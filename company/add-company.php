<?php
include('../connection.php');
session_start();
$CompanyID = $_SESSION['CompanyID'];

// Create Calendar Event
  if (isset($_GET['BtnCalendarsave'])) {

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
  if (isset($_GET['btnsave'])) {
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
          
          </script>
        ";
        
        $PositionID = mysql_fetch_array(mysql_query("SELECT MAX(PositionID) AS `index` FROM comppositiontbl"))['index'];

        foreach ($_GET['training'] as $training) {

          $query3 = "INSERT INTO comptrainingtbl (CompanyID,PositionID,Training) VALUES ('$CompanyID','$PositionID','$training')";
          mysql_query($query3);
        } 
        foreach ($_GET['knowledge'] as $knowledge ) {
          
          $query4 = "INSERT INTO comprequirementtbl (CompanyID,PositionID,Knowledge) VALUES ('$CompanyID','$PositionID','$knowledge')";
          mysql_query($query4);
        }
    }
// End of Create Position

