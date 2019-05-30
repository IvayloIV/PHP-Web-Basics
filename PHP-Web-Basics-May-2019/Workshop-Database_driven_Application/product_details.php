<?php

spl_autoload_register();

include('views/header.php');

if (isset($_GET['mode'])) {
    $mode = $_GET['mode'];
    if ($mode == 1) {
        echo 'Created successfully.<br/><br/>';
    } else if ($mode == 2) {
        echo 'Edit successfully.<br/><br/>';
    }
}

if (isset($_GET['id'])) {
    $db = DBConnection::getConnection();
    $products = new Products($db);

    $id = $_GET['id'];
    $product = $products->getOne($id);

    if ($product) {
        echo "Name: {$product['name']} <br/>";
        echo "Description: {$product['description']} <br/>";
        echo "Price: {$product['price']} <br/>";
        echo "Category: {$product['category_name']}";
    } else {
        echo 'Invalid id.';
    }
} else {
    echo 'Id missing.';
}