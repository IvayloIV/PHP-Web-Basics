<?php

include_once './contracts/IMission.php';

class Mission implements IMission
{
    /**
     * @var string
     */
    private $codeName;

    /**
     * @var string
     */
    private $state;

    /**
     * Mission constructor.
     * @param string $codeName
     * @param string $state
     */
    public function __construct(string $codeName, string $state)
    {
        $this->codeName = $codeName;
        $this->state = $state;
    }

    public function completeMission() {
        $this->state = 'Finished';
    }

    public function __toString()
    {
        return "Code Name: {$this->codeName} State: {$this->state}" . PHP_EOL;
    }
}