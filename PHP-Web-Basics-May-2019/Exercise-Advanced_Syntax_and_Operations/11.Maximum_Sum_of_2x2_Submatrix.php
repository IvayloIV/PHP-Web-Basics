<?php

$tokens = array_map('intval', explode(', ', readline()));
$rowsCount = $tokens[0];
$colsCount = $tokens[1];

$matrix = [];
for ($i = 0; $i < $rowsCount; $i++) {
    $newRow = array_map('intval', explode(', ', readline()));
    array_push($matrix, $newRow);
}

$maxSum = 0;
$startRow = 0;
$startCol = 0;
for ($row = 0; $row < $rowsCount - 1; $row++) {
    for ($col = 0; $col < $colsCount - 1; $col++) {
        $currentSum = $matrix[$row][$col] + $matrix[$row + 1][$col]
            + $matrix[$row][$col + 1] + $matrix[$row + 1][$col + 1];

        if ($currentSum > $maxSum) {
            $maxSum = $currentSum;
            $startRow = $row;
            $startCol = $col;
        }
    }
}

echo "{$matrix[$startRow][$startCol]} {$matrix[$startRow][$startCol + 1]}\n";
echo "{$matrix[$startRow + 1][$startCol]} {$matrix[$startRow + 1][$startCol + 1]}\n";
echo $maxSum;