<?php

$n = intval(readline());
$matrix = [];

for ($row = 0; $row < $n; $row++) {
    $matrix[] = array_map('intval', explode(' ', readline()));
}

$rightDiagonal = 0;
$leftDiagonal = 0;

for ($row = 0; $row < $n; $row++) {
    $rightDiagonal += $matrix[$row][$row];
    $leftDiagonal += $matrix[$row][$n - 1 - $row];
}
echo abs($rightDiagonal - $leftDiagonal);