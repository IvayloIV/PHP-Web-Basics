<?php

include "./Food.php";

class FoodFactory {
    public function makeFood() {
        return new Food();
    }
}