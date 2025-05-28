<?php

namespace HarenaFiantso\Coffee;

use HarenaFiantso\Coffee\Payment\CardPayment;
use HarenaFiantso\Coffee\Payment\PaymentException;
use HarenaFiantso\Coffee\Payment\TokenPayment;
use InvalidArgumentException;

class CoffeeMachine
{
    /**
     * @throws PaymentException
     */
    public function makeCoffee(string $coffeeType, string $methodPayment): void
    {
        $coffee = CoffeeFactory::create($coffeeType);

        match ($methodPayment) {
            'banking card' => new CardPayment()->pay($coffee->getPrice()),
            'jeton' => new TokenPayment()->pay($coffee->getPrice()),
            default => throw new InvalidArgumentException("Payment method not valid")
        };
    }
}
