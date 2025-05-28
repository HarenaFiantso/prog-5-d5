<?php

namespace HarenaFiantso\Coffee\Drinks;

abstract class Coffee
{
    public function __construct(
        protected int $sugar = 0 {
        get {
        return $this->sugar;
        }
        },
        protected bool $milk = false,
        protected string $intensity = 'medium' {
        get {
        return $this->intensity;
        }
        },
    ) {
    }

    abstract public function getName(): string;

    abstract public function getPrice(): float;

    public function hasMilk(): bool
    {
        return $this->milk;
    }

    public function describe(): string
    {
        return "
        {$this->getName()} ({$this->intensity}, sugar: {$this->sugar}, milk: " . ($this->milk ? 'yes' : 'no') . ")";
    }
}
