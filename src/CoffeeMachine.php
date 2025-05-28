<?php

namespace HarenaFiantso\Coffee;

class CoffeeMachine
{
    public function makeCoffee(string $coffeeType, string $methodPayment): void
    {
        echo "You want this coffee type: $coffeeType\n";
    }
}
