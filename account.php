<?php
session_start();
require "conectdb.php";

$UserID = $_SESSION["id"] ?? null;

if ($UserID) {
    $queryUserCheck = mysqli_query($conn, "SELECT * FROM users WHERE id_user = '$UserID'"); 

    if ($queryUserCheck) {
        $user = mysqli_fetch_array($queryUserCheck);
    } else {
        die("Ошибка выполнения запроса: " . mysqli_error($conn));
    }
} else {    
    die("Пользователь не авторизован.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/css.css">
    <link rel="stylesheet" href="/css/container.css">
    <link rel="stylesheet" href="/css/account.css">
    <title>Личный кабинет</title>
</head>
<body>
<?php 
    include "component/header.php"

?>
    <div class="container">
        <main>
        
            <?php if ($user): ?>
                
                <div class="form">
                    <form action="update.php" method="post">
                        <h1 class="">Привет, <?= htmlspecialchars($user["FIO"]) ?> </h1>
                        <p>ФИО
                            <input type="text" name="FIO" value="<?= htmlspecialchars($user["FIO"]) ?>"></p>
                        <p>Логин
                            <input type="text" required name="login" value="<?= htmlspecialchars($user["login"]) ?>"></p>
                        <p>Почта
                            <input type="email" name="email" value="<?= htmlspecialchars($user["email"]) ?>"></p>
                        <p>Пароль
                            <input class="input1" type="password" required name="password"></p>
                        <!-- <input class="input2" type="submit"> -->
                         <button class="input2">Отправить</button>
                    </form>

                    <form action="logOut.php" method="post">
                            <!-- <input class="input2" type="submit" value="Выйти из аккаунта"> -->
                            <button class="input2">Выйти из аккаунта</button>
                    </form>
                </div>  

                <div class="create_post">
                    <form class="" action="addpost.php" method="POST">
                        <div class="modal-body">
                            <p>Название поста: 
                                <input type="text" name="title"></p>
                            <p>Текст: <br>
                                <!-- <input type="text" name="text"></p> -->
                                <label for="story"></label>
                                <textarea class="text_area" id="story" name="title" rows="5" cols="33"></textarea>

                        <div class="modal-footer">
                            <button class="btn btn-primary">Добавить</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отменить</button>
                        </div>
                    </form>
                </div>
                
            <?php else: ?>
                <p>Пользователь не найден.</p>
            <?php endif; ?>

        </main>
    </div>
    <section class="add">
        <div class="container">
            <div class="add_wrapp"></div>
        </div>
    </section>
</body>
</html>