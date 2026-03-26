<?php

declare(strict_types=1);

namespace DecoratorPattern;

require_once 'Espresso.php';
require_once 'DarkRoast.php';
require_once 'Mocha.php';
require_once 'Whip.php';
require_once 'HouseBlend.php';
require_once 'Soy.php';

final readonly class StarbuzzCoffee {

    public function init(): void
    {
        $beverage = new Espresso();
        print($beverage->getDescription() . ' $' . $beverage->cost() . "\n");

        $beverage2 = new DarkRoast();
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Whip($beverage2);
        print($beverage2->getDescription() . ' $' . $beverage2->cost() . "\n");

        $beverage3 = new HouseBlend();
        $beverage3 = new Soy($beverage3);
        $beverage3 = new Mocha($beverage3);
        $beverage3 = new Whip($beverage3);
        print($beverage3->getDescription() . ' $' . $beverage3->cost() . "\n");
    }
}