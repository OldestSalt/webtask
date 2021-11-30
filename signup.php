<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=cp1251">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Главная</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <form action="signing_handler.php" method="POST">
            Регистрация
            <input type="login" name="login">
            <input type="password" name="password">
            <button type="submit">Ок</button>
            <?php
                if (isset($_SESSION['taken_login'])) {
                    echo 'Этот логин занят!';
                    unset($_SESSION['taken_login']);
                }
            ?>
        </form>
    </main>
    <?php include 'footer.php'; ?>
    <script src="index.js"></script>
</body>
</html>