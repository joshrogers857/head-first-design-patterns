<?php

declare(strict_types=1);

namespace DecoratorPattern;

require_once 'Beverage.php';

final class HouseBlend extends Beverage {
    public function __construct()
    {
        $this->description = 'House Blend';
    }

    public function cost(): float
    {
        return 0.89;
    }
}