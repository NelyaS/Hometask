<?php

session_destroy();

include_once "alSet.php";

include_once "parts/header.php";


header("Location: shop.php");



include_once "parts/reg.php";
include_once "parts/footer.php";