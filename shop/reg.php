<?php

ini_set('display_errors', 1);

include_once "alSet.php";

include_once "parts/header.php";

if (isset($_POST['action']) && $_POST['action'] == 'reg') {
    $pass = password_hash($_POST['userPass'], PASSWORD_DEFAULT);
    saveUser(["name" => $_POST['userName'], "pass" => $pass]);
    $_SESSION['user_name'] = $_POST['userName'];
    header("Location: shop.php");
}

include_once "parts/reg.php";
include_once "parts/footer.php";

