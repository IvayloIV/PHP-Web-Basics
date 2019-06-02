<?php

include "./Product.php";

class Person {
    private $name;
    private $money;
    private $bag;

    function __construct(string $name,float $money) {
        $this->setName($name);
        $this->setMoney($money);
        $this->bag = [];
    }

    public function getName() {
        return $this->name;
    }

    public function setName(string $name) {
        if (strlen($name) === 0) {
            throw new Error('Name cannot be empty');
        }

        $this->name = $name;
    }

    public function getMoney() {
        return $this->money;
    }

    public function setMoney(float $money) {
        if ($money < 0) {
            throw new Error('Money cannot be negative');
        }

        $this->money = $money;
    }

    public function buyProduct(Product $product) {
        if ($product->getCost() > $this->money) {
            return "{$this->getName()} can't afford {$product->getName()}";
        }

        $this->setMoney($this->getMoney() - $product->getCost());
        array_push($this->bag, $product);
        return "{$this->getName()} bought {$product->getName()}";
    }

    public function __toString() {
        $products = count($this->bag) === 0 ?
            'Nothing bought' :
            join(',', $this->bag);

        return "{$this->getName()} - {$products}";
    }
}