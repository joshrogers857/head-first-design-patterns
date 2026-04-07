<?php

declare(strict_types=1);

namespace FactoryMethodPattern;

abstract class PizzaStore {
    public function __construct()
    {
        throw new \Exception('Not implemented');
    }

    protected abstract function createPizza(string $type);
}