<?php
require_once 'bootload.php';
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
    <h2>Cadastro de usuário (DB)</h2>
    
    </div>
        <form id="Login" action="registra.php" method="post">
            <div class="form-group">
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Endereço de email">
            </div>
            <div class="form-group">
                <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        </div>
    </div>
    </div>
    </div>
</body>
</html>
