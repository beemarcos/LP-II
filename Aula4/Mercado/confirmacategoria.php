<?php

require_once 'vendor/autoload.php';

$c = new \App\Model\Categoria();
$c->setNome($_POST['nome']);
$c->setId($_POST['id']);
$cDao = new \App\Model\CategoriaDao();
if ( $cDao->update($c) ) {
    header( 'Location: categoria.php' );
} else {
    echo 'Nop';
}