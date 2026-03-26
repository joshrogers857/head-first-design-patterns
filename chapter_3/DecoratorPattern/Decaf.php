<?php

declare(strict_types=1);

namespace DecoratorPattern;

require_once 'Beverage.php';

final class Decaf extends Beverage {
    public function __construct()
    {
        $this->description = 'Decaf';
    }

    public function cost(): float
    {
        return 1.05;
    }
}