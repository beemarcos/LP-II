<?php

require_once '../vendor/autoload.php';

$cDao = new \App\Model\CategoriaDao();
$categorias = $cDao->read();


$pDao = new \App\Model\ProdutoDao();
$produtos = $pDao->read();

foreach ($produtos as $produto) {
    if( $produto['id'] == $_GET['id']) {
        $prod = $produto;
    }
}
    
?>
<html>
    <head>
    <link href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
<body>
<div id="main" class="container-fluid">
    <h3 class="page-header">Atualizando o Produto</h3>
    <form action="/produtos/confirmaproduto.php" method="POST">
        <div class="row">
        
        <!-- Somente para enviar o id -->
        <input hidden type="text" class="form-control" name="id" value="<?php echo $_GET['id'] ?>">

        <div class="form-group col-md-4">
        <label for="campo2">Nome</label>
        <input type="text" class="form-control" name="nome" value="<?php echo $prod['nome'] ?>">
        </div>

        <div class="form-group col-md-4">
        <label for="campo2">Categoria</label>
        <select class="form-control" name="categoria" >
            <?php
                foreach ($categorias as $categoria) {
                    if ( $categoria['id'] == $prod['id_categoria'] ){
                        echo "<option  value=".$categoria['id']." selected='selected' >".$categoria['nome']."</option>";
                    } else {
                        echo "<option value=".$categoria['id'].">".$categoria['nome']."</option>";
                    }
                }       
            ?>
        </select>
        </div>
        </div>
        <hr />
        <div id="actions" class="row">
        <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="/produtos/index.php" class="btn btn-default">Cancelar</a>
        </div>
        </div>
    </form> 
</div>
</body>

