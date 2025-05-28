<?php

namespace HarenaFiantso\Coffee\Drinks;

use HarenaFiantso\Coffee\Coffee;

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
