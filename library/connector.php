<?php
namespace library;
require_once "connect.php";
class connector{
    private static $conn;

    public static function connector(){
        if(is_null(self::$conn)){
            self::$conn = connect();
        }
        return self::$conn;
    }
}