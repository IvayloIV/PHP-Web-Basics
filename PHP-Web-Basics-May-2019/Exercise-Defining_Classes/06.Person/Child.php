<?php

include './Person.php';

class Child extends Person {
    function __construct(string $name, int $age) {
        parent::__construct($name, $age);
    }

    public function setAge(int $age): void {
        if ($age > 15) {
            throw new Error('Child’s age must be less than 16!');
        }

        parent::setAge($age);
    }
}