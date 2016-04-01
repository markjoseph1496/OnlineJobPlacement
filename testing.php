<form method="POST">

    Subdomain Name
    <input type="text" name="Subdomain"><br>
    <input type="hidden" name="user" value="judeecaballero@gmail.com">
    <input type="hidden" name="password" value="judeelovejesus">
    <input type="hidden" name="Domain" value="teachermanagementsystem.com">
    <button type="submit" name="btnSubmit">Save</button>
</form>

<?php
include("connection.php");
include("subdomain_helper.php");

if(isset($_POST['btnSubmit'])){
    $Subdomain = $_POST['Subdomain'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    $domain = $_POST['Domain'];


    create_subdomain($Subdomain,$user,$password,$domain);
}
