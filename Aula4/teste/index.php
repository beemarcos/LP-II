<?php

require_once 'vendor/autoload.php';

$p = new \App\Model\Pessoa();
$p->setUsuario('manga@manga');
$p->setSenha('123');

$pDao = new \App\Model\PessoaDao();
$pDao->create($p);