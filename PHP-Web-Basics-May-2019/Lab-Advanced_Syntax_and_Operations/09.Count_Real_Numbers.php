<?php

$arr = explode(' ', readline());
$countNums = [];
foreach ($arr as $element) {
    if (!key_exists($element, $countNums)) {
        $countNums[$element] = 0;
    }
    $countNums[$element]++;
}

ksort($countNums);
foreach ($countNums as $num => $count) {
    echo "{$num} -> {$count}\n";
}