<?php

class Person {
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

    /**
     * Person constructor.
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        if (strlen($name) < 3) {
            throw new Error('Name’s length should not be less than 3 symbols!');
        }
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        if ($age <= 0) {
            throw new Error('Age must be positive!');
        }

        $this->age = $age;
    }
}