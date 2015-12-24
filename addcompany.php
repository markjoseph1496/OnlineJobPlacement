<?php
include('connection.php');

if(isset($_POST['type'])){
    $isAvailable = true;
    $CompanyName = $_POST['CompanyName'];
    $query = "SELECT CompanyName FROM companyinfotbl WHERE CompanyName = '$CompanyName'";
    $Result = mysql_query($query);
    if($Result){
        if(mysql_num_rows($Result) == 0){
            $isAvailable = true;
        }
        else{
            $isAvailable = false;
        }
    }
    echo json_encode(array(
        'valid' => $isAvailable,
    ));
}

if(isset($_GET['CompanyName'])){

   $CompanyName = $_GET['CompanyName'];
   $industry = $_GET['Industry'];
   $city_id = $_GET['City'];
   $email = $_GET['Email'];
   $password = $_GET['sPassword'];
   $fname = $_GET['FirstName'];
   $mname = $_GET['MiddleName'];
   $lname = $_GET['LastName'];
   $position = $_GET['Position'];
   $department = $_GET['Department'];

   $query = "INSERT INTO companyinfotbl (CompanyName,Industry,City,Email,Password,FirstName,MiddleName,LastName,Position,Department) values  ('$CompanyName','$industry','$city_id','$email','$password','$fname','$mname','$lname','$position','$department')";

   $Result = mysql_query($query);
   echo "
          <script type='text/javascript'>
         alert('You have successfully registered');
         location.href='login-company.php';
         </script>
         ";
}
?>