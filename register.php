<?php
$pdo = new PDO('mysql:host=localhost;dbname=bsit201_mendoza_chatroom','root','');
$query = 'INSERT INTO accounts (email,password,name) VALUES (:email,:password,:name)';


$stmt = $pdo->prepare($query);
$stmt -> bindVAlue('email',$_POST['email']);
$stmt -> bindVAlue('password',$_POST['password']);
$stmt -> bindVAlue('name',$_POST['name']);

$stmt ->execute();

header("location:login.php");
?>