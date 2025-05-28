<?php

namespace HarenaFiantso\Coffee\Drinks;

use HarenaFiantso\Coffee\Coffee;

class Espresso extends Coffee
{
    public function getName(): string
    {
        return 'Espresso';
    }

    public function getPrice(): float
    {
        return 1.50;
    }
}
