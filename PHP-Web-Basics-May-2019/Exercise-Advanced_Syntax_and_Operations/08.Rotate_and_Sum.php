<?php

$nums = array_map('intval', explode(' ', readline()));
$k = intval(readline());

$sumArr = array_fill(0, count($nums), 0);
for ($i = 0; $i < $k; $i++) {
    $lastNum = array_pop($nums);
    array_unshift($nums, $lastNum);

    for ($j = 0; $j < count($nums); $j++) {
        $sumArr[$j] += $nums[$j];
    }
}

echo implode(' ', $sumArr);