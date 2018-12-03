<?php

require_once '../vendor/autoload.php';

$pDao = new \App\Model\ProdutoDao();
if ( $pDao->delete($_GET['id']) ) {
    header( 'Location: /produtos/index.php' );
} else {
    echo 'Nop';
}