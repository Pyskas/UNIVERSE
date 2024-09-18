<?php
session_start();
require_once "conectdb.php";

if (isset($_POST['login']) && isset($_POST['password'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $result = $conn->query($sql);
    $log = $result->fetch_assoc();
    if(!empty($log)){
        $_SESSION['auth'] = true;
        $_SESSION["login"] = $login;
        $_SESSION["password"] = $password;
        $_SESSION["id"] = $log["id_user"];
        $_SESSION["role_id"] = $log["role_id"];
        header("Location:account.php");
    } else {
        echo "Неверно введён псевдоним или пароль!";
    }
}
?>