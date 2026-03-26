<?php

declare(strict_types=1);

namespace DecoratorPattern;

require_once 'CondimentDecorator.php';

final class Whip extends CondimentDecorator {

    public function __construct(
        private Beverage $beverage,
    )
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Whip';
    }

    public function cost(): float
    {
        return $this->beverage->cost() + 0.10;
    }
}