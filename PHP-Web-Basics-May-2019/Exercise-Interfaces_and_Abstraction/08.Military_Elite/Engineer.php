<?php

include_once './contracts/IEngineer.php';

class Engineer extends SpecialisedSoldier implements IEngineer
{
    /**
     * @var Repair[]
     */
    private $repairs;

    public function __construct(string $id, string $firstName, string $lastName, float $salary, string $corps)
    {
        parent::__construct($id, $firstName, $lastName, $salary, $corps);
        $this->repairs = [];
    }

    /**
     * @return Repair[]
     */
    public function getRepairs(): array
    {
        return $this->repairs;
    }

    /**
     * @param Repair[] $repairs
     */
    protected function setRepairs(array $repairs): void
    {
        $this->repairs = $repairs;
    }

    public function addRepair(Repair $repair) {
        $this->repairs[] = $repair;
    }

    public function __toString()
    {
        $result = parent::__toString();
        $result .= 'Repairs:' . PHP_EOL;

        foreach ($this->repairs as $repair) {
            $result .= "  {$repair}";
        }
        return $result;
    }
}