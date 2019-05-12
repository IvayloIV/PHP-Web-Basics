<?php

$input = readline();
for ($i = 0; $i <= 19; $i++) {
    if ($i > strlen($input) - 1) {
        echo '*';
    } else {
        echo $input[$i];
    }
}