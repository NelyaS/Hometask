<?php

include_once "alSet.php";

include_once "parts/header.php";

if (isset($_POST['action']) && $_POST['action'] == 'reg') {
    saveUser(["name" => $_POST['userName'], "pass" => md5($_POST['userPass'])]);
    $_SESSION['user_name'] = $_POST['userName'];
    header("Location: shop.php");
}


include_once "parts/reg.php";
include_once "parts/footer.php";

