<?php

class Car {
    /**
     * @var string
     */
    private $model;

    /**
     * @var Engine
     */
    private $engine;

    /**
     * @var Cargo
     */
    private $cargo;

    /**
     * @var Tire[]
     */
    private $tires;

    public function __construct(string $model, Engine $engine, Cargo $cargo)
    {
        $this->setModel($model);
        $this->setEngine($engine);
        $this->setCargo($cargo);
        $this->tires = [];
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
    private function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return Engine
     */
    public function getEngine(): Engine
    {
        return $this->engine;
    }

    /**
     * @param Engine $engine
     */
    private function setEngine(Engine $engine): void
    {
        $this->engine = $engine;
    }

    /**
     * @return Cargo
     */
    public function getCargo(): Cargo
    {
        return $this->cargo;
    }

    /**
     * @param Cargo $cargo
     */
    private function setCargo(Cargo $cargo): void
    {
        $this->cargo = $cargo;
    }

    /**
     * @return Tire[]
     */
    public function getTires(): array
    {
        return $this->tires;
    }

    /**
     * @param Tire[] $tires
     */
    private function setTires(array $tires): void
    {
        $this->tires = $tires;
    }

    public function addTire(Tire $tire) {
        $this->tires[] = $tire;
    }

    public function isFragile() {
        foreach ($this->getTires() as $tire) {
            if ($tire->getPressure() < 1) {
                return true;
            }
        }

        return false;
    }

    public function isFlamable() {
        return $this->getEngine()->getEnginePower() > 250;
    }
}