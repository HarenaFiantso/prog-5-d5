<?php

namespace HarenaFiantso\Coffee\Drinks;

use HarenaFiantso\Coffee\Coffee;

class Americano extends Coffee
{
    public function getName(): string
    {
        return 'Americano';
    }

    public function getPrice(): float
    {
        return 1.50;
    }
}
