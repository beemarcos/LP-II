<?php

require_once '../vendor/autoload.php';

$c = new \App\Model\Categoria();
$c->setNome($_POST['nome']);
$cDao = new \App\Model\CategoriaDao();
if ( $cDao->create($c) ) {
    header( 'Location: /categorias/index.php' );
} else {
    echo 'Nop';
}