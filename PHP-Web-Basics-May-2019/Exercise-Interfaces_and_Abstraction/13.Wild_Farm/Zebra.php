<?php

class Zebra extends Mammal {

    public function makeSound()
    {
        return 'Zs';
    }

    /**
     * @param Food $foot
     * @throws Exception
     */
    public function eat(Food $foot)
    {
        if ($foot->getFoodType() !== 'Vegetable') {
            throw new Exception("Zebras are not eating that type of food!");
        }
        parent::eat($foot);
    }
}