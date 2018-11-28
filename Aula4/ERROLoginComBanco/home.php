<?php

require_once './bootload.php';

use App\utils\Auth;
use \Plasticbrain\FlashMessages;

//Autenticação
if ( ! isset( $_SESSION['user']['email'] ) ) {
    if ( Auth::verifica($_POST['email'], $_POST['senha']) ) {
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
    $msg -> success('Logado com sucesso!');
    $msg -> display();
    unset($_SESSION['flash']);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Pagina inicial</title>
    <?php include_once('partials/links.php'); ?>
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
        <h4>Blog</h4>
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#section1">Home</a></li>
        </ul><br>
        </div>
        <div class="col-sm-9">
            <hr>
            <h2>Página inicial</h2>
            <p>Usuário: <?= $_SESSION['user']['email']?></p>
            <br><br>
        </div>
    </div>
    </div>
</body>
</html>
