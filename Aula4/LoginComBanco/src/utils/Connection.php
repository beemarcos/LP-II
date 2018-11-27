<?php

namespace App\utils;

$servername = "localhost";
$dbname = "login";

class Connection
{
    public static function getConnection()
    {
        try {
            $db = new PDO("mysql:host={$servername};dbname={$dbname};charset=utf8",'root','123');
            //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully<br/>";
            return $db;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}

//var_dump(Connection::getConnection());

?>