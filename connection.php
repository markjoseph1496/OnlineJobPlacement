<?php

class GSecureSQLConfig
{
    static function get_mysqli_config($type = NULL)
    {
        if (strtoupper($type) == 'LOCALHOST') {
            return array(
                'host' => 'localhost:3306',
                'user' => 'root',
                'pass' => '',
                'db' => 'e2edb'
            );
        } else {
            return array(
                'host' => 'mysql.hostinger.ph',
                'user' => 'u987316885_e2edb',
                'pass' => 'o2ehQX3wqO',
                'db' => 'u987316885_e2edb'
            );
        }
    }
}


class GSecureSQL
{
    private static $config;

    private static function _get_mysqli_config()
    {
        self::$config = GSecureSQLConfig::get_mysqli_config();
    }

    static function query($sql, $has_return = FALSE, $types = NULL)
    {
        // validation

        // -----
        self::_get_mysqli_config();
        $cn = new mysqli(
            self::$config['host'],
            self::$config['user'],
            self::$config['pass'],
            self::$config['db']
        );
        $ret = NULL;

        $st = $cn->prepare($sql);

        if($cn->errno <> 0){
            trigger_error('MySQL Connection Error #' . $cn->errno . ': ' . $cn->error, E_USER_ERROR);
        }
        if (is_null($types)) {
            if (!$has_return) {
                $st->execute();
                $st->close();
                $cn->close();
                $ret = 'Query has been executed';
            } else {
                $st->execute();
                $result = $st->get_result();
                $ret = array();
                while ($field = $result->fetch_object()) {
                    array_push($ret, $field);
                }
                $st->close();
                $cn->close();
            }
        } else {
            if (!$has_return) {
                $arg = func_get_args();
                $code = '$st->bind_param($types';
                for ($i = 3; $i < count($arg); $i++) {
                    $code .= ',$arg[' . $i . ']';
                }
                $code .= ');';
                eval($code);
                $st->execute();
                $st->close();
                $cn->close();
            } else {
                $arg = func_get_args();
                $code = '$st->bind_param($types';
                for ($i = 3; $i < count($arg); $i++) {
                    $code .= ',$arg[' . $i . ']';
                }
                $code .= ');';
                eval($code);
                $st->execute();
                echo $st->field_count;

                $code_result = '$st->bind_result(';
                $bool = false;
                $p = array();
                for($i = 0; $i < $st->field_count; $i++){
                    if(!$bool){
                        $bool = true;
                        $code_result .= '$p[' . $i . ']';
                    }else{
                        $code_result .= ',$p[' . $i . ']';
                    }
                }
                $code_result .= ');';
                eval($code_result);

                $ret = array();
                while($st->fetch()){
                    array_push($ret, $p);
                }

                $st->close();
                $cn->close();
            }
        }
        return $ret;
    }
}

print_r(GSecureSQL::query(
    'SELECT * FROM `studentinfotbl` WHERE `StudentID` = ?',
    TRUE,
    's',
    '00820120029'
));

echo '<br/>';
