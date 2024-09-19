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
  
    <title>Личный кабинет</title>
</head>
<body>
<?php 
    include "component/header.php"

?>
    <main class="container">

        <?php if ($user): ?>
            <h1 class="">Привет, <?= htmlspecialchars($user["FIO"]) ?> </h1>
            <form action="update.php" method="post">
                <p>ФИО
                    <input type="text" name="FIO" value="<?= htmlspecialchars($user["FIO"]) ?>"></p>
                <p>Логин
                    <input type="text" required name="login" value="<?= htmlspecialchars($user["login"]) ?>"></p>
                <p>Почта
                    <input type="email" name="email" value="<?= htmlspecialchars($user["email"]) ?>"></p>
                <p>Пароль
                    <input type="password" required name="password"></p>
                <input type="submit">
            </form>

            <form action="logout.php" method="post">
                <input type="submit" value="Выйти из аккаунта">
            </form>
            <form class="" action="addpost.php" method="POST">
                    <div class="modal-body">
                        <p>Название поста: 
                            <input type="text" name="title"></p>
                        <p>Текст: 
                            <input type="text" name="text"></p>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отменить</button>
                        <button class="btn btn-primary">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <?php else: ?>
            <p>Пользователь не найден.</p>
        <?php endif; ?>

    </main>
    <section class="add">
        <div class="container">
            <div class="add_wrapp"></div>
        </div>
    </section>
</body>
</html>