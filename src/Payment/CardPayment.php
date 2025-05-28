<?php

namespace HarenaFiantso\Coffee\Payment;

class CardPayment
{
    /**
     * @throws PaymentException
     */
    public function pay(float $amount): void
    {
        if ($amount > 5.00) {
            throw new PaymentException("Not enough money");
        }
        echo "$amount accepted with this card.\n";
    }
}
