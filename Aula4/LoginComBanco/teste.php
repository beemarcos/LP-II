<?php
$db = new PDO('mysql:host=localhost;dbname=login;charset=utf8','root','123');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//var_dump($db);
$stmt = $db->prepare("SELECT usuario_id, usuario FROM usuario where  usuario = '123@123' and senha = md5('123')");
$stmt->execute();
echo $stmt->rowCount();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

//var_dump($stmt->fetchAll());


?>