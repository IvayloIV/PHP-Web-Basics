<?php

$n = intval(readline());
$nums = [];
for ($i = 0; $i < $n; $i++) {
    $num = intval(readline());
    $nums[] = $num;
}

echo implode(' ', array_reverse($nums));