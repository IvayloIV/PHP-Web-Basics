<?php

class Mouse extends Mammal {

    public function makeSound()
    {
        return 'SQUEEEAAAK!';
    }

    /**
     * @param Food $foot
     * @throws Exception
     */
    public function eat(Food $foot)
    {
        if ($foot->getFoodType() !== 'Vegetable') {
            throw new Exception("Mouses are not eating that type of food!");
        }
        parent::eat($foot);
    }
}