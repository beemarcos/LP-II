<?php

require_once '../vendor/autoload.php';

$cDao = new \App\Model\CategoriaDao();
$categorias = $cDao->read();
    
?>
<html>
    <head>
    <link href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
<body>
<div id="main" class="container-fluid">
    <h3 class="page-header">Novo Produto</h3>
    <form action="/produtos/create.php" method="POST">
    <div class="row">
        
        <div class="form-group col-md-4">
        <label for="campo2">Nome</label>
        <input type="text" class="form-control" name="nome">
        </div>

        <div class="form-group col-md-4">
        <label for="campo2">Categoria</label>
        <select class="form-control" name="categoria">
            <?php
                foreach ($categorias as $categorias) {
                    echo("<option value=".$categorias['id'].">".$categorias['nome']."</option>");
                }       
            ?>
        </select>
        </div>
        
        </div>
        <hr />
        <div id="actions" class="row">
        <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="index.php" class="btn btn-default">Cancelar</a>
        </div>
        </div>
    </form> 
</div>
</body>