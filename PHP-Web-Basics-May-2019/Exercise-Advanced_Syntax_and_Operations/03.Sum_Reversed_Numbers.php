<?php

$arr = explode(' ', readline());

$sum = 0;
foreach ($arr as $el) {
    $newEl = '';
    for ($i = strlen($el) - 1; $i >= 0; $i--) {
        $newEl .= $el[$i];
    }
    $sum += intval($newEl);
}

echo $sum;