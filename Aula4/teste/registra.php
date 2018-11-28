<?php

require_once 'bootload.php';

$p = new \App\Model\Pessoa();
$p->setUsuario('abobora@manga');
$p->setSenha('123');

$pDao = new \App\Model\PessoaDao();
$pDao->create($p);

if ($pDao->read($p)){
    echo 'Ok';
} else {
    echo 'nop';
}