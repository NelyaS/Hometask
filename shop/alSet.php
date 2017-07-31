<?php

session_start();

//function getMenuItems()
//{
//    return [
//      ["id" => 1, 'name'=> "TV"],
//        ["id" => 2, 'name'=> "Games"],
//        ["id" => 3, 'name'=> "Phones"],
//        ["id" => 4, 'name'=> "Macs"],
//    ];
//}
//
//function getGoods()
//{
//    return [
//        ["id" => 1, 'name'=> "Sony HD", 'description' =>"Ultra HD super TV", "category" =>1],
//        ["id" => 2, 'name'=> "Sony HD", 'description' =>"Ultra HD super TV", "category" =>1],
//        ["id" => 3, 'name'=> "Sony HD", 'description' =>"Ultra HD super TV", "category" =>1],
//        ["id" => 4, 'name'=> "Sony HD", 'description' =>"Ultra HD super TV", "category" =>1],
//        ["id" => 5, 'name'=> "Apple Iphone 5", 'description' =>"Iphone 5", "category" =>3],
//        ["id" => 6, 'name'=> "Apple Iphone 6", 'description' =>"Iphone 6", "category" =>3],
//        ["id" => 7, 'name'=> "Apple Iphone 7", 'description' =>"Iphone 7", "category" =>3],
//    ];
//}

/**
 * @param int $category
 * @param array
 */
//function getGoodsByCategory($category)
//{
//    return array_filter(getGoods(), function ($i) use ($category){
//       return $i['category'] == $category;
//    });
//}

//$dataCategories = getMenuItems();
//file_put_contents('categories.txt', serialize($dataCategories));
//$dataGoods = getGoods();
//file_put_contents('goods.txt', serialize($dataGoods));

function getUsers()
{
    $data = unserialize(file_get_contents('users.txt'));
    if (!is_array($data) || empty($data)) {
        $data = [];
    }
    return $data;
}

function saveUser (array $user)
{
    $users = getUsers();
    array_push($users, $user);
    file_put_contents('users.txt', serialize($users));
}

function isAuth ()
{
    return $_SESSION['user_name'];
}

//function placeToBasket ($goodId)
//{
//    print_r($goodId);
//    if (!isset($_SESSION['basket'])) $_SESSION['basket'] = [];
//    array_push($_SESSION['basket'], $goodId);
//}

function getBasketCounter ()
{
    return count($_SESSION['basket']);
}

function login (array $user)
{
    $users = getUsers();
//    $resultArray = array_filter($users,function($data) use ($user['name']) {
//        return in_array($data['name'], $user['name']);
//    });
    $result = false;
    foreach ($users as $value) {
        if($value['name'] == $user['name']) {
            $result = (password_verify($user['pass'], $value['pass'])) ? true : false;
            return $result;
        }
    }

    return $result;
}

//function addToBasket($productId)
//{
//    $product = array_filter(getProducts(), function ($i) use ($productId){
//        return $i['id'] == $productId;
//    });
//    $product[$productId-1]['userName'] = $user['name'];
//    print_r($product[$productId-1]);
//}

function placeToBasket ($productId)
{
    $product = array_filter(getProducts(), function ($i) use ($productId){
        return $i['id'] == $productId;
    });
    $product[$productId-1]['userName'] = $_SESSION['user_name'];
//    print_r($product[$productId-1]);
//    echo $_SESSION['user_name'];
    $products = getBasket();
    array_push($products, $product[$productId-1]);
    file_put_contents('basket.txt', serialize($products));
}

function getBasket()
{
    $data = unserialize(file_get_contents('basket.txt'));
    if (!is_array($data) || empty($data)) {
        $data = [];
    }
    return $data;
}

function getUsersBasket()
{
    $user = $_SESSION['user_name'];
    return array_filter(getBasket(), function ($i) use ($user){
        return $i['userName'] == $user;
    });
}

function logout ()
{
    session_start();
    unset($_SESSION['user_name']);
    session_destroy();
    header('Location: shop.php');
}

function getCategories()
{
    $data = unserialize(file_get_contents('categories.txt'));
    if (!is_array($data) || empty($data)) {
        $data = [];
    }
    return $data;
}

function addCategory (array $category)
{
    $categories = getCategories();
    array_push($categories, $category);
    file_put_contents('categories.txt', serialize($categories));
}

function getCategoryId()
{
    $categories = getCategories();
    $id = count($categories) + 1;
    return $id;
}

function getProducts()
{
    $data = unserialize(file_get_contents('goods.txt'));
    if (!is_array($data) || empty($data)) {
        $data = [];
    }
    return $data;
}

function addProduct (array $product)
{
    $products = getProducts();
    array_push($products, $product);
    file_put_contents('goods.txt', serialize($products));
}

function getProductId()
{
    $products = getProducts();
    $id = count($products) + 1;
    return $id;
}

function getProductCategory($product)
{
    $products = getCategories();
    $id = array_intersect_assoc($product, $products);
    return $id;
}//черновая функция

function getGoodsByCategory($category)
{
    return array_filter(getProducts(), function ($i) use ($category){
        return $i['category'] == $category;
    });
}

function getProductsFromBasket()
{
    $data = unserialize(file_get_contents('basket.txt'));
    if (!is_array($data) || empty($data)) {
        $data = [];
    }
    return $data;
}

//function addProductToBasket (array $product)
//{
//    $products = getProducts();
//    array_push($products, $product);
//    file_put_contents('basket.txt', serialize($products));
//}































