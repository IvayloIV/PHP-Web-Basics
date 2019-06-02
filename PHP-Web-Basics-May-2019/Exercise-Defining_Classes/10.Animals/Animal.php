<?php

class Animal {
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

    /**
     * @var string
     */
    private $gender;

    public function __construct(string $name, int $age, string $gender)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setGender($gender);
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
            throw new Error('Invalid input!');
        }
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): void
    {
        if ($gender !== 'Male' && $gender !== 'Female') {
            throw new Error('Invalid input!');
        }
        $this->gender = $gender;
    }

    public function produceSound() {
        return 'Not implemented!';
    }

    public function __toString()
    {
        $type = get_called_class();
        return "{$type} {$this->getName()} {$this->getAge()} {$this->getGender()}";
    }
}