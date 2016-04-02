<?php

include('xmlapi-php-master/xmlapi.php');

$cpanelusr = 'judeecaballero@gmail.com';
$cpanelpass = 'judeelovejesus';
$xmlapi = new xmlapi('mx1.hostinger.ph');
$xmlapi->set_port( 2525 );
$xmlapi->password_auth($cpanelusr,$cpanelpass);
$xmlapi->set_debug(0); //output actions in the error log 1 for true and 0 false
$result = $xmlapi->api1_query($cpanelusr, 'SubDomain', 'addsubdomain', array('subdomainname','domain.com',0,0, '/public_html/subdomains/subdomainname'));
?>
    