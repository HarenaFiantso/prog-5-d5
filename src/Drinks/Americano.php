<?php

namespace HarenaFiantso\Coffee\Drinks;

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
