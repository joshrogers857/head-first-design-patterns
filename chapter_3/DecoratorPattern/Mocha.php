<?php

declare(strict_types=1);

namespace DecoratorPattern;

require_once 'CondimentDecorator.php';

final class Mocha extends CondimentDecorator {

    public function __construct(
        private Beverage $beverage,
    )
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Mocha';
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.20;
    }
}