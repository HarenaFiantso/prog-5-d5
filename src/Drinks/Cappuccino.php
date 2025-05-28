<?php

namespace HarenaFiantso\Coffee\Drinks;

class Cappuccino extends Coffee
{
    public function getName(): string
    {
        return 'Cappuccino';
    }

    public function getPrice(): float
    {
        return 1.50;
    }
}
