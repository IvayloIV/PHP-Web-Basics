<?php

class Vehicle {
    /**
     * @var string
     */
    protected $color;

    /**
     * @var string
     */
    private $numberDoors;

    /**
     * @var string
     */
    protected $brand;

    /**
     * @var string
     */
    protected $model;

    /**
     * @var int
     */
    protected $year;

    /**
     * Vehicle constructor.
     * @param string $color
     * @param string $brand
     * @param string $model
     * @param int $year
     */
    public function __construct(string $color, string $brand, string $model, int $year)
    {
        $this->color = $color;
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
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
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getDoors(): int
    {
        return $this->numberDoors;
    }

    /**
     * @param int $numberDoors
     */
    protected function setDoors(int $numberDoors): void
    {
        $this->numberDoors = $numberDoors;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
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
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year): void
    {
        $this->year = $year;
    }
}