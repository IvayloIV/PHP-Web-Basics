<?php

$nums = array_map('intval', explode(' ', readline()));

while (count($nums) > 1) {
    $sums = [];
    for ($i = 1; $i < count($nums); $i++) {
        array_push($sums, $nums[$i - 1] + $nums[$i]);
    }
    $nums = $sums;
}

echo $nums[0];