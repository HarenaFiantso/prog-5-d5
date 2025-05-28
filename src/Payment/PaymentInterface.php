<?php

namespace HarenaFiantso\Coffee\Payment;

interface PaymentInterface
{
    /**
     * @throws PaymentException
     */
    public function pay(float $amount): void;
}
