<?php

include_once './contracts/ISpy.php';

class Spy extends Soldier implements ISpy
{
    /**
     * @var string
     */
    private $codeNumber;

    public function __construct(string $id, string $firstName, string $lastName, string $codeNumber)
    {
        parent::__construct($id, $firstName, $lastName);
        $this->codeNumber = $codeNumber;
    }

    /**
     * @return string
     */
    public function getCodeNumber(): string
    {
        return $this->codeNumber;
    }

    /**
     * @param string $codeNumber
     */
    protected function setCodeNumber(string $codeNumber): void
    {
        $this->codeNumber = $codeNumber;
    }

    public function __toString()
    {
        $result =  parent::__toString() . PHP_EOL;
        $result .= "Code Number: {$this->codeNumber}"  . PHP_EOL;
        return $result;
    }
}