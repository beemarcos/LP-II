<?php

$servername = "localhost";
$dbname = "login";

class Connection
{
    public static function getConnection()
    {
        try {
            $db = new PDO("mysql:host={$servername};dbname={$dbname};charset=utf8",'root','123');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully<br/>";
            return $db;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}

class Auth
{
    public static function verifica($email, $senha)
    {
        /*
            Codigo para SQL Injection
        */

        $connection = Connection::getConnection();
        $connection->exec("use login");
        $query = $connection->prepare("SELECT usuario_id, usuario FROM usuario where  usuario = '{$email}' and senha = md5('{$senha}')");
        $query->execute();
        if ( $query->rowCount() == 1 ) {
            return true;
        } else {
            return false;
        } 
    }
    public static function insere($email, $senha)
    {
        $connection = Connection::getConnection();
        $query = "insert into usuario (usuario, senha)
        values ('{$email}', md5('{$senha}'))";
        $connection->exec($query);
        return true;
    }
}

echo "Rodando";
if(Auth::verifica("123@123","123")){
    echo "OK";
}else{
    echo "nOK";
}




