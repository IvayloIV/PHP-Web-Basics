<?php

list($rowCount, $colCount) = array_map('intval', explode(', ', readline()));

$matrix = [];
for ($i = 0; $i < $rowCount; $i++) {
    $matrix[] = array_map('intval', explode(', ', readline()));
}

$max = null;
$min = null;

for ($row = 0; $row < $rowCount; $row++) {
    for ($col = 0; $col < $colCount; $col++) {
        if ($max === null || $max < $matrix[$row][$col]) {
            $max = $matrix[$row][$col];
        }
        if ($min === null || $min > $matrix[$row][$col]) {
            $min = $matrix[$row][$col];
        }
    }
}

echo "Min: {$min}\n";
echo "Max: {$max}";
