<?php

include_once './Cat.php';

class Kitten extends Cat {
    public function __construct(string $name, int $age, string $gender)
    {
        parent::__construct($name, $age, $gender);
    }

    public function produceSound()
    {
        return 'Miau';
    }
}