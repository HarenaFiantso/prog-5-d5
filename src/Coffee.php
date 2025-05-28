<?php

namespace HarenaFiantso\Coffee;

abstract class Coffee
{
    abstract public function getName(): string;

    abstract public function getPrice(): float;
}
