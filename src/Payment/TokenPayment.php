<?php

namespace HarenaFiantso\Coffee\Payment;

class TokenPayment implements PaymentInterface
{
    /**
     * @throws PaymentException
     */
    public function pay(float $amount): void
    {
        $tokenValue = 1.5;

        if ($amount > $tokenValue) {
            throw new PaymentException("Jeton insufficient for this payment amount {$amount}€.");
        }

        echo "Payment {$amount}€ accepted\n";
    }
}
