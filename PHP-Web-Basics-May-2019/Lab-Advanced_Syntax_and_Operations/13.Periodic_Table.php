<?php

$periodicTable = [];
$arr = explode(', ', readline());

foreach ($arr as $element) {
    if (!key_exists($element, $periodicTable)) {
        $periodicTable[$element] = false;
    } else {
        $periodicTable[$element] = true;
    }
}

foreach ($periodicTable as $element => $repeated) {
    if (!$repeated) {
        echo $element . ' ';
    }
}