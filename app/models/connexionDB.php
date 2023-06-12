<?php
namespace app\models;
use PDO;

class connexionDB {
    protected static $db;

 
    //designe patern singleton
    public static function database()
    {
        if(is_null(static::$db))
        { 
            static::$db = new PDO('mysql:host=localhost;dbname=medical_center', 'root', '');
            var_dump("db apelle");
        }   
     return static::$db;
    }

    
    
}