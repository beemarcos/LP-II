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

        $query = "select usuario_id, usuario from usuario where usuario 
        = '{$email}' and senha = md5('{$senha}')";
        $result = mysqli_query(Connection::getConnection(), $query);
        $row = mysqli_num_rows($result);
        if ($row == 1){
            return true;
        }else{
            return false;
        }
    }
    public static function insere($email, $senha)
    {
        
        $query = "insert into usuario (usuario, senha)
        values ('{$email}', md5('{$senha}'))";
        if ( mysqli_query( Connection::getConnection(), $query ) ) {
            return true;
        } else {
            return false;
        }
    }
}




