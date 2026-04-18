<?php

declare(strict_types=1);

namespace AbstractFactoryPattern;

require_once 'NYStylePizzaStore.php';
require_once 'ChicagoStylePizzaStore.php';

final class PizzaTestDrive {
    public function init(): void
    {
        $nyStore = new NYStylePizzaStore();
        $chicagoStore = new ChicagoStylePizzaStore();

        $pizza = $nyStore->orderPizza('cheese');
        print("Ethan ordered a {$pizza->getName()}\n");

        $pizza = $chicagoStore->orderPizza('cheese');
        print("Joel ordered a {$pizza->getName()}\n");
    }
}