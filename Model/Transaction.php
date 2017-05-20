<?php
spl_autoload_register(function($class){
    if(file_exists("{$class}.php")){
        require_once "{$class}.php";
        return true;
    }
});

class Transaction {
    private static $conn;

    private function __construct() {}

    public static function open($database){
        if(empty(self::$conn)){
            self::$conn = Connection::open($database);
            self::$conn->beginTransaction();
        }
    }

    public static function get(){
        return self::$conn;
    }

    public static function rollBack(){
        if(self::$conn){
            self::$conn->rollback();
            self::$conn = NULL;
        }
    }

    public static function close(){
        if(self::$conn){
            self::$conn->commit();
            self::$conn = NULL;
        }
    }
}
