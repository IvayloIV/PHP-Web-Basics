<?php

class Tiger extends Felime {

    public function makeSound()
    {
        return 'ROAAR!!!';
    }

    /**
     * @param Food $foot
     * @throws Exception
     */
    public function eat(Food $foot)
    {
        if ($foot->getFoodType() !== 'Meat') {
            throw new Exception("Tigers are not eating that type of food!");
        }

        parent::eat($foot);
    }
}