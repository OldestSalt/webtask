<?php
    session_start();
    $login = $_POST['login'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    include "connect.php";
    $query = "SELECT login FROM users WHERE login = '$login'";
    $result = $connect->query($query);
    $result = $result->fetch_array();
    // echo $result[0];
    if (!$result) {
        $query = "INSERT INTO users (`login`, `password`) VALUES ('".$login."', '".$hashed_password."')";
        $connect->query($query);
        $connect->close();
        header('Location: /login.php');
    }
    else {
        $_SESSION['taken_login'] = true;
        header('Location: /signup.php');
    }
    
?>