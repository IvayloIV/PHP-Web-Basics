<?php

class Person {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function __toString() {
        return "{$this->name} - {$this->age}";
    }
}

$n = intval(readline());
$people = [];
for ($i = 0; $i < $n; $i++) {
    list($name, $ageStr) = explode(' ', readline());
    $people[] = new Parents($name, intval($ageStr));
}

$people = array_filter($people, function ($p) {
    return $p->age > 30;
});
usort($people, function ($a, $b) {
    return strcmp($a->name, $b->name);
});

foreach ($people as $person) {
    echo $person . PHP_EOL;
}