<?php

$text = readline();
$elements = [];
for ($i = 0; $i < strlen($text); $i++) {
    $char = $text[$i];
    if (!key_exists($char, $elements)) {
        $elements[$char] = 0;
    }
    $elements[$char]++;
}

foreach ($elements as $char => $count) {
    echo "{$char} -> {$count}\n";
}