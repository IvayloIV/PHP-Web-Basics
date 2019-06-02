<?php

include_once './Human.php';

class Student extends Human {
    /**
     * @var string
     */
    private $facultyNumber;

    public function __construct($firstName, $lastName, $facultyNumber)
    {
        parent::__construct($firstName, $lastName);
        $this->setFacultyNumber($facultyNumber);
    }

    /**
     * @return string
     */
    public function getFacultyNumber(): string
    {
        return $this->facultyNumber;
    }

    /**
     * @param string $facultyNumber
     */
    public function setFacultyNumber(string $facultyNumber): void
    {
        if (strlen($facultyNumber) < 5 || strlen($facultyNumber) > 10) {
            throw new Error('Invalid faculty number!');
        }

        $this->facultyNumber = $facultyNumber;
    }

    public function __toString()
    {
        return parent::__toString() . "Faculty number: {$this->getFacultyNumber()}\n";
    }
}