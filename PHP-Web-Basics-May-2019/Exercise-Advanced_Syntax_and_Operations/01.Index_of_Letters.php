<?php

$input = readline();
for ($i = 0; $i < strlen($input); $i++) {
    $el = strtolower($input[$i]);
    $char = ord($el) - 97;
    echo "{$el} -> {$char}" . PHP_EOL;
}