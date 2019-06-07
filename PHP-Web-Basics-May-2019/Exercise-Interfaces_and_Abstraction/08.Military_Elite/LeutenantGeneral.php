<?php

include_once './contracts/ILeutenantGeneral.php';

class LeutenantGeneral extends PrivateSoldier implements ILeutenantGeneral
{
    /**
     * @var PrivateSoldier[]
     */
    private $privates;

    public function __construct(string $id, string $firstName, string $lastName, float $salary)
    {
        parent::__construct($id, $firstName, $lastName, $salary);
        $this->privates = [];
    }

    public function addPrivate(PrivateSoldier $privateSoldier) {
        $this->privates[] = $privateSoldier;
    }

    public function __toString()
    {
        $result = parent::__toString();
        $result .= 'Privates:' . PHP_EOL;
        foreach ($this->privates as $private) {
            $result .= "  {$private}";
        }

        return $result;
    }
}