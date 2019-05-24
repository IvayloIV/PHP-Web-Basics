<?php

class Person {
    public $name;

    function __construct(string $name) {
        $this->name = $name;
    }

    function sayHello() {
        return "{$this->name} says \"Hello\"!";
    }
}

$name = readline();
$person = new Person($name);
echo $person->sayHello();