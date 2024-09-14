<?php
session_start();
require_once "connect.php";

$FIO=['FIO'];
$email=['email'];
$login=['login'];
$password=['password'];

$mysqli->query("INSERT INTO users (id.user,login,password,FIO,email,role_id) VALUE ('1','$login','$password','$FIO','$email','1'");

$id=$mysqli->insert_id;

$_SESSION['id']=$id;

header('Location: /');
exit;
?>