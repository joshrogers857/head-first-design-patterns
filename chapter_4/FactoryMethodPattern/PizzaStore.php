<?php

declare(strict_types=1);

namespace FactoryMethodPattern;

abstract class PizzaStore {
    final public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    protected abstract function createPizza(string $type): Pizza;
}