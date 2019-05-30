<?php

spl_autoload_register();

$db = DBConnection::getConnection();
$products = new Products($db);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $products->removeProduct($id);
    header('Location: index.php');
} else {
    echo 'Missing id';
}