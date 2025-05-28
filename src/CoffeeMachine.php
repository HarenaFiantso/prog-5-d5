<?php

namespace HarenaFiantso\Coffee;

class CoffeeMachine
{
    public function makeCoffee(string $coffeeType, string $methodPayment): void
    {
        $coffee = CoffeeFactory::create($coffeeType);

        echo $coffee->$methodPayment();
    }
}
