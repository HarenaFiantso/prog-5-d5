<?php

namespace HarenaFiantso\Coffee;

use HarenaFiantso\Coffee\Drinks\{Espresso, Cappuccino, Americano, Latte};
use InvalidArgumentException;

class CoffeeFactory
{
    public static function create(
        string $type,
        int $sugar = 0,
        bool $milk = false,
        string $intensity = 'medium'
    ): Americano|Cappuccino|Espresso|Latte {
        return match (strtolower($type)) {
            'espresso' => new Espresso($sugar, $milk, $intensity),
            'latte' => new Latte($sugar, $milk, $intensity),
            'americano' => new Americano($sugar, $milk, $intensity),
            'cappuccino' => new Cappuccino($sugar, $milk, $intensity),
            default => throw new InvalidArgumentException("Invalid drink : $type"),
        };
    }
}
