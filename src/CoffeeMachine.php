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
    public function makeCoffee(
        string $coffeeName,
        string $paymentMethod,
        int $sugar = 0,
        bool $milk = false,
        string $intensity = 'medium'
    ): void {
        $coffee = CoffeeFactory::create($coffeeName, $sugar, $milk, $intensity);

        $payment = match ($paymentMethod) {
            'carte' => new CardPayment(),
            'jeton' => new TokenPayment(),
            default => throw new InvalidArgumentException("Payment method {$paymentMethod} not supported."),
        };

        $payment->pay($coffee->getPrice());

        echo "Preparing your: " . $coffee->describe() . "...\n";
        echo "Your coffee is ready ! Enjoy\n";
    }
}
