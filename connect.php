<?php
session_start();
if (isset($_POST["FIO"]) && isset($_POST["login"]) && isset($_POST["email"]) && isset($_POST["password"])) {
      
    require_once "conectdb.php";

    $FIO = $conn->real_escape_string($_POST["FIO"]);
    $login = $conn->real_escape_string($_POST["login"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $password = $_POST["password"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $role_id = 1;
    $status_id = 1;

    if (!empty($FIO)) {
        $sql = "INSERT INTO users (email, FIO, login, password, role_id, status_id) VALUES ('$email', '$FIO', '$login', '$hashedPassword', '$role_id', '$status_id')";
        
        if ($conn->query($sql)) {
            $_SESSION['id'] = $conn->insert_id;
            $_SESSION['role_id'] = 1;
            header('Location: index.php');
            exit;
        } else {
            echo "Ошибка: " . $conn->error;
        }
    } else {
        echo "<script>
            alert('Пожалуйста, заполните все поля.');
            location.href='reg.php';
        </script>";
    }
}
?>