<?php

include_once './Human.php';

class Worker extends Human {
    /**
     * @var float
     */
    private $weekSalary;

    /**
     * @var float
     */
    private $workHoursPerDay;

    public function __construct($firstName, $lastName, $weekSalary, $workHoursPerDay)
    {
        parent::__construct($firstName, $lastName);
        $this->setWeekSalary($weekSalary);
        $this->setWorkHoursPerDay($workHoursPerDay);
    }

    public function setLastName(string $lastName): void
    {
        if (strlen($lastName) <= 3) {
            throw new Error('Expected length more than 3 symbols!Argument: lastName');
        }

        parent::setLastName($lastName);
    }

    /**
     * @return float
     */
    public function getWeekSalary(): float
    {
        return $this->weekSalary;
    }

    /**
     * @param float $weekSalary
     */
    public function setWeekSalary(float $weekSalary): void
    {
        if ($weekSalary <= 10) {
            throw new Error('Expected value mismatch!Argument: weekSalary');
        }

        $this->weekSalary = $weekSalary;
    }

    /**
     * @return float
     */
    public function getWorkHoursPerDay(): float
    {
        return $this->workHoursPerDay;
    }

    /**
     * @param float $workHoursPerDay
     */
    public function setWorkHoursPerDay(float $workHoursPerDay): void
    {
        if ($workHoursPerDay < 1 || $workHoursPerDay > 12) {
            throw new Error('Expected value mismatch!Argument: workHoursPerDay');
        }

        $this->workHoursPerDay = $workHoursPerDay;
    }

    public function calculateMoneyPerHour(): string {
        return ($this->weekSalary / 7) / $this->workHoursPerDay;
    }

    public function __toString()
    {
        $weekSalaryStr = number_format($this->getWeekSalary(), 2, '.', '');
        $hoursPerDay = number_format($this->getWorkHoursPerDay(), 2, '.', '');
        $moneyPerHourStr = number_format($this->calculateMoneyPerHour(), 2, '.', '');
        return parent::__toString() . "Week Salary: {$weekSalaryStr}\nHours per day: {$hoursPerDay}\nSalary per hour: {$moneyPerHourStr}\n";
    }
}