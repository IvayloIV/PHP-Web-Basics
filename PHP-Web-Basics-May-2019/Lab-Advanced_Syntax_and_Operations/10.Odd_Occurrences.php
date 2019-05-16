<?php

$elements = [];
$arr = array_map('strtolower', explode(' ', readline()));

foreach ($arr as $el) {
    if (!key_exists($el, $elements)) {
        $elements[$el] = 0;
    }
    $elements[$el]++;
}

$oddTimeElements = [];
foreach ($elements as $element => $count) {
    if ($count % 2 == 1) {
        $oddTimeElements[] = $element;
    }
}
echo implode(', ', $oddTimeElements);
