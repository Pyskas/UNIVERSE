<?php
if (isset($_POST["FIO"]) && isset($_POST["login"]) && isset($_POST["email"]) && isset($_POST["password"])) {
      
    require_once "conectdb.php";

    $full_name = $conn->real_escape_string($_POST["FIO"]);
    $login = $conn->real_escape_string($_POST["login"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $password = $conn->real_escape_string($_POST["password"]);
    $img = $conn->real_escape_string($_POST["images"]);
    $role_id = 1;
    $status_id = 1;
    if(!empty($full_name) ) {
        $sql = "INSERT INTO `users` (email, FIO, images, login, password, role_id) VALUES ('$email', '$FIO', '$images', '$login', $password, $role_id)";
        if($conn->query($sql))
        {
            header('Location:autorization.php');
        } else
        {
            echo "Ошибка: " . $conn->error;
        }
    }
    else {
        echo "<script>
            alert('hello eror');
            location.href='reg.php';
        </script>  ";
              
    }
}
?>