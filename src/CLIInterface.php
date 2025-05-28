<?php

namespace HarenaFiantso\Coffee;

use HarenaFiantso\Coffee\Application\CoffeeMachine\CoffeeMachine;

class CLIInterface
{
    public function run(): void
    {
        $machine = new CoffeeMachine();

        echo "1. Espresso\n2. Cappuccino\n3. Americano\n4. Latte\nYour choice : ";
        $choice = trim(fgets(STDIN));

        echo "Payment method ? (banking card/jeton) : ";
        $method = trim(fgets(STDIN));

        try {
            $machine->makeCoffee($method, $choice);
            echo "Your coffee is ready, enjoy!\n";
        } catch (\Exception $exception) {
            echo "Ops! Error making coffee: " . $exception->getMessage() . "\n";
        }

        echo "Welcome to Coffee provider";
    }
}
