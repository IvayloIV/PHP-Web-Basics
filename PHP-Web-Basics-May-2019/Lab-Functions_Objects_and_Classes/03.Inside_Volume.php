<?php

function isInside($x, $y, $z) {
    return $x >= 10 && $x <= 50
        && $y >= 20 && $y <= 80
        && $z >= 15 && $z <= 50;
}

$arr = array_map('intval', explode(', ', readline()));
for ($i = 0; $i < count($arr); $i += 3) {
    $x = $arr[$i];
    $y = $arr[$i + 1];
    $z = $arr[$i + 2];
    echo (isInside($x, $y, $z) ? 'inside' : 'outside') . PHP_EOL;
}