<?php

$shop = [];
$line = '';
while(($line = readline()) !== 'shopping time') {
    $tokens = explode(' ', $line);
    $product = $tokens[1];
    $quantity = intval($tokens[2]);

    if (!key_exists($product, $shop)) {
        $shop[$product] = 0;
    }
    $shop[$product] += $quantity;
}

while(($line = readline()) !== 'exam time') {
    $tokens = explode(' ', $line);
    $product = $tokens[1];
    $quantity = intval($tokens[2]);

    if (!key_exists($product, $shop)) {
        echo "{$product} doesn't exist\n";
    } else if ($shop[$product] <= 0) {
        echo "{$product} out of stock\n";
    } else {
        $shop[$product] -= $quantity;
    }
}

foreach ($shop as $product => $quantity) {
    if ($quantity > 0) {
        echo "{$product} -> {$quantity}\n";
    }
}