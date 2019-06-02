<?php

spl_autoload_register();

try {
    while (($line = readline()) !== 'END') {
        list($pizza, $pizzaName, $toppingCount) = explode(' ', $line);
        list($dough, $floatType, $bakingTechnique, $weight) = explode(' ', readline());

        $pizza = new Pizza($pizzaName, $toppingCount);
        $dough = new Dough($floatType, $bakingTechnique, $weight);
        $pizza->setDough($dough);
        for ($i = 0; $i < $toppingCount; $i++) {
            list($topping, $toppingType, $toppingWeight) = explode(' ', readline());
            $pizza->addTopping(new Topping($toppingType, $toppingWeight));
        }

        echo $pizza;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}