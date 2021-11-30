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
        <?php
        if (isset($_SESSION['login'])) {
            echo 'Здравствуйте, '.$_SESSION['login'];
        }
        else {
            echo 'Пожалуйста, войдите или зарегистрируйтесь';
        }
        ?>
    </main>
    <?php include 'footer.php'; ?>
    <script src="index.js"></script>
</body>
</html>