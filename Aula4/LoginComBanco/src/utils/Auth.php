<?php

namespace App\utils;

class Auth
{
    public static function verifica($email, $senha)
    {
        if ( md5($senha) === '202cb962ac59075b964b07152d234b70' ) {
            if ( ($email === '123@123') || ($email === '456@456')) {
                return true;
            }
        } else {
            return false;
        }
    }
}
