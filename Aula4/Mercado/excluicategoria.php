<?php

require_once 'vendor/autoload.php';

$cDao = new \App\Model\CategoriaDao();
if ( $cDao->delete($_GET['id']) ) {
    header( 'Location: categoria.php' );
} else {
    echo 'Nop';
}