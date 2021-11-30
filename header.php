<header>
    <?php
        if (isset($_SESSION['login'])) {
            echo '<div><a href="logout.php">Выход</a></div>';
        }
        else {
            echo '
                <div><a href="login.php">Вход</a></div>
                <div><a href="signup.php">Регистрация</a></div>';
        }
    ?>
</header>