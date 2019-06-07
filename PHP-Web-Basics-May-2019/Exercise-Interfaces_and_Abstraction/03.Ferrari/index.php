<?php

spl_autoload_register();

for ($i = 0; $i < 2; $i++) {
    $name = readline();
    $ferrari = new Ferrari($name);
    echo $ferrari . PHP_EOL;
}