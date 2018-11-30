<?php

require_once 'vendor/autoload.php';

$cDao = new \App\Model\CategoriaDao();

$c = new \App\Model\Categoria();

?>
<html>
    <head>
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
<body>
<div id="main" class="container-fluid">
    <h3 class="page-header">Atualizando Categoria</h3>
    <form action="confirmacategoria.php" method="POST">
    <div class="row">
        
        <div class="form-group col-md-4">
        <label for="campo2">Id</label>
        <input type="text" class="form-control" name="id" value="<?php echo $_GET['id'] ?>" readonly>
        </div>    

        <div class="form-group col-md-4">
        <label for="campo2">Nome</label>
        <input type="text" class="form-control" name="nome" value="<?php echo $_GET['nome'] ?>">
        </div>
        
        </div>
        <hr />
        <div id="actions" class="row">
        <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="categoria.php" class="btn btn-default">Cancelar</a>
        </div>
        </div>
    </form> 
</div>

</body>