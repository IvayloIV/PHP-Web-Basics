<?php

spl_autoload_register();

$addCollection = new AddCollection();
$addRemoveCollection = new AddRemoveCollection();
$myList = new MyList();

$items = explode(' ', readline());
addItems($addCollection, $items);
addItems($addRemoveCollection, $items);
addItems($myList, $items);

$count = intval(readline());
removeItems($addRemoveCollection, $count);
removeItems($myList, $count);

function removeItems(Remove $collection, int $count) {
    for ($i = 0; $i < $count; $i++) {
        echo $collection->removeItem() . ' ';
    }
    echo PHP_EOL;
}

function addItems(Add $collection, $items) {
    foreach ($items as $item) {
        echo $collection->addItem($item) . ' ';
    }
    echo PHP_EOL;
}