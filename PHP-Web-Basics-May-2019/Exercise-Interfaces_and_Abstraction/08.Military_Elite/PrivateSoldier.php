<?php

include_once './contracts/IPrivateSoldier.php';

class PrivateSoldier extends Soldier implements IPrivateSoldier
{
    /**
     * @var float
     */
    private $salary;

    public function __construct(string $id, string $firstName, string $lastName, float $salary)
    {
        parent::__construct($id, $firstName, $lastName);
        $this->setSalary($salary);
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param float $salary
     */
    protected function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    public function __toString()
    {
        $salary = number_format($this->salary, 2, '.', '');
        return parent::__toString() . " Salary: {$salary}" . PHP_EOL;
    }
}