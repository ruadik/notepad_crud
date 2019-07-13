<?php
$pdo=new PDO('mysql:host=192.168.10.10; dbname=notepad_crud; charset=utf8','homestead', 'secret');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql='delete from tasks where id=:id';
$stmt=$pdo->prepare($sql);
$result=$stmt->execute($_GET);
//var_dump($result);
HEADER('Location: /index.php');