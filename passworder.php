<?php
/**
 * Created by PhpStorm.
 * User: GhabX
 * Date: 12/27/2015
 * Time: 7:15 PM
 */
if(!(function_exists('generate_salt'))){
    function generate_salt(){
        return hash('sha512', mt_rand(0, PHP_INT_MAX) . mt_rand(0, PHP_INT_MAX) . mt_rand(0, PHP_INT_MAX));
    }
}

if(!(function_exists('passworder'))){
    function passworder($plaintext_password, $generated_salt){
        return hash('sha512', $plaintext_password . $generated_salt);
    }
}

