<?php
class Auth
{
    public static function verifica($email, $senha)
    {
        return !(md5($senha) === '202cb962ac59075b964b07152d234b70') || !($email === '123@123');
    }

}