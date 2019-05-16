<?php

$tokens = array_map('intval', explode(', ', readline()));
$rowsCount = $tokens[0];
$colsCount = $tokens[1];

$matrix = [];
for ($i = 0; $i < $rowsCount; $i++) {
    $newRow = array_map('intval', explode(', ', readline()));
    array_push($matrix, $newRow);
}

$sum = 0;
for ($row = 0; $row < $rowsCount; $row++) {
    for ($col = 0; $col < $colsCount; $col++) {
        $sum += $matrix[$row][$col];
    }
}

echo $rowsCount . PHP_EOL;
echo $colsCount . PHP_EOL;
echo $sum;