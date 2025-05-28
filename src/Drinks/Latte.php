<?php

namespace HarenaFiantso\Coffee\Drinks;

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
