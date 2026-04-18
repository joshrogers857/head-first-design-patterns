<?php

declare(strict_types=1);

namespace AbstractFactoryPattern;

require_once 'PizzaStore.php';
require_once 'Pizza.php';
require_once 'CheesePizza.php';
require_once 'ClamPizza.php';
require_once 'NYPizzaIngredientFactory.php';

use Exception;

final class NYStylePizzaStore extends PizzaStore {
    protected function createPizza(string $type): Pizza
    {
        $ingredientFactory = new NYPizzaIngredientFactory();
        $pizza = null;

        if ($type === 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName("NY Style Cheese Pizza");
            return $pizza;
        }

        if ($type === 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName("NY Style Clam Pizza");
            return $pizza;
        }

        // TODO: other pizza types would go here

        throw new Exception("Unrecognised Pizza type: '{$type}'");
    }
}