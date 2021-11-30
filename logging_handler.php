<?php
    session_start();
    $login = $_POST['login'];
    $password = $_POST['password'];
    include "connect.php";
    $query = "SELECT * FROM users WHERE login = '$login'";
    $result = $connect->query($query);
    $connect->close();
    $result = $result->fetch_assoc();
    if ($result) {
        if (password_verify($password, $result['password'])) {
            $_SESSION['login'] = $login;
            header('Location: /');
        }
        else {
            // echo 'Неверный пароль!';
            $_SESSION['wrong_password'] = true;
            header('Location: /login.php');
        }
    }
    else {
        $_SESSION['wrong_login'] = true;
        header('Location: /login.php');
        // echo 'Неверный логин!';
    }
?>