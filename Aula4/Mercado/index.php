<?php

require_once 'vendor/autoload.php';


echo 'iniciando<br/>';

$p = new \App\Model\Produto();

$p->setNome('Chinelo havaiana');
$p->setId_categoria(1);

$pDao = new \App\Model\ProdutoDao();
if ($pDao->create($p)) {
    echo 'Ok';
} else {
    echo 'nop';
}
/*
echo 'iniciando<br/>';
$c = new \App\Model\Categoria();

$c->setNome('Frios');

$cDao = new \App\Model\CategoriaDao();
if ($cDao->create($c)) {
    echo 'Ok';
} else {
    echo 'nop';
}
*/