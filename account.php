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
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Личный кабинет</title>
</head>
<body>

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
                    <input type="password" required name="password"></p> <!-- Уберите value для пароля -->
                <input type="submit">
            </form>

            <form action="logout.php" method="post">
                <input type="submit" value="Выйти из аккаунта">
            </form>
        <?php else: ?>
            <p>Пользователь не найден.</p>
        <?php endif; ?>

    </main>
    
</body>
</html>