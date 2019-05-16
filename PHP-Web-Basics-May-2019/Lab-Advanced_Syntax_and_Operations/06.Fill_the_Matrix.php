<?php

$tokens = explode(', ', readline());
$n = intval($tokens[0]);
$pattern = $tokens[1];
$matrix = [];

$count = 1;
for ($row = 0; $row < $n; $row++) {
    if ($pattern === 'B' && $row % 2 === 1) {
        for ($col = $n - 1; $col >= 0; $col--) {
            checkRow($matrix, $row);
            $matrix[$col][$row] = $count++;
        }
    } else {
        for ($col = 0; $col < $n; $col++) {
            checkRow($matrix, $row);
            $matrix[$col][$row] = $count++;
        }
    }
}

for ($row = 0; $row < $n; $row++) {
    for ($col = 0; $col < $n; $col++) {
        echo $matrix[$row][$col] . ' ';
    }
    echo PHP_EOL;
}

function checkRow($matrix, $row) {
    if ($row === 0) {
        $matrix[] = [];
    }
}