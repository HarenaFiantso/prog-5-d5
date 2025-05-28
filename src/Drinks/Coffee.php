<?php

namespace HarenaFiantso\Coffee\Drinks;

abstract class Coffee
{
    abstract public function getName(): string;

    abstract public function getPrice(): float;
}
