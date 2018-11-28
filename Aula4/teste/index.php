<?php

require_once 'bootload.php';

$p = new \App\Model\Pessoa();
$p->setUsuario('abobora@manga');
$p->setSenha('123');

$pDao = new \App\Model\PessoaDao();
$pDao->create($p);

if ($pDao->read($p)){
    echo 'Ok';
} else {
    echo 'nop';
}

//Mensagem flash de erro
if ( isset($_SESSION['error']) ) {
    $msg = new \Plasticbrain\FlashMessages\FlashMessages();
    $msg->error('Usuário ou senha incorretos');
    $msg->display();
    unset($_SESSION['error']);
}

?>


<html>
    <head>
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
<body id="LoginForm">
    <div class="container">
    <div class="login-form">
    <div class="main-div">
        <div class="panel">
    <h2>Login do usuário (DB)</h2>
    <?php    
        if( isset($_GET['erro']) ){
            echo '<p style="color: red">Usuário ou senha incorretos!</p>';
        }else{
            echo '<p>Por favor preencha com seu usuário e senha:</p>';
        }
    ?>
    </div>
        <form id="Login" action="home.php" method="post">
            <div class="form-group">
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Endereço de email">
            </div>
            <div class="form-group">
                <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <a href="registra.php">Ainda não sou cadastrado!</a>
    </div>
    </div>
    </div>
    </div>
</body>
</html>
