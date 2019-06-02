<?php

include_once "./Person.php";

try {
    $peopleTokens = explode(';', readline());
    $people = [];

    for ($i = 0; $i < count($peopleTokens) - 1; $i++) {
        list($name, $moneyStr) = explode('=', $peopleTokens[$i]);
        $people[$name] = new Person($name, floatval($moneyStr));
    }

    $productTokens = explode(';', readline());
    $products = [];

    for ($i = 0; $i < count($productTokens) - 1; $i++) {
        list($name, $costStr) = explode('=', $productTokens[$i]);
        $products[$name] = new Product($name, floatval($costStr));
    }

    $line = '';
    while (($line = readline()) !== 'END') {
        list($personName, $productName) = explode(' ', $line);
        $person = $people[$personName];
        $product = $products[$productName];
        echo $person->buyProduct($product) . PHP_EOL;
    }

    foreach ($people as $personName => $person) {
        echo $person . PHP_EOL;
    }
} catch (Error $e) {
    echo $e->getMessage();
}