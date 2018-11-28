<?php
namespace App\utils;

$servername = "localhost";
$dbname = "login";

class Connection
{
    public static $instance;

    public static function getConnection()
    {
        if(!isset(self::$instance)){
            self::$instance = new \PDO("mysql:host={$servername};dbname={$dbname}",'root','123');
        }
        return self::$instance;        
    }
}
