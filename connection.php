<?php

$hostname = "mysql.hostinger.ph";
$user = "u987316885_e2edb";
$password = "o2ehQX3wqO";
$database ="u987316885_e2edb";

//$hostname = "localhost:3306";
//$user = "root";
//$password = "";
//$database = "e2edb";


$bd = mysql_connect($hostname, $user, $password) or die ("Could not connect"); //connection of php to navicat
//sensitive yung spacing... dito lang ^
mysql_select_db($database, $bd) or die("could not select"); //selection ng DATABASE name w/c is mydatabase;



class GSecureSQLConfig{
    static function get_mysqli_config($type = NULL){
        if(strtoupper($type) == 'LOCALHOST'){
            return array(
                'host'  => 'localhost:3306',
                'user'  => 'root',
                'pass'  => '',
                'db'    => 'e2edb'
            );
        }else{
            return array(
                'host'  => 'mysql.hostinger.ph',
                'user'  => 'u987316885_e2edb',
                'pass'  => 'o2ehQX3wqO',
                'db'    => 'u987316885_e2edb'
            );
        }
    }
}

class GSecureSQL{
    private static $config;
    private static function _get_mysqli_config(){
        self::$config = GSecureSQLConfig::get_mysqli_config();
    }

    static function query($sql, $has_return = FALSE, $types = NULL){
        self::_get_mysqli_config();
        $cn = new mysqli(
            self::$config['host'],
            self::$config['user'],
            self::$config['pass'],
            self::$config['db']
        );
        $st = $cn->prepare($sql);
        if(is_null($types)){
            if(!$has_return){
                $st->execute();
                $st->close();
                $cn->close();
                return 'Query has been executed';
            }else{
                $st->execute();
                $result = $st->get_result();
                $st->close();
                $cn->close();
                $ret = array();
                while($field = $result->fetch_object()){
                    array_push($ret, $field);
                }
                return $ret;
            }
        }else{
            if(!$has_return){
                $arg = func_get_args();
                $code = '$st->bind_param($types';
                for($i = 3; $i < count($arg); $i++){
                    $code .= ',$arg[' . $i . ']';
                }
                $code .= ');';
                eval($code);
                $st->execute();
                $st->close();
                $cn->close();
            }else{
                $arg = func_get_args();
                $code = '$st->bind_param($types';
                for($i = 3; $i < count($arg); $i++){
                    $code .= ',$arg[' . $i . ']';
                }
                $code .= ');';
                eval($code);
                $st->execute();
                $result = $st->get_result();
                $st->close();
                $cn->close();
                $ret = array();
                while($field = $result->fetch_object()){
                    array_push($ret, $field);
                }
                return $ret;
            }
        }
    }
}