<?php

require_once '../vendor/autoload.php';

$cDao = new \App\Model\CategoriaDao();
if ( $cDao->delete($_GET['id']) ) {
    header( 'Location: /categorias/index.php' );
} else {
    echo 'Nop';
}