<?php
include('../connection.php');
session_start();
$CompanyID = $_SESSION['CompanyID'];

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
        location.href = 'company-calendarcreateevent.php?id=EventAdd';
        </script>
      ";
  }
?>