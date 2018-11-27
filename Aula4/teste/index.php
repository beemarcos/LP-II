<?php
$bd = new PDO('mysql:host=localhost;dbname=login','root','123');

$sql = "INSERT INTO usuario (usuario, senha) VALUES ( 'cabotia@cabotia', md5('123'))";

$enviar = $bd->prepare($sql);

$enviar->execute();