<?php

include_once './Animal.php';

class Dog extends Animal {
    public function __construct(string $name, int $age, string $gender)
    {
        parent::__construct($name, $age, $gender);
    }

    public function produceSound()
    {
        return 'BauBau';
    }
}