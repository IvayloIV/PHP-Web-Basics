<?php

include_once './contracts/IRepair.php';

class Repair implements IRepair
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $hoursWorked;

    /**
     * Repair constructor.
     * @param string $name
     * @param int $hoursWorked
     */
    public function __construct(string $name, int $hoursWorked)
    {
        $this->name = $name;
        $this->hoursWorked = $hoursWorked;
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
    protected function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getHoursWorked(): int
    {
        return $this->hoursWorked;
    }

    /**
     * @param int $hoursWorked
     */
    protected function setHoursWorked(int $hoursWorked): void
    {
        $this->hoursWorked = $hoursWorked;
    }

    public function __toString()
    {
        return "Part Name: {$this->name} Hours Worked: {$this->hoursWorked}" . PHP_EOL;
    }
}