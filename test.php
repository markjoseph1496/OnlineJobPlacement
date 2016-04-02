<?php

// your cPanel username
$cpanel_user = 'judeecaballero@gmail.com';

// your cPanel password
$cpanel_pass = 'judeelovejesus';

// your cPanel skin
$cpanel_skin = 'x2';

// your cPanel domain
$cpanel_host = 'mx1.hostinger.ph';

// subdomain name
$subdomain = 'test';

// directory - defaults to public_html/subdomain_name
$dir = 'public_html/subdomains';

// create the subdomain

$sock = fsockopen($cpanel_host,2082);
if(!$sock) {
    print('Socket error');
    exit();
}

$pass = base64_encode("$cpanel_user:$cpanel_pass");
$in = "GET /frontend/$cpanel_skin/subdomain/doadddomain.html?rootdomain=$cpanel_host&domain=$subdomain&dir=$dir\r\n";
$in .= "HTTP/1.0\r\n";
$in .= "Host:$cpanel_host\r\n";
$in .= "Authorization: Basic $pass\r\n";
$in .= "\r\n";

fputs($sock, $in);
while (!feof($sock)) {
    $result .= fgets ($sock,128);
}
fclose($sock);

echo $result;