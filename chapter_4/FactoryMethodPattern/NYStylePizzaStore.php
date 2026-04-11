<?php

declare(strict_types=1);

namespace FactoryMethodPattern;

require_once 'PizzaStore.php';
require_once 'Pizza.php';
require_once 'NYStyleCheesePizza.php';

use Exception;

final class NYStylePizzaStore extends PizzaStore {
    protected function createPizza(string $type): Pizza
    {
        if ($type === 'cheese') {
            return new NYStyleCheesePizza();
        }

        // TODO: other pizza types would go here

        throw new Exception("Unrecognised Pizza type: '{$type}'");
    }
}