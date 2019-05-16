<?php

$tokens = array_map('intval', explode(' ', readline()));
$rowsCount = $tokens[0];
$colsCount = $tokens[1];

$matrix = [];
for ($i = 0; $i < $rowsCount; $i++) {
    $newRow = array_map('intval', explode(' ', readline()));
    array_push($matrix, $newRow);
}

$maxSum = 0;
$startRow = 0;
$startCol = 0;
for ($row = 0; $row < $rowsCount - 2; $row++) {
    for ($col = 0; $col < $colsCount - 2; $col++) {
        $currentSum = 0;
        for ($innerRow = $row; $innerRow < $row + 3; $innerRow++) {
            for ($innerCol = $col; $innerCol < $col + 3; $innerCol++) {
                $currentSum += $matrix[$innerRow][$innerCol];
            }
        }

        if ($currentSum > $maxSum) {
            $maxSum = $currentSum;
            $startRow = $row;
            $startCol = $col;
        }
    }
}

echo "Sum = {$maxSum}\n";
for ($row = $startRow; $row < $startRow + 3; $row++) {
    for ($col = $startCol; $col < $startCol + 3; $col++) {
        echo $matrix[$row][$col] . ' ';
    }
    echo PHP_EOL;
}