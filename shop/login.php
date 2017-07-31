<?php

include_once "alSet.php";

if (isset($_POST['action']) && $_POST['action'] == 'log_in') {
    if (login(["name" => $_POST['userName'], "pass" => $_POST['userPass']]) != false) {
        $_SESSION['user_name'] = $_POST['userName'];
        header("Location: shop.php");
    } else {
        echo 'Неправильный логин или пароль';
    }
}

include_once "parts/header.php";
include_once "parts/login.php";
include_once "parts/footer.php";
