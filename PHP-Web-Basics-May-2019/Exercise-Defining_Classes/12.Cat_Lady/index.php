<?php

spl_autoload_register();

$cats = [];
while (($line = readline()) !== 'End') {
    list($catType, $catName, $n) = explode(' ', $line);
    $cats[$catName] = new $catType($catName, $n);
}

$cat = readline();
echo $cats[$cat];