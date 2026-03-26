<?php

declare(strict_types=1);

namespace DecoratorPattern;

require_once 'Beverage.php';

final class DarkRoast extends Beverage {
    public function __construct()
    {
        $this->description = 'Dark Roast';
    }

    public function cost(): float
    {
        return 0.99;
    }
}