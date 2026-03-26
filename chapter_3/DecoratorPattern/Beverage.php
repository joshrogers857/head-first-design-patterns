<?php

declare(strict_types=1);

namespace DecoratorPattern;

abstract class Beverage {
    public string $description = 'Unknown Beverage';

    public function getDescription(): string
    {
        return $this->description;
    }

    public abstract function cost(): float;
}