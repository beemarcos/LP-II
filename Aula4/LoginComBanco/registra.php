<?php

require_once './bootload.php';

use App\utils\Auth;
use \Plasticbrain\FlashMessages;

//Autenticação
if (! isset($_SESSION['user']['email'])) {

    if ( Auth::insere($_POST['email'], $_POST['senha']) ) {
        $_SESSION['user']['email'] = $_POST['email'];
        $_SESSION['flash'] = 'Registered';
    } else {
        header( 'Location: index.php' );
        $_SESSION['error'] = 'Error';
    }
}

if ( isset($_SESSION['flash']) ) {
    $msg = new \Plasticbrain\FlashMessages\FlashMessages();
    $msg->success('Registrado com sucesso!');
    
}

header( 'Location: verifica.php' );
?>
