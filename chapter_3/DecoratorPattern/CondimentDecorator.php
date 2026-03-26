<?php

declare(strict_types=1);

namespace DecoratorPattern;

require_once 'Beverage.php';

abstract class CondimentDecorator extends Beverage {
    private Beverage $beverage;

    // Ideally, we would re-declare getDescription() as abstract here,
    // to force subclasses to reimplement it with their additional logic.
    // PHP does not support this however, so it is omitted.
}