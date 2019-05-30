<?php

spl_autoload_register();

$db = DBConnection::getConnection();
$categories = new Categories($db);
$products = new Products($db);

$listCategories = $categories->getList();
$product = [
    'id' => '',
    'name' => '',
    'description' => '',
    'price' => '',
    'category_name' => ''
];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = $products->getOne($id);
}

if (isset($_POST['name']) && isset($_POST['description']) &&
    isset($_POST['price']) && isset($_POST['category_id'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];

    $mode = 1;
    $id = '';
    if (!isset($_POST['id']) || $_POST['id'] === '') {
        $id = $products->createProduct($name, $description, $price, $category_id);
        echo 'Create';
    } else {
        $id = $products->editProduct($_POST['id'], $name, $description, $price, $category_id);
        $mode = 2;
    }

    header('Location: product_details.php?id=' . $id . '&mode=' . $mode);
}

include 'views/header.php';
include 'views/create_product_view.php';
