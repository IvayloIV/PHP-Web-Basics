<?php

spl_autoload_register();

$db = DBConnection::getConnection();
$products = new Products($db);
$productCount = $products->getCount()['product_count'];

$productPerPage = 4;
$currentPage = $_GET['page'] ?? 1;
$skippedItems = ($currentPage - 1) * $productPerPage;
$pagesCount = ceil($productCount / $productPerPage);

include 'views/header.php';
include 'views/list_products_view.php';