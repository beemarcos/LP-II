<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html>
    <head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    </head>
<body id="LoginForm">
    <div class="container">
    
    <div class="login-form">
    <div class="main-div">
        <div class="panel">
    <h2>Login do usuário</h2>
    <?php    
        if(isset($_GET['erro'])){
            echo '<p style="color: red">Usuário ou senha incorretos!</p>';
        }else{
            echo '<p>Por favor preencha com seu usuário e senha:</p>';
        }
    ?>
    
    </div>
        <form id="Login" action="verifica.php" method="post">
            <div class="form-group">
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Endereço de email">
            </div>
            <div class="form-group">
                <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        </div>
    </div>
    </div>
    </div>
</body>
</html>


