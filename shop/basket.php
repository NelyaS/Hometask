<?php

include_once "alSet.php";
include_once "parts/header.php";

if (isset($_POST['action']) && $_POST['action'] == 'log_out') logout();

$items = getUsersBasket();

include_once "parts/basket.php";
include_once "parts/footer.php";