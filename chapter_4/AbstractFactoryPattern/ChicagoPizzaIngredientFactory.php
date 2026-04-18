<?php

namespace AbstractFactoryPattern;

require_once 'PizzaIngredientFactory.php';
require_once 'Dough.php';
require_once 'Sauce.php';
require_once 'Cheese.php';
require_once 'Veggies.php';
require_once 'Pepperoni.php';
require_once 'Clams.php';
require_once 'ThickCrustDough.php';
require_once 'PlumTomatoSauce.php';
require_once 'MozarellaCheese.php';
require_once 'BlackOlives.php';
require_once 'Spinach.php';
require_once 'Eggplant.php';
require_once 'SlicedPepperoni.php';
require_once 'FrozenClams.php';

final class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    function createCheese(): Cheese
    {
        return new MozarellaCheese();
    }

    /** @return Veggies[] */
    function createVeggies(): array
    {
        return [new BlackOlives(), new Spinach(), new Eggplant()];
    }

    function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    function createClams(): Clams
    {
        return new FrozenClams();
    }
}