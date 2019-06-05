<?php

function getSymbol($n) {
    $symbols = 'ATCGTTAGGG';
    return $symbols[$n % strlen($symbols)];
}

$n = intval(readline());
$counter = 0;
for ($i = 1; $i <= $n; $i++) {
    $symbol1 = getSymbol($counter++);
    $symbol2 = getSymbol($counter++);

    if ($i % 4 === 1) {
        echo "**{$symbol1}{$symbol2}**" . PHP_EOL;
    } else if ($i % 4 === 2 || $i % 4 === 0) {
        echo "*{$symbol1}--{$symbol2}*" . PHP_EOL;
    } else {
        echo "{$symbol1}----{$symbol2}" . PHP_EOL;
    }
}