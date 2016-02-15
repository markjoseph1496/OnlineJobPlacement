<?php
/**
 * Created by PhpStorm.
 * User: GhabX
 * Date: 2/15/2016
 * Time: 11:51 PM
 */

class CommonFunctions{
    function base_url($path){
        return sprintf(
            "%s://%s/%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            $path
        );
    }

    function admin_login_check(){
        if(!isset($_SESSION['AdminID'])){
            header('Location: ' . $this->base_url('login-admin.php'));
            die();
        }
    }

    function adviser_login_check(){
        if(!isset($_SESSION['AdviserID'])){
            header('Location: ' . $this->base_url('login-adviser.php'));
            die();
        }
    }

    function company_login_check(){
        if(!isset($_SESSION['CompanyID'])){
            header('Location: ' . $this->base_url('login-company.php'));
            die();
        }
    }

    function student_login_check(){
        if(!isset($_SESSION['StudentID'])){
            header('Location: ' . $this->base_url('login-student.php'));
            die();
        }
    }
}


$common_functions = new CommonFunctions;