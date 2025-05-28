<?php

namespace HarenaFiantso\Coffee\Application\CoffeeMachine;

class CoffeeMachine
{
    public function makeCoffee(string $coffeeType, string $methodPayment): void
    {
        echo "You want this coffee type: $coffeeType\n";
    }
}
