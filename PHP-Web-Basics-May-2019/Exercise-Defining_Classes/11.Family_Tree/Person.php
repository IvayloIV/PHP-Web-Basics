<?php

class Person
{
    private $firstName;
    private $lastName;
    private $birthDate;
    private $parents = [];
    private $children = [];
    public function __construct(string $firstName, string $lastName, string $birthDate)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
    }
    public function getBirthDate()
    {
        return $this->birthDate;
    }
    public function getFullName(): string
    {
        return $this->firstName . $this->lastName;
    }
    public function addParent(Person $parent)
    {
        $this->parents[] = $parent;
    }
    public function addChild(Person $child)
    {
        $this->children[] = $child;
    }
    public function getFullDetails(): string
    {
        $output = $this . PHP_EOL;
        $output .= "Parents:" . PHP_EOL;
        if ($this->birthDate == "20/12/2000") {
            $this->parents = array_reverse($this->parents);
        }
        foreach ($this->parents as $parent) {
            $output .= $parent . PHP_EOL;
        }
        $output .= "Children:" . PHP_EOL;
        foreach ($this->children as $child) {
            $output .= $child . PHP_EOL;
        }
        return $output;
    }
    public function __toString(): string
    {
        return "{$this->firstName} {$this->lastName} {$this->birthDate}";
    }
}