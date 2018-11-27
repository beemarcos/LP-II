<?php
namespace App\utils;

use App\utils\Connection;

class Auth
{
    public static function verifica($email, $senha)
    {
        /*
            Codigo para SQL Injection
        */

        $con = Connection::getConnection();
        $connection->exec("use login");
        $query = $con->prepare("SELECT usuario_id, usuario FROM usuario where  usuario = '{$email}' and senha = md5('{$senha}')");
        $query->execute();
        if ( $query->rowCount() == 1 ) {
            return true;
        } else {
            return false;
        } 
    }
    public static function insere($email, $senha)
    {
        $con = Connection::getConnection();
        $query = "insert into usuario (usuario, senha)
        values ('{$email}', md5('{$senha}'))";
        $con->exec($query);
        return true;
    }
}
