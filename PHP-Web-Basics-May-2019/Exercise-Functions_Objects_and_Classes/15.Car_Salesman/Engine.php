<?php

class Engine {
    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $power;

    /**
     * @var string
     */
    private $displacement;

    /**
     * @var string
     */
    private $efficiency;

    public function __construct(string $model, string $power, string $displacement, string $efficiency)
    {
        $this->setModel($model);
        $this->setPower($power);
        $this->setDisplacement($displacement);
        $this->setEfficiency($efficiency);
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getPower(): string
    {
        return $this->power;
    }

    /**
     * @param string $power
     */
    public function setPower(string $power): void
    {
        $this->power = $power;
    }

    /**
     * @return string
     */
    public function getDisplacement(): string
    {
        return $this->displacement;
    }

    /**
     * @param string $displacement
     */
    public function setDisplacement(string $displacement): void
    {
        $this->displacement = $displacement;
    }

    /**
     * @return string
     */
    public function getEfficiency(): string
    {
        return $this->efficiency;
    }

    /**
     * @param string $efficiency
     */
    public function setEfficiency(string $efficiency): void
    {
        $this->efficiency = $efficiency;
    }
}