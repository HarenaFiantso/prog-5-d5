<?php

namespace HarenaFiantso\Coffee;

class CoffeeFactory
{
    public static function create(string $type): Coffee
    {
        return match (strtolower($type)) {
            '1', 'espresso' => new Espresso(),
            '2', 'cappuccino' => new Cappuccino(),
            '3', 'americano' => new Americano(),
            '4', 'latte' => new Latte(),
            default => throw new \InvalidArgumentException("Boisson inconnue.")
        };
    }
}