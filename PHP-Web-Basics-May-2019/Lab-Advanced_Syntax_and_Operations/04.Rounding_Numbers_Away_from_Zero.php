<?php

$arr = explode(' ', readline());

foreach ($arr as $el) {
    $roundNum = round(floatval($el), 0, PHP_ROUND_HALF_UP);
    echo "{$el} => {$roundNum}\n";
}