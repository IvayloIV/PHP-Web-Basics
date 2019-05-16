<?php

$nums1 = array_map('intval', explode(' ', readline()));
$nums2 = array_map('intval', explode(' ', readline()));

$nums1 = fillArr($nums1, count($nums2));
$nums2 = fillArr($nums2, count($nums1));

for ($i = 0; $i < count($nums1); $i++) {
    $sum = $nums1[$i] + $nums2[$i];
    echo "{$sum} ";
}

function fillArr($arr, $count) {
    $n = 0;
    while (count($arr) < $count) {
        $arr[] = $arr[$n++];
    }

    return $arr;
}