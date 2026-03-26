<?php

declare(strict_types=1);

namespace DecoratorPattern;

require_once 'Beverage.php';

final class Espresso extends Beverage {
    public function __construct()
    {
        $this->description = 'Espresso';
    }

    public function cost(): float
    {
        return 1.99;
    }
}