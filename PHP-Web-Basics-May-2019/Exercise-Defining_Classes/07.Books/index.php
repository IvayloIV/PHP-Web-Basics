<?php

include_once './GoldenEditionBook.php';

$author = readline();
$title = readline();
$price = floatval(readline());
$typeBook = readline();

try {
    if ($typeBook === 'STANDARD') {
        $book = new Book($title, $author, $price);
    } else if ($typeBook === 'GOLD') {
        $book = new GoldenEditionBook($title, $author, $price);
    } else {
        throw new Error('Type is not valid!');
    }

    echo 'OK' . PHP_EOL . $book->getPrice();
} catch (Error $e) {
    echo $e->getMessage();
}
