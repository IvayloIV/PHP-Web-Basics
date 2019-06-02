<?php

include_once './Cat.php';

class Tomcat extends Cat {
    public function __construct(string $name, int $age, string $gender)
    {
        parent::__construct($name, $age, $gender);
    }

    public function produceSound()
    {
        return 'Give me one million b***h';
    }
}