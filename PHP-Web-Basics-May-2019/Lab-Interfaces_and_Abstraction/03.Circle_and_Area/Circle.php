<?php

class Circle implements Area, Circumference {
    /**
     * @var float
     */
    private $radius;

    /**
     * Circle constructor.
     * @param float $radius
     */
    public function __construct(float $radius)
    {
        $this->setRadius($radius);
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     */
    private function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    public function getSurface(): float
    {
        return pi() * $this->radius * $this->radius;
    }

    public function getCircumference(): float
    {
        return 2 * pi() * $this->radius;
    }
}