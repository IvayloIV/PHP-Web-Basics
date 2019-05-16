<?php

$input = readline();

$digits = '';
$letters = '';
$other = '';
for ($i = 0; $i < strlen($input); $i++) {
    $value = ord($input[$i]);

    if ($value >= 48 && $value <= 57) {
        $digits .= $input[$i];
    } else if (($value >= 97 && $value <= 122) || ($value >= 65 && $value <= 90)) {
        $letters .= $input[$i];
    } else {
        $other .= $input[$i];
    }
}

echo $digits . "\n";
echo $letters . "\n";
echo $other;