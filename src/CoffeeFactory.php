<?php

namespace HarenaFiantso\Coffee;

use HarenaFiantso\Coffee\Drinks\{Espresso, Cappuccino, Americano, Latte};

class CoffeeFactory
{
    public static function create(string $type): Americano|Cappuccino|Espresso|Latte
    {
        return match (strtolower($type)) {
            '1', 'espresso' => new Espresso(),
            '2', 'cappuccino' => new Cappuccino(),
            '3', 'americano' => new Americano(),
            '4', 'latte' => new Latte(),
            default => throw new \InvalidArgumentException("Drinks not found")
        };
    }
}
