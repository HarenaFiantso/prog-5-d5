<?php

namespace HarenaFiantso\Coffee\Drinks;

use HarenaFiantso\Coffee\Coffee;

class Latte extends Coffee
{
    public function getName(): string
    {
        return 'Latte';
    }

    public function getPrice(): float
    {
        return 1.50;
    }
}
