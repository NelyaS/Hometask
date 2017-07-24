<?php

include_once "alSet.php";

include_once "parts/header.php";
include_once "parts/menu.php";

if (isset($_POST['action']) && $_POST['action'] == 'toBasket') placeToBasket($_POST['itemId']);

$items = getGoodsByCategory($_GET['id']);

if (isset($_POST['action']) && $_POST['action'] == 'log_out') logout();

include_once "parts/categoryList.php";
include_once "parts/footer.php";


