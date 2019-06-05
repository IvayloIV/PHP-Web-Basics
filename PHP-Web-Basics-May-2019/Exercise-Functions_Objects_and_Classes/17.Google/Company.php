<?php

class Company {
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $department;

    /**
     * @var float
     */
    private $salary;

    /**
     * Company constructor.
     * @param string $name
     * @param string $department
     * @param float $salary
     */
    public function __construct(string $name, string $department, float $salary)
    {
        $this->setName($name);
        $this->setDepartment($department);
        $this->setSalary($salary);
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
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @param string $department
     */
    public function setDepartment(string $department): void
    {
        $this->department = $department;
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
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    public function __toString()
    {
        $salary = number_format($this->getSalary(), 2, '.', '');
        return "{$this->getName()} {$this->getDepartment()} {$salary}";
    }
}