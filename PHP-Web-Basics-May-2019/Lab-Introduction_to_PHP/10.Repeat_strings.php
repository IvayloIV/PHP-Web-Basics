<?php

$input = readline();
$arr = explode(' ', $input);

for ($i = 0; $i < count($arr); $i++) {
    $element = $arr[$i];

    for ($j = 0; $j < strlen($element); $j++) {
        echo $element;
    }
}