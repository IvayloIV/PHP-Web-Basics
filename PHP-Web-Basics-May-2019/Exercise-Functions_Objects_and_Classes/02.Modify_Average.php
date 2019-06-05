<?php

function checkAverage($nums) {
    $sum = array_sum($nums);
    return $sum / count($nums);
}

$input = readline();
$nums = [];
for ($i = 0; $i < strlen($input); $i++) {
    $nums[] = intval($input[$i]);
}

while (checkAverage($nums) <= 5) {
    $nums[] = 9;
}

echo implode('', $nums);