<?php

$input = null;
while (($input = readline()) !== 'end') {
    echo "{$input} = ";
    for ($i = strlen($input) - 1; $i >= 0; $i--) {
        echo $input[$i];
    }
    echo "\n";
}