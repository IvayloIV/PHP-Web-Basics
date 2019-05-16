<?php

$str = readline();
$token = explode(' ', readline());
$character = $token[0];
$n = (int)$token[1];

$count = 1;
$index = strpos($str, $character);
while ($index !== false && $count++ < $n) {
    $index = strpos($str, $character, $index + 1);
}

if ($str[0] === $character && !$index) {
    echo "0";
} else if ($index) {
    echo $index;
} else {
    echo 'Find the letter yourself!';
}
