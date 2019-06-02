<?php

class Human {
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    function __construct($firstName, $lastName) {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        if ($firstName[0] !== strtoupper($firstName[0])) {
            throw new Error('Expected upper case letter!Argument: firstName');
        }

        if (strlen($firstName) < 4) {
            throw new Error('Expected length at least 4 symbols!Argument: firstName');
        }
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        if ($lastName[0] !== strtoupper($lastName[0])) {
            throw new Error('Expected upper case letter!Argument: lastName');
        }

        if (strlen($lastName) < 3) {
            throw new Error('Expected length at least 3 symbols!Argument: lastName');
        }

        $this->lastName = $lastName;
    }

    public function __toString()
    {
        return "First Name: {$this->getFirstName()}\nLast Name: {$this->getLastName()}\n";
    }
}