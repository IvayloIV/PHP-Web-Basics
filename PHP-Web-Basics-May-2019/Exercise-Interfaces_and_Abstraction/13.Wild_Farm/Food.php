<?php

abstract class Food {
    /**
     * float
     */
    private $quantity;

    /**
     * Food constructor.
     * @param $quantity
     */
    public function __construct($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    protected function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getFoodType() {
        return get_called_class();
    }
}