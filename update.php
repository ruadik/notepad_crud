<?php
$data= [
        'id'=>$_GET['id'],
        'title'=>$_POST['title'],
        'content'=>$_POST['content']
       ];

$pdo=new PDO('mysql:host=192.168.10.10; dbname=notepad_crud; charset=utf8', 'homestead','secret');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql='update tasks set title=:title, content=:content WHERE id=:id';
$stmt=$pdo->prepare($sql);
$stmt->execute($data);
//var_dump($_GET,$_POST, $data);

Header('Location: /index.php');