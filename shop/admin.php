<?php

include_once "alSet.php";
include_once "parts/header.php";
include_once "parts/add_product.php";

if (isset($_POST['action']) && $_POST['action'] == 'add_category') {
    addCategory(["id" => getCategoryId(), "name" => $_POST['categoryName']]);
}

if (isset($_POST['action']) && $_POST['action'] == 'add_product') {
    addProduct(["id" => getProductId(), "name" => $_POST['productName'], "description" => $_POST['description'], "category" => $_POST['category']]);
}

if (isset($_POST['action']) && $_POST['action'] == 'log_out') logout();

include_once "parts/footer.php";