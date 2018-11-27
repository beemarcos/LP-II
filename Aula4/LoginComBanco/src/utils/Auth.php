<?php

namespace App\utils;
use Connection;

class Auth
{
    public static function verifica($email, $senha)
    {
        /*
            Codigo para SQL Injection
        */

        $connection = Connection::getConnection();
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




