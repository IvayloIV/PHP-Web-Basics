<?php

class Product {
    private $name;
    private $cost;

    public function __construct($name, $cost) {
        $this->setName($name);
        $this->setCost($cost);
    }

    public function getName() {
        return $this->name;
    }

    private function setName(string $name) {
        $this->name = $name;
    }

    public function getCost() {
        return $this->cost;
    }

    private function setCost(float $cost) {
        $this->cost = $cost;
    }

    public function __toString() {
        return $this->getName();
    }
}