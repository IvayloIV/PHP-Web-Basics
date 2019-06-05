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
     * @var string
     */
    private $weight;

    /**
     * @var string
     */
    private $color;

    public function __construct(string $model, Engine $engine, string $weight, string $color)
    {
        $this->setModel($model);
        $this->setEngine($engine);
        $this->setWeight($weight);
        $this->setColor($color);
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
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     */
    private function setWeight(string $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    private function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function __toString()
    {
        $result = "{$this->getModel()}:" . PHP_EOL;
        $result .= "  {$this->getEngine()->getModel()}:" . PHP_EOL;
        $result .= "    Power: {$this->getEngine()->getPower()}" . PHP_EOL;
        $result .= "    Displacement: {$this->getEngine()->getDisplacement()}" . PHP_EOL;
        $result .= "    Efficiency: {$this->getEngine()->getEfficiency()}" . PHP_EOL;
        $result .= "  Weight: {$this->getWeight()}" . PHP_EOL;
        $result .= "  Color: {$this->getColor()}";
        return $result;
    }
}