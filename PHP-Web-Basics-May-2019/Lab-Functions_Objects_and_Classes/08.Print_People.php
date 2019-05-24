<?php

class Person {
    public $name;
    public $age;
    public $occupation;

    function __construct(string $name, int $age, string $occupation) {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    function  __toString() {
        return "{$this->name} - age: {$this->age}, occupation: {$this->occupation}" . PHP_EOL;
    }
}

$people = [];
$input = '';
while (($input = readline()) !== 'END') {
    list($name, $ageStr, $occupation) = explode(' ', $input);
    $people[] = new Person($name, intval($ageStr), $occupation);
}

usort($people, function ($a, $b) {
   return $a->age - $b->age;
});

foreach ($people as $person) {
    echo $person;
}