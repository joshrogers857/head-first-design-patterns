<?php

declare(strict_types=1);

namespace DecoratorPattern;

require_once 'CondimentDecorator.php';

final class Soy extends CondimentDecorator {

    public function __construct(
        private Beverage $beverage,
    )
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Soy';
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.15;
    }
}