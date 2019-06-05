<?php

class Car {
    /**
     * @var string
     */
    private $model;

    /**
     * @var float
     */
    private $speed;

    /**
     * Car constructor.
     * @param string $model
     * @param float $speed
     */
    public function __construct(string $model, float $speed)
    {
        $this->setModel($model);
        $this->setSpeed($speed);
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
     * @return float
     */
    public function getSpeed(): float
    {
        return $this->speed;
    }

    /**
     * @param float $speed
     */
    public function setSpeed(float $speed): void
    {
        $this->speed = $speed;
    }

    public function __toString()
    {
        return "{$this->getModel()} {$this->getSpeed()}";
    }
}