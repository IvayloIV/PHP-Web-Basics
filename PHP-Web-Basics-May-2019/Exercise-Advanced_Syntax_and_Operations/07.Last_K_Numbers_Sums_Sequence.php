<?php

$n = intval(readline());
$k = intval(readline());
$nums = [1];

for ($i = 0; $i < $n - 1; $i++) {
    $startPoint = max(0, count($nums) - $k);

    $sum = 0;
    for ($j = $startPoint; $j < count($nums); $j++) {
        $sum += $nums[$j];
    }

    array_push($nums, $sum);
}

echo implode(' ', $nums);