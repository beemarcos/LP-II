<?php
require('Auth.php');

if (Auth::verifica($_POST['email'],$_POST['senha'])) {
    echo $email . $senha;
    header('Location: index.php?erro=usuario ou senha invalido');
}

