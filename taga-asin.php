<?php
/**
 * Created by PhpStorm.
 * User: GhabX
 * Date: 1/4/2016
 * Time: 8:43 PM
 */

include 'passworder.php';

echo 'Ito ay kasangkapan para sa ikabubuti ng bayan xD <br/>';
if(isset($_GET['p'])){
    echo 'Salt: ';
    $salt = generate_salt();
    $pass = passworder($_GET['p'], $salt);
    echo $salt . '<br/>';
    echo 'Pass: ';
    echo $pass;
}