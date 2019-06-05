<?php

class Engine {
    /**
     * @var int
     */
    private $engineSpeed;

    /**
     * @var int
     */
    private $enginePower;

    public function __construct(int $engineSpeed, int $enginePower)
    {
        $this->setEngineSpeed($engineSpeed);
        $this->setEnginePower($enginePower);
    }

    /**
     * @return int
     */
    public function getEngineSpeed(): int
    {
        return $this->engineSpeed;
    }

    /**
     * @param int $engineSpeed
     */
    protected function setEngineSpeed(int $engineSpeed): void
    {
        $this->engineSpeed = $engineSpeed;
    }

    /**
     * @return int
     */
    public function getEnginePower(): int
    {
        return $this->enginePower;
    }

    /**
     * @param int $enginePower
     */
    protected function setEnginePower(int $enginePower): void
    {
        $this->enginePower = $enginePower;
    }
}