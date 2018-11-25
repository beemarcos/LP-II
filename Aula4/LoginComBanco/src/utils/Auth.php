<?php

namespace App\utils;

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '123');
define('DB', 'login');

class Auth
{
    public static function verifica($email, $senha)
    {
        $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar o banco de dados');
        
        /* 
            Codigo para SQL Injection
        */

        $query = "select usuario_id, usuario from usuario where usuario = '{$email}' and senha = md5('{$senha}')";
        $result = mysqli_query($conexao, $query);
        $row = mysqli_num_rows($result);
        if ($row == 1){
            return true;
        }else{
            return false;
        }
    }
    public static function insere($email, $senha){
        $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar o banco de dados');
        
        $query = "insert into usuario (usuario, senha)
        values ('{$email}', md5('{$senha}'))";

        if (mysqli_query($conexao, $query)) {
            return true;
        } else {
            return false;
        }
    }
}




