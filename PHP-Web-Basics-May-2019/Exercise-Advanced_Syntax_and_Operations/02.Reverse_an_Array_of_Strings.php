<?php

$arr = explode(' ', readline());
$halfSize = (int)(count($arr) / 2);
for ($i = 0; $i < $halfSize; $i++) {
    $temp = $arr[$i];
    $arr[$i] = $arr[count($arr) - 1 - $i];
    $arr[count($arr) - 1 - $i] = $temp;
}

echo implode(' ', $arr);