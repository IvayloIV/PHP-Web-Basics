<?php

spl_autoload_register();

$smartphone = new Smartphone();

$phones = explode(' ', readline());
foreach ($phones as $phone) {
    try {
        echo $smartphone->callOtherPhone($phone) . PHP_EOL;
    } catch (Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }
}

$urls = explode(' ', readline());
foreach ($urls as $url) {
    try {
        echo $smartphone->browse($url) . PHP_EOL;
    } catch (Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }
}