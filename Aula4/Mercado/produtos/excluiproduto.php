<?php

require_once 'vendor/autoload.php';

$pDao = new \App\Model\ProdutoDao();
if ( $pDao->delete($_GET['id']) ) {
    header( 'Location: index.php' );
} else {
    echo 'Nop';
}