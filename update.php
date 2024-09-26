<?php
session_start();
require_once "conectdb.php";
$UserID = $_SESSION['id'];

    $queryUserCheck = mysqli_query($conn, "SELECT * FROM `users` WHERE `id_user`='$UserID'"); 
    $user = mysqli_fetch_array($queryUserCheck);

    $FIO = $_POST["FIO"];
    $login = $_POST["login"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    
    $sql="UPDATE `users` SET `email`='$email', `FIO`='$FIO',`login`='$login',`password`='$password' WHERE `id_user`='$UserID'";
    if($conn->query($sql)){
        header('Location:account.php');
    } else{
        echo "Ошибка: " . $conn->error;
    }
?>