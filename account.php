<?php
require "conectdb.php";

$UserID=$_COOKIE['idUser'];
$queryUserCheck = mysqli_query($conn, "SELECT * FROM `users` WHERE `id.user`=$UserID"); 
$user = mysqli_fetch_array($queryUserCheck);
?>
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Личный кабинет</title>
</head>
<body>

    <main class="container">
        
        <?php (!empty($UserID)):?>

       
            <h1 class="">Привет, <?=$user["FIO"]?> </h1>
            <form action="update.php" method="post">
        <p>ФИО
            <input type="text" name="FIO" value="<?=$user["FIO"]?>"></p>
        <p>Логин
            <input type="text" required name="login" value="<?=$user["login"]?>"></p>
        <p>Почта
            <input type="email" name="email" value="<?=$user["email"]?>"></p>
        <p>Пароль
            <input type="password" required name="password" value="<?=$user["password"]?>"></p>
        <input type="submit">
        </form>

        <form action="logout.php" method="post">
            <input type="submit" value="Выйти из аккаунта">
        </form>
        

    </main>
    
</body>
</html>