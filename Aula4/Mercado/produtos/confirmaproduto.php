<?php

require_once '../vendor/autoload.php';

$p = new \App\Model\Produto();
$p->setId($_POST['id']);
$p->setNome($_POST['nome']);
$p->setId_categoria($_POST['categoria']);
$pDao = new \App\Model\ProdutoDao();
if ( $pDao->update($p) ) {
    header( 'Location: index.php' );
} else {
    echo 'Nop';
}