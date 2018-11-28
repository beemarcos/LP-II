<?php
require_once 'bootload.php';

use \Plasticbrain\FlashMessages;

//Autenticação
if (! isset($_SESSION['user']['email'])) {

    $p = new \App\Model\Pessoa();
    $p->setUsuario($_POST['email']);
    $p->setSenha($_POST['senha']);
    $pDao = new \App\Model\PessoaDao();

    if ( $pDao->create($p) ) {
        $_SESSION['user']['email'] = $_POST['email'];
        $_SESSION['flash'] = 'Registered';
    } else {
        header( 'Location: index.php' );
        $_SESSION['error'] = 'Error';
    }
}
//Mensagem flash
if ( isset($_SESSION['flash']) ) {
    $msg = new \Plasticbrain\FlashMessages\FlashMessages();
    $msg->success('Registrado com sucesso!');
}

header( 'Location: home.php' );
?>
