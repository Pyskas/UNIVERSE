<?php
    $UserID=$_POST['id_user'];
    require_once "conectdb.php";
    $queryUserCheck = mysqli_query($conn, "SELECT * FROM `users` WHERE `id_user`=$UserID"); 
    $user = mysqli_fetch_array($queryUserCheck);

    $FIO = $_POST["FIO"];
    $login = $_POST["login"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    
    $sql="UPDATE `users` SET `FIO`='$FIO',`login`='$login',`email`='$email',`password`='$password' WHERE `id_user`=$UserID";
    if($conn->query($sql)){
        header('Location:account.php');
    } else{
        echo "Ошибка: " . $conn->error;
    }
?>